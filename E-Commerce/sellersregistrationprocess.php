<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$insrt="insert into registration_tbl(Name,Mobile_no,Email,Password) values('$name','$number','$email','$pass')";
	$query=mysqli_query($conn,$insrt);
	if($query)
	{
		echo  "Recorded";
		header("Location:sellersportal.php");
		
	}
	else
	{
		echo "Not Recorded";
	}
}

?>