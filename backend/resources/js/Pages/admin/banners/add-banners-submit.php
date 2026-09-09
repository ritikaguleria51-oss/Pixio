<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $image = $_FILES['image'] ['name'];
    $tempname = $_FILES['image'] ['tmp_name'];
    $imagename = $_FILES['image'] ['name'];
    $folder = "../assets/uploads/" . basename($image);
    move_uploaded_file($tempname , $folder);
    $heading = $_POST['heading'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $button = $_POST['button'];
    $sql = "INSERT INTO banners(`image` , `heading` , `title` , `description` , `button`)
    VALUES('$image' , '$heading' , '$title' , '$description' , '$button')";
    if(mysqli_query($conn , $sql)) {
        echo "record submitted successfully";
        header("location:all-banners.php");
    }else {
        echo "error:" . mysqli_error($conn);
    }
}
?>
