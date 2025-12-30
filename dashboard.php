<?php
session_start();



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
    <div class="sidebar shadow-lg w-[250px]  h-screen flex flex-col p-2">
        <h2 class="text-[20px] text-center ">Admin</h2>
        <a href="dashboard.php">Dashboard</a>
        <a href="#">Posts</a>
        <a href="#">Users</a>
        <a href="#">Setting</a>
        <a href="logout.php">Logout</a>
    </div>
<div class="main">
    
</div>
</body>

</html>