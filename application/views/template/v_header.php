<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>OPSD Official Web</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- <link rel="manifest" href="site.webmanifest"> -->
	<!-- Place favicon.ico in the root directory -->

	<!-- CSS here -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/gijgo.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/slicknav.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->

	<!-- JS here -->
	
	<script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/ajax-form.js"></script>
	<script src="<?php echo base_url();?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/scrollIt.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/nice-select.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/plugins.js"></script>
	<script src="<?php echo base_url();?>assets/js/gijgo.min.js"></script>

	<!--contact js-->
	<script src="<?php echo base_url();?>assets/js/contact.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.form.js"></script>
	<script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/mail-script.js"></script>

	<script src="<?php echo base_url();?>assets/js/main.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- header-start -->
        <header>
        	<div class="header-area ">
        		<div id="sticky-header" class="main-header-area">
        			<div class="container-fluid p-0">
        				<div class="row align-items-center no-gutters">
        					<div class="col-xl-2 col-lg-2">
        						<div class="logo-img">
        							<a href="<?php echo base_url();?>">
        								<img src="<?php echo base_url();?>assets/img/logo.png" alt=""> <!-- LOGO -->
        							</a>
        						</div>
        					</div>
        					<div class="col-xl-8 col-lg-8">
        						<div class="main-menu  d-none d-lg-block text-center">
        							<nav>
        								<ul id="navigation">
        									<li><a href="#about_area">Tentang Kami</a></li>
        									<li><a href="#service_area">Aplikasi Pendukung</a></li>
        									<li><a href="#team_area">Tim Kami<i class="ti-angle-down"></i></a>
        										<!-- <ul class="submenu">
        											<li><a href="portfolio_details.html">Struktur Organisasi</a></li>
        											<li><a href="about.html">Service & Delivery</a></li>
        											<li><a href="elements.html">O&M Network and Device</a></li>
        											<li><a href="elements.html">O&M Application Platform and Database</a></li>
        											<li><a href="elements.html">Customer Care</a></li>
        										</ul> -->
        									</li>
        									<li><a href="#portfolio_image_area">Best Employee</a></li>
        									<li><a href="#kontak">Kontak</a></li>
        								</ul>
        							</nav>
        						</div>
        					</div>
        					<div class="col-lg-2 d-none d-lg-block">
                                <?php 
                                if(!isset($_SESSION['logged_in']['username'])){                               
                                    echo '<div class="log_chat_area d-flex align-items-end"><a href='.base_url("login").' class="say_hi">Login</a></div>';
                                } else {
                                    echo '<div class="main-menu  d-none d-lg-block text-center">
                                        <nav>
                                        <ul id="navigation">
                                        <li><a href="#team_area">'.$_SESSION["logged_in"]["nama"].'<i class="ti-angle-down say_hi"></i></a>
                                            <ul class="submenu">
                                            <li><a href='.base_url("menu").'>Menu</a></li>
                                            <li><a href='.base_url("login/do_logout").'>Logout</a></li>
                                            </ul>
                                        </li></ul></nav></div>';
                                }?>
                                
                            </div>
                            <div class="col-12">
                              <div class="mobile_menu d-block d-lg-none"></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </header>
        <!-- header-end -->