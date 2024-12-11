


<!DOCTYPE html>

<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




<!-- Mirrored from jthemes.net/themes/html/medservices/files/demo-9.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:21 GMT -->
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="MedService - Medical & Medical Health Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Farhat Hospital</title>
		@include('website.layouts.header')
	
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		
</head>

<body >

  

		<!-- PRELOADER SPINNER
		============================================= -->	
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Hide loader after the page content has loaded
                var loaderWrapper = document.getElementById("loader-wrapper");
                loaderWrapper.style.display = "none";
            });
        </script>
            
		<div id="loader-wrapper">
            <div id="loader">
                <div class="loader-inner"></div>
            </div>
        </div>
    
		<!-- STYLE SWITCHER		
		============================================= -->	
		<div id="page" class="page">
		@include('website.layouts.nav')
		<section id="hero-2" class="hero-section division">
  
				<!-- SLIDER -->
				<div class="slider blue-nav">
			    	<ul class="slides">


				     	<!-- SLIDE #1 -->
				      	<li id="slide-1">

					        <!-- Background Image -->
				        	<img src="{{url('website/images/carousel/slide-1.png')}}" alt="slide-background">

							<!-- Image Caption -->
		       				<div class="caption d-flex align-items-center left-align">
		       					<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7">
		       								<div class="caption-txt">

						       					<!-- Title -->
						       					<h2 class="steelblue-color">We will help you <span class="blue-color">to become healthy</span></h2>

						       					<!-- Option Box #1 -->
												<div class="box-list">							
													<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
													<p class="p-md">We are committed to helping you achieve optimal health and well-being by offering personalized care and expert guidance. 
													</p>						
												</div>

												<!-- Option Box #2 -->
												<div class="box-list">	
													<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
													<p class="p-md">Our dedicated team of professionals will support you every step of the way, ensuring you receive the best possible treatment.</p>		
												</div>

												<!-- Option Box #3 -->
												<div class="box-list mb-15">	
													<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
													<p class="p-md">Your health journey is our priority, and we focus on delivering comprehensive solutions tailored to your unique needs.
													</p>		
												</div>
									          	
												<!-- Button -->
												<a href="about-us.html" class="btn btn-blue blue-hover">More About Clinic</a>

											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

					    </li>	<!-- END SLIDE #1 -->


				      	<!-- SLIDE #2 -->
				      	<li id="slide-2">

				        	<!-- Background Image -->
				        	<img src="{{url('website/images/slider/slide-2.jpg')}}" alt="slide-background">

							<!-- Image Caption -->
	        				<div class="caption d-flex align-items-center right-align">
	        					<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7 offset-md-3 offset-lg-5">
		       								<div class="caption-txt">

					        					<!-- Title -->
								         	 	<h2 class="steelblue-color"><span class="blue-color">Highest Quality</span> Medical Treatment</h2>
									          	
									          	<!-- Text -->
												<p class="p-md">We offer solutions to complex medical problems with a blend of advanced technology and expert care. 
													Our team of specialists is dedicated to diagnosing and treating challenging conditions, providing personalized treatment
													 plans that address your unique needs. Trust us to navigate even the most intricate health issues with precision and compassion.
												</p>

												<!-- Button -->
												{{-- <a href="all-departments.html" class="btn btn-blue blue-hover">Our Departments</a> --}}

											</div>	
				         				</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

				     	</li>	<!-- END SLIDE #2 -->


				     	<!-- SLIDE #3 -->
				      	<li id="slide-3">

				      		<!-- Background Image -->
				        	<img src="{{url('website/images/slider/slide-4.jpg')}}" alt="slide-background">

				        	<!-- Image Caption -->
		       			 	<div class="caption d-flex align-items-center left-align">
		       			 		<div class="container">
		       						<div class="row">
		       							<div class="col-md-9 col-lg-7">
		       								<div class="caption-txt white-color">

						       			 		<!-- Title -->
									        	<h2>Solutions to complex <span>medical problems</span></h2>

				                                <!-- CONTENT BOX #1 -->
												<div class="box-list">							
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p class="p-md">We specialize in solving complex medical issues with advanced technology and expert care.
														Our team is dedicated to providing precise diagnoses and effective treatments.
													</p>							
												</div>
													
												<!-- CONTENT BOX #2 -->
												<div class="box-list">							
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p class="p-md">Each patient receives a personalized approach tailored to their specific needs.
														We focus on creating customized treatment plans to address even the most challenging conditions.
														</p>							
												</div>
													
												<!-- CONTENT BOX #3 -->
												<div class="box-list">	
													<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
													<p class="p-md">Our commitment to both innovation and compassionate care ensures that we work towards
														the best possible outcomes for your health. Trust us to support you every step of the way.
													</p>				
												</div>

											</div>
					        			</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
					        </div>	<!-- End Image Caption -->

				     	</li>	

						 <li id="slide-3">

							<!-- Background Image -->
						  <img src="{{url('website/images/slider/slide-4.jpg')}}" alt="slide-background">

						  <!-- Image Caption -->
							  <div class="caption d-flex align-items-center left-align">
								  <div class="container">
									 <div class="row">
										 <div class="col-md-9 col-lg-7">
											 <div class="caption-txt white-color">

												  <!-- Title -->
											  <h2>Solutions to complex <span>medical problems</span></h2>

											  <!-- CONTENT BOX #1 -->
											  <div class="box-list">							
												  <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
												  <p class="p-md">Fringilla risus nec, luctus mauris orci auctor purus euismod 
													 pretium purus pretium ligula rutrum tempor sapien at pretium luctus ligula luctus
												  </p>							
											  </div>
												  
											  <!-- CONTENT BOX #2 -->
											  <div class="box-list">							
												  <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
												  <p class="p-md">Quaerat sodales sapien undo euismod purus a blandit pretium</p>							
											  </div>
												  
											  <!-- CONTENT BOX #3 -->
											  <div class="box-list">	
												  <div class="box-list-icon"><i class="fas fa-genderless"></i></div>
												  <p class="p-md">Nemo ipsam egestas volute turpis dolores ut aliquam quaerat 
													 sodales sapien undo pretium purus feugiat dolor impedit magna risus 
												  </p>				
											  </div>

										  </div>
									  </div>
								  </div>  <!-- End row -->
							  </div>  <!-- End container -->
						  </div>	<!-- End Image Caption -->

					   </li>	




						<!-- END SLIDE #3 -->

				    </ul>
			  	</div>	<!-- END SLIDER -->
				


			</section>
			




			<!-- ABOUT-4
			============================================= -->
			<section id="about-4" class="wide-60 about-section division">
				<div class="container">
					<div class="row">

						@foreach($indextops as $indextop)

						<!-- ABOUT BOX #1 -->
						<div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Image -->
								<img class="img-fluid" src="{{ asset('storage/' . $indextop->image) }}" alt="Index Top Image">
									
								<!-- Text -->
								<div class="abox-4-txt">

									<!-- Title -->
									<h5 class="h5-xs steelblue-color">{{ $indextop->name }}</h5>

									<!-- Text -->
									<p>{{ $indextop->discription }}
									</p>
								</div>

							</div>
						</div>
						@endforeach


						<!-- ABOUT BOX #2 -->
						{{-- <div class="col-lg-4">
							<div class="abox-4 mb-40 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Image -->
								<img class="img-fluid" src="{{url('website/images/emergency_help_800x600.jpg')}}" alt="about-image" />	
									
								<!-- Text -->
								<div class="abox-4-txt">

									<!-- Title -->
									<h5 class="h5-xs steelblue-color"><a href="#">Emergency Department</a></h5>

									<!-- Text -->
									<p>Our Emergency Department is equipped to handle urgent
										and life-threatening situations with speed and precision. Staffed by skilled
										professionals and outfitted with advanced technology
										 ,we focus on rapid assessment and treatment to stabilize patients and provide the best care in critical moments.
									</p>
								</div>

							</div>
						</div> --}}


						<!-- ABOUT BOX #3 -->
						<div class="col-lg-4">
							<div class="services-7-table blue-table mb-30 wow fadeInUp" data-wow-delay="0.6s">

								<!-- Title -->

								<h4 class="h4-xs">Opening Hours:</h4>

								<!-- Text -->
								<p class="p-sm">General checkups
								</p>

								<!-- Table -->
								<table class="table">
									@foreach($schedules as $row)

									<tbody>
									    <tr>
									      	<td>{{$row->day}}</td>
									      	<td> - </td>
									      	<td class="text-right">{{{$row->start_time}}}</td>
											  <td> - </td>
											  <td class="text-right">{{$row->end_time}}</td>
									    </tr>
										@endforeach

									    {{-- <tr>
									      	<td>Thursday</td>
									      	<td> - </td>
									      	<td class="text-right">10:00 AM-10:30 PM</td>
									    </tr> --}}
									     {{-- <tr>
									      	<td>Friday-Saturday</td>
									      	<td> - </td>
									      	<td class="text-right">10:00 AM-10:00 PM</td>
									    </tr> --}}
									    {{-- <tr class="last-tr">
									      	<td>Sun</td>
									      	<td>-</td>
									      	<td class="text-right">CLOSED</td>
									   	 </tr> --}}
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
			</section>	<!-- END ABOUT-4 -->
			<section id="services-3" class="bg-lightgrey wide-100 services-section division">
				<div class="container">
					<!-- SECTION TITLE -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1 section-title">
							<!-- Title -->
							<h4 class="h4-md steelblue-color">Total Health Care Solutions in One place</h4>
							<!-- Text -->
							<p>
								At our hospital, Total Health Care Solutions represents our commitment to delivering 
								exceptional medical care across all levels of treatment. We offer 
								a wide array of services, from preventive care and routine check-ups 
								to advanced diagnostics and specialized treatments
							</p>
						</div>
					</div>/
			
					<!-- SERVICES CONTENT -->
					<div class="row">
						<div class="col-md-12">
							<div class="owl-carousel owl-theme services-holder">
			                   
								<div class="sbox-3 icon-sm">
									<!-- Image -->
									<div class="sbox-3-icon" style="text-align: center; position: relative; display: inline-block;">
										<img src="{{url('website/images/icons1/icon10.png')}}" alt="Gynecology and Obstetrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%); transition: filter 0.3s;">
									</div>
									
									
									<!-- Title -->
									<h5 class="h5-xs steelblue-color">Gynecology and Obstetrics</h5>
									<!-- Text -->
									<p style="text-align: center;">
										We care for moms. Our team offers kind, personal support. We create a safe space for families. We work hard to give the best care for all moms.
									</p>
								</div>
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon15.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Pediatrics</h5>
									<p style="text-align:center;">
										We focus on kids' health.Our team provides kind, tailored care.We create a safe space for families.We work hard for the best care for all kids.
									</p>
									</div>

								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon-5.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Pediatrics and general surgery</h5>
									<p style="text-align: center">
										We focus on kids' health. Our team provides kind surgical care. We create a safe space for families. We work hard to give the best care for kids</p>
								    </div>

								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon3.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Neurology</h5>
									<p>We care for kids with neurological needs. Our team offers expert support.We create a safe space for families.We work hard to give the best care for all kids.</p>
								</div>

								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon12.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Orthopedics</h5>
									<p>We care for patients with orthopedic needs. Our team provides expert support. We create a safe space for families. We work hard to deliver the best care for all patients.</p>
								</div>

								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon16.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">surgery</h5>
									<p>Our surgery team delivers expert care with precision, ensuring a safe and supportive environment for patients and families. We focus on providing the best outcomes possible.</p>
								</div>
			
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon2.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Internal Medicines</h5>
									<p>We focus on kids' health.Our team provides kind, tailored care.We create a safe space for families.We work hard for the best care for all kids.</p>
								</div>
			
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon-4.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Physiotherapy</h5>
									<p>Our physiotherapy team specializes in tailored treatments to support patient recovery and strength. We focus on effective rehabilitation in a compassionate environment</p>
								</div>

                                <div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon13.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Psychology</h5>
									<p>Our psychology team offers compassionate support for mental health. We provide personalized therapy in a safe space, helping individuals navigate challenges and improve their well-being</p>
								</div>
											
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon6.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Cardiology</h5>
									<p>Our cardiology team specializes in diagnosing and treating heart-related conditions. We provide comprehensive care in a supportive environment</p>
								</div>
			
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon7.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Nutrition</h5>
									<p>Our nutrition team offers personalized guidance to support healthy eating habits. We focus on creating balanced meal plans that cater to individual needs</p>
								</div>
			
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon">
										<span class="flaticon-076-microscope"></span>
									</div>
									<h5 class="h5-xs steelblue-color">Laboratory Services</h5>
									<p>Our laboratory services deliver accurate testing to support patient diagnosis and treatment. With advanced technology and skilled professionals</p>
								</div>
			
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon">
										<span class="flaticon-068-ambulance-3"></span>
									</div>
									<h5 class="h5-xs steelblue-color">Emergency Help</h5>
									<p>
										Our emergency help team is available 24/7 to provide immediate care for urgent medical situations. With a focus on rapid response and expert treatment,</p>
								</div>
								
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon8.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Oncology</h5>
									<p>
										Our oncology team specializes in the diagnosis and treatment of cancer. We provide compassionate care and personalized treatment plans</p>
								</div>
								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon">
										<span class="flaticon-061-nuclear-1"></span>
									</div>
									<h5 class="h5-xs steelblue-color">Radiology</h5>
									<p>Our radiology team provides accurate imaging services using advanced technology. We prioritize patient comfort and safety while delivering reliable diagnoses for effective treatment planning.</p>
								</div>

								<div class="sbox-3 icon-sm">
									<div class="sbox-3-icon" style="text-align: center; position: relative;">
										<img src="{{url('website/images/icons1/icon11.png')}}" alt="pediatrics" style="width: 55px; height: 55px; display: inline-block; position: relative; top: 50%; transform: translateY(-50%);">
									</div>
									<h5 class="h5-xs steelblue-color">Infertility Treatment</h5>
									<p>Delivering specialized care for couples seeking to address infertility challenges, including advanced diagnostic and treatment options.</p>
								</div>
			
							</div>
						</div>
					</div> <!-- END SERVICES CONTENT -->
				</div> <!-- End container -->
			</section>
			
			<!-- jQuery -->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
			<!-- Owl Carousel JavaScript -->
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
			
			<!-- Owl Carousel Initialization -->
			<script>
				$(document).ready(function(){
					$('.owl-carousel').owlCarousel({
						loop: true,
						margin: 20,
						nav: true,
						responsive: {
							0: {
								items: 1
							},
							600: {
								items: 2
							},
							1000: {
								items: 4
							}
						}
					});
				});
			</script>
			



			<!-- INFO-2
			============================================= -->
			<section id="info-2" class="wide-60 info-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 mb-40 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id blue-color">Welcome to Farhat Hospital Sahiwal</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Complete Medical Solutions in One Place</h3>

								<!-- Text -->
								<p class="mb-30">
								      Farhat Hospital Sahiwal stands as a beacon of comprehensive healthcare,
									  offering a full spectrum of medical solutions under one roof. In an era where navigating multiple
									  healthcare providers can be daunting, Farhat Hospital simplifies the process by integrating all essential
									  services into one accessible location. 
								</p>

								<!-- Options List -->
								<div class="row">

									<div class="col-xl-6">

										<!-- Option #1 -->
										<div class="box-list m-top-15">							
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Patients get check-ups, screenings, and chronic care management in one location for consistent, coordinated care.
												</p>							
										</div>

										<!-- Option #2 -->
										<div class="box-list">	
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">The hospital offers specialized consultations such as cardiology enabling patients to receive expert care in one location.</p>				
										</div>

										<!-- Option #3 -->
										<div class="box-list">	
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Farhat Hospital provides on-site emergency services, allowing swift handling of urgent medical situations to improve patient outcomes.</p>				
										</div>

									</div>

									<div class="col-xl-6">

										<!-- Option #4 -->
										<div class="box-list">	
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">The hospital offers diagnostic services like lab tests and imaging to give quick results and accurate diagnoses for better treatment.</p>				
										</div>

										<!-- Option #5 -->
										<div class="box-list m-top-15">							
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Wellness programs and health education help patients stay healthy and prevent disease, promoting long-term well-being.</p>							
										</div>

										<!-- Option #6 -->
										<div class="box-list">	
											<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
											<p class="p-sm">Farhat Hospital offers mental health counseling, nutrition advice, and rehab programs, covering all areas of a patient’s health.</p>				
										</div>

									</div>

								</div>	<!-- End Options List -->
								
							</div>
						</div>	<!-- END TEXT BLOCK -->	 


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="info-2-img wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{url('website/images/image-04.png')}}" alt="info-image">
							</div>
						</div>

						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END INFO-2 -->




			<!-- INFO-6
			============================================= -->
			<section id="info-6" class="bg-blue info-section division">


				<!-- TEXT BLOCK -->		
				<div class="">
					<div class="row d-flex align-items-center">	
						<div class="col-lg-6 offset-lg-6">
							<div class="txt-block pc-30 white-color wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id id-color">Best Practices</span>

								<!-- Title -->
								<h3 class="h3-md">Hospital with Innovative Approach to Treatment</h3>							

								<!-- CONTENT BOX #1 -->
								<div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Farhat Hospital delivers exceptional care through innovative treatments. We combine advanced technology with expert medical teams to tackle various health conditions.
									</p>				
								</div>

								<!-- CONTENT BOX #2 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Our focus on cutting-edge solutions ensures personalized care for every patient. We tailor treatments to meet individual needs with the latest medical advancements.
									</p>							
								</div>

								<!-- CONTENT BOX #3 -->
								<div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>At Farhat Hospital, quality and compassion come first. We provide forward-thinking care to guide you toward better health.
									</p>				
								</div>

								<!-- Button -->
								{{-- <a href="{{url('ourdoctors')}}" class="btn btn-tra-white blue-hover mt-25">Meet The Doctors</a> --}}
								
							</div>	
						</div>	
					</div>	  <!-- End row -->
				</div>	   <!-- END TEXT BLOCK -->	


				<!-- INFO-6 IMAGE -->
				<div class="info-6-img text-center"></div>


			</section>	<!-- END INFO-6 -->	




			<!-- TABS-1
			============================================= -->
			<section id="tabs-1" class="wide-100 tabs-section division">
				<div class="">	
				 	<div class="row">
				 		<div class="col-md-12">
				 			

				 			<!-- TABS NAVIGATION -->
							<div id="tabs-nav" class="list-group text-center">
							    <ul class="nav nav-pills" id="pills-tab" role="tablist">

							    	<!-- TAB-1 LINK -->
								  	<li class="nav-item icon-xs">
								    	<a class="nav-link active" id="tab1-list" data-toggle="pill" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">
								    		<span class="flaticon-045-molecule"></span>Gynecology
								    	</a>
								  	</li>

								  	<!-- TAB-2 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab2-list" data-toggle="pill" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">
									       <span class="flaticon-006-cardiogram-8"></span> Cardiology
									    </a>
									</li>

									<!-- TAB-3 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab3-list" data-toggle="pill" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">
									       <span class="flaticon-137-doctor"></span>Pediatrics
									    </a>
									</li>

									<!-- TAB-4 LINK -->
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab4-list" data-toggle="pill" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">
									       <span class="flaticon-106-first-aid-kit-1"></span>Surgery
									    </a>
									</li>
									<li class="nav-item icon-xs">
									    <a class="nav-link" id="tab5-list" data-toggle="pill" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false">
									       <span class="flaticon-051-emergency-call"></span>Emergency Medicine
									    </a>
									</li>

								</ul>

							</div>	<!-- END TABS NAVIGATION -->


							<!-- TABS CONTENT -->
							<div class="container">
								<div class="tab-content" id="pills-tabContent">


								<!-- TAB-1 CONTENT -->
								<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-1 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{('website/images/carousel/gynacology.png')}}" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-1 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Gynecology</h3>

												<!-- Text -->
												<p class="mb-30">
													The Gynecology and Obstetrics department at our Hospital focuses on providing expert and compassionate care for women's health throughout all stages of life. The specialized team is dedicated to promoting healthy development and addressing a wide range of gynecological and obstetric needs with personalized, gentle approaches. Their services ensure that patients receive the highest quality medical treatment in a supportive and comfortable environment, emphasizing both physical and emotional well-being.
												  </p>
												  

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">The Gynecology and Obstetrics department provides expert care for women throughout all stages of life, supporting their overall health and well-being.</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">With gentle, tailored treatment the department ensures each child receives the best care possible.</p>				
														</div>

														<!-- Option  #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">The team creates a child friendly environment focusing on both physical or emotional well-being</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">The Pediatrics unit is dedicated to providing comprehensive medical attention to young patients.</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">The department ensures that each child receives attentive and compassionate treatment.</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">The staff creates a nurturing atmosphere where children's well-being is always the top priority.</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>	
										</div>	<!-- END TAB-1 TEXT -->


									</div>
								</div>	<!-- END TAB-1 CONTENT -->


								<!-- TAB-2 CONTENT -->
								<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-2 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-imgs">
												<img class="img-fluid" src="{{url('website/images/carousel/cardiology2.png')}}" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-2 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Cardiology</h3>

												<!-- Text -->
												<p class="mb-30">At our hospital, the Cardiology department specializes
													in diagnosing and treating heart conditions such as heart disease,
													high blood pressure, and irregular heartbeats. Our expert cardiologists use 
													advanced technology and personalized care plans to help patients manage and 
													improve their heart health. We are committed to providing compassionate, effective care to ensure our patients lead healthier lives.
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Comprehensive Heart Care:Farhat Hospital’s Cardiology department provides comprehensive care for all heart-related conditions, ensuring every patient receives expert attention.</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Advanced Diagnostics:Using state-of-the-art technology, our cardiology team accurately diagnoses heart conditions to create effective treatment plans.</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Specialized Treatments:We offer a wide range of specialized treatments, from non-invasive procedures to complex surgeries, tailored to individual needs.</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Patient-Centered Approach:At Farhat Hospital, patient well-being is our priority, and we focus on personalized care and continuous monitoring throughout treatment.</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Experienced Cardiologists:Our team of experienced cardiologists and medical staff work together to provide top-tier heart care,ensuring optimal outcomes.</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Emergency Cardiac Care:We are equipped to handle emergency cardiac cases, providing immediate interventions that can save lives.</p>				
														</div>
													</div>
												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>	
										</div>	<!-- END TAB-2 TEXT -->

										
									</div>
								</div>	<!-- END TAB-2 CONTENT -->


								<!-- TAB-3 CONTENT -->
								<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-3 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{url('website/images/pediatrics.jpg')}}" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-3 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Pediatrics </h3>
												<!-- Text -->
												<p class="mb-30 ">Our Pediatrics department is dedicated to providing compassionate and expert care for infants, children, and adolescents. With a focus on promoting healthy growth and development, we offer a wide range of pediatric services tailored to the unique needs of every child. Our specialized team works closely with families to ensure that every child receives personalized, gentle care, addressing both routine and complex health concerns with a holistic approach.
												
												</p>
									
												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We prioritize the health and well-being of infants, offering preventive care, monitoring developmental milestones, and providing early intervention when needed.</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We ensure that children receive the recommended vaccinations on time to protect them from serious diseases, following the latest guidelines.</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Our care extends to adolescents, addressing both physical and emotional changes during this critical stage of development, with a focus on overall well-being.</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We manage chronic pediatric conditions such as asthma, diabetes, and allergies, working with families to develop long-term care plans tailored to each child.</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">From minor injuries to complex medical needs, our pediatricians are equipped to handle a wide range of conditions with the highest level of care and expertise.</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We believe in working together with families, providing education and support to help parents make informed decisions about their child’s health.</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-1.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>	
										</div>	<!-- END TAB-3 TEXT -->

										
									</div>
								</div>	<!-- END TAB-3 CONTENT -->


								<!-- TAB-4 CONTENT -->
								<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-list">
									<div class="row d-flex align-items-center">


										<!-- TAB-4 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{url('website/images/kk.jpg')}}" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-4 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Surgery</h3>

												<!-- Text -->
												<p class="mb-30">Our Surgery department is committed to delivering high-quality surgical care with a focus on precision, safety, and patient comfort. Our skilled surgeons, supported by advanced technology and a dedicated team, perform a wide range of procedures, from routine surgeries to complex interventions. We prioritize patient well-being and strive to ensure a smooth recovery process, providing comprehensive care before, during, and after surgery.
												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Our department is staffed by highly trained surgeons with extensive experience in a variety of surgical procedures.</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We utilize the latest surgical technology to ensure precision and safety in every operation.</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We provide support throughout the entire surgical process, from pre-operative assessments to post-operative recovery.</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We perform both routine and complex surgeries, tailored to meet individual patient needs.</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Safety is at the core of everything we do, ensuring that every surgery is performed with the highest standards of care.</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Ensuring patient comfort is a top priority, with personalized care plans and pain management strategies.</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>	
										</div>	<!-- END TAB-4 TEXT -->

										
									</div>
								</div>	<!-- END TAB-4 CONTENT -->

								<div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5-list">
									<div class="row d-flex align-items-center">
										<!-- TAB-4 IMAGE -->
										<div class="col-lg-6">
											<div class="tab-img">
												<img class="img-fluid" src="{{url('website/images/ks.jpg')}}" alt="tab-image" />
											</div>
										</div>


										<!-- TAB-4 TEXT -->
										<div class="col-lg-6">
											<div class="txt-block pc-30">

												<!-- Title -->
												<h3 class="h3-md steelblue-color">Emergency Medicine</h3>

												<!-- Text -->
												<p class="mb-30">Our Emergency Medicine department provides rapid, expert care for urgent and life-threatening conditions. Staffed by skilled physicians and supported by state-of-the-art technology, we are equipped to handle a wide range of emergencies with efficiency and precision. Our team focuses on stabilizing patients, delivering immediate treatment, and coordinating with specialized services to ensure the best possible outcomes.												</p>

												<!-- Options List -->
												<div class="row">

													<div class="col-xl-6">

														<!-- Option #1 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Our team is trained to respond quickly to a variety of emergency situations, ensuring timely care.</p>							
														</div>

														<!-- Option #2 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Skilled physicians provide immediate treatment for acute and life-threatening conditions.</p>				
														</div>

														<!-- Option #3 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We use cutting-edge technology to diagnose and treat emergencies effectively.</p>				
														</div>

													</div>

													<div class="col-xl-6">

														<!-- Option #4 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">Patients receive thorough evaluations to address their immediate medical needs.</p>				
														</div>

														<!-- Option #5 -->
														<div class="box-list">							
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm">We work closely with other departments and specialists to provide comprehensive care.</p>							
														</div>

														<!-- Option #6 -->
														<div class="box-list">	
															<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
															<p class="p-sm"> Our priority is to stabilize and treat patients while providing compassionate support throughout their emergency care.</p>				
														</div>

													</div>

												</div>	<!-- End Options List -->

												<!-- Button -->
												<a href="service-2.html" class="btn btn-blue blue-hover mt-30">View More Details</a>

											</div>	
										</div>	<!-- END TAB-4 TEXT -->

										
									</div>
								</div>

							</div>
							</div>
								<!-- END TABS CONTENT -->


			 			</div>	
				 	</div>     <!-- End row -->	
				</div>     <!-- End container -->	
			</section>	<!-- END TABS-1 -->


			<section id="about-6" class="pt-100 about-section division">
				<div class="container">
					<div class="row d-flex align-items-center">


						<!-- TEXT BLOCK -->	
						<div class="col-lg-6">
							<div class="txt-block pc-30 wow fadeInUp" data-wow-delay="0.4s">

								<!-- Section ID -->	
					 			<span class="section-id blue-color">Qualified Doctors</span>

								<!-- Title -->
								<h3 class="h3-md steelblue-color">Group of Certified and Experienced Doctors</h3>

								<!-- CONTENT BOX #1 -->
								<div class="box-list">							
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Our team of certified and experienced doctors provides top-quality care across various specialties.
										Their expertise and dedication ensure that patients receive the best possible treatment.
									</p>							
								</div>

								<!-- CONTENT BOX #2 -->
								<div class="box-list">	
									<div class="box-list-icon"><i class="fas fa-genderless"></i></div>
									<p>Committed to staying updated with the latest medical advancements,
										our doctors deliver effective and personalized care tailored to each individual’s needs.
									</p>				
								</div>

								<!-- Button -->
								{{-- <a href="{{('ourdoctors')}}" class="btn btn-blue blue-hover mt-25">Meet The Doctors</a> --}}

							</div>
						</div>	<!-- END TEXT BLOCK -->	


						<!-- IMAGE BLOCK -->
						<div class="col-lg-6">
							<div class="about-img text-center wow fadeInUp" data-wow-delay="0.6s">
								<img class="img-fluid" src="{{('website/images/image-09.png')}}" alt="about-image">
							</div>
						</div>

						
					</div>    <!-- End row -->
				</div>	   <!-- End container -->
			</section>	<!-- END ABOUT-6 -->

			<!-- STATISTIC-1
			============================================= -->

