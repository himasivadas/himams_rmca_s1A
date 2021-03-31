<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>MarriageIntrepreter</title>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!--//fonts-->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Arts School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->	
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<script src="js/modernizr.custom.97074.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- start-smoth-scrolling -->
</head>
<body>
<div class="header">
	<div class="header-left">
		<a href="index.html"><span>Marriage</span> Intrepreter</a>
	</div>
	<div class="header-right">
		<span class="menu"><img src="images/menu.png" alt=""/></span>
			<nav class="cl-effect-11" id="cl-effect-11">	
				<ul class="nav1">	
					<li><a class="scroll" href="index.php" data-hover="HOME">HOME</a></li>
				  <li><a class="scroll" href="about.php" data-hover="ABOUT">ABOUT</a></li>
				  <li><a class="scroll" href="services.php" data-hover="SERVICES">SERVICES</a></li>
				  <li><a class="scroll" href="team.php" data-hover="TEAM">TEAM</a></li>
				  <li><a class="scroll" href="gallery.php" data-hover="GALLERY">GALLERY</a></li>
				  <li><a class="scroll" href="contact.php" data-hover="CONTACT">CONTACT</a></li>							
			  </ul>
			</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
	</div>
	<div class="clearfix"></div>
</div>
<!-- banner-slider -->
<div id="home" class="banner-slider">
		<!-- responsiveslides -->
							<script src="js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
								</script>
		<!-- responsiveslides -->
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner one">
							
							<div class="container">
								<div class="banner-info">
									<h3 style="color:#000000">BRIDE AND GROOM <span>|</span> DECORATIONS <span>|</span>EVENTMANAGEMENT</h3>
									<h4><span>MARRIAGE</span>INTREPRETER</h4>
									<p>Make Your Life Beautiful</p>
								</div>
							</div>
					</div>
				</li>
				<li>
					<div class="banner two">
							<div class="container">
								<div class="banner-info">
									<h3>BRIDE AND GROOM <span>|</span> DECORATIONS <span>|</span> EVENTMANAGEMENT</h3>
									<h4><span>MARRIAGE</span> INTREPRETER</h4>
									<p>Make Your Life Beautiful</p>
								</div>
							</div>
					</div>
				</li>
				
			</ul>
		</div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		
	</div>
</div>
<!-- //welcome -->
<!-- about -->
	<div class="about" id="about">
		<div class="container">
			<h3>ABOUT </h3>
			<div class="about-grids">
				<div class="col-md-6 about-grid-right">
					<img src="images/b.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 about-grid-left">
					<h4>we are the agencies  </h4>
					<p>providing the all decoration designs and find the bride and grooms,the eventmanagement agencies are there.
						auditorium booking is here
						<span>the honeymoonpackages places and rent car services .</span></p>
					<div class="about-grid-left-grids">
						<div class="about-grid-left-grid">
							<img src="images/cs.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="about-grid-left-grid">
							<img src="images/qs.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="about-grid-left-grid">
							<img src="images/sts.jpg" alt=" " class="img-responsive" />
						</div>
					   <div class="about-grid-left-grid">
							<img src="images/za.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="about-grid-left-grid">
							<img src="images/ch.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="about-grid-left-grid">
							<img src="images/k.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->



<!-- //gallery -->

<div class="copy-right">
	<div class="container">
		<p> &copy;2017 Gokul.K.S 6<SUP>th</SUP> Semester BCA..Nilgiri College of Arts and Science. All Rights Reserved 
	</div>
</div>
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {R
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>