<div class="container container-fix">
    <div class="row">
        @foreach($info_post as $info)
            <div class="col-md-4">
                <div class="block-video">
                    <a href="">
                        <img width="100%" src={{url('images/'.$info->post_img)}} alt="{{$info->post_img}}">
                        <p>{{$info->post_name}}</p>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>