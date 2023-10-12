@extends('Admin.layouts.master')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    @if (isset($editData))
                        <h5 class="mb-0 card-title fw-semibold ">Cập nhật danh mục sản phẩm </h5>
                    @else
                        <h5 class="mb-0 card-title fw-semibold ">Thêm mới danh mục sản phẩm </h5>
                    @endif
                </div>
            </div>
        </div>
        @if (session('error'))
        <div class="alert alert-danger" id="error-alert">
            {{ session('error') }}
                {{-- <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close"> --}}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                <i class="ti ti-x"></i>
            </span>
        </div>
    @endif

        <div class="row d-flex align-items-stretch">
            <div class="card">
                <div class="card-body">
                    @if (isset($editData))
                        <form action="{{ route('categoryUpdate', @$editData->id) }}" method="PUT" enctype="multipart/form-data">
                        @else
                            <form action="{{ route('categoryStore') }}" method="POST" enctype="multipart/form-data">
                    @endif
                    @csrf
                    <div class="row">
                        <div class="mb-3 col-5">
                            <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" name="name" id="name"
                                value="{{ isset($editData) ? $editData->name : old('name') }}">
                        </div>
                        @if ($errors->has('name'))
                            <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="row mt-3">
                        <div class="input-effect sm2_mb_20 md_mb_20">
                            <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                            <textarea name="description" id="description">
                                {{ isset($editData) ? $editData->description : '' }}
                            </textarea>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a class="btn btn-outline-primary mr-20 btn-back" href="{{ route('categoryIndex') }}">Quay lại</a>
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
        CKEDITOR.replace('description');
    </script>
@endsection
