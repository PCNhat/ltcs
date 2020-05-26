@extends('frontend.master')
@foreach($title_des as $val)
    @section('title',$val->cate_name)
@endforeach
@section('main')
    @include('frontend/block/title-nav')
    @foreach ($title_des as $val) 
        @if($val->mode == 1) @include('frontend/block/video')
        @else @include('frontend/block/main')
        @endif
    @endforeach
    
    
@stop