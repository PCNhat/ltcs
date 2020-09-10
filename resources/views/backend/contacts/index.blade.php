@extends('backend.master')
@section('title','Quản lý liên hệ')
@section('main')
    <div class="container-fluid">
        <div class="main-card mb-3 card">
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12 col-sm-12 list-users main-card mb-3 card">
                        <div>
                            <div class="card-header">
                                <i class="header-icon lnr-calendar-full icon-gradient bg-plum-plate"></i>
                                <h3>Quản lý liên hệ</h3>
                            </div>
                            <div class="card-body">
                                <table class="mb-0 table table-hover">
                                    @foreach($contacts as $contact)
                                        <tr>
                                            <td>
                                                <h5 class="font-weight-bold">
                                                    {{ $contact->full_name }}
                                                    <form action="{{ route('admin.contact.hidden', ['id' => $contact->id]) }}" class="float-right" method="POST">
                                                        @csrf
                                                        <button class="btn btn-light" onclick="return confirm('Bạn có chắc muốn XÓA?')" type="submit">X</button>
                                                    </form>
                                                </h5>
                                                <h6 class="font-weight-bold">Email: {{ $contact->email }}</h6>
                                                <h6 class="font-weight-bold">Tiêu đề : {{ $contact->subject }}</h6>
                                                {!! "<pre>" . $contact->content . "</pre>" !!}
                                                <p>
                                                    <button class="btn font-weight-bold text-muted" type="button" data-toggle="collapse" data-target="#reply_contact_{{$contact->id}}" aria-expanded="false" aria-controls="reply_contact_{{$contact->id}}">
                                                        Phản hồi ({{$contact->childrenContacts->count()}})
                                                    </button>
                                                </p>
                                                <div class="collapse" id="reply_contact_{{$contact->id}}">
                                                    <div class="card card-body">
                                                        @foreach ($contact->childrenContacts as $childContact)
                                                            <h5 class="font-weight-bold">
                                                                {{ $childContact->full_name }}
                                                            </h5>
                                                            <h6 class="font-weight-bold">Email: {{ $childContact->email }}</h6>
                                                            {!! "<pre>" . $childContact->content . "</pre>" !!}
                                                            <br>
                                                        @endforeach
                                                        <form action="{{ route('admin.contact.store_reply',['id' => $contact->id]) }}" class="form-group" method="POST">
                                                            @csrf
                                                            <textarea class="form-control" name="content" id="" rows="3" required></textarea>
                                                            <button class="btn btn-primary mt-3" type="submit">Gửi phản hồi</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                            <div class="d-block card-footer">
                                <div class="admin-pagination pt-3">{!! $contacts->links() !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endSection

