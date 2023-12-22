@extends('User.layouts.master')

@section('title', 'Danh mục sản phẩm')

@section('content')

    <style>
        /* CSS cho phân trang */
        ul.pagination {
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
        }

        ul.pagination li {
            margin: 0 5px;
        }

        ul.pagination li a {
            text-decoration: none;
            background-color: #f2f2f2;
            color: #333;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        ul.pagination li a:hover {
            background-color: #333;
            color: #fff;
        }

        /* Kiểu dáng cho trang hiện tại */
        ul.pagination li.active a {
            background-color: #333;
            color: #fff;
        }
    </style>
    <div class="shop-page-title category-page-title page-title ">
        <div class="page-title-inner flex-row  medium-flex-wrap container">
            <div class="flex-col flex-grow medium-text-center">
                <div class="is-large">
                    <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ route('HomeIndex') }}">
                            Trang chủ</a></span><span class="divider">&#47;</span>
                        {{ $data['category_product']->name }}
                    </nav>
                </div>
            </div>

        </div>
        <div class="row category-page-row">

            <div class="col large-12">
                <div class="shop-container">


                    <div class="woocommerce-notices-wrapper"></div>
                    <div
                        class="products row row-small large-columns-4 medium-columns-3 small-columns-2 has-shadow row-box-shadow-1 row-box-shadow-1-hover has-equal-box-heights equalize-box">
                        @foreach ($data['product'] as $product)
                            <div
                                class="product-small col has-hover product type-product post-2970 status-publish first instock product_cat-nuoc-hoa-aroma-nhap-khau-phap product_cat-nuoc-hoa-dang-xit-aroma product_cat-phu-kien-xe-hoi product_tag-agc18 product_tag-nuoc-hoa-oto product_tag-nuoc-hoa-phap product_tag-nuoc-hoa-xe-hoi product_tag-sap-oto product_tag-sap-thom product_tag-the-giuoi-nuoc-hoa product_tag-tinh-dau product_tag-tinh-dau-aroma product_tag-tinh-dau-kep-cua-gio has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box ">
                                        <div class="box-image">
                                            <div class="image-zoom">
                                                <a href="{{ route('DetailProduct', $product->id) }}"
                                                    aria-label="{{ $product->name }}">

                                                    @if ($product->images->count() > 0)
                                                        <img width="246" height="185"
                                                            src="{{ asset('storage/image/product/' . $product->images[0]->image) }}"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="{{ $product->name }}" decoding="async" loading="lazy"
                                                            sizes="(max-width: 246px) 100vw, 246px" />
                                                    @else
                                                        <img src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                            alt="" width="1276" height="956">
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="image-tools is-small top right show-on-hover">
                                            </div>
                                            <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                            @if ($product->quantity == null || $product->quantity < 0)
                                                <div class="out-of-stock-label">Hết hàng</div>
                                            @endif
                                        </div>

                                        <div class="box-text box-text-products text-center grid-style-2">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title"><a
                                                        href="{{ route('DetailProduct', $product->id) }}"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                        {{ $product->name }}
                                                    </a></p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount"><bdi>{{ number_format($product->price, 0, '.', ',') }}<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            {{-- @if ($product->quantity == null || $product->quantity < 0)
                                                <div class="add-to-cart-button"><a
                                                        href="{{ route('DetailProduct', $product->id) }}" data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple is-outline"
                                                        rel="nofollow">Đọc tiếp</a></div>
                                            @else --}}
                                            {{-- <div class="add-to-cart-button"><a href="#" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    rel="nofollow">Thêm vào giỏ hàng</a></div> --}}
                                            <form action="{{ route('AddCart') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="quantity" value="1">
                                                <button
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline add-to-cart-button">Thêm
                                                    vào giỏ hàng</button>
                                            </form>
                                            {{-- @endif --}}

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    {{ $data['product']->links() }}



                </div>

            </div>
        </div>
    @endsection
