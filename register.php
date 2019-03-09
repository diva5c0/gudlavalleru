<!DOCTYPE html>
<html lang="en-US">
<head>
	<title>gec online forum</title>
	<link rel="stylesheet"  href="styles/css/bootstrap.min.css">

	<!-- Script -->
	<script src="styles/js/sweet.js"></script>
</head>





<style type="text/css">
     .rad{
      background: linear-gradient(to bottom,#B7F8DB, #50A7C2);

     }

   </style>







<body class="rad">

	<div class="col-md-4 col-md-offset-4" style="margin-top: 3%">
		<div class="panel panel-primary" >
			<div class="panel-heading">
				REGISTER
			</div>
			<div class="panel-body">
				<form method="post" enctype="multipart/form-data">
                    
					<input type="text" name="userid" placeholder="Userid" class="form-control">
					<br>
					<input type="text" name="name" placeholder="Name" class="form-control"><br>
					<input type="email" name="email" placeholder="Email" class="form-control"><br>
					<input type="password" name="password" placeholder="Password" class="form-control" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> <br>
					<input type="password" name="cpassword" placeholder="re-enter password" class="form-control" id="cpassword" required ><br>
					<input type="text" name="phonenumber" placeholder="Phone number" class="form-control"><br>
					
					 <p>gender</p>
					 <input type="radio" name="gender" value="male">Male<br>
                     <input type="radio" name="gender" value="female">Female<br>

					<input type="submit" name="submit" class="btn-primary btn-block" id="submit">
					<p>Already have account. click <a href="login.php"> here </a>to login </p>
				</form>
			</div> 
		</div>
	</div>

	<div id="message" style="display: none;">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
				
<script>
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
var cpassword=document.getElementById("cpassword");


cpassword.onkeyup=function(){
	if(myInput.value!=cpassword.value)
{
     cpassword.setCustomValidity("Both passwords do not match");
}
}
       

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>


   


</body>
</html>

<?php
require 'includes/config.php';
extract($_POST);
if(isset($submit))
{
$password=md5($password);
	$cpassword=md5($cpassword);
	$registerQuery=mysqli_query($conn,"INSERT INTO `pro_users`(`name`, `email`,`userid`,`password`, `cpassword`,`phonenumber`,`gender`) VALUES ('$name','$email','$userid','$password','$cpassword','$phonenumber','$gender')");
	if($registerQuery)
	{



		echo '<script> swal("Good job!", "You clicked the button!", "success");
 </script>';
	}
	else
	{
		echo "fail";
	}
}

  ?>
