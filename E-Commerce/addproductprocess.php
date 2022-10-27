<?php
include("connection.php");
if(isset($_POST['submit']))
{
$category=$_POST['category'];
$prod_name=$_POST['prod_name'];
$manufacturer=$_POST['manufacturer'];
$brand=$_POST['brand'];
$size=$_POST['size'];
$price=$_POST['price'];
$qty=$_POST['qty'];
$file=rand(1000,10000)." ".$_FILES['file']['name'];
$file_loc=$_FILES['file']['tmp_name'];
$file_size=$_FILES['file']['size'];
$file_type=$_FILES['file']['type'];
$folder="uploads/";
$new_size=$file_size/1024;
$new_file_name=strtolower($file);
$final_file=str_replace(' ','-',$new_file_name);
if(move_uploaded_file($file_loc,$folder.$final_file))
{
$insert="INSERT INTO womensproduct_tbl(Category,Product_Name,Manufacturer,Brand_Name,Size,Price,Quantity,file_name,file_type,file_size) VALUES('$category','$prod_name','$manufacturer','$brand','$size','$price','$qty','$final_file','$file_type','$new_size')";
mysqli_query($conn,$insert);
header("Location:addedproduct.php");
}

}
?>