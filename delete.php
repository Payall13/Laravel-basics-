<?php
$con=mysqli_connect("localhost","root","","payal");
$empcode=$_GET['id'];
$sql="DELETE FROM `registerform` WHERE empcode='$empcode'";
$res=mysqli_query($con,$sql);
header("location:2.php");
?>
