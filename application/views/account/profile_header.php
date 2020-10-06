<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Sogko Propertiese</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/favicon.ico">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/revolution/css/settings.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/revolution/css/layers.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/revolution/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/search.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/lightcase.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl-carousel.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/menu.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/styles.css">
    <link rel="stylesheet" id="color" href="<?php echo base_url(); ?>assets/css/default.css">
</head>
<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="<?php echo base_url(); ?>assets/images/logo.svg" alt=""></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                <li>
                                    <a href="<?php echo base_url(); ?>home">Home</a>
                                </li>
                                <li><a href="#">For Sale</a>
                                    <ul>
                                        <li><a href="<?php echo base_url(); ?>sale/flats-apartment">Flats and Apartments</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>sale/land">Land</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>sale/houses">Houses</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>sale/commercial-properties">Commercial Properties</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">To Rent</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>rent/affordable-rentals">Affordable Rentals</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>rent/flats-apartment">Flats and Appartment</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>rent/houses">Houses</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>rent/commercial-properties">Commercial Properties</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>rent/bedsitter">Bedsitters</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Advice</a>
                                        <ul>
                                            <li><a href="<?php echo base_url(); ?>advice/blog">Blog</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>advice/places">Places</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>advice/ideas">Ideas</a>
                                            </li>
                                        </ul>
                                    </li>
                                     <li><a href="#">New Projects</a>
                                        <ul>
                                           <li><a href="<?php echo base_url(); ?>projects/residential">Residential</a>
                                            </li>
                                            <li><a href="<?php echo base_url(); ?>projects/commercial">Commercial</a>
                                            </li>
                                        </ul>
                                    </li>
                                     <li><a href="<?php echo base_url(); ?>addproperty/add-property">Add Property</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / End -->
                        <div class="right-side hidden-lg-down">
                            <!-- Header Widget -->
                            <div class="header-widget">
                                <a href="submit-property.html" class="button border"><i class="fas fa-plus mr-2"></i>Create Listing</a>
                            </div>
                            <!-- Header Widget / End -->
                        </div>
                        <!-- Right Side Content / End -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <span><img src="<?php echo base_url(); ?>assets/images/testimonials/ts-1.jpg" alt=""></span>Hi, Mary!
                            </div>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>account/my-profile"> Edit profile</a></li>
                                <li><a href="<?php echo base_url(); ?>addproperty/add-property"> Add Property</a></li>
                                <li><a href="<?php echo base_url(); ?>account/payment">  Payments</a></li>
                                <li><a href="<?php echo base_url(); ?>account/change-password"> Change Password</a></li>
                                <li><a href="<?php echo base_url('Home/logout'); ?>">Log Out</a></li>
                            </ul>
                        </div>                         
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
      <div class="clearfix"></div>
        <!-- Header Container / End -->
        
        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