{{-- <div id="statistic-1" class="bg-scroll statistic-section division">
	<div class="container white-color">
		<div class="row">
			<!-- STATISTIC BLOCK #1 -->
			<div class="col-md-6 col-lg-3">						
				<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.1s">
					<span class="flaticon-062-cardiogram-3"></span>
					<h5 class="statistic-number"><span class="count-element">9632</span></h5>
					<p class="txt-400">Happy Patients</p>																			
				</div>								
			</div>
			<!-- STATISTIC BLOCK #2 -->
			<div class="col-md-6 col-lg-3">								
				<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.5s">
					<span class="flaticon-137-doctor"></span>
					<h5 class="statistic-number"><span class="count-element">178</span></h5>	
					<p class="txt-400">Qualified Doctors</p>										
				</div>							
			</div>
			<!-- STATISTIC BLOCK #3 -->
			<div class="col-md-6 col-lg-3">					
				<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.5s">	
					<span class="flaticon-065-hospital-bed"></span>
					<h5 class="statistic-number"><span class="count-element">864</span></h5>
					<p class="txt-400">Clinic Rooms</p>									
				</div>						
			</div>
			<!-- STATISTIC BLOCK #4 -->
			<div class="col-md-6 col-lg-3">						
				<div class="statistic-block icon-lg wow fadeInUp" data-wow-delay="0.5s">	
					<span class="flaticon-040-placeholder"></span>
					<h5 class="statistic-number"><span class="count-element">473</span></h5>
					<p class="txt-400">Local Partners</p>				
				</div>						
			</div>
		</div>
	</div>		
</div> --}}
			<!-- DOCTORS-1
			============================================= -->
			<section id="doctors-1" class="wide-40 doctors-section division">
				<div class="container">


			 		<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">		

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Our Medical Specialists</h3>	

							<!-- Text -->
							<p>Our medical specialists are highly skilled professionals
								who provide expert care across many areas. They work closely with 
								patients to offer personalized treatment and ensure the best outcomes for every individual.
							</p>
										
						</div> 
					</div>	 <!-- END SECTION TITLE -->	


					<div class="row">


						<!-- DOCTOR #1 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">								
														
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="{{url('website/images/doctor-1.jpg')}}" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div> 

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
									<span class="blue-color">Chief Medical Officer</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>								
						</div>	<!-- END DOCTOR #1 -->
						
						
						<!-- DOCTOR #2 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																						
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="{{url('website/images/doctor-2.jpg')}}" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>	

								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
									<span class="blue-color">Anesthesiologist</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>					
						</div>	<!-- END DOCTOR #2 -->
						
						
						<!-- DOCTOR #3 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																						
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="{{url('website/images/doctor-3.jpg')}}" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-1.html" title="">View More Info</a>
									</div>

								</div>		
								
								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
									<span class="blue-color">Cardiology</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>			
						</div>	<!-- END DOCTOR #3 -->
											
						
						<!-- DOCTOR #4 -->
						<div class="col-md-6 col-lg-3">
							<div class="doctor-1">	
																					
								<!-- Doctor Photo -->
								<div class="hover-overlay text-center"> 

									<!-- Photo -->
									<img class="img-fluid" src="{{url('website/images/doctor-4.jpg')}}" alt="doctor-foto">	
									<div class="item-overlay"></div>

									<!-- Profile Link -->		
									<div class="profile-link">
										<a class="btn btn-sm btn-tra-white black-hover" href="doctor-2.html" title="">View More Info</a>
									</div>

								</div>		
								
								<!-- Doctor Meta -->		
								<div class="doctor-meta">

									<h5 class="h5-sm steelblue-color">Megan Coleman D.M.</h5>
									<span class="blue-color">Neurosurgeon</span>

									<p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus porta, mauris sed
									   augue luctus magna dolor luctus ipsum neque
									</p>

								</div>	

							</div>			
						</div>	<!-- END DOCTOR #4 -->


					</div>	    <!-- End row -->


					<!-- ALL DOCTORS BUTTON -->		
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-doctors mb-40">
								<a href="{{('ourdoctors')}}" class="btn btn-blue blue-hover">Meet All Doctors</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->
			</section>	<!-- END DOCTORS-1 -->
			<!-- BANNER-7
			============================================= -->




			{{-- <section id="banner-7" class="bg-fixed banner-section division">
				<div class="container white-color">
			 		<div class="row d-flex align-items-center">


						<!-- BANNER TEXT -->
						<div class="col-md-8 col-lg-6 col-xl-5">
							<div class="banner-txt wow fadeInUp" data-wow-delay="0.4s">

								<!-- Title  -->
								<h2 class="h2-xs">Highest Quality Medical Treatment</h2>
								
							    <!-- Text -->
								<p>We provide the highest quality medical treatment by combining expert care with the latest medical advancements. Our dedicated team ensures that every patient receives personalized, compassionate care for the best possible outcomes.
							    </p>

							
							</div>
						</div>	


					</div>    
				</div>	   	
			</section>	 --}}




			
			{{-- we can use this latter if we need --}}



			{{-- <section id="blog-1" class="wide-60 blog-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Our Stories, Tips & Latest News</h3>	

							<!-- Text -->
							<p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero at tempus, 
							   blandit posuere ligula varius congue cursus porta feugiat
							</p>
								
						</div>
					</div>


			 		<!-- BLOG POSTS HOLDER -->
				 	<div class="row">


				 		<!-- BLOG POST #1 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.4s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="{{url('website/images/blog/post-1-img.jpg')}}" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TITLE -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">5 Benefits Of Integrative Medicine</a></h5>

									<!-- Post Data -->
									<span>May 03, 2019 by <span>Dr.Jeremy Smith</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #1 -->


				 		<!-- BLOG POST #2 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.6s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="{{url('website/images/blog/post-2-img.jpg')}}" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">Your Health Is In Your Hands</a></h5>

									<!-- Post Data -->
									<span>Apr 28, 2019 by <span>Dr.Jonathan Barnes</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #2 -->


				 		<!-- BLOG POST #3 -->
				 		<div class="col-lg-4">
				 			<div class="blog-post wow fadeInUp" data-wow-delay="0.8s">

				 				<!-- BLOG POST IMAGE -->
					 			<div class="blog-post-img">
									<img class="img-fluid" src="{{url('website/images/blog/post-3-img.jpg')}}" alt="blog-post-image" />	
								</div>

				 				<!-- BLOG POST TEXT -->
								<div class="blog-post-txt">

									<!-- Post Title -->
									<h5 class="h5-sm steelblue-color"><a href="single-post.html">How Weather Impacts Your Health</a></h5>

									<!-- Post Data -->
									<span>Apr 17, 2019 by <span>Dr.Megan Coleman</span></span>

									<!-- Post Text -->
									<p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor blandit sapien at
									   gravida donec ipsum, at porta justo...
									</p>

								</div>

							</div>
				 		</div>	<!-- END  BLOG POST #3 -->


					</div>	<!-- END BLOG POSTS HOLDER -->


					<!-- ALL POSTS BUTTON -->
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="all-posts-btn mb-40 wow fadeInUp" data-wow-delay="1s">
								<a href="blog-listing.html" class="btn btn-blue blue-hover">Read More Posts</a>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->		
			</section> --}}





