<?php
include "../connection.php";
$id = $_POST['id'];
$products_categories = $_POST['products_categories'];
$sql = "UPDATE products_categories SET 
products_categories = '$products_categories'
id = '$id'";
if(mysqli_query($conn , $sql)) {
    echo "record updated successfully";
}else {
    echo "error:" . mysqli_query($conn);
}
?>