<html>
<head>
<link rel="stylesheet" href="css/sellers_registration.css">
<title>Brandistic Registration</title>
</head>
<body>
<?php
include("connection.php");
include("header.html");
?>
<div class="container">
<div>Personal Information</div>
<form method="post" action="sellersregitrationprocess.php">
<div class="label">
<label>Your first name :</label>
<br>
<input type="text" name="fname">
</div>
<div class="label">
<label>Your last name :</label>
<br>
<input type="text" name="lname">
</div>
<div class="label">
<label>Mobile number :</label>
<br>
<input type="text" name="number">
</div>
<div class="label">
<label>Email (optional) :</label>
<br>
<input type="text" name="email">
</div>
<div class="label">
<label>Password :</label>
<br>
<input type="password" name="pass" placeholder="at least 6 characters">
</div>
<div class="label">
<input type="submit" name="submit" value="Submit">
</div>
</form>
<div>
Already have an account?<a href="sellers_sign-in.php">Login</a>
</div>
</div>
</body>
</html>
