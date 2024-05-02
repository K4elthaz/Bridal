@extends('website.master')

@section('page_css')
    <style>
        .page-heading {
          margin-top: 160px !important;
          margin-bottom: 30px !important;
          background-image: url('/website/images/maincover.jpg') !important;
          background-position: center center !important;
          background-size: cover !important;
          background-repeat: no-repeat !important;
        }
    </style>
@endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Shop</h2>
                        <span>Elevate Your Moment: Shawn's Bridal Shop, Where Dreams are Tailored.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="website/images/manequin2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us</h4>
                        <span>Shawn's Shop is about empowering you to feel your best, no matter the occasion. We offer personalized consultations to help you navigate the rental and sale options, ensuring you find the perfect outfit that fits your style and budget.</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Ditch the fashion woes and embrace the excitement of getting glammed up! Shawn'n Shop is your rental and sale haven for every event.</p>
                        </div>
                        <p>At Shawn's, we believe style transcends age and occasion. We craft stunning gowns and impeccably tailored suits for everyone from starry-eyed brides and dapper grooms to confident everyday fashionistas and adorable flower girls. Whether you're dazzling at a gala, celebrating a milestone birthday, or simply adding a touch of elegance to your daily life, we offer budget-friendly, high-quality pieces for every story. With an eye for timeless beauty and a commitment to sustainable practices, we help you discover the perfect outfit to make you feel incredible, inside and out.</p>
                        <ul>
                            <li><a href="{!! Helper::getFacebook() !!}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Team</h2>
                       <p> <span>Step into the vibrant world of Shawn Shop, where attentive smiles and shimmering possibilities await.<br> Meet the team ready to make your vision a reality, one exquisite detail at a time.<span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="website/images/syra.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Syra Isabel Valle</h4>
                            <span>Confidante</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="https://www.facebook.com/mahalcastillo06"><i class="fa fa-facebook"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <img src="website/images/ownershawn.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Sherlyn Pentinio</h4>
                            <span>Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <div class="hover-effect">
                                <div class="inner-content">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <img src="website/images/rose.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Rose Maria Espinosa</h4>
                            <span>Confidante</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Services</h2>
                        <span>Shawn's Errand Service takes the weight off your shoulders, freeing up your time for what matters most.</span>
                    </div>
                </div>
                
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Rental</h4>
                        <p>Ditch the hefty price tag and embrace the flexibility of renting a designer gown and suit for your special occasion. We have a dazzling collection of gowns and suit for every mood, from red-carpet ready ballgowns to trendy jumpsuits and chic cocktail dresses.</p>
                        <img src="website/images/rent1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <h4>Sale</h4>
                        <p>From timeless silhouettes to on-trend styles, our sale selection caters to diverse tastes and budgets. We believe everyone deserves to feel confident and beautiful, so let us help you find the piece that speaks to your unique style.</p>
                        <img src="website/images/sale1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->


    <!-- ***** Contact Area Starts ***** -->
    <section class="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <div class="section-heading">
                        <h2>Our Location</h2>
                        <span>Come and visit, let us dress your dreams, one stunning outfit at a time.</span>
                    </div>
                </div>
                <div class="col-lg-12" style="margin-bottom: 0; padding-bottom: 0">
                    <div id="map">
                      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30936.672232283385!2d121.44368635548275!3d14.248320371779645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397e36caacefcb5%3A0xa2e1972e77b4f481!2sLaguna%20Provincial%20Library!5e0!3m2!1sen!2sph!4v1592208672376!5m2!1sen!2sph" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
                      <iframe 
                        src="{!! Helper::getMap() !!}"
                        width="100%" 
                        height="400" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                      <!-- You can simply copy and paste "Embed a map" code from Google Maps for any location. -->
                    </div>
                </div>
            </div>
        </div>
    </section>
   <!-- ***** Contact Area Ends ***** -->

@endsection