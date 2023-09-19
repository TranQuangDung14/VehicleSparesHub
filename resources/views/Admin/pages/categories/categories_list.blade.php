@extends('Admin.layouts.master')

@section('title', 'Danh mục sản phẩm')

@section('content')
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    <h5 class="mb-0 card-title fw-semibold ">Danh mục sản phẩm </h5>

                </div>
            </div>
        </div>
        {{-- lọc --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">

                            <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5>
                        </div>
                        <div class="col-4">

                            <a href="{{ route('categoryCreate') }}"> <button type="button"
                                    class="btn btn-primary m-1 float-end"><i class="ti ti-plus"></i></button></a>
                        </div>
                    </div>
                    {{-- <p class="mb-0">This is a sample page </p> --}}
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-stretch">
            <div class="card w-100">
                <div class="card-body p-4">
                    {{-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> --}}
                    <div class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">STT</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tên danh mục</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Hành động</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $key => $value)
                                    <tr>
                                        <td class="border-bottom-0">
                                             {{$key+1}}
                                        </td>
                                        <td class="border-bottom-0">
                                            {{-- <h6 class="fw-semibold mb-1">Sunil Joshi</h6> --}}
                                            <span class="fw-normal">{{$value->name}}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a href="{{route('categoryEdit',$value->id)}}" title="Sửa danh mục"><i class="ti ti-edit fs-8"></i></a>
                                            <a href="" title="Xóa danh mục"><i class="ti ti-trash-x fs-8"></i></a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
