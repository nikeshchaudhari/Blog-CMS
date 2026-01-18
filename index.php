<?php 
include("config.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog || Home</title>
            <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
            <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
</head>
<body>
    <header>
        <nav class="bg-[#0a2569] h-16 flex items-center   ">
            <div class=" w-full flex items-center justify-between">
                <div class="text-[30px] font-bold p-2 text-white font-[Montserrat]"><a href="index.php">BLOG <i class="fa-solid fa-book-open-reader"></i></a></div>
                <div class=" mr-50 hidden md:block">
                    <ul >
                        <li class="flex gap-10" >
                            <a href="index.php" class="relative text-white px-2 after:absolute after:w-0 after:h-[3px] after:left-0 after:bottom-0 after:bg-yellow-400 after:transition-all after:duration-300 hover:after:w-full ">Home</a>
                            <a href="index.php" class="px-2 text-white font-[Montserrat] relative after:absolute after:bg-yellow-400 after:h-[3px] after:w-0 after:left-0 after:bottom-0 after:transition-all after:duration-300 hover:after:w-full  ">About</a>
                            <a href="index.php" class="px-2 text-white font-[Montserrat] relative after:absolute after:bg-yellow-400 after:h-[3px] after:w-0 after:left-0 after:bottom-0 after:transition-all after:duration-300 hover:after:w-full ">News</a>
                            <a href="#">

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </header>
    <!-- main container -->
     <main>
        
  <h1 class="text-center pt-5  font-[Montserrat] font-bold text-[30px]">ALL BLOG</h1>


  
     </main>


     

</body>
</html>