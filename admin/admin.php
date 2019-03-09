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
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				ADMIN LOGIN
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
					<input type="email" name="email" placeholder="email" class="form-control"><br>
					<input type="password" name="password" placeholder="password" class="form-control"> <br>
					<input type="submit" name="login" class="btn-primary btn-block">
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php
session_start();
require '../includes/config.php';
extract($_POST);
if(isset($login)){
	$loginQuery=mysqli_query($conn,"SELECT * FROM `pro_admin` WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($loginQuery)==1){
	$_SESSION['email']=$email;
	echo "<script> window.open('dashboard.php','_self'); </script>";
} else {
	echo "Invalid Credentials";
}
}
?>