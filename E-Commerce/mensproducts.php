<?php
include("connection.php");
include("header.php");
$sel="SELECT * FROM womensproduct_tbl where Category='Men'";
$query=mysqli_query($conn,$sel);

?>
<html>
<head>
<title>Product Page</title>
</head>
<body>
<h1>Products</h1>
<?php
 while ($rows = mysqli_fetch_assoc($query)) {
?>

<div>
<a href="productinfo.php?prod_id=<?php echo $rows['Product_ID'];?>">
<img src="uploads/<?php echo $rows['file_name'];?>">
</a>
<?php echo $rows['Product_Name']; 
}
?>
</div>
</body>
</html>