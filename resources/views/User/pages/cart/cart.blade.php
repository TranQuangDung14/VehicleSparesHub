@extends('User.layouts.master')

@section('title', 'Giỏ hàng')

@section('content')
    @if ($data['cart'])
        @if ($data['cart']->cartDetails->count() > 0)
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-12 col">
                        <div class="col-inner">



                            <div class="woocommerce">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce row row-large row-divided">
                                    <div class="col large-7 pb-0 ">



                                        {{-- <form action="{{ route('UpdateQuantityCart') }}" class="woocommerce-cart-form" action="" method="POST">
                                            @csrf --}}
                                        {{-- @method('POST') --}}
                                        <div class="cart-wrapper sm-touch-scroll">
                                            <table
                                                class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                                cellspacing="0" id="cart-content">
                                                <thead>
                                                    <tr>
                                                        <th class="product-name" colspan="3">Sản phẩm</th>
                                                        <th class="product-price">Giá</th>
                                                        <th class="product-quantity">Số lượng</th>
                                                        <th class="product-subtotal">Tạm tính</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {{-- @if (isset($data['cart']->cartDetails)) --}}

                                                    @foreach ($data['cart']->cartDetails as $cart_detai)
                                                        <tr class="woocommerce-cart-form__cart-item cart_item">

                                                            <td class="product-remove">
                                                                <button class="remove-product-button"
                                                                    data-url="{{ route('DeleteCart', $cart_detai) }}"
                                                                    style="background-color: white; border: 1px solid green; border-radius: 50px">X</button>

                                                            </td>

                                                            <td class="product-thumbnail">
                                                                <a
                                                                    href="{{ route('DetailProduct', $cart_detai->product->id) }}"><img
                                                                        width="246" height="185"
                                                                        src="{{ asset('storage/image/product/' . $cart_detai->product->images[0]->image) }}"
                                                                        class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                        alt="" decoding="async"
                                                                        srcset="{{ asset('storage/image/product/' . $cart_detai->product->images[0]->image) }}"
                                                                        sizes="(max-width: 246px) 100vw, 246px" />
                                                                </a>
                                                            </td>

                                                            <td class="product-name" data-title="Sản phẩm">
                                                                <a
                                                                    href="{{ route('DetailProduct', $cart_detai->product->id) }}">{{ $cart_detai->product->name }}</a>

                                                            </td>

                                                            <td class="product-price" data-title="Giá">
                                                                <span class="woocommerce-Price-amount"><bdi>
                                                                        {{ number_format($cart_detai->product->price, 0, '.', '.') }}
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                            </td>

                                                            <td class="product-quantity" data-title="Số lượng">
                                                                {{-- <input type="hidden" class="id" name="id"
                                                                        id="" value="{{ $cart_detai->id }}"> --}}
                                                                {{-- @method('DELETE') --}}
                                                                <div class="quantity buttons_added">
                                                                    <input type="button" value="-"
                                                                        class="minus button is-form">
                                                                    {{-- <input type="number" id="quantity_650b0cbdac31f"
                                                                            class="input-text qty text" step="1"
                                                                            min="0" max="" name="quantity"
                                                                            value="{{ $cart_detai->quantity }}"
                                                                            title="SL" size="4" placeholder=""
                                                                            inputmode="numeric" /> --}}
                                                                    <input type="number"
                                                                        class="input-text qty text quantity-input"
                                                                        step="1" min="0" max=""
                                                                        name="quantity" value="{{ $cart_detai->quantity }}"
                                                                        data-cart-detail-id="{{ $cart_detai->id }}"
                                                                        title="SL" size="4" placeholder=""
                                                                        inputmode="numeric" />
                                                                    <input type="button" value="+"
                                                                        class="plus button is-form">


                                                                </div>

                                                            </td>
                                                            <td class="product-subtotal" data-title="Tạm tính">
                                                                <span class="woocommerce-Price-amount"><bdi>
                                                                        {{ number_format($cart_detai->price_by_quantity, 0, '.', '.') }}
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    <tr>
                                                        <td colspan="6" class="actions clear">
                                                            <div class="continue-shopping pull-left text-left">
                                                                <a class="button-continue-shopping button primary is-outline"
                                                                    href="{{ route('HomeIndex') }}">
                                                                    &#8592;&nbsp;Tiếp tục xem sản phẩm </a>
                                                            </div>
                                                            {{-- <button type="submit" id="update-cart-button"
                                                                class="button primary mt-0 pull-left small"
                                                                value="Cập nhật giỏ hàng">Cập
                                                                nhật giỏ hàng</button> --}}
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        {{-- </form> --}}
                                    </div>


                                    <div class="cart-collaterals large-5 col pb-0">

                                        <div class="cart-sidebar col-inner ">
                                            <div class="cart_totals ">

                                                <table cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-name" colspan="2">Cộng giỏ hàng</th>
                                                        </tr>
                                                    </thead>
                                                </table>
                                                <h2>Cộng giỏ hàng</h2>
                                                <table cellspacing="0" class="shop_table shop_table_responsive">

                                                    <tr class="cart-subtotal">
                                                        <th>Tạm tính</th>
                                                        <td data-title="Tạm tính"><span
                                                                class="woocommerce-Price-amount"><bdi>
                                                                    {{ number_format($data['cart']->total_money, 0, '.', '.') }}
                                                                    <span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                        </td>
                                                    </tr>
                                                    <tr class="order-total">
                                                        <th>Tổng</th>
                                                        <td data-title="Tổng"><strong><span
                                                                    class="woocommerce-Price-amount"><bdi>
                                                                        {{ number_format($data['cart']->real_money, 0, '.', '.') }}
                                                                        <span
                                                                            class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong>
                                                        </td>
                                                    </tr>
                                                </table>
                                                <div class="wc-proceed-to-checkout">
                                                    <a href="{{ route('Order') }}" class="checkout-button button alt wc-forward">
                                                        Tiến hành thanh toán</a>
                                                </div>
                                            </div>
                                            <div class="cart-sidebar-content relative"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="cart-footer-content after-cart-content relative"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div id="content" class="content-area page-wrapper" role="main">
                <div class="row row-main">
                    <div class="large-12 col">
                        <div class="col-inner">
                            <div class="woocommerce">
                                <div class="text-center pt pb">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <div class="wc-empty-cart-message">
                                        <div class="woocommerce-info message-wrapper">
                                            <div class="message-container container medium-text-center">
                                                {{ $data['message'] }} </div>
                                        </div>
                                    </div>
                                    <p class="return-to-shop">
                                        <a class="button primary wc-backward" href="{{ route('HomeIndex') }}">
                                            Quay trở lại cửa hàng </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    @else
        <div id="content" class="content-area page-wrapper" role="main">
            <div class="row row-main">
                <div class="large-12 col">
                    <div class="col-inner">
                        <div class="woocommerce">
                            <div class="text-center pt pb">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="wc-empty-cart-message">
                                    <div class="woocommerce-info message-wrapper">
                                        <div class="message-container container medium-text-center">
                                            {{ $data['message'] }} </div>
                                    </div>
                                </div>
                                <p class="return-to-shop">
                                    <a class="button primary wc-backward" href="{{ route('HomeIndex') }}">
                                        Quay trở lại cửa hàng </a>
                                </p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    @endif

    <script>
        // ajax xóa sản phẩm
        $(document).ready(function() {
            $('.remove-product-button').on('click', function() {
                var url = $(this).data('url');
                // console.log($(this).data('url'))
                $.ajax({
                    type: 'DELETE',
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data) {
                        // console.log('data',data);
                        alert(data.message);
                        // Cập nhật giao diện người dùng nếu cần
                        // $('#cart-content').html(data.cartData);
                        location.reload();
                        // toastr.success(data.message);
                    },
                    error: function(data) {
                        // Xử lý lỗi nếu cần
                        toastr.error('xóa lỗi rồi!');
                        console.log(data);
                    }
                });
            });
        });

        // ajax cập nhập số lượng sản phẩm
        $(document).ready(function() {
            $('.quantity-input').on('change', function() {
                var quantity = $(this).val();
                var cartDetailId = $(this).data('cart-detail-id');

                $.ajax({
                    type: 'POST',
                    url: '{{ route('UpdateQuantityCart') }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        id: cartDetailId,
                        quantity: quantity
                    },
                    success: function(data) {
                        console.log('ra rồi', data.message)

                        // toastr.success(data.message);
                        location.reload();
                        // Cập nhật giao diện người dùng nếu cần
                    },
                    error: function(data) {
                        // toastrMessage = data.message;
                        // Xử lý lỗi nếu cần
                        // console.log('chưa ra!');
                        // console.log('loi này',data.responseJSON.message,data);
                        // toastr.error(toastrMessage);
                        alert(data.responseJSON.message);
                        location.reload();
                    }
                });
            });
        });
    </script>
@endsection
