<html>
<head>
<title>Welcome to Brandistic</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<?php
include("header.php");
?>
<div class="container">
<div class="mt-4">
<img src="Images/shopping_women.jpg" height=500px width=1300px>
</div>
<h1 class="text-center">Pick a category of your choice</h1>
<div class="row1">
<div class="row1-1">
<div>
<a href="mensproducts.php"><img src="Images/mens_wear1.jpg" height=200px width=200px></a>
</div>
<div>
<a href="mensproducts.php">Mens Wear</a>
</div>
</div>
<div class="row1-1">
<div>
<a href="womensproducts.php">
<img src="Images/womens_wear1.jpg" height=200px width=200px></a>
</div>
<div>
<a href="womensproducts.php">Womens Wear</a>
</div>
</div>
</div>
<div class="row2">
<div class="row1-1">
<div>
<a href="products.php"><img src="Images/boys_wear2.jpg" height=200px width=200px></a>
</div>


<div>
<a href="products.php">Boys Wear</a>
</div>
</div>
<div class="row1-1">
<div>
<a href="products.php"><img src="Images/girls_wear1.jpg" height=200px width=200px></a>
</div>
<div>
<a href="products.php">Girls Wear</a>
</div>
</div>
</div>
</div>
<?php
include("footer.php");
?>
</body>
</html>