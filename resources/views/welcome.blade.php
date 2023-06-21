
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ShareStuff - Sharing is Caring kata Bapakmu</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo-4.png">

    <!-- All CSS is here
	============================================ -->

    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/signericafat.css">
    <link rel="stylesheet" href="assets/css/vendor/cerebrisans.css">
    <link rel="stylesheet" href="assets/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/elegant.css">
    <link rel="stylesheet" href="assets/css/vendor/linear-icon.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/easyzoom.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">
    <link rel="stylesheet" href="assets/css/plugins/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/style.css">

    
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function showPaymentSuccessPopup() {
            Swal.fire({
                title: "Payment Successful",
                text: "Payment was successfully made!",
                icon: "success",
                confirmButtonText: "OK"
            });
        }

        window.onload = function() {
            // Check if paymentSuccess session variable is set
            var paymentSuccess = '{{ session('paymentSuccess') }}';
            if (paymentSuccess) {
                showPaymentSuccessPopup();
            }
        };
    </script>
    <div class="main-wrapper bg-gray-9">
        <header class="header-area bg-orange">
            <div class="header-large-device">
                <div class="header-top header-top-ptb-7 border-bottom-9">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="/"><img src="assets/images/logo/logo-4.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="categori-search-wrap categori-search-wrap-modify-2">
                                    <div class="categori-style-1">
                                        <select class="nice-select nice-select-style-1">
                                            <option>All Categories </option>
                                            <option>Alat Musik</option>
                                            <option>Cosplay</option>
                                            <option>Alat Pertukangan</option>
                                            <option>Olahraga</option>
                                        </select>
                                    </div>
                                    <div class="search-wrap-3">
                                        <form action="#">
                                            <input placeholder="Search Products..." type="text">
                                            <button class="orange"><i class="lnr lnr-magnifier"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="babisearch">
                                    <a href="#">"Bass Yamaha TRBX 505 "</a>
                                    <a href="#">"Kostum Cosplay Suisei Hosimachi "</a>
                                </div>
                                
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="header-action header-action-flex">
                                    <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                        @if(!(Auth::check()))
                                            {{-- <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary">Login</a> --}}
                                            {{-- <a href="{{ route('register') }}" type="button" class="btn btn-outline-primary">Register</a> --}}
                                            <a href="{{ route('login') }}" type="button"><i class="icon-user"></i></a>
                                        @endif

                                        @if(Auth::check())
                                            <a href="/dashboard" type="button"><i class="icon-user"></i></a>
                                        @endif
                                        
                                    </div>
                                    <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc">
                                        <a href="wishlist.html"><i class="icon-heart"></i></a>
                                    </div>
                                    <div class="same-style-2 same-style-2-white same-style-2-hover-black same-style-2-font-inc header-cart">
                                        <a href="/cart">
                                            <i class="icon-basket-loaded"></i>
                                            <span class="cart-amount white">$2,435.30</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
        </header>
        <!-- Mobile menu start -->
        <div class="mobile-header-active mobile-header-wrapper-style">
            <div class="col-xl-2 col-lg-2">
                <div class="mobile-logo">
                    <a href="/"><img src="assets/images/logo/logo-4.png" alt="logo"></a>
                </div>
            </div>
            <div class="clickalbe-sidebar-wrap">
                <a class="sidebar-close"><i class="icon_close"></i></a>
                <div class="mobile-header-content-area">
                    <div class="mobile-search mobile-header-padding-border-1">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Search here…">
                            <button class="button-search"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="mobile-menu-wrap mobile-header-padding-border-2">
                        <!-- mobile menu start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="/">Home</a>
                                </li>
                                <li class="menu-item-has-children "><a href="shop.html">Categories</a>
                                    <ul class="dropdown">
                                        <li class="menu-item-has-children"><a href="#">shop layout</a>
                                            <ul class="dropdown">
                                                <option>All Categories </option>
                                            <option>Alat Musik</option>
                                            <option>Cosplay</option>
                                            <option>Alat Pertukangan</option>
                                            <option>Olahraga</option>
                                                <li><a href="shop-list.html">Alat Musik</a></li>
                                                <li><a href="shop-list.html">Cosplay</a></li>
                                                <li><a href="shop-list.html">Olahraga</a></li>
                                                <li><a href="shop-list.html">Alat Pertukangan</a></li>
                                                <li><a href="shop-list.html">Rumah Tangga</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#">Products Layout</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">tab style 1</a></li>
                                                <li><a href="product-details-2.html">tab style 2</a></li>
                                                <li><a href="product-details-sticky.html">sticky style</a></li>
                                                <li><a href="product-details-gallery.html">gallery style </a></li>
                                                <li><a href="product-details-affiliate.html">affiliate style</a></li>
                                                <li><a href="product-details-group.html">group style</a></li>
                                                <li><a href="product-details-fixed-img.html">fixed image style </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="about-us.html">about us </a></li>
                                        <li><a href="cart.html">cart page</a></li>
                                        <li><a href="checkout.html">checkout </a></li>
                                        <li><a href="my-account.html">my account</a></li>
                                        <li><a href="wishlist.html">wishlist </a></li>
                                        <li><a href="compare.html">compare </a></li>
                                        <li><a href="contact.html">contact us </a></li>
                                        <li><a href="order-tracking.html">order tracking</a></li>
                                        <li><a href="login-register.html">login / register </a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">blog standard </a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar </a></li>
                                        <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu end -->
                    </div>
                    <div class="mobile-social-icon">
                        <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                        <a class="pinterest" href="#"><i class="icon-social-pinterest"></i></a>
                        <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- mini cart start -->
        <div class="sidebar-cart" href="cart.html"></div>
        <div class="slider-area bg-gray-10">
            <div class="container">
                <div class="hero-slider-active-2 nav-style-1 nav-style-1-modify-2 nav-style-1-orange">
                    <div class="single-hero-slider single-hero-slider-hm10 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-12">
                                <div class="hero-slider-content-6 slider-content-hm9 slider-content-hm10">
                                    <h5 class="animated">Best Rental</h5>
                                    <h1 class="animated">new ipad pro <br>& phone x</h1>
                                    <p class="animated">Ayo Manjakan Gengsi Anda!!</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-orange btn-1-font-14" href="/product-IpadPro">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-12">
                                <div class="hm10-hero-slider-img">
                                    <img class="animated" src="assets/images/slider/slider-iphone.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-hero-slider single-hero-slider-hm10 single-animation-wrap">
                        <div class="row slider-animated-1">
                            <div class="col-lg-5 col-md-5 col-12 col-sm-12">
                                <div class="hero-slider-content-6 slider-content-hm9 slider-content-hm10">
                                    <h5 class="animated">Best Seller</h5>
                                    <h1 class="animated">RAMADHAN SHOES<br>SALE</h1>
                                    <p class="animated">Up to 70% syarat sesuka-suka saya</p>
                                    <div class="btn-style-1">
                                        <a class="animated btn-1-padding-4 btn-1-orange btn-1-font-14" href="/product-IpadPro">Explore Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-12 col-sm-12">
                                <div class="hm10-hero-slider-img">
                                    <img class="animated" src="assets/images/slider/slider-sepatu.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-categories-area pt-70 pb-70">
            <div class="container">
                <div class="section-title-btn-wrap mb-25">
                    <div class="section-title-8">
                        <h2>Popular Categories</h2>
                    </div>
                    <div class="btn-style-9">
                        <a href="shop.html">All Product</a>
                    </div>
                </div>
                <div class="section-wrap-1">
                    <div class="product-categories-slider-1 nav-style-3">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/product/alatmusik.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">ALAT MUSIK</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/product/smartphone.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">SMARTPHONE</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/product/hanger.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">FASHION</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/cosmetics.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">beauty</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/sports.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">sport</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/baby-boy.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">baby</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-border-transparent mb-15">
                                    <a href="shop.html">
                                        <img src="assets/images/computer.png" alt="">
                                    </a>
                                </div>
                                <div class="product-content-categories-2 product-content-orange text-center">
                                    <h5 class="font-width-dec"><a href="shop.html">computer</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-area pb-70">
            <div class="container">
                <div class="section-wrap-2">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img banner-img-zoom">
                                    <a href="product-details.html"><img src="assets/images/product/SURFACE/Surface-3.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-17">
                                    <h2>Microsoft Surface Pro 7 - 12.3”</h2>
                                    <p>Start</p>
                                    <div class="banner-price">
                                        <span>Rp 1,500,000 /DAY</span>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img banner-img-zoom">
                                    <a href="product-details.html"><img src="assets/images/product/CORTEARTH/CORT-2.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-13">
                                    <h2>CORT <br>EARTH 70</h2>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="banner-wrap mb-30">
                                <div class="banner-img banner-img-zoom">
                                    <a href="product-details.html"><img src="assets/images/banner/banner-20.jpg" alt=""></a>
                                </div>
                                <div class="banner-content-5">
                                    <span>Hello kids</span>
                                    <h2>Activities Boys <br>with HelloKid</h2>
                                    <p>Discover collection from Hello Kid brand</p>
                                    <div class="btn-style-4">
                                        <a href="product-details.html">explore <i class="icon-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-area pb-70">
            <div class="container">
                <div class="section-wrap-1">
                    <div class="section-title-deal-wrap mb-30">
                        <div class="section-title-8">
                            <h2>deals of the day</h2>
                        </div>
                        <div class="timer-wrap-2 timer-wrap-2-hm10">
                            <h4><i class="icon-speedometer"></i> Expires in:</h4>
                            <div class="timer-style-2" id="timer-2-active"></div>
                        </div>
                    </div>
                    <div class="product-slider-active-8 dot-style-2 dot-style-2-position-static dot-style-2-mrg-3 nav-style-5 nav-style-5-modify">
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets\images\product\IP 14[2].jpg" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-40%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">IPHONE 14 PRO</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">Rp 1,400,000</span>
                                        <span class="old-price">Rp 2,000,000</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width70 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">IPHONE 14 PRO</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(4)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">Rp 1,400,000</span>
                                        <span class="old-price">Rp 2,000,000</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width70 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <a href="/" title="Add to Cart">Add To Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets\images\product\ROG3.jpg" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-10%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">ROG ZEPHYRUS M16</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt "></i>
                                        </div>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$1799.99</span>
                                        <span class="old-price">$1999.99</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">babibear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 25/250 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star-half_alt"></i>
                                        </div>
                                        <span>(4.5)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$1799.99 </span>
                                        <span class="old-price">$1999.99</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">babibear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 25/250 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets\images\product\YOU COSMETIC.jfif" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-15%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">GOLDEN AGE REVITALIZING NIGHT CREAM</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$43.50 </span>
                                        <span class="old-price">$52.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width30 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">Pampers baby-dry diapers</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(6)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$23.50 </span>
                                        <span class="old-price">$12.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width30 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets\images\product\YOU BROW.png" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-10%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">THE SIMPLICITYBROW STYLER</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$13.50  </span>
                                        <span class="old-price">$9.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width90 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">White Plastic Chair</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(3)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$123.50 </span>
                                        <span class="old-price">$152.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width90 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets\images\product\BASS YAMAHA.jpg" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-35%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">GITAR BASS YAMAHA RBX 5A2</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width60 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">Ciate London Makeup</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star "></i>
                                        </div>
                                        <span>(1)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$86.75 </span>
                                        <span class="old-price">$94.52</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width60 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-plr-1">
                            <div class="single-product-wrap">
                                <div class="product-img product-img-zoom mb-20">
                                    <a href="product-details.html">
                                        <img src="assets/images/product/product-42.jpg" alt="">
                                    </a>
                                    <span class="pro-badge left bg-red">-20%</span>
                                    <div class="product-action-2">
                                        <button title="Wishlist"><i class="icon-heart"></i></button>
                                        <button title="Quick View" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen icons"></i></button>
                                        <button title="Compare"><i class="icon-refresh"></i></button>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content-wrap-3 product-content-position-2 pro-position-2-padding-dec">
                                    <h3 class="mrg-none"><a class="orange" href="product-details.html">Herchoe Backpack</a></h3>
                                    <div class="product-rating-wrap-2">
                                        <div class="product-rating-4">
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star gray"></i>
                                        </div>
                                        <span>(2)</span>
                                    </div>
                                    <div class="product-price-4">
                                        <span class="new-price">$26.50 </span>
                                        <span class="old-price">$45.85</span>
                                    </div>
                                    <div class="product-author">
                                        <span>Seller: <a  class="orange" href="#">olabear.com</a></span>
                                    </div>
                                    <div class="product-sold">
                                        <div class="single-product-sold">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-width50 wow fadeInLeft" data-progress="90%" data-wow-duration="1.5s" data-wow-delay="1.2s">
                                                </div>
                                            </div>
                                            <span>Sold: 245/320 </span>
                                        </div>
                                    </div>
                                    <div class="pro-add-to-cart-2">
                                        <button title="Add to Cart">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subscribe-area bg-white pt-95 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-5">
                        <div class="section-title-3">
                            <h2>Our Newsletter</h2>
                            <p>Get updates by subscribe our weekly newsletter</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-7">
                        <div id="mc_embed_signup" class="subscribe-form-2">
                            <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style-2" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                                <div id="mc_embed_signup_scroll" class="mc-form-2 mc-form-2-bg-gray">
                                    <input class="email" type="email" required="" placeholder="Enter your email address" name="EMAIL" value="">
                                    <div class="mc-news-2" aria-hidden="true">
                                        <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                    </div>
                                    <div class="clear-2 clear-2-orange">
                                        <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer-area bg-gray pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="contact-info-wrap">
                            <div class="mobile-logo">
                                <a href="/"><img src="assets/images/logo/logo-4.png" alt="logo"></a>
                            </div>
                            <div class="single-contact-info">
                                <span>Our Location</span>
                                <p>2, Jl. Raya Kb. Jeruk No.27, RT.1/RW.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530</p>
                            </div>
                            <div class="single-contact-info">
                                <span>Line aja soalnya ga hot:</span>
                                <p>(+62) 804 169 6969</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer-right-wrap">
                            
                            <div class="social-style-2 social-style-2-mrg">
                                <a href="twitter.com"><i class="social_twitter"></i></a>
                                <a href="facebook.com"><i class="social_facebook"></i></a>
                                <a href="http://binusmaya.binus.ac.id/"><i class="social_googleplus"></i></a>
                                <a href="instagram.com"><i class="social_instagram"></i></a>
                                <a href="youtube.com"><i class="social_youtube"></i></a>
                            </div>
                            <div class="copyright">
                                <p>Copyright © 2023 SoftwareEngineering | <a href="https://binusmaya.binus.ac.id/">Tugas <span>Binus</span> Susah Coy Coy </a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Payment Success Modal -->
        <div id="paymentSuccessModal" style="display: none;">
            <!-- Modal content -->
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('paymentSuccessModal').style.display = 'none';">&times;</span>
                <p>Payment was successfully made!</p>
            </div>
        </div>

        {{-- @if(session('paymentSuccess'))
            <script>
                window.onload = function() {
                    showPaymentSuccessPopup();
                };
            </script>
        @endif --}}
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5 col-md-6 col-12 col-sm-12">
                                <div class="tab-content quickview-big-img">
                                    <div id="pro-1" class="tab-pane fade show active">
                                        <img src="assets/images/product/Iphone14Pro/Iphone14-1.jpg" alt="">
                                    </div>
                                    <div id="pro-2" class="tab-pane fade">
                                        <img src="assets/images/product/Iphone14Pro/Iphone14-2.jpg" alt="">
                                    </div>
                                    <div id="pro-3" class="tab-pane fade">
                                        <img src="assets/images/product/Iphone14Pro/Iphone14-3.jpg" alt="">
                                    </div>
                                    <div id="pro-4" class="tab-pane fade">
                                        <img src="assets/images/product/Iphone14Pro/Iphone14-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="quickview-wrap mt-15">
                                    <div class="quickview-slide-active nav nav-style-6">
                                        <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="assets/images/product/Iphone14Pro/Iphone14-1.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-2"><img src="assets/images/product/Iphone14Pro/Iphone14-2.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-3"><img src="assets/images/product/Iphone14Pro/Iphone14-3.jpg" alt=""></a>
                                        <a data-bs-toggle="tab" href="#pro-4"><img src="assets/images/product/Iphone14Pro/Iphone14-4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-12 col-sm-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Simple Black T-Shirt</h2>
                                    <div class="product-ratting-review-wrap">
                                        <div class="product-ratting-digit-wrap">
                                            <div class="product-ratting">
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star"></i>
                                                <i class="icon_star gray"></i>
                                            </div>
                                            <div class="product-digit">
                                                <span>4.0</span>
                                            </div>
                                        </div>
                                        <div class="product-review-order">
                                            <span>62 Reviews</span>
                                            <span>245 orders</span>
                                        </div>
                                    </div>
                                    <p>Seamlessly predominate enterprise metrics without performance based process improvements.</p>
                                    <div class="pro-details-price">
                                        <span class="new-price">$198.50</span>
                                        <span class="old-price">$242.85</span>
                                    </div>
                                    <div class="pro-details-color-wrap">
                                        <span>Color:</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li><a class="dolly" href="#">dolly</a></li>
                                                <li><a class="white" href="#">white</a></li>
                                                <li><a class="azalea" href="#">azalea</a></li>
                                                <li><a class="peach-orange" href="#">Orange</a></li>
                                                <li><a class="mona-lisa active" href="#">lisa</a></li>
                                                <li><a class="cupid" href="#">cupid</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-size">
                                        <span>Size:</span>
                                        <div class="pro-details-size-content">
                                            <ul>
                                                <li><a href="#">128 GB</a></li>
                                                <li><a href="#">256 GB</a></li>
                                                <li><a href="#">512 GB</a></li>
                                                <li><a href="#">1 TB</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <span>Quantity:</span>
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1">
                                        </div>
                                    </div>
                                    <div class="pro-details-action-wrap">
                                        <div class="pro-details-add-to-cart">
                                            <a title="Add to Cart" href="cart.html">Add To Cart </a>
                                        </div>
                                        <div class="pro-details-action">
                                            <a title="Add to Wishlist" href="#"><i class="icon-heart"></i></a>
                                            <a title="Add to Compare" href="#"><i class="icon-refresh"></i></a>
                                            <a class="social" title="Social" href="#"><i class="icon-share"></i></a>
                                            <div class="product-dec-social">
                                                <a class="facebook" title="Facebook" href="#"><i class="icon-social-facebook"></i></a>
                                                <a class="twitter" title="Twitter" href="#"><i class="icon-social-twitter"></i></a>
                                                <a class="instagram" title="Instagram" href="#"><i class="icon-social-instagram"></i></a>
                                                <a class="pinterest" title="Pinterest" href="#"><i class="icon-social-pinterest"></i></a>
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
        <!-- Modal end -->
    </div>

    <!-- All JS is here
============================================ -->

    <script src="assets/js/vendor/modernizr-3.11.7.min.js"></script>
    <script src="assets/js/vendor/jquery-v3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-v3.3.2.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/slick.js"></script>
    <script src="assets/js/plugins/jquery.syotimer.min.js"></script>
    <script src="assets/js/plugins/jquery.instagramfeed.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/wow.js"></script>
    <script src="assets/js/plugins/jquery-ui-touch-punch.js"></script>
    <script src="assets/js/plugins/jquery-ui.js"></script>
    <script src="assets/js/plugins/magnific-popup.js"></script>
    <script src="assets/js/plugins/sticky-sidebar.js"></script>
    <script src="assets/js/plugins/easyzoom.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/ajax-mail.js"></script>
    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>