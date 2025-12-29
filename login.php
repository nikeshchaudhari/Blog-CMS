<?php
session_start();
include("config.php");
$errors = [];
?>
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <main class="w-full h-screen flex justify-center bg-gray-200/100">
        <div class="w-[400px] h-[280px] m-auto bg-white/20  shadow-xl p-2 rounded">
            <h2 class="text-center text-[25px] font-bold">Login</h2>
            <form method="post" class="flex flex-col m-2">
                <label for="username" class="mb-2">Username</label>
                <input type="text" id="username" name="username" placeholder="Enter username" class="border p-2 rounded mb-2 ">
                <label for="pass" class="mb-2">Password</label>
                <input type="password" id="pass" name="password" placeholder="Enter password" class="border p-2 rounded mb-4">
                <button type="submit" name="login-btn" class="bg-gray-800 p-2 text-white rounded-lg hover:bg-gray-700 cursor-pointer">Login</button>
            </form>
            <?php 
            if(isset($_POST["login-btn"])){
                $username=trim($_POST["username"]);
                $password=trim($_POST["password"]);

                if($username===""){
                    $errors[] = "username is required";
                }
                if($password=== ""){
                    $errors[] = "password required";
                }

                $query = "SELECT * FROM users WHERE username ='$username'AND password ='$password'";
                $data = mysqli_query($conn, $query);    

                $result = mysqli_fetch_assoc($data);
                     
                if($result && $password_verify($password,$result["password"])){
                    $_SESSION['user']= $username;
                    $_SESSION['password']= $password;
                }
            ?>
        </div>
    </main>
</body>

</html>