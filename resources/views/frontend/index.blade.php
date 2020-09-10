@extends('frontend.master')
@section('title','Trang chủ')
@section('nav')
<div class="text-center cover-menu-bottom">
    <div class="container">
            <a class="web-name" href="">Thông tin công nghệ</a>
            <span>Nơi tổng hợp những kiến thức về công nghệ</span>
{{--            <nav>--}}
{{--                <ul>--}}
{{--                    @foreach($cate as $cate)--}}
{{--                    <li><a href={{ url('nav/'.$cate->id) }}>{{ $cate->cate_name }}</a></li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </nav>--}}
            <nav>
                <ul>
                    <li><a href="">Laptop</a></li>
                    <li><a href="">Smartphone</a></li>
                    <li><a href="">Kiến thức thiết bị</a></li>
                    <li><a href="">Tin công nghệ</a></li>
                    <li><a href="">Lập trình</a></li>
                    <li><a href="">Hệ điều hành</a></li>
                    <li><a href="">Giải dáp thắc mắc</a></li>
                </ul>
            </nav>
    </div>
</div>
@stop
@section('main')
    <main>
{{--        <div class="container">--}}
{{--            @foreach($info_post as $info)--}}
{{--                <div class="block-content">--}}
{{--                    <a class="title-content" href="">--}}
{{--                        <h1>{{$info->post_name}}</h1>--}}
{{--                    </a>--}}
{{--                    <div class="main-content">--}}
{{--                        <a class="img-des" href=""><img src={{url('images/'.$info->post_img)}} alt="may-tinh"></a>--}}
{{--                        <div class="short-des">--}}
{{--                            {{$info->post_des}}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--            <ul class="pagination">--}}
{{--                {{$info_post->links()}}--}}
{{--            </ul>--}}
{{--        </div>--}}
        <div class="container">
            <div class="block-content">
                    <a class="title-content" href="">
                        <h1>Thay đổi chế độ đọc ghi lên đĩa cứng (io scheduling) để tăng tốc ubuntu</h1>
                    </a>
                    <div class="main-content">
                        <a class="img-des" href=""><img src="{{ asset('images/ubuntu-php.jpg') }}" alt="may-tinh"></a>
                        <div class="short-des">
                            IO scheduling là cách thức mà hệ điều hành quyết định thứ tự các khối lệnh vào/ra sẽ được chuyển đến bộ nhớ lưu trữ. Mặc định ubuntu 14.04 sử dụng chế độ deadline, đây không phải là chế độ đạt tốc độ cao nhất mà ổ cứng hỗ trợ, tuy nhiên chúng ta có thể thay đổi chế độ này để đạt hiệu quả cao nhất cho ubuntu.
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <a class="title-content" href="">
                        <h1>PSR-2: Coding Style Guide</h1>
                    </a>
                    <div class="main-content">
                        <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                        <div class="short-des">
                            The intent of this guide is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code.
                        </div>
                    </div>
                </div>

            <div class="block-content">
                <a class="title-content" href="">
                    <h1></h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        IO scheduling là cách thức mà hệ điều hành quyết định thứ tự các khối lệnh vào/ra sẽ được chuyển đến bộ nhớ lưu trữ. Mặc định ubuntu 14.04 sử dụng chế độ deadline, đây không phải là chế độ đạt tốc độ cao nhất mà ổ cứng hỗ trợ, tuy nhiên chúng ta có thể thay đổi chế độ này để đạt hiệu quả cao nhất cho ubuntu.
                    </div>
                </div>
            </div>
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>PSR-2: Coding Style Guide</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        The intent of this guide is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code.
                    </div>
                </div>
            </div>
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>PSR-2: Coding Style Guide</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        The intent of this guide is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code.
                    </div>
                </div>
            </div>
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>PSR-2: Coding Style Guide</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        The intent of this guide is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code.
                    </div>
                </div>
            </div>
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>PSR-2: Coding Style Guide</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/focus.png') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        The intent of this guide is to reduce cognitive friction when scanning code from different authors. It does so by enumerating a shared set of rules and expectations about how to format PHP code.
                    </div>
                </div>
            </div>
            <ul class="pagination">

            </ul>
        </div>
    </main>
@stop
