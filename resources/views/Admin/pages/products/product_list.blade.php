@extends('Admin.layouts.master')

@section('title', 'Quản lý sản phẩm')

@section('content')
    <div class="container-fluid">
        {{-- tiêu đề trang --}}
        <div class="row">
            <div class="card">
                <div class="card-body">
                    {{-- <h5 class="card-title fw-semibold mb-4">Danh mục sản phẩm</h5> --}}
                    <h5 class="mb-0 card-title fw-semibold ">Quản lý sản phẩm </h5>
                </div>
            </div>
        </div>
        {{-- lọc --}}
        <div class="row">
            <div class="card border">
                <div class="card-body">
                    <div class="row">

                        <div class="col-8">
                            <label>Nhập tên sản phẩm để tìm kiếm</label>
                            <form action="{{ route('productIndex') }}" method="get" enctype="multipart/form-data">
                                <div class="input-group">

                                    <input class="form-control" type="text" name="search" value=""
                                        placeholder="nhập tên sản phẩm">
                                    <button class="btn btn-primary" type="submit"><i class="ti ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="col-4">

                            <a href="{{ route('productCreate') }}"> <button type="button"
                                    class="btn btn-primary m-1 float-end" title="Thêm mới sản phâm"><i
                                        class="ti ti-plus"></i></button></a>
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
                    <i class="ti ti-x"></i>
                </span>
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
                <span type="button" class="X-close float-end" data-dismiss="alert" aria-label="Close">
                    <i class="ti ti-x"></i>
                </span>
            </div>
        @endif
        {{-- content --}}
        <div class="row d-flex align-items-stretch">
            <div class="card border w-100">
                <div class="card-body p-4">
                    {{-- <h5 class="card-title fw-semibold mb-4">Recent Transactions</h5> --}}
                    <div id="list_product" class="table-responsive">
                        <table class="table text-nowrap mb-0 align-middle">
                            <thead class="text-dark fs-4">
                                <tr>
                                    <th class="border-bottom-0 col-1">
                                        <h6 class="fw-semibold mb-0">STT</h6>
                                    </th>
                                    <th class="border-bottom-0  col-2">
                                        <h6 class="fw-semibold mb-0">Thông tin sản phẩm</h6>
                                    </th>
                                    <th class="border-bottom-0 col-2">
                                        <h6 class="fw-semibold mb-0">Ảnh</h6>
                                    </th>
                                    <th class="border-bottom-0 col-2">
                                        <h6 class="fw-semibold mb-0">Giá tiền</h6>
                                    </th>
                                    <th class="border-bottom-0 col-1">
                                        <h6 class="fw-semibold mb-0">Số lượng</h6>
                                    </th>
                                    <th class="border-bottom-0 col-1">
                                        <h6 class="fw-semibold mb-0">Bán chạy</h6>
                                    </th>
                                    <th class="border-bottom-0 col-2">
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
                                            <h6 class="fw-semibold mb-1" title="{{$value->name}}"><span style="color: #6699FF">Tên sản phẩm</span>:
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
                                        <td class="border-bottom-0">

                                            @if ($value->images->count() > 0)
                                                <img src="{{ asset('storage/image/product/' . $value->images[0]->image) }}"
                                                    alt="Ảnh sản phẩm" style="width: 80%; height: auto;">
                                            @else
                                                <img src="{{ asset('Admin/') }}/images/profile/no_image.jpg" alt=""
                                                    width="120" height="100">
                                            @endif
                                        </td>
                                        <td class="border-bottom-0 ">
                                            {{-- <div class="d-flex align-items-center gap-2"> --}}
                                            <span class="fw-normal">
                                                {{ number_format($value->price, 0, '.', ',') }}
                                                <span >vnđ</span></span>
                                            {{-- </div> --}}
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <h6 class="fw-semibold mb-0 fs-4">{{ $value->quantity ?? '0' }}</h6>
                                        </td>
                                        <td class="border-bottom-0 ">
                                            {{-- <h6 class="fw-semibold mb-0 fs-4">{{ $value->quantity ?? '-' }}</h6> --}}

                                            {{-- <form method="POST" action="{{ route('productUpdateStatus', ['id' => $value->id]) }}">
                                                @csrf
                                                @method('PUT') --}}
                                            {{-- <input type="checkbox" name="selling" id="selling" value="active"> --}}
                                            {{-- <div class="form-group"> --}}
                                            {{-- <label for="selling">Trạng thái:</label> --}}
                                            <input type="checkbox" name="selling" id="{{ $value->id }}" value="on"
                                                class="switch-document" {{ $value->selling == 1 ? 'checked' : '' }}>
                                            {{-- <input type="checkbox" name="selling" id="selling" value="active" {{ $product->selling == 1 ? 'checked' : '' }}> --}}

                                            {{-- <button type="submit" class="btn btn-primary">Cập nhật trạng thái</button> --}}
                                            {{-- </div> --}}
                                            {{-- </form> --}}
                                        </td>
                                        <td class="border-bottom-0 ">
                                            <a href="{{ route('productEdit', $value->id) }}" title="Sửa danh mục"><i
                                                    class="ti ti-edit fs-8"></i></a>
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal_{{ $value->id }}" title="Xóa danh mục"><i
                                                    class="ti ti-trash-x fs-8"></i></a>
                                        </td>

                                    </tr>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal_{{ $value->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Xóa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Bạn có chắc muốn xóa sản phẩm này không ?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Hủy</button>
                                                    <form action="{{ route('productDelete', $value->id) }}"
                                                        method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Xóa</button>
                                                    </form>
                                                </div>
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

    <script>
        $(document).on("change", ".switch-document", function() {
            var id = $(this).attr("id");
            console.log(id);
            if ($(this).is(":checked")) {
                var status = "on";
                var message = "Kích hoạt trạng thái thành công!!";
            } else {
                var status = "off";
                var message = "Ngừng kích hoạt trạng thái thành công!";
            }
            var formData = {
                status: status,
                id: id
            };
            console.log(formData);

            // var url = $("#url").val();
            // console.log('đya nề',url);
            $.ajax({
                type: "GET",
                data: formData,
                dataType: "json",
                url: "Products/update_status",
                success: function(data) {
                    console.log('data đây',data);

                    setTimeout(function() {
                        toastr.success(
                            message,
                            // $('#list_product').reload(),
                            "Thành công", {
                                iconClass: "customer-info",
                            }, {
                                timeOut: 2000,
                            }
                        );
                    }, 500);
                },
                error: function(data) {
                    console.log(data);
                    setTimeout(function() {
                        toastr.error("Cập nhật lỗi!", "Error Alert", {
                            timeOut: 5000,
                        });
                    }, 500);
                },
            });
        });
    </script>


@endsection
