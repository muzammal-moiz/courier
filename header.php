<?php
require_once("admin/database.php");

$query="SELECT * from logo ";
$logo=db::getRecord($query);
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courier</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/fevicon.png">       -->
    <!-- CSS
      	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <!-- Flaticon -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- optico Icons -->
    <link rel="stylesheet" href="css/pbminfotech-base-icons.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Slick -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- Magnific -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- AOS -->
    <link rel="stylesheet" href="css/aos.css">
    <!-- Shortcode CSS -->
    <link rel="stylesheet" href="css/shortcode.css">
    <!-- Base CSS -->
    <link rel="stylesheet" href="css/base.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/rs6.css">

</head>

<body>

    <!-- page wrapper -->
    <div class="page-wrapper">

        <!-- Header Main Area -->
        <header class="site-header header-style-1">
            <div class="pbmit-header-overlay" style="background: #5ce1e6;">
                <div class="site-header-menu">
                    <div class="container-fluid">
                        <div class="pbmit-header-content d-flex align-items-center justify-content-between">
                            <div class="pbmit-logo-area">
                                <div class="site-branding pbmit-logo-area">
                                    <h1 class="site-title">
                                        <a href="index.php">
                                            <img class="logo-img" src="admin/uploads/<?php echo $logo['image']; ?>"
                                                alt="Logistbiz">
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <div class="site-navigation">
                                <nav class="main-menu navbar-expand-xl navbar-light">
                                    <div class="navbar-header">
                                        <!-- Toggle Button -->
                                        <button class="navbar-toggler" type="button">
                                            <i class="pbmit-base-icon-menu-1"></i>
                                        </button>
                                    </div>
                                    <div class="pbmit-mobile-menu-bg"></div>
                                    <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                                        <div class="pbmit-menu-wrap">
                                            <span class="closepanel">
                                                <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg"
                                                    width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                                                    <rect width="36" height="1" transform="translate(0.707) rotate(45)">
                                                    </rect>
                                                    <rect width="36" height="1"
                                                        transform="translate(0 25.456) rotate(-45)"></rect>
                                                </svg>
                                            </span>
                                            <ul class="navigation clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="services.php">Services</a></li>
                                                <li><a href="pricing.php">Pricing Plan</a></li>
                                                <li><a href="contact.php">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                            <div class="pbmit-right-box d-flex align-items-center">
                                <div class="pbmit-header-search-btn">
                                    <a href="#"><i class="pbmit-base-icon-search-1"></i></a>
                                </div>
                                <div class="pbmit-button-box">
                                    <a class="pbmit-btn" href="login.php">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- Header Main Area End Here -->