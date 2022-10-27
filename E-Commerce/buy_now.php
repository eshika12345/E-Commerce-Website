<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<?php
include("header.html");
include("connection.php");
?>
<div class="container">
New to Brandistic?

<div>Personal Information</div>
<div class="p-3 mb-2 bg-light border border-info">
<form method="post" action="userregistrationprocess.php">
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
<label>Your address :</label>
<br>
<input type="text" name="address">
</div>
<div class="label">
<label> Select City : </label>  
<select>  
<option value = "Nagpur">Nagpur   
</option>  
<option value = "Bangalore">Bangalore  
</option>  
<option value = "Pune">Pune  
</option>  
<option value = "Ahmedabad">Ahmedabad  
</option>  
</select> 
</div>
<div class="label">
<label>Pincode :</label>
<br>
<input type="text" name="pincode">
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
