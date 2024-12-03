<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="author" content="Jthemes"/>
    <meta name="description" content="Farhat Hospital"/>
    <meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Farhat Hospital | Appointment</title>
    @include('website.layouts.header')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Favicon -->
   
    <!-- Custom CSS -->
    
</head>

<body>
  
    <div id="page" class="page">
        @include('website.layouts.nav')


        <div id="breadcrumb" class="division">
            <div class="container">
                <div class="row">						
                    <div class="col">
                        <div class="breadcrumb-holder">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                                  </ol>
                            </nav>
                            <h4 class="h4-sm steelblue-color">Appointment</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Styled Contact Container -->
        <div class="container contact-container" style="text-align: center; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);">
            <h1 style="font-size: 2.5em; margin-bottom: 20px;">Contact Us</h1>
            <p style="font-size: 1.2em; margin-bottom: 10px;">If you need to make an appointment, please call us at:</p>
            <a href="tel:+92306946443" class="phone-number" style="font-size: 1.5em; color: #007bff; text-decoration: none;">+92306946443</a>
        </div>
        

      
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
