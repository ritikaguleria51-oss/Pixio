<?php
include "../connection.php";
$id = $_POST['id'];
$image = $_FILES['image'] ['name'];
$tempname = $_FILES['image'] ['tmp_name'];
$imagename = $_FILES['image'] ['tmp_name'];
$folder = "..assets/uploads" . basename($image);
if(!empty($image)) {
    if(move_uploaded_file($tempname, $folder)){
$label = $_POST['label'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$products_type = $_POST['products_type'];
$products_categories = $_POST['products_categories'];
$sql = "UPDATE products SET
image = '$image',
label = '$label',
name = '$name',
description = '$description',
price = '$price',
products_type = '$products_type',
products_categories = '$products_categories'
where id = '$id'";
    } else {
        echo "image upload failed";
        exit;
    } 
}else {
    $sql = "UPDATE products SET 
    label = '$label',
    name = '$name',
    description = '$description',
    price = '$price',
    products_type = '$products_type',
    products_categories = '$products_categories'
    where id = '$id'";
} 
if(mysqli_query($conn , $sql)) {
    echo "record updated successfully";
    header("location:all-products.php");
}else{
    echo "error:" . mysqli_query($conn);
}
?>