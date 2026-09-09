<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM contacts where id = '$id'";
if(mysqli_query($conn , $sql)) {
    echo "record deleted successfully";
    header("location:all-contacts.php");
}else {
    echo "error:" . mysqli_error($conn);
}
?>