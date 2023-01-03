<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.1/css/bootstrap.min.css"/>
<?php
	$con = mysqli_connect("localhost","root","","payal");
	session_start();
	if(!$_SESSION['registerform'])
	{
		header("location:login.php");
	}	
	else
	{
		$empcode = $_SESSION['registerform'];
		$sql="SELECT * FROM `registerform` where `empcode`='$empcode'";
		$res = mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_assoc($res))
		{
?>
<div class="container mt-3">
<table class="table"  border="1"  width="20%">
<tr>
	<th>empcode
	<th>firstname
	<th>lastname
    <th>email
	<th>contact
	<th>address
	<th>dob
	<th>city
	<th>state
	<th>country
</tr>
<tr>
	<th><?php echo $row['empcode'];?>
	<th><?php echo $row['firstname'];?>
	<th><?php echo $row['lastname'];?>
	<th><?php echo $row['email'];?>
	<th><?php echo $row['contact'];?>
	<th><?php echo $row['address'];?>
	<th><?php echo $row['dob'];?>
	<th><?php echo $row['city'];?>
	<th><?php echo $row['state'];?>
	<th><?php echo $row['country'];?>
	
<?php
		}
	}
?>
</div>
</form>

