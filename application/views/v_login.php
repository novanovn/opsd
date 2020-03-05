<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login | OPSD</title>
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
</head>

<body>
	<div data-scroll-index="0" class="get_in_tauch_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section_title text-center mb-90">
						<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Login</h3>
						<a href="<?php echo base_url();?>"><p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">OPSD</p></a>
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="touch_form">
						<form action="<?php echo base_url('login/do_login');?>" method="post">
							<div class="row">
								<div class="col-md-6">
									<div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
										<input type="text" placeholder="Username" name="username" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="single_input wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
										<input type="password" placeholder="Password" name="password" required>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="submit_btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
										<button class="boxed-btn3" type="submit">Login</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>