@extends('backend.master')
@section('title','Thêm sản phẩm')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Thêm sản phẩm</div>
            <div class="card-body">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="">Hãng</label>
                            <select class="form-control" name="category_id" id="frm-parent-category">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @foreach($category->childrenCategories as $childCategory)
                                        @include('backend.categories.block.child_category_select', ['childCategory' => $childCategory, 'dash' => 1])
                                    @endforeach
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="">Tên sản phẩm</label>
                            <input type="text" class="form-control" name="name" placeholder="Tên sản phẩm">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Ảnh sản phẩm</label>
                            <input type="file" class="form-control" name="avatar" placeholder="Ảnh sản phẩm">
                        </div>

                        <div class="col-md-12 font-weight-bold">CPU</div>
                        <div class="form-group col-md-2">
                            <label for="">Hãng</label>
                            <input type="text" class="form-control" name="cpu_brand" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Thế hệ</label>
                            <input type="text" class="form-control" name="cpu_series" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Hậu tố</label>
                            <input type="text" class="form-control" name="cpu_suffixes" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số nhân</label>
                            <input type="text" class="form-control" name="cpu_cores" placeholder="">
                        </div><div class="form-group col-md-2">
                            <label for="">Số luồng</label>
                            <input type="text" class="form-control" name="cpu_threads" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Bộ nhớ đệm</label>
                            <input type="text" class="form-control" name="cpu_cache" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Lithography</label>
                            <input type="text" class="form-control" name="cpu_lithography" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Xung cơ bản</label>
                            <input type="text" class="form-control" name="cpu_base_clock" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Xung boost</label>
                            <input type="text" class="form-control" name="cpu_boost_clock" placeholder="">
                        </div>

                        <div class="col-md-12 font-weight-bold">RAM</div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng</label>
                            <input type="text" class="form-control" name="ram_amount" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Loại RAM</label>
                            <input type="text" class="form-control" name="ram_type" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tốc độ</label>
                            <input type="text" class="form-control" name="ram_speed" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tổng số khe cắm</label>
                            <input type="number" class="form-control" name="ram_socket_number" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số khe cắm còn lại</label>
                            <input type="number" class="form-control" name="ram_socket_existence_number" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng tối đa</label>
                            <input type="text" class="form-control" name="ram_max_amount_support" placeholder="">
                        </div>

                        <div class="col-md-12 font-weight-bold">Ổ cứng</div>
                        <div class="form-group col-md-2">
                            <label for="">Loại ổ cứng</label>
                            <input type="text" class="form-control" name="hard_drive_type" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Dung lượng</label>
                            <input type="text" class="form-control" name="hard_drive_amount" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tổng số khe cắm</label>
                            <input type="number" class="form-control" name="hard_drive_socket_number" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Số khe cắm còn lại</label>
                            <input type="number" class="form-control" name="hard_drive_socket_existence_number" placeholder="">
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Hỗ trợ ổ SSD</label>
                            <input type="checkbox" class="form-control" name="hard_drive_is_support_ssd" value="1">
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Hỗ trợ ổ HDD</label>
                            <input type="checkbox" class="form-control" name="hard_drive_is_support_hdd" value="1">
                        </div>

                        <div class="col-md-12 font-weight-bold">Màn hình</div>
                        <div class="form-group col-md-2">
                            <label for="">Kích thước</label>
                            <input type="text" class="form-control" name="display_size" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tỉ lệ màn hình</label>
                            <input type="text" class="form-control" name="display_aspect_ratio" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Độ phân giải</label>
                            <input type="text" class="form-control" name="display_resolution" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Tấm nền</label>
                            <input type="text" class="form-control" name="display_panel_type" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Công nghệ màn hình</label>
                            <input type="text" class="form-control" name="display_technology" placeholder="">
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Cảm ứng</label>
                            <input type="checkbox" class="form-control" name="display_is_touch_screen" value="1">
                        </div>

                        <div class="col-md-12 font-weight-bold">Khác</div>
                        <div class="form-group col-md-2 text-center">
                            <label for="">Card rời</label>
                            <input type="checkbox" class="form-control border" name="not_onboard_graphics_card" value="1">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Card đồ họa</label>
                            <input type="text" class="form-control" name="graphics_card" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Cổng kết nối</label>
                            <input type="text" class="form-control" name="ports" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Wifi</label>
                            <input type="text" class="form-control" name="wifi" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Bluetooth</label>
                            <input type="text" class="form-control" name="bluetooth" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Camera</label>
                            <input type="text" class="form-control" name="camera" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Microphone</label>
                            <input type="text" class="form-control" name="microphone" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Loa</label>
                            <input type="text" class="form-control" name="speaker" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Hệ điều hành</label>
                            <input type="text" class="form-control" name="os" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Kích thước</label>
                            <input type="text" class="form-control" name="dimension" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Cân nặng</label>
                            <input type="text" class="form-control" name="weight" placeholder="">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">PIN</label>
                            <input type="text" class="form-control" name="battery" placeholder="">
                        </div>
                        <div class="form-group col-md-12 font-weight-bold">
                            <label for="">Giá sản phẩm</label>
                            <input type="number" class="form-control" name="price" placeholder="">
                        </div>
                        <div class="col-md-12 font-weight-bold">Mô tả</div>
                        <div class="form-group col-md-12">
                            <textarea class="form-control" name="description" id=""></textarea>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Thêm</button>
                    <button class="btn btn-secondary" type="reset">Làm mới</button>
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

