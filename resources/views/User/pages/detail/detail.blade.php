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
                                <div class="tieu-de-san-pham"><span class="tieu-de-trai">Sản phẩm bán
                                        chạy</span></div>
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
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{$selling->name}}</a></p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>{{ number_format($selling->price, 0,'.')}}<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3326"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3326" data-product_sku="LG- 101"
                                                        aria-label="Thêm &ldquo;Lót ghế xe hơi LG – 101&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
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
                                        <div data-thumb="https://agc18.com.vn/wp-content/uploads/2019/06/15-100x100.png"
                                            data-thumb-alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                            class="woocommerce-product-gallery__image slide first"><a
                                                href="https://agc18.com.vn/wp-content/uploads/2019/06/15.png"><img
                                                    width="600" height="450"
                                                    src="https://agc18.com.vn/wp-content/uploads/2019/06/15-600x450.png"
                                                    class="wp-post-image skip-lazy"
                                                    alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" decoding="async"
                                                    title="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    data-caption="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    data-src="https://agc18.com.vn/wp-content/uploads/2019/06/15.png"
                                                    data-large_image="https://agc18.com.vn/wp-content/uploads/2019/06/15.png"
                                                    data-large_image_width="1276" data-large_image_height="956"
                                                    loading="lazy"
                                                    srcset="https://agc18.com.vn/wp-content/uploads/2019/06/15-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/06/15-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/06/15-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/06/15-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/06/15-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/06/15.png 1276w"
                                                    sizes="(max-width: 600px) 100vw, 600px" /></a></div>
                                        <div data-thumb="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-100x100.png"
                                            data-thumb-alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                            class="woocommerce-product-gallery__image slide"><a
                                                href="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS.png"><img
                                                    width="480" height="480"
                                                    src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS.png"
                                                    class="skip-lazy" alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    decoding="async" title="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    data-caption="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS
Công Ty TNHH TM và DV AGC18
📞Hotline: 0866.201.582 ( Ms.Thảo)
⛳️Web : https://agc18.com.vn/
🎯Email: agc18.auto@gmail.com
🏘 Địa chỉ : Số 11, đường số 4, KDC T30, X.Bình Hưng, H. Bình Chánh ,TP.HCM."
                                                    data-src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS.png"
                                                    data-large_image="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS.png"
                                                    data-large_image_width="480" data-large_image_height="480"
                                                    loading="lazy"
                                                    srcset="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS.png 480w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-100x100.png 100w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-300x300.png 300w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-150x150.png 150w"
                                                    sizes="(max-width: 480px) 100vw, 480px" /></a></div>
                                        <div data-thumb="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1-100x100.png"
                                            data-thumb-alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                            class="woocommerce-product-gallery__image slide"><a
                                                href="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1.png"><img
                                                    width="480" height="480"
                                                    src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1.png"
                                                    class="skip-lazy" alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    decoding="async" title="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS"
                                                    data-caption="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS
