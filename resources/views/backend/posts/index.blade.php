@extends('backend.master')
@section('title','Danh sách bài viết')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Danh sách bài viết</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" width="5%">ID</th>
                        <th class="text-center" width="20%">Danh mục</th>
                        <th class="text-uppercase" width="20%">Tiêu đề</th>
                        <th class="text-uppercase" width="50%">Mô tả ngắn</th>
                        <th class="text-uppercase text-center" colspan="3">Active</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td class="text-center font-weight-bold">{{ $post->id }}</td>
                                <td class="text-center font-weight-bold">{{ $post->category->name }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->description }}</td>
                                <td><a class="btn btn-primary" href="{{ route('admin.post.edit', $post->id) }}">Xem</a></td>
                                <td>
                                    <form action="{{ route('admin.post.destroy', ['id' => $post->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.post.create') }}">Thêm bài viết mới</a>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script src="{{ asset('assets/backend/js/postTextEditor.js') }}"></script>
@stop
