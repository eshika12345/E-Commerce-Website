<?php
include("connection.php");
include("header.html");
$sel="SELECT * FROM womensproduct_tbl WHERE Category='Women'";
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
<img src="uploads/<?php echo $rows['file_name'];?>">

<?php echo $rows['Product_Name']; 
}
?>
</div>
</body>
</html>
