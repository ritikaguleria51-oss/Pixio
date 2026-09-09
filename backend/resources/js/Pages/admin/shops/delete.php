<?php
include "../connection.php";
$id = $_GET['id'];
$sql = "DELETE FROM shops where id = '$id'";
if(mysqli_query($conn , $sql)) {
    echo "record deleted successfully";
}else {
    echo "error:" . mysqli_error($conn);
}
?>