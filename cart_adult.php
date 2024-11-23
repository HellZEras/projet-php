<?php
    require_once('php/config.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="author" content="Tourm">
    <meta name="description" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="keywords" content="Tourm - Travel & Tour Booking Agency HTML Template ">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&amp;family=Manrope:wght@200..800&amp;family=Montez&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="magic-cursor relative z-10">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="th-menu-wrapper onepage-nav">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>

            <div class="th-mobile-menu">
                <ul>
                    <img src="assets/images/spl-stickylogo.png" alt="">
                    <li class="menu-item-has-children mega-menu-wrap"><a class="active" href="index_adult.php">Home</a>
                        <ul class="sub-menu">
                            <li><a href="index_kids.php.php">kids page</a></li>
                            <li><a href="index_adult.php.php">adult page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="activitiess.php">Activities</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="#">Shop adult</a>
                                <ul class="sub-menu">
                                    <li><a href="shop_book_adult.php">Shop</a></li>
                                    <li><a href="shop-details_adult.php">Shop Details</a></li>
                                    <li><a href="cart_adult.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist_adult.php">Wishlist</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">Shop kids</a>
                                <ul class="sub-menu">
                                    <li><a href="shop_book_kids.php">Shop</a></li>
                                    <li><a href="shop-details_kids.php">Shop Details</a></li>
                                    <li><a href="cart_kids.php.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist_kids.php">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="reservation_kids.php">book reservation kids</a></li>
                            <li><a href="reservation_adult.php">book reservation adult</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="donation.php">donation</a>
                    </li>
                    <li><a href="contact.php">Contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container th-container">
                <div class="row justify-content-center justify-content-xl-between align-items-center">
                    <div class="col-auto d-none d-md-block">
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="header-links">
                                <ul>
                                    <?php if (isset($_SESSION['username'])): ?>
                                        <li>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</li>
                                    <?php else: ?>
                                        <li class="d-none d-md-inline-block"><a href="faq.php">FAQ</a></li>
                                        <li class="d-none d-md-inline-block"><a href="contact.php">Support</a></li>
                                        <li><a href="#login-form" class="popup-content">Sign In / Register<i class="fa-regular fa-user"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container th-container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="index_adult.php"><img
                                        src="assets/images/spl-stickylogo.png" alt="Tourm"></a></div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li class="menu-item-has-children mega-menu-wrap"><a class="active"
                                            href="index_kids.php">Home</a>
                                        <ul class="mega-menu mega-menu-content">
                                            <li>
                                                <div class="container">
                                                    <div class="row gy-4">
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img"><img
                                                                        src="assets/img/hero/aaaa.png" alt="Home One">
                                                                    <div class="btn-wrap"><a target="_blank"
                                                                            href="index_adult.php" class="th-btn">View
                                                                            page</a></div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a
                                                                        href="index_adult.php"><span>01.</span>adult
                                                                        book</a>
                                                                </h3>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="mega-menu-box">
                                                                <div class="mega-menu-img"><img
                                                                        src="assets/images/pic2.png" alt="Home Two">
                                                                    <div class="btn-wrap"><a target="_blank"
                                                                            href="index_kids.php" class="th-btn">View
                                                                            page</a></div>
                                                                </div>
                                                                <h3 class="mega-menu-title"><a
                                                                        href="index_kids.php"><span>02.</span>kids
                                                                        book</a></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="activites.php">Activities</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Shop adult</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop_book_adult.php">Shop</a></li>
                                                    <li><a href="shop-details_adult.php">Shop Details</a></li>
                                                    <li><a href="cart_adult.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="wishlist_adult.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children"><a href="#">Shop kids</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop_book_kids.php">Shop</a></li>
                                                    <li><a href="shop-details_kids.php">Shop Details</a></li>
                                                    <li><a href="cart_kids.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="wishlist_kids.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="reservation_kids.php">book reservation kids</a></li>
                                            <li><a href="reservation_adult.php">book reservation adult</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="donation.php">donation</a>
                                    </li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="contact.php" class="th-btn style3 th-icon">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/hero/menu2.jpeg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">backet</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.php">Home</a></li>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-detailis.php"><img
                                        width="91" height="91" src="assets/images/Jacket (45).jpeg" alt="Image"></a>
                            </td>
                            <td data-title="Name"><a class="cart-productname" href="shop-detailis.php">war</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>18</span>dt</bdi></span></td>
                            <td data-title="Quantity">
                                <div class="quantity"><button class="quantity-minus qty-btn"><i
                                            class="far fa-minus"></i></button> <input type="number" class="qty-input"
                                        value="1" min="1" max="99"> <button class="quantity-plus qty-btn"><i
                                            class="far fa-plus"></i></button></div>
                            </td>
                            <td data-title="Total"><span class="amount"><bdi><span>18</span>dt</bdi></span></td>
                            <td data-title="Remove"><a href="#" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="actions">
                                <div class="th-cart-coupon"><input type="text" class="form-control"
                                        placeholder="Coupon Code..."> <button type="submit" class="th-btn">Apply
                                        Coupon</button></div><button type="submit" class="th-btn">Update cart</button>
                                <a href="index_adult.php" class="th-btn">Continue Shopping</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div class="row justify-content-end">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <h2 class="h4 summary-title">Cart Totals</h2>
                    <table class="cart_totals">
                        <tbody>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td data-title="Cart Subtotal"><span class="amount"><bdi><span>dt</span>18</bdi></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Shipping and Handling</th>
                                <td data-title="Shipping and Handling">
                                    <ul class="woocommerce-shipping-methods list-unstyled">
                                        <li><input type="radio" id="free_shipping" name="shipping_method"
                                                class="shipping_method"> <label for="free_shipping">Free
                                                shipping</label></li>
                                        <li><input type="radio" id="flat_rate" name="shipping_method"
                                                class="shipping_method" checked="checked"> <label for="flat_rate">Flat
                                                rate</label></li>
                                    </ul>
                                    <p class="woocommerce-shipping-destination">Shipping options will be updated during
                                        checkout.</p>
                                    <form action="#" method="post"><a href="#" class="shipping-calculator-button">Change
                                            address</a>
                                        <div class="shipping-calculator-form">
                                            <p class="form-row"><select class="form-select">
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="BD" selected="selected">Bangladesh</option>
                                                </select></p>
                                            <p><select class="form-select">
                                                    <option value="">Select an option…</option>
                                                    <option value="BD-05">Bagerhat</option>
                                                    <option value="BD-01">Bandarban</option>
                                                    <option value="BD-02">Barguna</option>
                                                    <option value="BD-06">Barishal</option>
                                                </select></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Town / City"></p>
                                            <p class="form-row"><input type="text" class="form-control"
                                                    placeholder="Postcode / ZIP"></p>
                                            <p><button class="th-btn">Update</button></p>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr class="order-total">
                                <td>Order Total</td>
                                <td data-title="Total"><strong><span
                                            class="amount"><bdi><span>dt</span>18</bdi></span></strong></td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="wc-proceed-to-checkout mb-30"><a href="checkout.php" class="th-btn">Proceed to
                            checkout</a></div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper bg-title footer-layout2">
        <div class="widget-area">
            <div class="container">
                <div class="newsletter-area">
                    <div class="newsletter-top">
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-5">
                                <h2 class="newsletter-title text-white text-capitalize mb-0">don't forget to subscribe
                                </h2>
                            </div>
                            <div class="col-lg-7">
                                <form class="newsletter-form style2"><input class="form-control" type="email"
                                        placeholder="Enter Email" required=""> <button type="submit"
                                        class="th-btn style1">Subscribe Now <img src="assets/img/icon/plane2.svg"
                                            alt=""></button></form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-between">

                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="index_adult.php">Home</a></li>
                                    <li><a href="contact.php">Terms of Service</a></li>
                                    <li><a href="contact.php">Tour Booking Now</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Get In Touch</h3>
                            <div class="th-widget-contact">
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/phone.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="tel:+01234567890" class="info-box_link">+216 56 645 774</a></p>
                                        <p><a href="tel:+09876543210" class="info-box_link">+216 00 000 000</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/envelope.svg" alt="img"></div>
                                    <div class="details">
                                        <p><a href="mailto:mailinfo00@tourm.com"
                                                class="info-box_link">support1@gmail.com</a></p>
                                        <p><a href="mailto:support24@tourm.com"
                                                class="info-box_link">support2@gmail.com</a></p>
                                    </div>
                                </div>
                                <div class="info-box_text">
                                    <div class="icon"><img src="assets/img/icon/location-dot.svg" alt="img"></div>
                                    <div class="details">
                                        <p>789 bizerte , tunise</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright 2024 <a href="home-travel.php">Tourm</a>. All Rights
                            Reserved.</p>
                    </div>
                    <div class="col-md-6 text-end d-none d-md-block">
                        <div class="footer-card"><span class="title">We Accept</span> <img
                                src="assets/img/shape/cards.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup movingX d-none d-xxl-block" data-top="24%" data-left="5%"><img
                src="assets/img/shape/shape_8.png" alt="shape"></div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg></div>
        <div id="login-form" class="popup-login-register mfp-hide">
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation"><button class="nav-menu" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="false">Login</button></li>
            <li class="nav-item" role="presentation"><button class="nav-menu active" id="pills-profile-tab"
                    data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab"
                    aria-controls="pills-profile" aria-selected="true">Register</button></li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                        class="login-form ajax-contact">
                        <div class="row">
                            <div class="form-group col-12"><label>Username or email</label> <input type="text"
                                    class="form-control" name="email" id="email" required="required"></div>
                            <div class="form-group col-12"><label>Password</label> <input type="password"
                                    class="form-control" name="pasword" id="pasword" required="required"></div>
                            <div class="form-btn mb-20 col-12"><button class="th-btn btn-fw th-radius2">Send
                                    Message</button></div>
                        </div>
                        <div id="forgot_url"><a href="my-account.php">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <h3 class="th-form-title mb-30">Sign in to your account</h3>
                <form action="https://html.themeholy.com/tourm/demo/mail.php" method="POST"
                    class="login-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="usename" id="usename" required="required"></div>
                        <div class="form-group col-12"><label>First name*</label> <input type="text"
                                class="form-control" name="firstname" id="firstname" required="required"></div>
                        <div class="form-group col-12"><label>Last name*</label> <input type="text" class="form-control"
                                name="lastname" id="lastname" required="required"></div>
                        <div class="form-group col-12"><label for="new_email">Your email*</label> <input type="text"
                                class="form-control" name="new_email" id="new_email" required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Confirm email*</label> <input
                                type="text" class="form-control" name="new_email_confirm" id="new_email_confirm"
                                required="required"></div>
                        <div class="form-group col-12"><label for="new_email_confirm">Password*</label> <input
                        type="text" class="form-control" name="passwordf" id="pass"
                        required="required"></div>

                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2">Sign up</button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/gsap.min.js"></script>
    <script src="assets/js/circle-progress.js"></script>
    <script src="assets/js/matter.min.js"></script>
    <script src="assets/js/matterjs-custom.js"></script>
    <script src="assets/js/nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>