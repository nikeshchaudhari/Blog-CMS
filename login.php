<?php
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>
    <main class="w-full h-screen flex justify-center bg-gray-200/100">
        <div class="w-[400px] h-[320px] m-auto bg-white/20  shadow-xl p-2 rounded">
            <h2 class="text-center text-[25px] font-bold">Login</h2>
            <form method="post" class="flex flex-col m-2">
                <label for="email" class="mb-2">Email</label>
                <input type="text" id="email" name="username" placeholder="Enter email" class="border p-2 rounded mb-2 ">
                
                <label for="pass" class="mb-2">Password</label>
                <input type="password" id="pass" name="password" placeholder="Enter password" class="border p-2 rounded mb-4">
                <button type="submit" name="login-btn" class="bg-gray-800 p-2 text-white rounded-lg hover:bg-gray-700 cursor-pointer mb-2">Login</button>
                <span class="text-center">Don't have an account? <a href="register.php" class="text-blue-600">Register</a></span>
            </form>
            <?php 
        //    login


            ?>
        </div>
    </main>
</body>
</html>