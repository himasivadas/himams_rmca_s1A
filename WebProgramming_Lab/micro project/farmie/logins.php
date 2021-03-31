<?php
include('include/dbclass.php');
$db=new database();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Agrotic &amp; webservice| Contact</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header-area">
     <div class="famie-main-menu">
      <nav class="classy-navbar justify-content-between" id="famieNav">
            <div class="classynav">
              <ul>
              <a href="index.php" class="nav-brand"><img src="img/home/agrotic logo.png" align="lefts"/></a>
            <li><a class="active"href="index.php">HOME</a></li></ul>
            <li><a class="active"href="adminhome.php">admin</a></li></ul>

                   </div>
                 </header>
  <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/home/woodlogo.jpg );">
<br><br><br><br>
<center><form action="dosave.php?login=1" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="500" cellpadding="10" cellspacing="10">
<tr>
<td>
<table align="center" cellpadding="10" cellspacing="10" width="400">
<?php
      
     if(isset($_REQUEST['message']))
     {
     $msg=$_REQUEST['message'];
     echo'<tr><td colspan="2" style="color:#FF0000" align="center">'.$msg.'</td></tr>';
     }
      ?> 
      
  <tr>
      <td colspan="2" align="center">&nbsp;</td> 
    </tr>
    <tr>
      <h3 class="tittle two" style="color:#FFffff"><u>LOGIN</u></h3>
    </tr>
  <tr>
      <td style="color:#FFffff">User Name</td>
      <td><input type="text"  name="user" required="required" /></td>
    </tr>
    <tr>
      <td style="color:#FFffff">Password</td>
      <td><input type="password"  name="password" placeholder="password" required="required" /></td>
    </tr>
<tr> 
      <td colspan="2" align="center"><input type="submit" value="Login"/> </td>
    </tr>
  <tr>
      <td colspan="2"style="color:#FFffff" align="center">New farmers&nbsp;<a href="registers.php" style="color:#0000ff">Register here</a></td>
    </tr>
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
</table>
</td>
</tr>
</table>
</div>
</form></center>
<br>
<br>
</body>
</html>