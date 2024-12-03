 <!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	
<!-- Mirrored from jthemes.net/themes/html/medservices/files/all-departments.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:26 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="MedService - Medical & Medical Health Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">

				
  		<!-- SITE TITLE -->
		<title>Departments</title>
							
		@include('website.layouts.header')
	
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
					
	</head>




	<body>
		
		<div id="page" class="page">
			@include('website.layouts.nav')

			 <div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Our Departments</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Our Departments</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<section id="about-5" class="pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{url('website/images/ceo.png')}}" alt="about-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id blue-color">Welcome to Farhat Hospital Sahiwal</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Complete Medical Solutions in One Place</h3>

								<!-- Text -->
								<p style="text-align: justify; line-height: 1.6; margin: 20px;">
									Welcome to Farhat Hospital, your premier private healthcare facility in Sahiwal. Founded in 2019 with a vision to deliver top-tier medical care in a comfortable and supportive environment, we offer a wide range of specialized services tailored to meet the unique needs of our patients. Our state-of-the-art facility features cutting-edge technology and a highly skilled team of medical professionals dedicated to providing personalized care. At Farhat Hospital, we combine advanced medical treatments with exceptional patient service to ensure the highest standards of health and well-being. We are proud to serve the Sahiwal community, offering a sanctuary of care where your health is our utmost priority.
								</p>
								
								<!-- Singnature -->
								<div class="singnature mt-35">

									<!-- Text -->
									<p class="p-small mb-15">Ms. Aasia Saeed Chief Executive Officer</p>

									<!-- Singnature Image -->
									<!-- Recommended sizes for Retina Ready displays is 400x68px; -->
									<img class="img-fluid" src="{{url('website/images/signature.png')}}" width="200" height="34" alt="signature-image" />	

								</div>

							</div>
						</div>	<!-- END TEXT BLOCK -->	

						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-5 -->




			<!-- SERVICES-7
			============================================= -->
			<section id="services-7" class="bg-lightgrey wide-70 servicess-section division">
				<div class="container">
					<div class="row">


						<!-- SERVICE BOXES -->	
						<div class="col-lg-8">
							<div class="row">


								<!-- SERVICE BOX #1 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
			 							<a href="{{url('departmenttype')}}">

				 							<!-- Icon -->
											<span class="flaticon-083-stethoscope blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Gynacology</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Gynecology department offers expert women's care, including check-ups and treatments.
												</p>

											</div>

										</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #1 -->


			 					<!-- SERVICE BOX #2 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.6s">
			 							<a href="{{url('departmenttype')}}">

				 							<!-- Icon -->
											<span class="flaticon-047-head blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Pediatrics</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Pediatrics department offers expert children's care including check-ups and treatments.
												</p>

											</div>

				 						</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #2 -->


			 					<!-- SERVICE BOX #3 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
			 							<a href="{{('departmenttype')}}">

				 							<!-- Icon -->
											<span class="flaticon-015-blood-donation-1 blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Cardiology</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Cardiology department offers expert care for heart health and cardiovascular conditions.
												</p>

											</div>

				 						</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #3-->


			 					<!-- SERVICE BOX #4 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.6s">
			 							<a href="service-2.html">

				 							<!-- Icon -->
											<span class="flaticon-048-lungs blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Surgery</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Surgery department provides expert surgical care with a focus on precision and patient recovery.
												</p>

											</div>

				 						</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #4 -->


			 					<!-- SERVICE BOX #5 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
			 							<a href="service-1.html">

				 							<!-- Icon -->
											<span class="flaticon-060-cardiogram-4 blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Oncology</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Oncology department offers specialized care for cancer diagnosis,treatment,and support.
												</p>

											</div>

				 						</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #5 -->


			 					<!-- SERVICE BOX #6 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.6s">
			 							<a href="service-2.html">

				 							<!-- Icon -->
											<span class="flaticon-031-scanner blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Radiology</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Radiology department provides advanced imaging for diagnosis and treatment planning.
												</p>

											</div>

										</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #6 -->


			 					<!-- SERVICE BOX #7 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
			 							<a href="service-1.html">

				 							<!-- Icon -->
											<span class="flaticon-076-microscope blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Laboratory Services</h5>
													
												<!-- Text -->
												<p class="p-sm">Our Hospital's Laboratory Services offers precise testing and analysis for accurate diagnosis and treatment.
												</p>

											</div>

				 						</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #7 -->


			 					<!-- SERVICE BOX #8 -->
			 					<div class="col-md-6">
			 						<div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.6s">
			 							<a href="service-2.html">

				 							<!-- Icon -->
											<span class="flaticon-068-ambulance-3 blue-color"></span>

											<!-- Text -->
											<div class="sbox-7-txt">
				
												<!-- Title -->
												<h5 class="h5-sm steelblue-color">Emergency Help</h5>
													
												<!-- Text -->
												<p class="p-sm">
													Farhat Hospital's Emergency Help provides prompt and expert care for urgent medical situations.
												</p>

											</div>

										</a>
			 						</div>
			 					</div>  <!-- END SERVICE BOX #8 -->

			 					
	 						</div>
						</div>	<!-- END SERVICE BOXES -->	


						<!-- INFO TABLE -->
						<div class="col-lg-4">
							<div class="services-7-table blue-table mb-30 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Title -->
								<h4 class="h4-xs">Opening Hours:</h4>

								<!-- Text -->
								<p class="p-sm">General checkups
								</p>

								<!-- Table -->
								<table class="table">
									<tbody>
									    <tr>
									      	<td>Mon – Wed</td>
									      	<td> - </td>
									      	<td class="text-right">10:00 AM-10:00 PM</td>
									    </tr>
									    <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">10:00 AM-10:30 PM</td>
									    </tr>
									     <tr>
									      	<td>Friday-Saturday</td>
									      	<td> - </td>
									      	<td class="text-right">10:00 AM-10:00 PM</td>
									    </tr>
									    <tr class="last-tr">
									      	<td>Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr>
									  </tbody>
								</table>

								<!-- Title -->
								<h5 class="h5-sm">Need a personal health plan?</h5>

								<!-- Text -->
								<p class="p-sm">Opening hours for general checkups are available throughout the week from Monday to Saturday. The clinic remains closed on weekends.</p>

							</div>	
						</div>	<!-- END INFO TABLE -->

						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END SERVICES-7 -->




			<!-- BANNER-5
			============================================= -->
			<section id="banner-5" class="pt-100 banner-section division">
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Certified and Experienced Doctors</h3>	

							<!-- Text -->
							<p>
								Farhat Hospital's Certified and Experienced Doctors offer top-quality care, leveraging their extensive expertise. We ensure that each patient receives the best possible treatment and support.
							</p>
										
						</div> 
					</div>


					<!-- BANNER IMAGE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							<div class="banner-5-img wow fadeInUp" data-wow-delay="0.4s">
								<img class="img-fluid" src="{{url('website/images/image-07.png')}}" alt="banner-image" />
							</div>
						</div>
					</div>


				</div>	   	
			</section>	
		</div>	
		@include('website.layouts.footer')
		<script src="{{url('website/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{url('website/js/bootstrap.min.js')}}"></script>	
		<script src="{{url('website/js/modernizr.custom.js')}}"></script>
		<script src="{{url('website/js/jquery.easing.js')}}"></script>
		<script src="{{url('website/js/jquery.appear.js')}}"></script>
		<script src="{{url('website/js/jquery.stellar.min.js')}}"></script>	
		<script src="{{url('website/js/menu.js')}}"></script>
		<script src="{{url('website/js/sticky.js')}}"></script>
		<script src="{{url('website/js/jquery.scrollto.js')}}"></script>
		<script src="{{url('website/js/materialize.js')}}"></script>	
		<script src="{{url('website/js/owl.carousel.min.js')}}"></script>
		<script src="{{url('website/js/jquery.magnific-popup.min.js')}}"></script>	
		<script src="{{url('website/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{url('website/js/isotope.pkgd.min.js')}}"></script>
		<script src="{{url('website/js/hero-form.js')}}"></script>
		<script src="{{url('website/js/contact-form.js')}}"></script>
		<script src="{{url('website/js/comment-form.js')}}"></script>
		<script src="{{url('website/js/appointment-form.js')}}"></script>
		<script src="{{url('website/js/jquery.datetimepicker.full.js')}}"></script>		
		<script src="{{url('website/js/jquery.validate.min.js')}}"></script>	
		<script src="{{url('website/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{url('website/js/wow.js')}}"></script>
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
			}
		
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
			}
		</script>
		
		<!-- Custom Script -->		
		<script src="{{url('website/js/custom.js')}}"></script>
		
		
		<script> 
			new WOW().init();
		</script>
		
		
		
		<script src="{{url('website/js/changer.js')}}"></script>
		<script defer src="{{url('website/js/styleswitch.js')}}"></script>	
		<script src="//code.jivosite.com/widget/GOAa99DTuX" async></script>
		

	</body>
</html>	
