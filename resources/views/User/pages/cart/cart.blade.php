@extends('User.layouts.master')

@section('title', 'Giỏ hàng')

@section('content')
    <div id="content" class="content-area page-wrapper" role="main">
        <div class="row row-main">
            <div class="large-12 col">
                <div class="col-inner">



                    <div class="woocommerce">
                        <div class="woocommerce-notices-wrapper"></div>
                        <div class="woocommerce row row-large row-divided">
                            <div class="col large-7 pb-0 ">


                                <form class="woocommerce-cart-form" action="https://agc18.com.vn/gio-hang/" method="post">
                                    <div class="cart-wrapper sm-touch-scroll">


                                        <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                            cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th class="product-name" colspan="3">Sản phẩm</th>
                                                    <th class="product-price">Giá</th>
                                                    <th class="product-quantity">Số lượng</th>
                                                    <th class="product-subtotal">Tạm tính</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr class="woocommerce-cart-form__cart-item cart_item">

                                                    <td class="product-remove">
                                                        <a href="https://agc18.com.vn/gio-hang/?remove_item=e9510081ac30ffa83f10b68cde1cac07&#038;_wpnonce=f09876342b"
                                                            class="remove" aria-label="Xóa sản phẩm này"
                                                            data-product_id="6666"
                                                            data-product_sku="AGC - 251-1">&times;</a>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a
                                                            href="https://agc18.com.vn/san-pham/nuoc-hoa-oto-lacent-diffuser-black-cherry-50ml/"><img
                                                                width="246" height="185"
                                                                src="https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-246x185.png"
                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                alt="Nước Hoa ÔTô Lâcent Diffuser Black Cherry 50ml"
                                                                decoding="async"
                                                                srcset="https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2022/08/Ban-sao-cua-Thiet-ke-chua-co-ten.png 1276w"
                                                                sizes="(max-width: 246px) 100vw, 246px" /></a>
                                                    </td>

                                                    <td class="product-name" data-title="Sản phẩm">
                                                        <a
                                                            href="https://agc18.com.vn/san-pham/nuoc-hoa-oto-lacent-diffuser-black-cherry-50ml/">Nước
                                                            Hoa ÔTô Lâcent Diffuser Black Cherry 50ml</a>
                                                        <div class="show-for-small mobile-product-price">
                                                            <span class="mobile-product-price__qty">1 x </span>
                                                            <span class="woocommerce-Price-amount amount"><bdi>400.000<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                        </div>
                                                    </td>

                                                    <td class="product-price" data-title="Giá">
                                                        <span class="woocommerce-Price-amount amount"><bdi>400.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </td>

                                                    <td class="product-quantity" data-title="Số lượng">
                                                        <div class="quantity buttons_added">
                                                            <input type="button" value="-"
                                                                class="minus button is-form"> <label
                                                                class="screen-reader-text" for="quantity_650b0cbdac31f">Nước
                                                                Hoa ÔTô Lâcent
                                                                Diffuser Black Cherry 50ml số lượng</label>
                                                            <input type="number" id="quantity_650b0cbdac31f"
                                                                class="input-text qty text" step="1" min="0"
                                                                max=""
                                                                name="cart[e9510081ac30ffa83f10b68cde1cac07][qty]"
                                                                value="1" title="SL" size="4" placeholder=""
                                                                inputmode="numeric" />
                                                            <input type="button" value="+"
                                                                class="plus button is-form">
                                                        </div>
                                                    </td>

                                                    <td class="product-subtotal" data-title="Tạm tính">
                                                        <span class="woocommerce-Price-amount amount"><bdi>400.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td colspan="6" class="actions clear">


                                                        <div class="continue-shopping pull-left text-left">
                                                            <a class="button-continue-shopping button primary is-outline"
                                                                href="https://agc18.com.vn/cong-ty-agc18/">
                                                                &#8592;&nbsp;Tiếp tục xem sản phẩm </a>
                                                        </div>

                                                        <button type="submit" class="button primary mt-0 pull-left small"
                                                            name="update_cart" value="Cập nhật giỏ hàng">Cập
                                                            nhật giỏ hàng</button>

                                                        <input type="hidden" id="woocommerce-cart-nonce"
                                                            name="woocommerce-cart-nonce" value="f09876342b" /><input
                                                            type="hidden" name="_wp_http_referer" value="/gio-hang/" />
                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </form>
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
                                                        class="woocommerce-Price-amount amount"><bdi>400.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Tổng</th>
                                                <td data-title="Tổng"><strong><span
                                                            class="woocommerce-Price-amount amount"><bdi>400.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></strong>
                                                </td>
                                            </tr>
                                        </table>

                                        <div class="wc-proceed-to-checkout">

                                            <a href="thanhtoan.html" class="checkout-button button alt wc-forward">
                                                Tiến hành thanh toán</a>
                                        </div>


                                    </div>
                                    <form class="checkout_coupon mb-0" method="post">
                                        <div class="coupon">
                                            <h3 class="widget-title"><i class="icon-tag"></i> Phiếu ưu đãi</h3>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code"
                                                value="" placeholder="Mã ưu đãi" /> <input type="submit"
                                                class="is-form expand" name="apply_coupon" value="Áp dụng" />
                                        </div>
                                    </form>
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
@endsection
