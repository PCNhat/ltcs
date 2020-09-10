<?php

namespace App\Http\Controllers\Backend\Post;

use App\Helpers\Traits\FileHelperTrait;
use App\Http\Controllers\Controller;
use App\Modules\Categories\Services\CategoryServiceInterface;
use App\Modules\Posts\Requests\StorePostRequest;
use App\Modules\Posts\Requests\UpdatePostRequest;
use App\Modules\Posts\Services\PostServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $posts = $this->postService->listPost();

        return view('backend.posts.index', compact('posts'));
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
        $data['user_id'] = Auth::id();
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
     * @return mixed
     */
    public function show($id)
    {
        return $this->postService->showPost($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        $categories = $this->categoryService->getListCategories();
        $post = $this->postService->showPost($id);

        return view('backend.posts.update', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostRequest $request
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdatePostRequest $request, $id)
    {
        $data = $request->only('title', 'category_id', 'description', 'content');
        if ($request->hasFile('avatar')) {
            $data['avatar'] = $this->uploadFile($request->file('avatar'), 'posts');
        }
        $data['user_id'] = Auth::id();
        $post = $this->postService->updatePost($data, $id);

        if (!empty($post)) {
            return redirect()->route('admin.post.index')->with(['success' => 'Chỉnh sửa bài viết thành công!']);
        }

        return redirect()->back()->withErrors('Chỉnh sửa bài viết thất bại!');
    }

    /**
     * Remove the specified resource from storage
     *
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $this->postService->deletePost($id);

        return  redirect()->back()->with(['success' => 'Xóa bài viết thành công!']);
    }
}
