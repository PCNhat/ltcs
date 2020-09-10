@extends('backend.master')
@section('title','Danh sách thành viên')
@section('main')
    <section class="list">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Danh sách thành viên</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center text-uppercase" width="5%">ID</th>
                        <th class="text-uppercase">Full name</th>
                        <th class="text-uppercase" width="">Username</th>
                        <th class="text-uppercase">Email</th>
                        <th class="text-center text-uppercase">Quyền</th>
                        <th class="text-uppercase text-center" colspan="2" width="10%">Active</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="font-weight-bold text-center">{{ $user->id }}</td>
                                <td class="">{!! $user->full_name !!}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">@foreach($user->roles as $role) {{ $role->name . ' ' }} @endforeach</td>
                                @if(\App\Helpers\Helper::isHideRole(auth()->user(), $user))
                                <td><a class="btn btn-primary" href="{{ route('admin.user.show', ['id' => $user->id]) }}">Chi tiết</a></td>
                                @endif

                                @if(\App\Helpers\Helper::isHideRole(auth()->user(), $user))
                                <td>
                                    <form action="{{ route('admin.user.destroy', ['id' => $user->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.user.create') }}">Thêm thành viên mới</a>
            </div>
        </div>
    </section>
@stop
