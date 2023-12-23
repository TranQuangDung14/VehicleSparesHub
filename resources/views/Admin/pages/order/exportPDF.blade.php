<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="Admin/css/styles.min.css" /> --}}
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script> --}}
</head>

<body>
    <style>
        body {
            font-family: 'DejaVu Sans', sans-serif;
        }
        table {
            /* font-family: arial, sans-serif; */
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <!-- Modal -->

    <div class="container">
        <div class="container">
            <div class="row">
                <h2 style="text-align: center">Nam Hải Auto</h2>
                <h2 style="text-align: center">289 Nguyễn Xiển-TX-HN</h2>
                <h2 style="text-align: center">Hóa đơn</h2>
            </div>
            <div class="row">
                <div class="col-4"style="margin-top:10px ">Mã đơn hàng: DH0{{ $order->id }}</div>
                <div class="col-4" style="margin-top:10px ">Tên người nhận:
                    {{ $order->receiver_name ?? $order->customer_->name }}</div>
                    <div class="col-4" style="margin-top:10px ">Số điện thoại người nhận: {{ $order->number_phone }}</div>
                <div class="div" style="margin-top:10px ">Ngày đặt hàng: {{ date('d/m/Y', strtotime($order->created_at)) }}</div>
                <div class="div" style="margin-top:10px ">Địa chỉ nhận hàng: {{ $order->customer_->adress ?? $order->receiver_address}}</div>
            </div>
            <div class="row mt-5" style="margin-top:10px">
                <div class="col-12">
                    <label for="">Thông tin sản phẩm</label>
                    <table class="table">
                        <thead style="background-color: #CFCFCF">
                            <tr>
                                <th class="col-1">STT</th>
                                <th class="col-3">Ảnh</th>
                                <th scope="col-2">Tên sản phẩm</th>
                                <th class="col-3">Số lượng</th>
                                <th class="col-3">Đơn giá</th>
                                <th class="col-3">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails as $key => $order_detail)
                                <tr>
                                    <td> {{ $key + 1 }}</td>
                                    <td>
                                        <img src="storage/image/product/{{ $order_detail->product->images[0]->image }}"
                                            alt="Ảnh sản phẩm" style="width: 100px; height: auto;">
                                    </td>
                                    <td> {{ $order_detail->product->name ?? 'Sản phẩm không còn tồn tại trên hệ thống' }}
                                    </td>
                                    <td>{{ $order_detail->quantity }}</td>
                                    <td>
                                        {{ number_format($order_detail->product->price, 0, '.', '.')?? 'Sản phẩm không còn tồn tại trên hệ thống' }} VNĐ
                                    </td>
                                    <td>
                                        {{ number_format($order_detail->price, 0, '.', '.') }} VNĐ
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="float: right; margin-top:10px">Tổng tiền:
                <span>{{ number_format($order->total_money, 0, '.', '.') }} VNĐ</span>
            </div>
        </div>




</body>

</html>
