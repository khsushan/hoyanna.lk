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

        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/fullcalendar.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/jquery-ui.css">
        <!-- Modernizer Script for old Browsers -->
        <script src="<?php echo base_url(); ?>/assets/js/vendor/modernizr-2.6.2.min.js"></script>

    </head>

    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top animated-nav" style="background-color: rgb(0, 199, 252)">
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
                        <a href="<?php echo site_url('Welcome/index') ?>">
                            <img src="<?php echo base_url(); ?>/assets/img/logo.png" alt="Kasper Logo">
                        </a>
                    </h1>
                    <!-- /logo -->

                </div>

                <!-- main nav -->
                <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav" style="color:black">
                        <li><a style="color:black" href="#vacancies">vacancies</a></li>
                        <li><a style="color:black" href="#Statistics">Job Statistics</a></li>

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
    #about-us
    ========================== -->
    <section id="vacancies">
        <div class="container">
            <div class="row">

                <div id="jobDetails" class="col-md-5 col-md-offset-1 wow fadeInLeft">

                    <div class="subtitle text-center">
                        <h4>Vacancies</h4>
                        <p>Vacancy Details.</p>
                    </div>

                    <div id="testimonial" style="margin-top:-50px">    
                        <?php
                        $vacancyIndex = 1;
                        foreach ($vacancies as $vacancy):
                            ?>  
                            <?php
                            if ($vacancyIndex % 3 == 1):
                                echo '<div class="tst-item clearfix">';
                            endif;
                            ?> 
                            <a href="#" onclick="showVacancies(this)">                                
                                <div class="tst-single clearfix" id="<?= $vacancy['id']; ?>">
                                    <img src="<?php echo base_url(); ?>/assets/img/client/1.png" alt="Client" class="img-circle">
                                    <div class="tst-content">
                                        <p><b>Description </b> : <?= $vacancy['description']; ?></p>
                                        <p><b>Date  </b> : <?= $vacancy['date']; ?></p>
                                        <p><b>Vacancy Name </b>  : <?= $vacancy['name']; ?></p>
                                        <p><b>Type </b>  : <?= $vacancy['type']; ?></p>
                                        <span style="margin-top: 7px"> <b>User Name  </b> : <?= $vacancy['username']; ?></span>
                                    </div>
                                </div>
                            </a>
                            <?php
                            if ($vacancyIndex % 3 == 0):
                                echo "</div>";
                            endif;
                            ?> 

                            <?php
                            $vacancyIndex++;
                        endforeach;
                        ?>  
                    </div> <!-- end #testimonial -->
                </div> <!-- end .col-md-5 -->

                <div class="col-md-5 col-md-offset-1 wow fadeInRight">

                    <div class="subtitle text-center">
                        <h4>Vacancy Details</h3>
                            <p>Detail Para.</p>
                    </div>

                    <div class="progress-bars" id="requests1" style="color:black;display:none;margin-left:60px ; margin-top: -40px">
                        <h5><b>Name  : </b>Chamitha Narawita</h5> <br>
                        <h5><b>Email : </b>chamithanara@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0770388616</h5><br>
                        <h5><b>NIC   : </b>923221263v</h5><br>

                        <hr>

                        <h5><b>Name  : </b>Ashan Dhananjaya</h5> <br>
                        <h5><b>Email : </b>Ashan@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0770389616</h5><br>
                        <h5><b>NIC   : </b>923226863v</h5><br>

                        <hr>

                        <h5><b>Name  : </b>Nilupul liyanage</h5> <br>
                        <h5><b>Email : </b>Nilupul@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0752385616</h5><br>
                        <h5><b>NIC   : </b>9234225253v</h5><br>
                    </div>  <!-- progress-bars -->

                    <div class="progress-bars" id="requests2" style="color:black;display:none;margin-left:60px ; margin-top: -40px">
                        <h5><b>Name  : </b>ershadi jayathileka</h5> <br>
                        <h5><b>Email : </b>ershadi@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0710323616</h5><br>
                        <h5><b>NIC   : </b>924521563v</h5><br>

                        <hr>

                        <h5><b>Name  : </b>Ushan Sachith</h5> <br>
                        <h5><b>Email : </b>Ushan@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0790312616</h5><br>
                        <h5><b>NIC   : </b>923346846v</h5><br>

                    </div>  <!-- progress-bars -->

                    <div class="progress-bars" id="requests3" style="color:black;display:none;margin-left:60px ; margin-top: -40px">
                        <h5><b>Name  : </b>Kamila mohimad</h5> <br>
                        <h5><b>Email : </b>Kamila@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0789388456</h5><br>
                        <h5><b>NIC   : </b>938921245v</h5><br>

                        <hr>
                    </div>  <!-- progress-bars -->

                    <div class="progress-bars" id="requests4" style="color:black;display:none;margin-left:60px ; margin-top: -40px">
                        <h5><b>Name  : </b>ershadi jayathileka</h5> <br>
                        <h5><b>Email : </b>ershadi@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0710323616</h5><br>
                        <h5><b>NIC   : </b>924521563v</h5><br>

                        <hr>

                        <h5><b>Name  : </b>Ushan Sachith</h5> <br>
                        <h5><b>Email : </b>Ushan@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0790312616</h5><br>
                        <h5><b>NIC   : </b>923346846v</h5><br>

                    </div>  <!-- progress-bars -->


                    <div class="progress-bars" id="requests5" style="color:black;display:none;margin-left:60px ; margin-top: -40px">

                        <h5><b>Name  : </b>Nilupul liyanage</h5> <br>
                        <h5><b>Email : </b>Nilupul@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0752385616</h5><br>
                        <h5><b>NIC   : </b>9234225253v</h5><br>
                        <hr>

                        <h5><b>Name  : </b>Ashan Dhananjaya</h5> <br>
                        <h5><b>Email : </b>Ashan@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0770389616</h5><br>
                        <h5><b>NIC   : </b>923226863v</h5><br>

                        <hr>
                        <h5><b>Name  : </b>Chamitha Narawita</h5> <br>
                        <h5><b>Email : </b>chamithanara@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0770388616</h5><br>
                        <h5><b>NIC   : </b>923221263v</h5><br>
                    </div>  <!-- progress-bars -->

                    <div class="progress-bars" id="requests6" style="color:black;display:none;margin-left:60px ; margin-top: -40px">
                        <h5><b>Name  : </b>Kamila mohimad</h5> <br>
                        <h5><b>Email : </b>Kamila@gmail.com</h5><br>
                        <h5><b>Tel   : </b>0789388456</h5><br>
                        <h5><b>NIC   : </b>938921245v</h5><br>

                        <hr>
                    </div>  <!-- progress-bars -->
                </div>  <!-- end .col-md-5 -->
            </div>
        </div>
    </section>

    <section id="Statistics" style="margin-top: -150px">
        <div class="container">
            <hr>
            <div class="row">
                <div id="chart1" style="min-width: 310px; max-width: 1000px; height: 400px; margin: 0 auto; margin-bottom: 40px" class="chart1"></div>
                </br>
                <div id="chart2" style="min-width: 310px; max-width: 1000px; height: 400px; margin: 0 auto; margin-bottom: 40px" class="chart2"></div>
                </br>

            </div>
        </div>
    </section>

    <!--
    End #about-us
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
    <script src="<?php echo base_url(); ?>/assets/js/mainView.js"></script>

    <!-- theme custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/exporting.js"></script>

    <!-- theme custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/highcharts.js"></script>

    <!-- theme custom scripts -->
    <script src="<?php echo base_url(); ?>/assets/js/jquery.fullcalendar.min.js"></script>

    <script>
                                function showVacancies(elements) {
                                    var elmId = elements.childNodes[1].id;

                                    if (elmId == 1) {
                                        $("#requests1").show();
                                        $("#requests2").hide();
                                        $("#requests3").hide();
                                        $("#requests4").hide();
                                        $("#requests5").hide();
                                        $("#requests6").hide();
                                    }

                                    if (elmId == 2) {
                                        $("#requests2").show();
                                        $("#requests1").hide();
                                        $("#requests3").hide();
                                        $("#requests4").hide();
                                        $("#requests5").hide();
                                        $("#requests6").hide();
                                    }

                                    if (elmId == 3) {
                                        $("#requests3").show();
                                        $("#requests1").hide();
                                        $("#requests2").hide();
                                        $("#requests4").hide();
                                        $("#requests5").hide();
                                        $("#requests6").hide();
                                    }

                                    if (elmId == 4) {
                                        $("#requests3").hide();
                                        $("#requests1").hide();
                                        $("#requests2").hide();
                                        $("#requests4").show();
                                        $("#requests5").hide();
                                        $("#requests6").hide();
                                    }

                                    if (elmId == 5) {
                                        $("#requests3").hide();
                                        $("#requests1").hide();
                                        $("#requests2").hide();
                                        $("#requests4").hide();
                                        $("#requests5").show();
                                        $("#requests6").hide();
                                    }

                                    if (elmId == 7) {
                                        $("#requests3").hide();
                                        $("#requests1").hide();
                                        $("#requests2").hide();
                                        $("#requests4").hide();
                                        $("#requests5").hide();
                                        $("#requests6").show();
                                    }
                                }
    </script>
</body>
</html>
