<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet"> --}}

    <title>Shawn's Bridal Shop | {{$page['title']}}</title>
    <link rel="icon" href="/website/images/logo-pink.png" type="image/x-icon"> 

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="/website/css/font.css">
    
    <link rel="stylesheet" type="text/css" href="/website/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="/website/css/font-awesome.css">

    <link rel="stylesheet" href="/website/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="/website/css/owl-carousel.css">

    <link rel="stylesheet" href="/website/css/lightbox.css">

    <link rel="stylesheet" href="/website/css/custom.css">
    <!--

    TemplateMo 571 Hexashop

    https://templatemo.com/tm-571-hexashop

    -->

    @yield('page_css')
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky c-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img src="/website/images/logo-black.png" width="110px" style="margin-top: -15px !important">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="/" class="{{ $page['title'] == "HOME" ? 'active' : '' }}">Home</a></li>
                            <li><a href="/men" class="{{ $page['title'] == "MEN" ? 'active' : '' }}">Men's</a></li>
                            <li><a href="/women" class="{{ $page['title'] == "WOMEN" ? 'active' : '' }}">Women's</a></li>
                            <li><a href="/kid" class="{{ $page['title'] == "KID" ? 'active' : '' }}">Kid's</a></li>
                            <li><a href="/about-us" class="{{ $page['title'] == "About Us" ? 'active' : '' }}">About Us</a></li>
                        </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    @yield('content')
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="/website/images/logo-white.png" width="110px" style="margin-top: -15px !important">
                        </div>
                        <ul>
                            <li><a href="#">{!! Helper::getAddress() !!}</a></li>
                            <li><a href="#">{!! Helper::getEmail() !!}</a></li>
                            <li><a href="#">{!! Helper::getContactNumber() !!}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="/men">Men’s</a></li>
                        <li><a href="/women">Women’s</a></li>
                        <li><a href="/kid">Kid's</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="/about-us">About Us</a></li>
                    </ul>
                </div>
                            <li><a href="/login" >#</a></li>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2023 Shawn's Bridal Shop. All Rights Reserved. 
                        <ul>
                            <li><a href="{!! Helper::getFacebook() !!}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-instagram"></i></a></li> --}}
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="/website/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="/website/js/popper.js"></script>
    <script src="/website/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="/website/js/owl-carousel.js"></script>
    <script src="/website/js/accordions.js"></script>
    <script src="/website/js/datepicker.js"></script>
    <script src="/website/js/scrollreveal.min.js"></script>
    <script src="/website/js/waypoints.min.js"></script>
    <script src="/website/js/jquery.counterup.min.js"></script>
    <script src="/website/js/imgfix.min.js"></script> 
    <script src="/website/js/slick.js"></script> 
    <script src="/website/js/lightbox.js"></script> 
    <script src="/website/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="/website/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
    @yield('page_script')
  </body>
</html>