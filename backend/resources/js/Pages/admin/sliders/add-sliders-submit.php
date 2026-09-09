<?php
include "../connection.php";
if(isset($_POST['upload_btn'])){
  $heading = $_POST['heading'];
  $title = $_POST['title'];
  $image = $_FILES['image'] ['name'];
  $tempname = $_FILES['image'] ['tmp_name'];
  $imagename = $_FILES['image'] ['name'];
  $folder = "../assets/uploads/" . basename($image);
  move_uploaded_file($tempname , $folder);
  $paragraph = $_POST['paragraph'];
  $button_1 = $_POST['button_1'];
  $button_2 = $_POST['button_2'];
$sql = "INSERT INTO `sliders`(`heading`, `title`, `image`, `paragraph`, `button_1`, `button_2`) 
VALUES ('$heading','$title','$image','$paragraph','$button_1','$button_2')";

  if(mysqli_query($conn , $sql)) {
    echo "record submitted successfully";
    header("location:all-sliders.php");
  }else{
    echo "error:" . mysqli_error($conn);
  }
}
?>
