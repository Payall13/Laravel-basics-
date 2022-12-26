<?php
	$con=mysqli_connect("localhost","root","","payal");
	if(isset($_POST['empcode']))
	{
		
		
			$empcode=$_POST["empcode"];
			$firstname=$_POST["firstname"];
			$lastname=$_POST["lastname"];
			$email=$_POST["email"];
			$contact=$_POST["contact"];
			$address=$_POST["address"];
			$dob=$_POST["dob"];
			$city=$_POST["city"];
			$state=$_POST["state"];
			$country=$_POST["country"];
			$sql="INSERT INTO `registerform`( `empcode`, `firstname`, `lastname`, `email`, `contact`, `address`, `dob`, `city`, `state`, `country`) VALUES ('$empcode','$firstname','$lastname','$email','$contact','$address','$dob','$city','$state','$country')";
			$res=mysqli_query($con,$sql);
			
		
	}	
?>

<html>
<head>
<title>registration form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container=mt-3">
	<form action="1.php" method="POST">
	<h1>Registration form</h1><br>
	<p>Please enter your details</p><br>
	<input type="text" name="empcode" class="form-control" placeholder="enter emp code"  required></br></br>
	<input type="text" name="firstname" class="form-control" placeholder="enter first name" ></br></br>
	<input type="text" name="lastname" class="form-control" placeholder="enter last name"></br></br>
	<input type="text" name="email" class="form-control" placeholder="enter email" ></br></br>
	<input type="text" name="contact" class="form-control" placeholder="enter contact" ></br></br>
	<input type="text" name="address" class="form-control" placeholder="enter address"></br></br>
	<input type="text" name="dob" class="form-control" placeholder="enter dob"></br></br>
	<input type="text" name="city" class="form-control" placeholder="enter city" ></br></br>
	<input type="text" name="state" class="form-control" placeholder="enter state"></br></br>
	<input type="text" name="country" class="form-control" placeholder="enter country" ></br></br>
	<input type="submit" class="btn btn-primary width-100" value="register "></br>
	</form>
	</div>
	
</body>
</html>
