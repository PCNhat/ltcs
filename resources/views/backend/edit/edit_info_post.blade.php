@extends('backend.master')
@section('title','Sửa tiêu đề')
@section('main')
<section class="form-input">
    <h1>Sửa phần giới thiệu cho bài viết</h1>

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
        @foreach($info as $info)
            <div>
                <label for="">Tiêu đề bài viết</label>
                <input class="form-control" type="text" name="post_name" value="{{$info->post_name}}">
            </div>
            <div>
                <label for="">Hình ảnh minh họa</label>
                <input class="form-control" type="file" name="post_img" value="{{$info->post_img}}">
            </div>
            <div>
                <label for="">Mô tả ngắn về bài viết</label>
                <input class="form-control" type="text" name="post_des" value="{{$info->post_des}}">
            </div>
        @endforeach
        <button class="btn btn-primary" type="submit">Sửa</button>
        <button class="btn btn-danger" type="reset">Xóa</button>
    </form>
</section>
@stop