<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost"; // Assuming the database is on the same server
$username = "ructszmy_WPS45"; // Your MySQL username
$password = "_KMS5UB_=BFK"; // Replace with your actual MySQL password
$dbname = "ructszmy_Construction_engr"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
    <meta name="description" content="" />
    <meta name="keywords" content="BIM projects" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4285f4">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
    <link rel="canonical" href="https://thebimengineers.com/projects">
    <link rel="icon" href="https://thebimengineers.com/favicon.gif" sizes="35x35" type="image/gif">
    <title> Our projects | The BIM Engineers | Join the future today</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://thebimengineers.com/css/all.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/fontello.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/animate.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://thebimengineers.com/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/nouislider.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/slick.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://thebimengineers.com/css/style.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/responsive.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/color.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>


    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-M6229ZB');
    </script>

    <!-- End Google Tag Manager -->
    <script src="https://www.google.com/recaptcha/api.js?hl=&render="></script>


</head>

<style>
    #mega-menu {
        display: none;
    }

    nav div:not(.nav-right) ul li.menu-item-has-children>a:hover {
        color: #0dbae7 !important;
    }

    .contact-btn {
        padding: 10px 20px;
        background: #0ab9e8;
        color: #fff !important;
        font-weight: bold;
    }

    nav div:not(.nav-right) ul li.menu-item-has-children>a.contact-btn:hover {
        color: #fff !important;
        background: #0dbae7;
    }

    .trademark {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 50px;
        z-index: -1;
        opacity: 0.5;
        overflow: hidden;
    }

    .trademark img {
        height: 100%;
        max-height: 110px;
    }

    .mega-menu {
        list-style: none;
        opacity: 1 !important;
        visibility: visible !important;
        top: 0 !important;
        left: -100px !important;
        box-shadow: none !important;
        padding-top: 0px !important;
    }

    #mega-menu {
        transform: translateX(0);
    }

    .mega-menu li a {
        padding: 5px 0px !important;
    }

    .absolute-content {
        position: absolute;
        bottom: 20px;
        left: 0;
        padding: 15px 20px;
        width: 80%;
        background: #0ab9e8;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .absolute-content:hover {
        position: absolute;
        bottom: 20px;
        left: 0;
        padding: 15px 20px;
        width: 80%;
        background: #0ab9e8;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .pagnum {
        position: absolute;
        font-size: 2rem;
        right: 4rem;
        bottom: 7rem;
        color: #fff;
    }

    .page-top-wrap img {
        height: 100vh;
    }

    .carousel-indicators {
        justify-content: flex-end;
        margin-right: 50px;
    }

    .carousel-indicators img {
        filter: grayscale(100%);
        cursor: pointer;
    }

    .carousel-indicators .active {
        filter: grayscale(0%);
    }

    .subscribe-area {
        background: #0ab9e8;
    }

    .subscribe-text span {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        letter-spacing: 5px;
    }

    .subscribe-text h2 {
        color: #fff;
        font-size: 36px;
        font-weight: 300;
        margin-bottom: 0;
        margin-top: 6px;
        text-align: left !important;
    }

    .subscribe-wrapper {
        overflow: hidden;
    }

    .subscribe-form form {
        display: flex;
    }

    .editable-content {
        background: none;
        outline: none;
        border: 1px solid #fff;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 15px;
        font-weight: 300;
        height: 57px;
        padding-top: 18px;
        margin-right: 17px;
        padding-left: 35px;
        width: 97%;
        cursor: pointer;
    }

    .subscribe2-wrapper .subscribe-form input {
        background: none;
        border: 1px solid #fff;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 15px;
        font-weight: 300;
        height: 57px;
        margin-right: 17px;
        padding-left: 35px;
        width: 97%;
        cursor: pointer;
    }

    .subscribe-form input::placeholder {
        color: #fff;
    }

    .subscribe2-wrapper .subscribe-form button {
        width: 30%;
        background: #ffff;
        border: none;
        border-radius: 30px;
        color: #4b5d73;
        display: inline-block;
        font-size: 18px;
        font-weight: 400;
        line-height: 1;
        padding: 18px 46px;
        transition: all 0.3s ease 0s;
    }

    .subscribe2-wrapper .subscribe-form button i {
        font-size: 18px;
        padding-left: 5px;
    }

    .input-container {
        position: relative;
        width: 70%;
    }

    .formsteps {
        position: absolute;
        top: 31%;
        left: 84%;
        color: #fff;
    }

    .placeholder-text {
        position: absolute;
        top: 31%;
        left: 38px;
        color: #fff;
    }

    /*Footer Form css*/

    .footer-form input {
        border: 1px solid #fff;
        border-radius: 30px;
        color: #000 !important;
        display: inline-block;
        font-size: 13px;
        font-weight: 300;
        height: 40px;
        margin-right: 0px;
        padding-left: 15px;
        cursor: pointer;
        width: 165px;
    }

    .footer-form button {
        width: 100%;
        background: #1e1e20;
        border: none;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 18px;
        font-weight: 400;
        line-height: 1;
        padding: 11px 30px;
        transition: all 0.3s ease 0s;
    }

    .footer-form {
        border: 1px solid rgba(0, 0, 0, .15);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 3px 5px rgba(0, 0, 0, .075);
    }

    .footer-form-input {
        margin-right: 5px;
        margin-left: 5px;
    }

    @media screen and (max-width: 767px) {
        .footer-form-input {
            margin-bottom: 10px;
            width: 100% !impo;
        }

        .footer-form {
            margin-top: 15px;
        }

        .footer-form input {
            width: 100%;
        }

        /* For career form*/
        ul#gform_fields_5 {
            padding-right: 20px;
            padding-left: 20px;
        }
    }
</style>

