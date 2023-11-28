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
                <div class="col-4">Mã đơn hàng: {{ $order->id }}</div>
                <div class="col-4">Tên người nhận:
                    {{ $order->customer->name ?? $order->customer_->name }}</div>

                <div class="div">Địa chỉ nhận hàng: {{ $order->customer_->adress }}</div>
            </div>
            <div class="row mt-5" style="margin-top:10px">
                <div class="col-12">
                    <label for="">Thông tin sản phẩm</label>
                    <table class="table">
                        <thead style="background-color: #CFCFCF">
                            <tr>
                                <th class="col-1">stt</th>
                                <th class="col-3">Ảnh</th>
                                <th scope="col-2">Tên sản phẩm</th>
                                <th class="col-3">Số lượng</th>
                                <th class="col-3">Giá</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->orderDetails as $key => $order_detail)
                                <tr>
                                    <td> {{ $key + 1 }}</td>
                                    <td>
                                        {{-- @if ($order_detail->product) --}}
                                        <img src="storage/image/product/{{ $order_detail->product->images[0]->image }}"
                                            alt="Ảnh sản phẩm" style="width: 100px; height: auto;">
                                        {{-- @else
                                                <img src="Admin/images/profile/no_image.jpg"
                                                    alt=""
                                                    style="width: 100px; height: auto;">
                                            @endif
                                            <span>
                                                {{ $order_detail->product->name ?? 'Sản phẩm không còn tồn tại trên hệ thống' }}
                                            </span> --}}
                                    </td>
                                    <td> {{ $order_detail->product->name ?? 'Sản phẩm không còn tồn tại trên hệ thống' }}
                                    </td>
                                    <td>{{ $order_detail->quantity }}</td>
                                    <td style="color: red;">
                                        {{ number_format($order_detail->price, 0, '.', '.') }} VNĐ
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="float: right; margin-top:10px">Tổng tiền:
                <span style="color: red">{{ number_format($order->total_money, 0, '.', '.') }} VNĐ</span>
            </div>
        </div>




</body>

</html>
