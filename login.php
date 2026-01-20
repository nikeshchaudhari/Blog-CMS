<?php
session_start();
include "config.php";   
// login

if(isset($_POST['login-btn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query ="SELECT * FROM user WHERE email='$email'";
    $data = mysqli_query($conn,$query);
    $result= mysqli_fetch_assoc($data);

    if($result && password_verify($password, $result['password'])){
        // Session set
        $_SESSION['email'] = $result['email'];
        $_SESSION['role'] = $result['role'];
        $_SESSION['fullname']=$result['fullname'];

        // Role check
        if($_SESSION['role'] === 'admin'){
            header("Location: dashboard.php");
            exit();
        } elseif($_SESSION['role'] === 'user'){
            header("Location: index.php");
            exit();
        } else {
            echo "Unknown role!";
        }
    } else {
        echo "Invalid email or password!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">    

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || Login</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>

<body>
    <main class="w-full h-screen flex justify-center bg-gray-200/100">
        <div class="w-[400px] h-[320px] m-auto bg-white/20  shadow-xl p-2 rounded">
            <h2 class="text-center text-[25px] font-bold">Login</h2>
            <form method="post" class="flex flex-col m-2">
                <div class="flex flex-col">
                    <label for="email" class="mb-2">Email</label>
                <input type="text" id="email" name="email" placeholder="Enter email" class="border p-2 rounded mb-2 ">
                </div>
                
               <div class="flex flex-col relative">
                 <label for="pass" class="mb-2">Password</label>
                <input type="password" id="pass" name="password" placeholder="Enter password" class="border p-2 rounded mb-4 ">
                <!-- eye icon -->
                <i class="fa-regular fa-eye absolute top-12 right-5"></i>  
               </div>
                <button type="submit" name="login-btn" class="bg-gray-800 p-2 text-white rounded-lg hover:bg-gray-700 cursor-pointer mb-2">Login</button>
                <span class="text-center">Don't have an account? <a href="register.php" class="text-blue-600">Register</a></span>
            </form>
            <?php 


            ?>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>