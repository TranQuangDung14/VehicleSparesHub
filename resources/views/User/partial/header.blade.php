<div class="header-wrapper">
    <div id="top-bar" class="header-top hide-for-sticky hide-for-medium">
        <div class="flex-row container">
            <div class="flex-col hide-for-medium flex-left">
                <ul class="nav nav-left medium-nav-center nav-small  nav-divided">
                    <li class="header-contact-wrapper">
                        <ul id="header-contact" class="nav nav-divided nav-uppercase header-contact">

                            <li class="">
                                <a href="mailto:agc18.auto@gmail.com" class="tooltip" title="agc18.auto@gmail.com">
                                    <i class="icon-envelop" style="font-size:16px;"></i> <span>
                                        agc18.auto@gmail.com </span>
                                </a>
                            </li>
                            <li class="">
                                <a class="tooltip" title="08:00 - 17:00 ">
                                    <i class="icon-clock" style="font-size:16px;"></i> <span>08:00 -
                                        17:00</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="tel:0866.2015.82 - (028).2215.9268" class="tooltip"
                                    title="0866.2015.82 - (028).2215.9268">
                                    <i class="icon-phone" style="font-size:16px;"></i> <span>0866.2015.82
                                        -
                                        (028).2215.9268</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="flex-col hide-for-medium flex-center">
                <ul class="nav nav-center nav-small  nav-divided">
                </ul>
            </div>

            <style>
                /* Định dạng danh sách submenu là ul và các mục li */
                .sub-menu {
                    list-style-type: none;
                    padding: 0;
                    margin: 0;
                }

                .sub-menu li {
                    padding: 5px;
                    padding-left: 25%;
                }

                /* Định dạng nút đăng xuất để có giao diện tương tự với các mục khác */
                .sub-menu button {
                    background: none;
                    border: none;
                    padding: 0;
                    font: inherit;
                    cursor: pointer;
                }

                /* Đổi màu khi di chuột vào nút đăng xuất */
                .sub-menu button:hover {
                    background-color: #eee;
                    /* Màu nền khi hover */
                }
            </style>

            <div class="flex-col hide-for-medium flex-right">
                <ul class="nav top-bar-nav nav-right nav-small  nav-divided">
                    @if (auth()->check())
                        @if (auth()->user()->role === 2)
                            <li class="account-item has-icon has-dropdown">
                                <span>Xin chào: {{ $data['userName'] }}</span>

                                <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                                    <form action="{{ route('logout_User') }}" method="POST">
                                        @csrf
                                        <li id="menu-item-921"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-921">
                                            <button type="submit">Đăng xuất</button>
                                        </li>
                                    </form>

                                </ul>

                            </li>
                        @else
                            <li class="account-item has-icon">
                                <a href="{{ route('showlogin_User') }}"
                                    class="nav-top-link nav-top-not-logged-in is-small">
                                    <span>
                                        Đăng nhập </span>
                                </a>
                            </li>
                        @endif
                    @else
                        <li class="account-item has-icon">
                            <a href="{{ route('showlogin_User') }}" class="nav-top-link nav-top-not-logged-in is-small">
                                <span>
                                    Đăng nhập </span>
                            </a>
                        </li>
                    @endif

                    <li class="cart-item has-icon ">

                        <a href="{{ route('Cart') }}" title="Giỏ hàng" class="header-cart-link is-small">
                            <span class="header-cart-title">
                                Giỏ hàng
                                 {{-- <span class="cart-price"><span
                                        class="woocommerce-Price-amount amount"><bdi>0<span
                                                class="woocommerce-Price-currencySymbol">&#8363;</span>
                                            </bdi></span></span> --}}
                            </span>
                            <i class="icon-shopping-cart" data-icon-label="0">
                            </i>
                        </a>
                        {{-- <ul class="nav-dropdown nav-dropdown-simple">
                            <li class="html widget_shopping_cart">
                                <div class="widget_shopping_cart_content">
                                    <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong
                                        giỏ hàng.</p>
                                </div>
                            </li>
                        </ul> --}}

                    </li>
                </ul>
            </div>


        </div>
    </div>
    <div id="masthead" class="header-main hide-for-sticky">
        <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">

            <!-- Logo -->
            <div id="logo" class="flex-col logo">

                <!-- Header logo -->
                <a href="https://agc18.com.vn/" title="Công ty phân phối phụ kiện &#8211; phụ tùng oto - agc18"
                    rel="home">
                    <img width="894" height="552" src="https://agc18.com.vn/wp-content/uploads/2019/03/image1.png"
                        class="header_logo header-logo" alt="Công ty phân phối phụ kiện &#8211; phụ tùng oto" /><img
                        width="894" height="552" src="https://agc18.com.vn/wp-content/uploads/2019/03/image1.png"
                        class="header-logo-dark" alt="Công ty phân phối phụ kiện &#8211; phụ tùng oto" /></a>
            </div>

            <!-- Mobile Left Elements -->
            <div class="flex-col show-for-medium flex-left">
                <ul class="mobile-nav nav nav-left ">
                    <li class="nav-icon has-icon">
                        <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                            data-color="" class="is-small" aria-label="Menu" aria-controls="main-menu"
                            aria-expanded="false">

                            <i class="icon-menu"></i>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Left Elements -->
            <div class="flex-col hide-for-medium flex-left
