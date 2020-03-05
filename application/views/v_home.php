<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- slider_area_start -->
<div class="slider_area">
	<div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
		<div class="container">
			<div class="row align-items-center justify-content-start">
				<div class="col-lg-10 col-md-10">
					<div class="slider_text">
						<h3 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s">
							Selamat Datang di Official Website OPSD | ILCS
						</h3>
						<!-- <a class="boxed-btn3 wow fadeInLeft"  data-wow-duration="1s" data-wow-delay=".2s" href="portfolio.html">Visit Our Works</a> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- slider_area_end -->

<div class="about_area" id="about_area">
	<div class="container">
		<div class="row justify-content-end">
			<div class="col-lg-5 offset-lg-1">
				<div class="about_info">
					<div class="section_title white_text">
						<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">Tentang Kami</h3>
						<span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Operasional Aplikasi, Database, Platform dan Infrastruktur untuk Mendukung Service ILCS yang Excelent</span>
						<div id="about_us">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- service_area  -->
<div class="service_area" id="service_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section_title text-center mb-70">
					<h3 class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".2s">Aplikasi Pendukung</h3>
				</div>
			</div>
		</div>
		<div class="row" id="show_apps">

		</div>
	</div>
</div>
<!--/ service_area  -->

<!-- team_member_start -->
<div class="team_area" id="team_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section_title text-center mb-90">
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Tim Kami</h3>
				</div>
			</div>
		</div>
		<div class="row" id="show_manager">
			
		</div>

		<div class="row" id="show_manager1">
			
		</div>
	</div>
</div>
<!--/ team_member_end -->

<!-- portfolio_image_area  -->
<div class="portfolio_image_area" id="portfolio_image_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section_title text-center mb-90">
					<h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Employee Of The Month</h3>
				</div>
			</div>
		</div>
		<div class="row" id="show_best_employee">
			
		</div>
	</div>
</div>
<!--/ portfolio_image_area  -->

<!-- testimonial_area  -->
<div class="testimonial_area ">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="testmonial_active owl-carousel">
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="<?php echo base_url();?>assets/img/testmonial/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
								sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
							Fusce ac mattis nulla. Morbi eget ornare dui. </p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="<?php echo base_url();?>assets/img/testmonial/thumb.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="<?php echo base_url();?>assets/img/testmonial/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
								sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
							Fusce ac mattis nulla. Morbi eget ornare dui. </p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="<?php echo base_url();?>assets/img/testmonial/thumb.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
					<div class="single_carousel">
						<div class="single_testmonial text-center">
							<div class="quote">
								<img src="<?php echo base_url();?>assets/img/testmonial/quote.svg" alt="">
							</div>
							<p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br> 
								sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.  <br>
							Fusce ac mattis nulla. Morbi eget ornare dui. </p>
							<div class="testmonial_author">
								<div class="thumb">
									<img src="<?php echo base_url();?>assets/img/testmonial/thumb.png" alt="">
								</div>
								<h3>Robert Thomson</h3>
								<span>Business Owner</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /testimonial_area  -->
<script type="text/javascript">
	show_apps();
	show_manager();
	show_about();
	show_best_employee();
	function show_apps(){

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>home/support_apps',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += 
					'<div class="col-xl-4 col-md-4">'+
					'<div class="single_service text-center wow fadeInRight" data-wow-duration="1.2s" data-wow-delay=".4s">'+
					'<div class="icon">'+
					'<img src="<?php echo base_url();?>assets/img/svg_icon/3.svg" alt="">'+
					'</div>'+
					'<br>'+
					'<h4>'+'<a href="'+data[i].link+'">'+data[i].nama_apps+'</a></h4>'+
					'<p>'+data[i].deskripsi+'</p>'+
					'</div>'+
					'</div>';

				}
				$('#show_apps').html(html);
			}
		});
	}

	function show_about(){

		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>home/about_us',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var html = '';
				var i;
				for(i=0; i<data.length; i++){
					html += 
					'<p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".10s">'+data[i].about_us+'</p>';

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
				var show_manager = '';
				var show_manager1 = '';
				var i;
				for(i=0; i<data.length; i++){
					if (data[i].id_jabatan == '1') {
						show_manager += 
						'<div class="col-lg-4 col-md-6">'+
						'</div>'+
						'<div class="col-lg-4 col-md-6">'+
						'<div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">'+
						'<div class="team_thumb">'+
						'<img src="<?php echo base_url();?>assets/img/team/2.png" alt="">'+
						'</div>'+
						'<div class="team_title text-center">'+
						'<h3>'+data[i].nama+'</h3>'+
						'<p>'+data[i].nama_divisi+'</p>'+
						'</div>'+
						'</div>'+
						'</div>'+
						'<div class="col-lg-4 col-md-6">'+
						'</div>';
					} 
					if (data[i].id_jabatan == '2') {
						show_manager1 += 
						'<div class="col-lg-3 col-md-6">'+
						'<div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'+
						'<div class="team_thumb">'+
						'<img src="<?php echo base_url();?>assets/img/team/1.png" alt="">'+
						'</div>'+
						'<div class="team_title text-center">'+
						'<h3>'+data[i].nama+'</h3>'+
						'<p>'+data[i].nama_jabatan+' '+data[i].nama_divisi+'</p>'+
						'</div>'+
						'</div>'+
						'</div>';
					}
				}
				$('#show_manager').html(show_manager);
				$('#show_manager1').html(show_manager1);
			}
		});
	}
	function show_best_employee(){
		$.ajax({
			type    : 'ajax',
			url     : '<?php echo base_url();?>home/show_best_employee',
			async   : false,
			dataType    : 'json',
			success : function(data){
				var show_best_employee = '';
				var i;
				for(i=0; i<data.length; i++){
					show_best_employee += 
					'<div class="col-lg-3 col-md-6">'+
						'<div class="single_team wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">'+
							'<div class="team_thumb">'+
								'<img src="<?php echo base_url();?>assets/img/team/1.png" alt="">'+
							'</div>'+
							'<div class="team_title text-center">'+
								'<h3>'+data[i].nama+'</h3>'+
								'<h4>'+data[i].divisi+'</h4>'+
								'<p>'+data[i].pesan+'</p>'+
							'</div>'+
						'</div>'+
					'</div>';
				}
				$('#show_best_employee').html(show_best_employee);
			}
		});
	}
</script>