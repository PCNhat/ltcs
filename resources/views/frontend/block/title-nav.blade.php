<div class="container container-fix">
    <div class="title-list-post">
        @foreach($title_des as $val)
            <h1 class="title-post">
                {{$val->cate_name}} 
            </h1>
            <p>{{$val->cate_des}}</p>
        @endforeach
    </div>
</div>
