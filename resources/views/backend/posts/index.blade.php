@extends('backend.master')
@section('title','Danh sách bài viết')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Danh sách bài viết</div>
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" width="5%">ID</th>
                        <th class="text-center" width="20%">Danh mục</th>
                        <th class="text-uppercase" width="20%">Tiêu đề</th>
                        <th class="text-uppercase" width="50%">Mô tả ngắn</th>
                        <th class="text-uppercase text-center" colspan="3">Active</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center font-weight-bold">1</td>
                            <td class="text-center font-weight-bold">Kênh kiến thức</td>
                            <td>Tấm nền màn hình là gì? Các công nghệ sản xuất tấm nền.</td>
                            <td>Chắc chắn các thành phần của tấm nền màn hình sẽ là một yếu tố làm mà những bạn đang và mới tìm hiểu về các linh kiện máy tính sẽ rất quan tâm. Vậy tấm nền TN / VA / IPS trên màn hình máy tính là gì và công dụng của chúng ảnh hưởng thế nào với mỗi người dùng ? Hãy cùng tìm hiểu chi tiết dưới đây nhé.</td>
                            <td><a class="btn btn-primary" href="">Xem</a></td>
                            <td><a class="btn btn-danger" href="">Xóa</a></td>
{{--                            <td>--}}
{{--                                <form action="" method="POST">--}}
{{--                                    @method('DELETE')--}}
{{--                                    @csrf--}}
{{--                                    <button class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')" type="submit">Xóa</button>--}}
{{--                                </form>--}}
{{--                            </td>--}}
                        </tr>
                        <tr>
                            <td class="text-center font-weight-bold">2</td>
                            <td class="text-center font-weight-bold">Kênh kiến thức</td>
                            <td>RAM là gì? Các loại RAM phổ biến hiện nay?</td>
                            <td>RAM là một thành phần quan trọng không thể thiếu trên Laptop. Vậy RAM là gì, vai trò của nó ra sao? RAM (Random Access Memory) là bộ nhớ truy xuất ngẫu nhiên. Khi mở một phần mềm trên Laptop thì dữ liệu sẽ được truyền tải từ ổ đĩa cứng lên RAM và truyền tải vào CPU để xử lý, sau đó lưu ngược lại vào ổ cứng vì RAM có tốc độ rất nhanh hơn rất nhiều lần so với ổ cứng.</td>
                            <td><a class="btn btn-primary" href="">Xem</a></td>
                            <td><a class="btn btn-danger" href="">Xóa</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer text-right bg-white">
                <a class="btn btn-success" href="{{ route('admin.product.create') }}">Thêm bài viết mới</a>
            </div>
        </div>
    </section>
@stop
@section('js')
    <script src="{{ asset('assets/backend/js/postTextEditor.js') }}"></script>
@stop
