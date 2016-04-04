@extends('_includes.base')

@section('body')

 <!-- HOME
    ================================================== -->
    <section class="carousel-section parallax" data-stellar-background-ratio="0.8" id="home">
        <div id="carousel-example-generic" class="carousel carousel-razon" data-ride="carousel" data-interval="5000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active"> <!-- item-1 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDownBig animation-delay-1 carousel-title">Welcome to <span> SYNERO </span></h1>
                                        <p class="animated fadeInUpBig animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed pulvinar augue, a aliquet ipsum. Vivamus 
                                           <br/>ligula justo, pretium vel tempor at, sodales at purus. <span>Quisque ligulas </span> ipsum, euismod <br/>atras vulputate iltricies etri elit.
                                        </p>
                                        <a href="#" class="btn btn-custom animated fadeInUpBig animation-delay-12">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item"> <!-- item-2 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDownBig animation-delay-1 carousel-title">Clean <span> design </span> with Parallax Background</h1>
                                        <p class="animated fadeInUpBig animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed pulvinar augue, a aliquet ipsum. Vivamus 
                                           <br/>ligula justo, pretium vel tempor at, sodales at purus. <span>Quisque ligulas </span> ipsum, euismod <br/>atras vulputate iltricies etri elit.
                                        </p>
                                        <a href="#" class="btn btn-custom animated fadeInUpBig animation-delay-12">Learn More</a>                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item"> <!-- item-3 -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                                <div class="carousel-caption">
                                    <div class="carousel-text">
                                        <h1 class="animated fadeInDownBig animation-delay-1 carousel-title">Say<span> Hello </span> to Lorem Ipsum Dolor</h1>
                                        <p class="animated fadeInUpBig animation-delay-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed pulvinar augue, a aliquet ipsum. Vivamus 
                                           <br/>ligula justo, pretium vel tempor at, sodales at purus. <span>Quisque ligulas </span> ipsum, euismod <br/>atras vulputate iltricies etri elit.
                                        </p>
                                        <a href="#" class="btn btn-custom animated fadeInUpBig animation-delay-12">Purchase Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    <!-- end HOME/SLIDER -->


    <!-- SERVICES
    ================================================== -->
    <section class="services" id="services">
        <div class="container">
            <h3 class="text-center text-uppercase">Our Services</h3>
            <p class="text-center margin-b-30">Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. Mauris tempus placerat felvel iaculis. Suspendisse blandit id dolor eu bibendum. Integer gravida diam ut quam eleifend, sed tristiqu diam laoreet. Donec ac gravida urna. Sed ut nibh posuere euismod est sed pellentesque purus.</p>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="thumbnail minheight">
                            <div class="box_inner">
                                <figure>
                                    <img src="img/img.png" alt="" class="img-responsive">
                                </figure>
                                <div class="caption">
                                    <a href="#">Praesent venenatis ultricies sagittis</a>
                                    <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. Mauris tempus placerat felvel iaculis.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-custom">read more</a>
                    </div>
                </div> <!-- Service-item-1 -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="thumbnail minheight">
                            <div class="box_inner">
                                <figure>
                                    <img src="img/img.png" alt="" class="img-responsive">
                                </figure>
                                <div class="caption">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetuer</a>
                                    <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere sodales. Mauris tempus placerat felvel iaculis. Suspendisse blandit id dolor eu bibendum.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-custom">read more</a>
                    </div>
                </div> <!-- Service-item-2 -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="service-item">
                        <div class="thumbnail minheight">
                            <div class="box_inner">
                                <figure>
                                    <img src="img/img.png" alt="" class="img-responsive">
                                </figure>
                                <div class="caption">
                                    <a href="#">Sed ut perspiciatis unde omnis iste natus</a>
                                    <p>Lorem ipsum dolor sit ame sectetur adipsing elit. Praesent eu est quilrs turpis posuere.</p>
                                    <p>Sodales. Mauris tempus placerat felvel iaculis. Suspendisse blandit id dolor eu bibendum. Integer gravida diam ut quam eleifend.</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-custom">read more</a>
                    </div>
                </div> <!-- Service-item-3 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> 
    <!-- end SERVICES -->


    <!-- PORTFOLIO / WORKS
    ================================================== -->
    <section class="work" id="works">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase">Our Portfolio</h3> <!--center heading-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2">
                    <p class="margin-b-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..</p> 
                    <!--center Text-->
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="grid" class="row">
                        <!--.portfolio-filter-->
                        <div class="col-md-3 col-sm-4 col-xs-6 margin-t-20">
                            <ul class="portfolio-filters text-center list-unstyled">
                                <li class="filter active" data-filter="all">all</li>
                                <li class="filter" data-filter="design">design</li>
                                <li class="filter" data-filter="html">HTML5</li>
                                <li class="filter" data-filter="wordpress">Wordpress</li>
                                <li class="filter" data-filter="seo">Seo</li>
                            </ul>
                        </div> 
                        <!-- End portfolio-filter-->

                        <div class="col-md-9 col-sm-8 col-xs-6">
                            <div class="row">
                                <div class="mix col-sm-4 margin-t-20 seo design">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-1 -->

                                <div class="mix col-sm-4 margin-t-20 seo html">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-2 -->

                                <div class="mix col-sm-4 margin-t-20 design wordpress">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-3 -->

                                <div class="mix col-sm-4 margin-t-20 seo">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-4 -->

                                <div class="mix col-sm-4 margin-t-20 html wordpress">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-5 -->

                                <div class="mix col-sm-4 margin-t-20 design">
                                    <div class="work_item">
                                        <div class="work_item_overlay"></div>
                                        <img src="img/img.png" alt="work image">
                                        <div class="work_item_button_holder">
                                            <a href="img/img.png" data-rel="prettyPhoto"><i class="icon-magnifying-glass"></i></a>
                                            <a href="#"><i class="icon-attachment"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- item-6 -->
                            </div> <!-- end Row-->
                        </div> <!--  end col-9 /Portfolio-item -->
                    </div> <!-- End .grid -->
                </div><!--.col-md-12 of portfolio filter-->
            </div><!--.row-->
        </div> <!-- end container -->
    </section>
    <!-- end WORK-SECTION -->


    <!-- HERO-SECTION
    ================================================== -->
    <section class="hero-section">
        <div class="container">
            <div class="col-md-8 col-sm-9">
                <h3 class="text-uppercase"> Like our works?</h3>
                <p>We are always open to Interesting Project...</p>
            </div>
            <div class="col-md-4 col-sm-3">
                <a href="#pricing" class="btn btn-black">Get Pricing</a>
            </div>
        </div>
    </section>
    <!-- end HERO-SECTION -->

        
    <!-- SOME FUN-FACT
    ================================================== -->
    <section class="fun-fact parallax" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <i class="icon-clock"></i>
                    <h1>7800</h1>
                    <h5>Working Hours</h5>
                </div>
                <div class="col-md-3 col-sm-3">
                    <i class="icon-trophy"></i>
                    <h1>656</h1>
                    <h5>Awwards Won</h5>
                </div>
                <div class="col-md-3 col-sm-3">
                    <i class="icon-happy"></i>
                    <h1>364</h1>
                    <h5>Satisfied Clients</h5>
                </div>
                <div class="col-md-3 col-sm-3">
                    <i class="icon-briefcase"></i>
                    <h1>1701+</h1>
                    <h5>Completed Projects</h5>
                </div>
            </div>
        </div>
    </section>
    <!--End Sum-fun Fact-->


    <!-- ABOUT
    ================================================== -->
    <section class="about" id="about">
        <div class="container">
            <div class="row about-us">
                <div class="col-lg-7 col-md-7 col-sm-7 wow fadeInLeft animated">
                    <h2>Welcome to our site! <strong><span></span></strong></h2>
                    <br>
                    <p><span>D</span>onec nulla libero, bibendum at iaculis id, iaculis vel nunc. Cras elementum risus ac liberol eleifend egestas. Proin quis placerat purus. Nunc malesuada tellus at ipsum venenatiquam. Quisque accumsan tellus sit amet nunc porttitor sagittis.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas.</p>
                    <a href="#" class="btn btn-custom">read more</a>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 wow fadeInRight animated">
                    <figure><img src="img/img.png" alt="" class="img-responsive"></figure>
                </div>
            </div>

            <!-- ===== TEAM ===== -->

            <div class="team">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="team-member  wow animated fadeInLeftBig animation-delay-5">
                            <div class="member">
                                <img class="circle-img" src="img/img.png" alt="team"> 
                            </div>
                            <h4>Jonaly Deo</h4>
                            <h6>Founder</h6>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas.</p>
                        </div> <!-- end team-member-1 -->
                    </div> <!-- end col-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member wow animated fadeInLeftBig animation-delay-4">
                            <div class="member">
                                <img class="circle-img" src="img/img.png" alt="team"> 
                            </div>
                            <h4>Nicole Perry</h4>
                            <h6>Designer</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas.</p>
                        </div> <!-- end team-member-2 -->
                    </div> <!-- end col-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member wow animated fadeInLeftBig animation-delay-3">
                            <div class="member">
                                <img class="circle-img" src="img/img.png" alt="team"> 
                            </div>
                            <h4>Amy Perez</h4>
                            <h6>Developer</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas.</p>
                        </div> <!-- end team-member-3 -->
                    </div> <!-- end col-3 -->

                    <div class="col-md-3 col-sm-6">
                        <div class="team-member wow animated fadeInLeftBig animation-delay-2">
                            <div class="member">
                                <img class="circle-img" src="img/img.png" alt="team"> 
                            </div>
                            <h4>Adele Taylor</h4>
                            <h6>Graphics</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas.</p>
                        </div> <!-- end team-member-4 -->
                    </div> <!-- end col-3 -->
                </div> <!-- end row -->
            </div> <!-- team -->
        </div> <!-- end container -->
    </section> 
    <!-- End About-us -->


    <!-- TESTIMONIALS
    ================================================== -->
    <section class="testimonials parallax" data-stellar-background-ratio="0.7">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div id="testi-carousel" class="owl-carousel owl-spaced">
                        <div class="wow animated bounceInDown animation-delay-2">
                            <i class="fa fa-quote-left"></i>
                            <h5>
                               Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h5>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <i class="fa fa-quote-left"></i>
                            <h5>
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h5>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                        <div>
                            <i class="fa fa-quote-left"></i>
                            <h5>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..
                            </h5>
                            <p>- Jonathan Deo</p>
                        </div><!--testimonials item like paragraph-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End testimonials-->


    <!-- PRICING
    ================================================== -->
    <section class="pricing" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="text-uppercase">our Pricing</h3>
                </div>
            </div>  <!-- title -->
            <div class="row">
                <div class="col-md-8 text-center col-md-offset-2">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, dolorum, fugiat, eligendi magni quibusdam iure cupiditate ex voluptas unde Lorem ipsum dolor sit amet..</p>
                </div>
            </div>  <!-- text -->
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="pricing-features wow animated bounceInDown animation-delay-1">
                        <div class="pricing_head">
                            <div>
                                <span class="pricing_currency">$</span><span class="pricing_amount-2">5</span><span>P/M</span>
                            </div>
                            <h3>Starter</h3>
                        </div>
                        <ul class="list-unstyled text-left">
                            <li><i class="fa fa-arrow-right"></i>20 Pages</li>
                            <li><i class="fa fa-arrow-right"></i>10 GB Storege</li>
                            <li><i class="fa fa-arrow-right"></i>500 GB Bandwidth</li>
                            <li><i class="fa fa-arrow-right"></i>Custom Domain</li>
                            <li><i class="fa fa-arrow-right"></i>Email and Forum Support</li>
                            <li><i class="fa fa-arrow-right"></i>24/7 Support</li>
                        </ul>
                        <a href="#">Choose Plan</a>
                    </div> <!-- Pricing-1 -->
                </div> <!-- end col-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="pricing-features wow animated bounceInDown animation-delay-2">
                        <div class="pricing_head">
                            <div>
                                <span class="pricing_currency">$</span><span class="pricing_amount-2">10</span><span>P/M</span>
                            </div>
                            <h3>Professional</h3>
                        </div>
                        <ul class="list-unstyled text-left">
                            <li><i class="fa fa-arrow-right"></i>20 Pages</li>
                            <li><i class="fa fa-arrow-right"></i>10 GB Storege</li>
                            <li><i class="fa fa-arrow-right"></i>500 GB Bandwidth</li>
                            <li><i class="fa fa-arrow-right"></i>Custom Domain</li>
                            <li><i class="fa fa-arrow-right"></i>Email and Forum Support</li>
                            <li><i class="fa fa-arrow-right"></i>24/7 Support</li>
                        </ul>
                        <a href="#" class="active">Choose Plan</a>
                    </div> <!-- Pricing-2 -->
                </div> <!-- end col-4 -->

                <div class="col-md-4 col-sm-4">
                    <div class="pricing-features wow animated bounceInDown animation-delay-3">
                        <div class="pricing_head">
                            <div>
                                <span class="pricing_currency">$</span><span class="pricing_amount-2">15</span><span>P/M</span>
                            </div>
                            <h3>Enterprise</h3>
                        </div>
                        <ul class="list-unstyled text-left">
                            <li><i class="fa fa-arrow-right"></i>20 Pages</li>
                            <li><i class="fa fa-arrow-right"></i>10 GB Storege</li>
                            <li><i class="fa fa-arrow-right"></i>500 GB Bandwidth</li>
                            <li><i class="fa fa-arrow-right"></i>Custom Domain</li>
                            <li><i class="fa fa-arrow-right"></i>Email and Forum Support</li>
                            <li><i class="fa fa-arrow-right"></i>24/7 Support</li>
                        </ul>
                        <a href="#">Choose Plan</a>
                    </div> <!-- Pricing-3 -->
                </div> <!-- end col-4 -->
            </div> <!-- end-row pricing -->
        </div> <!-- end container -->
    </section>
    <!-- end Pricing -->


    <!-- NEWS-LETTER
    ================================================== -->
    <section class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6">
                    <h3><i class="fa fa-envelope-o"></i>Subscribe to Our Newsletter</h3>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="input-group news-form">
                        <input type="text" class="form-control" placeholder="email-address">
                        <span class="input-group-btn">
                            <button class="btn" type="button">Subscribe</button>
                        </span>
                    </div><!-- /input-group -->
                </div>
            </div>
        </div>
    </section>
    <!-- end News-letter -->


    <!-- BLOG
    ================================================== -->
    <section id="blog" class="blog parallax" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <h3 class="text-uppercase">News and stories</h3>
                        <p>From our Blog</p>
                    </div><!--center heading-->
                </div>
            </div><!--center heading-->
           
            <div class="min-h-40"></div>

            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="blog-box wow animated slideInRight animation-delay-1">
                        <img src="img/img.png" class="img-responsive" alt="workimg">
                        <h4><a href="blog-post.html">Blog post title</a></h4>
                        <h6>2 September 2014</h6>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Inventore, dolorum, fugiat.</p>
                        <p class="text-center">
                            <a href="blog-post.html" class="btn btn-custom btn-xs">
                                Read More
                            </a>
                        </p>
                    </div> <!-- blog-box -->
                </div><!--blog post col end-->

                <div class="col-sm-6 col-md-3">
                    <div class="blog-box wow animated slideInRight animation-delay-2">
                        <img src="img/img.png" class="img-responsive" alt="workimg">
                        <h4><a href="blog-post.html">Blog post title</a></h4>
                        <h6>2 September 2014</h6>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Inventore, dolorum, fugiat.</p>
                        <p class="text-center">
                            <a href="blog-post.html" class="btn btn-custom btn-xs">
                                Read More
                            </a>
                        </p>
                    </div> <!-- blog-box -->
                </div><!--blog post col end-->

                <div class="col-sm-6 col-md-3">
                    <div class="blog-box wow animated slideInRight animation-delay-3">
                        <img src="img/img.png" class="img-responsive" alt="workimg">
                        <h4><a href="blog-post.html">Blog post title</a></h4>
                        <h6>1 September 2014</h6>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Inventore, dolorum, fugiat.</p>
                        <p class="text-center">
                            <a href="blog-post.html" class="btn btn-custom btn-xs">
                                Read More
                            </a>
                        </p>
                    </div> <!-- blog-box -->
                </div><!--blog post col end-->

                <div class="col-sm-6 col-md-3">
                    <div class="blog-box wow animated slideInRight animation-delay-4">
                        <img src="img/img.png" class="img-responsive" alt="workimg">
                        <h4><a href="blog-post.html">Blog post title</a></h4>
                        <h6>1 September 2014</h6>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Inventore, dolorum, fugiat.</p>
                        <p class="text-center">
                            <a href="blog-post.html" class="btn btn-custom btn-xs">
                                Read More
                            </a>
                        </p>
                    </div> <!-- blog-box -->
                </div><!--blog post col end-->
            </div><!--blog post row-->
        </div>  <!-- end container -->
    </section>
    <!-- end Blog -->


    <!-- CONTACT
    ================================================== -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <i class="fa fa-leaf"></i>
                    <h4>Get in touch</h4>
                    <ul class="list-unstyled">
                        <li><a href="mailto:support@synero.com">E: support@synero.com</a></li>
                        <li><a href="tel:0123456789">P: 0123 456 789</a></li>
                        <li><a href="#">W: www.synero.com</a></li>
                    </ul>
                </div> <!-- end Get in touch -->

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <i class="fa fa-map-marker"></i>
                    <h4>Our Location</h4>
                    <address>Synero<br> 123 street <br>Saint Peter, MN 12345<br> 059 – 12345678</address>
                </div> <!-- end Our Location -->

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <i class="fa fa-support"></i>
                    <h4>Free Support</h4>
                    Call Now
                    <a class="support" href="tel:0123456789">12345 67890</a>
                </div> <!-- end Support -->
            </div> <!-- end row -->
            
            <!-- CONTACT FORM -->
            <div id="successmsg1" style="display: none;"></div>
            <form id="form1" name="form1" method="POST" >
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <input class="" type="text" name="name" id="name" placeholder="Name" />
                    </div> <!-- end Name -->
                   
                    <div class="col-lg-4 col-md-4">
                        <input class="" type="text" name="email1" id="email1" placeholder="Email" />
                    </div> <!-- end Email -->
                   
                    <div class="col-lg-4 col-md-4">
                        <input type="text" name="subject" placeholder="Subject">
                    </div> <!-- end Subject -->
                </div>
                
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <textarea name="message" id="message" placeholder="Message"></textarea>
                    </div>
                </div> <!-- end Message -->
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-right">
                            <button class="btn btn-custom" id="submit_btn" name="submit_btn"><span>Send Message</span></button>
                        </div>
                    </div>
                </div> <!-- end button -->
            </form><!-- END FORM -->
        </div> <!-- end container -->
    </section>
    <!-- end Contact -->

@stop