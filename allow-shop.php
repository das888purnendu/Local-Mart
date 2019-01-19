<?php 
include("conn.php");
   $sl=$_GET['sl'];
   $sl=mysqli_real_escape_string($conn,$sl); 
   $data=mysqli_query($conn,"UPDATE `all_shop` SET `status` = 'verified' WHERE `all_shop`.`sl` = '".$sl."'");
   header("Location:admin-dashboard.php");
 ?>
   