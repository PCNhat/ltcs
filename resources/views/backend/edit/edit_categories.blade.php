@extends('backend.master')
@section('title','Sửa danh mục')
@section('main')
<section class="form-input">
    <h1>Sửa danh mục</h1>

    {{-- include file errors and success --}}
    {{-- ---------------------------------------- --}}
    @include('errors/errors')
    @include('success/success')
    {{-- ---------------------------------------- --}}
    
    <form class="form-group" action="" method="post">
        @csrf
        @foreach($cate as $cate)
            <div>
                <label for="">Tên danh mục</label>
                <input class="form-control" type="text" name="cate_name" value="{{$cate->cate_name}}">
            </div>
            <div>
                <label for="">Mô tả danh mục</label>
                <input class="form-control" type="text" name="cate_des" value="{{$cate->cate_des}}">
            </div>
            <div>
                <label for="">Chế độ hiển thị</label>
                <input class="form-control" type="number" name="mode" value={{$cate->mode}}>
            </div>
            <button class="btn btn-primary" type="submit">Sửa</button>
            <button class="btn btn-danger" type="reset">Xóa</button>
        @endforeach
    </form>
</section>
@stop