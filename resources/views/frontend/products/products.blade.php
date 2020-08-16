@extends('frontend.master')
@section('title', 'Sản phẩm')
@section('main')
    @include('frontend/block/title-page')
    <div class="container">
        
        @include('frontend.block.search_filter_products')
            
        <div class="row products">
            @for($i = 0; $i < 10; $i++)
                <div class="col-md-3 pt-2 short-description-product-box" style="display:table-cell">
                    <div class="card shadow">
                        <img class="card-img-top" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</h5>
                        <p class="card-text" >Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="{{ route('product.detail') }}" class="btn btn-primary">Chi tiêt</a>
                        </div>
                    </div>
                </div>
            @endfor
            
        </div>
    </div>
@stop
