<?php

namespace App\Http\Controllers\Backend\Post;

use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Posts\Requests\StorePostRequest;
use App\Modules\Posts\Services\PostServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    use FileHelperTrait;

    /**
     * @var CategoryServiceInterface $categoryService
     */
    protected $categoryService;

    /**
     * @var PostServiceInterface $postService
     */
    protected $postService;

    public function __construct
    (
        CategoryServiceInterface $categoryService,
        PostServiceInterface $postService
    )
    {
        $this->categoryService = $categoryService;
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('backend.posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->categoryService->getListCategories();

        return view('backend.posts.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePostRequest $request
     * @return RedirectResponse
     */
    public function store(StorePostRequest $request): RedirectResponse
    {
        $data = $request->only('title', 'category_id', 'description', 'content');
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->uploadFile($request->file('avatar'), 'posts');
        }
        $data['user_id'] = 1;
        $post = $this->postService->storePost($data);
        if (!empty($post)) {
            return redirect()->back()->with(['success' => 'Thêm bài viết thành công!']);
        }

        return redirect()->back()->withErrors('Thêm bài viết thất bại!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
