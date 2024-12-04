<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Jthemes" />
    <meta name="description" content="Farhat Hospital - Medical Health Services" />
    <meta name="keywords" content="Responsive, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- SITE TITLE -->
    <title>About Us - Farhat Hospital</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('website.layouts.header')
</head>

<body>
    <!-- Include Navbar -->
    <div id="page" class="page">
        @include('website.layouts.nav')
        <!-- Main Content -->
        <div class="container-fluid my-5"> <!-- Changed to container-fluid -->
            <div class="row">
                <!-- Sidebar with Navigation Links -->
                <div class="col-md-2"> <!-- Sidebar occupies 2 columns -->
                    <div class="sidebar">
                        <a class="active" id="overview-tab" onclick="showSection('overview')">Overview</a>
                        <a id="core-values-tab" onclick="showSection('core-values')">Core Values</a>
                        <a id="founders-tab" onclick="showSection('founders')">Hospital Founders</a>
                        <a id="partners-tab" onclick="showSection('partners')">Managing Partners</a>
                        <a id="management-tab" onclick="showSection('management')">Hospital Management</a>
                    </div>
                </div>

                <!-- Main Content for About Us -->
                <div class="col-md-10"> <!-- Main content occupies 9 columns -->
                    <div id="section-content">
                        <!-- Overview Section (default view) -->
                        <div id="overview">
                            <div class="row">
                                <div class="col-md-3">
                                    <img src="{{url('website/images/beds.jpg')}}" alt="A modern hospital building" class="hospital-image">
                                </div>
                                <div class="col-md-9">
                                    <div class="about-us-content">
                                        <h2 class="about-us-header">About Us</h2>
                                        <p class="about-us-text">
                                            Farhat Hospital is a privately owned, 25 bedded purpose-built, multi-speciality modern healthcare service provider established through a joint venture with Local Partners The hospital started its operations in 2019 with a commitment to provide quality patient care by adopting the concept of integrating care under one roof. The hospital provides personalized care in a comforting environment through integration of services offered by various units, all focused on safe and patient-centred approach.</p>
                                        <p class="about-us-text">
                                            With a dedicated team comprising over 30 local and internationally skilled medical consultants and surgeons, hospital administrators, qualified nurses and paramedical staﬀ, farhat hospital provides exceptional experience to their patients in a clean, efficient, safe and caring environment.</p>
                                        <p class="about-us-text">
                                            The quality of the hospital is accredited by the Punjab Healthcare Commission (PHC) and hospital has also started to adopt internationally recognized gold healthcare standard for quality of care and patient safety. The hospital offers a comprehensive range of high-quality clinical, diagnostic, and treatment services along with 24/7 Emergency Room, Rehab Services, Pharmacy with home delivery facility and Laboratory with option of collecting samples from home.
                                        </p>
                                        <p class="about-us-text">
                                            Farhat Hospital constantly endeavours to develop and deliver accessible and quality focused healthcare services in order to become a leading tertiary care hospital in Punjab.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Core Values Section -->
                        <div id="core-values" style="display: none;">
                            <div class="about-us-content">
                                <h2 class="about-us-header" style="font-size: 32px; text-align: left;">Core Values</h2>
                                <p class="about-us-text" style="font-size: 16px; color: #666;">
                                    At Farhat Hospital, we believe in compassion, respect, excellence, and integrity. We strive to provide healthcare services that are patient-focused and guided by ethical principles.
                                </p>

                                <div style="display: flex; flex-wrap: wrap;">
                                    <!-- Core Value 1: Integrity -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/compassion.png')}}" alt="Integrity" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Compassion</h4>
                                            <p style="margin: 0; color: #666;">We provide care with empathy and kindness, understanding the unique needs and concerns of each patient and their families</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 2: Nurturing -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/excellence.png')}}" alt="Nurturing" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Excellence</h4>
                                            <p style="margin: 0; color: #666;">We are committed to achieving the highest standards of medical care through continuous improvement, advanced technology, and skilled professionals.</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 3: Trust -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/Respect.png')}}" alt="Trust" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Respect</h4>
                                            <p style="margin: 0; color: #666;">We honor the dignity and individuality of every person, ensuring a supportive and inclusive environment for patients, families, and staff.</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 4: Excellence -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/Collaboration.png')}}" alt="Excellence" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Collaboration</h4>
                                            <p style="margin: 0; color: #666;">We work together as a unified team, valuing each member’s contributions and promoting open communication to enhance patient care and outcomes.</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 5: Grounded -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/Innovation.png')}}" alt="Grounded" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Innovation</h4>
                                            <p style="margin: 0; color: #666;">We embrace new ideas and practices to advance medical treatments and improve healthcare delivery, staying at the forefront of medical advancements.</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 6: Respect -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/Patient-Centered Care.png')}}" alt="Respect" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Patient-Centered Care</h4>
                                            <p style="margin: 0; color: #666;">We prioritize the needs and preferences of our patients, tailoring our services to ensure a personalized and compassionate healthcare experience.</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 7: Accessible -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{('website/images/coreicon/safety.png')}}" alt="Accessible" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Safety</h4>
                                            <p style="margin: 0; color: #666;">We are dedicated to maintaining a safe environment for both patients and staff, adhering to the highest standards of clinical and operational safety</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 8: Teamwork -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{('website/images/coreicon/Teamwork.jpeg')}}" alt="Teamwork" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Teamwork</h4>
                                            <p style="margin: 0; color: #666;">Combining experience and expertise with optimum team cohesion</p>
                                        </div>
                                    </div>

                                    <!-- Additional Values -->
                                    <!-- Core Value 9: Empathetic -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{url('website/images/coreicon/Integrity.png')}}" alt="Empathetic" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Integrity</h4>
                                            <p style="margin: 0; color: #666;">Promoting an empathy-driven culture, ensuring to put the patient first</p>
                                        </div>
                                    </div>

                                    <!-- Core Value 10: Dependable -->
                                    <div style="flex-basis: 50%; display: flex; align-items: center; margin-bottom: 20px;">
                                        <img src="{{('website/images/coreicon/Dependable.png')}}" alt="Dependable" style="width: 50px; height:50px; margin-right: 15px;">
                                        <div>
                                            <h4 style="font-size: 18px; margin: 0;">Dependable</h4>
                                            <p style="margin: 0; color: #666;">Encouraging commitment to patient-centeredness through enhanced reliability</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="founders" style="display: none; ">

                        <!-- Partners Section -->

                        <div class="row">
                            <!-- First Founder Card -->
                            <div class="col-md-6">
                                <div class="founders-card shadow p-4 mb-4 bg-white rounded">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <img src="{{url('website/images/doctor-5.jpg')}}" class="img-fluid" style="border-radius: 12px; height: 220px; width: 100%;">
                                        </div>
                                        <div class="col-7">
                                            <blockquote class="blockquote" style="font-size: 1.2em; font-style: italic; color: #555;">
                                                "We aim to provide personalized care and a seamless experience using advanced and cutting-edge technologies."
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="founders-details mt-4">
                                        <h5 style="font-weight: bold; color: #2c3e50;">Dr. Saeed Ahmad Kamyana</h5>
                                        <p class="text-muted mb-1">Founder</p>
                                        <p class="text-justify">
                                            Dr. Saeed, a distinguished graduate of King Edward Medical College,
                                            is a founding member of Farhat hospital, where his expertise as an
                                            ENT specialist has significantly influenced our medical community.
                                            With a robust career that culminated in his retirement as the Director
                                            of Health for the Sahiwal Division, Dr. Saeed has dedicated his life
                                            to advancing healthcare standards. His leadership and commitment
                                            to patient care have been instrumental in shaping the values and
                                            vision of our institution, ensuring that we provide exceptional
                                            medical services to the community. Dr. Saeed's wealth of experience
                                            and passion for medicine continue to inspire both staff and patients alike.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Second Founder Card -->
                            <div class="col-md-6">
                                <div class="partners-card shadow p-4 mb-4 bg-white rounded">
                                    <div class="row align-items-center">
                                        <div class="col-5">
                                            <img src="{{url('website/images/doctor-5.jpg')}}" class="img-fluid" style="border-radius: 12px; height: 220px; width: 100%;">
                                        </div>
                                        <div class="col-7">
                                            <blockquote class="blockquote" style="font-size: 1.2em; font-style: italic; color: #555;">
                                                "This is a thematic hospital built on the concept of integrated healthcare and standardized way of treatment."
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="partners-details mt-4">
                                        <h5 style="font-weight: bold; color: #2c3e50;">Mrs. Aasia Saeed</h5>
                                        <p class="text-muted mb-1">Founder & Chief Executive Officer</p>
                                        <p class="text-justify">
                                            As the CEO of Farhat Hospital in Sahiwal and one of its founding members, Mrs. Aasia Saeed plays a pivotal role in advancing healthcare in the region. Beginning her journey at St. Mary’s Convent Sahiwal, she has distinguished herself with a solid educational foundation, holding a Master’s degree in English from Bahauddin Zikriya University, Multan.
                                            Beyond healthcare, Mrs. Aasia Saeed is deeply committed to community service, holding leadership roles in organizations such as Inner Wheel International Club Sahiwal and APWA Sahiwal. Her active involvement in social welfare demonstrates her dedication to uplifting her community.
                                            With a proven track record of leadership and service, Mrs. Aasia Saeed continues to make significant contributions to both education and healthcare in Sahiwal.
                                            This i got from IMC hospital and alter that for Farhat hospital Sahiwal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="partners" style="display: none; ">
                        <!-- Partners Section -->
                        <div class="row">
                            <!-- First Founder Card -->
                            <div class="col-6">
                                <div class="partners-card ">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="{{url('website/images/doctor-5.jpg')}} " height="220px" ; width="200px" style="border-radius: 12px">
                                        </div>
                                        <div class="col-7">
                                            <blockquote style="font-size: 1.2em;">
                                                We aim to provide personalized care and a seamless experience using advanced and cutting-edge technologies.
                                            </blockquote>
                                        </div>
                                    </div>
                                    <div class="partners-details">
                                        <h5>Mr. Adnan Rasool</h5>

                                        <p>Manging Partner</p>
                                        {{-- <p>Prof. Dr. Saeed Ahmad Kamyana is a renowned eye surgeon in Pakistan with over 40 years of experience at both national and international levels. He has served as the Head & Professor of Ophthalmology in top hospitals and has published numerous papers in peer-reviewed journals.</p> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Second Founder Card -->
                            <div class="col-6">
                                <div class="partners-card ">
                                    <div class="row">
                                        <div class="col-5">
                                            <img src="{{url('website/images/doctor-5.jpg')}} " height="220px" ; width="200px" style="border-radius: 12px">
                                        </div>
                                        <div class="col-7">
                                            <blockquote style="font-size: 1.2em">This is a thematic hospital built on the concept of integrated healthcare and standardized way of treatment.</blockquote>
                                        </div>
                                    </div>
                                    <div class="partners-details">
                                        <h5>Mr. Nasir Malik</h5>
                                        <p>Managing Partner</p>
                                        {{-- <p>Prof. Dr. Saeed Ahmad Kamyana is a renowned eye surgeon in Pakistan with over 40 years of experience at both national and international levels. He has served as the Head & Professor of Ophthalmology in top hospitals and has published numerous papers in peer-reviewed journals.</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Management Section -->
                    <div id="management" style="display: none;">

                        <div class="container">
                            <div class="row">
                                <!-- DOCTOR #1 -->
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 320px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 200px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Muhammad Bin Abid</h5>
                                            <span>Medical Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 320px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <!-- Doctor Photo -->
                                        <div class="image-hover" style="background-image: url('website/images/womanicon.png'); height: 200px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <!-- Doctor Meta -->
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Dr Rohma Saeed</h5>
                                            <span>Assistant Medical Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 320px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 200px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Adnan Rasool</h5>
                                            <span>Adminsitrator</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 200px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Mr. Nasir Malik</h5>
                                            <span>Marketing Head</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Second Row -->
                            <div class="row">
                                <!-- DOCTOR #5 -->
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 240px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">M. Noman</h5>
                                            <span>Pharmacy In charge</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- DOCTOR #6 -->
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 240px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Rizwan Malik</h5>
                                            <span>Accountant</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- DOCTOR #7 -->
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 240px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Rehan</h5>
                                            <span>Lab In charge</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- DOCTOR #8 -->
                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/manicon.jpg'); height: 240px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Waqar Danish</h5>
                                            <span>Hr Head</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-3 col-lg-3">
                                    <div class="doctor-2" style="width: 250px; height: 350px; overflow: hidden; transition: box-shadow 0.3s ease;">
                                        <div class="image-hover" style="background-image: url('website/images/nurse.jpeg'); height: 240px; background-size: cover; background-position: center; border-radius: 12px; transition: transform 0.3s ease;"></div>
                                        <div class="doctor-meta">
                                            <h5 class="h5-xs blue-color">Zahida</h5>
                                            <span>Nursing Director</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- CSS for hover effect -->
                        <style>
                            .doctor-2 {
                                transition: all 0.4s ease;
                                border-radius: 12px;
                                padding: 15px;
                                position: relative;
                                overflow: hidden;
                            }

                            .doctor-2:hover {
                                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
                                /* Add shadow on hover */
                                transform: scale(1.05);
                                /* Slight scale-up effect on hover */
                            }

                            .image-hover {
                                transition: all 0.4s ease;
                                border-radius: 12px;
                            }

                            .doctor-2:hover .image-hover {
                                animation: zoomIn 0.4s forwards;
                                /* Image zoom-in effect */
                            }

                            .doctor-meta {
                                text-align: center;
                                margin-top: 15px;
                                opacity: 1;
                                transition: opacity 0.4s ease;
                            }

                            .doctor-2:hover .doctor-meta {
                                animation: fadeIn 0.4s ease forwards;
                            }

                            /* Keyframes for zoom and fade */
                            @keyframes zoomIn {
                                from {
                                    transform: scale(1);
                                }

                                to {
                                    transform: scale(1.1);
                                }
                            }

                            @keyframes fadeIn {
                                from {
                                    opacity: 0;
                                }

                                to {
                                    opacity: 1;
                                }
                            }
                        </style>

                        <!-- End container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Footer -->
    @include('website.layouts.footer')
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JavaScript to toggle sections -->


    <script>
        // Get the current page's path (excluding domain, query parameters, and hash fragments)
        const currentPath = window.location.pathname;

        // Loop through each sidebar link
        document.querySelectorAll('.sidebar a').forEach(link => {
            // Extract the path from the link's href attribute
            const linkPath = new URL(link.href).pathname;

            // Compare the current path with the link's path and set 'active' class if they match
            if (linkPath === currentPath) {
                link.classList.add('active');
            }
        });
    </script>
    <script>
        function showSection(section) {
            // Hide all sections
            document.getElementById('overview').style.display = 'none';
            document.getElementById('core-values').style.display = 'none';
            document.getElementById('founders').style.display = 'none';
            document.getElementById('partners').style.display = 'none';
            document.getElementById('management').style.display = 'none';

            // Show the selected section
            document.getElementById(section).style.display = 'block';
        }
    </script>
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