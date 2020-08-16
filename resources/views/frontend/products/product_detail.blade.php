@extends('frontend.master')
@section('title', 'Sản phẩm')
@section('main')
    @include('frontend/block/title-page')
    <div class="container">
        
        @include('frontend.block.search_filter_products')

        <div class="row">
            <h3 class="col-xl-12 font-weight-bold text-uppercase mb-5">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</h3>
            <div class="col-xl-8">
                <div class="row img-product-promotion-policy">
                    <div class="col-xl-6 img-product">
                        <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16inch-space-gray-ONEWAYMACBOOK_.jpg') }}" alt="">
                    </div>
                    <div class="col-xl-6 promotion-policy">
                        <h5 class="font-weight-bold text-uppercase">Chính sách khuyến mãi</h5>
                        <div class="promotion-policy-content">
                            <p>✓ &nbsp;Tặng túi chống sốc Macbook</p>
                            <p>✓ &nbsp;Tặng Bộ vệ sinh MacBook chính hãng</p>
                            <p>✓ &nbsp;Tặng Voucher giảm giá phụ kiện 20%</p>
                            <p>✓ &nbsp;Cài đặt phần mềm miễn phí.</p>
                            <p>✓ &nbsp;Hỗ trợ Trả Góp 0% qua Thẻ Tín Dụng.</p>
                            <p>✓ &nbsp;Phần cứng: Bảo Hành 12 Tháng TOÀN DIỆN</p>
                            <p>✓ &nbsp;Phần mềm: Hỗ trợ trọn đời sản phẩm</p>
                            <div class="text-center font-weight-bold mt-4 py-3 price-product">
                                59.890.000 VNĐ
                            </div>
                            <small class="text-danger font-italic ">*Chính sách khuyến mãi và giá thành sản phẩm chỉ mang tính chất tham khảo!</small>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="description-product">
                    <h4 class="font-weight-bold text-uppercase">Mô tả sản phẩm</h4>
                    <h6 class="text-uppercase">THIẾT KẾ  Đẳng CẤP</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nesciunt consequuntur recusandae rem impedit nobis doloremque dolores necessitatibus culpa nisi quae modi sint ipsum officia aperiam ab, vitae veniam tempore?</p>
                    <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nostrum nesciunt nulla, quisquam adipisci fugit, incidunt molestias illum cupiditate, aspernatur dignissimos! Nisi possimus reiciendis laboriosam nesciunt voluptate consequatur ratione neque?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim blanditiis rem accusantium omnis beatae velit vero fugit repudiandae corporis ad facere voluptatum, et quaerat, temporibus molestiae? Odio ad minus quisquam.</p>
                    <h6 class="text-uppercase">THIẾT KẾ  Đẳng CẤP</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nesciunt consequuntur recusandae rem impedit nobis doloremque dolores necessitatibus culpa nisi quae modi sint ipsum officia aperiam ab, vitae veniam tempore?</p>
                    <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nostrum nesciunt nulla, quisquam adipisci fugit, incidunt molestias illum cupiditate, aspernatur dignissimos! Nisi possimus reiciendis laboriosam nesciunt voluptate consequatur ratione neque?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim blanditiis rem accusantium omnis beatae velit vero fugit repudiandae corporis ad facere voluptatum, et quaerat, temporibus molestiae? Odio ad minus quisquam.</p>
                    <h6 class="text-uppercase">THIẾT KẾ  Đẳng CẤP</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nesciunt consequuntur recusandae rem impedit nobis doloremque dolores necessitatibus culpa nisi quae modi sint ipsum officia aperiam ab, vitae veniam tempore?</p>
                    <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nostrum nesciunt nulla, quisquam adipisci fugit, incidunt molestias illum cupiditate, aspernatur dignissimos! Nisi possimus reiciendis laboriosam nesciunt voluptate consequatur ratione neque?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim blanditiis rem accusantium omnis beatae velit vero fugit repudiandae corporis ad facere voluptatum, et quaerat, temporibus molestiae? Odio ad minus quisquam.</p>
                    <h6 class="text-uppercase">THIẾT KẾ  Đẳng CẤP</h6>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci nesciunt consequuntur recusandae rem impedit nobis doloremque dolores necessitatibus culpa nisi quae modi sint ipsum officia aperiam ab, vitae veniam tempore?</p>
                    <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non nostrum nesciunt nulla, quisquam adipisci fugit, incidunt molestias illum cupiditate, aspernatur dignissimos! Nisi possimus reiciendis laboriosam nesciunt voluptate consequatur ratione neque?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim blanditiis rem accusantium omnis beatae velit vero fugit repudiandae corporis ad facere voluptatum, et quaerat, temporibus molestiae? Odio ad minus quisquam.</p>
    
                </div>
            </div>
            <div class="col-xl-4 ">
                <div class="specifications">
                    <h5 class="font-weight-bold text-uppercase">Thông số kĩ thuật</h5>
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
                </div>
                <hr>
                <div class="more-products">
                    <h5 class="font-weight-bold text-uppercase mt-5">Sản phẩm cùng tầm giá</h5>
                    <div class="row py-2 one-related-product">
                        <div class="col-xl-4 img-product">
                            <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                        </div>
                        <div class="col-xl-8 name-product">
                            <a class="d-block" href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a>
                            <span class="text-danger">59.890.000 VNĐ</span>
                            <a class="btn d-block border" href="{{ route('compare.products') }}">So sánh</a>
                        </div>
                    </div>
                    <div class="row py-2 one-related-product">
                        <div class="col-xl-4 img-product">
                            <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16inch-space-gray-ONEWAYMACBOOK_.jpg') }}" alt="">
                        </div>
                        <div class="col-xl-8 name-product">
                            <a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a>
                            <a class="text-danger">59.890.000 VNĐ</a>
                            <a class="btn d-block border" href="{{ route('compare.products') }}">So sánh</a>
                        </div>
                    </div>
                    <div class="row py-2 one-related-product">
                        <div class="col-xl-4 img-product">
                            <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                        </div>
                        <div class="col-xl-8 name-product">
                            <a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a>
                            <a class="text-danger">59.890.000 VNĐ</a>
                            <a class="btn d-block border" href="{{ route('compare.products') }}">So sánh</a>
                        </div>
                    </div>
                    <div class="row py-2 one-related-product">
                        <div class="col-xl-4 img-product">
                            <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                        </div>
                        <div class="col-xl-8 name-product">
                            <a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a>
                            <a class="text-danger">59.890.000 VNĐ</a>
                            <a class="btn d-block border" href="{{ route('compare.products') }}">So sánh</a>
                        </div>
                    </div>
                    <div class="row py-2 one-related-product">
                        <div class="col-xl-4 img-product">
                            <img width="100%" src="{{ asset('images/products/product-images/macbook-pro-16-inch.jpg') }}" alt="">
                        </div>
                        <div class="col-xl-8 name-product">
                            <a href="">MVVK2 - MACBOOK PRO 16" 2019 - 1TB - NEW 100%</a>
                            <a class="text-danger">59.890.000 VNĐ</a>
                            <a class="btn d-block border" href="{{ route('compare.products') }}">So sánh</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@stop
