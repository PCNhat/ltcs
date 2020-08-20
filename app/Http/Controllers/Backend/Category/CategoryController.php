<?php

namespace App\Http\Controllers\Backend\Category;

use App\Category;
use App\Http\Controllers\Controller;
use App\Modules\Categories\Requests\AddCategoryRequest;
use App\Modules\Categories\Requests\UpdateCategoryRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Modules\Categories\Services\CategoryServiceInterface;

class CategoryController extends Controller
{
    /**
     * @var CategoryServiceInterface $categoryService
     */
    protected $categoryService;

    /**
     * CategoryController constructor.
     * @param CategoryServiceInterface $categoryService
     */
    public function __construct(CategoryServiceInterface $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $categories = $this->categoryService->getListCategories();

        return view('backend.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        $categories = $this->categoryService->getListCategories();

        return view('backend.categories.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  AddCategoryRequest $request
     * @return RedirectResponse
     */
    public function store(AddCategoryRequest $request): RedirectResponse
    {
        $data = $request->only('name', 'parent_id', 'description');
        if ($this->categoryService->addCategory($data)) {
           return redirect()->back()->with(['success' => 'Thêm danh mục thành công!']);
        }

        return redirect()->back()->withErrors('Thêm danh mục thất bại!');
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
     * @return View
     */
    public function edit($id): View
    {
        $categoryInformation = $this->categoryService->findCategory($id);
        $categories = $this->categoryService->getListCategories();
        return view('backend.categories.update', compact('categoryInformation', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update($id, UpdateCategoryRequest $request): RedirectResponse
    {
        $data = $request->only('name', 'parent_id', 'description');
        if ($this->categoryService->updateCategory($id, $data)) {
            return redirect()->route('admin.category.index')->with(['success' => 'Sửa danh mục thành công!']);
        }

        return redirect()->back()->with('Sửa danh mục thất bại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        if ($this->categoryService->deleteCategories($id)) {
            return redirect()->back()->with(['success' => 'Xóa danh mục thành công!']);
        }
        return redirect()->back()->withErrors('Xóa danh mục thất bại!');
    }
}
