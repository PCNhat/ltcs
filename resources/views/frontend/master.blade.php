<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{url('assets/bootstrap/css/bootstrap.min.css')}}>
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="cover-menu-top">
            <a class="float-left web-name-1" href="">Thông tin công nghệ</a>
            <div class="float-right menu">
                <ul>
                    <li class="float-right"><a href={{url('author')}}>Tác giả</a></li>
                    <li class="float-right"><a href={{url('good-post')}}>Bài viết hay</a></li>
                    <li class="float-right"><a href={{url('course')}}>Khóa học</a></li>
                    <li class="float-right"><a href={{url('/')}}>Trang chủ</a></li>
                </ul>
            </div>
            <div style="clear:both"></div>
        </div>
        @yield('nav')
    </header>
    @yield('main')
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-title">Theo dõi</div>
                    <ul class="footer-menu">
                        <li><a href="">Trang chủ</a></li>
                        <li><a href="">Chúng tôi trên Facebook</a></li>
                        <li><a href="">Chúng tôi trên Youtube</a></li>
                        <li><a href="">Yêu cầu viết bài</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Link hữu ích</div>
                    <ul class="footer-menu">
                        <li><a href="">Giới thiệu về website</a></li>
                        <li><a href="">Bài viết hay</a></li>
                        <li><a href="">Điều khoản</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Website bạn bè</div>
                    <ul class="footer-menu">
                        <li><a href="">Tôi đi code dạo</a></li>
                        <li><a href="">Niviki.com</a></li>
                        <li><a href="">meowblog.com</a></li>
                        <li><a href="">The Lazy Dev</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="footer-title">Kết nối</div>
                    <ul class="footer-menu">
                        <li><a href="">Tôi trên Twitter</a></li>
                        <li><a href="">Tôi trên Facebook</a></li>
                        <li><a href="">Tôi trên Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="tags">
                <h4>Tags</h4>
                <p>Hacking cơ bản, Học hack cơ bản, Học ubuntu, Lập trình game javascript, Lập trình javascript, Lập trình game đơn giản, Tự học linux, Jquery, Kinh nghiệm phỏng vấn, Lập trình php, Lập trình web, Live stream lập trình, Cách trở thành hacker mũ đen, Dạy làm hacker từ A đến Z, Đời sống lập trình viên, Ngành lập trình viên, Cách lập trình game, Bí quyết học lập trình, Những điều cơ bản về lập trình, Lập trình viên, Nghề lập trình viên hiện nay, Cách học lập trình cho người chưa biết gì, học lập trình như thế nào, Raspberry pi, orange pi,</p>
            </div>
        </div>
    </footer>


    <!-- link script -->
    <script src={{url('assets/jquery/jquery-3.5.1.min.js')}}></script>
    <script src={{url('assets/bootstrap/js/bootstrap.min.js')}}></script>
    <script src={{url('assets/frontend/js/style.js')}}></script>
</body>
</html>
