<?php
include('include/dbclass.php');
$db=new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>agrotic web service</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 <header class="header-area">
    <div class="famie-main-menu">
      <nav class="classy-navbar justify-content-between" id="famieNav">
            <div class="classynav">
              <ul>
              <a href="index.php" class="nav-brand"><img src="img/home/agrotic logo.png" align="lefts"/></a>
              <li><a class="active"href="gallerdemo.php"></a>back</li>
              <li><a class="active"href="index.php">LOGOUT</a></li>
              <li><a class="active"href="viewcart.php">view cart</a></li>
              </ul>
              </div>
  </header>
  <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/home/ag14.jpg );"
<br><br>
<center><form action="dosave.php?newcart=1" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="600" cellpadding="15" cellspacing="15">
<tr>
<td>
<table align="center" cellpadding="15" cellspacing="15" width="500">
  <?php
     if(isset($_REQUEST['message']))
     {
     $msg=$_REQUEST['message'];
     echo'<tr><td colspan="3" style="color:#FF0000" align="center">'.$msg.'</td></tr>';
     }
      ?> 
  <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><H1><u><b style="color: white"> SHOPPING CART</b></u></H1></td>
    </tr>
     <tr>
      <td style="color: white">username</td>
         <td><input type="text" name="username" required="required"/></td>
    </tr>   
    <td style="color: white">contactnumber</td>
         <td><input type="text" name="contactnumber" required="required" /></td>

    </tr>   
    </tr>   
    <td style="color: white">itemname</td>
         <td><input type="text" name="itemname" required="required" /></td>
         
    </tr>   

    <td style="color: white">quantity</td>
         <td><input type="text" name="quantity" required="required"/></td>
    </tr>   
<tr>
      <td colspan="2" align="center"><input type="submit" value="CART" /></td>
    </tr>
<br></table></td></tr></table></form></center>
</body>
</html>