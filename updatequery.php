<?php
$con=mysqli_connect("localhost","root","","payal");
//echo "<br> id = ".$_REQUEST['id'];
if(isset($_REQUEST['id']))
	{
		echo "update";
		$empcode=$_REQUEST['id'];
		$sql="SELECT * FROM `registerform` where `empcode`='$empcode'";
		$res=mysqli_query($con,$sql);
		if(mysqli_num_rows($res))
			echo "Record Found";
		$row=mysqli_fetch_assoc($res);
		
?>
<div class="container my-4 ">
<form action="update.php" method="POST">
	<input type="text" name="empcode" class="form-control" placeholder="enter emp code" value="<?php echo $row['empcode'];?>"><br></br>
	<input type="text" name="firstname" class="form-control" placeholder="enter first name" value="<?php echo $row['firstname'];?>"></br></br>
	<input type="text" name="lastname" class="form-control" placeholder="enter last name"value="<?php echo $row['lastname'];?>"></br></br>
	<input type="text" name="email" class="form-control" placeholder="enter email"value="<?php echo $row['email'];?>" ></br></br>
	<input type="text" name="contact" class="form-control" placeholder="enter contact"value="<?php echo $row['contact'];?>" ></br></br>
	<input type="text" name="address" class="form-control" placeholder="enter address"value="<?php echo $row['address'];?>"></br></br>
	<input type="text" name="dob" class="form-control" placeholder="enter dob"value="<?php echo $row['dob'];?>"></br></br>
	<input type="text" name="city" class="form-control" placeholder="enter city"value="<?php echo $row['city'];?>" ></br></br>
	<input type="text" name="state" class="form-control" placeholder="enter state"value="<?php echo $row['state'];?>"></br></br>
	<input type="text" name="country" class="form-control" placeholder="enter country"value="<?php echo $row['country'];?>" ></br></br>
	<input type="submit" name="update" class="btn btn-dark w-100 text-info" value="update">
</form>
<?php		
	}
?>

<?php
	if(isset($_POST['update']))
	{
		$empcode=$_POST['empcode'];
		$firstname=$_POST['firstname'];
		$lastname=$_POST['lastname'];
		$email=$_POST['email'];
		$contact=$_POST['contact'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$country=$_POST['country'];
		$sql="UPDATE `registerform` SET `empcode`='$empcode',`firstname`='$firstname',`lastname`='$lastname',`email`='$email',`contact`='$contact',`address`='$address',`dob`='$dob',`city`='$city',`state`='$state',`country`='$country' WHERE `empcode`='$empcode'";
		echo "$sql";

		$res=mysqli_query($con,$sql);
		header("location:2.php");
	}
			
	
?>
