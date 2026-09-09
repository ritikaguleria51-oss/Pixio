<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $products_categories = $_POST['products_categories'];
    $types = $_POST['types'];
    $sql = "INSERT INTO `products_categories`(`products_categories` , `types`)
    VALUES('$products_categories' , '$types')";
    if(mysqli_query($conn , $sql)) {
        echo "record submitted successfully";
        header("location:all-categories.php");
    }else {
        echo "error:" . mysqli_error($conn);
    }
}
?>