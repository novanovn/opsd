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
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
      }

      td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
      }

      tr:nth-child(even) {
          background-color: #dddddd;
      }
  </style>
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
        					</div>
        					<div class="col-lg-2 d-none d-lg-block">
                                <?php 
                                if(!isset($_SESSION['logged_in']['username'])){                               
                                echo '<div class="log_chat_area d-flex align-items-end"><a href='.base_url("login").' class="say_hi">Login</a></div>';
                            } else {
                            echo '<div class="main-menu  d-none d-lg-block text-center">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="javascript:;">'.$_SESSION["logged_in"]["nama"].'<i class="ti-angle-down say_hi"></i></a>
                                            <ul class="submenu">
                                                <li><a href='.base_url("menu").'>Menu</a></li>
                                                <li><a href='.base_url("login/do_logout").'>Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>';
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

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Web Manager</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /bradcam_area  -->

<!-- Start Align Area -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <h3 class="mb-30">About Us / Tentang Kami</h3>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Deskripsi</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="about_us">

                </tbody>
            </table>
        </div>
        <div class="section-top-border">
            <h3 class="mb-30">Aplikasi Pendukung</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Link</th>
                        <th>Show</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="show_apps">

                </tbody>
            </table>
        </div>
        <div class="section-top-border">
            <h3 class="mb-30">Tim Kami</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Jabatan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="show_manager">

                </tbody>
            </table>
        </div>
        <div class="section-top-border">
            <h3 class="mb-30">Employee Of The Month</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Divisi</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Pesan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="show_best_employee">

                </tbody>
            </table>
        </div>
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Form Element</h3>
                    <form action="#">
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="First Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required
                            class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                            class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="last_name" placeholder="Last Name"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required
                            class="single-input">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="EMAIL" placeholder="Email address"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required
                            class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Address'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select>
                                    <option value=" 1">City</option>
                                    <option value="1">Dhaka</option>
                                    <option value="1">Dilli</option>
                                    <option value="1">Newyork</option>
                                    <option value="1">Islamabad</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <div class="form-select" id="default-select">
                                <select>
                                    <option value="1">Country</option>
                                    <option value="1">Bangladesh</option>
                                    <option value="1">India</option>
                                    <option value="1">England</option>
                                    <option value="1">Srilanka</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-10">
                            <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Message'" required></textarea>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Primary color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
                            class="single-input-primary">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Accent color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
                            class="single-input-accent">
                        </div>
                        <div class="mt-10">
                            <input type="text" name="first_name" placeholder="Secondary color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
                            required class="single-input-secondary">
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">
                        <h3 class="mb-30">Switches</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample Switch</p>
                            <div class="primary-switch">
                                <input type="checkbox" id="default-switch">
                                <label for="default-switch"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color Switch</p>
                            <div class="primary-switch">
                                <input type="checkbox" id="primary-switch" checked>
                                <label for="primary-switch"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color Switch</p>
                            <div class="confirm-switch">
                                <input type="checkbox" id="confirm-switch" checked>
                                <label for="confirm-switch"></label>
                            </div>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Selectboxes</h3>
                        <div class="default-select" id="default-select">
                            <select>
                                <option value=" 1">English</option>
                                <option value="1">Spanish</option>
                                <option value="1">Arabic</option>
                                <option value="1">Portuguise</option>
                                <option value="1">Bengali</option>
                            </select>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Checkboxes</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample Checkbox</p>
                            <div class="primary-checkbox">
                                <input type="checkbox" id="default-checkbox">
                                <label for="default-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color Checkbox</p>
                            <div class="primary-checkbox">
                                <input type="checkbox" id="primary-checkbox" checked>
                                <label for="primary-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color Checkbox</p>
                            <div class="confirm-checkbox">
                                <input type="checkbox" id="confirm-checkbox">
                                <label for="confirm-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>04. Disabled Checkbox</p>
                            <div class="disabled-checkbox">
                                <input type="checkbox" id="disabled-checkbox" disabled>
                                <label for="disabled-checkbox"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>05. Disabled Checkbox active</p>
                            <div class="disabled-checkbox">
                                <input type="checkbox" id="disabled-checkbox-active" checked disabled>
                                <label for="disabled-checkbox-active"></label>
                            </div>
                        </div>
                    </div>
                    <div class="single-element-widget mt-30">
                        <h3 class="mb-30">Radios</h3>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>01. Sample radio</p>
                            <div class="primary-radio">
                                <input type="checkbox" id="default-radio">
                                <label for="default-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>02. Primary Color radio</p>
                            <div class="primary-radio">
                                <input type="checkbox" id="primary-radio" checked>
                                <label for="primary-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>03. Confirm Color radio</p>
                            <div class="confirm-radio">
                                <input type="checkbox" id="confirm-radio" checked>
                                <label for="confirm-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>04. Disabled radio</p>
                            <div class="disabled-radio">
                                <input type="checkbox" id="disabled-radio" disabled>
                                <label for="disabled-radio"></label>
                            </div>
                        </div>
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>05. Disabled radio active</p>
                            <div class="disabled-radio">
                                <input type="checkbox" id="disabled-radio-active" checked disabled>
                                <label for="disabled-radio-active"></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Align Area -->

<script type="text/javascript">
    show_apps();
    show_manager();
    show_about();
    show_best_employee();
    function show_apps(){

        $.ajax({
            type    : 'ajax',
            url     : '<?php echo base_url();?>home/support_apps1',
            async   : false,
            dataType    : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html +=
                    '<tr>'+
                        '<td>'+data[i].nama_apps+'</td>'+
                        '<td>'+data[i].deskripsi+'</td>'+
                        '<td><a href="'+data[i].link+'">'+data[i].link+'</a></td>'+
                        '<td>'+data[i].show_apps+'</td>'+
                        '<td>Germany</td>'+
                    '</tr>';

                }
                $('#show_apps').html(html);
            }
        });
    }

    function show_about(){

        $.ajax({
            type    : 'ajax',
            url     : '<?php echo base_url();?>home/about_us1',
            async   : false,
            dataType    : 'json',
            success : function(data){
                var html = '';
                var i;
                var angka = 1;
                for(i=0; i<data.length; i++){
                    html += 
                    '<tr>'+
                        '<td>'+angka+'</td>'+
                        '<td>'+data[i].about_us+'</td>'+
                        '<td>'+data[i].active+'</td>'+
                        '<td>Tombol</td>'+
                    '</tr>';
                    angka++;

                }
                $('#about_us').html(html);
            }
        });
    }

    function show_manager(){
        $.ajax({
            type    : 'ajax',
            url     : '<?php echo base_url();?>home/show_manager',
            async   : false,
            dataType    : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html +=
                    '<tr>'+
                        '<td>'+data[i].nama+'</td>'+
                        '<td>'+data[i].nama_divisi+'</td>'+
                        '<td>'+data[i].nama_jabatan+'</td>'+
                        '<td>Germany</td>'+
                    '</tr>';
                }
                $('#show_manager').html(html);
            }
        });
    }
    function show_best_employee(){
        $.ajax({
            type    : 'ajax',
            url     : '<?php echo base_url();?>home/show_best_employee1',
            async   : false,
            dataType    : 'json',
            success : function(data){
                var show_best_employee = '';
                var i;
                for(i=0; i<data.length; i++){
                    show_best_employee += 
                    '<tr>'+
                        '<td>'+data[i].nama+'</td>'+
                        '<td>'+data[i].divisi+'</td>'+
                        '<td>'+data[i].bulan+'</td>'+
                        '<td>'+data[i].tahun+'</td>'+
                        '<td>'+data[i].pesan+'</td>'+
                        '<td>Germany</td>'+
                    '</tr>';
                }
                $('#show_best_employee').html(show_best_employee);
            }
        });
    }
</script>