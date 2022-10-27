<html>
<head>
<title>Brandistic Sign In</title>
<link rel="stylesheet" href="css/sellers_registration.css">
</head>
<body>
<?php
include("connection.php");
include("header.html");
?>
<h1>Welcome to Seller's Portal</h1>
<form method="post" action="sellersloginprocess.php">
<div class="container">
<label>E-mail :</label>
<br>
<input type="text" name="email" placeholder="Enter Email">
<br>
<label>Password :</label>
<br>
<input type="password" name="password" placeholder="Brandistic password">
<br>
<input type="submit" name="submit" value="Sign-in">
</div>
</form>
</body>
</html>
