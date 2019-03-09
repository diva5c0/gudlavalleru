<!DOCTYPE html>
<html>
<head>
	<title> :: DAshboard ::</title>
	<!-- Styles -->
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/style.css">
</head>
<body class="container">
	<header>
		ADMIN
	</header>
<!-- Flex parent -->
	<section class="parent">

		<!-- Flex Childs start -->
		<div class="child">
			<img src="../images/learning.svg" alt="Student">
			<a href="students.php"> Students </a>
		</div>

		<div class="child">
			<img src="../images/teacher.svg" alt="teacher">
			<a href="faculty.php"> Faculty </a>
			
		</div>

		<div class="child">
			<img src="../images/interview.svg" alt="Forums">
			<a href="forums.php"> Forums </a>
			
		</div>
		<!-- End of flex childs -->
	</section>
	<!-- End of flex-parent -->

	<?php
	require '../includes/config.php';
	$users=mysqli_query($conn,"SELECT * FROM `pro_users`");
	
		?>
		<div class="col-md-6 col-md-offset-3">
		<table class="table" border="1">
			<thead>
			<tr>
				<th> Name </th> <th> Email </th> <th> Remove </th>
			</tr>
			</thead>

			<tbody>
				<?php while($row=mysqli_fetch_array($users)){ ?>
					<tr>
						<td> <?php echo $row['name']; ?></td>
						<td> <?php echo $row['email']; ?></td>
						<td> <a class="btn btn-danger" href="delete.php?email=<?php echo $row['email']; ?>" onclick="return confirm('Are you want to delete ?')"> <span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>

	<?php	
	}
	?>
			</tbody>
		</table>
		</div>
	
</body>
</html>