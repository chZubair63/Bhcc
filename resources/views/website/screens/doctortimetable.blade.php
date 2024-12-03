{{-- <!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">




	
<!-- Mirrored from jthemes.net/themes/html/medservices/files/timetable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:30 GMT -->
<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content="MedService - Medical & Medical Health Landing Page Template"/>
		<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>MedService - Medical & Medical Health Landing Page Template</title>
        @include('website.layouts.header')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

		<style>
			/* General reset */
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}
	
			body {
				font-family: Arial, sans-serif;
				background: #f4f4f9;
				color: #333;
			}
	
			.container {
				max-width: 1200px;
				margin: 2rem auto;
				padding: 1rem;
			}
	
			header {
				text-align: center;
				margin-bottom: 2rem;
			}
	
			header h1 {
				font-size: 2rem;
				color: #35495e;
			}
	
			.timetable {
				display: grid;
				grid-template-columns: 100px repeat(5, 1fr); /* Time column + 5 days */
				grid-auto-rows: minmax(80px, auto);
				gap: 1px;
				background-color: #ddd; /* Separator color */
			}
	
			/* Styling time slots */
			.time {
				background: #f4f4f9;
				text-align: center;
				font-weight: bold;
				display: flex;
				justify-content: center;
				align-items: center;
			}
	
			/* Day headers */
			.day {
				background: #35495e;
				color: white;
				text-align: center;
				font-weight: bold;
				display: flex;
				justify-content: center;
				align-items: center;
			}
	
			/* Appointment cells */
			.appointment {
				display: flex;
				flex-direction: column;
				justify-content: center;
				align-items: center;
				color: white;
				font-size: 0.9rem;
				font-weight: bold;
				text-align: center;
			}
	
			/* Appointment colors */
			.blue {
				background-color: #007bff;
			}
	
			.green {
				background-color: #28a745;
			}
	
			.orange {
				background-color: #fd7e14;
			}
	
			.gray {
				background-color: #6c757d;
			}
	
			.red {
				background-color: #dc3545;
			}
	
			/* Responsive design */
			@media (max-width: 768px) {
				.timetable {
					grid-template-columns: 60px repeat(5, 1fr); /* Smaller time column */
				}
	
				.time {
					font-size: 0.8rem;
				}
	
				.appointment {
					font-size: 0.8rem;
				}
			}
		</style>

	</head>




	<body>




		



		<div id="page" class="page">
            @include('website.layouts.nav')


 

		



			<!-- BREADCRUMB
			============================================= -->
			<div id="breadcrumb" class="division">
				<div class="container">
					<div class="row">						
						<div class="col">
							<div class=" breadcrumb-holder">

								<!-- Breadcrumb Nav -->
								<nav aria-label="breadcrumb">
								  	<ol class="breadcrumb">
								    	<li class="breadcrumb-item"><a href="demo-1.html">Home</a></li>
								    	<li class="breadcrumb-item active" aria-current="page">Timetable</li>
								  	</ol>
								</nav>

								<!-- Title -->
								<h4 class="h4-sm steelblue-color">Timetable</h4>

							</div>
						</div>
					</div>  <!-- End row -->	
				</div>	<!-- End container -->		
			</div>	<!-- END BREADCRUMB -->	




			<!-- SCHEDULE TIMETABLE
			============================================= -->
			<div id="timetable-page" class="timetable-section division">
				<div class="container">
					<div class="row">
						<div class="col-md-12">

							<!-- TIMETABLE	-->
							<div class="cd-schedule loading">
								
								<!-- Timeline -->
								<div class="timeline">
									<ul>
										<li><span>09:00</span></li>
										<li><span>09:30</span></li>
										<li><span>10:00</span></li>
										<li><span>10:30</span></li>
										<li><span>11:00</span></li>
										<li><span>11:30</span></li>
										<li><span>12:00</span></li>
										<li><span>12:30</span></li>
										<li><span>13:00</span></li>
										<li><span>13:30</span></li>
										<li><span>14:00</span></li>
										<li><span>14:30</span></li>
										<li><span>15:00</span></li>
										<li><span>15:30</span></li>
										<li><span>16:00</span></li>
										<li><span>16:30</span></li>
										<li><span>17:00</span></li>
										<li><span>17:30</span></li>
										<li><span>18:00</span></li>
										<li><span>18:30</span></li>
										<li><span>19:00</span></li>
									</ul>
								</div> <!-- End Timeline -->


								<!-- Events -->
								<div class="events">
									<ul>

										<!-- MONDAY -->
										<li class="events-group">
											<div class="top-info"><span>Monday</span></div>

											<ul>
												<li class="single-event" data-start="09:00" data-end="11:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Haematology</em>
														<em class="event-name event-doctor">Dr. M.Anderson</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. M.Coleman</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-6">
													<div class="event-info">
														<em class="event-name">Traumatology</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>

										</li>	<!-- END MONDAY -->


										<!-- TUESDAY -->
										<li class="events-group">
											<div class="top-info"><span>Tuesday</span></div>

											<ul>
												<li class="single-event" data-start="10:00" data-end="12:00" data-event="event-7">
													<div class="event-info">
														<em class="event-name">Pulmonary</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-5">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>

										</li>	<!-- END TUESDAY -->


										<!-- WEDNESDAY -->
										<li class="events-group">
											<div class="top-info"><span>Wednesday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="11:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="14:00" data-end="16:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="16:00" data-end="18:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

											</ul>

										</li>	<!-- END WEDNESDAY -->


										<!-- THURSDAY -->
										<li class="events-group">
											<div class="top-info"><span>Thursday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="12:00" data-event="event-1">
													<div class="event-info">
														<em class="event-name">Pulmonary</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.13 Hall A</em>
													</div>
												</li>

												<li class="single-event" data-start="12:00" data-end="14:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="14:00" data-end="16:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="16:00" data-end="19:00" data-event="event-6">
													<div class="event-info">
														<em class="event-name">Traumatology</em>
														<em class="event-name event-doctor">Dr. R.Peterson</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

											</ul>

										</li>	<!-- END THURSDAY -->


										<!-- FRIDAY -->
										<li class="events-group">
											<div class="top-info"><span>Friday</span></div>

											<ul>
												<li class="single-event" data-start="9:00" data-end="11:00" data-event="event-8">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="11:00" data-end="13:00" data-event="event-2">
													<div class="event-info">
														<em class="event-name">Laryngology</em>
														<em class="event-name event-doctor">Dr. J.Elledge</em>
														<em class="event-name event-room">Rm.27 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="13:00" data-end="15:00" data-event="event-3">
													<div class="event-info">
														<em class="event-name">Primacy Help Care</em>
														<em class="event-name event-doctor">Dr. Hannah Harper</em>
														<em class="event-name event-room">Rm.46 Hall B</em>
													</div>
												</li>

												<li class="single-event" data-start="15:00" data-end="17:00" data-event="event-4">
													<div class="event-info">
														<em class="event-name">X-Ray</em>
														<em class="event-name event-doctor">Dr. .Anderson</em>
														<em class="event-name event-room">Rm.103 Hall C</em>
													</div>
												</li>

												<li class="single-event" data-start="17:00" data-end="19:00" data-event="event-5">
													<div class="event-info">
														<em class="event-name">Pediatrics</em>
														<em class="event-name event-doctor">Dr. J.Barnes</em>
														<em class="event-name event-room">Rm.29 Hall C</em>
													</div>
												</li>
											</ul>

										</li>	<!-- END FRIDAY -->

									</ul>
								</div>	<!-- End Events -->


							</div>	<!-- END TIMETABLE	-->


						</div>
					</div>     <!-- End row -->		
				</div>	    <!-- End container -->
			</div>	 <!-- END SCHEDULE TIMETABLE -->





  
		</div>	<!-- END PAGE CONTENT -->

        @include('website.layouts.footer')

	</body>




<!-- Mirrored from jthemes.net/themes/html/medservices/files/timetable.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 06 Aug 2024 06:02:30 GMT -->
</html>	  --}}




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    @include('website.layouts.header')


    <style>
        /* General reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 1rem;
        }

        header {
            text-align: center;
            margin-bottom: 2rem;
        }

        header h1 {
            font-size: 2rem;
            color: #35495e;
        }

        .timetable {
            display: grid;
            grid-template-columns: 100px repeat(5, 1fr); /* Time column + 5 days */
            grid-auto-rows: minmax(80px, auto);
            gap: 1px;
            background-color: #ddd; /* Separator color */
        }

        /* Styling time slots */
        .time {
            background: #f4f4f9;
            text-align: center;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Day headers */
        .day {
            background: #35495e;
            color: white;
            text-align: center;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Appointment cells */
        .appointment {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 0.9rem;
            font-weight: bold;
            text-align: center;
        }

        /* Appointment colors */
        .blue {
            background-color: #007bff;
        }

        .green {
            background-color: #28a745;
        }

        .orange {
            background-color: #fd7e14;
        }

        .gray {
            background-color: #6c757d;
        }

        .red {
            background-color: #dc3545;
        }

        /* Responsive design */
        @media (max-width: 768px) {
            .timetable {
                grid-template-columns: 60px repeat(5, 1fr); /* Smaller time column */
            }

            .time {
                font-size: 0.8rem;
            }

            .appointment {
                font-size: 0.8rem;
            }
        }
    </style>
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
                                    <li class="breadcrumb-item active" aria-current="page">Doctors Timetable</li>
                                  </ol>
                            </nav>

                            <!-- Title -->
                            <h4 class="h4-sm steelblue-color">Doctors Timetable</h4>

                        </div>
                    </div>
                </div>  <!-- End row -->	
            </div>	<!-- End container -->		
        </div>	<!-- END BREADCRUMB -->	


    <div class="container">
       
        <div class="timetable">
            <!-- Time Column -->
            <div class="time"></div>
            <div class="day">Monday</div>
            <div class="day">Tuesday</div>
            <div class="day">Wednesday</div>
            <div class="day">Thursday</div>
            <div class="day">Friday</div>

            <!-- Time Slots -->
            <div class="time">09:00 - 11:00</div>
            <div class="appointment blue">Primary Help Care<br>Dr. Hannah Harper<br>Rm.13 Hall A</div>
            <div class="appointment green">Pulmonary<br>Dr. R. Peterson<br>Rm.13 Hall A</div>
            <div class="appointment gray">X-Ray<br>Dr. Anderson<br>Rm.13 Hall A</div>
            <div class="appointment orange">Pulmonary<br>Dr. R. Peterson<br>Rm.13 Hall A</div>
            <div class="appointment red">Pediatrics<br>Dr. J. Barnes<br>Rm.29 Hall C</div>

            <div class="time">11:00 - 13:00</div>
            <div class="appointment orange">Pediatrics<br>Dr. J. Barnes<br>Rm.27 Hall B</div>
            <div class="appointment green">Laryngology<br>Dr. J. Eldridge<br>Rm.27 Hall B</div>
            <div class="appointment gray">Pediatrics<br>Dr. J. Barnes<br>Rm.27 Hall B</div>
            <div class="appointment red">Laryngology<br>Dr. J. Eldridge<br>Rm.27 Hall B</div>
            <div class="appointment blue">Primary Help Care<br>Dr. Hannah Harper<br>Rm.27 Hall B</div>

            <div class="time">13:00 - 15:00</div>
            <div class="appointment green">Hematology<br>Dr. M. Anderson<br>Rm.48 Hall B</div>
            <div class="appointment gray">Primary Help Care<br>Dr. Hannah Harper<br>Rm.48 Hall B</div>
            <div class="appointment red">Laryngology<br>Dr. J. Eldridge<br>Rm.48 Hall B</div>
            <div class="appointment orange">Pediatrics<br>Dr. J. Barnes<br>Rm.48 Hall B</div>
            <div class="appointment blue">Traumatology<br>Dr. R. Peterson<br>Rm.20 Hall C</div>

            <div class="time">15:00 - 17:00</div>
            <div class="appointment blue">X-Ray<br>Dr. Anderson<br>Rm.103 Hall C</div>
            <div class="appointment green">Traumatology<br>Dr. R. Peterson<br>Rm.20 Hall C</div>
            <div class="appointment orange">Pediatrics<br>Dr. J. Barnes<br>Rm.20 Hall C</div>
            <div class="appointment red">X-Ray<br>Dr. Anderson<br>Rm.20 Hall C</div>
            <div class="appointment gray">Pediatrics<br>Dr. J. Barnes<br>Rm.20 Hall C</div>

            <div class="time">17:00 - 19:00</div>
            <div class="appointment orange">Pediatrics<br>Dr. J. Barnes<br>Rm.20 Hall C</div>
            <div class="appointment green">Traumatology<br>Dr. R. Peterson<br>Rm.20 Hall C</div>
            <div class="appointment blue">X-Ray<br>Dr. Anderson<br>Rm.20 Hall C</div>
            <div class="appointment gray">Pediatrics<br>Dr. J. Barnes<br>Rm.20 Hall C</div>
            <div class="appointment red">Pediatrics<br>Dr. J. Barnes<br>Rm.20 Hall C</div>
        </div>
    </div>

</div>	<!-- END PAGE CONTENT -->

    @include('website.layouts.footer')

</body>
</html>
