<?php
$con=mysqli_connect("localhost","root","","payal");
?>
<html
<head>
<title>employee table</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
		<form class="emptb" action="2.php" method="POST">
		<input type="submit" class="btn btn-primary" value="submit"></br></br>
		<input type="text" placeholder="Search emp code" name="search"></br></br>
        <button><i class="fa fa-search"style="font-size: 18px;"></i></button>
		<table class="table"  border="1"  width="20%">
		</form>
			
	<tr>
		<th>empcode</th>
		<th>firstname</th>
		<th>lastname</th>
		<th>email</th>
		<th>contact</th>
		<th>address</th>
		<th>dob</th>
		<th>city</th>
		<th>state</th>
		<th>country</th>
	</tr>
	<?php
	if(isset($_REQUEST['search']))
	{
		$val=$_REQUEST['search'];
		$sql="SELECT * FROM `registerform` where `empcode`='$val'";
		$res=mysqli_query($con,$sql);
		$i=1;
		while($row=mysqli_fetch_assoc($res))
		{
	?>
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
		<td><a class="btn btn-danger" href="3.php?id=<?php echo $row['id']; ?>">Delete</a><br>
		<?php
		}
	}
	?>
	</div>
	</table>
</body>
</html>
	
		

			
			
	

	

