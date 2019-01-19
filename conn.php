<?php
define("DBHOST","localhost");
define("DBUSERNAME","root");
define("DBPASSWORD","");
define("DB","localmart");
$conn = mysqli_connect(DBHOST,DBUSERNAME,DBPASSWORD,DB);
if (mysqli_connect_error())
{
	echo mysqli_connect_error();
	exit();
}
?>