<?php
include('include/dbclass.php');
$db=new database();
?>
<table align="center" cellpadding="10" cellspacing="10" width="1000">

<tr>
    	<td colspan="5" align="center">&nbsp;</td>
    </tr>
    <tr>
    	<td colspan="5" align="center"><H2><B><U> ADD ITEMS</U></B></H2></td>
    </tr>

 <?php
       $sql="SELECT addcrops.name,addcrops.quantity,addcrops.price,addcrops.image,items.item FROM addcrops LEFT JOIN items ON addcrops.t_id=items.t_id";
    $result=$db->query($sql);
	$slno;
	$slno=1;
	echo '<tr>';
    while($row=$db->fetch_array($result))
	{																																																																																																								
	$item=$row['item'];
	$name=$row['name'];
	$quantity=$row['quantity'];
	$price=$row['price'];
	$image=$row['image'];
    ?> 
    <td>
    <p align="center"> 
    <img src="img/img/<?=$image?>" height="150" height="150">
    </p>
    <p align="center"><?=$item?></p>
    <p align="center"><?=$name?></p>
    <p align="center"><?=$quantity?></p>
    <p align="center"><?=$price?></p>
    <p align="center"><?=$image?></p>
    </td>								
   
   <?php
  $slno++;
  if(fmod($slno,4)==0)
  {
 		echo '<tr>';
		continue;
		echo '</tr>';
  }
  }
  
 ?>
 </tr>
   </table>