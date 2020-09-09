@extends('backend.master')
@section('title','Thông tin thành viên')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Thông tin thành viên</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-2 border p-2">
                        <img id="avatar-post" width="100%" height="100%" src="{{ $user->avatar !== null ? asset('storage' . $user->avatar) : asset('images/default.png') }}" alt="">
                    </div>
                    <div class="col-xl-10">
                        <div class="row">
                            <div class="col-xl-4">
                                <span>Họ và tên đệm:</span>
                                <b>{{ $user->first_name }}</b>
                            </div>
                            <div class="col-xl-8">
                                <span>Tên:</span>
                                <b>{{ $user->last_name }}</b>
                            </div>
                            <div class="col-xl-12 mt-4">
                                <span>Username:</span>
                                <b>{{ $user->username }}</b>
                            </div>
                            <div class="col-xl-4 mt-4">
                                <span>Email:</span>
                                <b>{{ $user->email }}</b>
                            </div>
                            <div class="col-xl-8 mt-4">
                                <span>Số điện thoại:</span>
                                <b>{{ $user->phone_number }}</b>
                            </div>
                            <div class="col-xl-12 mt-4">
                                <span>Vị trí, chức vụ: </span>
                                @foreach($user->roles as $role)
                                    <b>{{ $role->name }}</b> &nbsp;&nbsp;&nbsp;&nbsp;
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>

                    <div class="mt-3">
                        <button class="btn btn-primary" type="submit">Sửa thông tin</button>
                        <button class="btn btn-secondary" type="reset">Xóa</button>
                    </div>
            </div>
        </div>
    </section>
@stop
