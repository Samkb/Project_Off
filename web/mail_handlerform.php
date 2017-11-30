
<!DOCTYPE html>
<html>
<head>
	<title>CCTV</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
	<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@bli.com.np">info@bli.com.np</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>9841651811</li>
					</ul>
				</div>
				<div class="header-grid-right animated wow slideInRight" data-wow-delay=".5s">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/bhagwatiTradeCenter" target="_#" class="facebook"></a></li>
						<li><a href="#" class="twitter"></a></li>
						<li><a href="#" class="g"></a></li>
						<li><a href="#" class="instagram"></a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.html"><img src="images/img/logo.png" style="height: 100px; width: 250px;" class="img-responsive"></a></h1>
				</div>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header nav_2">
							<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div> 
						<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
							<ul class="nav navbar-nav">
								<li class="active"><a href="index.html" class="act">Home</a></li>	
								<!-- Mega Menu -->
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
									<ul class="dropdown-menu multi-column columns-3">
										<div class="row">
											<div class="col-sm-4">
												<ul class="multi-column-dropdown">
													
													<li><a href="cctv.html"> <p class="submenu">CCTV Camera</p>
														<img src="images/img/cctv4.jpg" class="img-responsive"></a></li>
													</ul>
												</div>
												<div class="col-sm-4">
													<ul class="multi-column-dropdown">
														<li><a href="timeattendance.html"><p class="submenu">Time Attendance Device</p>
															<img src="images/img/timeattendance2.jpg" class="img-responsive"></a></li>
														</ul>
													</div>
													<div class="col-sm-4">
														<ul class="multi-column-dropdown">
															<li><a href="accessories.html"><p class="submenu">accessories</p>
																<img src="images/accessories/normalcctvmp.jpg" class="img-responsive"></a></li>
															</ul>
														</div>
														<div class="clearfix"></div>
													</div>
												</ul>
											</li>											
											<li><a href="aboutus.html">About Us</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</div>
								</nav>
							</div>
							<div class="logo-nav-right">
								<div class="search-box">
									<div id="sb-search" class="sb-search">
										<form>
											<input class="sb-search-input" placeholder="Enter your search term..." type="search" id="search">
											<input class="sb-search-submit" type="submit" value="">
											<span class="sb-icon-search"> </span>
										</form>
									</div>
								</div>
								<!-- search-scripts -->
								<script src="js/classie.js"></script>
								<script src="js/uisearch.js"></script>
								<script>
									new UISearch( document.getElementById( 'sb-search' ) );
								</script>
								<!-- //search-scripts -->
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<!-- //header -->

<div class="container">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		$productname=$_POST['productname'];
		$address=$_POST['address'];

		$to='shyam.kumarc3@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Address :".$address."\n"."Wrote the following :"."\n\n".$msg."\n"."Item Name:".$productname;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
	<div class="banner-bottom">
				<div class="container"> 
					<div class="banner-bottom-grids">
						<div class="row">
							<div class="col-md-4">
								<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
									<div class="grid">
										<figure class="effect-julia">
											<img src="images/img/timewatch3.jpg" alt=" " style="height: 415px; width: 376px;" class="img-responsive" />
							<!-- <figcaption>
								<h3>Best <span>Store</span><i> in online shopping</i></h3>
							</figcaption> -->			
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/img/timewatch2.jpg" alt=" " style="height: 415px; width: 376px;" class="img-responsive" />
							<!-- <figcaption>
								<h3>Best <span>Store</span><i> in online shopping</i></h3>
							</figcaption> -->			
						</figure>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="banner-bottom-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<div class="grid">
						<figure class="effect-julia">
							<img src="images/img/timewatch.jpg" alt=" " style="height: 415px; width: 376px;" class="img-responsive" />
							<!-- <figcaption>
								<h3>Best <span>Store</span><i> in online shopping</i></h3>
							</figcaption> -->			
						</figure>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
</div>
</div>
</div>

<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="footer-grids">
			<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
				<h3>Contact Info</h3>
				<ul>
					<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Kathmandu <span>Nepal</span></li>
					<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@bli.com.np">info@bli.com.np</a></li>
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>9841651811</li>
				</ul>
			</div>
			<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
				<h3>Find Us on Facebook</h3>
				<div class="widget facebook-widget">

					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 footer-grid animated wow slideInLeft" data-wow-delay=".7s">
				<h3>About Us</h3>
				<p>Supplier of CCTV, Attendance System, Access Control, VDP, PBX, Fire Alarm Panels, Sensors etc</p>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //footer -->


<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


</body>
</html>