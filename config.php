<?php
$host = "localhost";
$user = "root";
$password = "";
$dbName = "blog";

$conn = new mysqli($host, $user, $password, $dbName);

if ($conn->connect_error) {
    die("Connected failed" . $conn->connect_error);
}
// else{
//     echo"Db connected";
// }