<body>



    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-M6229ZB

            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->


    <header class="stick style1 w-100">
        <div class="container">
            <div class="logo-menu-wrap d-flex flex-wrap justify-content-between align-items-center w-100">
                <div class="logo">
                    <!--<h1 >-->
                    <a href="/" title=" The BIM Engineers" class="mb-0">
                        <img class="img-fluid " src="https://thebimengineers.com/images/logo.png" srcset="https://thebimengineers.com/images/logo.png" alt="Logo" style="width: 58%">
                    </a>
                    <!--</h1 >-->
                </div>
                <!-- Logo -->
                <nav class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="nav-left">
                        <ul class="mb-0 list-unstyled d-inline-flex flex-wrap w-100">

                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Our Services"><span>Our Services</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">

                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/services/bim-vdc" title="BIM / VDC" style="font-weight:normal"><span style="font-weight:normal">BIM / VDC </span></a></li>
                                    <li style="font-weight:normal"><a href="/services/staffing" title="Staffing / Secondment" style="font-weight:normal"><span style="font-weight:normal">Staffing / Secondment</span></a></li>
                                    <li style="font-weight:normal"><a href="/services/cad-drafting" title="CAD Drafting" style="font-weight:normal"><span style="font-weight:normal">CAD Drafting </span></a></li>
                                    <li style="font-weight:normal"><a href="/services/quantity-surveying" title="Quantity Surveying" style="font-weight:normal"><span style="font-weight:normal">Quantity Surveying</span></a></li>


                                </ul>
                            </li>


                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="About us"><span>About Us</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">

                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/about-tbe" title="About TBE" style="font-weight:normal"><span style="font-weight:normal">About TBE</span></a></li>
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/why-tbe" title="Why TBE" style="font-weight:normal"><span style="font-weight:normal">Why TBE</span></a></li>

                                    <li style="font-weight:normal"><a href="/csr" title="CSR" style="font-weight:normal"><span style="font-weight:normal">CSR</span></a></li>
                                    <!--<li style="font-weight:normal"><a href="javascript:void(0);" title="Partners" style="font-weight:normal"><span style="font-weight:normal">Partners</span></a></li>-->

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="https://thebimengineers.com/projects" title="Projects"><span>Projects</span></a>
                                <!--<ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">-->
                                <!--	<li style="font-weight:normal"><a href="https://thebimengineers.com/projects" title="Projects" style="font-weight:normal"><span style="font-weight:normal">Projects</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="/case-studies" title="Case Studies" style="font-weight:normal"><span style="font-weight:normal">Case Studies</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="https://thebimengineers.com/testimonials" title="Testimonial" style="font-weight:normal"><span style="font-weight:normal">Testimonials</span></a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Resources"><span>Resources</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/videos" title="Video" style="font-weight:normal"><span style="font-weight:normal">Videos</span></a></li>
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/brochures" title="Brochures" style="font-weight:normal"><span style="font-weight:normal">Brochures</span></a></li>
                                    <!--<li style="font-weight:normal"><a href="https://thebimengineers.com/publications" title="Publications" style="font-weight:normal"><span style="font-weight:normal">Publications</span></a></li>-->
                                    <!--<li style="font-weight:normal"><a href="javascript:void(0);" title="BIM Fees  Calculator" style="font-weight:normal"><span style="font-weight:normal">BIM Fees  Calculator</span></a></li>-->
                                </ul>
                            </li>





















                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="News & Insights"><span>News & Insights</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">
                                    <li style="font-weight:normal"><a href="/blogs/all/tech-updates" title="Blog" style="font-weight:normal"><span style="font-weight:normal">Technical Updates</span></a></li>
                                    <li style="font-weight:normal"><a href="/blogs/all/news" title="TBE News" style="font-weight:normal"><span style="font-weight:normal">TBE News</span></a></li>
                                    <li style="font-weight:normal"><a href="/awards" title="Awards & Recognitions" style="font-weight:normal"><span style="font-weight:normal">Awards & Recognitions</span></a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="/career" title="Career"><span>Career</span></a>
                                <!--<ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Vacancies" style="font-weight:normal"><span style="font-weight:normal">Vacancies</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Training" style="font-weight:normal"><span style="font-weight:normal">Training</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Internship" style="font-weight:normal"><span style="font-weight:normal">Internship</span></a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="menu-item-has-children"><a href="https://thebimengineers.com/contact-us" title="Contact Us" class="contact-btn"><span>Contact Us</span></a>

                            </li>

                        </ul>
                    </div>
                    <div class="nav-right d-inline-flex flex-wrap">
                        <ul class="d-flex flex-wrap mb-0 list-unstyled">

                            <li class="res-menu-btn-wrap"><a class="res-menu-btn" href="javascript:void(0);" title="Menu"><i class="fas fa-align-justify"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Logo Menu Wrap -->
        </div>

        <div class="trademark d-none d-lg-block">
            <img src="https://thebimengineers.com/images/trademark.png" alt="">
        </div>
    </header>
    <!-- Header -->

    <div class="responsive-menu position-fixed w-100">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Our Services"><span>Our Services</span></a>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="https://thebimengineers.com/services/bim-vdc" title="BIM / VDC"><span>BIM / VDC </span></a>



                    </li>
                    <li><a href="/services/staffing" title="Staffing / Secondment"><span>Staffing / Secondment</span></a>

                    </li>
                    <li><a href="/services/cad-drafting" title="CAD Drafting"><span>CAD Drafting </span></a>

                    </li>
                    <li><a href="/services/quantity-surveying" title="Quantity Surveying"><span>Quantity Surveying</span></a>

                    </li>


                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="About us"><span>About us</span></a>
                <ul class="mb-0 list-unstyled w-100">

                    <li><a href="https://thebimengineers.com/about-tbe" title="About TBE"><span>About TBE</span></a></li>
                    <li><a href="https://thebimengineers.com/why-tbe" title="Why TBE"><span>Why TBE</span></a></li>
                    <!--<li><a href="#" title="Our Team"><span>Our Team</span></a></li>-->
                    <li><a href="/csr" title="Corporate Social Responsibility"><span>Corporate Social Responsibility</span></a></li>
                    <!--<li><a href="#" title="Partners"><span>Partners</span></a></li>-->

                </ul>
            </li>

            <li><a href="https://thebimengineers.com/projects" title="Projects"><span>Projects</span></a>
                <!--<ul class="mb-0 list-unstyled w-100">-->
                <!--	<li><a href="https://thebimengineers.com/projects" title=""><span>Projects</span></a></li>-->
                <!--	<li><a href="/case-studies" title=""><span>Case Studies</span></a></li>-->
                <!--	<li><a href="#" title=""><span>Testimonials</span></a></li>-->
                <!--</ul>-->
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Resources"><span>Resources</span></a>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="/videos" title="Videos"><span>Videos</span></a></li>
                    <li><a href="https://thebimengineers.com/brochures" title="Brochures"><span>Brochures</span></a></li>
                    <!--<li><a href="/publications" title="Publications"><span>Publications</span></a></li>-->
                    <!--<li><a href="#" title="BIM Fees  Calculator"><span>BIM Fees  Calculator</span></a></li>-->
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" title="News & Insights"><span>News & Insights</span></a>
                <ul class="mb-0 list-unstyled w-100">

                    <li><a href="/blogs/all/tech-updates" title="Technical Updates"><span>Technical Updates</span></a></li>
                    <li><a href="/blogs/all/news" title="TBE News"><span>TBE News</span></a></li>
                    <li><a href="/awards" title="Awards & Recognitions"><span>Awards & Recognitions</span></a></li>

                </ul>
            </li>

            <li><a href="/career" title=""><span>Career</span></a>
                <!--<ul class="mb-0 list-unstyled w-100">-->

                <!--	<li><a href="#" title="Vacancies"><span>Vacancies</span></a></li>-->
                <!--	<li><a href="#" title="Training"><span>Training</span></a></li>-->
                <!--	<li><a href="#" title="Internship"><span>Internship</span></a></li>-->

                <!--</ul>-->
            </li>

            <li><a href="https://thebimengineers.com/contact-us" title="Contact"><span>Contact</span></a>

            </li>



        </ul>
        <div class="scl-links v2 d-flex flex-wrap w-100">
            <a href="https://www.facebook.com/thebimengineers" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/thebimengineers/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/10448248/admin/" title="Twitter" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCox2mBbBIbZIdaXgAzTjeiw/featured" title="Twitter" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

    </div>
    <!-- Responsive Menu -->

    <div>
        <section style="margin-top:110px; background:#fff; border-top: 1px solid #0ab9e8;  border-bottom: 1px solid #0ab9e8; padding: 20px 0;">
            <div class="container">
                <ol class="breadcrumb mb-0 list-unstyled">
                    <li class="breadcrumb-item"><a href="/" title="Home"><i class="icon-home"></i>Home</a></li>
                    <li class="breadcrumb-item active">Our Projects</li>
                </ol>
            </div>

        </section>
        <section>
            <div class="w-100 pt-80 pb-130 position-relative">
                <svg class="sec-tp-rgt-shp overlap-tpshap250 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000" />
                        <path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000" />
                        <path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000" />
                        <path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000" />
                        <path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000" />
                        <path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000" />
                    </g>
                </svg>
                <svg class="sec-btm-lft-shp overlap-btmshap130 opc-6 stroke-clr position-absolute" width="358" height="721" viewBox="0 0 358 721" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M356.475 355.943L239.925 93.594L64.2729 93.594L180.823 355.943L356.475 355.943Z" stroke="#000000" />
                        <path d="M-248.231 652.782L-131.68 390.433L43.9714 390.433L-72.579 652.782L-248.231 652.782Z" stroke="#000000" />
                        <path d="M199.647 262.849L83.0971 0.49999L-92.5547 0.499974L23.9957 262.849L199.647 262.849Z" stroke="#000000" />
                        <path d="M-92.5555 559.688L23.9949 297.339L199.647 297.339L83.0963 559.688L-92.5555 559.688Z" stroke="#000000" />
                        <path d="M123.64 423.661L7.08952 161.312L-168.562 161.312L-52.0119 423.661L123.64 423.661Z" stroke="#000000" />
                        <path d="M-15.3953 720.5L101.155 458.151L276.807 458.151L160.256 720.5L-15.3953 720.5Z" stroke="#000000" />
                    </g>
                </svg>
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <div class="sec-title-inner d-inline-block">
                            <span class="d-block thm-clr">Portfolio</span>
                            <h1 class="mb-0" style="font-size: 2.5rem;
    line-height: 3.625rem;">Our Projects</h1>
                        </div>
                    </div>
                    <!-- Sec Title -->
                    <div class="port-wrap position-relative w-100">
                        <div class="cont-inner position-relative text-center d-inline-block" style="max-width:100%; width:100%; padding:0px; margin-bottom:30px;">


                            <form class="w-100" method="post" id="filterForm" action="https://thebimengineers.com/project/filter">
                                <input type="hidden" name="_token" value="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
                                <div class="response w-100"></div>

                                <div class="row">

                                    <div class="col-sm-12 col-lg-3">
                                        <span class="field-box d-block w-100 position-relative">
                                            <select class="email" name="sector">
                                                <!-- Default option for sectors -->
                                                <option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-count="0" data-sf-depth="0" value="">All Sectors</option>

                                                <?php
                                                // Query to select distinct sector types
                                                $sql = "SELECT DISTINCT sector_type FROM projects"; // Using DISTINCT to avoid duplicate sectors
                                                $result = $conn->query($sql);

                                                // Check if there are results
                                                if ($result->num_rows > 0) {
                                                    // Output data for each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        // Echo the sector types as option elements
                                                        echo '<option class="sf-level-0" data-sf-count="1" data-sf-depth="0" value="' . htmlspecialchars($row["sector_type"]) . '">' . htmlspecialchars($row["sector_type"]) . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">No sectors available</option>';
                                                }
                                                ?>
                                            </select>
                                        </span>
                                    </div>

                                    <div class="col-sm-12 col-lg-3">
                                        <span class="field-box d-block w-100 position-relative">
                                            <select class="phone" name="location">
                                                <!-- Default option for locations -->
                                                <option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-depth="0" value="">All Locations</option>

                                                <?php
                                                // Query to select distinct location types
                                                $sql = "SELECT DISTINCT location_type FROM projects"; // Using DISTINCT to avoid duplicate locations
                                                $result = $conn->query($sql);

                                                // Check if there are results
                                                if ($result->num_rows > 0) {
                                                    // Output data for each row
                                                    while ($row = $result->fetch_assoc()) {
                                                        // Echo the location types as option elements
                                                        echo '<option class="sf-level-0" data-sf-count="1" data-sf-depth="0" value="' . htmlspecialchars($row["location_type"]) . '">' . htmlspecialchars($row["location_type"]) . '</option>';
                                                    }
                                                } else {
                                                    echo '<option value="">No locations available</option>';
                                                }

                                                // Close the connection
                                                $conn->close();
                                                ?>
                                            </select>
                                        </span>
                                    </div>
                                    <div class="col-sm-12 col-lg-3">
                                        <span class="field-box d-block w-100 position-relative"><input class="phone" type="text" name="keyword" placeholder="Search projects or services" style="height: inherit;"></span>
                                    </div>
                                    <div class="col-sm-12 col-lg-3">
                                        <input type="submit" class="contact-btn" value="Filter" name="filter">
                                    </div>
                                </div>




                            </form>
                        </div>

                        <div class="port-inner position-relative w-100">
                            <div class="row masonry">


                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/Qe7r9cWDKkFBOI1h5a7D-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/chennai-international-airport" class="">CHENNAI INTERNATIONAL AIRPORT</a>
                                        </div>
                                    </div>
                                </div>












                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/EE9XleHEPfYnXXFCiQko-small.webp" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/tesla-gigafactory-berlin" class="">Tesla Gigafactory Berlin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/nTD6wRG953huHMBohikI-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/arthur-ashe-stadium" class="">ARTHUR ASHE STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/wr1GB9H6COLO0zF31SUp-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/progressive-field-stadium" class="">PROGRESSIVE FIELD STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/8K6gjJ5Gr9evM6mJfzq3-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/tennessee-titans-stadium" class="">TENNESSEE TITANS STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/dwpsvwp42qSBgYU4SOIB-small.gif" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/intel-cardinal" class="">INTEL - CARDINAL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/kzwQwEQRhOU0oq5snoZs-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/interstate-405-widening" class="">Interstate 405 Widening</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/qRKh1MnHHOHLDgmFq4sd-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/german-autobahn-a3-ausbau" class="">German Autobahn A3 Ausbau</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/R3AmLy1mmmN3l78HjfsS-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/m1-motorway-smart-motorways-scheme" class="">M1 Motorway Smart Motorways Scheme</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/Jd54MZX1kM83DBTnC9oD-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/san-francisco-bay-bridge-replacement" class="">San Francisco Bay Bridge Replacement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/y0cwDpMoM9dUJiguOrAq-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/denver-international-airport-new-runway" class="">Denver International Airport New Runway</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/b5uN0ioikjkD0GUkpn2R-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/los-angeles-international-airport-expansion" class="">Los Angeles International Airport Expansion</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/tr5zkDuQslp9LcE4nFyF-small.jpeg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/new-jersey-turnpike-widening-highway" class="">New Jersey Turnpike Widening Highway</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/BpyFMhlyhLidL6I850Ta-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave-ny" class="">600 BUSHWICK AVE, NY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/Ov8LbC98gaUKJD6U1iA6-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/127-lazell-st-hingham" class="">127 Lazell St. Hingham</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/rlUp7jgjWwC2OMTW0Kys-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/21-parker-dr-avon" class="">21 PARKER DR AVON</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/NHcosIAstsOou9jgFy8M-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/525-east-68th-street" class="">525 East 68th Street</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/kHdrUv8JFcG2jdtW2mNl-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/29-lambert-st-cambridge" class="">29 Lambert St Cambridge</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/n1Ean4MmjOeI2qDDGr7V-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/275-park-avenue" class="">275 Park Avenue</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/8vRHM6CXWqXexxf4NdN8-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/645-massachusetts-ave" class="">645 Massachusetts Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lk34RJayBmNOzy9JJQi9-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave" class="">600 Bushwick Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/i64FGHYVl0goJOoupnO5-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave" class="">600 Bushwick Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/fWBON4VmfVqaFOxceUsz-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/loon-brook-rd" class="">LOON BROOK RD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/6Ipvho573m0wOLKPziPX-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/127-lazell-st-hingham" class="">127 lazell St Hingham</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lgb7UmscWkKihkJrgvtF-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/66-boston-st-somerville" class="">66 Boston St Somerville</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/dFMA8YPTzE2tBDChDyJO-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/12-industrial-way" class="">12 INDUSTRIAL WAY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/uPAnD9FQBf52bafKyTnN-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/82-arnold-ave-residential" class="">82 ARNOLD AVE (RESIDENTIAL)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/2pETrXhN42poXMrVaoEN-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/paris-creperie-278" class="">PARIS CREPERIE-278</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/jutdGkd1tGvjTdFthhVR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/34-scanlon-drive" class="">34 SCANLON DRIVE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/Da2Oe64LMAquqGKt8JLb-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/acts-granite-farms" class="">ACTS GRANITE FARMS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/fANKZliWzF5w9AK7dkbJ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/stenton-trust-building" class="">STENTON TRUST BUILDING</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/wPSkCyXU8y7PyIN0HMdf-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/oxford-coutrs-condominium" class="">OXFORD COUTRS CONDOMINIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/XBuFJ8OJ3nt4kUYJEuPJ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/one-marina-park-boston" class="">One Marina Park Boston</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/RyTZhF7ysYpvfFLhiCpW-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/greater-highway-deliverance-temple" class="">GREATER HIGHWAY DELIVERANCE TEMPLE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lmozeIIlflgk5jfDKquC-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/athens-varsity" class="">ATHENS VARSITY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/HyM3wb6eEOO3CPEI28u7-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/clinical-services-building" class="">CLINICAL SERVICES BUILDING</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/ykothLeOLaRZf6j5w7PR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/glenveagh-houses" class="">GLENVEAGH HOUSES</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/MER87RFNuYRZCHh94oaG-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/dockery-garage" class="">DOCKERY GARAGE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/m0Aexvh6G7RppCzIr4TZ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/morrow-hotel" class="">MORROW HOTEL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/T8CDE52NZoLfODKlWIux-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/belmond-cap-juluca-five-star-resort" class="">BELMOND CAP JULUCA (FIVE STAR RESORT)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2023/0TyqY4umkbSByHQkJey3-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/greater-highway-deliverance-temple" class="">Greater Highway Deliverance Temple</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/51uqS2k9OAfsJ5kxo6Kj-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/pon-cat-emergency-power-generation" class="">Pon-Cat Emergency power generation</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/VJlakjM7jRL49agfPjlc-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/117-apartments-overhoeks-amsterdam" class="">117 Apartments “Overhoeks” Amsterdam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/752y8bqvcsX0qOYTl5xn-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/V-Architecten" class="">V-Architecten</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/XYey25v2un9Z4xaefHDa-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/mbs-casco" class="">MBS CASCO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/kegOP0sKrhHL8n0yW3pG-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/dyka-prefab-assemblies" class="">Dyka Prefab Assemblies</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/f5A77TJtMDCkGBkdWQoo-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/82-apartments-houthavens-amsterdam" class="">82 Apartments “Houthavens” Amsterdam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/q4oKrTynm8522qeUCeeT-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/6-residences-bauduinstraat-maastricht" class="">6 residences Bauduinstraat Maastricht</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/8gZJrOV9OI6l1ufzm430-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/10-residences-in-de-groene-loper" class="">10 Residences in De Groene Loper</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/bK7wI6AdDETpi7ZLAu6w-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/puurthuys-8-homes-cimbalenstraat" class="">PuurThuys 8 Homes Cimbalenstraat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/gJeVsgOORW1tXcEUFHki-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/30-residences-in-slotjes-phase-5a-and-6ab" class="">30 Residences in Slotjes phase 5a and 6ab</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/q8wfOqsCh38T8UUIOkLm-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/21-residences-in-slotjes" class="">21 Residences in Slotjes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/BOMk5WDXpVAMTvcVBya8-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/6-residences-bauduinstraat-maastricht" class="">6 Residences Bauduinstraat Maastricht</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/iAClTi0uvyAMwJPtrrqd-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/shepherdess-walk" class="">SHEPHERDESS WALK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/G09mXIKTfQ6UJ0slWeka-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/rivm" class="">RIVM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/IzaKEt2zhSLuLGilvGWR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/regents-crescent" class="">REGENTS CRESCENT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/byM9t83wLRp7matPz53j-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/the-museum" class="">THE MUSEUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/hIuFYs2fJQTwAc90j2qo-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/wood-wharf-building-g3" class="">WOOD WHARF BUILDING G3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/dzbxtpeG061aq1pLCp7O-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/de-cornelis" class="">DE CORNELIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/FtgLPW3xKVnQWMinFWJP-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/18-appartementen" class="">18 APPARTEMENTEN</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/TZQboPRGyfw2z6MWn78T-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/schiphol-international-airport" class="">SCHIPHOL INTERNATIONAL AIRPORT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/mKodbJm8ckdAhDeuyWdd-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/eurostar-check-in-facility-station" class="">EUROSTAR: CHECK-IN FACILITY STATION</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/ZqlWqkGR0AQUghn3aPwk-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/the-lyric-theatre" class="">THE LYRIC THEATRE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/7AnOUPmgEhYN0xDUDML3-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/mass-rapid-transit-station" class="">MASS RAPID TRANSIT STATION</a>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Wrap -->

                    <!-- View All -->
                </div>
            </div>
        </section>



    </div>
    <!--<section class="subscribe-area pb-50 pt-50">
    <div class="container">
        <div class="row">
    
            <div class="col-md-4 m-auto">
                <div class="subscribe-text">
                    <span>Contact Us</span>
                    <h2>Have a Project?</h2>
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div class="subscribe-wrapper subscribe2-wrapper">
                    <div class="subscribe-form">
                        <form action="#" id="stepform">
                           
                            <input type="hidden" class="g-recaptcha" data-sitekey="6LdaC3kiAAAAADEm8HFpJa7v2FMN4L0LVdM84QT7" data-callback="verifyCaptcha">
                            <div class="input-container">
                                
                                <input type="hidden" value="mepihkqEwO" id="uid">
                                <input type="text" name="name" class="step" id="input-name" maxlength="200" placeholder="Enter your name" required>
                                <div class="formsteps" style="display:none;">
                                    <span class="formstep">1</span>/4
                                </div>
                                
                            </div>
                            

                            <button class="btn" style="margin-top:0; text-transform:capitalize;"><span class="d-none d-lg-inline-block">Next</span> <i class="fas fa-long-arrow-alt-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
