<?php 
	session_start();
	error_reporting(E_ERROR);
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>MR. BIN</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Stylesheets -->
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css" />
		<link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css" />
		<!-- Scripts -->
		<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="js/owl.carousel.min.js" type="text/javascript"></script>
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	</head>

  <body>	
	<main class="container-fluid nopadding">
		<header class="top">
			<div class="container">
				<div class="row">
					<div class="col-md-2">
						<div class="logo">
							<!--<img src="images/Smart-Dustbin.jpg" alt="" class="img-responsive img-circle" height="40px">-->
						</div>
					</div>
					<div class="col-md-10">
						<h1>MR. BIN - SMART BIN MANAGEMENT SYSTEM</h1>
					</div>
				</div>
			</div>
		</header>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<!--<a class="navbar-brand" href="#">WebSiteName</a>-->
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<div class="row">
						<div class="col-md-push-3 col-md-6">
							<ul class="nav navbar-nav">
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="aboutus.php" class="active">About Us</a></li>
								<li><a href="realstatus.php" class="active">Real Time Status</a></li>
								<li><a href="route.php">Optimized Route</a></li>
							</ul>
						</div>
						<div class="col-md-offset-3"></div>
					</div>
				</div>
			</div>
		</nav>
	
	<!-- Start slider-->	
	<section class="slider">
		<div class="owl-carousel owl-theme">
			<div class="item">
				<img src="images/Smart_Bins_Smart_City.png" alt="" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/smart_bins_concept_pmc.png" alt="" class="img-responsive">
			</div>
			<div class="item">
				<img src="images/drive_less.jpg" alt="" class="img-responsive">
			</div>
		</div>
	</section>
	<!-- End slider-->
	
	<section class="sec1">
		<p>Smart waste management is an idea where we can control lots of problems like dirtiness, pollution and disease. The waste management has to be done instantly else it leads to irregular management which will have adverse effect on nature. The smart waste management is compatible mainly with the concept of smart cities.<br><br>
		The goal of this project is to get a <b>healthy and clean environment</b>.<br><br>
		The domain in which we are working are as follows:<br><br>
		1.Internet of Things<br>
		2.Cloud Computing<br>
		3.Web-app Development<br><br>
		The biggest advantage of this project is that it promotes a healthy environment. The sensors used in Smart bins are used to identify status of waste bins if it is empty or filled so as to customize the waste collection schedule accordingly and also save the cost. By implementing this system resource optimization, cost reduction, effective usage of smart dustbins can be done. With the help of Travelling Salesman Problem algorithm we can find the best route for garbage collection.<br>
		
		</p>
		
	</section>
	
	</main>
	<?php include('footer.php'); ?>
	
	
		<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
				autoplay: true,
				autoplaySpeed: 1000,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: true
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: true,
                    margin: 20
                  }
                }
              })
            })
        </script>
	
	</body>
</html>	
	