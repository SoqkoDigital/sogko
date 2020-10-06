
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Topbar -->
            <div class="header-top">
                <div class="container">
                    <div class="top-info hidden-sm-down">
                    </div>
                    <div class="top-social hidden-sm-down ">
                        <?php if($this->session->userdata('msg')!="logged_in"): ?>
                        <div class="login-wrap">
                            <ul class="d-flex">
                                <li><a href="<?php echo base_url(); ?>register"><i class="fa fa-sign-in"></i> Register</a> <span class="vertical-mline"></span></li>
                                <li><a href="<?php echo base_url(); ?>signin"><i class="fa fa-user"></i> Login</a> <span class="vertical-mline"></span> </li>
                            </ul>
                        </div>
                        <?php elseif($this->session->userdata('msg')=="logged_in"): ?>
                         <div class="dropdown">
                              <button class="btn-dropdown  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 My Account
                              </button>
                              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo base_url(); ?>account/my-requests">Requests</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>account/favourites">Favourites</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>account/my-properties">My Properties</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>account/my-profile">My Profile</a> 
                                <a class="dropdown-item" href="<?php echo base_url(); ?>account/my-profile">Account Setting</a> 
                                <a class="dropdown-item" href="<?php echo base_url('Home/logout'); ?>">Log out</a> 
                              </div>
                        </div>
                        <?php endif; ?>
                        <div class="dropdown">
                            <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">
                                <img src="<?php echo base_url(); ?>assets/images/en.png" alt="lang" /> English
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                                <li><img src="<?php echo base_url(); ?>assets/images/fr.png" alt="lang" />France</li>
                                <li><img src="<?php echo base_url(); ?>assets/images/de.png" alt="lang" /> German</li>
                                <li><img src="<?php echo base_url(); ?>assets/images/it.png" alt="lang" />Italy</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- Topbar / End -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="<?php echo base_url(); ?>home"><img src="<?php echo base_url(); ?>assets/images/logo.svg" alt=""></a>
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
                </div>
            </div>
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->