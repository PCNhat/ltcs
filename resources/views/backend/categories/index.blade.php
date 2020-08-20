@extends('backend.master')
@section('title','Danh sách danh mục')
@section('main')
    <section class="list">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Danh sách danh mục</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th class="text-center" width="6%">Parent ID</th>
                            <th class="text-uppercase" width="20%">Tên danh mục</th>
                            <th class="text-uppercase">Mô tả</th>
                            <th class="text-uppercase text-center" colspan="2" width="10%">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td class="font-weight-bold text-center">{{ $category->id }}</td>
                                <td class="font-weight-bold text-center">{{ $category->parent_id }}</td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td><a class="btn btn-primary" href="{{ route('admin.category.edit', ['id' => $category]) }}">Sửa</a></td>
                                <td>
                                    <form action="{{ route('admin.category.destroy', ['id' => $category->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                            @foreach($category->childrenCategories as $childCategory)
                                @include('backend.categories.block.child_category_table', ['childCategory' => $childCategory, 'dash' => 1])
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.category.create') }}">Thêm danh mục mới</a>
            </div>
        </div>
    </section>
@stop
