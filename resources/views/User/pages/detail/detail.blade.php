@extends('User.layouts.master')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <div class="shop-container">


        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <div id="product-4657"
            class="product type-product post-4657 status-publish first instock product_cat-xit-khu-mui-ozium product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-binh-xit product_tag-binh-xit-khu-mui product_tag-chai-xit-khu product_tag-chai-xit-khu-mui product_tag-chai-xit-ozium product_tag-citrus product_tag-khu-mui product_tag-ozium-0-8-oz product_tag-ozium-huong-citrus has-post-thumbnail shipping-taxable purchasable product-type-simple">
            <div class="row content-row row-divided row-large row-reverse">
                <div id="product-sidebar" class="col large-3 hide-for-medium shop-sidebar ">
                    <aside id="custom_html-5" class="widget_text widget widget_custom_html">
                        <div class="textwidget custom-html-widget">
                            <div style="padding-bottom: 60px;" class="danh-muc">
                                <div class="tieu-de-san-pham"><span class="tieu-de-trai">
                                        Sản phẩm bán chạy</span></div>
                            </div>
                        </div>
                    </aside>
                    <aside id="block_widget-2" class="widget block_widget">



                        <div class="row large-columns-1 medium-columns- small-columns- row-small">
                            @foreach ($data['product_selling'] as $selling)
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-vertical box-text-middle">
                                            <div class="box-image" style="width:30%;">
                                                <div class="image-cover" style="padding-top:100%;">
                                                    <a href="{{ route('DetailProduct', $selling->id) }}"
                                                        aria-label="Lót ghế xe hơi LG – 101">
                                                        @if ($selling->images->count() > 0)
                                                            <img width="246" height="185"
                                                                src="{{ asset('storage/image/product/' . $selling->images[0]->image) }}"
                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                decoding="async" sizes="(max-width: 246px) 100vw, 246px" />
                                                        @else
                                                            <img width="246" height="185"
                                                                src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                decoding="async" sizes="(max-width: 246px) 100vw, 246px" />
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-left">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title"><a
                                                            href="{{ route('DetailProduct', $selling->id) }}"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $selling->name }}</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount"><bdi>{{ number_format($selling->price, 0, '.', ',') }}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>

                                                <form action="{{ route('AddCart') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="product_id" value="{{ $selling->id }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline">Thêm
                                                        vào giỏ hàng</button>
                                                    {{-- <div class="add-to-cart-button">
                                                        <a href="?add-to-cart=3326" data-quantity="1"
                                                            class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                            data-product_id="3326" data-product_sku="LG- 101"
                                                            aria-label="Thêm &ldquo;Lót ghế xe hơi LG – 101&rdquo; vào giỏ hàng"
                                                            aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                    </div> --}}
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </aside>
                </div>

                <div class="col large-9">
                    <div class="product-main">
                        <div class="row">
                            <div class="large-6 col">

                                <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                    data-columns="4">

                                    <div class="badge-container is-larger absolute left top z-1">

                                    </div>

                                    <div class="image-tools absolute top show-on-hover right z-3">
                                    </div>

                                    <figure
                                        class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half has-image-zoom"
                                        data-flickity-options='{
    "cellAlign": "center",
    "wrapAround": true,
    "autoPlay": false,
    "prevNextButtons":true,
    "adaptiveHeight": true,
    "imagesLoaded": true,
    "lazyLoad": 1,
    "dragThreshold" : 15,
    "pageDots": false,
    "rightToLeft": false       }'>
                                        {{-- ảnh hover 1  --}}
                                        @foreach ($data['detail']->images as $image)
                                            <div class="woocommerce-product-gallery__image slide">
                                                {{-- ảnh hover --}}
                                                <a href="{{ asset('storage/image/product/' . $image->image) }}">
                                                    <img width="600" height="450"
                                                        src="{{ asset('storage/image/product/' . $image->image) }}"
                                                        class="wp-post-image skip-lazy" alt="{{ $data['detail']->name }}"
                                                        decoding="async" title="{{ $data['detail']->name }}"
                                                        data-caption="{{ $data['detail']->name }}"
                                                        sizes="(max-width: 600px) 100vw, 600px" />
                                                </a>
                                            </div>
                                        @endforeach

                                    </figure>

                                    {{-- <div class="image-tools absolute bottom left z-3">
                                        <a href="#product-zoom"
                                            class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                            title="Zoom">
                                            <i class="icon-expand"></i> </a>
                                    </div> --}}
                                </div>

                                <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                    data-flickity-options='{
