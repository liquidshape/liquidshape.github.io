<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Synero</title>

    <!--Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- et-line icons -->
    <link href="css/et-line-icon.css" rel="stylesheet">
    <!-- font awesome for icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- PreetyPhoto -->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!-- bx slider css -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated css  -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="screen">
    <!-- animated-delay-custom css  -->
    <link href="css/animations-delay.css" rel="stylesheet" type="text/css" media="screen">
    <!--owl carousel css-->
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" type="text/css" media="screen">
    <!-- custom css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body data-spy="scroll" data-offset="80">

    <!-- Preloader -->
    <div class="animationload">
        <div class="loader">
            Loading...
        </div>
    </div> 
    <!-- End Preloader -->

    <section id="navigation" class="header">
        <div class="navbar navbar-inverse navbar-fixed-top navbar-trans" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a>
                </div>
                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#works">Works</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#blog">Blog</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div><!--navbar-default-->
    </section>
    <!--navigation section end here-->
    @yield('body')
        <!-- FOOTER
    ================================================== -->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <ul class="social list-inline">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-github"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                </ul>
            </div> <!-- end Social -->
            <div class="row">
                <p>© 2014. Theme by Harry</p>
            </div> <!-- end Copyright -->
        </div> <!-- end container -->
    </footer>


    <!-- Scroll top -->
    <a href="#" class="back-to-top animated fadeInRightBig animation-delay-1 wow"> <i class="fa fa-chevron-up"> </i> </a>


    <!-- Scripts and Plugins
    ================================================== -->
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->                                                      
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Jquery sticky -->                                                      
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <!-- Jquery easing -->                                                      
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
    <!-- Jquery nicescroll -->                                                      
    <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
    <!-- Bxslider -->                                                      
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    <!-- Owl carousel -->                                                      
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- Jquery mixitup -->                                                      
    <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
    <!-- Jquery stellar for Parallax -->                                                      
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    <!-- WOW Animation -->                                                      
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!--popup js-->
    <script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
    <!-- Custom -->                                                      
    <script type="text/javascript" src="js/custom.js"></script>

</body>
</html>