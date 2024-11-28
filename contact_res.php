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
<style>
    .error-message {
        font-size: 14px;
        font-weight: bold;
        color: red;
        margin-top: 5px;
    }
</style>

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
                    <li class="menu-item-has-children"><a href="activities.php">Activities</a>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul>
                            <li><a href="activites.php">Activities</a></li>
                            <li><a href="shop.php">Book Shop</a></li>
                            <li><a href="reservation.php">Book Reservation</a></li>
                            <li><a href="donation.php">Donation</a></li>
                            <li><a href="contact.php">Contact us</a></li>
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
                                        <li>
                                            Hello, 
                                            <a href="profile.php?username=<?php echo urlencode($_SESSION['username']); ?>" style="color: cyan; text-decoration: underline;">
                                                <?php echo htmlspecialchars($_SESSION['username']); ?>
                                            </a>!
                                        </li>
                                        <a href="/library/php/logout.php">Logout</a>
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
                            <div class="header-logo"><a href="index.php"><img
                                        src="assets/images/spl-stickylogo.png" alt="Tourm"></a></div>
                        </div>
                        <div class="col-auto me-xl-auto">
                            <nav class="main-menu d-none d-xl-inline-block">
                                <ul>
                                    <li><a href="activites.php">Activities</a></li>
                                    <li><a href="shop.php">Book Shop</a></li>
                                    <li><a href="reservation.php">Book Reservation</a></li>
                                    <li><a href="donation.php">Donation</a></li>
                                    <li><a href="contact.php">Contact us</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-xl-none"><i
                                    class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><a href="reservation.php" class="th-btn style3 th-icon">Book Now</a>
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
                <h1 class="breadcumb-title">Contact Us</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-travel.php">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="title-area text-center"><span class="sub-title">Get In Touch</span>
                <h2 class="sec-title">Our Contact Information</h2>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon"><img src="assets/img/icon/location-dot2.svg" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Our Address</h6>
                            <p class="about-contact-details-text">177 bizerte , tunise</p>
                            <p class="about-contact-details-text">Road to manzel abd rahmen</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="assets/img/icon/call.svg" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Phone Number</h6>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+216 56 645 774</a></p>
                            <p class="about-contact-details-text"><a href="tel:01234567890">+216 00 000 000</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid">
                        <div class="about-contact-icon"><img src="assets/img/icon/mail.svg" alt=""></div>
                        <div class="about-contact-details">
                            <h6 class="box-title">Email Address</h6>
                            <p class="about-contact-details-text"><a
                                    href="mailto:mailinfo00@tourm.com">suppor14@gmail.com</a></p>
                            <p class="about-contact-details-text"><a
                                    href="mailto:support24@tourm.com">support2@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-extra2-top space-extra2-bottom" data-bg-src="assets/img/hero/menu33.jpeg">
        <div class="container">
            <div class="row flex-row-reverse justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="video-box1"><a href="https://www.youtube.com/watch?v=ZNSA0NrDeb4"
                            class="play-btn style2 popup-video"><i class="fa-sharp fa-solid fa-play"></i></a></div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <form action="" method="POST" class="contact-form style2" id="identify-form">
                            <h3 class="sec-title mb-30 text-capitalize">contact us</h3>
                            <div class="error-message" style="color: red; display: none;"></div>
                            <div class="row">
                                <div class="col-12 form-group"><input type="text" class="form-control" name="first_name"
                                        id="name2" placeholder="First Name"> <img src="assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group"><input type="text" class="form-control" name="last_name"
                                        id="name3" placeholder="lastname"> <img src="assets/img/icon/user.svg" alt="">
                                </div>
                                <div class="col-12 form-group"><input type="email" class="form-control" name="email"
                                        id="email1" placeholder="Your Mail"> <img src="assets/img/icon/mail.svg" alt="">
                                </div>
                                <div class="col-12 form-group"><input type="email" class="form-control" name="email1"
                                        id="email2" placeholder="Confirm your mail"> <img src="assets/img/icon/mail.svg" alt="">
                                </div>
                                <div class="col-12 form-group"><input type="date" class="form-control" name="date1"
                                        id="d1" placeholder="toke date"> 
                                </div>
                                <div class="col-12 form-group"><input type="date" class="form-control" name="date2"
                                        id="d2" placeholder="return date">
                                </div>
                                <div class="form-group col-12"><select name="sex" id="subject"
                                        class="form-select nice-select">
                                        <option value="Select Tour Type" selected="selected" disabled="disabled">sexe
                                        </option>
                                        <option>male</option>
                                        <option>female</option>
                                    </select></div>
                                <div class="form-group col-12"><textarea name="message" id="message" cols="30" rows="3"
                                        class="form-control" placeholder="Your Message"></textarea> <img
                                        src="assets/img/icon/chat.svg" alt=""></div>
                                <div class="form-btn col-12 mt-24"><button type="submit" class="th-btn style3" id="submit-btn">Book Now<img src="assets/img/icon/plane.svg" alt=""></button></div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container-fluid">
            <div class="contact-map style2"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2sAngfuztheme!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
                <div class="contact-icon"><img src="assets/img/icon/location-dot3.svg" alt=""></div>
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
                                    <li><a href="index.php">Home</a></li>
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
                <div class="error-message" style="color: red; display: none;"></div>
                <h3 class="box-title mb-30">Sign in to your account</h3>
                <div class="th-login-form">
                    <form action="" method="POST" class="login-form">
                        <div class="row">
                            <div class="form-group col-12">
                                <label>Username or email</label>
                                <input type="text" class="form-control" name="email" id="email" required="required">
                            </div>
                            <div class="form-group col-12">
                                <label>Password</label>
                                <input type="password" class="form-control" name="pasword" id="pasword" required="required">
                            </div>
                            <div class="form-btn mb-20 col-12">
                                <button type="button" class="th-btn btn-fw th-radius2" onclick="handleLoginClick(event)">Login</button>
                            </div>
                        </div>
                        <div id="forgot_url"><a href="my-account.php">Forgot password?</a></div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade active show" id="pills-profile" role="tabpanel"
                aria-labelledby="pills-profile-tab">
                <div class="error-message" style="color: red; display: none;"></div>
                <h3 class="th-form-title mb-30">Sign up to your account</h3>
                <form action="" method="POST" class="login-form">
                    <div class="row">
                        <div class="form-group col-12"><label>Username*</label> <input type="text" class="form-control"
                                name="username" id="username" required="required"></div>
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
                        type="password" class="form-control" name="password" id="pass"
                        required="required"></div>

                        <div class="form-btn mt-20 col-12"><button class="th-btn btn-fw th-radius2" onclick=handleRegistrationSubmit(event)>Sign up</button>
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
    <script src="assets/js/forms.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('identify-form');
            const submitButton = document.getElementById('submit-btn');
            
            submitButton.addEventListener('click', function(event) {
                event.preventDefault();
                
                handleContactRes(event);
            });
        });

        function handleContactRes(event) {
            const urlParams = new URLSearchParams(window.location.search);
            const bookId = urlParams.get('book_id');
            console.log("book Id:", bookId);

            const firstName = document.getElementById('name2').value;
            const lastName = document.getElementById('name3').value;
            const email = document.getElementById('email1').value;
            const confirmEmail = document.getElementById('email2').value;
            const date1 = document.getElementById('d1').value;
            const date2 = document.getElementById('d2').value;
            const sexe = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            if (!firstName || !lastName || !email || !confirmEmail || !date1 || !date2 || !sexe) {
                showMessage('All fields except the message are required.', 'red');
                return;
            }

            if (email !== confirmEmail) {
                showMessage('Email and Confirm Email must match.', 'red');
                return;
            }

            if (!validateEmail(email)) {
                showMessage('Invalid email format.', 'red');
                return;
            }

            const dateObj1 = new Date(date1);
            const dateObj2 = new Date(date2);

            if (dateObj2 <= dateObj1) {
                showMessage('Date 2 must be later than Date 1.', 'red');
                return;
            }

            const formData = new FormData();
            formData.append('first_name', firstName);
            formData.append('last_name', lastName);
            formData.append('email', email);
            formData.append('email1', confirmEmail);
            formData.append('date1', date1);
            formData.append('date2', date2);
            formData.append('sex', sexe);
            formData.append('message', message);
            if (bookId) {
                formData.append('book_id', bookId);
            }

            fetch('/library/php/contact_res.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    const errorMessageBox = document.querySelector('.error-message');
                    if (data.status === 'error') {
                        showMessage(data.message, 'red');
                    } else if (data.status === 'success') {
                        showMessage(data.message, 'green');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('An unexpected error occurred. Please try again.', 'red');
                });
            }

            function showMessage(message, color) {
                const errorMessageBox = document.querySelector('.error-message');
                errorMessageBox.textContent = message;
                errorMessageBox.style.color = color;
                errorMessageBox.style.display = 'block';
            }

            function validateEmail(email) {
                const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                return emailPattern.test(email);
            }

    </script>
</body>

</html>