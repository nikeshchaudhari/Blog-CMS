<?php
// session_start();
// include "config.php";

// if(!isset($_SESSION["email"])){
//     header("Location: login.php");
//     exit();
// }
// if(isset($_POST['action'])){
//     $title = $_POST['post_title'];
//     $category = $_POST['category'];
//     $textArea = mysqli_real_escape_string ($conn,$_POST['area']);
//     $status = $_POST['action'];
// //    upload file
//  $image_path ="";
// if(isset($_FILES['image']) && $_FILES["image"]['name'] != ""){
//     // echo "<pre>";
//     // print_r($_FILES);
//     //     echo "</pre>";


//         $file_name = $_FILES["image"]['name'];
//         $file_tmp = $_FILES["image"]['tmp_name'];
//         $file_type = $_FILES["image"]['type'];
//         $file_size = $_FILES["image"]['size'];
        
//         // path
//         $image_path = $file_name;
//         move_uploaded_file($file_tmp,"upload/".$file_name);

// }
    

//     $query = "INSERT INTO posts(title,category,content,status,image)VALUES('$title','$category','$textArea','$status','$image_path')";
// $data = mysqli_query($conn,$query);

// $result = $data?"save sucessfully":"notsave sucessfully";

// echo $result;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || Post Dashboard</title>
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
    <div class="sidebar shadow-lg w-[250px] flex-shrink-0  md:flex flex-col bg-green-100/10 hidden md:block  ">
        <h2 class="text-[20px] text-center font-bold mt-3 mb-2 ">Welcome <?php echo $_SESSION['fullname'] ?></h2>
        <a href="dashboard.php" class="menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2 
      
        
        ">Dashboard</a>
        <a href="post.php" class="menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Posts</a>
        <!-- <a href="#" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Users</a> -->
         <a href="setting.php" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Setting</a>
        <a href="logout.php" class=" menu-link transform transition duration-500 hover:bg-gray-700 hover:text-white  px-10 py-2 mb-2  ">Logout</a>
    </div>
<!-- mobile slider -->
 <div id="overlay" class="fixed inset-0 bg-black opacity-50 z-40 hidden md:hidden"></div>

<div class="mobile-slider z-20 fixed bg-white w-64 h-screen top-0 -left-64 ">
<div>
    <h2 class="p-3 shadow-lg font-bold text-center">Welcome <?php echo $_SESSION['fullname']?></h2>
    <img src="" alt="">
</div>
<div class="flex flex-col   ">
    <a href="dashboard.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700  active:text-white  ">Dashboard</a>
<div>
    <a href="post.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700 active:text-white  ">Posts</a>
</div>

<a href="setting.php" class="px-10 py-2  transform transition duration-300  active:bg-gray-700  active:text-white   ">Settings</a>
<a href="logout.php" class="px-10 py-2  transform transition duration-300 active:bg-gray-700  active:text-white  ">Logout</a>
</div>
</div>
    
<div class="main flex-1 w-full min-h-screen bg-gray-200 overflow-hidden z-10">
<div class="shadow-lg md:shadow p-3 md:p-5 flex ">
     <!-- Mobile hambuger  -->
    <img src="./assets/hamburger.png" alt="hamburger" id="hamburger" class="w-5  md:hidden">
    <h2 class="text-[20px] md:text-[30px] ml-5 font-bold ">Post </h2> 
</div>

<div class="container mx-auto p-4 bg-white/50   ">
<div class="p-4  w-full   ">
  <form method="post" enctype="multipart/form-data">
      <h2 class="my-2">Post Title</h2>
    <input type="text" placeholder="Enter blog title" name="post_title" class="border border-gray-500 focus:border-blue-500 rounded-lg  w-full py-3 px-2 outline-none">
     <h2 class="my-2">Category</h2>
    <input type="text" placeholder="Enter Category" name="category" class="border border-gray-500 focus:border-blue-500 rounded-lg  w-full py-3 px-2 outline-none">
     <h2 class="my-2">Post Content</h2>
     <textarea name="area" id="" placeholder="Write your blog content" class="border border-gray-500 focus:border-blue-500 rounded-lg  w-full py-3 px-2 outline-none h-45"></textarea>
     <h2 class="my-2">Upload Image</h2>
     <input type="file" name="image" class="border border-gray-500 focus:border-blue-500 rounded-lg  w-full py-3 px-2 outline-none cursor-pointer">
     <div class="flex gap-5 py-4 px-2">
        <button type="submit" value="Published" name="action" class="bg-blue-500 py-2 px-6 text-white rounded transation duration-500 hover:bg-blue-600 cursor-pointer">Published</button>
        <button type="submit" value="Draft" name="action" class="bg-blue-500 py-2 px-6 text-white rounded transation duration-500 hover:bg-blue-600 cursor-pointer">Draft</button>
     </div>
  </form>
</div>

</div>
</div>
</div>
<script src="script.js">

</script>

</body>

</html>