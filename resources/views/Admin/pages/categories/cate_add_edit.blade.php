@extends('Admin.layouts.master')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    <h5 class="mb-0 card-title fw-semibold ">Thêm mới danh mục sản phẩm </h5>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-stretch">
            <div class="card">
                <div class="card-body">
                    {{-- {{ Form::open(['class' => 'form-horizontal','files' => true, 'route' => ['categoryStore'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) }} --}}
                    <form action="{{ route('categoryStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-5">
                                <label for="exampleInputEmail1" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                {{-- <textarea name="description" ></textarea> --}}
                                <label for="exampleInputEmail1" class="form-label">Mô tả</label>
                                {{-- <div id="description" name="description"></div> --}}
                                <textarea name="description" id="description"></textarea>
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                        {{-- {{ Form::close() }} --}}
                    </form>

                </div>
            </div>
        </div>
    </div>


    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
