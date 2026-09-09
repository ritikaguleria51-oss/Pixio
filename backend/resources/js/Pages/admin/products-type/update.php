<?php
include "../connection.php";
$id = $_POST['id'];
$products_type = $_POST['products_type'];
$sql = "UPDATE products_type SET 
products_type = '$products_type'
id = '$id'";
if(mysqli_query($conn , $sql)) {
    echo "record updated successfully";
}else {
    echo "error:" . mysqli_query($conn);
}
?>