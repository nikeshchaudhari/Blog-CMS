<?php 
include("config.php");

$fullName = "nikesh";
$email = "admin@gmail.com";
$password = "admin";


$hash = password_hash($password,PASSWORD_DEFAULT);

$query = "INSERT INTO user(fullname,email,password,role)VALUES('$fullName','$email','$hash','admin')";
$data = mysqli_query($conn,$query);

if($data){
    echo "admin register";
}

?>