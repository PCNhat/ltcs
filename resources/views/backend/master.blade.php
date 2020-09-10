<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{url('assets/bootstrap/css/bootstrap.min.css')}}>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href={{url('assets/backend/css/style.css')}}>
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/laravel-filemanager/img/72px color.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="border-bottom header-cover">
            <a class="narbar-brand font-weight-bold" href="" style="font-size: 24px; color: #20a8d8;display: inline-block;border-right: 3px solid #20a8d8;padding-right: 46px;">
                TECHNEWS
            </a>
{{--            <a class="bars" href="">--}}
{{--                <i class="fas fa-bars"></i>--}}
{{--            </a>--}}
            <ul>
{{--                <li><a href="">Dashboard</a></li>--}}
{{--                <li><a href="">Users</a></li>--}}
{{--                <li><a href="">Settings</a></li>--}}
            </ul>
            <div class="float-right">
                <a href="">
                    <img class="rounded-circle" width="30%" src={{url('images/avatars/1.jpg')}} alt="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        {{-- {{$name}} --}}
                        Admin

                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{-- {{ csrf_field() }} --}}
                        @csrf
                    </form>
                </a>

            </div>
        </div>

    </header>
    <div class="app-body">
        <div class="side-bar">
            <ul>
                <li><a href="">Dashboard<sup>New</sup></a></li>
                <li class="nav-title text-uppercase">Thành viên</li>
                <li><a href="{{ route('admin.user.create') }}">Thêm quản trị viên</a></li>
                <li><a href={{ route('admin.user.index') }}>Danh sách</a></li>
                <li class="nav-title text-uppercase">DANH MỤC</li>
                <li><a href="{{ route('admin.category.create') }}">Thêm danh mục</a></li>
                <li><a href={{ route('admin.category.index') }}>Danh sách</a></li>
                <li class="nav-title text-uppercase">SẢN PHẨM</li>
                <li><a href="{{ route('admin.product.create') }}">Thêm sản phẩm</a></li>
                <li><a href="{{ route('admin.product.index') }}">Danh sách</a></li>
                <li class="nav-title text-uppercase">BÀI VIẾT</li>
                <li><a href="{{ route('admin.post.create') }}">Viết bài</a></li>
                <li><a href="{{ route('admin.post.index') }}">Danh sách bài viết</a></li>
                <li class="nav-title">LIÊN HỆ & ĐÓNG GÓP</li>
                <li><a href="{{ route('admin.contact.index') }}">Quản lý liên hệ</a></li>
            </ul>
        </div>
        <main>
            @include('success.success')
            @yield('main')
        </main>
    </div>

    <footer>
        Design by Phạm Công Nhật
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
    @yield('js')
</body>

</html>
