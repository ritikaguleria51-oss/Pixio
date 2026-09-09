<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $products_type = $_POST['products_type'];
    $sql = "INSERT INTO `products_type`(`products_type`)
    VALUES('$products_type')";
    if(mysqli_query($conn , $sql)) {
        echo "record submitted successfully";
        header("location:all-products.php");
    }else {
        echo "error:" . mysqli_error($conn);
    }
}
?>