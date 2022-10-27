<html>
<head>
<title>Add a product</title>
<link rel="stylesheet" href="css/sellers_registration.css">
</head>
<body>
<?php
include("connection.php");
include("header.html");
?>
<div class="container">
<h1>Add a product</h1>
<h2>Vital Info</h2>
<form method="post" enctype="multipart/form-data" action="addproductprocess.php">
<label>Category</label>
<br>
<input type="radio" id="Men" name="category" value="Men">
<label for="Men">Men</label><br>
<input type="radio" id="Women" name="category" value="Women">
<label for="Women">Women</label><br>
<input type="radio" id="Boys" name="category" value="Boys">
<label for="Boys">Boys</label>
<br>
<input type="radio" id="Girls" name="category" value="Girls">
<label for="Girls">Girls</label>
<br>
<label>Product Name</label>
<br>
<input type="text" name="prod_name" placeholder="For ex Lymio Women Top">
<br>
<label>Manufacturer</label>
<br>
<input type="text" name="manufacturer" placeholder="Manufacturer">
<br>
<label>Brand Name</label>
<br>
<input type="text" name="brand" placeholder="Brand Name">
<br>
<label>Size</label>
<select name="size">
<option value="">--select--</option>
<option value="xs">XS</option>
<option value="s">S</option>
<option value="m">M</option>
<option value="l">L</option>
<option value="xl">XL</option>
<option value="xxl">XXL</option>
</select>
<br>
<label>Price</label>
<br>
<input type="text" name="price" placeholder="Enter Price">
<br>
<label>Package Quantity</label>
<br>
<input type="text" name="qty" placeholder="Quantity">
<br>
<label>Select image to upload</label>
<input type="file" name="file"/>
<br>
<input type="submit" name="submit" value="Submit">
</div>
</form>
</body>
</html>
