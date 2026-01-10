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
        <nav class="bg-[#2E55B8] h-15 flex items-center">
            <div class="flex items-center">
                <div class="text-[30px] font-bold p-2 text-white font-[Montserrat]">BLOG <i class="fa-solid fa-book-open-reader"></i></div>
                <div>
                    <ul>
                        <li >
                            <a href="index.php" class="px-2 text-white font-[Montserrat]">Home</a>
                            <a href="index.php" class="px-2 text-white font-[Montserrat] ">About</a>
                            <a href="index.php" class="px-2 text-white font-[Montserrat]">News</a>
                        </li>
                    </ul>
                </div>
            </div>
            
        </nav>
    </header>
</body>
</html>