flex-grow">
                <ul class="header-nav header-nav-main nav nav-left  nav-uppercase">
                    <li class="header-block">
                        <div class="header-block-block-1">
                            <div id="gap-2003857685" class="gap-element clearfix" style="display:block; height:auto;">

                                <style>
                                    #gap-2003857685 {
                                        padding-top: 15px;
                                    }
                                </style>
                            </div>


                            <div class="row row-small align-middle align-center header-block" id="row-1935150671">


                                <div id="col-1360438774" class="col medium-6 small-12 large-6">
                                    <div class="col-inner">



                                        <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                            <form role="search" method="get" class="searchform"
                                                action="https://agc18.com.vn/">
                                                <div class="flex-row relative">
                                                    <div class="flex-col flex-grow">
                                                        <label class="screen-reader-text"
                                                            for="woocommerce-product-search-field-0">Tìm
                                                            kiếm:</label>
                                                        <input type="search" id="woocommerce-product-search-field-0"
                                                            class="search-field mb-0"
                                                            placeholder="Tìm kiếm sản phẩm..." value=""
                                                            name="s" />
                                                        <input type="hidden" name="post_type" value="product" />
                                                    </div>
                                                    <div class="flex-col">
                                                        <button type="submit" value="Tìm kiếm"
                                                            class="ux-search-submit submit-button secondary button icon mb-0"
                                                            aria-label="Submit">
                                                            <i class="icon-search"></i> </button>
                                                    </div>
                                                </div>
                                                <div class="live-search-results text-left z-top"></div>
                                            </form>
                                        </div>


                                    </div>
                                </div>



                                <div id="col-1073455395" class="col medium-3 small-12 large-3">
                                    <div class="col-inner text-center">




                                        <div class="icon-box featured-box icon-box-left text-left is-small">
                                            <div class="icon-box-img" style="width: 57px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="256" height="256"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/03/moondays-77348-1.png"
                                                            class="attachment-medium size-medium" alt=""
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/03/moondays-77348-1.png 256w, https://agc18.com.vn/wp-content/uploads/2019/03/moondays-77348-1-100x100.png 100w, https://agc18.com.vn/wp-content/uploads/2019/03/moondays-77348-1-150x150.png 150w"
                                                            sizes="(max-width: 256px) 100vw, 256px" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">


                                                <div id="gap-580774340" class="gap-element clearfix"
                                                    style="display:block; height:auto;">

                                                    <style>
                                                        #gap-580774340 {
                                                            padding-top: 5px;
                                                        }
                                                    </style>
                                                </div>


                                                <p style="text-align: left;"><span
                                                        style="font-size: 140%; color: #50b848;"><strong>0866.2015.82</strong></span>
                                                </p>
                                                <p style="text-align: left;">Tư vấn miễn phí 24/7</p>

                                            </div>
                                        </div>



                                    </div>
                                </div>



                                <div id="col-444493721" class="col medium-3 small-12 large-3">
                                    <div class="col-inner text-center">




                                        <div class="icon-box featured-box icon-box-left text-left is-small">
                                            <div class="icon-box-img" style="width: 57px">
                                                <div class="icon">
                                                    <div class="icon-inner">
                                                        <img width="225" height="225"
                                                            src="https://agc18.com.vn/wp-content/uploads/2019/03/tải-xuống-2.png"
                                                            class="attachment-medium size-medium" alt=""
                                                            decoding="async" loading="lazy"
                                                            srcset="https://agc18.com.vn/wp-content/uploads/2019/03/tải-xuống-2.png 225w, https://agc18.com.vn/wp-content/uploads/2019/03/tải-xuống-2-100x100.png 100w, https://agc18.com.vn/wp-content/uploads/2019/03/tải-xuống-2-150x150.png 150w"
                                                            sizes="(max-width: 225px) 100vw, 225px" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="icon-box-text last-reset">


                                                <div id="gap-163658108" class="gap-element clearfix"
                                                    style="display:block; height:auto;">

                                                    <style>
                                                        #gap-163658108 {
                                                            padding-top: 5px;
                                                        }
                                                    </style>
                                                </div>
                                                <p style="text-align: left;"><span
                                                        style="font-size: 140%; color: #50b848;"><strong>Ship
                                                            hàng</strong></span></p>
                                                <p style="text-align: left;">Trên toàn quốc</p>

                                            </div>
                                        </div>



                                    </div>
                                </div>



                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Right Elements -->
            <div class="flex-col hide-for-medium flex-right">
                <ul class="header-nav header-nav-main nav nav-right  nav-uppercase">
                </ul>
            </div>

            <!-- Mobile Right Elements -->
            <div class="flex-col show-for-medium flex-right">
                <ul class="mobile-nav nav nav-right ">
                    <li class="cart-item has-icon">

                        <a href="https://agc18.com.vn/gio-hang/"
                            class="header-cart-link off-canvas-toggle nav-top-link is-small" data-open="#cart-popup"
                            data-class="off-canvas-cart" title="Giỏ hàng" data-pos="right">

                            <i class="icon-shopping-cart" data-icon-label="0">
                            </i>
                        </a>


                        <!-- Cart Sidebar Popup -->
                        <div id="cart-popup" class="mfp-hide widget_shopping_cart">
                            <div class="cart-popup-inner inner-padding">
                                <div class="cart-popup-title text-center">
                                    <h4 class="uppercase">Giỏ hàng</h4>
                                    <div class="is-divider"></div>
                                </div>
                                <div class="widget_shopping_cart_content">


                                    <p class="woocommerce-mini-cart__empty-message">Chưa có sản phẩm trong
                                        giỏ hàng.</p>


                                </div>
                                <div class="cart-sidebar-content relative"></div>
                            </div>
                        </div>

                    </li>
                </ul>
            </div>

        </div>

    </div>
    <div id="wide-nav" class="header-bottom wide-nav hide-for-sticky flex-has-center hide-for-medium">
        <div class="flex-row container">

            <div class="flex-col hide-for-medium flex-left">
                <ul
                    class="nav header-nav header-bottom-nav nav-left  nav-divided nav-size-large nav-spacing-xlarge nav-uppercase">
                    <div id="mega-menu-wrap" class="ot-vm-hover">
                        <div id="mega-menu-title">
                            <i class="icon-menu"></i> DANH MỤC SẢN PHẨM
                        </div>
                        <ul id="mega_menu" class="sf-menu sf-vertical">
                            @foreach ($data['category'] as $cate)
                                <li id="menu-item-882"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-882">
                                    <a href="{{ route('CategoryProduct', $cate->id) }}">{{ $cate->name }}</a>
                                    <ul class="sub-menu">
                                        @foreach ($cate->products as $product)
                                            <li id="menu-item-101"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-101">
                                                <a href="{{ route('DetailProduct', $product->id) }}"><i
                                                        class="_mi _before fa fa-play"
                                                        aria-hidden="true"></i><span>{{ $product->name }}</span></a>

                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </ul>
            </div>

            <div class="flex-col hide-for-medium flex-center">
                <ul
                    class="nav header-nav header-bottom-nav nav-center  nav-divided nav-size-large nav-spacing-xlarge nav-uppercase">
                    <li id="menu-item-62"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-62 active menu-item-design-default">
                        <a href="{{ route('HomeIndex') }}" aria-current="page" class="nav-top-link">TRANG CHỦ</a>
                    </li>
                    <li id="menu-item-59"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-59 menu-item-design-default has-dropdown">
                        <a href="{{ route('Introduce') }}" class="nav-top-link" aria-expanded="false"
                            aria-haspopup="menu">GIỚI THIỆU<i class="icon-angle-down"></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                            <li id="menu-item-921"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-921">
                                <a href="{{ route('Cooperation_policy') }}">Chính sách bảo
                                    hành sản phẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li id="menu-item-3485"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3485 menu-item-design-default has-dropdown">
                        <a href="#" class="nav-top-link" aria-expanded="false" aria-haspopup="menu">SẢN PHẨM<i
                                class="icon-angle-down"></i></a>
                        <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                            @foreach ($data['category'] as $cate)
                                <li id="menu-item-2634"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-has-children menu-item-2634 nav-dropdown-col">
                                    <a href="{{ route('CategoryProduct', $cate->id) }}">{{ $cate->name }}</a>
                                    <ul class="sub-menu nav-column nav-dropdown-simple">
                                        @foreach ($cate->products as $product)
                                            <li id="menu-item-2635"
                                                class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2635">
                                                <a href="{{ route('DetailProduct', $product->id) }}"><i
                                                        class="_mi _before fa fa-arrow-circle-right"
                                                        aria-hidden="true"></i><span>
                                                        {{-- {{$product->name}} --}}
                                                        @if (strlen($product->name) > 20)
                                                            {{-- Thay 20 bằng giới hạn ký tự mà bạn muốn --}}
                                                            {{ substr($product->name, 0, 20) }}...
                                                            {{-- Lấy 20 ký tự đầu tiên --}}
                                                        @else
                                                            {{ $product->name }}
                                                        @endif
                                                    </span></a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach

                        </ul>
                    </li>
                    <li id="menu-item-63"
                        class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-63 menu-item-design-default">
                        <a href="{{ route('News') }}" class="nav-top-link">TIN TỨC</a>
                    </li>
                    <li id="menu-item-2696"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2696 menu-item-design-default">
                        <a href="{{ route('Contact') }}" class="nav-top-link">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>

            <div class="flex-col hide-for-medium flex-right flex-grow">
                <ul
                    class="nav header-nav header-bottom-nav nav-right  nav-divided nav-size-large nav-spacing-xlarge nav-uppercase">
                    <li class="html custom html_top_right_text">
                        <p><a href="{{ route('Cooperation_policy') }}"><span
                                    style="font-size: 110%; border: 2PX SOLID GREEN; padding: 10PX; background-color: white;"><strong><span
                                            style="color: #056401;">CHÍNH SÁCH HỢP
                                            TÁC</span></strong></span></a></p>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <div class="header-bg-container fill">
        <div class="header-bg-image fill"></div>
        <div class="header-bg-color fill"></div>
    </div>
</div>
