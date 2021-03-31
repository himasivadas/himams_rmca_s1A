<?php
include('include/dbclass.php');
$db=new database();
?>

  <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/home/regilogo.jpg );"
<br><br>
<br>    <br><br>
    <form action="dosave.php?newfarmer=s1" method="post" enctype="multipart/form-data">
<table  style="color:#FFffff"border="1" align="center" width="500" cellpadding="10" cellspacing="10">
<tr>
<td>
<table align="center" cellpadding="10" cellspacing="10" width="400">
  <?php
     if(isset($_REQUEST['message']))
     {
     $msg=$_REQUEST['message'];
     '<tr><td colspan="2" style="color:#FF0000" align="center">'.$msg.'</td></tr>';
     }
      ?> 
    <tr><td colspan="2" align="center">&nbsp;</td>
         
    </tr>
    <tr>
      <td colspan="2" align="center"><H2 style="color:#FFffff"> Registration</H2></td>
    </tr>
  <tr>
      <td style="color:#FFffff"> Name</td>
      <td><input type="text" name="name" required="required"/></td>
    </tr>
    <tr>
      <td style="color:#FFffff"> Address</td>
      <td><input type="text" name="address" required="required" /></td>
    </tr>
     <tr>
      <td style="color:#FFffff">State</td>
        <td><SELECT id="s_id" name="s_id"> 
            <option value="0" selected="selected">- -Select- -</option>
            <?php
            $sql="SELECT * FROM state";
            $result=$db->query($sql);
            while($row=$db->fetch_array($result ))
            {
            echo'<option value="'.$row['s_id'].'" >'.$row['state'].'</option>';
            }
            ?>
        </SELECT></td>
    </tr>
     <tr>
      <td style="color:#FFffff">District</td>
      <td><SELECT id="d_id" name="d_id"> 
            <option value="0" selected="selected">- -Select- -</option>
            <?php
            $sql="SELECT * FROM districts";
            $result=$db->query($sql);
            while($row=$db->fetch_array($result ))
            {
            echo '<option value="'.$row['d_id'].'" >'.$row['district'].'</option>';
            }
            ?>
        </SELECT></td>
    </tr> 
    <tr>
      <td style="color:#FFffff">Place</td>
      <td><SELECT id="p_id" name="p_id"> 
            <option value="0" selected="selected">- -Select- -</option>
            <?php
            $sql="SELECT * FROM place";
            $result=$db->query($sql);
            while($row=$db->fetch_array($result ))
            {
            echo '<option value="'.$row['p_id'].'" >'.$row['place'].'</option>';
            }
            ?>
        </SELECT></td>
    </tr>
     <tr>
      <td style="color:#FFffff">Email</td>
      <td><input type="text" name="email" required="required" /></td>
    </tr>
     <tr>
      <td style="color:#FFffff">Phone</td>
      <td><input type="text" name="phone" required="required"/></td>
    </tr>
    <tr>
      <td style="color:#FFffff">Username</td>
      <td><input type="text" name="user" required="required"/></td>
    </tr>
    <tr>
      <td style="color:#FFffff" >Password</td>
      <td><input type="text" name="password" required="required" /></td>
    </tr>
<tr>
      <td colspan="2" align="center"><input type="submit" value="register" required="required"/></td>
    </tr>
  
    <tr>
      <td colspan="2" align="center">&nbsp;</td>
    </tr>
</table>
</td>
</tr>
</table>
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>