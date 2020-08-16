@extends('frontend.master')
@section('title', 'Sản phẩm')
@section('main')
    @include('frontend/block/title-page')
    <div class="container">
        
        @include('frontend.block.search_filter_products')
        
        <div class="row compare-products">
            <div class="col-xl-6">
                <h4 class="text-center font-weight-bold name-product"><a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a></h4>
                <img  width="100%" src="{{ asset('images/products/product-images/macbook-pro-16inch-space-gray-ONEWAYMACBOOK_.jpg') }}" alt="">
                <div class="specifications">
                    <h5 class="font-weight-bold text-uppercase text-center">Thông số kĩ thuật</h5>
                    <table class="table table-boder table_hover">
                        <tr class="">
                            <td>Loại CPU</td>
                            <td>Intel Core i5</td>
                        </tr>
                        <tr>
                            <td>Dung lượng RAM</td>
                            <td>16 GB</td>
                        </tr>
                        <tr>
                            <td>Ổ cứng</td>
                            <td>SSD: 1 TB</td>
                        </tr>
                        <tr>
                            <td>Màn hình</td>
                            <td>AMD Radeon Pro 5500M with 4GB GDDR6</td>
                        </tr>
                        <tr>
                            <td>Card đồ họa</td>
                            <td>Radeon Pro 5300M, 4GB
                            </td>
                        </tr>
                    </table>
                    <div class="text-center font-weight-bold mt-4 py-3 price-product">
                        59.890.000 VNĐ
                    </div>
                    <small class="text-danger font-italic ">*Chính sách khuyến mãi và giá thành sản phẩm chỉ mang tính chất tham khảo!</small>
                </div>
            </div>
            <div class="col-xl-6">
                <h4 class="text-center font-weight-bold name-product"><a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a></h4>
                <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16inch-space-gray-ONEWAYMACBOOK_.jpg') }}" alt="">
                <div class="specifications">
                    <h5 class="font-weight-bold text-uppercase text-center">Thông số kĩ thuật</h5>
                    <table class="table table-boder table_hover">
                        <tr class="">
                            <td>Loại CPU</td>
                            <td>Intel Core i5</td>
                        </tr>
                        <tr>
                            <td>Dung lượng RAM</td>
                            <td>16 GB</td>
                        </tr>
                        <tr>
                            <td>Ổ cứng</td>
                            <td>SSD: 1 TB</td>
                        </tr>
                        <tr>
                            <td>Màn hình</td>
                            <td>AMD Radeon Pro 5500M with 4GB GDDR6</td>
                        </tr>
                        <tr>
                            <td>Card đồ họa</td>
                            <td>Radeon Pro 5300M, 4GB
                            </td>
                        </tr>
                    </table>
                    <div class="text-center font-weight-bold mt-4 py-3 price-product">
                        59.890.000 VNĐ
                    </div>
                    <small class="text-danger font-italic ">*Chính sách khuyến mãi và giá thành sản phẩm chỉ mang tính chất tham khảo!</small>
                </div>
            </div>
        </div>
    </div>
@stop
