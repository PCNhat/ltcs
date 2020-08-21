@extends('backend.master')
@section('title','Sửa sản phẩm')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Sửa sản phẩm</div>
            <div class="card-body">
                <form action="{{ route('admin.product.update', ['id' => $productDetail->id]) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Hãng</label>
                            <select class="form-control" name="category_id" id="frm-parent-category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $productDetail->product->category_id === $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @foreach($category->childrenCategories as $childCategory)
                                        @include('backend.categories.block.child_category_select', ['childCategory' => $childCategory, 'dash' => 1, 'productCategory' => $productDetail->product->category_id])
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm" value="{{ $productDetail->product->name }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="avatar" accept="image/png, .jpeg, .jpg, image/gif" placeholder="Ảnh sản phẩm">
                        </div>

                        <div class="col-md-12 font-weight-bold">CPU</div>
                        <div class="form-group col-md-2">
                            <label for="">Hãng</label>
                            <input type="text" class="form-control" name="cpu_brand" placeholder="" value="{{ $productDetail->cpu_brand }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Thế hệ</label>
                            <input type="text" class="form-control" name="cpu_series" placeholder="" value="{{ $productDetail->cpu_series }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Hậu tố</label>
                            <input type="text" class="form-control" name="cpu_suffixes" placeholder="" value="{{ $productDetail->cpu_suffixes }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số nhân</label>
                            <input type="text" class="form-control" name="cpu_cores" placeholder="" value="{{ $productDetail->cpu_cores }}">
                        </div><div class="form-group col-md-2">
                            <label for="">Số luồng</label>
                            <input type="text" class="form-control" name="cpu_threads" placeholder="" value="{{ $productDetail->cpu_threads }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Bộ nhớ đệm</label>
                            <input type="text" class="form-control" name="cpu_cache" placeholder="" value="{{ $productDetail->cpu_cache }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Lithography</label>
                            <input type="text" class="form-control" name="cpu_lithography" placeholder="" value="{{ $productDetail->cpu_lithography }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Xung cơ bản</label>
                            <input type="text" class="form-control" name="cpu_base_clock" placeholder="" value="{{ $productDetail->cpu_base_clock }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Xung boost</label>
                            <input type="text" class="form-control" name="cpu_boost_clock" placeholder="" value="{{ $productDetail->cpu_boost_clock }}">
                        </div>

                        <div class="col-md-12 font-weight-bold">RAM</div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng</label>
                            <input type="text" class="form-control" name="ram_amount" placeholder="" value="{{ $productDetail->ram_amount }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Loại RAM</label>
                            <input type="text" class="form-control" name="ram_type" placeholder="" value="{{ $productDetail->ram_type }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tốc độ</label>
                            <input type="text" class="form-control" name="ram_speed" placeholder="" value="{{ $productDetail->ram_speed }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tổng số khe cắm</label>
                            <input type="number" class="form-control" name="ram_socket_number" placeholder="" value="{{ $productDetail->ram_socket_number }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số khe cắm còn lại</label>
                            <input type="number" class="form-control" name="ram_socket_existence_number" placeholder="" value="{{ $productDetail->ram_socket_existence_number }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng tối đa</label>
                            <input type="text" class="form-control" name="ram_max_amount_support" placeholder="" value="{{ $productDetail->ram_max_amount_support }}">
                        </div>

                        <div class="col-md-12 font-weight-bold">Ổ cứng</div>
                        <div class="form-group col-md-2">
                            <label for="">Loại ổ cứng</label>
                            <input type="text" class="form-control" name="hard_drive_type" placeholder="" value="{{ $productDetail->hard_drive_type }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng</label>
                            <input type="text" class="form-control" name="hard_drive_amount" placeholder="" value="{{ $productDetail->hard_drive_amount }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tổng số khe cắm</label>
                            <input type="number" class="form-control" name="hard_drive_socket_number" placeholder="" value="{{ $productDetail->hard_drive_socket_number }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số khe cắm còn lại</label>
                            <input type="number" class="form-control" name="hard_drive_socket_existence_number" placeholder="" value="{{ $productDetail->hard_drive_socket_existence_number }}">
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Hỗ trợ ổ SSD</label>
                            <input type="checkbox" class="form-control" name="hard_drive_is_support_ssd" value="1" {{ $productDetail->hard_drive_is_support_ssd ? "checked" : '' }}>
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Hỗ trợ ổ HDD</label>
                            <input type="checkbox" class="form-control" name="hard_drive_is_support_hdd" value="1" {{ $productDetail->hard_drive_is_support_hdd ? "checked" : '' }}>
                        </div>

                        <div class="col-md-12 font-weight-bold">Màn hình</div>
                        <div class="form-group col-md-2">
                            <label for="">Kích thước</label>
                            <input type="text" class="form-control" name="display_size" placeholder="" value="{{ $productDetail->display_size }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tỉ lệ màn hình</label>
                            <input type="text" class="form-control" name="display_aspect_ratio" placeholder="" value="{{ $productDetail->display_aspect_ratio }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Độ phân giải</label>
                            <input type="text" class="form-control" name="display_resolution" placeholder="" value="{{ $productDetail->display_resolution }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tấm nền</label>
                            <input type="text" class="form-control" name="display_panel_type" placeholder="" value="{{ $productDetail->display_panel_type }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Công nghệ màn hình</label>
                            <input type="text" class="form-control" name="display_technology" placeholder="" value="{{ $productDetail->display_technology }}">
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Cảm ứng</label>
                            <input type="checkbox" class="form-control" name="display_is_touch_screen" value="1" {{ $productDetail->display_is_touch_screen ? "checked" : '' }}>
                        </div>

                        <div class="col-md-12 font-weight-bold">Khác</div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Card rời</label>
                            <input type="checkbox" class="form-control border" name="not_onboard_graphics_card" value="1" {{ $productDetail->not_onboard_graphics_card ? "checked" : '' }}>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Card đồ họa</label>
                            <input type="text" class="form-control" name="graphics_card" placeholder="" value="{{ $productDetail->graphics_card }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Cổng kết nối</label>
                            <input type="text" class="form-control" name="ports" placeholder="" value="{{ $productDetail->ports }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Wifi</label>
                            <input type="text" class="form-control" name="wifi" placeholder="" value="{{ $productDetail->wifi }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Bluetooth</label>
                            <input type="text" class="form-control" name="bluetooth" placeholder="" value="{{ $productDetail->bluetooth }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Camera</label>
                            <input type="text" class="form-control" name="camera" placeholder="" value="{{ $productDetail->camera }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Microphone</label>
                            <input type="text" class="form-control" name="microphone" placeholder="" value="{{ $productDetail->microphone }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Loa</label>
                            <input type="text" class="form-control" name="speaker" placeholder="" value="{{ $productDetail->speaker }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Hệ điều hành</label>
                            <input type="text" class="form-control" name="os" placeholder="" value="{{ $productDetail->os }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Kích thước</label>
                            <input type="text" class="form-control" name="dimension" placeholder="" value="{{ $productDetail->dimension }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Cân nặng</label>
                            <input type="text" class="form-control" name="weight" placeholder="" value="{{ $productDetail->weight }}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">PIN</label>
                            <input type="text" class="form-control" name="battery" placeholder="" value="{{ $productDetail->battery }}">
                        </div>
                        <div class="form-group col-md-12 font-weight-bold">
                            <label for="">Giá sản phẩm</label>
                            <input type="number" class="form-control" name="price" placeholder="" value="{{ $productDetail->price }}">
                        </div>
                        <div class="col-md-12 font-weight-bold">Mô tả</div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="description" id="">{!! !empty($productDetail->description) ? $productDetail->description->description : '' !!}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Sửa sản phẩm</button>
                    <button class="btn btn-secondary" type="reset">Làm mới</button>
                    <a class="btn btn-info text-white float-right font-weight-bold" href="{{ route('admin.product.show', ['id' => $productDetail->product_id]) }}">Quay lại</a>
                </form>
            </div>
        </div>
    </section>
    <script>
        var route_prefix = "/filemanager";
        var csrf_token = '{{ csrf_token() }}';
    </script>
@stop
@section('js')
    <script src="{{ asset('assets/backend/js/ProductTextEditor.js') }}"></script>
@stop

