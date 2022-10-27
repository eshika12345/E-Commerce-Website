<?php
include('connection.php');
if(isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['password'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("Please enter valid email id");
} 
$sql="select * from registration_tbl where Email='$email' and Password='$password'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);
if($count==1)
{
session_start();
$_SESSION['username']=$email;
header("Location:sellersportal.php");
}
else
{
echo 'Login failed, invalid username or password';
}
}
?>