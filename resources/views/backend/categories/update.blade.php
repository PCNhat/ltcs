@extends('backend.master')
@section('title','Sửa danh mục')
@section('main')
    <section class="form-input">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Sửa danh mục</div>
            <div class="card-body">
                <form class="form-group" action="{{ route('admin.category.update', ['id' => $categoryInformation->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mt-3">
                        <label for="frm-category-name">Tên danh mục</label>
                        <input class="form-control" id="frm-category-name" type="text" name="name" placeholder="Tên danh mục" value="{{ $categoryInformation->name }}">
                    </div>
                    <div class="mt-3">
                        <label for="frm-parent-category">Danh mục cha</label>
                        <select class="form-control" name="parent_id" id="frm-parent-category">
                            <option value="0">Không có</option>
                            @foreach($categories as $category)
                                @if ($category->id !== $categoryInformation->id)
                                    <option value="{{ $category->id }}" @if ($category->id === $categoryInformation->parent_id) {{ 'selected' }} @endif>{{ $category->name }}</option>
                                    @foreach($category->childrenCategories as $childCategory)
                                        @include('backend.categories.block.child_category_select', ['childCategory' => $childCategory, 'dash' => 1])
                                    @endforeach
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <label for="frm-category-description">Mô tả danh mục</label>
                        <textarea class="form-control" id="frm-category-description" type="text" name="description" rows="3" placeholder="Mô tả danh mục">{{ $categoryInformation->description }}</textarea>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Sửa</button>
                        <button class="btn btn-secondary" type="reset">Làm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@stop
