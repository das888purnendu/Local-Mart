<?php 
include("conn.php");
session_start();
$time=time();
$_SESSION['ssssss']='active'.$time;
   $lat=$_POST['l1'];
   $lon=$_POST['l2'];
   $sl=$_POST['sl'];
$_SESSION['v-lat']=$lat;
$_SESSION['v-lon']=$lon;
$_SESSION['v-sl']=$sl;

   $query="UPDATE `all_shop` SET `lati` = '".$lat."', `longi` = '".$lon."' WHERE `all_shop`.`sl`='".$sl."'";
   $data=mysqli_query($conn,$query);
if($data)
   {
    echo '1';
    exit();
   }
   
 ?>
   