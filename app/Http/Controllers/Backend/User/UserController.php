<?php

namespace App\Http\Controllers\Backend\User;

use App\Helpers\PermissionConstant;
use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Modules\Users\Requests\AddUserRequest;
use App\Modules\Users\Services\UserServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    use FileHelperTrait;

    /**
     * @var UserServiceInterface $userSErvice
     */
    protected $userService;

    /**
     * UserController constructor.
     * @param UserServiceInterface $userService
     */
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = $this->userService->getAllUserWithRoles();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('backend.users.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AddUserRequest $request
     * @return RedirectResponse
     */
    public function store(AddUserRequest $request): RedirectResponse
    {
        $data = $request->only('first_name', 'last_name', 'username', 'email', 'phone_number', 'password');
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->uploadFile($request->file('avatar'), 'users');
        }
        $user = $this->userService->storeUser($data);
        $user->assignRole(PermissionConstant::ROLE_MOD);

        return redirect()->back()->with(['success' => 'Thêm quản trị viên thành công!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id): View
    {
        $user = $this->userService->findUser($id);

        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $result = $this->userService->destroyUser($id);
        if ($result) {
            return redirect()->back()->with(['success' => 'Xóa thành viên thành công!']);
        }

        return redirect()->back()->withErrors('Xóa thành viên thất bại!');
    }
}
