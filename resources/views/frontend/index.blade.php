<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Golo | Restaurant</title>
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />

    <!-- favicons -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.ico') }}">

    <style>
        :root {
            --primary-color: {{ $settings->site_primary_color }};
            --primary-accent: {{ $settings->site_accent_color }};
        }
    </style>

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/fonts/jost/stylesheet.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/line-awesome/css/line-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/fontawesome-pro/css/fontawesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/slick/slick-theme.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/quilljs/css/quill.bubble.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/quilljs/css/quill.core.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/quilljs/css/quill.snow.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/chosen/chosen.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/datetimepicker/jquery.datetimepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/libs/venobox/venobox.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/responsive.css') }}" />
</head>

<body>
    <div id="wrapper">
        <header id="header" class="site-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-5">
                        <div class="site">
                            <div class="site__menu">
                                <a title="Menu Icon" href="#" class="site__menu__icon">
                                    <i class="las la-bars la-24-black"></i>
                                </a>
                                <div class="popup-background"></div>
                                <div class="popup popup--left">
                                    <a title="Close" href="#" class="popup__close">
                                        <i class="las la-times la-24-black"></i>
                                    </a><!-- .popup__close -->
                                    <div class="popup__content">
                                        <div class="popup__user popup__box open-form">
                                            <a title="Login" href="#" class="open-login">Login</a>
                                            <a title="Sign Up" href="#" class="open-signup">Sign Up</a>
                                        </div><!-- .popup__user -->
                                        <div class="popup__destinations popup__box">
                                            <ul class="menu-arrow">
                                                <li>
                                                    <a title="Destinations" href="#">Destinations </a>
                                                    <ul class="sub-menu">
                                                        <li><a href="city-details-1.html" title="Tokyo">Tokyo</a></li>
                                                        <li><a href="city-details-1.html" title="New York">New York</a></li>
                                                        <li><a href="city-details-1.html" title="Barcelona">Barcelona</a></li>
                                                        <li><a href="city-details-1.html" title="Amsterdam">Amsterdam</a></li>
                                                        <li><a href="city-details-1.html" title="Los Angeles">Los Angeles</a></li>
                                                        <li><a href="city-details-1.html" title="London">London</a></li>
                                                        <li><a href="city-details-1.html" title="Bangkok">Bangkok</a></li>
                                                        <li><a href="city-details-1.html" title="Paris">Paris</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="popup__menu popup__box">
                                            <ul class="menu-arrow">
                                                <li>
                                                    <a href="#" title="Demos">Demos</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="home-restaurant.html" title="Restaurant Listing">Restaurant Listing</a></li>
                                                        <li><a href="home-business.html" title="Business Listing">Business Listing</a></li>
                                                        <li><a href="home-countryguide.html" title="Country Travel Guide">Country Travel Guide</a></li>
                                                        <li><a href="home-cityguide.html" title="City Travel Guide">City Travel Guide</a></li>
                                                        <li><a href="home-workspaces.html" title="Workspace Listing">Workspace Listing</a></li>
                                                        <li><a href="home-healthmedical.html" title="Health Medical">Health Medical</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="#" title="Listings">Listings</a>
                                                    <ul class="sub-menu">
                                                        <li>
                                                            <a href="#" title="Search Layout">Search Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="ex-half-map-1.html" title="Half Map – Left Filter">Half Map – Left Filter</a></li>
                                                                <li><a href="ex-half-map-2.html" title="Half Map – Top Filter">Half Map – Top Filter</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="City Layout">City Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="city-details-1.html" title="Half Map – Left Filter">Half Map – Left Filter</a></li>
                                                                <li><a href="city-details-2.html" title="Half Map – Top Filter">Half Map – Top Filter</a></li>
                                                                <li><a href="city-details-3.html" title="Without Map">Without Map</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Listing Detail">Single Layout</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="single-1.html" title="Carousel">Default - Carousel</a></li>
                                                                <li><a href="single-2.html" title="Image">Default - Image</a></li>
                                                                <li><a href="single-3.html" title="Restaurant">Restaurant Type</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="#" title="Booking Type">Booking Type</a>
                                                            <ul class="sub-menu">
                                                                <li><a href="bk-booking-form.html" title="Appointment Booking">Appointment Booking</a></li>
                                                                <li><a href="bk-enquiry-form.html" title="Enquiry Form">Enquiry Form</a></li>
                                                                <li><a href="bk-affiliate-link.html" title="Affiliate Link">Affiliate Link</a></li>
                                                                <li><a href="bk-banner-ads.html" title="Affiliate Banner">Affiliate Banner</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a title="Page" href="#">Page</a>
                                                    <ul class="sub-menu">
                                                        <li><a title="About" href="about-us.html">About Us</a></li>
                                                        <li><a title="FAQ's" href="faqs.html">FAQ's</a></li>
                                                        <li><a title="App Landing" href="app-landing.html">App Landing</a></li>
                                                        <li><a title="Contacts" href="contact-us.html">Contacts</a></li>
                                                        <li><a title="Add Listing" href="add-place.html">Add Listing</a></li>
                                                        <li><a title="Pricing" href="#">Pricing</a>
                                                            <ul class="sub-menu">
                                                                <li><a title="Pricing Plan" href="pricing-plan.html">Pricing Plan</a></li>
                                                                <li><a title="Pricing Plan Checkout" href="pricing-checkout.html">Pricing Checkout</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a title="Page" href="#">Shop</a>
                                                            <ul class="sub-menu">
                                                                <li><a title="Products" href="shop.html">Products</a></li>
                                                                <li><a title="Product Detail" href="shop-detail.html">Product Detail</a></li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a title="Page" href="#">Blog</a>
                                                            <ul class="sub-menu">
                                                                <li><a title="Fullwidth" href="blog-fullwidth.html">Fullwidth</a></li>
                                                                <li><a title="Right Sidebar" href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                                <li><a title="Blog Detail" href="blog-detail.html">Blog Detail</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a title="Owner Dashboard" href="owner-dashboard.html">Owner Dashboard</a></li>
                                                        <li><a title="Owner Single" href="owner-page.html">Owner Single</a></li>
                                                        <li><a title="Construction" href="construction.html">Construction</a></li>
                                                        <li><a title="Coming Soon" href="coming-soon.html">Coming Soon </a></li>
                                                        <li><a title="404" href="404.html">404 Page</a></li>
                                                    </ul>
                                                </li>

                                            </ul>
                                        </div><!-- .popup__menu -->
                                    </div><!-- .popup__content -->
                                    <div class="popup__button popup__box">
                                        <a title="Add place" href="add-place.html" class="btn">
                                            <i class="la la-plus"></i>
                                            <span>Add place</span>
                                        </a>
                                    </div><!-- .popup__button -->
                                </div><!-- .popup -->
                            </div><!-- .site__menu -->
                            <div class="site__brand">
                                <a title="Logo" href="home-restaurant.html" class="site__brand__logo"><img src="{{ asset('assets/frontend') }}/images/assets/logo.png" alt="Golo"></a>
                            </div><!-- .site__brand -->

                        </div><!-- .site -->
                    </div><!-- .col-md-6 -->
                    <div class="col-xl-6 col-7">
                        <div class="right-header align-right">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#" title="Demos">Demos</a>
                                        <ul class="sub-menu">
                                            <li><a href="home-restaurant.html" title="Restaurant Listing">Restaurant Listing</a></li>
                                            <li><a href="home-business.html" title="Business Listing">Business Listing</a></li>
                                            <li><a href="home-countryguide.html" title="Country Travel Guide">Country Travel Guide</a></li>
                                            <li><a href="home-cityguide.html" title="City Travel Guide">City Travel Guide</a></li>
                                            <li><a href="home-workspaces.html" title="Workspace Listing">Workspace Listing</a></li>
                                            <li><a href="home-healthmedical.html" title="Health Medical">Health Medical</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#" title="Listings">Listings</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="#" title="Search Layout">Search Layout</a>
                                                <ul class="sub-menu">
                                                    <li><a href="ex-half-map-1.html" title="Half Map – Left Filter">Half Map – Left Filter</a></li>
                                                    <li><a href="ex-half-map-2.html" title="Half Map – Top Filter">Half Map – Top Filter</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" title="City Layout">City Layout</a>
                                                <ul class="sub-menu">
                                                    <li><a href="city-details-1.html" title="Half Map – Left Filter">Half Map – Left Filter</a></li>
                                                    <li><a href="city-details-2.html" title="Half Map – Top Filter">Half Map – Top Filter</a></li>
                                                    <li><a href="city-details-3.html" title="Without Map">Without Map</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" title="Listing Detail">Single Layout</a>
                                                <ul class="sub-menu">
                                                    <li><a href="single-1.html" title="Carousel">Default - Carousel</a></li>
                                                    <li><a href="single-2.html" title="Image">Default - Image</a></li>
                                                    <li><a href="single-3.html" title="Restaurant">Restaurant Type</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" title="Booking Type">Booking Type</a>
                                                <ul class="sub-menu">
                                                    <li><a href="bk-booking-form.html" title="Appointment Booking">Appointment Booking</a></li>
                                                    <li><a href="bk-enquiry-form.html" title="Enquiry Form">Enquiry Form</a></li>
                                                    <li><a href="bk-affiliate-link.html" title="Affiliate Link">Affiliate Link</a></li>
                                                    <li><a href="bk-banner-ads.html" title="Affiliate Banner">Affiliate Banner</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a title="Page" href="#">Page</a>
                                        <ul class="sub-menu">
                                            <li><a title="About" href="about-us.html">About Us</a></li>
                                            <li><a title="FAQ's" href="faqs.html">FAQ's</a></li>
                                            <li><a title="App Landing" href="app-landing.html">App Landing</a></li>
                                            <li><a title="Contacts" href="contact-us.html">Contacts</a></li>
                                            <li><a title="Add Listing" href="add-place.html">Add Listing</a></li>
                                            <li><a title="Pricing" href="#">Pricing</a>
                                                <ul class="sub-menu">
                                                    <li><a title="Pricing Plan" href="pricing-plan.html">Pricing Plan</a></li>
                                                    <li><a title="Pricing Plan Checkout" href="pricing-checkout.html">Pricing Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="Page" href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a title="Products" href="shop.html">Products</a></li>
                                                    <li><a title="Product Detail" href="shop-detail.html">Product Detail</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a title="Page" href="#">Blog</a>
                                                <ul class="sub-menu">
                                                    <li><a title="Fullwidth" href="blog-fullwidth.html">Fullwidth</a></li>
                                                    <li><a title="Right Sidebar" href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a title="Blog Detail" href="blog-detail.html">Blog Detail</a></li>
                                                </ul>
                                            </li>
                                            <li><a title="Owner Dashboard" href="owner-dashboard.html">Owner Dashboard</a></li>
                                            <li><a title="Owner Single" href="owner-page.html">Owner Single</a></li>
                                            <li><a title="Construction" href="construction.html">Construction</a></li>
                                            <li><a title="Coming Soon" href="coming-soon.html">Coming Soon </a></li>
                                            <li><a title="404" href="404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <div class="right-header__login">
                                <a title="Login" class="open-login" href="#">Login</a>
                            </div><!-- .right-header__login -->
                            <div class="popup popup-form">
                                <a title="Close" href="#" class="popup__close">
                                    <i class="las la-times la-24-black"></i>
                                </a><!-- .popup__close -->
                                <ul class="choose-form">
                                    <li class="nav-signup"><a title="Sign Up" href="#signup">Sign Up</a></li>
                                    <li class="nav-login"><a title="Log In" href="#login">Log In</a></li>
                                </ul>
                                <p class="choose-more">Continue with <a title="Facebook" class="fb" href="#">Facebook</a> or <a title="Google" class="gg" href="#">Google</a></p>
                                <p class="choose-or"><span>Or</span></p>
                                <div class="popup-content">
                                    <form action="#" class="form-sign form-content" id="signup">
                                        <div class="field-inline">
                                            <div class="field-input">
                                                <input type="text" placeholder="First Name" value="" name="first_name">
                                            </div>
                                            <div class="field-input">
                                                <input type="text" placeholder="Last Name" value="" name="last_name">
                                            </div>
                                        </div>
                                        <div class="field-input">
                                            <input type="email" placeholder="Email" value="" name="email">
                                        </div>
                                        <div class="field-input">
                                            <input type="password" placeholder="Password" value="" name="password">
                                        </div>
                                        <div class="field-check">
                                            <label for="accept">
                                                <input type="checkbox" id="accept" value="">
                                                Accept the <a title="Terms" href="#">Terms</a> and <a title="Privacy Policy" href="#">Privacy Policy</a>
                                                <span class="checkmark">
                                                    <i class="la la-check"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <input type="submit" name="submit" value="Sign Up">
                                    </form>
                                    <form action="#" class="form-log form-content" id="login">
                                        <div class="field-input">
                                            <input type="text" placeholder="Username or Email" value="" name="user">
                                        </div>
                                        <div class="field-input">
                                            <input type="password" placeholder="Password" value="" name="password">
                                        </div>
                                        <a title="Forgot password" class="forgot_pass" href="#">Forgot password</a>
                                        <input type="submit" name="submit" value="Login">
                                    </form>
                                </div>
                            </div><!-- .popup-form -->
                            <div class="right-header__search">
                                <a title="Search" href="#" class="search-open">
                                    <i class="las la-search la-24-black"></i>
                                </a>
                                <div class="site__search">
                                    <a title="Close" href="#" class="search__close">
                                        <i class="la la-times"></i>
                                    </a><!-- .search__close -->
                                    <form action="#" class="site__search__form" method="GET">
                                        <div class="site__search__field">
                                            <span class="site__search__icon">
                                                <i class="las la-search la-24-black"></i>
                                            </span><!-- .site__search__icon -->
                                            <input class="site__search__input" type="text" name="s" placeholder="Search places, cities">
                                        </div><!-- .search__input -->
                                    </form><!-- .search__form -->
                                </div><!-- .site__search -->
                            </div>
                            <div class="right-header__button btn">
                                <a title="Add place" href="add-place.html">
                                    <i class="las la-plus la-24-white"></i>
                                    <span>Add Listing</span>
                                </a>
                            </div><!-- .right-header__button -->
                        </div><!-- .right-header -->
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </header><!-- .site-header -->

        <main id="main" class="site-main overflow">
            <section class="banner-wrap">
                <div class="flex">
                    <div class="banner-left"></div>
                    <div class="banner slick-sliders">
                        <div class="banner-sliders slick-slider" data-item="1" data-arrows="false" data-dots="true">
                            <div class="item"><img src="{{ asset('assets/frontend') }}/images/bg/bg-hero-1.jpg" alt="Banner"></div>
                            <div class="item"><img src="{{ asset('assets/frontend') }}/images/bg/bg-hero-2.jpg" alt="Banner"></div>
                            <div class="item"><img src="{{ asset('assets/frontend') }}/images/bg/bg-hero-3.jpg" alt="Banner"></div>
                        </div>
                    </div><!-- .banner -->
                </div>
                <div class="container">
                    <div class="banner-content">
                        <span class="offset-item">Drink, Food & Enjoy</span>
                        <h1 class="offset-item">Discover the best restaurant.</h1>
                        <form action="#" class="site-banner__search layout-02 offset-item">
                            <div class="field-input">
                                <label for="s">Find</label>
                                <input class="site-banner__search__input open-suggestion" id="s" type="text" name="s" placeholder="Ex: fastfood, beer" autocomplete="off">
                                <div class="search-suggestions name-suggestions">
                                    <ul>
                                        <li><a href="#"><i class="las la-utensils"></i><span>Restaurant</span></a></li>
                                        <li><a href="#"><i class="las la-spa"></i><span>Beauty</span></a></li>
                                        <li><a href="#"><i class="las la-dumbbell"></i><span>Fitness</span></a></li>
                                        <li><a href="#"><i class="las la-cocktail"></i><span>Nightlight</span></a></li>
                                        <li><a href="#"><i class="las la-shopping-bag"></i><span>Shopping</span></a></li>
                                        <li><a href="#"><i class="las la-film"></i><span>Cinema</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .site-banner__search__input -->
                            <div class="field-input">
                                <label for="loca">Where</label>
                                <input class="site-banner__search__input open-suggestion" id="loca" type="text" name="where" placeholder="Your city" autocomplete="off">
                                <div class="search-suggestions location-suggestions">
                                    <ul>
                                        <li><a href="#"><i class="las la-location-arrow"></i><span>Current location</span></a></li>
                                        <li><a href="#"><span>San Francisco, CA</span></a></li>
                                    </ul>
                                </div>
                            </div><!-- .site-banner__search__input -->
                            <div class="field-submit">
                                <button><i class="las la-search la-24-black"></i></button>
                            </div>
                        </form><!-- .site-banner__search -->
                    </div>
                </div>
            </section><!-- .banner-wrap -->
            <section class="restaurant-wrap">
                <div class="container">
                    <div class="title_home offset-item">
                        <h2>Popular Restaurants in Town</h2>
                    </div>
                    <div class="restaurant-sliders slick-sliders offset-item">
                        <div class="restaurant-slider slick-slider" data-item="4" data-itemScroll="4" data-arrows="true" data-dots="true" data-tabletItem="2" data-tabletScroll="2" data-mobileItem="1" data-mobileScroll="1">
                            <div class="place-item layout-02 place-hover" data-maps_name="mattone_restaurant">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="single-3.html"><img src="{{ asset('assets/frontend') }}/images/listing/01.jpg" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                            <span class="icon-heart">
                                                <i class="la la-bookmark large"></i>
                                            </span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
                                        <a href="#" class="author" title="Author"><img src="{{ asset('assets/frontend') }}/images/avatars/male-3.jpg" alt="Author"></a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Restaurant</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">Paris</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="single-3.html">Mattone Restaurant</a></h3>
                                        <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <div class="place-rating">
                                                    <span>5.0</span>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <span class="count-reviews">(2 Reviews)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-item layout-02 place-hover" data-maps_name="retro_fitness">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="single-3.html"><img src="{{ asset('assets/frontend') }}/images/listing/09.jpg" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                            <span class="icon-heart">
                                                <i class="la la-bookmark large"></i>
                                            </span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
                                        <a href="#" class="author" title="Author"><img src="{{ asset('assets/frontend') }}/images/avatars/male-2.jpg" alt="Author"></a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Pizza</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">Bordeaux</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="single-3.html">Retro Pizz</a></h3>
                                        <div class="open-now"><i class="las la-door-open"></i>Open now</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <div class="place-rating">
                                                    <span>5.0</span>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <span class="count-reviews">(2 Reviews)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-item layout-02 place-hover" data-maps_name="body_spa">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="single-3.html"><img src="{{ asset('assets/frontend') }}/images/listing/gallery-06.jpg" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                            <span class="icon-heart">
                                                <i class="la la-bookmark large"></i>
                                            </span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
                                        <a href="#" class="author" title="Author"><img src="{{ asset('assets/frontend') }}/images/avatars/female-3.jpg" alt="Author"></a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Fastfood</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">Lyon</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="single-1.html">Antino Bin</a></h3>
                                        <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <div class="place-rating">
                                                    <span>5.0</span>
                                                    <i class="la la-star"></i>
                                                </div>
                                                <span class="count-reviews">(2 Reviews)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-item layout-02 place-hover" data-maps_name="antoinette">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="single-1.html"><img src="{{ asset('assets/frontend') }}/images/listing/05.jpg" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                            <span class="icon-heart">
                                                <i class="la la-bookmark large"></i>
                                            </span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
                                        <a href="#" class="author" title="Author"><img src="{{ asset('assets/frontend') }}/images/avatars/male-4.jpg" alt="Author"></a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Coffee</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">Nantes</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="single-1.html">Unisho Ramen</a></h3>
                                        <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <span class="no-reviews">(no reviews)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>$$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="place-item layout-02 place-hover" data-maps_name="kathay_cinema">
                                <div class="place-inner">
                                    <div class="place-thumb hover-img">
                                        <a class="entry-thumb" href="single-1.html"><img src="{{ asset('assets/frontend') }}/images/listing/gallery-03.jpg" alt=""></a>
                                        <a href="#" class="golo-add-to-wishlist btn-add-to-wishlist " data-place-id="185">
                                            <span class="icon-heart">
                                                <i class="la la-bookmark large"></i>
                                            </span>
                                        </a>
                                        <a class="entry-category rosy-pink" href="#">
                                            <i class="las la-utensils"></i><span>Restaurant</span>
                                        </a>
                                        <a href="#" class="author" title="Author"><img src="{{ asset('assets/frontend') }}/images/avatars/female-3.jpg" alt="Author"></a>
                                    </div>
                                    <div class="entry-detail">
                                        <div class="entry-head">
                                            <div class="place-type list-item">
                                                <span>Restaurant</span>
                                            </div>
                                            <div class="place-city">
                                                <a href="#">Paris</a>
                                            </div>
                                        </div>
                                        <h3 class="place-title"><a href="single-1.html">Kathay Restaurant</a></h3>
                                        <div class="close-now"><i class="las la-door-closed"></i>Close now</div>
                                        <div class="entry-bottom">
                                            <div class="place-preview">
                                                <span class="no-reviews">(no reviews)</span>
                                            </div>
                                            <div class="place-price">
                                                <span>$$</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .restaurant-slider -->
                        <div class="place-slider__nav slick-nav">
                            <div class="place-slider__prev slick-nav__prev">
                                <i class="las la-angle-left"></i>
                            </div><!-- .place-slider__prev -->
                            <div class="place-slider__next slick-nav__next">
                                <i class="las la-angle-right"></i>
                            </div><!-- .place-slider__next -->
                        </div><!-- .place-slider__nav -->
                    </div><!-- .restaurant-sliders -->
                </div>
            </section><!-- .restaurant-wrap -->
            <section class="cuisine-wrap section-bg">
                <div class="container">
                    <div class="title_home offset-item">
                        <h2>Search By Cuisine</h2>
                        <p>Explore restaurants and cafes by your favorite cuisine</p>
                    </div>
                    <div class="cuisine-sliders slick-sliders offset-item">
                        <div class="cuisine-slider slick-slider" data-item="6" data-itemScroll="6" data-arrows="true" data-dots="true" data-smallpcItem="4" data-smallpcScroll="4" data-tabletItem="3" data-tabletScroll="3" data-mobileItem="2" data-mobileScroll="2">
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Pizza">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/pizza.jpg" alt="Pizza"></span>
                                    <span class="title">Pizza<span class="number">(34)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Fastfood">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/fastfood.png" alt="Fastfood"></span>
                                    <span class="title">Fastfood<span class="number">(57)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Vegatarian">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/vegetables.jpg" alt="Vegatarian"></span>
                                    <span class="title">Vegatarian<span class="number">(85)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Mexican">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/mexican.jpg" alt="Mexican"></span>
                                    <span class="title">Mexican<span class="number">(22)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Italian">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/italian.jpg" alt="Italian"></span>
                                    <span class="title">Italian<span class="number">(48)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Japan">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/japan.jpg" alt="Japan"></span>
                                    <span class="title">Japan<span class="number">(12)</span></span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="ex-half-map-1.html" title="Vietnamese">
                                    <span class="hover-img"><img src="{{ asset('assets/frontend') }}/images/menu/vietnamese.jpg" alt="Pizza"></span>
                                    <span class="title">Vietnamese<span class="number">(34)</span></span>
                                </a>
                            </div>
                        </div><!-- .cuisine-slider -->
                        <div class="place-slider__nav slick-nav">
                            <div class="place-slider__prev slick-nav__prev">
                                <i class="las la-angle-left"></i>
                            </div><!-- .place-slider__prev -->
                            <div class="place-slider__next slick-nav__next">
                                <i class="las la-angle-right"></i>
                            </div><!-- .place-slider__next -->
                        </div><!-- .place-slider__nav -->
                    </div><!-- .cuisine-sliders -->
                </div><!-- .container -->
            </section><!-- .cuisine-wrap -->
            <section class="featured-home featured-wrap">
                <div class="container">
                    <div class="title_home offset-item">
                        <h2>Featured Cities</h2>
                        <p>Explore restaurants & cafes by locality</p>
                    </div>
                    <div class="featured-inner offset-item">
                        <div class="item">
                            <div class="flex">
                                <div class="flex-col">
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="{{ asset('assets/frontend') }}/images/city/chicago-small.jpg" alt="Chicago"></span>
                                                <span class="entry-details">
                                                    <h3>Chicago</h3>
                                                    <span>80 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="{{ asset('assets/frontend') }}/images/city/losangeles-small.jpg" alt="Los Angeles"></span>
                                                <span class="entry-details">
                                                    <h3>Los Angeles</h3>
                                                    <span>70 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="{{ asset('assets/frontend') }}/images/city/newyork-small.jpg" alt="New York"></span>
                                                <span class="entry-details">
                                                    <h3>New York</h3>
                                                    <span>85 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-col">
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="{{ asset('assets/frontend') }}/images/city/sandiego-small.jpg" alt="San Diego"></span>
                                                <span class="entry-details">
                                                    <h3>San Diego</h3>
                                                    <span>60 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="cities">
                                        <div class="cities-inner">
                                            <a href="city-details-1.html" class="hover-img">
                                                <span class="entry-thumb"><img src="{{ asset('assets/frontend') }}/images/city/san-fransico-small.jpg" alt="San Fransico"></span>
                                                <span class="entry-details">
                                                    <h3>San Fransico</h3>
                                                    <span>65 places</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .featured-inner -->
                </div><!-- .container -->
            </section><!-- .featured-wrap -->
            <section class="join-wrap" style="background-image: url({{ asset('assets/frontend/images/bg/bg-join-us.jpg') }});">
                <div class="container">
                    <div class="join-inner">
                        <h2 class="offset-item">Restaurateurs Join Us</h2>
                        <p class="offset-item">Join the more than 10,000 restaurants which fill seats and manage reservations with Golo.</p>
                        <a href="#" class="btn offset-item" title="Learn More">Learn More</a>
                    </div>
                </div>
            </section><!-- .join-wrap -->
            <section class="home-testimonials testimonials">
                <div class="container">
                    <div class="title_home offset-item">
                        <h2>People Talking About Us</h2>
                    </div>
                    <div class="testimonial-sliders slick-sliders offset-item">
                        <div class="testimonial-slider slick-slider" data-item="2" data-itemScroll="2" data-arrows="true" data-dots="true" data-tabletItem="1" data-tabletScroll="1" data-mobileItem="1" data-mobileScroll="1">
                            <div class="item">
                                <div class="testimonial-item flex">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/frontend') }}/images/avatars/female-1.jpg" alt="Kari Granleese" class="avatar">
                                        <img src="{{ asset('assets/frontend') }}/images/assets/quote-active.png" alt="quote" class="quote">
                                    </div>
                                    <div class="testimonial-info">
                                        <p>Really useful app to find interesting things to see do, drink and eat in new places. I’ve been using it regularly in my travels over the past few months.</p>
                                        <div class="cite">
                                            <h4>Kari Granleese</h4>
                                            <span>CEO Alididi</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item flex">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/frontend') }}/images/avatars/female-2.jpg" alt="Kari Granleese" class="avatar">
                                        <img src="{{ asset('assets/frontend') }}/images/assets/quote-active.png" alt="quote" class="quote">
                                    </div>
                                    <div class="testimonial-info">
                                        <p> Amazing work. I wonder how to change the main menu to the Home 2 which I found much more interesting!</p>
                                        <div class="cite">
                                            <h4>Cristina</h4>
                                            <span>Foot Blogger</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item flex">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('assets/frontend') }}/images/avatars/female-3.jpg" alt="Kari Granleese" class="avatar">
                                        <img src="{{ asset('assets/frontend') }}/images/assets/quote-active.png" alt="quote" class="quote">
                                    </div>
                                    <div class="testimonial-info">
                                        <p> There are very few themes in Themeforest that work 99% smoothly, and one of them is "Golo" Simply The Best !!!</p>
                                        <div class="cite">
                                            <h4>John Doe</h4>
                                            <span>Traverler</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .testimonial-slider -->
                        <div class="place-slider__nav slick-nav">
                            <div class="place-slider__prev slick-nav__prev">
                                <i class="las la-angle-left"></i>
                            </div><!-- .place-slider__prev -->
                            <div class="place-slider__next slick-nav__next">
                                <i class="las la-angle-right"></i>
                            </div><!-- .place-slider__next -->
                        </div><!-- .place-slider__nav -->
                    </div><!-- .testimonial-sliders -->
                </div>
            </section><!-- .testimonials -->
            <section class="blogs-wrap section-bg">
                <div class="container">
                    <div class="title_home offset-item">
                        <h2>From Our Blog</h2>
                    </div>
                    <div class="blog-wrap offset-item">
                        <div class="row">
                            <div class="col-md-4">
                                <article class="post hover__box">
                                    <div class="post__thumb hover-img">
                                        <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="{{ asset('assets/frontend') }}/images/blog/blog-01.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                                    </div>
                                    <div class="post__info">
                                        <ul class="post__category">
                                            <li><a title="Paris" href="02_city-details_1.html">Paris</a></li>
                                            <li><a title="Food" href="02_city-details_1.html">Food</a></li>
                                        </ul>
                                        <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">The 8 Most Affordable Michelin Restaurants in Paris</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="post hover__box">
                                    <div class="post__thumb hover-img">
                                        <a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html"><img src="{{ asset('assets/frontend') }}/images/blog/blog-02.jpg" alt="The 7 Best Restaurants to Try Kobe Beef in London"></a>
                                    </div>
                                    <div class="post__info">
                                        <ul class="post__category">
                                            <li><a title="London" href="02_city-details_1.html">London</a></li>
                                            <li><a title="Art & Decor" href="02_city-details_1.html">Art & Decor</a></li>
                                        </ul>
                                        <h3 class="post__title"><a title="The 7 Best Restaurants to Try Kobe Beef in London" href="blog-detail.html">The 7 Best Restaurants to Try Kobe Beef in London</a></h3>
                                    </div>
                                </article>
                            </div>
                            <div class="col-md-4">
                                <article class="post hover__box">
                                    <div class="post__thumb hover-img">
                                        <a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html"><img src="{{ asset('assets/frontend') }}/images/blog/blog-03.jpg" alt="The 8 Most Affordable Michelin Restaurants in Paris"></a>
                                    </div>
                                    <div class="post__info">
                                        <ul class="post__category">
                                            <li><a title="Paris" href="02_city-details_1.html">Paris</a></li>
                                            <li><a title="Stay" href="02_city-details_1.html">Stay</a></li>
                                        </ul>
                                        <h3 class="post__title"><a title="The 8 Most Affordable Michelin Restaurants in Paris" href="blog-detail.html">The 9 Best Cheap Hotels in New York City</a></h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <div class="button-wrap">
                            <a href="#" class="btn" title="View more">View more</a>
                        </div>
                    </div>
                </div>
            </section><!-- .blogs-wrap -->
        </main><!-- .site-main -->

        <footer id="footer" class="footer">
            <div class="container">
                <div class="footer__top">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="footer__top__info">
                                <a title="Logo" href="01_index_1.html" class="footer__top__info__logo"><img src="{{ asset('assets/frontend') }}/images/assets/logo.png" alt="Golo"></a>
                                <p class="footer__top__info__desc">Discover amazing things to do everywhere you go.</p>
                                <div class="footer__top__info__app">
                                    <a title="App Store" href="#" class="banner-apps__download__iphone"><img src="{{ asset('assets/frontend') }}/images/assets/app-store.png" alt="App Store"></a>
                                    <a title="Google Play" href="#" class="banner-apps__download__android"><img src="{{ asset('assets/frontend') }}/images/assets/google-play.png" alt="Google Play"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <aside class="footer__top__nav">
                                <h3>Company</h3>
                                <ul>
                                    <li><a title="About Us" href="06_about-us.html">About Us</a></li>
                                    <li><a title="Blog" href="07_blog-right-sidebar.html">Blog</a></li>
                                    <li><a title="Faqs" href="15_faqs.html">Faqs</a></li>
                                    <li><a title="Contact" href="09_contact-us.html">Contact</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-2">
                            <aside class="footer__top__nav">
                                <h3>Support</h3>
                                <ul>
                                    <li><a title="Get in Touch" href="#">Get in Touch</a></li>
                                    <li><a title="Help Center" href="#">Help Center</a></li>
                                    <li><a title="Live chat" href="#">Live chat</a></li>
                                    <li><a title="How it works" href="#">How it works</a></li>
                                </ul>
                            </aside>
                        </div>
                        <div class="col-lg-3">
                            <aside class="footer__top__nav footer__top__nav--contact">
                                <h3>Contact Us</h3>
                                <p>Email: <a href="https://golohtml.uxper.co/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="53202623233c212713373c3e323a3d7d303c3e">[email&#160;protected]</a></p>
                                <p>Phone: 1 (00) 832 2342</p>
                                <ul>
                                    <li class="facebook">
                                        <a title="Facebook" href="#">
                                            <i class="la la-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li class="twitter">
                                        <a title="Twitter" href="#">
                                            <i class="la la-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="youtube">
                                        <a title="Youtube" href="#">
                                            <i class="la la-youtube"></i>
                                        </a>
                                    </li>
                                    <li class="instagram">
                                        <a title="Instagram" href="#">
                                            <i class="la la-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div><!-- .top-footer -->
                <div class="footer__bottom">
                    <p class="footer__bottom__copyright">2020 &copy; <a title="Uxper Team" href="#">uxper.co</a>. All rights reserved.</p>
                </div><!-- .top-footer -->
            </div><!-- .container -->
        </footer><!-- site-footer -->
    </div><!-- #wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('assets/frontend/js/jquery-1.12.4.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/slick/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/isotope/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/quilljs/js/quill.core.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/quilljs/js/quill.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/datetimepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/libs/waypoints/jquery.waypoints.min.js') }}"></script>
    <!-- orther script -->
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
</body>

</html>
