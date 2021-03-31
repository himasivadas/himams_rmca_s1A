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
					<li><a href="index.php" data-hover="HOME">HOME</a></li>
				  <li><a href="about.php" data-hover="ABOUT">ABOUT</a></li>
				  <li><a href="services.php" data-hover="SERVICES">SERVICES</a></li>
				  <li><a href="team.php" data-hover="TEAM">TEAM</a></li>
				  <li><a href="gallery.php" data-hover="GALLERY">GALLERY</a></li>
				  <li><a href="contact.php" data-hover="CONTACT">CONTACT</a></li>
                  <li><a href="login.php" data-hover="Login">Login</a></li>								
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
<div>
<!--Content-->
<br>
<br>
<br>
<br><br>
<table border="1" align="center" width="500" cellpadding="10" cellspacing="10">
<tr>
<td>
<table align="center" cellpadding="10" cellspacing="10" width="400">
	<tr>
    	<td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="2" align="center"><H2>Login</H2></td>
    </tr>
	<tr>
    	<td>User Name</td>
    	<td><input type="text" name="user" /></td>
    </tr>
    <tr>
    	<td>Password</td>
    	<td><input type="text" name="password" /></td>
    </tr>
<tr>
    	<td colspan="2" align="center"><input type="submit" value="Login" /></td>
    </tr>
	<tr>
    	<td colspan="2" align="center">New Customer&nbsp;<a href="register.php">Register here</a></td>
    </tr>
    <tr>
    	<td colspan="2" align="center">&nbsp;</td>
    </tr>
</table>
</td>
</tr>
</table>
<br>
<br>
<br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>

<br>
<!--End Content-->




</div>

<div class="copy-right">
	<div class="container">
		<p> &copy;2017 Gokul.K.S 6<SUP>th</SUP> Semester BCA..Nilgiri College of Arts and Science. All Rights Reserved.
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