<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Loans</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="css/main.css">

        <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>

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

 $db_server = mysql_connect($hostname, $username, $password);
 if(!db_server) die ("Unable to connect to database:" . mysql_error());
 mysql_select_db($dbname) or die("Unable to select database" . mysql_error());
 $query = "INSERT INTO hits VALUES('$ip_address')";
 $result = mysql_query($query);
if(!$result) die ("Database access failed:" . mysql_error());

?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54144631-1', 'auto');
  ga('send', 'pageview');

</script>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->


        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
	        <div class="container">
	        	<div class="menuextras">
					<div class="extras">
						<ul>
							<li>
								<div class="dropdown choose-country">
									<a class="#" data-toggle="dropdown" href="#"><img src="img/flags/us.png" alt="Great Britain"> US</a>
									<ul class="dropdown-menu" role="menu">
										<li role="menuitem"><a href="#"><img src="img/flags/us.png" alt="United States"> US</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/de.png" alt="Germany"> DE</a></li>
										<li role="menuitem"><a href="#"><img src="img/flags/es.png" alt="Spain"> ES</a></li>
									</ul>
								</div>
							</li>
			        		<li><a href="page-login.php">Login</a></li>
			        	</ul>
					</div>
		        </div>
		        <nav id="mainmenu" class="mainmenu">
					<ul>
						<li class="logo-wrapper"><a href="index.php"><img src="img/nf-logo.jpg" alt="Multipurpose Twitter Bootstrap Template"></a></li>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="page-register.php">Register</a>
						</li>

					</ul>
				</nav>
			</div>
		</div>

        <!-- Page Title -->
		<div class="section section-breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>LOANS OPTIONS</h1>
					</div>
				</div>
			</div>
		</div>

        <div class="section">
	    	<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-login.php"><img src="img/day.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Pay Day Loan</li>
									<li>Bad Credit & No Credit</li>
									<li>Same Day Bank Deposit</li>
									<li class="read-more"><a href="page-login.php" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-login.php"><img src="img/tow.png" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Stop Reposessions</li>
									<li>Auto Loans & Refinancing</li>
									<li>Bad Credit & Repossions</li>
									<li class="read-more"><a href="page-login.php" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-login.php"><img src="img/save.jpg" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Credit Repair</li>
									<li></li>
									<li>Change Monthly Payments</li>
									<li class="read-more"><a href="page-login.php" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="portfolio-item">
							<div class="portfolio-image">
								<a href="page-login.php"><img src="img/business.jpg" alt="Project Name"></a>
							</div>
							<div class="portfolio-info-fade">
								<ul>
									<li class="portfolio-project-name">Business Finance</li>
									<li>Starting to expanding</li>
									<li>Business Development</li>
									<li class="read-more"><a href="page-login.php" class="btn">Read more</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	    <!-- Footer -->
	        <div class="footer">
	    	<div class="container">
		    	<div class="row">
		    		<div class="col-footer col-md-4 col-xs-6">
		    			<h3>Contacts</h3>
		    			 <p class="contact-us-details">
                  <b>Address:</b> 7010 High Tech Drive, Hanover MD, 21076<br/>
                  <b>Phone:</b>1-800-123-6543<br/>
                  <b>Email:</b> <a href="cohenbanking@gmail.com">cohenbanking@gmail.com</a>
              </p>
          </div>
          <div class="col-footer col-md-2 col-xs-6">
              <h3>Stay Connected</h3>
              <ul class="footer-stay-connected no-list-style">
                  <li><a href="https://www.facebook.com/profile.php?id=100004838086135" class="facebook"></a></li>
                  <li><a href="www.twitter.com" class="twitter"></a></li>
                 <li><a href="https://plus.google.com/u/0/" class="googleplus"></a></li>
              </ul>
		    		</div>
		    	</div>
		    	<div class="row">
		    		<div class="col-md-12">
		    			<div class="footer-copyright">&copy; 2014 CohenBrosInc. All rights reserved.</div>
		    		</div>
		    	</div>
		    </div>
	    </div>

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="http://cdn.leafletjs.com/leaflet-0.5.1/leaflet.js"></script>
        <script src="js/jquery.fitvids.js"></script>
        <script src="js/jquery.sequence-min.js"></script>
        <script src="js/jquery.bxslider.js"></script>
        <script src="js/main-menu.js"></script>
        <script src="js/template.js"></script>

    </body>
</html>
