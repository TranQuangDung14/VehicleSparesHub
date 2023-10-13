@extends('Admin.layouts.master')

@section('title', 'Quản lý đơn hàng')

@section('content')

    <div class="container-fluid ">
        {{-- tiêu đề trang --}}
        <div class="row ">
            <div class="card border">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    <h5 class="mb-0 card-title fw-semibold ">Quản lý đơn hàng</h5>

                </div>
            </div>
        </div>

        {{-- lọc --}}
        <div class="row">
            <div class="card border">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <label>Nhập mã đơn hàng</label>
                            <form action="{{ route('orderIndex') }}" method="get" enctype="multipart/form-data">
                                <div class="input-group">

                                    <input class="form-control" type="text" name="search" value=" "
                                        placeholder="nhập tên khách hàng">
                                    <button class="btn btn-primary" type="submit"><i class="ti ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">
                            <a href="{{ route('ExportOrder') }}" title="xuất file Excel">
                            <button type="button" class="btn btn-outline-success m-1 mt-4 float-end" ><i class="ti ti-download"></i></button>
                        </a>
                        </div>
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
                                        <h6 class="fw-semibold mb-0">Mã đơn hàng</h6>
                                    </th>

                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tên khách hàng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Ngày đặt hàng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tổng tiền đơn hàng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Hành động</h6>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $key => $value)
                                    <tr>
                                        <td class="border-bottom-0">
                                            {{ $key + 1 }}
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ $value->id }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ $value->customer->name }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span
                                                class="fw-normal">{{ date('d/m/Y', strtotime($value->created_at)) }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal"
                                                style="color: red">{{ number_format($value->total_money, 0, '.', '.') }}
                                                đ</span>
                                        </td>

                                        <td class="border-bottom-0">
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal_{{ $value->id }}"
                                                title="Xem chi tiết đơn hàng"><i class="ti ti-eye-check fs-8"></i></a>
                                            <a href="{{ route('customerEdit', $value->id) }}" title="Sửa danh mục"><i
                                                    class="ti ti-edit fs-8"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $order->links() }}

                    @foreach ($order as $value)
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal_{{ $value->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Chi tiết đơn hàng:
                                            {{ $value->id }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-4">Mã đơn hàng: {{ $value->id }}</div>
                                            <div class="col-4">Tên người nhận: {{ $value->customer->name }}</div>
                                            <div class="col-4">Tổng tiền: <span
                                                    style="color: red">{{ number_format($value->total_money, 0, '.', '.') }}đ</span>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label for="">Thông tin sản phẩm</label>
                                                <table class="table">
                                                    <thead style="background-color: #CFCFCF">
                                                        <tr>
                                                            <th class="col-lg-1">stt</th>
                                                            <th class="col-lg-5">Sản phẩm</th>
                                                            <!-- <th scope="col">Tên sản phẩm</th> -->
                                                            <th class="col-lg-3">Số lượng</th>
                                                            <th class="col-lg-3">Giá</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($value->orderDetails as $key => $order_detail)
                                                            <tr>
                                                                <td> {{ $key + 1 }}</td>
                                                                <td>
                                                                        <img src="{{ asset('storage/image/product/' . $order_detail->product->images[0]->image) }}"
                                                                            alt="Ảnh sản phẩm"
                                                                            style="width: 20%; height: 20%;">
                                                                    <img src="" alt="">
                                                                    <span>
                                                                        {{ $order_detail->product->name }}
                                                                    </span>
                                                                </td>
                                                                <td>{{ $order_detail->quantity }}</td>
                                                                <td style="color: red;">
                                                                    {{ number_format($order_detail->price, 0, '.', '.') }}đ
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>





@endsection
