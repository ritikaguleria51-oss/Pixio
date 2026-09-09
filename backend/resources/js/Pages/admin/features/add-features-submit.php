<?php
include "../connection.php";
if(isset($_POST['upload_btn'])){
  $image = $_FILES['image'] ['name'];
  $tempname = $_FILES['image'] ['tmp_name'];
  $imagename = $_FILES['image'] ['name'];
  $folder = "../assets/uploads/" . basename($image);
  move_uploaded_file($tempname , $folder);
  $name = $_POST['name'];
  $description = $_POST['description'];
  $sql = "INSERT INTO `features`(`image`, `name`, `description`) 
  VALUES ('$image','$name','$description')";
  if(mysqli_query($conn , $sql)) {
    echo "record submitted successfully";
    header("location:all-features.php");
  }else{
    echo "error:" . mysqli_error($conn);
  }
}
?>