"cellAlign": "left",
"wrapAround": false,
"autoPlay": false,
"prevNextButtons": true,
"asNavFor": ".product-gallery-slider",
"percentPosition": true,
"imagesLoaded": true,
"pageDots": false,
"rightToLeft": false,
"contain": true
}'>
                                    @foreach ($data['detail']->images as $image)
                                        <div class="col is-nav-selected">
                                            <a>
                                                <img src="{{ asset('storage/image/product/' . $image->image) }}"
                                                    alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" width="246"
                                                    height="185" class="attachment-woocommerce_thumbnail" /> </a>
                                        </div>
                                    @endforeach
                                </div>

                            </div>


                            <div class="product-info summary entry-summary col col-fit product-summary text-left">
                                <h1 class="product-title product_title entry-title">
                                    {{ $data['detail']->name }}</h1>

                                <div class="is-divider small"></div>
                                Mã Sản Phẩm: {{ $data['detail']->id }}<div class="price-wrapper">
                                    <p class="price product-page-price ">
                                        <span class="woocommerce-Price-amount">
                                            <bdi>
                                                {{ number_format($data['detail']->price, 0, '.', ',') }}
                                                <span class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </bdi>
                                        </span>
                                    </p>
                                </div>
                                <span class="tagged_as">Mô tả ngắn:
                                  {!! $data['detail']->short_description !!}
                                </span>
                                <div class="product-short-description">
                                    <h4></h4>
                                </div>
                                <div class="row row-small" id="row-459713676">


                                    <div id="col-1507428120" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">



                                            <a rel="noopener noreferrer" href="#"
                                                target="_blank" class="button primary is-normal lowercase expand"
                                                style="border-radius:5px;">
                                                <span>Fanpage Facebook</span>
                                            </a>


                                        </div>
                                    </div>



                                    <div id="col-2090119531" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">



                                            <a rel="noopener noreferrer" href="tel:+0123456789" target="_blank"
                                                class="button success is-normal lowercase expand"
                                                style="border-radius:5px;">
                                                <span>Gọi 01234.567.89</span>
                                            </a>


                                        </div>
                                    </div>



                                </div>

                                <form action="{{ route('AddCart') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus button is-form">
                                        <input type="number" id="quantity_650ab6e6281ed" class="input-text qty text"
                                            step="1" min="1" max="" name="quantity" value="1"
                                            title="SL" size="4" placeholder="" inputmode="numeric" />
                                        <input type="button" value="+" class="plus button is-form">
                                    </div>
                                    <input type="hidden" name="product_id" value="{{ $data['detail']->id }}">
                                    {{-- <input type="hidden" name="quantity" value="1"> --}}
                                    <button type="submit" name="add-to-cart"
                                        class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

                                </form>


                                <div class="product_meta">
                                    <span class="sku_wrapper">Mã: <span class="sku">AGC - 102</span></span>
                                    <span class="posted_in">Danh mục: <a href="#"
                                            rel="tag">{{ $data['detail']->category->name }}</a>,
                                        <br>
                                        <span class="tagged_as">Thông số:
                                            {!! $data['detail']->tech_specs !!}
                                        </span>
                                    </span>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-footer">

                        <div class="woocommerce-tabs wc-tabs-wrapper container tabbed-content">
                            <ul class="tabs wc-tabs product-tabs small-nav-collapse nav nav-uppercase nav-line nav-left"
                                role="tablist">
                                <li class="description_tab active" id="tab-title-description" role="presentation">
                                    <a href="#tab-description" role="tab" aria-selected="true"
                                        aria-controls="tab-description">
                                        Mô tả </a>
                                </li>
                            </ul>
                            <div class="tab-panels">
                                <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content active"
                                    id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                    <p>
                                        {!! $data['detail']->description !!}
                                    </p>
                                </div>
                            </div>
                        </div>


                        <div class="related related-products-wrapper product-section">

                            <h3
                                class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                Sản phẩm tương tự </h3>
                            <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>

                                @foreach ($data['product_related'] as $product_related)
                                    <div
                                        class="product-small col has-hover product type-product post-3123 status-publish instock product_cat-bao-tay-lai product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-bao-tay-lai product_tag-boc-vo-lang product_tag-bt6002 has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                        <div class="col-inner">

                                            <div class="badge-container absolute left top z-1">

                                            </div>
                                            <div class="product-small box ">
                                                <div class="box-image">
                                                    <div class="image-zoom">
                                                        <a href="{{ route('DetailProduct', $product_related->id) }}">
                                                            @if ($product_related->images->count() > 0)
                                                                <img width="246" height="185"
                                                                    src="{{ asset('storage/image/product/' . $product_related->images[0]->image) }}"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    decoding="async"
                                                                    sizes="(max-width: 246px) 100vw, 246px" />
                                                            @else
                                                                <img width="246" height="185"
                                                                    src="{{ asset('Admin/') }}/images/profile/no_image.jpg"
                                                                    class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                                    decoding="async"
                                                                    sizes="(max-width: 246px) 100vw, 246px" />
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="image-tools is-small top right show-on-hover">
                                                    </div>
                                                    <div
                                                        class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                    </div>
                                                    <div
                                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                    </div>
                                                </div>

                                                <div class="box-text box-text-products text-center grid-style-2">
                                                    <div class="title-wrapper">
                                                        <p class="name product-title woocommerce-loop-product__title">
                                                            <a href="{{ route('DetailProduct', $product_related->id) }}"
                                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link">
                                                                {{ $product_related->name }}
                                                            </a>
                                                        </p>
                                                    </div>
                                                    <div class="price-wrapper">
                                                        <span class="price"><span
                                                                class="woocommerce-Price-amount"><bdi>{{ number_format($product_related->price, 0, '.', ',') }}<span
                                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                    </div>
                                                    <div class="add-to-cart-button"><a href="?add-to-cart=3123"
                                                            data-quantity="1"
                                                            class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                            data-product_id="3123" data-product_sku="AGC -37"
                                                            aria-label="Thêm &ldquo;Bao tay lái BT6002-Đen&rdquo; vào giỏ hàng"
                                                            aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
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
            </div>
        </div>


    </div><!-- shop container -->
@endsection
