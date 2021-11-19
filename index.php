<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <!-- META DATA -->
	<title>Codelander | HTML Landing Page by Codefest&trade;</title>
    <meta name="description" content="Codelander is a multi-purpose HTML landing page template by Codefest&trade;. Purchase now.">
	<meta name="keywords" content="Codelander,Codefest">
	<meta name="author" content="Codefest">
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
	<!-- FAVICON -->
	<link rel="icon" type="image/png" href="public\images\favicon.png">
    <!-- STYLESHEETS -->
	<link rel="stylesheet" href="public\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public\css\style.css">
	<link rel="stylesheet" type="text/css" href="public\css\accordian.css">
	<link rel="stylesheet" href="public\css\owl\owl.carousel.min.css">
    <link rel="stylesheet" href="public\css\owl\owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800&display=swap" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
	<!-- SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="public\js\smoothscroll.js"></script>
    <script>
        $("#navbarNav").on("click", "a", function () {
        $(".navbar-toggle").click();
        //or $("#nav").slideToggle();
        });
    </script>
</head>
<script type="text/javascript">
    (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-96875843-3', 'auto');
    ga('send', 'pageview');
</script>
	<body>
	<!-- NAVBAR -->
    <nav id="navbar" class="navbar fixed-top navbar-expand-lg navbar-header navbar-mobile">
        <div class="navbar-container container">
            <!-- LOGO -->
            <div class="navbar-brand">
            <a class="navbar-brand-logo" href="#">
                <img src="public\images\logo.png" width="155px">
            </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                <ul class="navbar-nav menu-navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#top">
                            <p class="nav-link-number">01</p>
                            <p class="nav-link-menu">Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">
                            <p class="nav-link-number">02</p>
                            <p class="nav-link-menu">Services</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">
                            <p class="nav-link-number">03</p>
                            <p class="nav-link-menu">Pricing</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#clients">
                            <p class="nav-link-number">04</p>
                            <p class="nav-link-menu">Clients</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">
                            <p class="nav-link-number">05</p>
                            <p class="nav-link-menu">News</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">
                            <p class="nav-link-number">06</p>
                            <p class="nav-link-menu">Contact</p>
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link learn-more-btn" href="#" data-toggle="modal" role="button" data-target="#modalsuscribete">Signup</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- SECTION LABEL -->
	<div id="top"></div>
	<!-- WRAPPER -->
    <div class="wrapper">
        <div class="header">
            <div class="container header-container">
                <div class="col-lg-6 header-img-section">
                    <img src="public\images\header.png">
                </div>
                <div class="col-lg-5 offset-lg-1 header-title-section">
                    <p class="header-subtitle">Multipurpose landing template</p>
                    <h1 class="header-title">Beautifully simple, code.</h1>
                    <p class="header-title-text">Codelander is a beautifully simple, clean and lightweight landing page template for all types of businesses, with bold and bright colours.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn btn-invert" href="#services">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- STRATEGY SECTION -->
        <div class="strategy-section">
            <div class="strategy-section-bg-graphics-section">
                <img src="public\images\strategy-section-bg.png">
            </div>
            <div class="container strategy-container">
                <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 strategy-card-section">
                    <div class="strategy-card">
                        <div class="strategy-card-icon-section">
                            <img src="public\images\strategy-1.png">
                        </div>
                        <h2>Strategy</h2>
                        <p>We'll work with you to develop the right strategy</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 strategy-card-section">
                    <div class="strategy-card">
                        <div class="strategy-card-icon-section">
                            <img src="public\images\strategy-2.png">
                        </div>
                        <h2>Automation</h2>
                        <p>Work synchronization and automated services</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 strategy-card-section">
                    <div class="strategy-card">
                        <div class="strategy-card-icon-section">
                            <img src="public\images\strategy-3.png">
                        </div>
                        <h2>Deployment</h2>
                        <p>Dedicated servers to deploy and test applications</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-8 offset-xs-2 strategy-card-section">
                    <div class="strategy-card">
                        <div class="strategy-card-icon-section">
                            <img src="public\images\strategy-4.png">
                        </div>
                        <h2>Education</h2>
                        <p>Stay informed on all our tools and technologies</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECTION LABEL -->
        <div id="services"></div>

        <!-- SERVICES -->
        <div class="services-section">
            <div class="services-section-bg-graphics">
                <img src="public\images\services-section-bg.png">
            </div>
            <div class="container services-container">
                <div class="col-lg-5 services-title-section">
                    <p class="services-subtitle">Our services</p>
                    <h2 class="services-title">Solving Problems</h2>
                    <p class="services-text">This is a great section to introduce your company and showcase your featured services.</p>		
                    <div class="services-accordion">
                        <button class="accordion">
                            Website Design
                        </button>
                        <div class="panel"><p>
                            Some information on your web design and development services can go here. A few lines should do the trick.
                        </p></div>
                        <button class="accordion">
                            Application Development
                        </button>
                        <div class="panel"><p>
                            More information on your application development services can go here, too. There's plenty of space available for you.
                        </p></div>
                    </div>				
                </div>
                <div class="col-lg-6 offset-lg-1 services-header-img-section">
                    <img src="public\images\services-header.png">
                </div>
            </div>
        </div>
        <!-- SALES GROWTH -->
        <div class="services-sales-section">
            <div class="container services-container">
                <div class="col-lg-6 services-header-img-section padding-0">
                    <img src="public\images\services-sales-header.png">
                </div>
                <div class="col-lg-5 offset-lg-1 services-title-section">
                    <p class="services-subtitle">Our services</p>
                    <h2 class="services-title">Sales Growth</h2>
                    <p class="services-text">You can talk about your secondary services here, or maybe promote your excellent customer service approach. Always grab your website visitors' attention.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn btn-invert" href="#pricing">View Pricing</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION LABEL -->
        <div id="pricing"></div>
        <!-- PRICING -->
        <div class="pricing-section">
            <div class="pricing-section-left-bg-graphics">
                <img src="public\images\pricing-section-left-bg.png">
            </div>
            <div class="pricing-section-right-bg-graphics">
                <img src="public\images\pricing-section-right-bg.png">
            </div>
            <div class="container pricing-container">
                <div class="pricing-title">
                    <h2>Pricing</h2>
                    <p>Offer multiple packages or monthly subscriptions? Why not showcase your featured price plans here, bold and beautifully.</p>
                </div>
                <!-- PRICE PLANS -->
                <div class="pricing-plan-cards-section">
                    <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                        <div class="pricing-card">
                            <p class="pricing-rate">$199</p>
                            <p class="pricing-period">Basic</p>
                            <p class="pricing-text">Starter plan with all the basics included</p>
                            <div class="pricing-all-plan-features-section basic-plan-features-section">
                                <ul>
                                    <li>Core Business System</li>
                                    <li>Team Management</li>
                                    <li>Dual Infrastructure</li>
                                    <li>Customized Features</li>
                                </ul>
                            </div>
                            <a class="nav-link learn-more-btn" href="#contact">Enquire</a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                        <div class="pricing-card featured">
                            <p class="pricing-rate">$499</p>
                            <p class="pricing-period">Growth</p>
                            <p class="pricing-text">The sensible option for growing companies</p>
                            <div class="pricing-all-plan-features-section medium-plan-features-section">
                                <ul>
                                    <li>Core Business System</li>
                                    <li>Team Management</li>
                                    <li>Dual Infrastructure</li>
                                    <li>Customized Features</li>
                                </ul>
                            </div>
                            <a class="nav-link learn-more-btn" href="#contact">Enquire</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-8 col-xs-10 pricing-card-section">
                        <div class="pricing-card">
                            <p class="pricing-rate">$1299</p>
                            <p class="pricing-period">Corporate</p>
                            <p class="pricing-text">Everything a global company needs</p>
                            <div class="pricing-all-plan-features-section advance-plan-features-section">
                                <ul>
                                    <li>Core Business System</li>
                                    <li>Team Management</li>
                                    <li>Dual Infrastructure</li>
                                    <li>Customized Features</li>
                                </ul>
                            </div>
                            <a class="nav-link learn-more-btn" href="#contact">Enquire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
        <!-- SECTION LABEL -->
        <div id="clients"></div>
        <!-- CLIENTS -->
        <div class="clients-section">
            <div class="container clients-container">
                <div class="clients-title-section">
                    <p class="clients-subtitle">Our clients</p>
                    <h2 class="clients-title">Client Showcase</h2>
                </div>
                <div class="clients-slider">
                    <div class="owl-carousel owl-theme clients-slider-section">
                        <div class="item client-logo-section">
                            <img src="public\images\logo1.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo2.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo3.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo4.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo1.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo2.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo3.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo4.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo1.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo2.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo3.png">
                        </div>
                        <div class="item client-logo-section">
                            <img src="public\images\logo4.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION LABEL -->
        <div id="news"></div>
        <!-- NEWS -->
        <div class="blog-section">
            <div class="blog-section-right-bg">
                <img src="public\images\blog-section-right-bg.png">
            </div>
            <div class="blog-section-left-bg">
                <img src="public\images\blog-section-left-bg.png">
            </div>
            <div class="container blog-container">
                <div class="blog-title-section">
                    <p class="blog-subtitle">Recent updates</p>
                    <h2 class="blog-title">Featured Stories</h2>
                </div>
                <div class="blog-posts-section">
                    <div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
                        <div class="blog-post-card">
                            <div class="blog-post-icon">
                                <img src="public\images\blog-card-1.png">
                            </div>
                            <h3 class="blog-post-title">Remote Working</h3>
                            <p class="blog-post-text">Making it easier to connect with every client worldwide</p>
                            <a class="blog-post-link" href="#news">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
                        <div class="blog-post-card">
                            <div class="blog-post-icon mb-4">
                                <img src="public\images\blog-card-2.png">
                            </div>
                            <h3 class="blog-post-title">Google Rankings</h3>
                            <h4 class="blog-post-subtitle">Keywords</h4>
                            <p class="blog-post-text mb-4">We've ranked number one on Google for multiple keywords. Read about our SEO strategies</p>
                            <a class="nav-link learn-more-btn" href="#news">Read More</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-xs-10 blog-post-card-container">
                        <div class="blog-post-card">
                            <div class="blog-post-icon">
                                <img src="public\images\blog-card-3.png">
                            </div>
                            <h3 class="blog-post-title">Communication</h3>
                            <p class="blog-post-text">We've made our client support services easy to access</p>
                            <a class="blog-post-link" href="#news">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SECTION LABEL -->
        <div id="contact"></div>
        <!-- CONTACT -->
        <div class="contact-section">
            <div class="container contact-container">
                <div class="col-md-6 contact-title-section">
                    <p class="contact-subtitle">Contact</p>
                    <h2 class="contact-title">Questions?<br>Get in touch</h2>
                    <p class="contact-text">We'll be happy to help answer any of your questions. Send us an email and we'll get back to you shortly.</p>
                    <div class="learn-more-btn-section">
                        <a class="nav-link learn-more-btn btn-invert" href="mailto:name@domain.com">Send an Email</a>
                    </div>
                </div>
                <div class="col-md-6 contact-header-img">
                    <img src="public/images/header.png">
                </div>
            </div>
        </div>
        <!-- FOOTER -->
        <div class="footer-section">
            <div class="footer-section-bg-graphics">
                <img src="public\images\footer-section-bg.png">
            </div>
            <!-- Footer Column 1 -->
            <div class="container footer-container">
                <div class="col-lg-3 col-md-6 footer-logo">
                    <img src="public\images\logo_footer.png">
                    <p class="footer-susection-text">A beautiful landing page template by Codefest.</p>
                </div>
                <div class="col-lg-3 col-md-6 footer-subsection">
                    <div class="footer-subsection-2-1">
                        <h3 class="footer-subsection-title">About</h3>
                        <p class="footer-subsection-text">We like to do business at Codelander HQ to our clients' satisfaction.</p>
                    </div>
                </div>
                <!-- Footer Column 2 -->
                <div class="col-lg-3 col-md-6 footer-subsection">
                    <h3 class="footer-subsection-title">Contact Us</h3>
                    <ul class="footer-subsection-list">
                        <li>123 Business Centre<br>London SW1A 1AA</li>
                        <li>0123456789</li>
                        <li>mail@domain.com</li>
                    </ul>	
                </div>
                <!-- Footer Column 3 -->
                <div class="col-lg-3 col-md-6 footer-subsection">
                    <div class="footer-subsection-2-2">
                        <h3 class="footer-subsection-title">Socials</h3>
                        <div class="footer-social-media-icons-section">
                            <a href="#top" class="footer-social-media-icon"><i class="fa fa-twitter"></i></a> 
                            <a href="#top" class="footer-social-media-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#top" class="footer-social-media-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#top" class="footer-social-media-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FOOTER CREDITS -->
            <div class="container footer-credits">
                <p>&copy; 2020 <a href="https://www.codefest.co.uk" target="_blank" title="Codefest">Codefest</a>&trade;. All Rights Reserved.</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <?php require_once("modal.php"); ?>

	<!-- FOOTER SCRIPTS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="public\js\owl\owl.carousel.js"></script>
	<script src="public\js\accordian.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="index.js"></script>
  	<!-- Header scroll -->
    <script type="text/javascript">
            $(window).scroll(function() {
                if ($(this).scrollTop() > 20) {
                    $('#navbar').addClass('header-scrolled');
                } else {
                    $('#navbar').removeClass('header-scrolled');
                }
                });		
    </script>
    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
            items:4,
            loop:true,
            nav:true,
            autoplay:true,
            autoplayTimeout:2000,
            autoplayHoverPause:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            }
            });
        });
    </script>
	</body>
</html>