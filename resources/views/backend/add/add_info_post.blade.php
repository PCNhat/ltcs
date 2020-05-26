@extends('backend.master')
@section('title','Thêm danh mục')
@section('main')
<section class="form-input">
    <h1>Thêm phần giới thiệu cho bài viết</h1>

    {{-- include file errors and success --}}
    {{-- ---------------------------------------- --}}
    @include('errors/errors')
    @include('success/success')
    {{-- ---------------------------------------- --}}

    <form class="form-group" action="" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="">Danh mục</label>
            <select class="form-control" name="cate_id">
                @foreach($categories as $cate)
                    <option value={{$cate->id}}>{{$cate->cate_name}}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="">Tiêu đề bài viết</label>
            <input class="form-control" type="text" name="post_name">
        </div>
        <div>
            <label for="">Hình ảnh minh họa</label>
            <input class="form-control" type="file" name="post_img">
        </div>
        <div>
            <label for="">Mô tả ngắn về bài viết</label>
            <input class="form-control" type="text" name="post_des">
        </div>
        <button class="btn btn-primary" type="submit">Thêm</button>
        <button class="btn btn-danger" type="reset">Xóa</button>
    </form>
</section>
@stop