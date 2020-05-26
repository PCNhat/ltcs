@extends('backend.master')
@section('title','Thêm danh mục')
@section('main')
<section class="form-input">
    <h1>Thêm danh mục</h1>

    {{-- include file errors and success --}}
    {{-- ---------------------------------------- --}}
    @include('errors/errors')
    @include('success/success')
    {{-- ---------------------------------------- --}}
    
    <form class="form-group" action="" method="post">
        @csrf
        <div>
            <label for="">Tên danh mục</label>
            <input class="form-control" type="text" name="cate_name">
        </div>
        <div>
            <label for="">Mô tả danh mục</label>
            <input class="form-control" type="text" name="cate_des">
        </div>
        <div>
            <label for="">Chế độ hiển thị</label>
            <input class="form-control" type="number" name="mode">
        </div>
        <button class="btn btn-primary" type="submit">Thêm</button>
        <button class="btn btn-danger" type="reset">Xóa</button>
    </form>
</section>
@stop