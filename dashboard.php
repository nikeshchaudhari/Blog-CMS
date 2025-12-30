<?php
session_start();
if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">

</head>

<body>
   <!-- sidebar -->
    <div class="sidebar shadow-lg w-[250px]  h-screen flex flex-col bg-green-100/10 ">
        <h2 class="text-[20px] text-center font-bold mt-3 mb-2 ">Welcome <?php echo $_SESSION['user'] ?></h2>
        <a href="dashboard.php"- class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Dashboard</a>
        <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Posts</a>
        <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Users</a>
         <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Setting</a>
        <a href="logout.php" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Logout</a>
    </div>
<div class="main">

</div>
</body>

</html>