<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CohenBros Banking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/icomoon-social.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.leanModel.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />


    <link rel="stylesheet" href="css/leaflet.css" />
    <!--[if lte IE 8]>
            <link rel="stylesheet" href="css/leaflet.ie.css" />
        <![endif]-->
    <link rel="stylesheet" href="css/main.css">

    <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body>     <!--[if lt IE 7]>         <p class="chromeframe">You are using an
<strong>outdated</strong> browser. Please <a href=
"http://browsehappy.com/">upgrade your browser</a> or <a
href="http://www.google.com/chromeframe/?redirect=true"         >activate Google
Chrome Frame</a> to improve your experience.</p>         <![endif]-->

<?php
require_once 'login.php';
$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if (!empty($http_client_ip)) {
    $ip_address = $http_client_ip;
}   else if (!empty($http_x_forwarded_for)) {
    $ip_address = $http_x_forwarded_for;
} else {
    $ip_address = $remote_addr;
}
// comment
$db_server = mysql_connect($hostname, $username, $password);
if(!db_server) die ("Unable to connect to database:" . mysql_error());
mysql_select_db($dbname) or die("Unable to select database" . mysql_error());

$query = "INSERT INTO locations VALUES('$ip_address');";

$result = mysql_query($query);
if(!$result) die ("Database access failed:" . mysql_error());
 
?>
<script type="text/javascript" charset="utf-8">

