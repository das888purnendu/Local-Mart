<?php 
include("conn.php");
   $email=$_POST['email'];
   $email=mysqli_real_escape_string($conn,$email);
   $count=0;
   $data=mysqli_query($conn,"select email from user where email='".$email."'");
   $count=mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
  if($count!=0)
   {
    echo '1';
    exit();
   }
   ?>
   