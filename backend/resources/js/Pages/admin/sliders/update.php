<?php
include "../connection.php";
$id = $_POST['id'];
$image = $_FILES['image'] ['name'];
$tempname = $_FILES['image'] ['tmp_name'];
$imagename = $_FILES['image'] ['name'];
$folder = "../assets/uploads/" . basename($image);
if(!empty($image)) {
    if(move_uploaded_file($tempname, $folder)){
        $heading = $_POST['heading'];
        $title = $_POST['title'];
        $paragraph = $_POST['paragraph'];
        $button_1 = $_POST['button_1'];
        $button_2 = $_POST['button_2'];
        $sql = "UPDATE sliders SET 
        image = '$image', 
        heading = '$heading', 
        title = '$title',
        paragraph = '$paragraph',
        button_1 = '$button_1',
        button_2 = '$button_2'
        where id = '$id'";
        } else {
        echo "image upload failed";
        exit;
    } 
}
else {
    $sql = "UPDATE sliders SET 
        heading = '$heading', 
        title = '$title',
        paragraph = '$paragraph',
        button_1 = '$button_1',
        button_2 = '$button_2'
        where id = '$id'";
         } 
         if(mysqli_query($conn , $sql)) {
            echo "record updated successfully";
            header("location:all-sliders.php");
        }else{
            echo "error:" . mysqli_query($conn);
        }
?>
