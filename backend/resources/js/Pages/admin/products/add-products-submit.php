<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $image = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];
    $imagename = $_FILES['image'] ['name'];
    $folder = "../assets/uploads/" . basename($image);
    move_uploaded_file($tempname , $folder);
    $label = $_POST['label'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $products_type = $_POST['products_type'];
    $products_categories = $_POST['products_categories'];
    $sql = "INSERT INTO products(`image` , `label` , `name` , `description` , `price` , `products_type` , `products_categories`)
    VALUES('$image' , '$label' , '$name' , '$description' , '$price' , '$products_type' , '$products_categories')";
    if(mysqli_query($conn , $sql)) {
        echo "record submitted successfully";
        header("location:all-products.php");
    }else {
        echo "error:" . mysqli_error($conn);
    }
}
?>