@extends('backend.master')
@section('title','Danh sách tiêu đề bài viết')
@section('main')
    <section class="list">
        <h1>Danh sách tiêu đề bài viết</h1>
        {{-- include file errors and success --}}
        {{-- ---------------------------------------- --}}
        @include('errors/errors')
        @include('success/success')
        {{-- ---------------------------------------- --}}
        
        <table class="table table-hover table-bordered">
            <thead>
                <td width="5%"><center><b>STT</b></center></td>
                <td width="15%"><center><b>Danh mục</b></center></td>
                <td width="15%"><center><b>Tiêu đề</b></center></td>
                <td width="10%"><center><b>Hình ảnh</b></center></td>
                <td><center><b>Mô tả</b></center></td>
                <td width="5%"></td>
                <td width="5%"></td>

            </thead>
            @php
                $stt = 0;
            @endphp   
            @foreach($info_post as $info)
                @php
                    $stt++;
                @endphp
                <tr>
                    <td><center>{{$stt}}</center></td>
                    <td>
                        @foreach($categories as $cate)
                            @if($cate->id == $info->cate_id)
                                {{$cate->cate_name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$info->post_name}}</td>
                    <td><center><img width="100%" src="{{url('images/'.$info->post_img)}}" alt="{{$info->post_img}}"></center></td>
                    <td>{{$info->post_des}}</td>
                    <td><a href={{url('admin/edit/info-post/'.$info->id)}} class="btn btn-primary"><b>Sửa</b></a></td>
                    <td><a href={{url('admin/delete/info-post/'.$info->id)}} class="btn btn-danger"><b>Xóa</b></a></td>
                </tr>
            @endforeach
        </table>
        <ul class="pagination">
            {{$info_post->links()}}
        </ul>
    </section>
@stop