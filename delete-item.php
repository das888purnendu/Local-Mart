<?php 
include("conn.php");
   $sl=$_GET['sl'];
   $sl=mysqli_real_escape_string($conn,$sl); 
   $data=mysqli_query($conn,"DELETE FROM `all_item` WHERE `all_item`.`sl` = '".$sl."'");
   header("Location:item-delete.php");
 ?>
   