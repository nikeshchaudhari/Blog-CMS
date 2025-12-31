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
    <div class="flex">
   <!-- sidebar -->
    <div class="sidebar shadow-lg w-[250px] flex-shrink-0  h-screen flex flex-col bg-green-100/10 ">
        <h2 class="text-[20px] text-center font-bold mt-3 mb-2 ">Welcome <?php echo $_SESSION['user'] ?></h2>
        <a href="dashboard.php"- class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Dashboard</a>
        <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Posts</a>
        <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Users</a>
         <a href="#" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Setting</a>
        <a href="logout.php" class=" transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Logout</a>
    </div>
<div class="main w-full bg-gray-200">
<div class="shadow-lg p-5">
    <h2 class="text-[30px] ml-5 font-bold">Dashboard</h2> 
</div>
<div class="flex ">
    <div class="w-[200px] h-[150px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg transform transition hover:transform-transformY-3">
        <h1 class="text-center text-[25px] font-bold">Admin</h1>
        
    </div>
     <div class="w-[200px] h-[150px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg">
        <h1 class="text-center text-[25px] font-bold">Users</h1>
    </div>
    <div class="w-[200px] h-[150px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg">
        <h1 class="text-center text-[25px] font-bold"   >Total Posts</h1>
    </div>
   
    <div class="w-[200px] h-[150px] bg-white shadow-xl flex items-center justify-center m-5 rounded-lg">
        <h1 class="text-center text-[25px] font-bold">Total Comments</h1>
    </div>
</div>
</div>
</div>
</body>

</html>