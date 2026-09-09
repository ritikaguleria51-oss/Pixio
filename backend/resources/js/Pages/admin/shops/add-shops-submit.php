<?php
include "../connection.php";
if(isset($_POST['upload_btn'])) {
    $categories = $_POST['categories'];
    $sql = "INSERT INTO shops(`categories`)
    VALUES('$categories')";
    if(mysqli_query($conn , $sql)){
        echo "record submitted successfully";
        header("location:all-shops.php");
    } else {
        echo "error:" . mysqli_error($conn);
    }
}
?>