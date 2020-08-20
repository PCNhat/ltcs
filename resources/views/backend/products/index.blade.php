@extends('backend.master')
@section('title','Danh sách sản phẩm')
@section('main')
    <section class="list">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Danh sách sản phẩm</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th class="text-center" width="5%">ID</th>
                            <th class="text-center" width="20%">Danh mục</th>
                            <th class="text-uppercase" width="20%">Tên sản phẩm</th>
                            <th class="text-uppercase" width="50%">Mô tả ngắn</th>
                            <th class="text-uppercase text-center" colspan="3">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td class="text-center font-weight-bold">{{ $product->id }}</td>
                                <td class="text-center font-weight-bold">{{ $product->category->name }}</td>
                                <td>{{ $product->name }}</td>
                                <td colspan="2">
                                    <table width="100%">
                                        @foreach($product->productDetail as $productDetail)
                                        <tr>
                                            <td>{!! $productDetail->short_description !!}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </td>
                                <td><a class="btn btn-primary" href="{{ route('admin.product.show', ['id' => $product->id ]) }}">Xem</a></td>
                                <td>
                                    <form action="{{ route('admin.product.destroy', ['id' => $product->id]) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.product.create') }}">Thêm sản phẩm mới</a>
            </div>
        </div>
    </section>
@stop
