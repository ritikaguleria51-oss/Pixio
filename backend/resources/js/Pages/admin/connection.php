<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fruitables";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection Error". $conn->connect_error);
}

 //echo "Connected Successfully";

?>