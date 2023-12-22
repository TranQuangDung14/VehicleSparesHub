@extends('Admin.layouts.master')

@section('title', 'Quản lý kho sản phẩm')

@section('content')

    <div class="container-fluid ">
        {{-- tiêu đề trang --}}
        <div class="row ">
            <div class="card border">
                <div class="card-body">
                    <div class="row">
                        <div class="col-7">
                            <h5 class="mb-0 card-title fw-semibold ">Quản lý kho sản phẩm</h5>
                        </div>
                        <div class="col-5">
                            <a href="{{ route('ExportDetailWarehouse') }}" title="Xuất excel">
                                <button type="button" class="btn btn-success m-1 float-end">
                                    <i class="ti ti-download"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- lọc --}}
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
                                        <h6 class="fw-semibold mb-0">Sản phẩm</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Số lượng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Giá nhập</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Giá bán</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tổng tiền giá nhập</h6>
                                    </th>
                                    {{-- <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Lợi nhuận tối đa</h6>
                                    </th> --}}
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Hành động</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($product as $key => $value)
                                    <tr>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0">{{ $key + 1 }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal"><span style="color: #00FFCC">Mã sản phẩm:
                                                </span>{{ $value->id }}</span>
                                            <h6 class="fw-semibold mb-1" title="{{ $value->name }}"><span
                                                    style="color: #6699FF">Tên sản phẩm</span>:
                                                {{-- {{ $value->name }} --}}
                                                @if (strlen($value->name) > 20)
                                                    {{-- Thay 20 bằng giới hạn ký tự mà bạn muốn --}}
                                                    {{ substr($value->name, 0, 20) }}... {{-- Lấy 20 ký tự đầu tiên --}}
                                                @else
                                                    {{ $value->name }}
                                                @endif
                                            </h6>
                                            <span class="fw-normal"><span style="color: #6699FF">Danh mục:
                                                </span>{{ $value->category->name }}</span>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $value->quantity ?? '0' }}</h6>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0 fs-3">
                                                {{ number_format($value->price_import, 0, '.', ',') ?? '0' }} VNĐ</h6>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0 fs-3">
                                                {{ number_format($value->price, 0, '.', ',') ?? '0' }} VNĐ</h6>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0 fs-3">
                                                {{ number_format($value->quantity * $value->price_import, 0, '.', ',') ?? '0' }} VNĐ
                                            </h6>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal_{{ $value->id }}"
                                                title="Cập nhật số lượng">
                                                <i class="ti ti-pencil-plus fs-8"></i></a>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal_{{ $value->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Cập nhật số lượng sản
                                                        phẩm</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('warehousequantityUpdate', $value->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    {{-- @method('PUT') --}}
                                                    <input type="hidden" name="_method" value="PUT">
                                                    <div class="modal-body">
                                                        {{-- Bạn có chắc muốn xóa sản phẩm này không ? --}}
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label">Số lượng
                                                                trong kho</label>
                                                            <input type="text" class="form-control" id="recipient-name"
                                                                value="{{ $value->quantity ?? '0' }}" disabled>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name" class="col-form-label"> <i
                                                                    class="ti ti-plus" style="color: #6699FF"></i> Nhập
                                                                kho</label>
                                                            <input type="number" class="form-control" id="quantity"
                                                                class="quantity" name="quantity" value="">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Hủy</button>
                                                        {{-- <form action="{{ route('productDelete', $value->id) }}"
                                                        method="POST" enctype="multipart/form-data"> --}}
                                                        {{-- @csrf
                                                        @method('DELETE') --}}
                                                        <button type="submit" class="btn btn-primary">Cập nhật</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $product->links() }}
                </div>
            </div>
        </div>
    </div>





@endsection
