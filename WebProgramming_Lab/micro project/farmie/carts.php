<?php
include('include/dbclass.php');
$db=new database();
?>
<table border="1" align="center" align="center" cellpadding="20" cellspacing="20" width="200">
	<tr>
		<td colspan="2" align="center"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><h2><b><u>VIEW CART</u></b></h2></td>
	</tr>
	<tr>
		 <tr>
      <th>Sl.No</th>
      <th>username</th>
      <th>contactnumber</th>
      <th>itemname</th>
      <th>quantity</th>
   </tr>

	</tr>
	 <?php
	$sql="SELECT * FROM `order`";
	$result=$db->query($sql);
  $slno;
  $slno=1;                       
	while($row=$db->fetch_array($result))                    
  {
  $username=$row['username'];
  $contactnumber=$row['contactnumber'];
  $itemname=$row['itemname'];
  $quantity=$row['quantity'];

?>
<tr>
    <td><?=$slno?>
    <td><?=$username?></td>
    <td><?=$contactnumber?></td>
    <td><?=$itemname?></td>
    <td><?=$quantity?></td>
   </tr>
 <?php
  $slno++;
  }
 ?>
</table>