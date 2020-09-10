<?php

namespace App\Http\Controllers\Backend\Contact;

use App\Http\Controllers\Controller;
use App\Modules\Contacts\Services\ContactServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    protected $contactService;

    public function __construct(ContactServiceInterface $contactService)
    {
        $this->contactService = $contactService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $userId = auth()->id();
        if (!empty($userId)) {
            $conditions = [
                ['user_id', $userId],
                ['is_show', 1],
                ['parent_contact_id', 0]
            ];
            $contacts = $this->contactService->getFilterAllCommentContact($conditions,'desc', 10);

            return view('backend.contacts.index', compact('contacts'));
        }

        return view('backend.contacts.index', 'contacts');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $userId = auth()->id();
        if (!empty($userId)) {
            $data = $request->only('full_name', 'email', 'subject', 'content');
            $data['user_id'] = $userId;
            $this->contactService->addCommentContact($data);

            return redirect()->back()->with(['success' => 'Gửi thành công! Chờ quản trị viên xử lý.']);
        }

        return redirect()->back()->withErrors('Bạn chưa đăng nhập!');
    }

    /**
     * Hidden contact
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function hidden(int $id)
    {
        $this->contactService->updateCommentContact($id, ['is_show' => 0]);

        return redirect()->back();
    }

    /**
     * Show list contact
     *
     * @return View
     */
    public function listContact()
    {
        $conditions = [
            ['is_show', 1],
            ['parent_contact_id', 0]
        ];
        $contacts = $this->contactService->getFilterAllCommentContact($conditions,'desc', 10);

        return view('backend.modules.contacts.index', compact('contacts'));
    }

    public function storeReply(Request $request, int $id) {
        $admin = auth()->user();
        $data = $request->only('content');
        $data['user_id'] = $admin->id;
        $data['parent_contact_id'] = $id;
        $data['email'] = $admin->email;
        $data['full_name'] = $admin->first_name . ' ' . $admin->last_name . ' - ' . $admin->username;
        $data['is_show'] = 1;
        $this->contactService->addCommentContact($data);

        return redirect()->back()->with(['success' => 'Gửi phản hồi thành công!']);
    }

}