-->




    <!--Footer Form Start-->
    <section class="subscribe-area pb-50 pt-50">
        <div class="container">
            <div class="row">

                <div class="col-md-3 m-auto">
                    <div class="subscribe-text">
                        <span>Contact Us</span>
                        <h2>Have a Project?</h2>
                    </div>
                </div>



                <div class="col-md-9 m-auto">

                    <div class="footer-form">
                        <form class="form-wrapper" method="Post" action="https://thebimengineers.com/layouts/master">
                            <input type="hidden" name="_token" value="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
                            <div class="row">

                                <div class="footer-form-input">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>



                                <div class="footer-form-input">
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>



                                <div class="footer-form-input">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="footer-form-input">
                                    <input type="text" name="project" placeholder="Project" required="">
                                </div>


                                <div class="footer-form-button">
                                    <button type="submit">Submit <i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>



                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <!--Row-->
        </div>
        <!--Container-->


    </section>
    <!--Footer Form Stop-->










    <footer>
        <div class="w-100 pt-70 pb-20 bg-color1 position-relative">
            <div class="container">
                <div class="footer-data position-relative w-100">
                    <a class="clc-tp-btn thm-bg position-absolute" href="javascript:void(0);" title="Svg"><svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L14.9282 7.5H1.0718L8 0Z" fill="#1E1E20" />
                            <path d="M8 7L8 28" stroke="#1E1E20" />
                        </svg></a>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-2">
                            <div class="widget-box w-100">
                                <div class="logo">
                                    <!--<h1>-->
                                    <a href="/" title="The BIM Engineers" style="margin-bottom:1.1rem" class="mb-0">
                                        <img class="img-fluid" src="https://thebimengineers.com/images/logo.png" srcset="https://thebimengineers.com/images/logo.png" alt="The BIM Engineers" style="width: 85%;"></a>
                                    <!--</h1>-->
                                </div>
                                <!-- Logo -->

                                <!--<div class="pt-4">-->
                                <!--  <p class="text-white"><strong>The Netherlands HQ</strong></p>-->
                                <!--<div>-->
                                <!--<a href="tel:+31 088 730 49 90"><p> +31 088 730 49 90 </a> <br> <a href="mailto:info@thebimengineers.com" style="font-size: 15px;"> info@thebimengineers.com</p></a>-->

                                <!--</div>-->
                                <!--<h3 class="widget-title">Company Info</h3>-->
                                <!--<p>-->

                                <!--Ir. B.P.G. van Diggelenkade 11 -->
                                <!--8267 AC Kampen-->
                                <!--</p>-->
                                <!--</div>--><br><br>

                                <div class="scl-links d-flex flex-wrap w-100">
                                    <a href="https://www.facebook.com/thebimengineers" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/thebimengineers/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/10448248/admin/" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com/channel/UCox2mBbBIbZIdaXgAzTjeiw/featured" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title">Contacts</h3>

                                <!--<div>-->
                                <!--	<p class="text-white"><strong> Netherlands HQ</strong></p>-->
                                <!--	<div>-->
                                <!--		<a href="tel:+31 088 730 49 90"><p> +31 088 730 49 90 </a> <br> <a href="mailto:info@thebimengineers.com" style="font-size: 15px;"> info@thebimengineers.com</p></a>-->

                                <!--	</div>-->
                                <!--</div>-->
                                <div>
                                    <p class="text-white"><strong> India, Gurgaon HQ</strong></p>
                                    <div>
                                        <a href="tel:+91 88 103 60478">
                                            <p> +91 88 103 60478
                                        </a>

                                        <br><a href="/cdn-cgi/l/email-protection#523b3c363b3312263a37303b3f373c353b3c373720217c313d3f" style="font-size: 15px;"> <span class="__cf_email__" data-cfemail="b8d1d6dcd1d9f8ccd0dddad1d5ddd6dfd1d6ddddcacb96dbd7d5">[email&#160;protected]</span></p></a>

                                    </div>
                                    <p>
                                        Building No.30, Sector 32, Gurgaon 122001 Delhi NCR/Haryana
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title"></h3>
                                <div style="padding-top: 30px;">
                                    <p class="text-white"><strong> India, Chennai</strong></p>
                                    <div>
                                        <p>Mount Tower, 2/4A, Mount Poonamallee Rd, Ramapuram, Chennai, Tamil Nadu 600089</p>



                                    </div>
                                </div>



                                <!--<div>-->
                                <!--<p class="text-white"><strong> United Kingdom</strong></p>
								<!--<div>-->
                                <!--<a href="tel:+44 7895 380914"><p> +44 7895 380914 </a>-->
                                <!--<br><a href="mailto:lagbede@thebimengineers.com" style="font-size: 15px;"> uk@thebimengineers.com</p></a>-->
                                <!--</div>-->
                                <!--</div>-->

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title"></h3>
                                <div style="padding-top: 30px;">
                                    <p class="text-white"><strong> USA</strong></p>
                                    <div>

                                        <a href="/cdn-cgi/l/email-protection#d0a5a3b190a4b8b5b2b9bdb5beb7b9beb5b5a2a3feb3bfbd" style="font-size: 15px; color:#bbbbbc;"> <span class="__cf_email__" data-cfemail="106563715064787572797d757e77797e757562633e737f7d">[email&#160;protected]</span> </a>
                                        <br>
                                        <p>The BIM Engineers USA<br> Suite 900, 1999 Bryan Street Dallas, TX, USA</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-1">
                            <div class="widget-box w-100">
                                <h3 class="widget-title">Links</h3>
                                <ul class="mb-0 list-unstyled w-100">
                                    <li><a href="https://thebimengineers.com/about-tbe" title="About">About</a></li>
                                    <li><a href="/services/bim-vdc" title="Services">Services</a></li>
                                    <li><a href="/projects" title="Projects">Projects</a></li>
                                    <li><a href="/videos" title="Videos">Videos</a></li>
                                    <!--<li><a href="#" title="News & Insights">News & Insights</a></li>-->
                                    <li><a href="/career" title="Career">Career</a></li>
                                    <li><a href="/contact" title="Contact">Contact</a></li>
                                    <li><a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Data -->
            </div>
        </div>

    </footer>
    <!-- Footer -->
    <div class="copyright bg-color1 w-100">
        <div class="container">
            <div class="copyright-inner d-flex flex-wrap justify-content-between align-items-center w-100">
                <p class="mb-0">Copyright &copy; 2024 <a href="/" title="Inspire">The BIM Engineers</a>. All Rights Reserved | Design & Developed by <a href="https://prettifycreative.com" target="_blank" rel="noopener noreferrer">Prettify Creative</a> </p>
                <!--<ul class="d-inline-flex flex-wrap mb-0 list-unstyled">-->
                <!--	<li><a href="javascript:void(0);" title="Terms of use">Terms of use</a></li>-->
                <!--	<li><a href="javascript:void(0);" title="Privacy Environmental Policy">Privacy Environmental Policy</a></li>-->
                <!--</ul>-->
            </div>
        </div>
    </div>
    <!-- Copyright -->

    </main>
    <!-- Main Wrapper -->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--<script src="https://thebimengineers.com/js/popper.min.js"></script>-->
    <script src="https://thebimengineers.com/js/bootstrap.min.js"></script>
    <script src="https://thebimengineers.com/js/wow.min.js"></script>
    <script src="https://thebimengineers.com/js/counterup.min.js"></script>
    <script src="https://thebimengineers.com/js/jquery.fancybox.min.js"></script>
    <script src="https://thebimengineers.com/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="https://thebimengineers.com/js/nouislider.min.js"></script>
    <!--<script src="https://thebimengineers.com/js/perfect-scrollbar.min.js"></script>-->
    <script src="https://thebimengineers.com/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <script src="https://thebimengineers.com/js/custom-scripts.js"></script>






    <script>
        AOS.init({
            duration: 1000,
        });
    </script>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".case-box");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>
    <script>
        function send(formdata) {
            let data = JSON.stringify(formdata);




            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                'url': 'https://thebimengineers.com/client/query',
                'type': 'POST',
                'dataType': 'json',
                'data': data,
            }).done(function(response) {
                console.log(response)
                // swal({   
                //     title: "Your query has been recorded",   
                //     text: "we'll revert you within 48 hours",   
                //     type: "success",   

                //     confirmButtonColor: "#0ab9e8",   
                //     confirmButtonText: "Ok",   

                //     closeOnConfirm: true });

            }).fail(function(xhr, ajaxOps, error) {
                console.log('Failed: ' + error);
            });
        }

        let formdata = {};
        let uid = document.getElementById('uid');
        formdata['uid'] = uid.value;
        let form = document.getElementById('stepform');
        let element = form.getElementsByClassName('step')[0];

        let btn = form.getElementsByClassName('btn')[0];
        let step = form.getElementsByClassName('formstep')[0];
        let steps = form.getElementsByClassName('formsteps')[0];

        btn.addEventListener('click', (event) => {

            event.preventDefault();

            if (element.value !== '') {
                if (element.name == 'name') {

                    formdata['name'] = element.value;

                    steps.style.display = 'block';
                    element.value = '';
                    element.placeholder = "Please Enter Email";
                    element.name = "email";
                    element.type = "email";
                    step.innerHTML = "2";

                } else if (element.name == 'email') {

                    formdata['email'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Phone Number";
                    element.name = "phone";
                    element.type = "Number";
                    step.innerHTML = "3";

                } else if (element.name == 'phone') {

                    formdata['phone'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Project Details";
                    element.name = "message";
                    element.type = "text";
                    btn.innerHTML = "Submit";
                    step.innerHTML = "4";


                } else {

                    formdata['message'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Name";
                    element.name = "name";
                    element.type = "text";
                    btn.innerHTML = "Next";
                    step.innerHTML = "1";
                    steps.style.display = 'none';


                }

                //setTimeout(send, 18000, formdata);
                send(formdata);
            } else {
                alert('input field can not be null')
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
        });
    </script>



    <script>
        let form = document.getElementById('filterForm');
        let elements = form.getElementsByTagName('select');
        Array.from(elements).forEach(element =>
            element.addEventListener('change', () => {
                let value = element.value;
                form.submit()
            })
        )
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
    <meta name="description" content="" />
    <meta name="keywords" content="BIM projects" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#4285f4">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4285f4">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#4285f4">
    <link rel="canonical" href="https://thebimengineers.com/projects">
    <link rel="icon" href="https://thebimengineers.com/favicon.gif" sizes="35x35" type="image/gif">
    <title> Our projects | The BIM Engineers | Join the future today</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://thebimengineers.com/css/all.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/fontello.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/animate.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://thebimengineers.com/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/nouislider.min.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/perfect-scrollbar.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/slick.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://thebimengineers.com/css/style.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/responsive.css">
    <link rel="stylesheet" href="https://thebimengineers.com/css/color.css">
    <script src="https://www.google.com/recaptcha/api.js"></script>


    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-M6229ZB');
    </script>

    <!-- End Google Tag Manager -->
    <script src="https://www.google.com/recaptcha/api.js?hl=&render="></script>


</head>

<style>
    #mega-menu {
        display: none;
    }

    nav div:not(.nav-right) ul li.menu-item-has-children>a:hover {
        color: #0dbae7 !important;
    }

    .contact-btn {
        padding: 10px 20px;
        background: #0ab9e8;
        color: #fff !important;
        font-weight: bold;
    }

    nav div:not(.nav-right) ul li.menu-item-has-children>a.contact-btn:hover {
        color: #fff !important;
        background: #0dbae7;
    }

    .trademark {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 50px;
        z-index: -1;
        opacity: 0.5;
        overflow: hidden;
    }

    .trademark img {
        height: 100%;
        max-height: 110px;
    }

    .mega-menu {
        list-style: none;
        opacity: 1 !important;
        visibility: visible !important;
        top: 0 !important;
        left: -100px !important;
        box-shadow: none !important;
        padding-top: 0px !important;
    }

    #mega-menu {
        transform: translateX(0);
    }

    .mega-menu li a {
        padding: 5px 0px !important;
    }

    .absolute-content {
        position: absolute;
        bottom: 20px;
        left: 0;
        padding: 15px 20px;
        width: 80%;
        background: #0ab9e8;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .absolute-content:hover {
        position: absolute;
        bottom: 20px;
        left: 0;
        padding: 15px 20px;
        width: 80%;
        background: #0ab9e8;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
    }

    .pagnum {
        position: absolute;
        font-size: 2rem;
        right: 4rem;
        bottom: 7rem;
        color: #fff;
    }

    .page-top-wrap img {
        height: 100vh;
    }

    .carousel-indicators {
        justify-content: flex-end;
        margin-right: 50px;
    }

    .carousel-indicators img {
        filter: grayscale(100%);
        cursor: pointer;
    }

    .carousel-indicators .active {
        filter: grayscale(0%);
    }

    .subscribe-area {
        background: #0ab9e8;
    }

    .subscribe-text span {
        font-size: 12px;
        font-weight: 700;
        color: #fff;
        letter-spacing: 5px;
    }

    .subscribe-text h2 {
        color: #fff;
        font-size: 36px;
        font-weight: 300;
        margin-bottom: 0;
        margin-top: 6px;
        text-align: left !important;
    }

    .subscribe-wrapper {
        overflow: hidden;
    }

    .subscribe-form form {
        display: flex;
    }

    .editable-content {
        background: none;
        outline: none;
        border: 1px solid #fff;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 15px;
        font-weight: 300;
        height: 57px;
        padding-top: 18px;
        margin-right: 17px;
        padding-left: 35px;
        width: 97%;
        cursor: pointer;
    }

    .subscribe2-wrapper .subscribe-form input {
        background: none;
        border: 1px solid #fff;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 15px;
        font-weight: 300;
        height: 57px;
        margin-right: 17px;
        padding-left: 35px;
        width: 97%;
        cursor: pointer;
    }

    .subscribe-form input::placeholder {
        color: #fff;
    }

    .subscribe2-wrapper .subscribe-form button {
        width: 30%;
        background: #ffff;
        border: none;
        border-radius: 30px;
        color: #4b5d73;
        display: inline-block;
        font-size: 18px;
        font-weight: 400;
        line-height: 1;
        padding: 18px 46px;
        transition: all 0.3s ease 0s;
    }

    .subscribe2-wrapper .subscribe-form button i {
        font-size: 18px;
        padding-left: 5px;
    }

    .input-container {
        position: relative;
        width: 70%;
    }

    .formsteps {
        position: absolute;
        top: 31%;
        left: 84%;
        color: #fff;
    }

    .placeholder-text {
        position: absolute;
        top: 31%;
        left: 38px;
        color: #fff;
    }

    /*Footer Form css*/

    .footer-form input {
        border: 1px solid #fff;
        border-radius: 30px;
        color: #000 !important;
        display: inline-block;
        font-size: 13px;
        font-weight: 300;
        height: 40px;
        margin-right: 0px;
        padding-left: 15px;
        cursor: pointer;
        width: 165px;
    }

    .footer-form button {
        width: 100%;
        background: #1e1e20;
        border: none;
        border-radius: 30px;
        color: #fff;
        display: inline-block;
        font-size: 18px;
        font-weight: 400;
        line-height: 1;
        padding: 11px 30px;
        transition: all 0.3s ease 0s;
    }

    .footer-form {
        border: 1px solid rgba(0, 0, 0, .15);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 3px 5px rgba(0, 0, 0, .075);
    }

    .footer-form-input {
        margin-right: 5px;
        margin-left: 5px;
    }

    @media screen and (max-width: 767px) {
        .footer-form-input {
            margin-bottom: 10px;
            width: 100% !impo;
        }

        .footer-form {
            margin-top: 15px;
        }

        .footer-form input {
            width: 100%;
        }

        /* For career form*/
        ul#gform_fields_5 {
            padding-right: 20px;
            padding-left: 20px;
        }
    }
</style>

<body>


    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src=https://www.googletagmanager.com/ns.html?id=GTM-M6229ZB

            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->


    <header class="stick style1 w-100">
        <div class="container">
            <div class="logo-menu-wrap d-flex flex-wrap justify-content-between align-items-center w-100">
                <div class="logo">
                    <!--<h1 >-->
                    <a href="/" title=" The BIM Engineers" class="mb-0">
                        <img class="img-fluid " src="https://thebimengineers.com/images/logo.png" srcset="https://thebimengineers.com/images/logo.png" alt="Logo" style="width: 58%">
                    </a>
                    <!--</h1 >-->
                </div>
                <!-- Logo -->
                <nav class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="nav-left">
                        <ul class="mb-0 list-unstyled d-inline-flex flex-wrap w-100">

                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Our Services"><span>Our Services</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">

                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/services/bim-vdc" title="BIM / VDC" style="font-weight:normal"><span style="font-weight:normal">BIM / VDC </span></a></li>
                                    <li style="font-weight:normal"><a href="/services/staffing" title="Staffing / Secondment" style="font-weight:normal"><span style="font-weight:normal">Staffing / Secondment</span></a></li>
                                    <li style="font-weight:normal"><a href="/services/cad-drafting" title="CAD Drafting" style="font-weight:normal"><span style="font-weight:normal">CAD Drafting </span></a></li>
                                    <li style="font-weight:normal"><a href="/services/quantity-surveying" title="Quantity Surveying" style="font-weight:normal"><span style="font-weight:normal">Quantity Surveying</span></a></li>


                                </ul>
                            </li>


                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="About us"><span>About Us</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">

                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/about-tbe" title="About TBE" style="font-weight:normal"><span style="font-weight:normal">About TBE</span></a></li>
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/why-tbe" title="Why TBE" style="font-weight:normal"><span style="font-weight:normal">Why TBE</span></a></li>

                                    <li style="font-weight:normal"><a href="/csr" title="CSR" style="font-weight:normal"><span style="font-weight:normal">CSR</span></a></li>
                                    <!--<li style="font-weight:normal"><a href="javascript:void(0);" title="Partners" style="font-weight:normal"><span style="font-weight:normal">Partners</span></a></li>-->

                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="https://thebimengineers.com/projects" title="Projects"><span>Projects</span></a>
                                <!--<ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">-->
                                <!--	<li style="font-weight:normal"><a href="https://thebimengineers.com/projects" title="Projects" style="font-weight:normal"><span style="font-weight:normal">Projects</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="/case-studies" title="Case Studies" style="font-weight:normal"><span style="font-weight:normal">Case Studies</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="https://thebimengineers.com/testimonials" title="Testimonial" style="font-weight:normal"><span style="font-weight:normal">Testimonials</span></a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Resources"><span>Resources</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/videos" title="Video" style="font-weight:normal"><span style="font-weight:normal">Videos</span></a></li>
                                    <li style="font-weight:normal"><a href="https://thebimengineers.com/brochures" title="Brochures" style="font-weight:normal"><span style="font-weight:normal">Brochures</span></a></li>
                                    <!--<li style="font-weight:normal"><a href="https://thebimengineers.com/publications" title="Publications" style="font-weight:normal"><span style="font-weight:normal">Publications</span></a></li>-->
                                    <!--<li style="font-weight:normal"><a href="javascript:void(0);" title="BIM Fees  Calculator" style="font-weight:normal"><span style="font-weight:normal">BIM Fees  Calculator</span></a></li>-->
                                </ul>
                            </li>





















                            <li class="menu-item-has-children"><a href="javascript:void(0);" title="News & Insights"><span>News & Insights</span></a>
                                <ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">
                                    <li style="font-weight:normal"><a href="/blogs/all/tech-updates" title="Blog" style="font-weight:normal"><span style="font-weight:normal">Technical Updates</span></a></li>
                                    <li style="font-weight:normal"><a href="/blogs/all/news" title="TBE News" style="font-weight:normal"><span style="font-weight:normal">TBE News</span></a></li>
                                    <li style="font-weight:normal"><a href="/awards" title="Awards & Recognitions" style="font-weight:normal"><span style="font-weight:normal">Awards & Recognitions</span></a></li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children"><a href="/career" title="Career"><span>Career</span></a>
                                <!--<ul class="mb-0 list-unstyled position-absolute" style="border-top: 5px solid #0ab9e8; border-bottom: 5px solid #0ab9e8;">-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Vacancies" style="font-weight:normal"><span style="font-weight:normal">Vacancies</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Training" style="font-weight:normal"><span style="font-weight:normal">Training</span></a></li>-->
                                <!--	<li style="font-weight:normal"><a href="javascript:void(0);" title="Internship" style="font-weight:normal"><span style="font-weight:normal">Internship</span></a></li>-->
                                <!--</ul>-->
                            </li>
                            <li class="menu-item-has-children"><a href="https://thebimengineers.com/contact-us" title="Contact Us" class="contact-btn"><span>Contact Us</span></a>

                            </li>

                        </ul>
                    </div>
                    <div class="nav-right d-inline-flex flex-wrap">
                        <ul class="d-flex flex-wrap mb-0 list-unstyled">

                            <li class="res-menu-btn-wrap"><a class="res-menu-btn" href="javascript:void(0);" title="Menu"><i class="fas fa-align-justify"></i></a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <!-- Logo Menu Wrap -->
        </div>

        <div class="trademark d-none d-lg-block">
            <img src="https://thebimengineers.com/images/trademark.png" alt="">
        </div>
    </header>
    <!-- Header -->

    <div class="responsive-menu position-fixed w-100">
        <span class="menu-close"><i class="fas fa-times"></i></span>
        <ul class="mb-0 list-unstyled w-100">
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Our Services"><span>Our Services</span></a>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="https://thebimengineers.com/services/bim-vdc" title="BIM / VDC"><span>BIM / VDC </span></a>



                    </li>
                    <li><a href="/services/staffing" title="Staffing / Secondment"><span>Staffing / Secondment</span></a>

                    </li>
                    <li><a href="/services/cad-drafting" title="CAD Drafting"><span>CAD Drafting </span></a>

                    </li>
                    <li><a href="/services/quantity-surveying" title="Quantity Surveying"><span>Quantity Surveying</span></a>

                    </li>


                </ul>
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="About us"><span>About us</span></a>
                <ul class="mb-0 list-unstyled w-100">

                    <li><a href="https://thebimengineers.com/about-tbe" title="About TBE"><span>About TBE</span></a></li>
                    <li><a href="https://thebimengineers.com/why-tbe" title="Why TBE"><span>Why TBE</span></a></li>
                    <!--<li><a href="#" title="Our Team"><span>Our Team</span></a></li>-->
                    <li><a href="/csr" title="Corporate Social Responsibility"><span>Corporate Social Responsibility</span></a></li>
                    <!--<li><a href="#" title="Partners"><span>Partners</span></a></li>-->

                </ul>
            </li>

            <li><a href="https://thebimengineers.com/projects" title="Projects"><span>Projects</span></a>
                <!--<ul class="mb-0 list-unstyled w-100">-->
                <!--	<li><a href="https://thebimengineers.com/projects" title=""><span>Projects</span></a></li>-->
                <!--	<li><a href="/case-studies" title=""><span>Case Studies</span></a></li>-->
                <!--	<li><a href="#" title=""><span>Testimonials</span></a></li>-->
                <!--</ul>-->
            </li>
            <li class="menu-item-has-children"><a href="javascript:void(0);" title="Resources"><span>Resources</span></a>
                <ul class="mb-0 list-unstyled w-100">
                    <li><a href="/videos" title="Videos"><span>Videos</span></a></li>
                    <li><a href="https://thebimengineers.com/brochures" title="Brochures"><span>Brochures</span></a></li>
                    <!--<li><a href="/publications" title="Publications"><span>Publications</span></a></li>-->
                    <!--<li><a href="#" title="BIM Fees  Calculator"><span>BIM Fees  Calculator</span></a></li>-->
                </ul>
            </li>

            <li class="menu-item-has-children"><a href="javascript:void(0);" title="News & Insights"><span>News & Insights</span></a>
                <ul class="mb-0 list-unstyled w-100">

                    <li><a href="/blogs/all/tech-updates" title="Technical Updates"><span>Technical Updates</span></a></li>
                    <li><a href="/blogs/all/news" title="TBE News"><span>TBE News</span></a></li>
                    <li><a href="/awards" title="Awards & Recognitions"><span>Awards & Recognitions</span></a></li>

                </ul>
            </li>

            <li><a href="/career" title=""><span>Career</span></a>
                <!--<ul class="mb-0 list-unstyled w-100">-->

                <!--	<li><a href="#" title="Vacancies"><span>Vacancies</span></a></li>-->
                <!--	<li><a href="#" title="Training"><span>Training</span></a></li>-->
                <!--	<li><a href="#" title="Internship"><span>Internship</span></a></li>-->

                <!--</ul>-->
            </li>

            <li><a href="https://thebimengineers.com/contact-us" title="Contact"><span>Contact</span></a>

            </li>



        </ul>
        <div class="scl-links v2 d-flex flex-wrap w-100">
            <a href="https://www.facebook.com/thebimengineers" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/thebimengineers/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/10448248/admin/" title="Twitter" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="https://www.youtube.com/channel/UCox2mBbBIbZIdaXgAzTjeiw/featured" title="Twitter" target="_blank"><i class="fab fa-youtube"></i></a>
        </div>

    </div>
    <!-- Responsive Menu -->

    <div>
        <section style="margin-top:110px; background:#fff; border-top: 1px solid #0ab9e8;  border-bottom: 1px solid #0ab9e8; padding: 20px 0;">
            <div class="container">
                <ol class="breadcrumb mb-0 list-unstyled">
                    <li class="breadcrumb-item"><a href="/" title="Home"><i class="icon-home"></i>Home</a></li>
                    <li class="breadcrumb-item active">Our Projects</li>
                </ol>
            </div>

        </section>
        <section>
            <div class="w-100 pt-80 pb-130 position-relative">
                <svg class="sec-tp-rgt-shp overlap-tpshap250 opc-6 stroke-clr position-absolute" width="444" height="721" viewBox="0 0 444 721" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M0.769252 365.057L117.32 627.406H292.971L176.421 365.057H0.769252Z" stroke="#000000" />
                        <path d="M605.475 68.2185L488.925 330.567L313.273 330.567L429.823 68.2185H605.475Z" stroke="#000000" />
                        <path d="M157.597 458.151L274.147 720.5H449.799L333.249 458.151H157.597Z" stroke="#000000" />
                        <path d="M449.8 161.312L333.249 423.661L157.598 423.661L274.148 161.312H449.8Z" stroke="#000000" />
                        <path d="M233.605 297.339L350.155 559.688H525.807L409.256 297.339H233.605Z" stroke="#000000" />
                        <path d="M372.64 0.499969L256.089 262.849L80.4375 262.849L196.988 0.499969H372.64Z" stroke="#000000" />
                    </g>
                </svg>
                <svg class="sec-btm-lft-shp overlap-btmshap130 opc-6 stroke-clr position-absolute" width="358" height="721" viewBox="0 0 358 721" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path d="M356.475 355.943L239.925 93.594L64.2729 93.594L180.823 355.943L356.475 355.943Z" stroke="#000000" />
                        <path d="M-248.231 652.782L-131.68 390.433L43.9714 390.433L-72.579 652.782L-248.231 652.782Z" stroke="#000000" />
                        <path d="M199.647 262.849L83.0971 0.49999L-92.5547 0.499974L23.9957 262.849L199.647 262.849Z" stroke="#000000" />
                        <path d="M-92.5555 559.688L23.9949 297.339L199.647 297.339L83.0963 559.688L-92.5555 559.688Z" stroke="#000000" />
                        <path d="M123.64 423.661L7.08952 161.312L-168.562 161.312L-52.0119 423.661L123.64 423.661Z" stroke="#000000" />
                        <path d="M-15.3953 720.5L101.155 458.151L276.807 458.151L160.256 720.5L-15.3953 720.5Z" stroke="#000000" />
                    </g>
                </svg>
                <div class="container">
                    <div class="sec-title text-center w-100">
                        <div class="sec-title-inner d-inline-block">
                            <span class="d-block thm-clr">Portfolio</span>
                            <h1 class="mb-0" style="font-size: 2.5rem;
    line-height: 3.625rem;">Our Projects</h1>
                        </div>
                    </div>
                    <!-- Sec Title -->
                    <div class="port-wrap position-relative w-100">
                        <div class="cont-inner position-relative text-center d-inline-block" style="max-width:100%; width:100%; padding:0px; margin-bottom:30px;">


                            <form class="w-100" method="post" id="filterForm" action="https://thebimengineers.com/project/filter">
                                <input type="hidden" name="_token" value="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
                                <div class="response w-100"></div>

                                <div class="row">

                                    <div class="col-sm-12 col-lg-3">
                                        <span class="field-box d-block w-100 position-relative"><select class="email" name="sector">


                                                <option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-count="0" data-sf-depth="0" value="">All Sectors</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Airports">Airports</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Commercial">Commercial</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Education">Education</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Hospitality">Hospitality</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Hospital">Hospital</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Industrial">Industrial</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Infrastructure">Infrastructure</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mixed Use">Mixed Use</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Residential">Residential</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Stadium">Stadium</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Metro/Rails">Metro/Rails</option>


                                            </select></span>
                                    </div>
                                    <div class="col-sm-12 col-lg-3">

                                        <span class="field-box d-block w-100 position-relative"><select class="phone" type="text" name="location">


                                                <option class="sf-level-0 sf-item-0 sf-option-active" selected="selected" data-sf-depth="0" value="">All Locations</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Afghanistan">Afghanistan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Åland Islands">Åland Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Albania">Albania</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Algeria">Algeria</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="American Samoa">American Samoa</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Andorra">Andorra</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Angola">Angola</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Anguilla">Anguilla</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Antarctica">Antarctica</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Argentina">Argentina</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Armenia">Armenia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Aruba">Aruba</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Australia">Australia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Austria">Austria</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Azerbaijan">Azerbaijan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bahamas">Bahamas</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bahrain">Bahrain</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bangladesh">Bangladesh</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Barbados">Barbados</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Belarus">Belarus</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Belgium">Belgium</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Belize">Belize</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Benin">Benin</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bermuda">Bermuda</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bhutan">Bhutan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Botswana">Botswana</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bouvet Island">Bouvet Island</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Brazil">Brazil</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Brunei Darussalam">Brunei Darussalam</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Bulgaria">Bulgaria</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Burkina Faso">Burkina Faso</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Burundi">Burundi</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cambodia">Cambodia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cameroon">Cameroon</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Canada">Canada</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cape Verde">Cape Verde</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cayman Islands">Cayman Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Central African Republic">Central African Republic</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Chad">Chad</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Chile">Chile</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="China">China</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Christmas Island">Christmas Island</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Colombia">Colombia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Comoros">Comoros</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Congo">Congo</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cook Islands">Cook Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Costa Rica">Costa Rica</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Côte d&#039;Ivoire">Côte d&#039;Ivoire</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Croatia">Croatia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cuba">Cuba</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Curaçao">Curaçao</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Cyprus">Cyprus</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Czech Republic">Czech Republic</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Denmark">Denmark</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Djibouti">Djibouti</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Dominica">Dominica</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Dominican Republic">Dominican Republic</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Ecuador">Ecuador</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Egypt">Egypt</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="El Salvador">El Salvador</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Equatorial Guinea">Equatorial Guinea</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Eritrea">Eritrea</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Estonia">Estonia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Ethiopia">Ethiopia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Faroe Islands">Faroe Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Fiji">Fiji</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Finland">Finland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="France">France</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="French Guiana">French Guiana</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="French Polynesia">French Polynesia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="French Southern Territories">French Southern Territories</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Gabon">Gabon</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Gambia">Gambia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Georgia">Georgia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Germany">Germany</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Ghana">Ghana</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Gibraltar">Gibraltar</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Greece">Greece</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Greenland">Greenland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Grenada">Grenada</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guadeloupe">Guadeloupe</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guam">Guam</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guatemala">Guatemala</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guernsey">Guernsey</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guinea">Guinea</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guinea-Bissau">Guinea-Bissau</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Guyana">Guyana</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Haiti">Haiti</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Heard Island and McDonald Mcdonald Islands">Heard Island and McDonald Mcdonald Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Honduras">Honduras</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Hong Kong">Hong Kong</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Hungary">Hungary</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Iceland">Iceland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="India">India</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Indonesia">Indonesia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Iraq">Iraq</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Ireland">Ireland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Isle of Man">Isle of Man</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Israel">Israel</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Italy">Italy</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Jamaica">Jamaica</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Japan">Japan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Jersey">Jersey</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Jordan">Jordan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Kazakhstan">Kazakhstan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Kenya">Kenya</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Kiribati">Kiribati</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Korea, Democratic People&#039;s Republic of">Korea, Democratic People&#039;s Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Korea, Republic of">Korea, Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Kuwait">Kuwait</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Kyrgyzstan">Kyrgyzstan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Lao People&#039;s Democratic Republic">Lao People&#039;s Democratic Republic</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Latvia">Latvia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Lebanon">Lebanon</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Lesotho">Lesotho</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Liberia">Liberia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Libya">Libya</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Liechtenstein">Liechtenstein</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Lithuania">Lithuania</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Luxembourg">Luxembourg</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Macao">Macao</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Macedonia, the Former Yugoslav Republic of">Macedonia, the Former Yugoslav Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Madagascar">Madagascar</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Malawi">Malawi</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Malaysia">Malaysia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Maldives">Maldives</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mali">Mali</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Malta">Malta</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Marshall Islands">Marshall Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Martinique">Martinique</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mauritania">Mauritania</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mauritius">Mauritius</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mayotte">Mayotte</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mexico">Mexico</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Moldova">Moldova</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Monaco">Monaco</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mongolia">Mongolia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Montenegro">Montenegro</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Montserrat">Montserrat</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Morocco">Morocco</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Mozambique">Mozambique</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Myanmar">Myanmar</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Namibia">Namibia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Nauru">Nauru</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Nepal">Nepal</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Netherlands">Netherlands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="New Caledonia">New Caledonia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="New Zealand">New Zealand</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Nicaragua">Nicaragua</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Niger">Niger</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Nigeria">Nigeria</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Niue">Niue</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Norfolk Island">Norfolk Island</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Norway">Norway</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Oman">Oman</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Pakistan">Pakistan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Palau">Palau</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Palestine">Palestine</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Panama">Panama</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Papua New Guinea">Papua New Guinea</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Paraguay">Paraguay</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Peru">Peru</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Philippines">Philippines</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Pitcairn">Pitcairn</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Poland">Poland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Portugal">Portugal</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Puerto Rico">Puerto Rico</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Qatar">Qatar</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Réunion">Réunion</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Romania">Romania</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Russian Federation">Russian Federation</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Rwanda">Rwanda</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Barthélemy">Saint Barthélemy</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Lucia">Saint Lucia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Martin (French part)">Saint Martin (French part)</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Samoa">Samoa</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="San Marino">San Marino</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Saudi Arabia">Saudi Arabia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Senegal">Senegal</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Serbia">Serbia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Seychelles">Seychelles</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sierra Leone">Sierra Leone</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Singapore">Singapore</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Slovakia">Slovakia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Slovenia">Slovenia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Solomon Islands">Solomon Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Somalia">Somalia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="South Africa">South Africa</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="South Sudan">South Sudan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Spain">Spain</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sri Lanka">Sri Lanka</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sudan">Sudan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Suriname">Suriname</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Swaziland">Swaziland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Sweden">Sweden</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Switzerland">Switzerland</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Taiwan">Taiwan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tajikistan">Tajikistan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Thailand">Thailand</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Timor-Leste">Timor-Leste</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Togo">Togo</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tokelau">Tokelau</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tonga">Tonga</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tunisia">Tunisia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Turkey">Turkey</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Turkmenistan">Turkmenistan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Tuvalu">Tuvalu</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Uganda">Uganda</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Ukraine">Ukraine</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="United Arab Emirates">United Arab Emirates</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="United Kingdom">United Kingdom</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="United States">United States</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Uruguay">Uruguay</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Uzbekistan">Uzbekistan</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Vanuatu">Vanuatu</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Viet Nam">Viet Nam</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Virgin Islands, British">Virgin Islands, British</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Wallis and Futuna">Wallis and Futuna</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Western Sahara">Western Sahara</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Yemen">Yemen</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Zambia">Zambia</option>
                                                <option class="sf-level-0 " data-sf-count="1" data-sf-depth="0" value="Zimbabwe">Zimbabwe</option>

                                            </select></span>
                                    </div>
                                    <div class="col-sm-12 col-lg-3">
                                        <span class="field-box d-block w-100 position-relative"><input class="phone" type="text" name="keyword" placeholder="Search projects or services" style="height: inherit;"></span>
                                    </div>
                                    <div class="col-sm-12 col-lg-3">
                                        <input type="submit" class="contact-btn" value="Filter" name="filter">
                                    </div>
                                </div>




                            </form>
                        </div>

                        <div class="port-inner position-relative w-100">
                            <div class="row masonry">


                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/Qe7r9cWDKkFBOI1h5a7D-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/chennai-international-airport" class="">CHENNAI INTERNATIONAL AIRPORT</a>
                                        </div>
                                    </div>
                                </div>












                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/EE9XleHEPfYnXXFCiQko-small.webp" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/tesla-gigafactory-berlin" class="">Tesla Gigafactory Berlin</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/nTD6wRG953huHMBohikI-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/arthur-ashe-stadium" class="">ARTHUR ASHE STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/wr1GB9H6COLO0zF31SUp-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/progressive-field-stadium" class="">PROGRESSIVE FIELD STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/8K6gjJ5Gr9evM6mJfzq3-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/tennessee-titans-stadium" class="">TENNESSEE TITANS STADIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2024/dwpsvwp42qSBgYU4SOIB-small.gif" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/intel-cardinal" class="">INTEL - CARDINAL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/kzwQwEQRhOU0oq5snoZs-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/interstate-405-widening" class="">Interstate 405 Widening</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/qRKh1MnHHOHLDgmFq4sd-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/german-autobahn-a3-ausbau" class="">German Autobahn A3 Ausbau</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/R3AmLy1mmmN3l78HjfsS-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/m1-motorway-smart-motorways-scheme" class="">M1 Motorway Smart Motorways Scheme</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/Jd54MZX1kM83DBTnC9oD-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/san-francisco-bay-bridge-replacement" class="">San Francisco Bay Bridge Replacement</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/y0cwDpMoM9dUJiguOrAq-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/denver-international-airport-new-runway" class="">Denver International Airport New Runway</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/b5uN0ioikjkD0GUkpn2R-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/los-angeles-international-airport-expansion" class="">Los Angeles International Airport Expansion</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/December2023/tr5zkDuQslp9LcE4nFyF-small.jpeg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/new-jersey-turnpike-widening-highway" class="">New Jersey Turnpike Widening Highway</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/BpyFMhlyhLidL6I850Ta-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave-ny" class="">600 BUSHWICK AVE, NY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/Ov8LbC98gaUKJD6U1iA6-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/127-lazell-st-hingham" class="">127 Lazell St. Hingham</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/rlUp7jgjWwC2OMTW0Kys-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/21-parker-dr-avon" class="">21 PARKER DR AVON</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/NHcosIAstsOou9jgFy8M-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/525-east-68th-street" class="">525 East 68th Street</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/kHdrUv8JFcG2jdtW2mNl-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/29-lambert-st-cambridge" class="">29 Lambert St Cambridge</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/n1Ean4MmjOeI2qDDGr7V-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/275-park-avenue" class="">275 Park Avenue</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/8vRHM6CXWqXexxf4NdN8-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/645-massachusetts-ave" class="">645 Massachusetts Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lk34RJayBmNOzy9JJQi9-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave" class="">600 Bushwick Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/i64FGHYVl0goJOoupnO5-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/600-bushwick-ave" class="">600 Bushwick Ave</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/fWBON4VmfVqaFOxceUsz-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/loon-brook-rd" class="">LOON BROOK RD</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/6Ipvho573m0wOLKPziPX-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/127-lazell-st-hingham" class="">127 lazell St Hingham</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lgb7UmscWkKihkJrgvtF-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/66-boston-st-somerville" class="">66 Boston St Somerville</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/dFMA8YPTzE2tBDChDyJO-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/12-industrial-way" class="">12 INDUSTRIAL WAY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/uPAnD9FQBf52bafKyTnN-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/82-arnold-ave-residential" class="">82 ARNOLD AVE (RESIDENTIAL)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/2pETrXhN42poXMrVaoEN-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/paris-creperie-278" class="">PARIS CREPERIE-278</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/jutdGkd1tGvjTdFthhVR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/34-scanlon-drive" class="">34 SCANLON DRIVE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/Da2Oe64LMAquqGKt8JLb-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/acts-granite-farms" class="">ACTS GRANITE FARMS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/fANKZliWzF5w9AK7dkbJ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/stenton-trust-building" class="">STENTON TRUST BUILDING</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/wPSkCyXU8y7PyIN0HMdf-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/oxford-coutrs-condominium" class="">OXFORD COUTRS CONDOMINIUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/XBuFJ8OJ3nt4kUYJEuPJ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/one-marina-park-boston" class="">One Marina Park Boston</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/RyTZhF7ysYpvfFLhiCpW-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/greater-highway-deliverance-temple" class="">GREATER HIGHWAY DELIVERANCE TEMPLE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/lmozeIIlflgk5jfDKquC-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/athens-varsity" class="">ATHENS VARSITY</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/HyM3wb6eEOO3CPEI28u7-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/clinical-services-building" class="">CLINICAL SERVICES BUILDING</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/ykothLeOLaRZf6j5w7PR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/glenveagh-houses" class="">GLENVEAGH HOUSES</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/MER87RFNuYRZCHh94oaG-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/dockery-garage" class="">DOCKERY GARAGE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/m0Aexvh6G7RppCzIr4TZ-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/morrow-hotel" class="">MORROW HOTEL</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/August2023/T8CDE52NZoLfODKlWIux-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/belmond-cap-juluca-five-star-resort" class="">BELMOND CAP JULUCA (FIVE STAR RESORT)</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/February2023/0TyqY4umkbSByHQkJey3-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/greater-highway-deliverance-temple" class="">Greater Highway Deliverance Temple</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/51uqS2k9OAfsJ5kxo6Kj-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/pon-cat-emergency-power-generation" class="">Pon-Cat Emergency power generation</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/VJlakjM7jRL49agfPjlc-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/117-apartments-overhoeks-amsterdam" class="">117 Apartments “Overhoeks” Amsterdam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/752y8bqvcsX0qOYTl5xn-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/V-Architecten" class="">V-Architecten</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/XYey25v2un9Z4xaefHDa-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/mbs-casco" class="">MBS CASCO</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/kegOP0sKrhHL8n0yW3pG-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/dyka-prefab-assemblies" class="">Dyka Prefab Assemblies</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/f5A77TJtMDCkGBkdWQoo-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/82-apartments-houthavens-amsterdam" class="">82 Apartments “Houthavens” Amsterdam</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/q4oKrTynm8522qeUCeeT-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/6-residences-bauduinstraat-maastricht" class="">6 residences Bauduinstraat Maastricht</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/8gZJrOV9OI6l1ufzm430-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/10-residences-in-de-groene-loper" class="">10 Residences in De Groene Loper</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/bK7wI6AdDETpi7ZLAu6w-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/puurthuys-8-homes-cimbalenstraat" class="">PuurThuys 8 Homes Cimbalenstraat</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/gJeVsgOORW1tXcEUFHki-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/30-residences-in-slotjes-phase-5a-and-6ab" class="">30 Residences in Slotjes phase 5a and 6ab</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/q8wfOqsCh38T8UUIOkLm-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/21-residences-in-slotjes" class="">21 Residences in Slotjes</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/BOMk5WDXpVAMTvcVBya8-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/6-residences-bauduinstraat-maastricht" class="">6 Residences Bauduinstraat Maastricht</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/iAClTi0uvyAMwJPtrrqd-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/shepherdess-walk" class="">SHEPHERDESS WALK</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/G09mXIKTfQ6UJ0slWeka-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/rivm" class="">RIVM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/IzaKEt2zhSLuLGilvGWR-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/regents-crescent" class="">REGENTS CRESCENT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/byM9t83wLRp7matPz53j-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/the-museum" class="">THE MUSEUM</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/hIuFYs2fJQTwAc90j2qo-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/wood-wharf-building-g3" class="">WOOD WHARF BUILDING G3</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/dzbxtpeG061aq1pLCp7O-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/de-cornelis" class="">DE CORNELIS</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/FtgLPW3xKVnQWMinFWJP-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/18-appartementen" class="">18 APPARTEMENTEN</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/TZQboPRGyfw2z6MWn78T-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/schiphol-international-airport" class="">SCHIPHOL INTERNATIONAL AIRPORT</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/mKodbJm8ckdAhDeuyWdd-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/eurostar-check-in-facility-station" class="">EUROSTAR: CHECK-IN FACILITY STATION</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/ZqlWqkGR0AQUghn3aPwk-small.png" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/the-lyric-theatre" class="">THE LYRIC THEATRE</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-lg-4 fltr-itm fltr-itm1">
                                    <div class="port-box position-relative w-100">
                                        <div class="position-relative overflow-hidden w-100" style="border:3px solid #0dbae7; padding:10px;">
                                            <img class="img-fluid w-100" src="https://thebimengineers.com/public/storage/projects/September2022/7AnOUPmgEhYN0xDUDML3-small.jpg" alt="Portfolio Image 1">
                                            <!--<a class="thm-bg position-absolute" href="images/resources/port-img2-1.jpg" data-fancybox="gallery" title=""><svg viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 15.5H30.5" stroke="#1E1E20" stroke-linecap="round"/><path d="M16 1L16 31" stroke="#1E1E20" stroke-linecap="round"/></svg></a>-->
                                            <a class="absolute-content" href="https://thebimengineers.com/project/view/mass-rapid-transit-station" class="">MASS RAPID TRANSIT STATION</a>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                    <!-- Portfolio Wrap -->

                    <!-- View All -->
                </div>
            </div>
        </section>



    </div>
    <!--<section class="subscribe-area pb-50 pt-50">
    <div class="container">
        <div class="row">
    
            <div class="col-md-4 m-auto">
                <div class="subscribe-text">
                    <span>Contact Us</span>
                    <h2>Have a Project?</h2>
                </div>
            </div>
            <div class="col-md-8 m-auto">
                <div class="subscribe-wrapper subscribe2-wrapper">
                    <div class="subscribe-form">
                        <form action="#" id="stepform">
                           
                            <input type="hidden" class="g-recaptcha" data-sitekey="6LdaC3kiAAAAADEm8HFpJa7v2FMN4L0LVdM84QT7" data-callback="verifyCaptcha">
                            <div class="input-container">
                                
                                <input type="hidden" value="mepihkqEwO" id="uid">
                                <input type="text" name="name" class="step" id="input-name" maxlength="200" placeholder="Enter your name" required>
                                <div class="formsteps" style="display:none;">
                                    <span class="formstep">1</span>/4
                                </div>
                                
                            </div>
                            

                            <button class="btn" style="margin-top:0; text-transform:capitalize;"><span class="d-none d-lg-inline-block">Next</span> <i class="fas fa-long-arrow-alt-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
-->




    <!--Footer Form Start-->
    <section class="subscribe-area pb-50 pt-50">
        <div class="container">
            <div class="row">

                <div class="col-md-3 m-auto">
                    <div class="subscribe-text">
                        <span>Contact Us</span>
                        <h2>Have a Project?</h2>
                    </div>
                </div>



                <div class="col-md-9 m-auto">

                    <div class="footer-form">
                        <form class="form-wrapper" method="Post" action="https://thebimengineers.com/layouts/master">
                            <input type="hidden" name="_token" value="jZiobOBr5w4oOwg8Dg5CPuZUFCCKk15KYV3gf1lN">
                            <div class="row">

                                <div class="footer-form-input">
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>



                                <div class="footer-form-input">
                                    <input type="text" name="email" placeholder="Email" required="">
                                </div>



                                <div class="footer-form-input">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>

                                <div class="footer-form-input">
                                    <input type="text" name="project" placeholder="Project" required="">
                                </div>


                                <div class="footer-form-button">
                                    <button type="submit">Submit <i class="fas fa-long-arrow-alt-right"></i></button>
                                </div>



                            </div>
                        </form>
                    </div>


                </div>
            </div>
            <!--Row-->
        </div>
        <!--Container-->


    </section>
    <!--Footer Form Stop-->










    <footer>
        <div class="w-100 pt-70 pb-20 bg-color1 position-relative">
            <div class="container">
                <div class="footer-data position-relative w-100">
                    <a class="clc-tp-btn thm-bg position-absolute" href="javascript:void(0);" title="Svg"><svg viewBox="0 0 16 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 0L14.9282 7.5H1.0718L8 0Z" fill="#1E1E20" />
                            <path d="M8 7L8 28" stroke="#1E1E20" />
                        </svg></a>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-lg-2">
                            <div class="widget-box w-100">
                                <div class="logo">
                                    <!--<h1>-->
                                    <a href="/" title="The BIM Engineers" style="margin-bottom:1.1rem" class="mb-0">
                                        <img class="img-fluid" src="https://thebimengineers.com/images/logo.png" srcset="https://thebimengineers.com/images/logo.png" alt="The BIM Engineers" style="width: 85%;"></a>
                                    <!--</h1>-->
                                </div>
                                <!-- Logo -->

                                <!--<div class="pt-4">-->
                                <!--  <p class="text-white"><strong>The Netherlands HQ</strong></p>-->
                                <!--<div>-->
                                <!--<a href="tel:+31 088 730 49 90"><p> +31 088 730 49 90 </a> <br> <a href="mailto:info@thebimengineers.com" style="font-size: 15px;"> info@thebimengineers.com</p></a>-->

                                <!--</div>-->
                                <!--<h3 class="widget-title">Company Info</h3>-->
                                <!--<p>-->

                                <!--Ir. B.P.G. van Diggelenkade 11 -->
                                <!--8267 AC Kampen-->
                                <!--</p>-->
                                <!--</div>--><br><br>

                                <div class="scl-links d-flex flex-wrap w-100">
                                    <a href="https://www.facebook.com/thebimengineers" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.instagram.com/thebimengineers/" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    <a href="https://www.linkedin.com/company/10448248/admin/" title="LinkedIn" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="https://www.youtube.com/channel/UCox2mBbBIbZIdaXgAzTjeiw/featured" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title">Contacts</h3>

                                <!--<div>-->
                                <!--	<p class="text-white"><strong> Netherlands HQ</strong></p>-->
                                <!--	<div>-->
                                <!--		<a href="tel:+31 088 730 49 90"><p> +31 088 730 49 90 </a> <br> <a href="mailto:info@thebimengineers.com" style="font-size: 15px;"> info@thebimengineers.com</p></a>-->

                                <!--	</div>-->
                                <!--</div>-->
                                <div>
                                    <p class="text-white"><strong> India, Gurgaon HQ</strong></p>
                                    <div>
                                        <a href="tel:+91 88 103 60478">
                                            <p> +91 88 103 60478
                                        </a>

                                        <br><a href="/cdn-cgi/l/email-protection#523b3c363b3312263a37303b3f373c353b3c373720217c313d3f" style="font-size: 15px;"> <span class="__cf_email__" data-cfemail="b8d1d6dcd1d9f8ccd0dddad1d5ddd6dfd1d6ddddcacb96dbd7d5">[email&#160;protected]</span></p></a>

                                    </div>
                                    <p>
                                        Building No.30, Sector 32, Gurgaon 122001 Delhi NCR/Haryana
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title"></h3>
                                <div style="padding-top: 30px;">
                                    <p class="text-white"><strong> India, Chennai</strong></p>
                                    <div>
                                        <p>Mount Tower, 2/4A, Mount Poonamallee Rd, Ramapuram, Chennai, Tamil Nadu 600089</p>



                                    </div>
                                </div>



                                <!--<div>-->
                                <!--<p class="text-white"><strong> United Kingdom</strong></p>
								<!--<div>-->
                                <!--<a href="tel:+44 7895 380914"><p> +44 7895 380914 </a>-->
                                <!--<br><a href="mailto:lagbede@thebimengineers.com" style="font-size: 15px;"> uk@thebimengineers.com</p></a>-->
                                <!--</div>-->
                                <!--</div>-->

                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-3">
                            <div class="widget-box w-100">
                                <h3 class="widget-title"></h3>
                                <div style="padding-top: 30px;">
                                    <p class="text-white"><strong> USA</strong></p>
                                    <div>

                                        <a href="/cdn-cgi/l/email-protection#d0a5a3b190a4b8b5b2b9bdb5beb7b9beb5b5a2a3feb3bfbd" style="font-size: 15px; color:#bbbbbc;"> <span class="__cf_email__" data-cfemail="106563715064787572797d757e77797e757562633e737f7d">[email&#160;protected]</span> </a>
                                        <br>
                                        <p>The BIM Engineers USA<br> Suite 900, 1999 Bryan Street Dallas, TX, USA</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-lg-1">
                            <div class="widget-box w-100">
                                <h3 class="widget-title">Links</h3>
                                <ul class="mb-0 list-unstyled w-100">
                                    <li><a href="https://thebimengineers.com/about-tbe" title="About">About</a></li>
                                    <li><a href="/services/bim-vdc" title="Services">Services</a></li>
                                    <li><a href="/projects" title="Projects">Projects</a></li>
                                    <li><a href="/videos" title="Videos">Videos</a></li>
                                    <!--<li><a href="#" title="News & Insights">News & Insights</a></li>-->
                                    <li><a href="/career" title="Career">Career</a></li>
                                    <li><a href="/contact" title="Contact">Contact</a></li>
                                    <li><a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Data -->
            </div>
        </div>

    </footer>
    <!-- Footer -->
    <div class="copyright bg-color1 w-100">
        <div class="container">
            <div class="copyright-inner d-flex flex-wrap justify-content-between align-items-center w-100">
                <p class="mb-0">Copyright &copy; 2024 <a href="/" title="Inspire">The BIM Engineers</a>. All Rights Reserved | Design & Developed by <a href="https://prettifycreative.com" target="_blank" rel="noopener noreferrer">Prettify Creative</a> </p>
                <!--<ul class="d-inline-flex flex-wrap mb-0 list-unstyled">-->
                <!--	<li><a href="javascript:void(0);" title="Terms of use">Terms of use</a></li>-->
                <!--	<li><a href="javascript:void(0);" title="Privacy Environmental Policy">Privacy Environmental Policy</a></li>-->
                <!--</ul>-->
            </div>
        </div>
    </div>
    <!-- Copyright -->

    </main>
    <!-- Main Wrapper -->

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!--<script src="https://thebimengineers.com/js/popper.min.js"></script>-->
    <script src="https://thebimengineers.com/js/bootstrap.min.js"></script>
    <script src="https://thebimengineers.com/js/wow.min.js"></script>
    <script src="https://thebimengineers.com/js/counterup.min.js"></script>
    <script src="https://thebimengineers.com/js/jquery.fancybox.min.js"></script>
    <script src="https://thebimengineers.com/js/jquery.bootstrap-touchspin.min.js"></script>
    <script src="https://thebimengineers.com/js/nouislider.min.js"></script>
    <!--<script src="https://thebimengineers.com/js/perfect-scrollbar.min.js"></script>-->
    <script src="https://thebimengineers.com/js/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


    <script src="https://thebimengineers.com/js/custom-scripts.js"></script>






    <script>
        AOS.init({
            duration: 1000,
        });
    </script>

    <script>
        function reveal() {
            var reveals = document.querySelectorAll(".case-box");

            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;

                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                } else {
                    reveals[i].classList.remove("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);
    </script>
    <script>
        function send(formdata) {
            let data = JSON.stringify(formdata);




            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                'url': 'https://thebimengineers.com/client/query',
                'type': 'POST',
                'dataType': 'json',
                'data': data,
            }).done(function(response) {
                console.log(response)
                // swal({   
                //     title: "Your query has been recorded",   
                //     text: "we'll revert you within 48 hours",   
                //     type: "success",   

                //     confirmButtonColor: "#0ab9e8",   
                //     confirmButtonText: "Ok",   

                //     closeOnConfirm: true });

            }).fail(function(xhr, ajaxOps, error) {
                console.log('Failed: ' + error);
            });
        }

        let formdata = {};
        let uid = document.getElementById('uid');
        formdata['uid'] = uid.value;
        let form = document.getElementById('stepform');
        let element = form.getElementsByClassName('step')[0];

        let btn = form.getElementsByClassName('btn')[0];
        let step = form.getElementsByClassName('formstep')[0];
        let steps = form.getElementsByClassName('formsteps')[0];

        btn.addEventListener('click', (event) => {

            event.preventDefault();

            if (element.value !== '') {
                if (element.name == 'name') {

                    formdata['name'] = element.value;

                    steps.style.display = 'block';
                    element.value = '';
                    element.placeholder = "Please Enter Email";
                    element.name = "email";
                    element.type = "email";
                    step.innerHTML = "2";

                } else if (element.name == 'email') {

                    formdata['email'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Phone Number";
                    element.name = "phone";
                    element.type = "Number";
                    step.innerHTML = "3";

                } else if (element.name == 'phone') {

                    formdata['phone'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Project Details";
                    element.name = "message";
                    element.type = "text";
                    btn.innerHTML = "Submit";
                    step.innerHTML = "4";


                } else {

                    formdata['message'] = element.value;

                    element.value = '';
                    element.placeholder = "Please Enter Name";
                    element.name = "name";
                    element.type = "text";
                    btn.innerHTML = "Next";
                    step.innerHTML = "1";
                    steps.style.display = 'none';


                }

                //setTimeout(send, 18000, formdata);
                send(formdata);
            } else {
                alert('input field can not be null')
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            toastr.options.timeOut = 10000;
        });
    </script>



    <script>
        let form = document.getElementById('filterForm');
        let elements = form.getElementsByTagName('select');
        Array.from(elements).forEach(element =>
            element.addEventListener('change', () => {
                let value = element.value;
                form.submit()
            })
        )
    </script>
</body>

</html>