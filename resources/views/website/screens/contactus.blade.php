<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	
<!-- Mirrored from jthemes.net/themes/html/medservices/files/contacts-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:35 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="MedService - Medical & Medical Health Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>Farhat hospital|contact us</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		@include('website.layouts.header')
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 
	
	</head>




	<body>


		<script>
            document.addEventListener("DOMContentLoaded", function() {
                // Hide loader after the page content has loaded
                var loaderWrapper = document.getElementById("loader-wrapper");
                loaderWrapper.style.display = "none";
            });
            </script>
		<div id="page" class="page">
			@include('website.layouts.nav')

			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Contact Us</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>
			<section id="contacts-1" class="wide-60 contacts-section division">				
				<div class="container">


					<!-- SECTION TITLE -->	
					<div class="row">	
						<div class="col-lg-10 offset-lg-1 section-title">	

							<!-- Title 	-->	
							<h3 class="h3-md steelblue-color">Have a Question? Get In Touch</h3>	

							<!-- Text -->
							<p>Have a question? Want to book an appointment for yourself or your children? Give us a call
							   or send an email to contact the Farhat Hospital.
							</p>
								
						</div>
					</div>

						
				 <div class="row">	
		 			<div class="col-md-6 col-lg-6">
		 				 <div class="contact-box mb-40">
								<h5 class="h5-sm steelblue-color" style="color: gray">Contact us</h5>
								<hr>
								<p style="color:grey; margin-bottom:20px"><strong>Please contact us if you have any questions or requests concerning our services</strong></p> 
								
                                <p style="color: grey;"><strong>Contact details:</strong>UAN:040-450-9400</p>
								<p style="color: grey;">
									<strong>For Complaints:</strong>
									<span>&#9742;</span> (+92)306946443 
									<span>&#9993;</span> Complaint@farhathospital.com.pk
								</p>
                                <p style="color: grey;"><strong>Head Office:</strong></p>
								<p style="color: grey">Near Tariq Bin Ziad School Fateh Sher Colony Sahiwal Sahiwal District Punjab 57000</p>
								
                             <h5 class="margin-top:10px">Find Us</h5>
							 <hr>
		 					</div>
							 <div class="container-fluid pr-0 pl-0">
								<iframe 
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13567.402779390403!2d73.1062209!3d30.6775126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b79b6b39b7c7%3A0xf5d852a484fa8097!2sFarhat%20Hospital%20Sahiwal!5e0!3m2!1sen!2s!4v1695563320725!5m2!1sen!2s" 
								width="570px" 
								height="340px" 
								style="border:0;" 
								allowfullscreen="" 
								loading="lazy" 
								referrerpolicy="no-referrer-when-downgrade">
							  </iframe>
							</div>

						</div>	<!-- END CONTACTS INFO -->


						<!-- CONTACT FORM -->	
				 		<div class="col-md-6 col-lg-6">
				 			<div class="form-holder mb-40">
								
								<h4 class="h5-sm steelblue-color center" style="margin-left:25px; color">Send us your massage</h4>
                               <hr>
				 				<form name="contactForm" class="row contact-form">
				                                            
					                <!-- Contact Form Input -->
					                <div id="input-name" class="col-md-12 col-lg-12">
					                	<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required> 
					                </div>
					                        
					                <div id="input-email" class="col-md-12 col-lg-12">
					                	<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required> 
					                </div>

					                <div id="input-phone" class="col-md-12 col-lg-12">
					                	<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required> 
					                </div>	

					                <!-- Form Select -->
					                <div id="input-patient" class="col-md-12 col-lg-12 input-patient">
					                    <select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
					                        <option value="">Have You Visited Us Before?*</option>
											<option>New Patient</option>
											<option>Returning Patient</option>
											<option>Other</option>
					                    </select>
					                </div>

					                {{-- <div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="Subject*" required> 
					                </div>					                           --}}
					                         
					              
									<div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="Subject" required> 
					                </div>	
									
									{{-- <div id="input-message" class="col-lg-12 input-message">
					                	<textarea class="form-control floating" name="message" rows="2" placeholder="Your Message" required></textarea>
					                </div> --}}
									<div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="Your Massage" required> 
					                </div>	
									<div class="captcha" style="margin-left:20px">
										<span><img src="https://www.imchospital.com.pk/captcha/default?XGDU3ERz" ></span>
										<button type="button" class="btn btn-danger" class="reload" id="reload">
											↻
										</button>
									</div>  
									<div id="input-subject" class="col-lg-12">
					                	<input type="text" name="subject" class="form-control subject" placeholder="are you not a robot" required> 
					                </div>          
					                <!-- Contact Form Button -->
					                <div class="col-lg-12 mt-15 form-btn">  
					                	<button type="submit" class="btn btn-blue grey-hover submit">Send Your Message</button> 
					                </div>
					                                                              
					                <!-- Contact Form Message -->
					                <div class="col-lg-12 contact-form-msg text-center">
					                	<div class="sending-msg"><span class="loading"></span></div>
					                </div>  
				                                              
				                </form> 

				 			</div>	
				 		</div> 	<!-- END CONTACT FORM -->	


				 	</div>	<!-- End row -->			  
 

				</div>	   <!-- End container -->		
			</section>	<!-- END CONTACTS-1 -->
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
			

