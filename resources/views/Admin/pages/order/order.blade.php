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
                                <button type="button" class="btn btn-outline-success m-1 mt-4 float-end"><i
                                        class="ti ti-download"></i></button>
                            </a>
                            {{-- <a href="" title="xuất file Excel"> --}}
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal_add"
                                class="btn btn-primary m-1 mt-4 float-end" title="Tạo đơn hàng"><i
                                    class="ti ti-plus"></i></button>
                            {{-- </a> --}}
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
                                        <h6 class="fw-semibold mb-0">Tên Khách hàng</h6>
                                    </th>
                                    <th class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">Tên người nhận</h6>
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
                                            @if ($value->status != 2)
                                                <span class="fw-normal">DH0{{ $value->id }} </span>
                                            @else
                                                <span class="fw-normal">DH0{{ $value->id }}- <span
                                                        style="background-color:#FF6666 ; color: black">(Đơn đã hủy)
                                                    </span></span>
                                            @endif

                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ $value->customer_->name }}</span>
                                            {{-- class="fw-normal">{{ $value->receiver_name ?? $value->customer_->name }}</span> --}}
                                        </td>
                                        <td class="border-bottom-0">
                                            <span {{-- class="fw-normal">{{ $value->customer->name ?? $value->customer_->name }}</span> --}}
                                                class="fw-normal">{{ $value->receiver_name ?? $value->customer_->name }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span
                                                class="fw-normal">{{ date('d/m/Y', strtotime($value->created_at)) }}</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <span class="fw-normal">{{ number_format($value->total_money, 0, '.', '.') }}
                                                đ</span>
                                        </td>
                                        <td class="border-bottom-0">
                                            <a href="" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal_{{ $value->id }}"
                                                title="Xem chi tiết đơn hàng"><i class="ti ti-eye-check fs-8"></i></a>

                                            {{-- hủy đơn --}}
                                            {{-- <button type="button" class="btn btn-outline-warning m-1 float-end"> --}}
                                            @if ($value->status != 2)
                                                <a href="" data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal_cancel_{{ $value->id }}"
                                                    title="Hủy đơn">
                                                    <i class="ti ti-refresh-off fs-8"></i>
                                                </a>
                                            @endif
                                            {{-- </button> --}}

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $order->links() }}

                    @foreach ($order as $value)
                        <!-- Modal chi tiết đơn hàng-->
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
                                            <div class="col-3">Mã đơn hàng: DH0{{ $value->id }}</div>
                                            <div class="col-3">Tên người nhận:
                                                {{-- {{ $value->customer->name ?? $value->customer_->name }} --}}
                                                {{ $value->receiver_name ?? $value->customer_->name }}
                                            </div>
                                            <div class="col-3">Tổng tiền:
                                                <span>
                                                    {{ number_format($value->total_money, 0, '.', '.') }}đ
                                                </span>
                                            </div>
                                            <div class="col-3">Số điện thoại:
                                                {{ $value->number_phone }}
                                            </div>


                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-5">Địa chỉ nhận:
                                                {{ $value->receiver_address }}
                                            </div>
                                        </div>
                                        @if ($value->status == 2)
                                            <div class="row mt-3">
                                                <div class="col-12">
                                                    <label>Tình trạng đơn hàng:</label>
                                                    <span
                                                        style="background-color:#FF6666 ; color: black; padding: 5px 5px 5px 5px">
                                                        Đã hủy
                                                    </span>

                                                </div>
                                            </div>
                                        @endif
                                        {{-- pdf --}}
                                        {{-- <div class="row">
                                            <div class="col-12">
                                                <a href="{{ route('ExportPDFOrder', $value->id) }}" title="Xuất excel">
                                                    <button type="button" class="btn btn-danger m-1 float-end">

                                                        <i class="ti ti-download"></i>
                                                    </button>
                                                </a>
                                            </div>
                                        </div> --}}

                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <label for="">Thông tin sản phẩm</label>
                                                <table class="table">
                                                    <thead style="background-color: #CFCFCF">
                                                        <tr>
                                                            <th class="col-lg-1">stt</th>
                                                            <th class="col-lg-4">Sản phẩm</th>
                                                            <!-- <th scope="col">Tên sản phẩm</th> -->
                                                            <th class="col-lg-1">Số lượng</th>
                                                            <th class="col-lg-3">Đơn giá</th>
                                                            <th class="col-lg-3">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($value->orderDetails as $key => $order_detail)
                                                            <tr>
                                                                <td> {{ $key + 1 }}</td>
                                                                <td>
                                                                    @if ($order_detail->product)
                                                                        <img src="{{ asset('storage/image/product/' . $order_detail->product->images[0]->image) }}"
                                                                            alt="Ảnh sản phẩm"
                                                                            style="width: 20%; height: 20%;">
                                                                    @else
                                                                        <img src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                                            alt=""
                                                                            style="width: 20%; height: 20%;">
                                                                    @endif
                                                                    <span>
                                                                        {{ $order_detail->product->name ?? 'Sản phẩm không còn tồn tại trên hệ thống' }}
                                                                    </span>
                                                                </td>
                                                                <td>{{ $order_detail->quantity }}</td>
                                                                <td>
                                                                    @if($order_detail->product)
                                                                        {{ number_format($order_detail->product->price, 0, '.', '.')}} đ
                                                                    @else
                                                                        0
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                @if($order_detail->product)
                                                                    {{ number_format($order_detail->price, 0, '.', '.') }}đ
                                                                 @else
                                                                        0
                                                                 @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="{{ route('ExportPDFOrder', $value->id) }}" title="Xuất excel">
                                                <button type="button" class="btn btn-success m-1 float-end">

                                                    <i class="ti ti-download"></i>
                                                </button>
                                            </a>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- modal hủy đơn hàng --}}
                        <div class="modal fade" id="exampleModal_cancel_{{ $value->id }}" tabindex="-1"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">

                                        <h5 class="modal-title" id="exampleModalLabel">Hủy đơn </h5>


                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Bạn có chắc chắn hủy đơn hàng này chứ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Hủy</button>
                                        <form action="{{ route('orderStatus') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" class="id" name="id" id=""
                                                value="{{ $value->id }}">

                                            <input type="hidden" name="status" id="" value="2"
                                                {{ $value->status == 2 }}>
                                            <button type="submit" class="btn btn-primary">Hủy đơn</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- modal tạo đơn hàng --}}
    <div class="modal fade" id="exampleModal_add" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: var(--bs-warning-text)">Tạo mới đơn hàng
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('orderStore') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <h5 for="exampleInputEmail1" class="form-label" style="color: var(--bs-primary-text)">Nhập thông
                            tin khách hàng<span style="color: red">*</span></h5>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="exampleInputEmail1" class="form-label">Tên khách hàng<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" name="name" id="name" value=""
                                    required>
                                @if ($errors->has('name'))
                                    <span class="text-danger" role="alert">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ<span
                                        style="color: red">*</span></label>
                                <input type="text" class="form-control" name="adress" id="adress" value=""
                                    required>
                                @if ($errors->has('adress'))
                                    <span class="text-danger" role="alert">{{ $errors->first('adress') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-6">
                                <label for="exampleInputEmail1" class="form-label">Số điện thoại<span
                                        style="color: red">*</span></label>
                                {{-- <input type="number" class="form-control" name="number_phone" id="number_phone"
                                    value="" max="10" required> --}}
                                <input type="number" class="form-control" name="number_phone" id="number_phone"
                                    value="" required pattern="[0-9]{10}"
                                    title="Số điện thoại phải có đúng 10 chữ số">
                                @if ($errors->has('number_phone'))
                                    <span class="text-danger" role="alert">{{ $errors->first('number_phone') }}</span>
                                @endif
                            </div>
                            <div class="mb-3 col-6">
                                <label for="exampleInputEmail1" class="form-label">Email
                                    {{-- <span style="color: red">*</span></label> --}}
                                    <input type="text" class="form-control mt-2" name="email" id="email"
                                        value="">
                            </div>
                        </div>
                        <h5 for="exampleInputEmail1" class="form-label" style="color: var(--bs-primary-text)">Đơn hàng
                        </h5>
                        <div class="row">
                            <span class="col-lg-6 ">Sản phẩm</span>
                            <!-- <th scope="col">Tên sản phẩm</th> -->
                            <span class="col-lg-2 ms-3">Số lượng<span style="color: red">*</span></span>
                            <span class="col-lg-2 ms-3">Giá</span>
                            {{-- </tr>
                            </thead> --}}
                        </div>
                        <div class="row">
                            <div id="products-container">
                                <!-- Dùng JavaScript để thêm các trường sản phẩm vào đây -->
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-8"><span style="float: right">Tổng tiền: </span>
                            </div>
                            <div id="total-amount" class="col-2"></div>
                            <div class="col-2">VNĐ</div>
                            <input type="hidden" id="total" name="total_money">
                        </div>
                        <button type="button" class="btn btn-secondary" id="add-product-button">Thêm sản phẩm</button>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng
                            </button>
                            <button type="submit" class="btn btn-primary">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" /> --}}

    <script type="text/javascript">
        $(document).ready(function() {
            var productsContainer = $('#products-container');
            var addProductButton = $('#add-product-button');

            addProductButton.click(function() {
                // // Tạo một bản sao của danh sách sản phẩm đã chọn
                var selectedProducts = productsContainer.find(
                    '.product-field select.product-select option:selected');

                var productField =
                    '<div class="product-field row mt-1">' +
                    '<select name="product_id[]" class="product-select col-lg-6" >' +
                    '<option value="" >--Chọn sản phẩm--</option>' +
                    '@foreach ($product as $pro)' +
                    '<option value="{{ $pro->id }}" data-price="{{ $pro->price }}" data-quantity="{{ $pro->quantity }}">{{ $pro->name }}</option>' +
                    '@endforeach' +
                    '</select>' +
                    '<div class="col-lg-2 ms-2" >' +
                    '<input type="number" class="form-control" name="quantity[]" placeholder="Số lượng" required>' +
                    '</div>' +
                    '<div class="col-lg-2 ms-2" >' +
                    '<input type="number" class="form-control" name="price[]" placeholder="Giá" readonly>' +

                    '</div>' +
                    '<div class="col-lg-1" >' +
                    '<button class="btn btn-danger remove-product">Xóa</button>' +
                    '</div>' +
                    '</div>';


                // Loại bỏ sản phẩm đã chọn từ danh sách sản phẩm mới thêm vào
                selectedProducts.each(function() {
                    var selectedProductId = $(this).val();
                    productField = productField.replace('<option value="' + selectedProductId + '"',
                        '<option value="' + selectedProductId + '" disabled');
                });

                productsContainer.append(productField);

                // Định nghĩa một hàm để tính tổng tiền
                function calculateTotal() {
                    var total = 0;
                    productsContainer.find('.product-field').each(function() {
                        var quantity = $(this).find('input[name="quantity[]"]').val();
                        var price = $(this).find('.product-select option:selected').data('price');
                        var totalPriceField = $(this).find('input[name="price[]"]');
                        totalPriceField.val(quantity * price);
                        total += (quantity * price);
                    });
                    $('#total-amount').text(total.toFixed(2)); // Hiển thị tổng tiền
                    $('#total').val(total);
                    // console.log(total);
                    // total =$(this).find('div[name="price"]');

                }

                // Theo dõi sự thay đổi trong trường số lượng và tính toán lại tổng tiền
                productsContainer.on('input', '.product-field input[name="quantity[]"]', function() {
                    calculateTotal();
                });
                // js xóa
                productsContainer.on('click', '.remove-product', function() {
                    $(this).closest('.product-field').remove(); // Loại bỏ phần tử sản phẩm
                    calculateTotal(); // Cập nhật tổng tiền sau khi xóa
                });

                // js xử lý so sánh số lượng
                productsContainer.on('input', '.product-field input[name="quantity[]"]', function() {
                    var quantityInput = $(this);
                    var selectedProductId = quantityInput.closest('.product-field').find(
                        '.product-select').val();
                    var availableQuantity = parseInt(quantityInput.closest('.product-field').find(
                        '.product-select option:selected').data('quantity'));
                    var enteredQuantity = parseInt(quantityInput.val());

                    if (enteredQuantity > availableQuantity) {
                        alert('Vượt qua số lượng trong kho!');
                        quantityInput.val(
                            availableQuantity); // Đặt lại giá trị thành số lượng trong kho
                    }
                    calculateTotal();
                });
            });
        });


        //bắt điều kiện nhập 10 số
        document.getElementById('number_phone').addEventListener('input', function(e) {
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });
    </script>


@endsection
