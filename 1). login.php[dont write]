
<?php
	if(isset($_POST['empcode']))
	{
			$empcode=$_POST['empcode'];
			$email=$_POST['email'];
			$sql="SELECT*FROM`registerform` where `empcode`='$empcode'and`email`='$email'";
			$res=mysqli_query($con,$sql);
			$count = mysqli_affected_rows($con);
			
			{
				session_start();
				$_SESSION['registerform']=$empcode;
				header("location:homepage.php");
			}
	}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"/>
<div class="container mt-2">
<form action="" method="POST">
	<input type="empcode" class="form-control" placeholder="Enter empcode" name="empcode" required></br>
	<input type="email" class="form-control" placeholder="Enter email" name="email" required></br>
	<input type="submit" name="search" class="btn btn-primary w-100" value="Login">
</form>
</div>