</script>

    <!-- Navigation & Logo-->
    <div class="mainmenu-wrapper">
        <div class="container">
            <div class="menuextras">
                <div class="extras">
                    <ul>
                        <li>
                            <div class="dropdown choose-country">
                                <a class="#" data-toggle="dropdown" href="#">
                                    <img src="img/flags/us.png" alt="Great Britain">US</a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="menuitem">
                                        <a href="#">
                                            <img src="img/flags/us.png" alt="United States">US</a>
                                    </li>
                                    <li role="menuitem">
                                        <a href="#">
                                            <img src="img/flags/de.png" alt="Germany">DE</a>
                                    </li>
                                    <li role="menuitem">
                                        <a href="#">
                                            <img src="img/flags/es.png" alt="Spain">ES</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="page-login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
            <nav id="mainmenu" class="mainmenu">
                <ul>
                    <li class="logo-wrapper">
                        <a href="index.php">
                            <img src="img/nf-logo.jpg" alt="Multipurpose Twitter Bootstrap Template">
                        </a>
                    </li>
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="loans.php">Loans</a>
                    </li>
                    <li class="has-submenu">
                        <a href="#">Pages +</a>
                        <div class="mainmenu-submenu">
                            <div class="mainmenu-submenu-inner">
                                <div>
                                    <h4>Homepage</h4>
                                    <ul>
                                        <li><a href="index.php">Homepage (Sample 1)</a>
                                        </li>
                                        <li><a href="page-homepage-sample.html">Homepage (Sample 2)</a>
                                        </li>
                                    </ul>
                                    <h4>Services & Pricing</h4>
                                    <ul>
                                        <li><a href="page-services-1-column.html">Services/Features (Rows)</a>
                                        </li>
                                        <li><a href="page-services-3-columns.html">Services/Features (3 Columns)</a>
                                        </li>
                                        <li><a href="page-services-4-columns.html">Services/Features (4 Columns)</a>
                                        </li>
                                        <li><a href="page-pricing.html">Pricing Table</a>
                                        </li>
                                    </ul>
                                    <h4>Team & Open Vacancies</h4>
                                    <ul>
                                        <li><a href="page-team.html">Our Team</a>
                                        </li>
                                        <li><a href="page-vacancies.html">Open Vacancies (List)</a>
                                        </li>
                                        <li><a href="page-job-details.html">Open Vacancies (Job Details)</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>Our Work (Portfolio)</h4>
                                    <ul>
                                        <li><a href="page-portfolio-2-columns-1.html">Portfolio (2 Columns, Option 1)</a>
                                        </li>
                                        <li><a href="page-portfolio-2-columns-2.html">Portfolio (2 Columns, Option 2)</a>
                                        </li>
                                        <li><a href="page-portfolio-3-columns-1.html">Portfolio (3 Columns, Option 1)</a>
                                        </li>
                                        <li><a href="page-portfolio-3-columns-2.html">Portfolio (3 Columns, Option 2)</a>
                                        </li>
                                        <li><a href="page-portfolio-item.html">Portfolio Item (Project) Description</a>
                                        </li>
                                    </ul>
                                    <h4>General Pages</h4>
                                    <ul>
                                        <li><a href="page-about-us.html">About Us</a>
                                        </li>
                                        <li><a href="page-contact-us.html">Contact Us</a>
                                        </li>
                                        <li><a href="page-faq.html">Frequently Asked Questions</a>
                                        </li>
                                        <li><a href="page-testimonials-clients.html">Testimonials & Clients</a>
                                        </li>
                                        <li><a href="page-events.html">Events</a>
                                        </li>
                                        <li><a href="page-404.html">404 Page</a>
                                        </li>
                                        <li><a href="page-sitemap.html">Sitemap</a>
                                        </li>
                                        <li><a href="page-login.html">Login</a>
                                        </li>
                                        <li><a href="page-register.html">Register</a>
                                        </li>
                                        <li><a href="page-password-reset.html">Password Reset</a>
                                        </li>
                                        <li><a href="page-terms-privacy.html">Terms & Privacy</a>
                                        </li>
                                        <li><a href="page-coming-soon.html">Coming Soon</a>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4>eShop</h4>
                                    <ul>
                                        <li><a href="page-products-3-columns.html">Products listing (3 Columns)</a>
                                        </li>
                                        <li><a href="page-products-4-columns.html">Products listing (4 Columns)</a>
                                        </li>
                                        <li><a href="page-products-slider.html">Products Slider</a>
                                        </li>
                                        <li><a href="page-product-details.html">Product Details</a>
                                        </li>
                                        <li><a href="page-shopping-cart.html">Shopping Cart</a>
                                        </li>
                                    </ul>
                                    <h4>Blog</h4>
                                    <ul>
                                        <li><a href="page-blog-posts.html">Blog Posts (List)</a>
                                        </li>
                                        <li><a href="page-blog-post-right-sidebar.html">Blog Single Post (Right Sidebar)</a>
                                        </li>
                                        <li><a href="page-blog-post-left-sidebar.html">Blog Single Post (Left Sidebar)</a>
                                        </li>
                                        <li><a href="page-news.html">Latest & Featured News</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /mainmenu-submenu-inner -->
                        </div>
                        <!-- /mainmenu-submenu -->
                    </li>
                    <li>
                        <a href="ipGrabber.php">Credits</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Homepage Slider -->
    <div class="homepage-slider">
        <div id="sequence">
            <ul class="sequence-canvas">
                <!-- Slide 1 -->
                <li class="bg1">
                    <!-- Slide Title -->
                    <h2 class="title">Auto Loans</h2>
                    <!-- Slide Text -->
                    <h2 class="subtitle">Bad Credit Repossessions</h2>
                    <!-- Slide Image -->
                    <img class="slide-img" src="img/homepage-slider/carLoan-page.jpg" alt="Slide 1" />
                </li>
                <!-- End Slide 1 -->
                <!-- Slide 2 -->
                <li class="bg3">
                    <!-- Slide Title -->
                    <h2 class="title">More Shit Goes Here!!</h2>
                    <!-- Slide Text -->
                    <h3 class="subtitle">Something Loan agreement!</h3>
                    <!-- Slide Image -->
                    <img class="slide-img" src="img/homepage-slider/slide2.png" alt="Slide 2" />
                </li>
                <!-- End Slide 2 -->
                <!-- Slide 3 -->
                <li class="bg1">
                    <!-- Slide Title -->
                    <h2 class="title">Nothing to Say Here</h2>
                    <!-- Slide Text -->
                    <h3 class="subtitle">Hack Break have fun code more shit</h3>
                    <!-- Slide Image -->
                    <img class="slide-img" src="img/homepage-slider/slide3.png" alt="Slide 3" />
                </li>
                <!-- End Slide 3 -->
            </ul>
            <div class="sequence-pagination-wrapper">
                <ul class="sequence-pagination">
                    <li>1</li>
                    <li>2</li>
                    <li>3</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Homepage Slider -->

    <!-- Press Coverage -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-wired">
                        <a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-mashable">
                        <a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="in-press press-techcrunch">
                        <a href="#">Morbi eleifend congue elit nec sagittis. Praesent aliquam lobortis tellus, nec consequat vitae</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Press Coverage -->

    <!-- Services -->
  <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <img src="img/service-icon/diamond.png" alt="Service 1">
                            <h3>Aliquam in adipiscing</h3>
                            <p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <img src="img/service-icon/ruler.png" alt="Service 2">
                            <h3>Curabitur mollis</h3>
                            <p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-wrapper">
                            <img src="img/service-icon/box.png" alt="Service 3">
                            <h3>Vivamus mattis</h3>
                            <p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>
                            <a href="#" class="btn">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End Services -->

    <!-- Call to Action Bar -->
    <div class="section section-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="calltoaction-wrapper">
                        <h3>It's a Jaythaceo Production</h3> <a href="http://www.dragdropsite.com" class="btn btn-orange">Download here!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Call to Action Bar -->

    <!-- Testimonials -->
    <div class="section">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="row">
                <!-- Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <!-- Author Photo -->
                    <div class="author-photo">
                        <img src="img/user1.jpg" alt="Author 1">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <!-- Quote -->
                            <p class="quote">
                                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut."
                            </p>
                            <!-- Author Info -->
                            <cite class="author-info">
                                - Name Surname,
                                <br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <!-- End Testimonial -->
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user5.jpg" alt="Author 2">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo."
                            </p>
                            <cite class="author-info">
                                - Name Surname,
                                <br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
                <div class="testimonial col-md-4 col-sm-6">
                    <div class="author-photo">
                        <img src="img/user2.jpg" alt="Author 3">
                    </div>
                    <div class="testimonial-bubble">
                        <blockquote>
                            <p class="quote">
                                "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur."
                            </p>
                            <cite class="author-info">
                                - Name Surname,
                                <br>Managing Director at <a href="#">Some Company</a>
                            </cite>
                        </blockquote>
                        <div class="sprite arrow-speech-bubble"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->


    <!-- End Pricing Table -->

    <!-- Our Clients -->
    <div class="section">
        <div class="container">
            <h2>Our Clients</h2>
            <div class="clients-logo-wrapper text-center row">
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/canon.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/cisco.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/dell.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/ea.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/ebay.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/facebook.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/google.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/hp.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/microsoft.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/mysql.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/sony.png" alt="Client Name">
                    </a>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-3 col-xs-6">
                    <a href="#">
                        <img src="img/logos/yahoo.png" alt="Client Name">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Clients -->

    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Our Latest Work</h3>
                    <div class="portfolio-item">
                        <div class="portfolio-image">
                            <a href="page-portfolio-item.html">
                                <img src="img/portfolio6.jpg" alt="Project Name">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-footer col-md-3 col-xs-6">
                    <h3>Navigate</h3>
                    <ul class="no-list-style footer-navigate-section">
                        <li><a href="page-blog-posts.html">Blog</a>
                        </li>
                        <li><a href="page-portfolio-3-columns-2.html">Portfolio</a>
                        </li>
                        <li><a href="page-products-3-columns.html">eShop</a>
                        </li>
                        <li><a href="page-services-3-columns.html">Services</a>
                        </li>
                        <li><a href="page-pricing.html">Pricing</a>
                        </li>
                        <li><a href="page-faq.html">FAQ</a>
                        </li>
                    </ul>
                </div>

                <div class="col-footer col-md-4 col-xs-6">
                    <h3>Contacts</h3>
                    <p class="contact-us-details">
                        <b>Address:</b> 123 Fake Street, LN1 2ST, London, United Kingdom
                        <br/>
                        <b>Phone:</b> +44 123 654321
                        <br/>
                        <b>Fax:</b> +44 123 654321
                        <br/>
                        <b>Email:</b>  <a href="mailto:getintoutch@yourcompanydomain.com">getintoutch@yourcompanydomain.com</a>
                    </p>
                </div>
                <div class="col-footer col-md-2 col-xs-6">
                    <h3>Stay Connected</h3>
                    <ul class="footer-stay-connected no-list-style">
                        <li>
                            <a href="#" class="facebook"></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"></a>
                        </li>
                        <li>
                            <a href="#" class="googleplus"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright">&copy; 2014 SomeShitInc. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/jquery.sequence-min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/main-menu.js"></script>
    <script src="js/template.js"></script>

</body>

</html>
