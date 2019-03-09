<?php
require '../includes/config.php';
extract($_GET);
echo $email;
$delete=mysqli_query($conn,"DELETE FROM `pro_users` WHERE email='$email'");
if($delete){
	echo "<script> window.open('dashboard.php','_self');</script>";
}
?>