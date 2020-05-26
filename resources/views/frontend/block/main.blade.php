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
    </div>
</main>