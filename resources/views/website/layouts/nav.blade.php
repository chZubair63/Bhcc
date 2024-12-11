<!-- HEADER
			============================================= -->
<header id="header" class="header">


				<!-- MOBILE HEADER -->
			    <div class="wsmobileheader clearfix">
			    	<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
			    	<span class="smllogo"><img src="{{url('website/images/logo-grey.png')}}" width="180" height="40" alt="mobile-logo"/></span>
			    	<a href="tel:123456789" class="callusbtn"><i class="fas fa-phone"></i></a>
			 	</div>


			 	<!-- HEADER STRIP -->
      <div class="headtoppart clearfix" style="animation: slideDown 1s ease-in-out; background-color: #f8f9fa;">
       <div class="headerwp clearfix">
        
           <div class="headertopleft">			     			
            <div class="address clearfix">
                <span>
                    <a href="https://www.google.com/maps?q=farhat hospital,+Sahiwal,+Pakistan" target="_blank" style="color: #6c757d;">
                        <i class="fas fa-map-marker-alt" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #007bff;"></i>
                        7-B, Fateh Sher Road, Sahiwal, Pakistan
                    </a>
                </span> 
                <a href="tel:0404509400" class="callusbtn" style="color: #6c757d;">
                    <i class="fas fa-phone" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #007bff;"></i>
                    040-450-9400
                </a>
            </div>
     </div>


        <div class="headertopright">
           
            
            <a class="youtubeicon" title="YouTube" href="https://www.youtube.com/@FarhatHospitalSahiwal" target="_blank" style="display: inline-block; margin-right: 10px; transition: transform 0.3s ease-in-out; color: #6c757d;">
                <i class="fab fa-youtube" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #FF0000;"></i>
                <span class="mobiletext02">YouTube</span>
            </a>
            <a class="facebookicon" title="Facebook" href="https://www.facebook.com/profile.php?id=100083352491973" target="_blank" style="display: inline-block; margin-right: 10px; transition: transform 0.3s ease-in-out; color: #6c757d;">
                <i class="fab fa-facebook-f" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #007bff;"></i>
                <span class="mobiletext02">Facebook</span>
            </a>
            <a class="instagramicon" title="Instagram" href="https://www.instagram.com/farhathospital" target="_blank" style="display: inline-block; margin-right: 10px; transition: transform 0.3s ease-in-out; color: #6c757d;">
                <i class="fab fa-instagram" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #C13584;"></i>
                <span class="mobiletext02">Instagram</span>
            </a>


            <a class="twittericon" title="Twitter" href="https://twitter.com/your_profile_link" target="_blank" style="display: inline-block; margin-right: 10px; transition: transform 0.3s ease-in-out; color: #6c757d;">
                <img src="{{url('website/images/twitter.png')}}" alt="Twitter" style="width: 12px; height: 12px; transition: transform 0.3s ease-in-out; display: inline-block;" class="twitter-icon" />
                <span class="mobiletext02">Twitter</span>
                <style>.twittericon:hover .twitter-icon {
                    transform: rotate(360deg); /* Rotate 360 degrees */
                }
                </style>
            </a>
            
            
            <a class="linkedinicon" title="LinkedIn" href="https://www.linkedin.com/in/farhat-hospital-388499332/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BN01C0EgpROOseAdYVxbDVQ%3D%3D" target="_blank" style="display: inline-block; margin-right: 10px; transition: transform 0.3s ease-in-out; color: #6c757d;">
                <i class="fab fa-linkedin-in" style="transition: color 0.3s ease-in-out, transform 0.3s ease-in-out; color: #0a0b0b;"></i>
                <span class="mobiletext02">LinkedIn</span>
            </a>
            
                                    
        </div>
     </div>
     </div>


   


				 
				

			  <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix" style="background-color:rgb(225, 225, 231);">
      <div class="wsmainwp clearfix">

        <!-- LOGO IMAGE -->
        <div class="desktoplogo">
            <a href="{{url('/')}}">
                <img src="{{url('website/images/logo-grey.png')}}" width="180" height="40" alt="header-logo">
            </a>
        </div>

        <!-- MAIN MENU -->
        <nav class="wsmenu clearfix">
            <ul class="wsmenu-list">
                <li class="nl-simple" aria-haspopup="true">
                    <a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                </li>
                <li class="nl-simple" aria-haspopup="true">
                    <a href="{{ url('about-us') }}" class="{{ Request::is('about-us') ? 'active' : '' }}">About Us</a>
                </li>
                <li class="nl-simple" aria-haspopup="true">
                    <a href="{{ url('departmentss') }}" class="{{ Request::is('departments') ? 'active' : '' }}">Departments</a>
                </li>
                <li class="nl-simple" aria-haspopup="true">
                    <a href="{{ url('ourdoctors') }}" class="{{ Request::is('ourdoctors') ? 'active' : '' }}">Our Doctors</a>
                </li>
                <li class="nl-simple" aria-haspopup="true">
                    <a href="{{ url('ourservices') }}" class="{{ Request::is('ourservices') ? 'active' : '' }}">Our Services</a>
                </li>
                <li class="nl-simple header-btn clearfix" aria-haspopup="true">
                    <a href="{{ url('appointment') }}" class="{{ Request::is('appointment') ? 'active' : '' }}">Make an Appointment</a>
                </li>
            </ul>
        </nav>
        
        
      </div>
      </div>


</header>	