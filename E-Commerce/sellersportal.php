<?php
session_start();
?>
<html>
<head>
<title>Seller's Portal</title>
</head>
<body>
<?php
include("connection.php");
include("header.html");
?>
<h1>Welcome to Brandistic Seller's Services</h1>
<div>
<a href="addproduct.php">Add Products</a>
</div>
<div>
<h1>Create your brandistic listing</h1>
<input type="button" name="StartListing" value="Start Listing" onclick="addproduct()">
<script>
function addproduct()
{
window.location.href="addproduct.php";
}
</script>
</div>
<div>
<h1>Set Shipping Settings</h1>
<input type="button" name="ShippingSettings" value="Go to Settings" onclick="shippingsettings()">
<script>
function shippingsettings()
{
window.location.href="shippingsettings.php";
}
</script>
</div>
<input type="button" name="logout" value="Logout">
</body>
</html>
