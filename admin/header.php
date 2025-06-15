<?php
session_start();
require_once("database.php");
if(!isset($_SESSION['email'])){
    echo "<script>location.href='index.php'</script>";
}
require_once("header.php");
$query="SELECT * FROM `logo`";
$data=db::getRecord($query);
?>
<!DOCTYPE html>
<html lang="en" data-menu="vertical" data-nav-size="nav-default">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Party Night Club</title>

    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="assets/vendor/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="assets/vendor/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/vendor/css/daterangepicker.css">
    <link rel="stylesheet" href="assets/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" id="primaryColor" href="assets/css/blue-color.css">
    <link rel="stylesheet" id="rtlStyle" href="#">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>
<style>
.form-control {
    height: 70px !important;
}

body {
    font-family: "Jost", sans-serif !important;

}
</style>

<body class="body-padding body-p-top light-theme">
    <!-- preloader start -->
    <div class="preloader d-none">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header start -->
    <div class="header">
        <div class="row g-0 align-items-center" style="background:white;">
            <div class="col-xxl-6 col-xl-5 col-4 d-flex align-items-center gap-20">
                <div class="main-logo d-lg-block d-none">
                    <div class="logo-big">
                        <a href="dashboard.php">
                            <img src="uploads/<?php echo $data['image']; ?>" style="width:50px;">
                        </a>
                    </div>
                    <div class="logo-small">
                        <a href="dashboard.php">
                            <a href="dashboard.php">
                                <img src="uploads/<?php echo $data['image']; ?>" style="width:50px;">
                            </a>
                        </a>
                    </div>
                </div>
                <div class="nav-close-btn">
                    <button id="navClose"><i class="fa-light fa-bars-sort"></i></button>
                </div>
            </div>
            <div class="col-4 d-lg-none">
                <div class="mobile-logo">
                    <a href="index.php">
                        <img src="uploads/<?php echo $data['image']; ?>" style="width:50px !important;">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-4">
                <div class="header-right-btns d-flex justify-content-end align-items-center">
                    <div class="header-collapse-group">
                        <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                            <form class="header-form">
                                <input type="search" name="search" placeholder="Search..." required>
                                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            </form>
                            <div class="header-right-btns d-flex justify-content-end align-items-center p-0">
                                <button class="header-btn fullscreen-btn" id="btnFullscreen"><i
                                        class="fa-light fa-expand"></i></button>
                            </div>
                        </div>
                    </div>
                    <button class="header-btn header-collapse-group-btn d-lg-none"><i
                            class="fa-light fa-ellipsis-vertical"></i></button>
                    <div class="header-btn-box profile-btn-box">
                        <button class="profile-btn" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/admin.png" alt="image">
                        </button>
                        <ul class="dropdown-menu profile-dropdown-menu">
                            <li>
                                <div class="dropdown-txt text-center">
                                    <p class="mb-0">Shaikh Abu Dardah</p>
                                    <span class="d-block">Web Developer</span>

                                </div>
                            </li>
                            <li><a class="dropdown-item" href="profile.php"><span class="dropdown-icon"><i
                                            class="fa-regular fa-circle-user"></i></span> Profile</a></li>

                            <li><a class="dropdown-item" href="action.php?logout=1"><span class="dropdown-icon"><i
                                            class="fa-regular fa-arrow-right-from-bracket"></i></span> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header end -->