@extends('User.layouts.master')

@section('title', 'Bảng điều khiển')

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
                                <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Phụ
                                        kiện
                                        xe hơi</span><b></b><a href="https://agc18.com.vn/danh-muc/phu-kien-xe-hoi/"
                                        target="">Xem
                                        tất
                                        cả<i class="icon-angle-right"></i></a></h3>
                            </div>
                            <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                                data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                                        aria-label="Bình xịt khử mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g) Hương Citrus">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/06/15.png"
                                                            class="attachment-original size-original"
                                                            alt="Bình xịt khử mùi Ozium 0.8 oz mùi CITRUS" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/06/15.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/06/15-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/06/15-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/06/15-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/06/15-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/06/15-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/binh-xit-khu-mui-ozium-air-sanitizer-spray-0-8-oz-22-6g-citrus/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bình
                                                            xịt khử mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g)
                                                            Hương Citrus</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>199.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=4657"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="4657" data-product_sku="AGC - 102"
                                                        aria-label="Thêm &ldquo;Bình xịt khử mùi Ozium Air Sanitizer Spray 0.8 oz (22.6g) Hương Citrus&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/tuong-rong-vang-phong-thuy-cao-cap-sang-trong-tang-kem-chai-tinh-dau/"
                                                        aria-label="Tượng rồng vàng phong thủy cao cấp - sang trọng - Tặng kèm chai tinh dầu">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/04/2.png"
                                                            class="attachment-original size-original"
                                                            alt="Tượng rồng vàng phong thủy cao cấp - sang trọng"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/04/2.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/04/2-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/2-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/04/2-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/2-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/2-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/tuong-rong-vang-phong-thuy-cao-cap-sang-trong-tang-kem-chai-tinh-dau/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tượng
                                                            rồng vàng phong thủy cao cấp &#8211; sang trọng
                                                            &#8211; Tặng kèm chai tinh dầu</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>490.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3738"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3738" data-product_sku="AGC - 88"
                                                        aria-label="Thêm &ldquo;Tượng rồng vàng phong thủy cao cấp - sang trọng - Tặng kèm chai tinh dầu&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/bao-tay-lai-bt6018-den/"
                                                        aria-label="Bao tay lái BT6018 - Đen">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2023/01/web.png"
                                                            class="attachment-original size-original" alt=""
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2023/01/web.png 1276w, https://agc18.com.vn/wp-content/uploads/2023/01/web-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2023/01/web-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2023/01/web-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2023/01/web-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2023/01/web-600x450.png 600w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/bao-tay-lai-bt6018-den/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bao
                                                            tay lái BT6018 &#8211; Đen</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>350.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=6699"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="6699" data-product_sku=""
                                                        aria-label="Thêm &ldquo;Bao tay lái BT6018 - Đen&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/boc-vo-lang-cao-cap-ma-a010/"
                                                        aria-label="Bọc vô lăng cao cấp mã A010_Ghi">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2021/01/31.png"
                                                            class="attachment-original size-original"
                                                            alt="Bọc vô lăng cao cấp A010-Ghi" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2021/01/31.png 1276w, https://agc18.com.vn/wp-content/uploads/2021/01/31-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2021/01/31-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2021/01/31-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2021/01/31-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2021/01/31-600x450.png 600w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/boc-vo-lang-cao-cap-ma-a010/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bọc
                                                            vô lăng cao cấp mã A010_Ghi</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>600.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=4923"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="4923" data-product_sku="AGC - 191"
                                                        aria-label="Thêm &ldquo;Bọc vô lăng cao cấp mã A010_Ghi&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/tuong-ca-chep-doc-dao-tang-chai-tinh-dau/"
                                                        aria-label="Tượng cá chép độc đáo - Tặng chai tinh dầu">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/07/75.png"
                                                            class="attachment-original size-original"
                                                            alt="Tượng Cá chép phong thủy may mắn" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/07/75.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/75-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/75-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/75-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/75-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/75-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/tuong-ca-chep-doc-dao-tang-chai-tinh-dau/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tượng
                                                            cá chép độc đáo &#8211; Tặng chai tinh dầu</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>510.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=3742"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="3742" data-product_sku="AGC - 87"
                                                        aria-label="Thêm &ldquo;Tượng cá chép độc đáo - Tặng chai tinh dầu&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/moc-treo-chia-khoa-dep-va-dang-cap-mau-om096b/"
                                                        aria-label="Móc chìa khóa đẹp và đẳng cấp – Mẫu OM096B">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2022/06/OM096B.jpg"
                                                            class="attachment-original size-original"
                                                            alt="Móc treo chìa khóa đẹp và đẳng cấp mã OM096B"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2022/06/OM096B.jpg 1276w, https://agc18.com.vn/wp-content/uploads/2022/06/OM096B-300x225.jpg 300w, https://agc18.com.vn/wp-content/uploads/2022/06/OM096B-1024x767.jpg 1024w, https://agc18.com.vn/wp-content/uploads/2022/06/OM096B-768x575.jpg 768w, https://agc18.com.vn/wp-content/uploads/2022/06/OM096B-246x185.jpg 246w, https://agc18.com.vn/wp-content/uploads/2022/06/OM096B-600x450.jpg 600w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/moc-treo-chia-khoa-dep-va-dang-cap-mau-om096b/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Móc
                                                            chìa khóa đẹp và đẳng cấp – Mẫu OM096B</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>80.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=4215"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="4215" data-product_sku="AGC - 130"
                                                        aria-label="Thêm &ldquo;Móc chìa khóa đẹp và đẳng cấp – Mẫu OM096B&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/tuong-phat-to-ngoi-dai-sen-ma-cao-cap/"
                                                        aria-label="Tượng Phật Tổ ngồi đài sen - Mạ cao cấp">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/07/69.png"
                                                            class="attachment-original size-original"
                                                            alt="Tượng phật tổ ngồi đài sen" decoding="async"
                                                            loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/07/69.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/69-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/69-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/69-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/69-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/69-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/tuong-phat-to-ngoi-dai-sen-ma-cao-cap/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tượng
                                                            Phật Tổ ngồi đài sen &#8211; Mạ cao cấp</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>550.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=5066"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="5066" data-product_sku="AGC - 212"
                                                        aria-label="Thêm &ldquo;Tượng Phật Tổ ngồi đài sen - Mạ cao cấp&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="col-inner">

                                        <div class="badge-container absolute left top z-1">

                                        </div>
                                        <div class="product-small box has-hover box-normal box-text-bottom">
                                            <div class="box-image">
                                                <div class="image-zoom image-cover" style="padding-top:75%;">
                                                    <a href="https://agc18.com.vn/san-pham/kep-cua-gio-dieu-hoa-aroma-car-ventis-forest-fruits/"
                                                        aria-label="Kẹp cửa gió Aroma Car Ventis Wood 6ml- Forest Fruits">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/07/51.png"
                                                            class="attachment-original size-original"
                                                            alt="Tinh dầu nước hoa Aroma Car Wood 6ml - Forest Fruits"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/07/51.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/51-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/51-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/51-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/51-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/51-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
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
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
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
    {{--  Danh mục thứ 2 --}}
    {{-- <section class="section danh-muc" id="section_1652502267">
        <div class="bg section-bg fill bg-fill  bg-loaded">





        </div>



        <div class="section-content relative">


            <div class="row row-small" id="row-1087834910">


                <div id="col-455735853" class="col small-12 large-12">
                    <div class="col-inner">



                        <div class="container section-title-container">
                            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Hóa
                                    chất chuyên dụng</span><b></b><a
                                    href="https://agc18.com.vn/danh-muc/hoa-chat-chuyen-dung/" target="">Xem
                                    tất cả<i class="icon-angle-right"></i></a></h3>
                        </div>



                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>


                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/dung-dich-ve-sinh-dan-lanh-dieu-hoa-senfineco-9981/"
                                                    aria-label="DUNG DỊCH VỆ SINH DÀN LẠNH ĐIỀU HÒA SENFINECO 9981">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981.png"
                                                        class="attachment-original size-original"
                                                        alt="VỆ SINH DÀN LẠNH ĐIỀU HÒA 9981" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981.png 1276w, https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2021/11/VE-SINH-DAN-LANH-DIEU-HOA-9981-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/dung-dich-ve-sinh-dan-lanh-dieu-hoa-senfineco-9981/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">DUNG
                                                        DỊCH VỆ SINH DÀN LẠNH ĐIỀU HÒA SENFINECO 9981</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>390.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=6128" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="6128" data-product_sku="AGC - 9981"
                                                    aria-label="Thêm &ldquo;DUNG DỊCH VỆ SINH DÀN LẠNH ĐIỀU HÒA SENFINECO 9981&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/dung-dich-lam-mat-dong-co-techgroup-coolant-639r-standard-1-lit/"
                                                    aria-label="DUNG DỊCH LÀM MÁT ĐỘNG CƠ TECHGROUP 639R– STANDARD (1 lít)">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2021/04/123.png"
                                                        class="attachment-original size-original" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2021/04/123.png 1276w, https://agc18.com.vn/wp-content/uploads/2021/04/123-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2021/04/123-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2021/04/123-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2021/04/123-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2021/04/123-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/dung-dich-lam-mat-dong-co-techgroup-coolant-639r-standard-1-lit/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">DUNG
                                                        DỊCH LÀM MÁT ĐỘNG CƠ TECHGROUP 639R– STANDARD (1
                                                        lít)</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span class="amount">Liên hệ báo
                                                        giá</span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a
                                                    href="https://agc18.com.vn/san-pham/dung-dich-lam-mat-dong-co-techgroup-coolant-639r-standard-1-lit/"
                                                    data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple is-outline"
                                                    data-product_id="5745" data-product_sku=""
                                                    aria-label="Đọc thêm về &ldquo;DUNG DỊCH LÀM MÁT ĐỘNG CƠ TECHGROUP 639R– STANDARD (1 lít)&rdquo;"
                                                    aria-describedby="" rel="nofollow">Đọc tiếp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/bot-tuyet-chuyen-dung-512-5l/"
                                                    aria-label="Bọt tuyết chuyên dụng Techgroup 512 (5L)">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/64.png"
                                                        class="attachment-original size-original"
                                                        alt="Dung dịch bọt tuyết chuyên dụng 512.1" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/64.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/64-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/64-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/64-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/64-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/64-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/bot-tuyet-chuyen-dung-512-5l/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bọt
                                                        tuyết chuyên dụng Techgroup 512 (5L)</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>420.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=2991" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="2991" data-product_sku="AGC -10"
                                                    aria-label="Thêm &ldquo;Bọt tuyết chuyên dụng Techgroup 512 (5L)&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/suc-rua-kim-phun-xang-lam-sach-voi-phun-nhien-lieu-9986/"
                                                    aria-label="Súc Rửa Kim Phun Xăng , Làm Sạch Vòi Phun Nhiên Liệu 9986">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/28.png"
                                                        class="attachment-original size-original"
                                                        alt="Súc Rửa Kim Phun Xăng , Làm Sạch Vòi Phun Nhiên Liệu"
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/28.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/28-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/28-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/28-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/28-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/28-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/suc-rua-kim-phun-xang-lam-sach-voi-phun-nhien-lieu-9986/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Súc
                                                        Rửa Kim Phun Xăng , Làm Sạch Vòi Phun Nhiên Liệu
                                                        9986</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>180.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=5932" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="5932" data-product_sku="AGC - 986"
                                                    aria-label="Thêm &ldquo;Súc Rửa Kim Phun Xăng , Làm Sạch Vòi Phun Nhiên Liệu 9986&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/ve-sinh-he-thong-hut-xang-phong-dot-piston-souppape-dong-co-xang-9921/"
                                                    aria-label="Vệ Sinh Hệ Thống Hút Xăng , Phồng Đốt , Piston , Souppape Động Cơ Xăng 9921">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921.png"
                                                        class="attachment-original size-original" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921.png 1276w, https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2021/12/Ve-Sinh-He-Thong-Hut-Xang-Phong-Dot-Piston-Souppape-Dong-Co-Xang-9921-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/ve-sinh-he-thong-hut-xang-phong-dot-piston-souppape-dong-co-xang-9921/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Vệ
                                                        Sinh Hệ Thống Hút Xăng , Phồng Đốt , Piston ,
                                                        Souppape Động Cơ Xăng 9921</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>850.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=6176" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="6176" data-product_sku="AGC - 9921"
                                                    aria-label="Thêm &ldquo;Vệ Sinh Hệ Thống Hút Xăng , Phồng Đốt , Piston , Souppape Động Cơ Xăng 9921&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/dung-dich-lam-den-nhua-waxco-100ml/"
                                                    aria-label="Dung dịch làm đen nhựa Waxco 100ml">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml.png"
                                                        class="attachment-original size-original"
                                                        alt="Dung dịch làm đen nhựa Waxco 100ml" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/Dung-dich-lam-den-nhua-Waxco-100ml-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/dung-dich-lam-den-nhua-waxco-100ml/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Dung
                                                        dịch làm đen nhựa Waxco 100ml</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>151.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=3180" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="3180" data-product_sku="AGC - 53"
                                                    aria-label="Thêm &ldquo;Dung dịch làm đen nhựa Waxco 100ml&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/tay-nhua-duong-nhua-cay-chuyen-dung-cho-oto/"
                                                    aria-label="Tẩy nhựa đường Waxco - nhựa cây chuyên dụng cho ôtô">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/04/7.png"
                                                        class="attachment-original size-original"
                                                        alt="Tẩy nhựa đường Waxco - nhựa cây chuyên dụng cho ôtô"
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/04/7.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/04/7-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/7-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/04/7-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/7-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/7-768x575.png 768w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/tay-nhua-duong-nhua-cay-chuyen-dung-cho-oto/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tẩy
                                                        nhựa đường Waxco &#8211; nhựa cây chuyên dụng cho
                                                        ôtô</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>159.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=3173" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="3173" data-product_sku="AGC -51"
                                                    aria-label="Thêm &ldquo;Tẩy nhựa đường Waxco - nhựa cây chuyên dụng cho ôtô&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/tay-nhua-duong-nhua-cay-chuyen-dung-cho-oto-2/"
                                                    aria-label="Tẩy nhựa đường, băng dính, keo, bụi sơn Beauty Car 450ml">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8.jpg"
                                                        class="attachment-original size-original" alt=""
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8.jpg 1276w, https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8-300x225.jpg 300w, https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8-1024x767.jpg 1024w, https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8-768x575.jpg 768w, https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8-246x185.jpg 246w, https://agc18.com.vn/wp-content/uploads/2022/06/z3514105826284_000_45a999d7bf39ac5c1098097c8dde10a8-600x450.jpg 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/tay-nhua-duong-nhua-cay-chuyen-dung-cho-oto-2/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Tẩy
                                                        nhựa đường, băng dính, keo, bụi sơn Beauty Car
                                                        450ml</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>90.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=6627" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="6627" data-product_sku="AGC - 966"
                                                    aria-label="Thêm &ldquo;Tẩy nhựa đường, băng dính, keo, bụi sơn Beauty Car 450ml&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
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


        <style>
            #section_1652502267 {
                padding-top: 0px;
                padding-bottom: 0px;
                background-color: rgb(245, 245, 245);
            }

            #section_1652502267 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_1652502267 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section> --}}
    {{-- Danh mục thứ 3 --}}
    {{-- <section class="section danh-muc" id="section_942892645">
        <div class="bg section-bg fill bg-fill  bg-loaded">





        </div>



        <div class="section-content relative">


            <div class="row row-small" id="row-529804132">


                <div id="col-1119512666" class="col small-12 large-12">
                    <div class="col-inner">



                        <div class="container section-title-container">
                            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Phụ
                                    tùng xe hơi</span><b></b><a href="/danh-muc/san-pham/phu-tung-xe-hoi/"
                                    target="">Xem tất
                                    cả<i class="icon-angle-right"></i></a></h3>
                        </div>



                        <div class="row large-columns-4 medium-columns-3 small-columns-2 row-small has-shadow row-box-shadow-1 slider row-slider slider-nav-simple slider-nav-outside slider-nav-push"
                            data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>


                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/loc-cabin-huyndai-kia-k3-verna-accent-blue-avante-elantra/"
                                                    aria-label="Lọc Cabin Huyndai (Kia K3, Verna, Accent, Blue, Avante. Elantra..) 97133 -2E250">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/44-1.png"
                                                        class="attachment-original size-original"
                                                        alt="Lọc Cabin Huyndai (Kia K3, Verna, Accent, Blue, Avante. Elantra..)"
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/44-1.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/44-1-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/44-1-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/44-1-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/07/44-1-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/44-1-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/loc-cabin-huyndai-kia-k3-verna-accent-blue-avante-elantra/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Lọc
                                                        Cabin Huyndai (Kia K3, Verna, Accent, Blue, Avante.
                                                        Elantra..) 97133 -2E250</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>125.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=4819" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="4819" data-product_sku="AGC - 190"
                                                    aria-label="Thêm &ldquo;Lọc Cabin Huyndai (Kia K3, Verna, Accent, Blue, Avante. Elantra..) 97133 -2E250&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/den-gam-led-bar-sieu-sang-8-mat-meo-bam-duong/"
                                                    aria-label="Đèn Gầm led siêu sáng 8 mắt mèo - Bám đường">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led.png"
                                                        class="attachment-original size-original"
                                                        alt="Bóng đèn led ánh sáng vàng bám đường" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led.png 1276w, https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2020/10/Den-Led-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/den-gam-led-bar-sieu-sang-8-mat-meo-bam-duong/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Đèn
                                                        Gầm led siêu sáng 8 mắt mèo &#8211; Bám đường</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>240.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=4082" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="4082" data-product_sku="AGC - 100"
                                                    aria-label="Thêm &ldquo;Đèn Gầm led siêu sáng 8 mắt mèo - Bám đường&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/loc-dieu-hoa-huyndai-santafe-2008-97133-2b010/"
                                                    aria-label="Lọc điều hòa Huyndai Santafe( ~ 2008) 97133 - 2B010">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/46-1.png"
                                                        class="attachment-original size-original"
                                                        alt="Lọc điều hòa Huyndai Santafe (~2008)" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/46-1.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/46-1-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/46-1-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/46-1-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/07/46-1-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/46-1-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/loc-dieu-hoa-huyndai-santafe-2008-97133-2b010/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Lọc
                                                        điều hòa Huyndai Santafe( ~ 2008) 97133 &#8211;
                                                        2B010</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>150.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=4807" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="4807" data-product_sku="AGC - 183"
                                                    aria-label="Thêm &ldquo;Lọc điều hòa Huyndai Santafe( ~ 2008) 97133 - 2B010&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/loc-gio-dong-co-hyundai-avante-elantra-i30-kona-cong-ty-agc18/"
                                                    aria-label="Lọc Gió Động Cơ Dành Cho Ô Tô Hyundai Avante Và Elantra 2015-2019, I30, Kona 1.6 2017-2019 Mã 28113-F2000">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2020/10/F2000.jpg"
                                                        class="attachment-original size-original"
                                                        alt="Lọc động cơ huyndai 28113.F2000" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2020/10/F2000.jpg 1276w, https://agc18.com.vn/wp-content/uploads/2020/10/F2000-300x225.jpg 300w, https://agc18.com.vn/wp-content/uploads/2020/10/F2000-1024x767.jpg 1024w, https://agc18.com.vn/wp-content/uploads/2020/10/F2000-768x575.jpg 768w, https://agc18.com.vn/wp-content/uploads/2020/10/F2000-246x185.jpg 246w, https://agc18.com.vn/wp-content/uploads/2020/10/F2000-600x450.jpg 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/loc-gio-dong-co-hyundai-avante-elantra-i30-kona-cong-ty-agc18/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Lọc
                                                        Gió Động Cơ Dành Cho Ô Tô Hyundai Avante Và Elantra
                                                        2015-2019, I30, Kona 1.6 2017-2019 Mã
                                                        28113-F2000</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>180.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=5493" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="5493" data-product_sku="AGC - 451"
                                                    aria-label="Thêm &ldquo;Lọc Gió Động Cơ Dành Cho Ô Tô Hyundai Avante Và Elantra 2015-2019, I30, Kona 1.6 2017-2019 Mã 28113-F2000&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/gat-mua-han-quoc-ub-size-20-500mm/"
                                                    aria-label="Gạt mưa Hàn Quốc UB size:20 – 500mm">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/04/GM-20.png"
                                                        class="attachment-original size-original"
                                                        alt="Gạt mưa Hàn Quốc UB 500mm" decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/04/GM-20.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/04/GM-20-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/04/GM-20-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/04/GM-20-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/04/GM-20-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/04/GM-20-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/gat-mua-han-quoc-ub-size-20-500mm/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Gạt
                                                        mưa Hàn Quốc UB size:20 – 500mm</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>200.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=3002" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="3002" data-product_sku="AGC -16"
                                                    aria-label="Thêm &ldquo;Gạt mưa Hàn Quốc UB size:20 – 500mm&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/loc-dieu-hoa-huyndai/"
                                                    aria-label="Lọc điều hòa Huyndai (Santafe(2010 ~), Veracruz, Kia Sorento..) 97113 - 2B005">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/47-1.png"
                                                        class="attachment-original size-original"
                                                        alt="Lọc điều hòa Huyndai (Santafe(2010 ~), Veracruz, Kia Sorento..)"
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/47-1.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/47-1-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/47-1-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/47-1-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/07/47-1-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/47-1-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/loc-dieu-hoa-huyndai/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Lọc
                                                        điều hòa Huyndai (Santafe(2010 ~), Veracruz, Kia
                                                        Sorento..) 97113 &#8211; 2B005</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>150.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=4803" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="4803" data-product_sku="AGC - 181"
                                                    aria-label="Thêm &ldquo;Lọc điều hòa Huyndai (Santafe(2010 ~), Veracruz, Kia Sorento..) 97113 - 2B005&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/bugi-denso-platinum-pk16tt-cho-xe-toyota-camryviosyaris/"
                                                    aria-label="Bugi Denso Platinum PK16TT cho xe TOYOTA CAMRY,VIOS,YARIS...">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT.png"
                                                        class="attachment-original size-original"
                                                        alt="Bugi Denso Platinum PK16TT cho xe TOYOTA CAMRY,VIOS,YARIS..."
                                                        decoding="async" loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT.png 1276w, https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2020/10/PK16TT-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/bugi-denso-platinum-pk16tt-cho-xe-toyota-camryviosyaris/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Bugi
                                                        Denso Platinum PK16TT cho xe TOYOTA
                                                        CAMRY,VIOS,YARIS&#8230;</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span class="amount">Liên hệ báo
                                                        giá</span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a
                                                    href="https://agc18.com.vn/san-pham/bugi-denso-platinum-pk16tt-cho-xe-toyota-camryviosyaris/"
                                                    data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple is-outline"
                                                    data-product_id="5872" data-product_sku="AGC - 902"
                                                    aria-label="Đọc thêm về &ldquo;Bugi Denso Platinum PK16TT cho xe TOYOTA CAMRY,VIOS,YARIS...&rdquo;"
                                                    aria-describedby="" rel="nofollow">Đọc tiếp</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col-inner">

                                    <div class="badge-container absolute left top z-1">

                                    </div>
                                    <div class="product-small box has-hover box-normal box-text-bottom">
                                        <div class="box-image">
                                            <div class="image-zoom image-cover" style="padding-top:75%;">
                                                <a href="https://agc18.com.vn/san-pham/loc-gio-dieu-hoa-honda-civic-doi-2012-2015-crv-doi-2012-2016-80292-sda-a01/"
                                                    aria-label="Lọc gió điều hòa Honda Civic đời 2012-2015, CRV đời 2012-2016 (80292-SDA-A01)">
                                                    <img width="1276" height="956"
                                                        src="https://agc18.com.vn/wp-content/uploads/2019/07/42.png"
                                                        class="attachment-original size-original"
                                                        alt="Lọc điều hòa Hon da 80292 - A01" decoding="async"
                                                        loading="lazy"
                                                        srcset="https://agc18.com.vn/wp-content/uploads/2019/07/42.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/42-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/42-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/42-768x575.png 768w, https://agc18.com.vn/wp-content/uploads/2019/07/42-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/42-600x450.png 600w"
                                                        sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                            </div>
                                            <div class="image-tools top right show-on-hover">
                                            </div>
                                            <div
                                                class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                            </div>
                                        </div>

                                        <div class="box-text text-center">
                                            <div class="title-wrapper">
                                                <p class="name product-title woocommerce-loop-product__title">
                                                    <a href="https://agc18.com.vn/san-pham/loc-gio-dieu-hoa-honda-civic-doi-2012-2015-crv-doi-2012-2016-80292-sda-a01/"
                                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Lọc
                                                        gió điều hòa Honda Civic đời 2012-2015, CRV đời
                                                        2012-2016 (80292-SDA-A01)</a>
                                                </p>
                                            </div>
                                            <div class="price-wrapper">
                                                <span class="price"><span
                                                        class="woocommerce-Price-amount amount"><bdi>120.000<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                            </div>
                                            <div class="add-to-cart-button"><a href="?add-to-cart=5221" data-quantity="1"
                                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                    data-product_id="5221" data-product_sku="AGC - 262"
                                                    aria-label="Thêm &ldquo;Lọc gió điều hòa Honda Civic đời 2012-2015, CRV đời 2012-2016 (80292-SDA-A01)&rdquo; vào giỏ hàng"
                                                    aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                    hàng</a>
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


        <style>
            #section_942892645 {
                padding-top: 0px;
                padding-bottom: 0px;
                background-color: rgb(245, 245, 245);
            }

            #section_942892645 .ux-shape-divider--top svg {
                height: 150px;
                --divider-top-width: 100%;
            }

            #section_942892645 .ux-shape-divider--bottom svg {
                height: 150px;
                --divider-width: 100%;
            }
        </style>
    </section> --}}
    {{-- sản phẩm bán chạy --}}
    <section class="section danh-muc" id="section_2035819258">
        <div class="bg section-bg fill bg-fill  bg-loaded">
        </div>
        <div class="section-content relative">


            <div class="row row-small" id="row-1748506453">


                <div id="col-1109937073" class="col small-12 large-12">
                    <div class="col-inner">



                        <div class="container section-title-container">
                            <h3 class="section-title section-title-normal"><b></b><span class="section-title-main">Sản
                                    phẩm bán chạy</span><b></b></h3>
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
                                                    <a href="#"
                                                        aria-label="Nước hoa kẹp cửa gió Aroma Citrus Squash - 7ml">
                                                        <img width="1276" height="956"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/07/55.png"
                                                            class="attachment-original size-original"
                                                            alt="Kẹp cửa gió Aroma Car Intenso Air Vent - Citrus Squash"
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/07/55.png 1276w, https://agc18.com.vn/wp-content/uploads/2019/07/55-246x185.png 246w, https://agc18.com.vn/wp-content/uploads/2019/07/55-600x450.png 600w, https://agc18.com.vn/wp-content/uploads/2019/07/55-300x225.png 300w, https://agc18.com.vn/wp-content/uploads/2019/07/55-1024x767.png 1024w, https://agc18.com.vn/wp-content/uploads/2019/07/55-768x575.png 768w"
                                                            sizes="(max-width: 1276px) 100vw, 1276px" /> </a>
                                                </div>
                                                <div class="image-tools top right show-on-hover">
                                                </div>
                                                <div
                                                    class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                                </div>
                                            </div>

                                            <div class="box-text text-center">
                                                <div class="title-wrapper">
                                                    <p class="name product-title woocommerce-loop-product__title">
                                                        <a href="https://agc18.com.vn/san-pham/nuoc-hoa-kep-cua-gio-dieu-hoa-danh-cho-oto/"
                                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">Nước
                                                            hoa kẹp cửa gió Aroma Citrus Squash &#8211; 7ml</a>
                                                    </p>
                                                </div>
                                                <div class="price-wrapper">
                                                    <span class="price"><span
                                                            class="woocommerce-Price-amount amount"><bdi>335.000<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                                </div>
                                                <div class="add-to-cart-button"><a href="?add-to-cart=4251"
                                                        data-quantity="1"
                                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                                        data-product_id="4251" data-product_sku="AGC - 150"
                                                        aria-label="Thêm &ldquo;Nước hoa kẹp cửa gió Aroma Citrus Squash - 7ml&rdquo; vào giỏ hàng"
                                                        aria-describedby="" rel="nofollow">Thêm vào giỏ
                                                        hàng</a>
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
