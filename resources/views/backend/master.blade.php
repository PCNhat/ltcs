<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{url('assets/bootstrap/css/bootstrap.min.css')}}>
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href={{url('assets/backend/css/style.css')}}>
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <div class="border-bottom header-cover">
            <a class="narbar-brand" href="">
                <img class="logo" src={{url('images/brand/logo.svg')}} alt="">
            </a>
            <a class="bars" href="">
                <i class="fas fa-bars"></i>
            </a>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="">Users</a></li>
                <li><a href="">Settings</a></li>
            </ul>
            <div class="float-right">
                <a href="">
                    <img class="rounded-circle" width="30%" src={{url('images/avatars/1.jpg')}} alt="">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        {{$name}}
                        
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
                <li class="nav-title">DANH MỤC</li>
                <li><a href={{url('admin/add-categories')}}>Thêm danh mục</a></li>
                <li><a href={{url('admin/list-categories')}}>Danh sách</a></li>
                <li class="nav-title">TIÊU ĐỀ BÀI VIẾT</li>
                <li><a href={{url('admin/add-info-post')}}>Thêm tiêu đề</a></li>
                <li><a href={{url('admin/list-info-post')}}>Danh sách</a></li>
                <li class="nav-title">THEME</li>
                <li><a href="">Colors</a></li>
                <li><a href="">Typography</a></li>
            </ul>
        </div>
        <main>
            @yield('main')
        </main>
    </div>

    <footer class="text-center">
        <a href="">CoreUI</a> © 2018 creativeLabs.
    </footer>
</body>

</html>