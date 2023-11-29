@extends('User.layouts.master')

@section('title', 'Thanh toán')

@section('content')
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">
                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        {{-- <form name="checkout" method="post" class="checkout woocommerce-checkout "  action="#" enctype="multipart/form-data"> --}}
                        <form action="{{ route('checkout') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row pt-0 ">
                                <div class="large-7 col  ">
                                    <div id="customer_details">
                                        <div class="clear">
                                            <div class="woocommerce-billing-fields">
                                                <h3>Thông tin thanh toán</h3>
                                                <div class="woocommerce-billing-fields__field-wrapper">
                                                    <p class="form-row form-row-wide validate-required"
                                                        id="billing_first_name_field" data-priority="10">
                                                        <label for="billing_first_name" class="">Tên&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text"class="input-text " name="receiver_name"
                                                                id="receiver_name"
                                                                value="{{ $data['customer']->name ?? 'null' }}"
                                                                required /></span>
                                                    </p>
                                                    <p class="form-row address-field form-row-wide validate-required"
                                                        id="billing_address_1_field" data-priority="50">
                                                        <label for="billing_address_1" class="">
                                                            Địa chỉ&nbsp;
                                                            <abbr lass="required" title="bắt buộc">*</abbr></label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="text" class="input-text "
                                                                name="receiver_address" id="receiver_address"
                                                                placeholder="Địa chỉ"
                                                                value="{{ $data['customer']->adress ?? 'null' }}"
                                                                required /></span>
                                                    </p>
                                                    <p class="form-row form-row-wide validate-required validate-phone"
                                                        id="billing_phone_field" data-priority="100">
                                                        <label for="billing_phone" class="">
                                                            Số điện thoại&nbsp;
                                                            <abbr class="required" title="bắt buộc">*</abbr>
                                                        </label>
                                                        <span class="woocommerce-input-wrapper">
                                                            <input type="number" class="input-text " name="number_phone"
                                                                id="number_phone" placeholder=""
                                                                value="{{ $data['customer']->number_phone ?? 'null' }}"
                                                                utocomplete="tel" / required>
                                                            @if ($errors->has('number_phone'))
                                                                <span class="text-danger"
                                                                    role="alert" style="color: red">{{ $errors->first('number_phone') }}</span>
                                                            @endif
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clear">
                                            <div class="woocommerce-shipping-fields">
                                            </div>
                                            <div class="woocommerce-additional-fields">
                                                <h3>Thông tin bổ sung</h3>
                                                <div class="woocommerce-additional-fields__field-wrapper">
                                                    <p class="form-row notes" id="order_comments_field" data-priority="">
                                                        <label for="order_comments" class="">Ghi chú đơn
                                                            hàng&nbsp;<span class="optional">(tuỳ chọn)</span></label><span
                                                            class="woocommerce-input-wrapper">
                                                            <textarea name="note" class="input-text " id="note"
                                                                placeholder="Ghi chú về đơn hàng, ví dụ: thời gian hay chỉ dẫn địa điểm giao hàng chi tiết hơn." rows="2"
                                                                cols="5"></textarea>
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="large-5 col">
                                    <div class="col-inner has-border">
                                        <div class="checkout-sidebar sm-touch-scroll">
                                            <h3 id="order_review_heading">Đơn hàng của bạn</h3>
                                            <div id="order_review" class="woocommerce-checkout-review-order">
                                                <table class="shop_table woocommerce-checkout-review-order-table">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name">Sản phẩm</th>
                                                            <th class="product-total">Tạm tính</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data['cart']->cartDetails as $cart_detai)
                                                            <tr class="cart_item">
                                                                <td class="product-name">
                                                                    {{ $cart_detai->product->name }} <strong
                                                                        class="product-quantity">&times;&nbsp;{{ $cart_detai->quantity }}</strong>
                                                                </td>
                                                                <td class="product-total">
                                                                    <span class="woocommerce-Price-amount amount"><bdi>
                                                                            {{ number_format($cart_detai->price_by_quantity, 0, '.', '.') }}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr class="cart-subtotal">
                                                            <th>Tạm tính</th>
                                                            <td><span class="woocommerce-Price-amount amount"><bdi>{{ number_format($data['cart']->total_money, 0, '.', '.') }}<span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                            </td>
                                                        </tr>
                                                        <tr class="order-total">
                                                            <th>Tổng</th>
                                                            <td><strong><span class="woocommerce-Price-amount amount"><bdi>
                                                                            {{ number_format($data['cart']->real_money, 0, '.', '.') }}<span
                                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <div id="payment" class="woocommerce-checkout-payment">
                                                    <div class="form-row place-order"
                                                        style="display: flex;
                                                    flex-direction: column;
                                                    align-items: center;
                                                    justify-content: center; ">
                                                        <div class="woocommerce-terms-and-conditions-wrapper">
                                                        </div>
                                                        <button type="submit" class="button alt">Đặt hàng</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="woocommerce-privacy-policy-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        //bắt điều kiện nhập 10 số
        document.getElementById('number_phone').addEventListener('input', function(e) {
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
        });
    </script>
@endsection