Công Ty TNHH TM và DV AGC18
📞Hotline: 0866.201.582 ( Ms.Thảo)
⛳️Web : https://agc18.com.vn/
🎯Email: agc18.auto@gmail.com
🏘 Địa chỉ : Số 11, đường số 4, KDC T30, X.Bình Hưng, H. Bình Chánh ,TP.HCM."
                                                    data-src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1.png"
                                                    data-large_image="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1.png"
                                                    data-large_image_width="480" data-large_image_height="480"
                                                    loading="lazy"
                                                    srcset="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1.png 480w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1-100x100.png 100w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1-300x300.png 300w, https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1-150x150.png 150w"
                                                    sizes="(max-width: 480px) 100vw, 480px" /></a></div>
                                    </figure>

                                    <div class="image-tools absolute bottom left z-3">
                                        <a href="#product-zoom"
                                            class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                            title="Zoom">
                                            <i class="icon-expand"></i> </a>
                                    </div>
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
                                    <div class="col is-nav-selected first">
                                        <a>
                                            <img src="https://agc18.com.vn/wp-content/uploads/2019/06/15-246x185.png"
                                                alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" width="246"
                                                height="185" class="attachment-woocommerce_thumbnail" /> </a>
                                    </div>
                                    <div class="col"><a><img
                                                src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-246x185.png"
                                                alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" width="246"
                                                height="185" class="attachment-woocommerce_thumbnail" /></a>
                                    </div>
                                    <div class="col"><a><img
                                                src="https://agc18.com.vn/wp-content/uploads/2019/06/Bình-xịt-khử-mùi-Ozium-mùi-CITRUS-1-246x185.png"
                                                alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" width="246"
                                                height="185" class="attachment-woocommerce_thumbnail" /></a>
                                    </div>
                                </div>

                            </div>


                            <div class="product-info summary entry-summary col col-fit product-summary text-left">
                                <h1 class="product-title product_title entry-title">
                                    Bình xịt khử mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g) Hương Citrus</h1>

                                <div class="is-divider small"></div>
                                Mã Sản Phẩm: AGC - 102<div class="price-wrapper">
                                    <p class="price product-page-price ">
                                        <span class="woocommerce-Price-amount amount"><bdi>199.000<span
                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                    </p>
                                </div>
                                <div class="product-short-description">
                                    <h4>Ozium loại bỏ 90% mùi nấm mốc, mùi hôi, khói thuốc cải thiện ô nhiễm
                                        không khí.</h4>
                                    <h4>Làm sạch và khử trùng không khí cho không gian: xe hơi, văn phòng, phòng
                                        tắm, nhà bếp v.v… không gây kích ứng, an toàn cho sức khỏe.</h4>
                                </div>
                                <div class="row row-small" id="row-459713676">


                                    <div id="col-1507428120" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">



                                            <a rel="noopener noreferrer" href="https://www.facebook.com/agcauto/"
                                                target="_blank" class="button primary is-normal lowercase expand"
                                                style="border-radius:5px;">
                                                <span>Fanpage Facebook</span>
                                            </a>


                                        </div>
                                    </div>



                                    <div id="col-2090119531" class="col medium-6 small-12 large-6">
                                        <div class="col-inner">



                                            <a rel="noopener noreferrer" href="tel:+84866201582" target="_blank"
                                                class="button success is-normal lowercase expand"
                                                style="border-radius:5px;">
                                                <span>Gọi 0866.2015.82</span>
                                            </a>


                                        </div>
                                    </div>



                                </div>

                                <form class="cart"
                                    action="https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                    method="post" enctype='multipart/form-data'>

                                    <div class="quantity buttons_added">
                                        <input type="button" value="-" class="minus button is-form"> <label
                                            class="screen-reader-text" for="quantity_650ab6e6281ed">Bình xịt khử
                                            mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g) Hương Citrus số
                                            lượng</label>
                                        <input type="number" id="quantity_650ab6e6281ed" class="input-text qty text"
                                            step="1" min="1" max="" name="quantity" value="1"
                                            title="SL" size="4" placeholder="" inputmode="numeric" />
                                        <input type="button" value="+" class="plus button is-form">
                                    </div>

                                    <button type="submit" name="add-to-cart" value="4657"
                                        class="single_add_to_cart_button button alt">Thêm vào giỏ hàng</button>

                                </form>


                                <div class="product_meta">



                                    <span class="sku_wrapper">Mã: <span class="sku">AGC - 102</span></span>


                                    <span class="posted_in">Danh mục: <a
                                            href="https://agc18.com.vn/danh-muc/san-pham/phu-kien-xe-hoi/xit-khu-mui-ozium/"
                                            rel="tag">Khử mùi Ozium</a>, <a
                                            href="https://agc18.com.vn/danh-muc/san-pham/phu-kien-xe-hoi/"
                                            rel="tag">Phụ Kiện xe Hơi</a>, <a
                                            href="https://agc18.com.vn/danh-muc/san-pham/" rel="tag">Sản
                                            Phẩm</a></span>
                                    <span class="tagged_as">Từ khóa: <a href="https://agc18.com.vn/tu-khoa/binh-xit/"
                                            rel="tag">bình
                                            xịt</a>, <a href="https://agc18.com.vn/tu-khoa/binh-xit-khu-mui/"
                                            rel="tag">Bình xịt khử mùi</a>, <a
                                            href="https://agc18.com.vn/tu-khoa/chai-xit-khu/" rel="tag">chai xịt
                                            khử</a>, <a href="https://agc18.com.vn/tu-khoa/chai-xit-khu-mui/"
                                            rel="tag">chai xịt khử mùi</a>, <a
                                            href="https://agc18.com.vn/tu-khoa/chai-xit-ozium/" rel="tag">chai
                                            xịt Ozium</a>, <a href="https://agc18.com.vn/tu-khoa/citrus/"
                                            rel="tag">Citrus</a>, <a href="https://agc18.com.vn/tu-khoa/khu-mui/"
                                            rel="tag">khử mùi</a>,
                                        <a href="https://agc18.com.vn/tu-khoa/ozium-0-8-oz/" rel="tag">ozium
                                            0./8 oz</a>, <a href="https://agc18.com.vn/tu-khoa/ozium-huong-citrus/"
                                            rel="tag">Ozium hương Citrus</a></span>

                                </div>
                                <div class="social-icons share-icons share-row relative"><a
                                        href="whatsapp://send?text=B%C3%ACnh%20x%E1%BB%8Bt%20kh%E1%BB%AD%20m%C3%B9i%20Ozium%20Air%20Sanitizer%20Spray%200.8%20oz%20%2822.6g%29%20H%C6%B0%C6%A1ng%20Citrus - https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                        data-action="share/whatsapp/share"
                                        class="icon button circle is-outline tooltip whatsapp show-for-medium"
                                        title="Share on WhatsApp" aria-label="Share on WhatsApp"><i
                                            class="icon-whatsapp"></i></a><a
                                        href="https://www.facebook.com/sharer.php?u=https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                        data-label="Facebook"
                                        onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                        rel="noopener noreferrer nofollow" target="_blank"
                                        class="icon button circle is-outline tooltip facebook" title="Share on Facebook"
                                        aria-label="Share on Facebook"><i class="icon-facebook"></i></a><a
                                        href="https://twitter.com/share?url=https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                        onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                        rel="noopener noreferrer nofollow" target="_blank"
                                        class="icon button circle is-outline tooltip twitter" title="Share on Twitter"
                                        aria-label="Share on Twitter"><i class="icon-twitter"></i></a><a
                                        href="mailto:enteryour@addresshere.com?subject=B%C3%ACnh%20x%E1%BB%8Bt%20kh%E1%BB%AD%20m%C3%B9i%20Ozium%20Air%20Sanitizer%20Spray%200.8%20oz%20%2822.6g%29%20H%C6%B0%C6%A1ng%20Citrus&amp;body=Check%20this%20out:%20https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                        rel="nofollow" class="icon button circle is-outline tooltip email"
                                        title="Email to a Friend" aria-label="Email to a Friend"><i
                                            class="icon-envelop"></i></a><a
                                        href="https://tumblr.com/widgets/share/tool?canonicalUrl=https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                        target="_blank" class="icon button circle is-outline tooltip tumblr"
                                        onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
                                        rel="noopener noreferrer nofollow" title="Share on Tumblr"
                                        aria-label="Share on Tumblr"><i class="icon-tumblr"></i></a></div>
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


                                    <p><a href="https://agc18.com.vn/danh-muc/phu-kien-xe-hoi/">Bình xịt khử mùi
                                            Ozium</a> Air Sanitizer Spray 0.8 oz (22.6g) Citrus</p>
                                    <h4><strong>1. Cơ chế hoạt động:</strong> Các hạt phân tử Ozium có kích
                                        thước micron bám vào các vi khuẩn và phân tử gây mùi trong không khí
                                        .Bằng cơ chế đóng băng Glycol được EPA &#8211; Cơ quan bảo vệ môi trường
                                        Hoa Kỳ cấp giấy chứng nhận an toàn.</h4>
                                    <h4><strong>2. Công dụng:</strong> Khác biệt với các sản phẩm thông thường
                                        chỉ che giấu mùi. Ozium loại bỏ 90% mùi nấm mốc, mùi hôi, khói thuốc cải
                                        thiện ô nhiễm không khí. Làm sạch và khử trùng không khí cho không gian:
                                        xe hơi, văn phòng, phòng tắm, nhà bếp v.v… không gây kích ứng, an toàn
                                        cho sức khỏe.</h4>
                                    <h4><strong>3. Hướng dẫn sử dụng Bình xịt khử mùi : </strong></h4>
                                    <p>&#8211; Đối với <a href="https://www.facebook.com/agcauto/">xe ô tô</a>:
                                        Mở chế độ lấy gió ngoài, mở điều hòa chế độ gió lạnh (cool) và quạt gió
                                        max. Lắc đều chai và xịt ở khe lấy gió phía ngoài xe, thường bố trí tại
                                        chân kính chắn gió phía trước. Các phân tử Glycol sẽ lưu thông qua hệ
                                        thống làm lạnh và khử mùi ẩm mốc do vi khuẩn và bụi bẩn bám trong hệ
                                        thống. Đóng kín toàn bộ cửa kính và để xe hoạt động trong 10-15p. Ngoài
                                        ra, có thể kết hợp xịt thêm phía trong xe như: thảm sàn nỉ, nỉ trần (
                                        tránh xịt tập trung tại 1 điểm, nên xịt đều, cách xa tầm 30cm) .Lưu ý,
                                        nên thay lọc gió điều hòa nếu quá bẩn, và vệ sinh hệ thống làm lạnh định
                                        kì, để đạt hiệu quả khử mùi cao nhất.</p>
                                    <p>&#8211; Với xe sau khi vận hành, lưu tại bãi đỗ qua đêm, hoặc lưu dài
                                        ngày. Bạn có thể xịt trực tiếp vào cửa gió điều hòa xe. Ozium có tác
                                        dụng khử mùi, và ngăn ngừa vi khuẩn gây mùi hôi phát triển.</p>
                                    <p>&#8211; Đối với không gian nhà, văn phòng, phòng bếp, nhà vệ sinh&#8230;
                                        Lắc đều chai và xịt vào không gian bạn muốn khử mùi theo ý muốn, đặc
                                        biệt là mùi khói thuốc.</p>
                                    <h4><strong>4. Lưu ý:</strong> Tránh xa tầm tay trẻ em và vật nuôi. Không
                                        phun trực tiếp lên người, vật nuôi, đồ uống, thực phẩm. Bình xịt áp lực,
                                        không đập hoặc tiêu hủy dưới ngọn lửa.</h4>
                                    <h4><strong>5. Bảo quản:</strong> Để nơi khô ráo thoáng mát, tránh tiếp xúc
                                        ánh nắng trực tiếp, nhiệt độ cao.</h4>
                                    <h4><strong>6. Ngày sản xuất:</strong> In trên đáy lon. Tính từ trái qua
                                        phải –Năm(2 chữ số đầu) –Ngày(2 chữ số tiếp theo) –Tháng(1 chữ số tiếp
                                        theo). Ví dụ: 18284 – Năm 2018 –Ngày 28 –Tháng 4.</h4>
                                    <h4><strong>7. Hạn sử dụng:</strong> 5 năm kể từ ngày sản xuất.</h4>
                                    <p><iframe loading="lazy" title="BÌNH XỊT KHỬ MÙI OZIUM CHÍNH HÃNG .0866.2015.82"
                                            width="1020" height="574"
                                            src="https://www.youtube.com/embed/xG3GidQ6PfM?feature=oembed" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe></p>
                                </div>

                            </div>
                        </div>


                        <div class="related related-products-wrapper product-section">

                            <h3
                                class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                Sản phẩm tương tự </h3>




                            <div class="row has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-2 row-small slider row-slider slider-nav-reveal slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>


                                <div
                                    class="product-small col has-hover product type-product post-3123 status-publish instock product_cat-bao-tay-lai product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-bao-tay-lai product_tag-boc-vo-lang product_tag-bt6002 has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6002-den/"
                                                        aria-label="Bao tay lái BT6002-Đen">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Bao tay lái cao cấp BT6002-Đen" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Den.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6002-den/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bao
                                                            tay lái BT6002-Đen</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>300.000<span
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
                                <div
                                    class="product-small col has-hover product type-product post-3033 status-publish instock product_cat-nuoc-hoa-aroma-nhap-khau-phap product_cat-phu-kien-xe-hoi product_cat-sap-thom-organic-40g product_tag-agc18 product_tag-nuoc-hoa-oto product_tag-nuoc-hoa-phap product_tag-nuoc-hoa-xe-hoi product_tag-sap-oto product_tag-sap-thom product_tag-the-giuoi-nuoc-hoa product_tag-tinh-dau product_tag-tinh-dau-aroma product_tag-tinh-dau-kep-cua-gio has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/sap-thom-aroma-car-organic-40g-lavender/"
                                                        aria-label="Sáp thơm Lavender Aroma Car Organic 40g">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Lavender - Sáp thơm aroma Organic 50gr" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/04/Lavender-Sap-thom-aroma-Organic-50gr.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/sap-thom-aroma-car-organic-40g-lavender/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Sáp
                                                            thơm Lavender Aroma Car Organic 40g</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>265.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3033"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3033" data-product_sku="AGC - 23"
                                                        aria-label="Thêm &ldquo;Sáp thơm Lavender Aroma Car Organic 40g&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-3125 status-publish last instock product_cat-bao-tay-lai product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-bao-tay-lai product_tag-boc-vo-lang product_tag-bt6002 has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6002-kem/"
                                                        aria-label="Bao tay lái BT6002-Kem">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Bao tay lái cao cấp BT6002-Kem" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6002-Kem.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6002-kem/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bao
                                                            tay lái BT6002-Kem</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>300.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3125"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3125" data-product_sku="AGC - 38"
                                                        aria-label="Thêm &ldquo;Bao tay lái BT6002-Kem&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-2957 status-publish first instock product_cat-kep-cua-gio-aroma product_cat-nuoc-hoa-aroma-nhap-khau-phap product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-agc18 product_tag-nuoc-hoa-phap product_tag-nuoc-hoa-xe-hoi product_tag-tinh-dau-aroma product_tag-tinh-dau-kep-cua-gio product_tag-ventis-wood-6ml product_tag-wood-6ml has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/kep-cua-gio-dieu-hoa-aroma-car-ventis-forest-fruits/"
                                                        aria-label="Kẹp cửa gió Aroma Car Ventis Wood 6ml- Forest Fruits">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/07/51-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Tinh dầu nước hoa Aroma Car Wood 6ml - Forest Fruits"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/07/51-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/51-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/51-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/51-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/51-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/07/51.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/kep-cua-gio-dieu-hoa-aroma-car-ventis-forest-fruits/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Kẹp
                                                            cửa gió Aroma Car Ventis Wood 6ml- Forest Fruits</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>335.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=2957"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="2957" data-product_sku="AGC - 04"
                                                        aria-label="Thêm &ldquo;Kẹp cửa gió Aroma Car Ventis Wood 6ml- Forest Fruits&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-3257 status-publish instock product_cat-phu-kien-xe-hoi product_cat-san-pham product_cat-tinh-dau-viet-nam product_tag-agc18 product_tag-nuoc-hoa-oto product_tag-nuoc-hoa-phap product_tag-nuoc-hoa-xe-hoi product_tag-the-gioi-nuoc-hoa product_tag-tinh-dau product_tag-tinh-dau-aroma product_tag-tinh-dau-kep-cua-gio has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/tinh-dau-hazelnut-huong-xa-chanh/"
                                                        aria-label="Tinh dầu Hazelnut Hương Sả Chanh">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/04/13-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Tinh dầu hazelnut hương xả chanh" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/04/13-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/13-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/13-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/13-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/04/13-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/04/13.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/tinh-dau-hazelnut-huong-xa-chanh/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tinh
                                                            dầu Hazelnut Hương Sả Chanh</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>120.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3257"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3257" data-product_sku="AGC - 56"
                                                        aria-label="Thêm &ldquo;Tinh dầu Hazelnut Hương Sả Chanh&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-3113 status-publish instock product_cat-moc-chia-khoa product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-020vang product_tag-moc-khoa-sang-chanh product_tag-moc-treo product_tag-moc-treo-khoa has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/moc-chia-khoa-sieu-dep-ma-020-vang/"
                                                        aria-label="Móc treo chìa khóa 020 Vàng đẹp và đẳng cấp">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-246x185.jpg"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Móc treo chìa khóa đẹp và đẳng cấp mã 020V"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-246x185.jpg 246w, https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-300x225.jpg 300w, https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-1024x767.jpg 1024w, https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-768x575.jpg 768w, https://agc18.com.vn/wp-content/uploads/2022/06/OM020V-600x450.jpg 600w, https://agc18.com.vn/wp-content/uploads/2022/06/OM020V.jpg 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/moc-chia-khoa-sieu-dep-ma-020-vang/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Móc
                                                            treo chìa khóa 020 Vàng đẹp và đẳng cấp</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>100.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3113"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3113" data-product_sku="AGC - 31"
                                                        aria-label="Thêm &ldquo;Móc treo chìa khóa 020 Vàng đẹp và đẳng cấp&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-3129 status-publish last instock product_cat-bao-tay-lai product_cat-phu-kien-xe-hoi product_cat-san-pham product_tag-bao-tay-lai product_tag-boc-vo-lang product_tag-bt6003 has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6003-kem/"
                                                        aria-label="Bao tay lái BT6003-Kem">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Bao tay lái cao cấp BT6003-Kem" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6003-Kem.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6003-kem/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bao
                                                            tay lái BT6003-Kem</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>300.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3129"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3129" data-product_sku="AGC - 40"
                                                        aria-label="Thêm &ldquo;Bao tay lái BT6003-Kem&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="product-small col has-hover product type-product post-3131 status-publish first instock product_cat-bao-tay-lai product_cat-phu-kien-xe-hoi product_tag-bao-tay-lai product_tag-boc-vo-lang product_tag-bt6004 has-post-thumbnail shipping-taxable purchasable product-type-simple">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box ">
                                            <div class="box-image">
                                                <div class="image-zoom">
                                                    <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6004-den/"
                                                        aria-label="Bao tay lái BT6004-Đen">
                                                        <img width="246" height="185"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-246x185.png"
                                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                            alt="Bao tay lái cao cấp BT6004 Đen" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/09/BT6004-Den.png 1276w"
                                                            sizes="(max-width: 246px) 100vw, 246px" /> </a>
                                                </div>
                                                <div class="image-tools is-small top right show-on-hover">
                                                </div>
                                                <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text box-text-products text-center grid-style-2">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/bao-tay-lai-cao-cap-bt6004-den/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bao
                                                            tay lái BT6004-Đen</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>300.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3131"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3131" data-product_sku="AGC - 41"
                                                        aria-label="Thêm &ldquo;Bao tay lái BT6004-Đen&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </div><!-- shop container -->
@endsection
