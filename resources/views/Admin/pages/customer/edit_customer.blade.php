@extends('Admin.layouts.master')

@section('title', 'Cập nhật thông tin khách hàng')

@section('content')
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-0 card-title fw-semibold ">Cập nhật thông tin khách hàng </h5>
                </div>
            </div>
        </div>
        @if (session('error'))
            <div class="alert alert-danger" id="error-alert">
                {{ session('error') }}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-x"></i>
                </span>
            </div>
        @endif

        <div class="row d-flex align-items-stretch">
            <div class="card">
                <div class="card-body">
                    {{-- @if (isset($editData)) --}}
                    <form action="{{ route('customerUpdate', @$editData->id) }}" method="PUT"
                        enctype="multipart/form-data">
                        {{-- @else
                            <form action="{{ route('categoryStore') }}" method="POST" enctype="multipart/form-data">
                    @endif --}}
                        @csrf
                        <div class="row">
                            <div class="mb-3 col-5">
                                <label for="exampleInputEmail1" class="form-label">Tên khách hàng</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ isset($editData) ? $editData->name : old('name') }}">
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        {{-- ngày sinh --}}
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                <label for="exampleInputEmail1" class="form-label">Ngày tháng năm sinh</label>
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                    value="{{ isset($editData) ? $editData->date_of_birth : old('date_of_birth') }}">
                            </div>
                        </div>
                        {{-- giới tính --}}
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                <label for="exampleInputEmail1" class="form-label">Giới tính</label>
                                {{-- <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                            value="{{ isset($editData) ? $editData->date_of_birth : old('date_of_birth') }}"> --}}
                                <select name="sex" id="sex">
                                    <option value="" disabled selected>Chọn giới tính</option>
                                    <option value="Nam" {{ isset($editData->sex) ? ($editData->sex == 'Nam' ? 'selected' : '') : '' }}>Nam</option>
                                    <option value="Nữ" {{ isset($editData->sex) ? ($editData->sex == 'Nữ' ? 'selected' : '') : '' }}>Nữ</option>
                                </select>
                            </div>
                        </div>
                        {{-- Số điện thoại --}}
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                <input type="Number" class="form-control" name="number_phone" id="number_phone"
                                    value="{{ isset($editData) ? $editData->number_phone : old('number_phone') }}">
                            </div>
                        </div>
                        {{-- email --}}
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                <label for="exampleInputEmail1" class="form-label">email</label>
                                <input type="text" class="form-control" name="email" id="email"
                                    value="{{ isset($editData) ? $editData->email : old('email') }}">
                            </div>
                        </div>
                        {{-- địa chỉ --}}
                        <div class="row mt-3">
                            <div class="input-effect sm2_mb_20 md_mb_20">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" name="adress" id="adress"
                                    value="{{ isset($editData) ? $editData->adress : old('adress') }}">
                            </div>
                        </div>
                        <div class="text-center mt-5">
                            <a class="btn btn-outline-primary mr-20 btn-back" href="{{ route('customerIndex') }}">
                                Quay lại</a>
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