{{-- hhh --}}



			<section id="banner-4" class="bg-lightgrey banner-section division">
				<!-- BANNER TEXT -->	
				<div class="container">
					<div class="row ">
					 	<div class="col-lg-6 offset-lg-6">
					 		<div class="banner-txt">

					 			<!-- Title  -->
								<h2 class="h2-xs">Need an Emergency Help? Call Us!</h2> 
								<h3 class="h3-xl blue-color">
									<a href="tel:+92404509400" class="blue-color">040-450-9400</a>
								  </h3>
							    <!-- Text -->
								<p>If you need emergency help, don't hesitate to call us! Our skilled medical team is
									available around the clock to provide prompt and expert care in critical situations. 
									Whether it's an accident, sudden illness, or any urgent medical concern, we are here to ensure 
									you receive the immediate attention you need. Your safety and well-being are our top priorities,
									 and we're just a call away, ready to help.
							    </p>

								<!-- Button -->

					 		</div>
					 	</div>	  
			 		</div>	  <!-- End row -->		
			 	</div>	  <!-- END CONTENT TEXT -->


			 	<!-- BANNER-4 IMAGE -->
				<div class="banner-4-img"></div>	


			</section>	<!-- END BANNER-4 -->
				
		</div>	<!-- END PAGE CONTENT -->
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

			
