@extends('Admin.layouts.master')

@section('title', 'Quản lý sản phẩm')

@section('content')
    <style>
        #image-preview img {
            width: 100px;
            height: 100px;
            margin-right: 5px;
        }
    </style>
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card border">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    @if (isset($editData))
                        <h5 class="mb-0 card-title fw-semibold ">Cập nhật sản phẩm </h5>
                    @else
                        <h5 class="mb-0 card-title fw-semibold ">Thêm mới sản phẩm </h5>
                    @endif
                </div>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-x"></i>
                </span>
            </div>
        @endif

        <div class="row d-flex align-items-stretch">
            <div class="card border">
                <div class="card-body">
                    @if (isset($editData))
                        <form action="{{ route('productUpdate', @$editData->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        @else
                            <form action="{{ route('productStore') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                    @endif
                    {{-- danh mục --}}
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Danh mục sản phẩm<span
                                    style="color: red">*</span></label>
                            {{-- <input type="text" class="form-control" name="name" id="name"
                                value="{{ isset($editData) ? $editData->name : old('name') }}"> --}}
                            <select name="category_id" id="category_id" class="col-lg-12 border rounded-pill">
                                <option value="" disabled selected>--Chọn danh mục sản phẩm--</option>
                                @foreach ($category as $cate)
                                    <option value="{{ $cate->id }}"
                                        {{ isset($editData) ? ($editData->category_id == $cate->id ? 'selected' : '') : (old('category_id') == $cate->id ? 'selected' : '') }}>
                                        {{ $cate->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                                <span class="text-danger" role="alert">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>

                        {{-- Tên --}}

                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Tên sản phẩm <span
                                    style="color: red">*</span></label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ isset($editData) ? $editData->name : old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        {{-- <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Số lượng</label>
                            <input type="number" class="form-control" name="quantity" id="quantity"
                                value="{{ isset($editData) ? $editData->quantity : old('quantity') }}">
                        </div> --}}

                        {{-- Giá --}}

                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Giá nhập<span
                                    style="color: red">*</span></label>
                            <input type="number" class="form-control" name="price_import" id="price_import"
                                value="{{ isset($editData) ? $editData->price_import : old('price_import') }}">
                            @if ($errors->has('price_import'))
                                <span class="text-danger" role="alert">{{ $errors->first('price_import') }}</span>
                            @endif
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleInputEmail1" class="form-label">Giá bán<span
                                    style="color: red">*</span></label>
                            <input type="number" class="form-control" name="price" id="price"
                                value="{{ isset($editData) ? $editData->price : old('price') }}">
                            @if ($errors->has('price'))
                                <span class="text-danger" role="alert">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                    </div>

                    {{-- thông số & mô tả ngắn --}}
                    <div class="row mt-3">
                        <div class="input-effect sm2_mb_20 md_mb_20 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Thông số</label>
                            <textarea name="tech_specs" id="tech_specs">
                                {{ isset($editData) ? $editData->tech_specs : '' }}
                            </textarea>
                        </div>
                        <div class="input-effect sm2_mb_20 md_mb_20 col-lg-6">
                            <label for="exampleInputEmail1" class="form-label">Mô tả ngắn</label>
                            <textarea name="short_description" id="short_description">
                                {{ isset($editData) ? $editData->short_description : '' }}
                            </textarea>
                        </div>
                    </div>

                    {{-- Mô tả --}}
                    <div class="row mt-5">
                        <div class="input-effect sm2_mb_20 md_mb_20">
                            <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                            <textarea name="description" id="description">
                                {{ isset($editData) ? $editData->description : '' }}
                            </textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <label for="Ảnh" class="form-label">Ảnh</label>
                        <input type="file" name="image[]" multiple>
                        <div id="image-preview">
                            @if (isset($editData->images) && $editData->images->count() > 0)
                                @foreach ($editData->images as $image)
                                    <img src="{{ asset('storage/image/product/' . $image->image) }}" alt="Ảnh">
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a class="btn btn-outline-primary mr-20 btn-back" href="{{ route('productIndex') }}">Quay lại</a>
                        @if (isset($editData))
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        @else
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        @endif
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace('short_description');
        CKEDITOR.replace('tech_specs');
        CKEDITOR.replace('description');
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Lắng nghe sự kiện khi người dùng chọn tệp ảnh
            $('input[type="file"]').change(function() {
                // Xóa bất kỳ ảnh trước đó trong phần hiển thị
                $('#image-preview').empty();

                // Lặp qua từng tệp ảnh đã chọn và hiển thị chúng
                for (var i = 0; i < this.files.length; i++) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        // Tạo một thẻ <img> để hiển thị tệp ảnh
                        var image = $('<img>').attr('src', e.target.result);
                        // Thêm tệp ảnh vào phần hiển thị
                        $('#image-preview').append(image);
                    };
                    // Đọc tệp ảnh
                    reader.readAsDataURL(this.files[i]);
                }
            });
        });
    </script>
@endsection
