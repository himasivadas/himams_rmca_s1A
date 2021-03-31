<?php
include('include/functions.php');
$db=new database();
define("photopath","./img/img/");
//Login
if(isset($_REQUEST['login']))
{
$user=$_POST['user'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE user='".$user."' AND password='".$password."'";
$result=$db->query($sql);
$count=$db->num_rows($result);
if($count==0)
{
	$msg="Incorrect Username and Password.! Try again";	    
	header('location:logins.php?message='.$msg);
}


else
{
	$row=$db->fetch_array($result);	
	$uid=$row['u_id'];
	$utype=$row['utype'];
	if($utype=="A")
	{
	     header('location:adminhome.php?uid='.$uid);
	}
	else if($utype=="C")
	{
	     header('location:farmers.php?uid='.$uid);
	}
    else if($utype=="G")
	{
	     header('location:farmers.php?uid='.$uid);
	}
	
}
	
}
//add New Customer
if(isset($_REQUEST['newcustomer']))
{
$cu_id=$_POST['cu_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$s_id=$_POST['s_id'];
$d_id=$_POST['d_id'];
$p_id=$_POST['p_id'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$user=$_POST['user'];
$password=$_POST['password'];
$u_id=$_POST['u_id'];
$utype="C";
//User
$sql1="INSERT INTO `arotic(1)`.`users` (`user`,`password`,`utype`) VALUES ('".$user."','".$password."','".$utype."')";
$result=$db->query($sql1);
//Getting the insert id ie.uid
$uid=$db->insert_id();
//Customer
$sql="INSERT INTO `arotic(1)`.`customers` (`cu_id`,`name`,`address`,`s_id`,`d_id`,`p_id`,`email`,`phone`,`user`,`password`,`u_id`) VALUES ('".$cu_id."',
'".$name."','".$address."','".$s_id."','".$d_id."','".$p_id."','".$email."','".$phone."','".$user."','".$password."','".$u_id."')";
$result=$db->query($sql);
if($result)
{



$msg="Customers Registration Successfully";
}
else
{
$msg="Error Occured.Try again";	

}

header('location:login.php?message='.$msg);
}


//add New State
if(isset($_REQUEST['newstate']))
{
$state=$_POST['state'];
$sql="INSERT INTO `arotic(1)`.`state` (`state`) VALUES ('".$state."')";
$result=$db->query($sql);
if($result)
{
	$msg="State added Successfully";
}
else
{
 $msg="Error Occured.Try again";																									
}

header('location:state.php?message='.$msg);
}
//--------------------------------------------
//add New District
if(isset($_REQUEST['newdis']))
{
$s_id=$_POST['s_id'];
$district=$_POST['district'];
$sql="INSERT INTO `arotic(1)`.`districts` (`s_id`,`district`) VALUES ('".$s_id."','".$district."')";
$result=$db->query($sql);
if($result)
{
	$msg="District added Successfully";
}
else
{
  $msg="Error Occured.Try again";																									
}

header('location:districts.php?message='.$msg);
}
//----------------------------------------------
//add New Place
if(isset($_REQUEST['newplace']))
{
$s_id=$_POST['s_id'];
$d_id=$_POST['d_id'];
$place=$_POST['place'];
echo $sql="INSERT INTO `arotic(1)`.`place` (`s_id`,`d_id`,`place`) VALUES ('".$s_id."','".$d_id."','".$place."')";
$result=$db->query($sql);
if($result)
{
	$msg="Place added Successfully";
}
else
{
$msg="Error Occured.Try again";																									
}

header('location:place.php?message='.$msg);
}

//-----------------------------------------------------------------------------------
//add New crops
//--------------------------------------------------------------------------------------------
//add New cart
if(isset($_REQUEST['newcart']))
{

$c_id=$_POST['c_id'];
$cu_id=$_POST['cu_id'];
$username=$_POST['username'];
$contactnumber=$_POST['contactnumber'];
$itemname=$_POST['itemname'];
$quantity=$_POST['quantity'];

echo $sql="INSERT INTO `arotic(1)`.`cart` (`c_id`,`cu_id`,`username`,`contactnumber`,`itemname`,`quantity`) VALUES ('".$c_id."','".$cu_id."','".$username."','".$contactnumber."','".$itemname."','".$quantity."')";
$result=$db->query($sql);
if($result)
{
	$msg=" Cart Successfully";
}
else
{
$msg="Error Occured.Try again";																									 
}

header('location:cart.php?message='.$msg);
}


if(isset($_REQUEST['newfarmingtips']))
{
$name=$_POST['name'];	
$address=$_POST['address'];
$phone=$_POST['phone'];
$quanity=$_POST['quantity'];
$sql="INSERT INTO `arotic(1)`.`farmingtips` (`name`,`address`,`phone`,`itemname`,`quantity`) VALUES ('".$name."','".$addess."','".$phone."','".$itemname."','".$quantity."')";
$result=$db->query($sql);  
if($result)
{
	$msg="order placed successfulluy";
}
else
{
 $msg="Error Occured.Try again";																									
}

header('location:farmingtips.php?message='.$msg);
}
//--------------------------------------------
//add New item
if(isset($_REQUEST['newitems']))
{
$item=$_POST['item'];
$sql="INSERT INTO `arotic(1)`.`items` (`item`) VALUES ('".$item."')";
$result=$db->query($sql);
if($result)
{
	$msg="item added Successfully";
}
else
{
 $msg="Error Occured.Try again";																									
}

header('location:item.php?message='.$msg);
}
if(isset($_REQUEST['newaddcrops']))
{
$t_id=$_POST['t_id'];
$name=$_POST['name'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$image=$_FILES["image"]['name'];

//Insert to Photo field
		//Insert to Photo field
		if(count($_FILES)>0)
		{
			foreach($_FILES as $serfile)
			{			
				if(is_file($serfile['tmp_name']))
				{
					//$ser_name=$_FILES["photo"]['name'];
					$photofile=$_FILES["image"]['name'];
					//$destfilename = $cid.'_client'.strtolower(substr($ser_name,strpos($photofile,'.')));
					$destfile = constant("photopath").$photofile;
					move_uploaded_file($_FILES["image"]['tmp_name'],$destfile);
					//$client_photo=', photo_file="'.$destfilename.'"';
				}
			}
		}	
$sql="INSERT INTO `arotic(1)`.`addcrops` (`t_id`,`name`,`quantity`,`price`,`image`) VALUES ('".$t_id."','".$name."','".$quantity."','".$price."','".$image."')";
$result=$db->query($sql);
if($result)
{
	$msg=" itemadded Successfully";
}
else
{
$msg="Error Occured.Try again";																									
}

 header('location:farmers.php?message='.$msg);
}
//---------------------------------------------
if(isset($_REQUEST['newfarmer']))
{
$f_id=$_POST['f_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$s_id=$_POST['s_id'];
$d_id=$_POST['d_id'];
$p_id=$_POST['p_id'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$user=$_POST['user'];
$password=$_POST['password'];
$u_id=$_POST['u_id'];
$utype="G";
//User
$sql1="INSERT INTO `arotic(1)`.`users` (`user`,`password`,`utype`) VALUES ('".$user."','".$password."','".$utype."')";
$result=$db->query($sql1);
//Getting the insert id ie.uid
$uid=$db->insert_id();
//Customer
$sql="INSERT INTO `arotic(1)`.`farmer` (`f_id`,`name`,`address`,`s_id`,`d_id`,`p_id`,`email`,`phone`,`user`,`password`,`u_id`) VALUES ('".$f_id."','".$name."','".$address."','".$s_id."','".$d_id."','".$p_id."','".$email."','".$phone."','".$user."','".$password."','".$u_id."')";
$result=$db->query($sql);
if($result)
{



$msg="farmers Registration Successfully";
}
else
{
$msg="Error Occured.Try again";	

}

header('location:logins.php?message='.$msg); }

//----------------------------------------------------------------------
if(isset($_REQUEST['newtips']))
{

$name=$_POST['name'];	
$season=$_POST['season'];
$tips=$_POST['tips'];
$sql="INSERT INTO `arotic(1)`.`farmingtips2` (`name`,`season`,`tips`) VALUES ('".$name."','".$season."','".$tips."')";
$result=$db->query($sql);
if($result)
{
	$msg="tips added Successfully";
}
else
{
 $msg="Error Occured.Try again";																									
}

header('location:tips.php?message='.$msg);
}

if(isset($_REQUEST['newod']))
{
$cu_id=$_POST['cu_id'];
$name=$_POST['name'];
$address=$_POST['address'];
$s_id=$_POST['s_id'];
$d_id=$_POST['d_id'];
$p_id=$_POST['p_id'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$image=$_FILES["image"]['name'];

//Insert to Photo field
		//Insert to Photo field
		if(count($_FILES)>0)
		{
			foreach($_FILES as $serfile)
			{			
				if(is_file($serfile['tmp_name']))
				{
					//$ser_name=$_FILES["photo"]['name'];
					$photofile=$_FILES["image"]['name'];
					//$destfilename = $cid.'_client'.strtolower(substr($ser_name,strpos($photofile,'.')));
					$destfile = constant("photopath").$photofile;
					move_uploaded_file($_FILES["image"]['tmp_name'],$destfile);
					//$client_photo=', photo_file="'.$destfilename.'"';
				}
			}
		}	
$sql="INSERT INTO `arotic(1)`.`order` (`cu_id`,`name`,`address`,`s_id`,`d_id`,`p_id`,`email`,`phone`,`image`) VALUES ('".$cu_id."','".$name."','".$address."','".$s_id."','".$d_id."','".$p_id."','".$email."','".$phone."','".$image."')";
$result=$db->query($sql);
if($result)
{
	$msg=" itemadded Successfully";
}
else
{
$msg="Error Occured.Try again";																									
}

 header('location:addcrops.php?message='.$msg);
}

if(isset($_REQUEST['neworder']))
{

$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$quantity=$_POST['quantity'];
echo $sql="INSERT INTO `arotic(1)`.`order` (`name`,`address`,`phone`,`email`,`quantity`) VALUES ('".$name."','".$address."','".$phone."','".$email."','".$quantity."')";
$result=$db->query($sql);
if($result)
{
	$msg="order placed";
}
else
{
$msg="Error Occured.Try again";																									
}	

header('location:order.php?message='.$msg);
}


?>
