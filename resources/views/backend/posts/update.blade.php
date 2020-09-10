@extends('backend.master')
@section('title','Chỉnh sửa bài viết')
@section('main')
    <section class="form-input" width="70%">
        <div class="card">
            <div class="card-header bg-white text-uppercase font-weight-bold">Chỉnh sửa bài viết</div>
            <div class="card-body">
                <form class="form-group form-row" action="{{ route('admin.post.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="col-xl-2">
                        <div style="width: 150px; height: 150px" class="float-right mt-5">
                            <img id="avatar-post" width="100%" height="100%" src="{{ asset('storage' . $post->avatar) }}" alt="">
                        </div>
                        <input type="file" name="avatar" class="form-control-file mt-3" onchange="readURL(this);">
                    </div>
                    <div class="col-xl-10">
                        <div class="mt-3">
                            <label for="frm-category-name">Tiêu đề bài viết</label>
                            <input class="form-control" id="frm-category-name" type="text" name="title" placeholder="Tiêu đề bài viết" value="{{ $post->title }}">
                            @error('title')
                            <span class="text-danger font-italic">*{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mt-3">
                            <label for="frm-category-description">Giới thiệu bài viết</label>
                            <textarea class="form-control" id="frm-category-description" type="text" name="description" rows="3" placeholder="Giới thiệu bài viết">{{ $post->description }}</textarea>
                        </div>
                        @error('description')
                        <span class="text-danger font-italic">*{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-xl-12 mt-3">
                        <label for="frm-parent-category">Chọn danh mục</label>
                        <select class="form-control" name="category_id" id="frm-parent-category">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                                @foreach($category->childrenCategories as $childCategory)
                                    @include('backend.categories.block.child_category_select', ['childCategory' => $childCategory, 'dash' => 1])
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xl-12 mt-3">
                        <label for="frm-category-description">Nội dung bài viết</label>
                        <textarea class="form-control" id="frm-category-description" type="text" name="content" rows="3" placeholder="Nội dung bài viết">{{ $post->content }}</textarea>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-success" type="submit">Chỉnh sửa bài viết</button>
                        <a href="{{ route('admin.post.index') }}" class="btn btn-secondary">Trở lại</a>
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
    <script>
        var route_prefix = "/filemanager";
        var csrf_token = '{{ csrf_token() }}';
    </script>
@stop
@section('js')
    <script src="{{ asset('assets/backend/js/postTextEditor.js') }}"></script>
@stop
