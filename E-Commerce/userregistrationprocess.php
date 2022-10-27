<?php
include("connection.php");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$number=$_POST['number'];
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$insrt="insert into userregistration_tbl(First_Name,Last_Name,Mobile_no,Email,Password) values('$fname','$lname','$number','$email','$pass')";
	$query=mysqli_query($conn,$insrt);
	if($query)
	{
		echo  "You have been successfully registered. Your order has been placed and delivered shortly.";
		
		
	}
	else
	{
		echo "Not Recorded";
	}
}

?>