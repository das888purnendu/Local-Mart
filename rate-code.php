<?php 
include("conn.php");

   $sl=$_POST['shop_code'];
   $sl=mysqli_real_escape_string($conn,$sl);

   $rate_code=$_POST['rate_code'];
   $rate_code=mysqli_real_escape_string($conn,$rate_code);

   $data=mysqli_query($conn,"INSERT INTO `rating_code` (`shop_code`, `rating_code`) VALUES ('".$sl."','".$rate_code."')");

  if($data)
   {
    echo '1';
    exit();
   }
   ?>
   