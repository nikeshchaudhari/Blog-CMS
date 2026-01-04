<?php 
include("config.php");

$username = "admin";
$password = "qwerty";

$hash = password_hash($password,PASSWORD_DEFAULT);
$check_admin_query = "SELECT id FROM users WHERE username='$username'";
$data = mysqli_query($conn,$check_admin_query);
$result = mysqli_fetch_assoc($data);
if($result){
    echo "admin already register";
}

// insert query

$query = "INSERT INTO users(username,password,role)VALUES('$username','$hash','admin')";
$admin_data = mysqli_query($conn,$query);
if($admin_data){
    ?>

<script>
    alert("Admin Add Successfully...");
</script>
<?php
}else{
    ?>
<script>
    alert("Admin Not Added ...");
</script>
    <?php
}

?>