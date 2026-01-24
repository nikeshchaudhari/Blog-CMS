<?php 
include "config.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Blog </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body>
    <header>
        <nav class="bg-[#1433A3] p-3 w-full ">
            <div class="flex justify-between items-center">
               
                    <h1  class="text-[25px] font-[Montserrat] font-bold mx-5 text-white">BLOG <i class="fa-solid fa-book-open-reader"></i></h1>
              
                
                    <ul class="hidden md:flex gap-5 mr-10 items-center">
                        <li><a href="index.php" class="text-white font-[Montserrat]  relative after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-[2px] after:bg-[#CCC4C4] after:transition-all hover:after:w-full after:duration-500">Home</a></li>
                        <li><a href="#" class="text-white font-[Montserrat]  relative after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-[2px] after:bg-[#CCC4C4] after:transition-all hover:after:w-full after:duration-500">Blog</a></li>
                        <li><a href="#" class="text-white font-[Montserrat]  relative after:absolute after:-bottom-0.5 after:left-0 after:w-0 after:h-[2px] after:bg-[#CCC4C4] after:transition-all hover:after:w-full after:duration-500">About</a></li>
                        <li><a href="#" class="text-white font-[Montserrat]">
                            <button class="bg-[#FFFFFF] p-2 rounded-[2px] text-black cursor-pointer  transition-all hover:bg-[#DBDBDB]  duration-700 w-[120px]">Add Blog</button>
                        </a></li>
                        <li><i class="fa-regular fa-circle-user text-white text-[25px] "></i></li>
                        
                    </ul>
              
                <!-- Mobile hamburger -->
    <button  class="md:hidden text-white text-[25px]">
          <i class="fa-solid fa-bars"></i>  
    </button>
            </div>
              <!-- mobile menu -->
        </nav>
    </header>

<!-- section -->
 <main>
<div>
<!-- slider -->
</div> 
 </main>
<div class="slider relative overflow:hidden">
<img src="./assets/1.jpg" alt="" class="slide active w-full h-[450px] object-cover opacity-100 transition-all duration-500">
<img src="./assets/2.jpg" alt="" class="slide w-full h-[450px] object-cover absolute opacity-0 top-0 transition-all duration-500">
<img src="./assets/3.jpg" alt="" class="slide w-full h-[450px] object-cover absolute opacity-0 top-0 transition-all duration-500">
<img src="./assets/4.jpg" alt="" class="slide w-full h-[450px] object-cover absolute opacity-0 top-0 transition-all duration-500">

<button class="prev absolute top-[50%] text-[30px] cursor-pointer mx-2"><i class="fa-solid fa-circle-chevron-left"></i></button>
<button class="next absolute top-[50%] right-0 text-[30px] cursor-pointer mx-2"><i class="fa-solid fa-circle-chevron-right text-white"></i></i></button>
</div>

<script >

const slides = document.querySelectorAll(".slide")
let i = 0 ;

document.querySelector(".next").addEventListener("click",()=>{
    slides[i].classList.remove("opacity-100");
    // slides[i].classList.add("opacity-0");
    i =(i+1)%slides.length;

    slides[i].classList.remove("opacity-0");
    slides[i].classList.add("opacity-100")
})

document.querySelector(".prev").addEventListener("click",()=>{
    slides[i].classList.remove("opacity-0");
    slides[i].classList.add("opacity-100");

    i=(i-1+slides.length)%slides.length;

    slides[i].classList.remove("opacity-0");
    slides[i].classList.add("opacity-100");

})
</script>
</body>
</html>