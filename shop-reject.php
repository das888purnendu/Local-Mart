<?php 
include("conn.php");
   $sl=$_GET['sl'];
   $sl=mysqli_real_escape_string($conn,$sl); 
	$query1="SELECT * FROM `all_shop`  WHERE `all_shop`.`sl`= '".$sl."'";
	$res1 = mysqli_query ($conn,$query1);
	$row1 = mysqli_fetch_assoc($res1);
    $email=$row1['email'];
   mysqli_query($conn,"DELETE FROM `user` WHERE `user`.`email`= '".$email."'");
   mysqli_query($conn,"DELETE FROM `rating_code` WHERE `rating_code`.`shop_code`= '".$sl."'");
   mysqli_query($conn,"DELETE FROM `all_item` WHERE `all_item`.`shop_code`= '".$sl."'");
   mysqli_query($conn,"DELETE FROM `all_shop` WHERE `all_shop`.`sl`= '".$sl."'");
   header("Location:admin-dashboard.php");
 ?>
  