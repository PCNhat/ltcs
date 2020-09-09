@extends('frontend.master')
@section('title', 'Bài viết')
@section('main')
    @include('frontend/block/title-page')
    <main>
        <div class="container">
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>Tấm nền màn hình là gì? Các công nghệ sản xuất tấm nền.</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/posts/tamnen.jpg') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        Chắc chắn các thành phần của tấm nền màn hình sẽ là một yếu tố làm mà những bạn đang và mới tìm hiểu về các linh kiện máy tính sẽ rất quan tâm. Vậy tấm nền TN / VA / IPS trên màn hình máy tính là gì và công dụng của chúng ảnh hưởng thế nào với mỗi người dùng ? Hãy cùng tìm hiểu chi tiết dưới đây nhé.
                    </div>
                </div>
            </div>
            <div class="block-content">
                <a class="title-content" href="">
                    <h1>RAM là gì? Các loại RAM phổ biến hiện nay?</h1>
                </a>
                <div class="main-content">
                    <a class="img-des" href=""><img src="{{ asset('images/posts/Ram.jpg') }}" alt="may-tinh"></a>
                    <div class="short-des">
                        RAM là một thành phần quan trọng không thể thiếu trên Laptop. Vậy RAM là gì, vai trò của nó ra sao? RAM (Random Access Memory) là bộ nhớ truy xuất ngẫu nhiên. Khi mở một phần mềm trên Laptop thì dữ liệu sẽ được truyền tải từ ổ đĩa cứng lên RAM và truyền tải vào CPU để xử lý, sau đó lưu ngược lại vào ổ cứng vì RAM có tốc độ rất nhanh hơn rất nhiều lần so với ổ cứng.
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
