@extends('backend.master')
@section('title','Thêm quản trị viên')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Thêm quản trị viên</div>
            <div class="card-body">
                <form class="form-group form-row" action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-xl-2">
                        <label for="input-img" with="100%">
                            <img id="avatar-post" width="100%" height="100%" src="{{ asset('images/default.png') }}" alt="">
                        </label>
                        <input id="input-img" type="file" name="avatar" class="form-control-file mt-3" onchange="readURL(this);" hidden>
                    </div>
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-6">
                                <input class="form-control" id="" type="text" name="first_name" placeholder="Họ và tên đệm">
                                @error('first_name')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6">
                                <input class="form-control" id="" type="text" name="last_name" placeholder="Tên">
                                @error('last_name')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-12 mt-4">
                                <input class="form-control" id="" type="text" name="username" placeholder="Username">
                                @error('username')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6 mt-4">
                                <input class="form-control" id="" type="email" name="email" placeholder="Email">
                                @error('email')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6 mt-4">
                                <input class="form-control" id="" type="text" name="phone_number" placeholder="Số điện thoại">
                                @error('phone_number')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6 mt-4">
                                <input class="form-control" id="" type="password" name="password" placeholder="Mật khẩu">
                                @error('password')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-xl-6 mt-4">
                                <input class="form-control" id="" type="password" name="password_confirmation" placeholder="Nhập lại mật khẩu">
                                @error('password_confirmation')
                                <span class="text-danger font-italic">*{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success" type="submit">Thêm</button>
                        <button class="btn btn-secondary" type="reset">Làm mới</button>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#avatar-post')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@stop
