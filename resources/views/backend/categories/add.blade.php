@extends('backend.master')
@section('title','Thêm danh mục')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Thêm danh mục</div>
            <div class="card-body">
                <form class="form-group" action="{{ route('admin.category.store') }}" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label for="frm-category-name">Tên danh mục</label>
                        <input class="form-control" id="frm-category-name" type="text" name="name" placeholder="Tên danh mục">
                        @error('name')
                            <span class="text-danger font-italic">*{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mt-3">
                        <label for="frm-parent-category">Danh mục cha</label>
                        <select class="form-control" name="parent_id" id="frm-parent-category">
                            <option value="0">Không có</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @foreach($category->childrenCategories as $childCategory)
                                    @include('backend.categories.block.child_category_select', ['childCategory' => $childCategory, 'dash' => 1])
                                @endforeach
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="frm-category-description">Mô tả danh mục</label>
                        <textarea class="form-control" id="frm-category-description" type="text" name="description" rows="3" placeholder="Mô tả danh mục"></textarea>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success" type="submit">Thêm</button>
                        <button class="btn btn-secondary" type="reset">Làm mới</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
@stop
