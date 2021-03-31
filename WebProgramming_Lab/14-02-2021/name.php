<?php
$n1 = $_POST['pn1'];
$n2 = $_POST['pn2'];
$n3 = $_POST['pn3'];
$n4 = $_POST['pn4'];
$n5 = $_POST['pn5'];

    $myArray = Array($n1, $n2, $n3, $n4,$n5)?>
    <table border='1'>
    <tr>
    <th>Id</th>
    <th>Name</th>
    </tr><?php
    $x=1;
    for($i=0;$i<5;$i++)
{
    ?>
        <tr>
       <td><?php echo $x;?></td>
        <td><?php echo $myArray[$i];?></td>
        </tr>;
      <?php $x++; }?>
        </table>
    

