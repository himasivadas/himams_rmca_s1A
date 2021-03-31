<!DOCTYPE html>
<html lang="en">

<head>
  <title>agrotic web service</title>
  <link rel="stylesheet" href="style.css">
</head>
    
  <header class="header-area">
    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <nav class="classy-navbar justify-content-between" id="famieNav">
            <div class="classynav">
              <ul>
              <a href="index.php" class="nav-brand"><img src="img/home/agrotic logo.png" align="lefts"/></a>
              <li><a class="active"href="index.php">HOME</a></li>
               <li><a class="active"href="logins.php">login</a></li>
             
             
                        
                      
                      
              
              </ul>
              </div>
              </header>
              <br><br>
              <body>
               <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/home/flowreslogo.jpg);">
                <center><label><h2><span><FONT color="#FFFFFF" size="10">AGROTIC WEBSERVICE</FONT></span></h2></label></center>
                <center><p ><FONT color="#FFFFFF"size="6">Farming is a most senseless pursuit,a mere laboring in a circle.you sow that you may reap,and then you reap that you may sow.nothing ever comes of it.</p></FONT></center>
                <center><p><FONT color="#FFFFFF"size="4">THE HIGHER TECHNOLOGY VALUES OF ORGANIC PLANTS PRODUCTS RESULT FROM HIGHER DRY MATTER CONTENT....</p></FONT></center>
                 </div>
                 </body>
                 <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</html>
            