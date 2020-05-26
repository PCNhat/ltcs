@extends('backend.master')
@section('title','Danh sách danh mục')
@section('main')
    <section class="list">
        <h1>Danh sách danh mục</h1>
        {{-- include file errors and success --}}
        {{-- ---------------------------------------- --}}
        @include('errors/errors')
        @include('success/success')
        {{-- ---------------------------------------- --}}
        
        <table class="table table-hover table-bordered">
            <thead>
                <td width="5%"><center><b>STT</b></center></td>
                <td width="15%"><center><b>Tên danh mục</b></center></td>
                <td><center><b>Mô tả</b></center></td>
                <td width="5%"><center><b>Mode</b></center></td>
                <td width="5%"></td>
                <td width="5%"></td>

            </thead>
            @php
                $stt = 0;
            @endphp   
            @foreach($cate as $cate)
                @php
                    $stt++;
                @endphp
                <tr>
                    <td><center>{{$stt}}</center></td>
                    <td>{{$cate->cate_name}}</td>
                    <td>{{$cate->cate_des}}</td>
                    <td><center>{{$cate->mode}}</center></td>
                    <td><a href={{url('admin/edit/categories/'.$cate->id)}} class="btn btn-primary"><b>Sửa</b></a></td>
                    <td><a href={{url('admin/delete/categories/'.$cate->id)}} class="btn btn-danger"><b>Xóa</b></a></td>
                </tr>
            @endforeach
        </table>
        
    </section>
@stop