<?php
include('include/dbclass.php');
$db=new database();
?>



      <td colspan="2" align="center">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="center"><H2><B><U>View cart</U></B></H2></td>
    </tr>
  
   <tr>
      <th>Sl.No</th>
      <th>username</th>
      <th>contactnumber</th>
      <th>itemname</th>
      <th>quantity</th>
   </tr>



 <?php
    $sql="SELECT cart.username, cart.contactnumber,cart.itemname,cart.quantity";
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
   
  <li> hima </li>
  <li> 7510516366</li>
   <li>blackburry</li>
  <li> 2kg</li>
  <br>
  <br>
   <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>rupees</th>
   </tr>

  <li> aleena </li>
  <li> 9875422345</li>
   <li>mangosteen</li>
  <li> 2kg</li>
  <br>
<tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>rupees</th>
   </tr>

  <li> liya </li>
  <li> 9875422345</li>
   <li>mulburry</li>
  <li> 2kg</li>
  <br>
   <tr>
      <th>Sl.No</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>rupees</th>
   </tr>

  <li> ammu</li>
  <li> 9875422345</li>
   <li>mangosteen</li>
  <li> 2kg</li>
  <br>

