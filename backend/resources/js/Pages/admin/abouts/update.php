<?php
include "../connection.php";
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];

    $sql = "UPDATE abouts SET 
    heading = '$heading',
    description = '$description'
    where id = '$id'";

    $sql = mysqli_query($conn , $sql){
        echo "record updated sucessfully";
    }else {
        echo "error:" . mysqli_error($conn);
    }
?>