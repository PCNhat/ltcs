@extends('frontend.master')
@section('title', 'Bài viết')
@section('main')
    @include('frontend/block/title-page')
    <main>
        <div class="container">
            <h1 class="mb-2">{{ $post->title }}</h1>
            <p class="font-weight-bold">{{ $post->description }}</p>
            <br>
            {!! $post->content !!}

        </div>
    </main>
@stop
