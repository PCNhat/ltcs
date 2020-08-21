@extends('backend.master')
@section('title','Sản phẩm')
@section('main')
    <section class="list">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">{{$product->category->name}}  -  {{ $product->name }}</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6">
                        <img width="100%" src="{{ asset('storage' . $product->avatar) }}" alt="aa">
                    </div>
                    <div class="col-xl-6"></div>
                    <div class="col-xl-12 mt-5">
                        <ul class="nav nav-tabs m-0 border" id="myTab" role="tablist">
                            @foreach ($product->productDetail as $productDetail)
                                <li class="nav-item border">
                                    <a class="nav-link px-5" id="tab-product-detail{{ $productDetail->id }}" data-toggle="tab" href="#product-detail{{ $productDetail->id }}" role="tab" aria-controls="product-detail{{ $productDetail->id }}" aria-selected="false">
                                        <strong class="px-5">{{ $productDetail->price }}</strong>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content pt-5 border" id="myTabContent">
                            @foreach ($product->productDetail as $productDetail)
                                <div class="tab-pane fade border-0 border p-3 pl-4" id="product-detail{{ $productDetail->id }}" role="tabpanel" aria-labelledby="overview-tab">
                                    <div class="row">
                                        <div class="col-xl-9">
                                            <h5 class="text-center text-uppercase font-weight-bold">Mô tả và đánh giá sản phẩm</h5>
                                            <article>
                                                {!! App\Helpers\Helper::productDescription($product, $productDetail->id) !!}
                                            </article>
                                        </div>
                                        <div class="col-xl-3">
                                            <div class="card">
                                                <table class="table table-hover">
                                                    <tr>
                                                        <td colspan="2" class="text-center text-uppercase font-weight-bold">Thông số kĩ thuật</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">Bộ xử lý</td>
                                                    </tr>
                                                    <tr>
                                                        <td>CPU</td>
                                                        <td>{{$productDetail->cpu_brand}} {{$productDetail->cpu_series}} {{$productDetail->cpu_suffixes}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số nhân</td>
                                                        <td>{{ $productDetail->cpu_cores }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số luồng</td>
                                                        <td>{{ $productDetail->cpu_threads }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cache</td>
                                                        <td>{{ $productDetail->cpu_cache }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Lithography</td>
                                                        <td>{{ $productDetail->cpu_lithography }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Xung cơ bản</td>
                                                        <td>{{ $productDetail->cpu_base_clock }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Xung Boost</td>
                                                        <td>{{ $productDetail->cpu_boost_clock }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">RAM</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dung lượng</td>
                                                        <td>{{ $productDetail->ram_amount }} {{ $productDetail->ram_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tốc độ</td>
                                                        <td>{{ $productDetail->ram_speed }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số khe cắm </td>
                                                        <td>{{ $productDetail->ram_socket_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số khe còn lại</td>
                                                        <td>{{ $productDetail->ram_socket_existence_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dung lượng tối đa</td>
                                                        <td>{{ $productDetail->ram_max_amount_support }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">Màn hình</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Màn hình</td>
                                                        <td>{{ $productDetail->display_size }} {{ $productDetail->display_resolution }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tỷ lệ</td>
                                                        <td>{{ $productDetail->display_aspect_ratio }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tấm nền</td>
                                                        <td>{{ $productDetail->display_panel_type }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Công nghệ màn hình</td>
                                                        <td>{{ $productDetail->display_technology }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cảm ứng</td>
                                                        <td>{{ $productDetail->display_is_touch_screen ? "Có" : 'Không' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">Ổ cứng</td>
                                                    </tr>
                                                    <tr>
                                                        <td>{{ $productDetail->hard_drive_type }}</td>
                                                        <td>{{ $productDetail->hard_drive_amount }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số khe cắm</td>
                                                        <td>{{ $productDetail->hard_drive_socket_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Số khe cắm còn lại</td>
                                                        <td>{{ $productDetail->hard_drive_socket_existence_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hỗ trợ SSD</td>
                                                        <td>{{ $productDetail->hard_drive_is_support_ssd }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hỗ trợ HDD</td>
                                                        <td>{{ $productDetail->hard_drive_is_support_hdd ? "Có" : 'Không' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">Card đồ họa</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card rời</td>
                                                        <td>{{ $productDetail->not_onboard_graphics_card ? "Có" : 'Không' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card đồ họa</td>
                                                        <td>{{ $productDetail->graphics_card }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="alert alert-primary text-uppercase font-weight-bold">Khác</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cổng kết nối</td>
                                                        <td>{{ $productDetail->ports }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wifi</td>
                                                        <td>{{ $productDetail->wifi }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bluetooth</td>
                                                        <td>{{ $productDetail->bluetooth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Camera</td>
                                                        <td>{{ $productDetail->camera }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Microphone</td>
                                                        <td>{{ $productDetail->microphone }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Loa</td>
                                                        <td>{{ $productDetail->speaker }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hệ điều hành</td>
                                                        <td>{{ $productDetail->os }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kích thước</td>
                                                        <td>{{ $productDetail->dimension }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cân nặng</td>
                                                        <td>{{ $productDetail->weight }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pin</td>
                                                        <td>{{ $productDetail->battery }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <a class="btn btn-primary" href="{{ route('admin.product.edit', ['id' => $productDetail->id]) }}">Sửa sản phẩm</a>
                                            <form class="d-inline-block" action="{{ route('admin.product.detail', ['id' => $productDetail->id]) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa sản phẩm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade border-top-0 border p-3" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="font-size-lg pb-3"><strong>Goby</strong></div>
                                    <div class="row pb-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted"><strong>Contact name</strong>
                                            </div>
                                            <div class="font-size-lg"><strong>Hoang</strong></div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted"><strong>Company/ Organization</strong>
                                            </div>
                                            <div class="font-size-lg"><strong>Goby</strong></div>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted"><strong>Email</strong>
                                            </div>
                                            <div class="font-size-lg"><strong>phungminhhoang174@gmail.com</strong></div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted"><strong>Phone number</strong>
                                            </div>
                                            <div class="font-size-lg"><strong>+84 97 748 19 01</strong></div>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted">
                                                <strong>Address Line 1</strong></div>
                                            <div class="font-size-lg"><strong>26B Trần Quý Cáp</strong></div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="py-2 text-muted">
                                                        <strong>City</strong></div>
                                                    <div class="font-size-lg"><strong>Ha Noi</strong></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="py-2 text-muted">
                                                        <strong>State/Province</strong></div>
                                                    <div class="font-size-lg"><strong></strong></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="py-2 text-muted">
                                                <strong>Address Line 2</strong></div>
                                            <div class="font-size-lg"><strong></strong></div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="py-2 text-muted">
                                                        <strong>Zip/Postal code</strong></div>
                                                    <div class="font-size-lg"><strong></strong></div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="py-2 text-muted">
                                                        <strong>Country</strong></div>
                                                    <div class="font-size-lg">
                                                        <strong>Viet Nam</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>





{{--                <table class="table table-bordered table-hover">--}}
{{--                    <thead>--}}
{{--                    <tr>--}}
{{--                        <th class="text-center" width="5%">ID</th>--}}
{{--                        <th class="text-center" width="20%">Danh mục</th>--}}
{{--                        <th class="text-uppercase" width="20%">Tên sản phẩm</th>--}}
{{--                        <th class="text-uppercase" width="50%">Mô tả ngắn</th>--}}
{{--                        <th class="text-uppercase text-center" colspan="3">Active</th>--}}
{{--                    </tr>--}}
{{--                    </thead>--}}
{{--                    <tbody>--}}
{{--                    @foreach ($products as $product)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $product->id }}</td>--}}
{{--                            <td>{{ $product->category_id }}</td>--}}
{{--                            <td>{{ $product->name }}</td>--}}
{{--                            <td colspan="2">--}}
{{--                                <table width="100%">--}}
{{--                                    @foreach($product->productDetail as $productDetail)--}}
{{--                                        <tr>--}}
{{--                                            <td>{!! $productDetail->short_description !!}</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforeach--}}
{{--                                </table>--}}
{{--                            </td>--}}
{{--                            <td><a class="btn btn-primary" href="{{ route('admin.product.show', ['id' => $product->id ]) }}">Xem</a></td>--}}
{{--                            <td>--}}
{{--                                <form action="{{ route('admin.category.destroy', ['id' => $product->id]) }}" method="POST">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                    </tbody>--}}
{{--                </table>--}}
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.product.create') }}">Thêm sản phẩm mới</a>
            </div>
        </div>
    </section>
@stop
