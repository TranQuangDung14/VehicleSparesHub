@extends('User.layouts.master')

@section('title', 'Phụ kiện xe hơi')

@section('content')
    @include('User.partial.slideshow')
    {{-- cái đầu --}}
    <section class="section danh-muc" id="section_1207529639">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">
            <div class="row row-small" id="row-791604855">
                <div id="col-1232839095" class="col small-12 large-12">
                    <div class="col-inner">
                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-reveal slider-nav-push"
                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1207529639 {
                padding-top: 0px;
                padding-bottom: 0px;
                background-color: rgb(245, 245, 245);
            }

            #section_1207529639 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_1207529639 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section>

    {{-- Danh mục đầu tiên --}}
    @foreach ($data['category'] as $category)
        <section class="section danh-muc" id="section_1082342012">
            <div class="bg section-bg fill bg-fill  bg-loaded">
            </div>
            <div class="section-content relative">
                <div class="row row-small" id="row-2050816292">
                    <div id="col-1917812528" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="container section-title-container">
                                <h3 class="section-title section-title-normal"><b></b>
                                    <span class="section-title-main">
                                        {{ $category->name }}</span><b></b><a
                                        href="{{ route('CategoryProduct', $category->id) }}" target="">Xem tất cả&ensp;<i class="fa-solid fa-caret-down"></i></a>
                                </h3>
                            </div>
                            <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                @foreach ($category->products as $product)
                                    <div class="col">
                                        <div class="col-inner">

                                            <div class="badge-container absolute left top z-1">

                                            </div>
                                            <div class="product-small box has-hover box-normal box-text-bottom">
                                                <div class="box-image">
                                                    <div class="image-zoom image-cover" style="padding-top:75%;">
                                                        <a href="{{ route('DetailProduct', $product->id) }}"
                                                            aria-label="Bình xịt khử mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g) Hương Citrus">

                                                            @if ($product->images->count() > 0)
                                                                <img width="1276" height="956"
                                                                    src="{{ asset('storage/image/product/' . $product->images[0]->image) }}"
                                                                    class="attachment-original size-original"
                                                                    alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                                    decoding="async" loading="lazy"
                                                                    sizes="(max-width: 1276px) 100vw, 1276px" />
                                                            @else
                                                                <img src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                                    alt="" width="1276" height="956">
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="image-tools top right show-on-hover">
                                                    </div>
                                                    <div
                                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    </div>
                                                    @if ($product->quantity == null || $product->quantity < 0)
                                                        <div class="out-of-stock-label">Hết hàng</div>
                                                    @endif
                                                </div>

                                                <div class="box-text text-center">
                                                    <div class="title-wrapper">
                                                        <p class="name product-title woocommerce-loop-product__title">
                                                            <a href="{{ route('DetailProduct', $product->id) }}"
                                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                {{ $product->name }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount"><bdi>
                                                                    {{ number_format($product->price, 0, '.', ',') }}
                                                                    <span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                    </div>
                                                    @if ($product->quantity == null || $product->quantity < 0)
                                                        <div class="add-to-cart-button"><a
                                                                href="{{ route('DetailProduct', $product->id) }}"
                                                                data-quantity="1"
                                                                class="primary is-small mb-0 button product_type_simple is-outline"
                                                                rel="nofollow">Đọc tiếp</a></div>
                                                    @else
                                                        <form action="{{ route('AddCart') }}" method="POST"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="product_id"
                                                                value="{{ $product->id }}">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button
                                                                class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline add-to-cart-button">Thêm
                                                                vào giỏ hàng</button>
                                                        </form>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1082342012 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgb(245, 245, 245);
                }

                #section_1082342012 .ux-shape-divider--top svg {
                    height: 150px;
                    --divider-top-width: 100%;
                }

                #section_1082342012 .ux-shape-divider--bottom svg {
                    height: 150px;
                    --divider-width: 100%;
                }
            </style>
        </section>
    @endforeach

    {{-- sản phẩm bán chạy --}}
    <section class="section danh-muc" id="section_2035819258">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">


            <div class="row row-small" id="row-1748506453">
                <div id="col-1109937073" class="col small-12 large-12">
                    <div class="col-inner">
                        <div class="container section-title-container">
                            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Sản phẩm
                                    bán chạy</span><b></b></h3>
                        </div>
                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                            @foreach ($data['product_selling'] as $selling)
                                <div class="col">
                                    <div class="col-inner">
                                        <div class="badge-container absolute left top z-1">
                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="{{ route('DetailProduct', $selling->id) }}"
                                                        aria-label="{{ $selling->name }}">
                                                        @if ($selling->images->count() > 0)
                                                            <img width="1276" height="956"
                                                                src="{{ asset('storage/image/product/' . $selling->images[0]->image) }}"
                                                                class="attachment-original size-original" decoding="async"
                                                                loading="lazy"
                                                                sizes="(max-width: 1276px) 100vw, 1276px" />
                                                        @else
                                                            <img src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                                alt="" width="1276" height="956">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                                @if ($product->quantity == null || $product->quantity < 0)
                                                <div class="out-of-stock-label">Hết hàng</div>
                                            @endif
                                            </div>
                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="{{ route('DetailProduct', $selling->id) }}"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $selling->name }}</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount"><bdi>
                                                                {{ number_format($selling->price, 0, '.', ',') }}
                                                                <span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                {{-- <div class="add-to-cart-button"><a href="?add-to-cart=4251"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline">Thêm
                                                        vào giỏ hàng</a>
                                                </div> --}}
                                                @if ($selling->quantity == null || $selling->quantity < 0)
                                                    <div class="add-to-cart-button"><a
                                                            href="{{ route('DetailProduct', $selling->id) }}"
                                                            data-quantity="1"
                                                            class="primary is-small mb-0 button product_type_simple is-outline"
                                                            rel="nofollow">Đọc tiếp</a></div>
                                                @else
                                                    <form action="{{ route('AddCart') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="product_id"
                                                            value="{{ $selling->id }}">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button
                                                            class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline add-to-cart-button">
                                                            Thêm vào giỏ hàng</button>
                                                    </form>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_2035819258 {
                padding-top: 0px;
                padding-bottom: 0px;
                background-color: rgb(245, 245, 245);
            }

            #section_2035819258 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_2035819258 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section>
    <section class="section danh-muc" id="section_819481647">
        <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
        </div>
        <div class="section-content relative">
            <div class="row" id="row-2112121135">
                <div id="col-545174940" class="col small-12 large-12">
                    <div class="col-inner">
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_819481647 {
                padding-top: 15px;
                padding-bottom: 15px;
            }

            #section_819481647 .section-bg-overlay {
                background-color: rgb(244, 244, 244);
            }

            #section_819481647 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_819481647 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section>
    <section class="section danh-muc" id="section_1205927615">
        <div class="bg section-bg fill bg-fill  bg-loaded">
            <div class="section-bg-overlay absolute fill"></div>
        </div>
        <div class="section-content relative">
            <div class="row" id="row-2044107167">
                <div id="col-739728617" class="col small-12 large-12">
                    <div class="col-inner">
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1205927615 {
                padding-top: 15px;
                padding-bottom: 15px;
            }

            #section_1205927615 .section-bg-overlay {
                background-color: rgb(255, 255, 255);
            }

            #section_1205927615 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_1205927615 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section>
@endsection
