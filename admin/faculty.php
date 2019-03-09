<html lang="en-US">
<head>
	<title>gec online forum</title>
	<link rel="stylesheet"  href="styles/css/bootstrap.min.css">

	<!-- Script -->
	<script src="../styles/js/sweet.js"></script>
</head>





<style type="text/css">
     .rad{
      background: linear-gradient(to bottom,#B7F8DB, #50A7C2);

     }

   </style>




<body class="rad">

	<div class="col-md-4 col-md-offset-4" style="margin-top: 1%">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				FACULTY
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
                    
					<input type="text" name="userid" placeholder="Userid" class="form-control">
					<br>
					<input type="text" name="name" placeholder="Name" class="form-control"><br>
					<input type="email" name="email" placeholder="Email" class="form-control"><br>
					<input type="password" name="password" placeholder="Password" class="form-control"> <br>
					<input type="designation" name="designation" placeholder="designation" class="form-control"><br>
					<select class="form-control" required> 
                               <option value="" disabled selected>branch
                                <option value="cse">CSE</option>
                               <option value="ece">ECE</option>
                               <option value="it">IT</option>
                               <option value="mechanical">MECHANICAL</option>
                               <option value="civil">CIVIL</option>



                     </select><br><br>
 
					<input type="text" name="phonenumber" placeholder="Phonenumber" class="form-control"><br>
					<select class="form-control" required> 
                               <option value="" disabled selected>gender
                                <option value="male">male</option>
                               <option value="female">female</option>
                     </select><br><br>
 
					<input type="submit" name="submit" class="btn-primary btn-block">
				</form>
			</div>
		</div>
	</div>

</body>
</html>

<?php
include '../includes/config.php';
extract($_POST);
if(isset($submit))
{
$password=md5($password);
	$facultyQuery=mysqli_query($conn,"INSERT INTO `pro_faculty`(`userid`,`name`, `email`,`password`,`designation`,`branch`,`phonenumber`,`gender`) VALUES ('$userid','$name','$email','$password','$designation','$branch','$phonenumber','$gender')");
	if($facultyQuery)
	{
		echo '<script> swal("Good job!", "You clicked the button!", "success");
 </script>';
	}
	else
	{
		echo '<script> swal("Sorry!", "Something went wrong", "error");
 </script>';
	}
}

  ?>
