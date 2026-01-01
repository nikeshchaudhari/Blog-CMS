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

        <style>
            .active{
               background-color: gray;
               color:white;
            }
        </style>
</head>

<body>
    <div class="flex  min-h-screen">
   <!-- sidebar -->
    <div class="sidebar shadow-lg w-[250px] flex-shrink-0  h-screen md:flex flex-col bg-green-100/10 hidden md:block  ">
        <h2 class="text-[20px] text-center font-bold mt-3 mb-2 ">Welcome <?php echo $_SESSION['user'] ?></h2>
        <a href="dashboard.php" class="menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2 
      
        
        ">Dashboard</a>
        <a href="#" class="menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Posts</a>
        <a href="#" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Users</a>
         <a href="#" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Setting</a>
        <a href="logout.php" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Logout</a>
    </div>
<!-- mobile slider -->
 <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden md:hidden"></div>

<div class="mobile-slider z-20 fixed bg-white w-64 h-full top-0 ">
<h2 class="p-3 shadow-lg font-bold text-center">Welcome <?php echo $_SESSION['user']?></h2>
<div class="flex flex-col  ">
    <a href="dashboard.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700  active:text-white  ">Dashboard</a>
<a href="dashboard.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700 active:text-white  ">Posts</a>
<a href="dashboard.php" class="px-10 py-2  transform transition duration-300  active:bg-gray-700  active:text-white   ">Users</a>
<a href="dashboard.php" class="px-10 py-2  transform transition duration-300  active:bg-gray-700  active:text-white   ">Settings</a>
<a href="dashboard.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700  active:text-white  ">Logout</a>
</div>
</div>
    
<div class="main flex-1 w-full min-h-screen bg-gray-200 overflow-hidden z-10">
<div class="shadow-lg md:shadow p-3 md:p-5 flex ">
     <!-- Mobile hambuger  -->
    <img src="./assets/hamburger.png" alt="hamburger" id="hamburger" class="w-5  md:hidden">
    <h2 class="text-[20px] md:text-[30px] ml-5 font-bold ">Dashboard</h2> 
</div>

<div class="container mx-auto p-4   ">


<div class="grid grid-cols-2  md:grid-cols-3 lg:grid-cols-4 ">
    <div class="h-[100px] md:h-[120px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg transform transition hover:scale-105 hover:duration-700 cursor-pointer ">
        <h1 class="text-center text-[20px] lg:text-[25px]  font-bold">Admin</h1>
        
    </div>
     <div class="h-[100px] md:h-[120px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg transform transition hover:scale-105 hover:duration-700 cursor-pointer">
        <h1 class="text-center text-[20px] lg:text-[25px]  font-bold">Users</h1>
    </div>
    <div class="h-[100px] md:h-[120px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg transform transition hover:scale-105 hover:duration-700 cursor-pointer">
        <h1 class="text-center text-[20px] lg:text-[25px]  font-bold"   >Total Posts</h1>
    </div>
   
    <div class="h-[100px] md:h-[120px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg transform transition hover:scale-105 hover:duration-700 cursor-pointer">
        <h1 class="text-center text-[20px] lg:text-[25px]  font-bold">Total Comments</h1>
    </div>
</div>
</div>
</div>
</div>
<script src="script.js">

</script>
</body>

</html>