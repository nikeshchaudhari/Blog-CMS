<?php 
include("config.php");

$username = "admin";
$password = "qwerty";

$hash = password_hash($password,PASSWORD_DEFAULT);

$query = "INSERT INTO users(username,password)VALUES('$username','$hash')";
$data = mysqli_query($conn, $query);
if($data){
    ?>
    <script>
        alert("Data Insert");
    </script>
    <?php
}    

?>