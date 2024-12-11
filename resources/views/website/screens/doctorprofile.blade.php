<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">





<!-- Mirrored from jthemes.net/themes/html/medservices/files/doctor-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:28 GMT -->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="MedService - Medical & Medical Health Landing Page Template" />
	<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SITE TITLE -->
	<title>Farhat hospiatl</title>
	@include('website.layouts.header')
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
	<div id="page" class="page">
		@include('website.layouts.nav')

		<section id="doctor-breadcrumbs" class="bg-fixed doctor-details-section division">
			<div class="container">
				<div class="row">
					<div class="col-md-7 offset-md-5">
						<div class="doctor-data white-color">

							<!-- Name -->
							<h2 class="h2-xs">{{$doctor->name??''}}</h2>
							<h5 class="h5-md">{{$doctor->degrees}}</h5>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END DOCTOR BREADCRUMBS -->




		<!-- DOCTOR-1 DETAILS -->
		<section id="doctor-1-details" class="doctor-details-section division">
			<div class="container">
				<div class="row">


					<!-- DOCTOR PHOTO -->
					<div class="col-md-5">
						<div class="doctor-photo mb-40">

							<!-- Photo -->
							<img class="img-fluid" src="{{ asset('storage/assets/images/doctor/' . $doctor->image) }}" alt="doctor-foto">

							<!-- Doctor Info -->
							<div class="doctor-info">
								<table class="table table-striped">
									<tbody>
										<tr>
											<td>Degrees</td>
											<td>{{$doctor->degrees}}</td>
										</tr>
										<tr>
											<td>Areas of Expertise</td>
											<td><span><i class="fas fa-angle-double-right"></i> {{$doctor->area_of_expertise}}</span>
											</td>
										</tr>
										<tr>
											<td>Language(s)</td>
											<td>{{$doctor->languages}}</td>
										</tr>
										<tr class="last-tr">
											<td>Work Days</td>
											<td>{{$doctor->work_days}}</td>
										</tr>
									</tbody>
								</table>
							</div> <!-- End Doctor Info -->

							<!-- Doctor Contacts -->
							<div class="doctor-contacts text-center">
								<h4 class="h4-xs"><i class="fas fa-mobile-alt"></i> {{ $doctor->phone ? $doctor->phone : 'No phone number' }}</h4>
								<h4 class="h4-xs blue-color"><i class="fas fa-envelope-open-text"></i>
									<a href="mailto:yourdomain@mail.com" class="blue-color">{{$doctor-> email}}</a>
								</h4>
							</div>

							<!-- Buttons -->
							<div class="doctor-photo-btn text-center">
								<a href="appointment.html" class="btn btn-md btn-blue blue-hover">Book an Appointment</a>
								<a href="{{url('doctortimetable')}}" class="btn btn-md btn-tra-grey grey-hover">View Timetable</a>
							</div>

						</div>
					</div> <!-- END DOCTOR PHOTO -->


					<!-- DOCTOR'S BIO -->
					<div class="col-md-7">
						<div class="doctor-bio">

							<!-- Text -->
							<p>{{$doctor->description}}</p>

							<!-- Text -->

							<!-- Title -->
							<!-- <h5 class="h5-md blue-color">{{$doctor->education_training}}</h5> -->

							<!-- Text -->
							<p>{{$doctor->education_training}}
							</p>

							<!-- Option #1 -->
							<div class="box-list m-top-15">
								<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
								<p class="p-sm">Nemo ipsam egestas volute and turpis dolores quaerat</p>
							</div>

							<!-- Option #2 -->
							<div class="box-list">
								<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
								<p class="p-sm">Magna luctus tempor augue vitae laoreet augue in cubilia risus auctor tempus
									dolor felis lacinia risus auctor id viverra dolor
								</p>
							</div>

							<!-- Option #3 -->
							<div class="box-list">
								<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
								<p class="p-sm">Ligula risus auctor tempus dolor feugiat, felis lacinia risus interdum auctor
									id viverra dolor iaculis luctus
								</p>
							</div>

							<!-- Option #3 -->
							<div class="box-list">
								<div class="box-list-icon blue-color"><i class="fas fa-angle-double-right"></i></div>
								<p class="p-sm">An enim nullam tempor at pretium purus blandit</p>
							</div>

							<!-- CERTIFICATES -->
							<div class="certificates">

								<!-- Title -->
								<h5 class="h5-md blue-color">{{$doctor-> diploma_certifcate}}</h5>


							</div> <!-- END CERTIFICATES -->

						</div>
					</div> <!-- END DOCTOR BIO -->


				</div> <!-- End row -->
			</div> <!-- End container -->
		</section> <!-- END DOCTOR-1 DETAILS -->





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