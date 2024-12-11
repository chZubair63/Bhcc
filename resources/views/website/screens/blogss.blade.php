<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Farhat Hospital</title>
    @include('website.layouts.header')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
</head>
<style>body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    color: #333;
}

.blog-header {
    margin-bottom: 40px;
}
.blog-header h1 {
    font-size: 2rem;
    font-weight: bold;
}
.blog-header p {
    color: #555;
}
.blog-post {
    margin-bottom: 30px;
}
.blog-post img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
}
.blog-post .blog-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #007bff;
}
.blog-post .blog-meta {
    font-size: 0.9rem;
    color: #777;
}
.blog-post .blog-content {
    font-size: 0.95rem;
    color: #555;
}
.read-more {
    font-weight: bold;
    text-decoration: none;
    color: #007bff;
}
.read-more:hover {
    text-decoration: underline;
}
.sidebar {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}
.sidebar .sidebar-title {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 20px;
}
.sidebar .latest-post {
    margin-bottom: 20px;
    display: flex;
}
.sidebar .latest-post img {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 5px;
    margin-right: 10px;
}
.sidebar .latest-post .post-title {
    font-size: 0.9rem;
    font-weight: bold;
    color: #007bff;
}
.sidebar .latest-post .post-meta {
    font-size: 0.75rem;
    color: #777;
}
.pagination {
    justify-content: center;
}
          

.full-content {
  display: none;
}

.short-content {
  display: block;
}</style>
<body>
    <div id="page" class="page">
		@include('website.layouts.nav')
<div class="container">
    <!-- Blog Header -->
    <div class="blog-header">
        <h1>Latest Blogs</h1>
        <p>Farhat Hospital Sahiwal</p>
    </div>

    <div class="row">
        <!-- Blog Posts Section -->
        <div class="col-md-8">
            <div class="row">
                <!-- Blog Post 1 -->
                <div class="col-md-6 blog-post">
                    <img src="website/images/blogone.jpeg" alt="Blog Image 1">
                    <h5 class="blog-title">What is Pleural Effusion?</h5>
                    <p class="blog-meta">October 20, 2024</p>
                    <p class="blog-content short-content">The accumulation of fluid in the lungs is called pleural effusion. This blog shares some approaches on how to manage and treat this condition...</p>
                    <p class="blog-content full-content" style="display:none;">
                        Pleural effusion occurs when excess fluid builds up between the layers of the pleura, the membrane that covers the lungs. Treatment options vary depending on the cause and severity, ranging from simple drainage to more advanced therapies...
                    </p>
                    <a href="#" class="read-more">Read More</a>
                    
                </div>
                
             
                <!-- Blog Post 2 -->
                <div class="col-md-6 blog-post">
                    <img src="{{url('website/images/blogtwo.jpg')}}" alt="Blog Image 2">
                    <h5 class="blog-title">Endoscopic Spine Surgery in Pakistan</h5>
                    <p class="blog-meta">October 18, 2024</p>
                    <p class="blog-content">An incredibly minimally invasive surgical technique, endoscopic spine surgery, is now available in Pakistan. It allows quick recovery and less pain...</p>
                    
                    <!-- Hidden full content -->
                    <div class="full-content" style="display: none;">
                        <p>Full content of the blog post goes here. This will be shown when the "Read More" link is clicked...</p>
                    </div>
                
                    <a href="javascript:void(0);" class="read-more" onclick="toggleReadMore(this)">Read More</a>
                </div>
                <div class="col-md-6 blog-post">
                    <img src="{{url('website/images/blogtwo.jpg')}}" alt="Blog Image 2">
                    <h5 class="blog-title">Endoscopic Spine Surgery in Pakistan</h5>
                    <p class="blog-meta">October 18, 2024</p>
                    <p class="blog-content">An incredibly minimally invasive surgical technique, endoscopic spine surgery, is now available in Pakistan. It allows quick recovery and less pain...</p>
                    
                    <!-- Hidden full content -->
                    <div class="full-content" style="display: none;">
                        <p>Full content of the blog post goes here. This will be shown when the "Read More" link is clicked...</p>
                    </div>
                
                    <a href="javascript:void(0);" class="read-more" onclick="toggleReadMore(this)">Read More</a>
                </div>


                <script>
                    function toggleReadMore(link) {
                        const fullContent = link.previousElementSibling; // This targets the full-content div
                        if (fullContent.style.display === "none") {
                            fullContent.style.display = "block";
                            link.innerText = "Read Less"; // Change text to 'Read Less'
                        } else {
                            fullContent.style.display = "none";
                            link.innerText = "Read More"; // Change text back to 'Read More'
                        }
                    }
                </script>
                
                

                <!-- Blog Post 3 -->
                {{-- <div class="col-md-4 blog-post">
                    <img src="https://via.placeholder.com/400x200" alt="Blog Image 3">
                    <h5 class="blog-title">Best Diabetologist in Lahore</h5>
                    <p class="blog-meta">October 16, 2024</p>
                    <p class="blog-content">A diabetologist is crucial for managing diabetes. This post provides insight into finding the best diabetologist in Lahore...</p>
                    <a href="#" class="read-more">Read More</a>
                </div> --}}

                <!-- More blog posts as needed -->
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                    <li class="page-item"><a class="page-link" href="#">9</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>

        <!-- Sidebar Section -->
        <div class="col-md-4">
            <div class="sidebar">
                <h5 class="sidebar-title">Latest Blogs</h5>

                <!-- Latest Blog Post 1 -->
                <div class="latest-post">
                    <img src="{{url('website/images/blogone.jpeg')}}" style="width:30%">
                    <div>
                        <p class="post-title">What is Pleural Effusion?</p>
                        <p class="post-meta">October 20, 2024</p>
                    </div>
                </div>

                <!-- Latest Blog Post 2 -->
                <div class="latest-post">
                    <img src="https://via.placeholder.com/60x60" alt="Latest Blog Image">
                    <div>
                        <p class="post-title">Endoscopic Spine Surgery</p>
                        <p class="post-meta">October 18, 2024</p>
                    </div>
                </div>

                <!-- Latest Blog Post 3 -->
                <div class="latest-post">
                    <img src="https://via.placeholder.com/60x60" alt="Latest Blog Image">
                    <div>
                        <p class="post-title">Best Diabetologist in Lahore</p>
                        <p class="post-meta">October 16, 2024</p>
                    </div>
                </div>
            </div>
        </div>
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
</html>


