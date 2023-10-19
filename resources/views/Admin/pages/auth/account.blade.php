@extends('Admin.layouts.master')

@section('title', 'Quản lý tài khoản')

@section('content')

    <div class="container-fluid ">
        {{-- tiêu đề trang --}}
        <div class="row ">
            <div class="card border">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    <h5 class="mb-0 card-title fw-semibold ">Quản lý tài khoản</h5>

                </div>
            </div>
        </div>
        {{-- lọc --}}
        <div class="row">
            <div class="card border">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <label>Nhập tên tài khoản</label>
                            <form action="{{ route('accountIndex') }}" method="get" enctype="multipart/form-data">
                                <div class="input-group">

                                    <input class="form-control" type="text" name="search" value=""
                                        placeholder="nhập tên tài khoản">
                                    <button class="btn btn-primary" type="submit"><i class="ti ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        {{-- <div class="col-4">

                            <a href="{{ route('categoryCreate') }}"> <button type="button"
                                    class="btn btn-primary m-1 float-end" title="Thêm mới danh mục"><i
                                        class="ti ti-plus"></i></button></a>
                        </div> --}}
                    </div>
                    {{-- <p class="mb-0">This is a sample page </p> --}}
                </div>
            </div>
        </div>
        @if (session('success'))
            <div class="alert alert-success" id="success-alert">
                {{ session('success') }}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                    {{-- <span aria-hidden="true">&times;</span> --}}<i class="ti ti-x"></i>
                </span>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" id="error-alert">
                {{ session('error') }}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-x"></i>
                </span>
            </div>
        @endif
        <div class="row d-flex align-items-stretch">
            <div class="card w-100 border">
                <div class="card-body p-4">
                    {{-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> --}}
                    <div class="table-responsive container">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">STT</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tên tài khoản</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tên đăng nhập(email)</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Quyền</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user as $key => $value)
                                    <tr>
                                        <td class="border-bottom-0">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ $value->name }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ $value->email }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            @if ($value->role == 1)
                                                <span class="fw-normal">Admin</span>
                                            @elseif ($value->role == 2)
                                                <span class="fw-normal">User</span>
                                            @endif
                                        </td>
                                        {{-- <td class="border-bottom-0">
                                            <a href="{{ route('categoryEdit', $value->id) }}" title="Sửa danh mục"><i
                                                    class="ti ti-edit fs-8"></i></a>
                                                <!-- Modal -->
                                        </td> --}}

                                    </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    {{ $user->links() }}
                </div>
            </div>
        </div>
    </div>





@endsection
