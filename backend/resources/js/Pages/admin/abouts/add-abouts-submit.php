<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $sql = "INSERT INTO abouts( `heading` , `description`)
    VALUES ('$heading' , '$description')";
    if(mysqli_query($conn , $sql)) {
        echo "record submitted successfully";
        header("location:all-abouts.php");
    }else{
        echo "error:" . mysqli_error($conn);
    }
}
?>
