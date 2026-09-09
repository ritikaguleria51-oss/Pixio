<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $sql = "INSERT INTO `facts`( `title`, `description`) 
  VALUES ('$title','$description')";
  if(mysqli_query($conn , $sql)) {
    echo "record submitted successfully";
    header("location:all-facts.php");
  } else{
    echo "error:" . mysqli_error($conn);
  }
}
?>
