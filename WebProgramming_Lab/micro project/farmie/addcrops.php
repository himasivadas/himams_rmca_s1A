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
              <li><a class="active"href="index.php">HOME</a></li>
              <li><a class="active"href="farmers.php">Back</a></li>
              <li><a class="active"href="index.php">LOGOUT</a></li>
              </ul>
              
              </div>
  </header>
  <div>
<br>
<div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/home/ag14.jpg );"
><center><form action="dosave.php?newaddcrops=1" method="post" enctype="multipart/form-data">
<table border="1" align="center" width="600" cellpadding="10" cellspacing="10">
<tr>
<td>
<table align="center" cellpadding="10" cellspacing="10" width="500">
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
      <td colspan="2" align="center"><H2 style="color:#FFffff">Add Crops</H2></td>
    </tr>
   <tr>
      <td style="color:#FFffff">item name</td>
      <td><SELECT id="t_id" name="t_id"> 
            <option value="0" selected="selected">- -Select- -</option>
            <?php
            $sql="SELECT * FROM items";
            $result=$db->query($sql);
            while($row=$db->fetch_array($result ))
             {
            echo '<option value="'.$row['t_id'].'" >'.$row['item'].'</option>';
            }
            ?>
        </SELECT></td>
    </tr>
<tr>
       <td style="color:#FFffff">Crop<span> name</span></td>
         
      <td><input type="text" name="name" /></td>
    </tr>
    <tr>

      <td  style="color:#FFffff">required quantity</td>
         
      <td><input type="text" name="quantity" required="required"/></td>
    </tr>
    <tr>

      <td  style="color:#FFffff">price</td>
         
      <td><input type="text" name="price" required="required"/></td>
    </tr>
    
    <tr>
      <td  style="color:#FFffff">Crop image</td>
      
      <td><input type="file" name="image" required="required"/></td>
    </tr>
    
    <tr>
      <td colspan="2" align="center"><input type="submit" value="add" /></td>
    </tr>
  
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
</table>
</td>
</tr>
</table>
</form></center>
<br>