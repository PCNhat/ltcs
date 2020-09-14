@extends('backend.master')
@section('title','Tổng quan')
@section('main')
    <div class="main-card mb-3 card py-3">
        <div class="row">
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">{{ $countUser }}</h1>
                <div class="font-size-lg text-dark font-weight-bold">Thành viên</div>
                <span>Tất cả thành viên</span>
            </div>
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">{{ $countPost }}</h1>
                <div class="font-size-lg text-dark font-weight-bold">Bài viết</div>
                <span>Tổng bài viết</span>
            </div>
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">{{ $countProduct }}</h1>
                <div class="font-size-lg text-dark font-weight-bold">Sản phẩm</div>
                <span>Tổng sản phẩm</span>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">{{ $countPostAroundDay }}</h1>
                <div class="font-size-lg text-dark font-weight-bold">Bài viết trong ngày</div>
                <span>Tất cả bài viết trong ngày</span>
            </div>
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">{{ $countProductAroundDay }}</h1>
                <div class="font-size-lg text-dark font-weight-bold">Sản phẩm trong ngày</div>
                <span>Tổng sản phẩm trong ngày</span>
            </div>
            <div class="col-md-4 col-sm-12 text-center pt-4">
                <h1 class="font-weight-bold">...</h1>
                <div class="font-size-lg text-dark font-weight-bold">Liên hệ chưa phản hồi</div>
                <span>Tổng số liên hệ chưa phản hồi</span>
            </div>
        </div>
    </div>
@endsection
