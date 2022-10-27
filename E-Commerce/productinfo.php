<?php
include("connection.php");
include("header.php");
session_start();
$product_id=$_GET['prod_id'];
$sel="SELECT * FROM womensproduct_tbl WHERE Category='Men' AND Product_ID=$product_id";
$query=mysqli_query($conn,$sel);

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<title>Product Page</title>
</head>
<body>
<div class="container">
<h1>Products</h1>
<?php
 while ($rows = mysqli_fetch_assoc($query)) {
?>

<div>

<div class="d-inline"><a href="productinfo.php"><img src="uploads/<?php echo $rows['file_name']; ?>" /></a></div>
<?php
echo '<h1 class="d-inline">'.$rows['Product_Name'].'</h1>'; 
echo '<br>';
echo 'MRP : '.$rows['Price'];
echo '<br>';
echo 'Details';
echo '<br>';
echo 'Category : '.$rows['Category'];
echo '<br>';
echo 'Manufacturer : '.$rows['Manufacturer'];
echo '<br>';
echo 'Brand Name : '.$rows['Brand_Name'];
echo '<br>';
echo 'Size : '.$rows['Size'];
}
?>
<div>
<form method="post" action="buy_now.php">
<input type="submit" name="submit" value="Buy Now">
</form>
</div>
</div>
</div>
</body>
</html>