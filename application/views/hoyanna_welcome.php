<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Meta Keyword -->
    <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <!-- meta character set -->
    <meta charset="utf-8">

    <!-- Site Title -->
    <title>Hoyanna.lk</title>
    
    <!--
    Google Fonts
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
	
    <!--
    CSS
    ============================================= -->
    <!-- Fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery.fancybox.css">
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/owl.carousel.css">
    <!-- Animate -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/main.css">
    <!-- Main Responsive -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
	
	
	<!-- Modernizer Script for old Browsers -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>
	
</head>

<body>

    <!--
    Fixed Navigation
    ==================================== -->
    <header id="navigation" class="navbar-fixed-top">
        <div class="container">

            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <h1 class="navbar-brand">
                    <a href="#body">
                        <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Kasper Logo">
                    </a>
                </h1>
                <!-- /logo -->

                </div>

                <!-- main nav -->
                <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#home">Home</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="<?php echo site_url('Home/login') ?>" style="background-color:rgba(0,0,0,.075)">Login</a></li>
                    </ul>
                </nav>
                <!-- /main nav -->
            </div>

        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->


    <!--
    Home Slider
    ==================================== -->
    <section id="home">     
        <div id="home-carousel" class="carousel slide" data-interval="false">
            <ol class="carousel-indicators">
                <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#home-carousel" data-slide-to="1"></li>
                <li data-target="#home-carousel" data-slide-to="2"></li>
            </ol>
            <!--/.carousel-indicators-->

            <div class="carousel-inner">

                <div class="item active"  style="background-image: url('<?php echo base_url(); ?>/assets/img/slider/bg2.jpg')" >
                    <div class="carousel-caption">
                        <div class="animated bounceInRight">
                            <h2>sample 1</h2>
                            <p>para 1.</p>
                        </div>
                    </div>
                </div>              

                <div class="item" style="background-image: url('<?php echo base_url(); ?>/assets/img/slider/bg2.jpg')">                
                    <div class="carousel-caption">
                        <div class="animated bounceInDown">
                            <h2>Sample 2 </h2>
                            <p>para 2.</p>
                        </div>
                    </div>
                </div>

                <div class="item" style="background-image: url('<?php echo base_url(); ?>/assets/img/slider/bg3.jpg')">                 
                     <div class="carousel-caption">
                        <div class="animated bounceInUp">
                            <h2>sample 3</h2>
                            <p>para 3.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--/.carousel-inner-->
            <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                    <i class="fa fa-angle-left fa-3x"></i>
                </a>
                <a class="sl-next" href="#home-carousel" data-slide="next">
                    <i class="fa fa-angle-right fa-3x"></i>
                </a>
            </nav>

        </div>
    </section>
    <!--
    End #home Slider
    ========================== -->

    
    <!--
    #service
    ========================== -->
    <section id="service">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center wow fadeInDown">
                        <h2>Services</h2>    
                        <p>Opportunities for your success.</p>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6 col-sm-12 wow fadeInLeft">
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/monitor.png" class="media-object" alt="Monitor">
                        </a>
                        <div class="media-body">
                            <h3>Jobs and Opportunities.</h3>
                            <p>We provide job opportunities, by connecting employers and employees we reduce the unemployment in the UVA province.</p>
                        </div>
                    </div>

                </div>

                <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/cog.png" alt="Cog">
                        </a>
                        <div class="media-body">
                            <h3>Create Business Networks.</h3>
                            <p>By providing the ability to meet the sellers and buyers in out new marketplace to sell their crops/products we creates new networks.</p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-6 col-sm-12 wow fadeInLeft">
                    <div class="media">
                        <a href="#" class="pull-left">
                            <img src="<?php echo base_url(); ?>/assets/img/icons/ruler.png" alt="Ruler">
                        </a>
                        <div class="media-body">
                            <h3>Events and Meetups.</h3>
                            <p>Knowledge transferring sessions on carrier guidance, entrepreneurship, new methods and technologies etc.</p>
                        </div>
                    </div>
                </div>



            </div> <!-- end .row -->
        </div> <!-- end .container -->
    </section>
    <!--
    End #service
    ========================== -->

    <!--
    #service-bottom
    ========================== -->
    
    <section id="service-bottom">
        <div class="container">
                <div class="mobile-device">
                   <img data-wow-delay="0.2s" class="img-responsive black  wow fadeInLeftBig" src="<?php echo base_url(); ?>/assets/img/icons/iphone-black.png" alt="iPhone Black">
                    <img data-wow-delay="0.5s" class="img-responsive white  wow fadeInLeftBig" src="<?php echo base_url(); ?>/assets/img/icons/iphone-white.png" alt="iPhone White">
                </div>
            <div class="service-features wow fadeInRight">
                <h3>OUR DESIGNS COMES WITH...</h3>
                <ul>
                    <li>Responsive Design</li>
                    <li>Modern And Clean Design</li>
                    <li>Clean Code</li>
                    <li>Browser Friendly</li>
                </ul>
            </div>
        </div>
    </section>
    <!--
    End #service-bottom
    ========================== -->


    <!--
    #Portfolio
    ========================== -->
    
    <!--
    End #Portfolio
    ========================== -->

    <!--
    #about
    ========================== -->
    <section id="about" style="margin-top: -40px">
        <div class="container">
            <div class="row">

                <div class="section-title text-center wow fadeInUp">
                    <h2>About Us</h2>    
                    <p></p>
                </div>
                
                <div class="about-us text-center wow fadeInDown" style="margin-top: -40px">
                    <h5></h5>
                    <h5></h5>
                    <img style="width: 400px; height: 120px" src="<?php echo base_url(); ?>assets/img/cover.png" alt="About Us" class="img-responsive">
                </div>
            </div>
        </div>
    </section>
    <!--
    End #about
    ========================== -->    

    <!--
    #count
    ========================== -->
    
    <section id="count">
        <div class="container">
            <div class="row">
                <div class="counter-section clearfix">

                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="fact-item text-center">
                            <div class="fact-icon">
                                <i class="fa fa-check-square fa-lg"></i>
                            </div>
                            <span data-to="150">0</span>
                            <p>Opportunities</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="fact-item text-center">
                            <div class="fact-icon">
                                <i class="fa fa-trophy fa-lg"></i>
                            </div>
                            <span data-to="18">0</span>
                            <p>Successful Stories</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                        <div class="fact-item text-center last">
                            <div class="fact-icon">
                                <i class="fa fa-clock-o fa-lg"></i>
                            </div>
                            <span data-to="51">0</span>
                            <p>Product/Service Sellers</p>
                        </div>
                    </div>
                    
                    <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                        <div class="fact-item text-center last">
                            <div class="fact-icon">
                                <i class="fa fa-users fa-lg"></i>
                            </div>
                            <span data-to="157">0</span>
                            <p>Subscribers</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--
    End #count
    ========================== -->

    <!--
    #quotes
    ========================== -->
    <section id="quotes" style="height: 50px">
        <div class="container">
            <div class="row wow zoomIn">
                <div class="col-lg-12">
                    <div class="call-to-action text-center">
                        <p>“Opportunities for Your Success..”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    End #quotes
    ========================== -->

    <!--
    #pricing
    ========================== -->
    <section id="pricing">
        <div class="container">
            <div class="row">

                <div class="section-title text-center wow fadeInUp">
                    <h2>Pricing</h2>    
                    <p>Opportunities for your success.</p>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp">
                    <div class="pricing-table text-center">
                        <div class="price">
                            <span class="plan">Bronze</span>
                            <span class="value"><small>Rs.</small><strong>1900</strong>/MO</span>
                        </div>
                        <a href="#" class="btn btn-price">Buy Now</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="pricing-table text-center">
                        <div class="price">
                            <span class="plan">Silver</span>
                            <span class="value"><small>Rs.</small><strong>2900</strong>/MO</span>
                        </div>

                        <a href="#" class="btn btn-price">Buy Now</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-table text-center">
                        <div class="price">
                            <span class="plan">Gold</span>
                            <span class="value"><small>Rs.</small><strong>3900</strong>/MO</span>
                        </div>

                        <a href="#" class="btn btn-price">Buy Now</a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="pricing-table text-center">
                        <div class="price">
                            <span class="plan">Platinum</span>
                            <span class="value"><small>Rs.</small><strong>4900</strong>/MO</span>
                        </div>

                        <a href="#" class="btn btn-price">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
    End #pricing
    ========================== -->


    <!--
    #subscribe
    ========================== -->
    <section id="subscribe">
        <div class="container">
            <div class="row">

                <div class="col-md-7 wow fadeInLeft">
                    <form action="#" method="post" class="subscription-form">
                        <i class="fa fa-envelope-o fa-lg"></i>
                        <input type="email" name="subscribe" class="subscribe" placeholder="YOUR MAIL" required="">
                        <input type="submit" value="SUBSCRIBE" id="mail-submit">
                    </form>
                </div>

                <div class="col-md-4 text-left wow fadeInRight">
                    <p>Subscribe Us for Monthly News Letters.</p>
                </div>
            </div>
        </div>
    </section>
    <!--
    End #subscribe
    ========================== -->


    <!--
    #contact
    ========================== -->
    <section id="contact">
        <div class="container">
            <div class="row">

                <div class="section-title text-center wow fadeInDown">
                    <h2>Contact Us</h2>
                    <p>Keep in touch with us for the new updates...</p>
                </div>
                
                <div class="col-md-8 col-sm-9 wow fadeInLeft">
                    <div class="contact-form clearfix">
                        <form action="index.html" method="post">
                            <div class="input-field">
                                <input type="text" class="form-control" name="name" placeholder="Your Name" required="">
                            </div>
                            <div class="input-field">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                            </div>
                            <div class="input-field message">
                                <textarea name="message" class="form-control" placeholder="Your Message" required=""></textarea>
                            </div>
                            <input type="submit" class="btn btn-blue pull-right" value="SEND MESSAGE" id="msg-submit">
                        </form>
                    </div> <!-- end .contact-form -->
                </div> <!-- .col-md-8 -->

                <div class="col-md-4 col-sm-3 wow fadeInRight">
                    <div class="contact-details">
                        <span>GET IN TOUCH</span>
                        <p>+94 754 543742 <br> <br> +94 715 547461</p>
                    </div> <!-- end .contact-details -->

                    <div class="contact-details">
                        <span>GET IN TOUCH</span>
                        <p>+94 754 634603 <br> <br> +94 770 388616</p>
                    </div> <!-- end .contact-details -->
                </div> <!-- .col-md-4 -->

            </div>
        </div>
    </section>
    <!--
    End #contact
    ========================== -->

    <!--
    #footer
    ========================== -->
    <footer id="footer" class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="footer-logo wow fadeInDown">
                        <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="logo">
                    </div>

                    <div class="footer-social wow fadeInUp">
                        <h3>We are social</h3>
                        <ul class="text-center list-inline">
                            <li><a href="https://www.facebook.com/hoyannalk-138117423222526/"><i class="fa fa-facebook fa-lg"></i></a></li>
                            <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                            <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        </ul>
                    </div>

                    <div class="copyright">
                        <p>Developed By Hoyanna.lk</p>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!--
    End #footer
    ========================== -->


    <!--
    JavaScripts
    ========================== -->
    
    <!-- main jQuery -->
    <script src="<?php echo base_url(); ?>/assets/js/vendor/jquery-1.11.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <!-- jquery.nav -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.nav.js"></script>
    <!-- Portfolio Filtering -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.mixitup.min.js"></script>
    <!-- Fancybox -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.fancybox.pack.js"></script>
    <!-- Parallax sections -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.parallax-1.1.3.js"></script>
    <!-- jQuery Appear -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.appear.js"></script>
    <!-- countTo -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery-countTo.js"></script>
    <!-- owl carousel -->
    <script src="<?php echo base_url(); ?>/assets/js/owl.carousel.min.js"></script>
    <!-- WOW script -->
    <script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
    <!-- theme custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/main.js"></script>
</body>
</html>
