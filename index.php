<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>gec online forum</title>
	<link rel="stylesheet"  href="styles/css/bootstrap.min.css">
</head>








<style type="text/css">
     .rad{
      background: linear-gradient(to bottom,cyan,cyan);
     }

   </style>






<body class="rad">
	<div class="col-md-4 col-md-offset-4" style="margin-top: 10%">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				Faculty Login
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
					<input type="text" name="userid" placeholder="Userid" class="form-control"><br>
					<input type="password" name="password" placeholder="password" class="form-control"> <br><!-- 
					<label for="faculty"> <input type="checkbox" value="1" id="faculty" name="faculty"> Login as faculty </label> -->
					<input type="submit" name="login" class="btn-primary btn-block">
					<!-- <p>If new user. click <a href="register.php"> here </a>to Register </p> -->
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php
session_start();
require 'includes/config.php';
extract($_POST);
if(isset($login)){
$password=md5($password);
//echo $password;
if($faculty=="1"){
	$loginQuery=mysqli_query($conn,"SELECT * FROM `pro_faculty` WHERE userid='$userid' AND password='$password'");
	//echo $email;
	//echo $password;
	if(mysqli_num_rows($loginQuery)==1)
	{
	$_SESSION['facultyid']=$userid;
	echo "<script> window.open('faculty/profile.php','_self'); </script>";
    }
  else 
	echo "invalid credentials";
} else {
	$loginQuery=mysqli_query($conn,"SELECT * FROM `pro_users` WHERE userid='$userid' AND password='$password'");
	//echo $email;
	//echo $password;
	if(mysqli_num_rows($loginQuery)==1)
	{
	$_SESSION['userid']=$userid;
	echo "<script> window.open('profile.php','_self'); </script>";
    }
  else 
	echo "invalid credentials";
}
}
?>