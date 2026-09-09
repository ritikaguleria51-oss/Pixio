<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM products where id = '$id'";
if(mysqli_query($conn , $sql)) {
    echo "record deleted successfully";
    header("location:all-products.php");
}else {
    echo "error:" . mysqli_query($conn);
}
?>