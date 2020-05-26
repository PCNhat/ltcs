@extends('frontend.master')
@section('title','Trang chủ')
@section('nav')
<div class="text-center cover-menu-bottom">
    <div class="container">
            <a class="web-name" href="">Lập trình cuộc sống</a>
            <span>Chỉ là blog của một thằng coder</span>
            <nav>
                <ul>
                    @foreach($cate as $cate)
                    <li><a href={{url('nav/'.$cate->id)}}>{{$cate->cate_name}}</a></li>
                    @endforeach
                    
                </ul>
            </nav>
    </div>
</div>
@stop
@section('main')
    <main>
        <div class="container container-fix">
            @foreach($info_post as $info)
                <div class="block-content">
                    <a class="title-content" href="">
                        <h1>{{$info->post_name}}</h1>
                    </a>
                    <div class="main-content">
                        <a class="img-des" href=""><img src={{url('images/'.$info->post_img)}} alt="may-tinh"></a>
                        <div class="short-des">
                            {{$info->post_des}}
                        </div>
                    </div>
                </div>
            @endforeach
            <ul class="pagination">
                {{$info_post->links()}}
            </ul>
        </div>
    </main>
@stop
