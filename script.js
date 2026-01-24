// dashboard-sidebar

const menu_links = document.querySelectorAll(".menu-link")
// console.log(menu_links);
const currentPage = window.location.pathname.split('/').pop();
// console.log(currentPage);
menu_links.forEach(menu_links=>{
    if(menu_links.getAttribute("href")===currentPage){
        menu_links.classList.add("active");
    }
})

// mobile-slider

const overlay = document.querySelector("#overlay")
const hamburger = document.querySelector("#hamburger")
const slider = document.querySelector(".mobile-slider")

hamburger.addEventListener("click",()=>{
    slider.classList.remove("-left-64")
    slider.classList.add("left-0")
    overlay.classList.remove("-left-64")
})

// close
hamburger.addEventListener("click",()=>{
    slider.classList.remove
})


// form password hide or show Register

function toogle(id,icon){
    const input = document.getElementById(id);
    if(input.type==="password"){
        input.type ="text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash')
    }else{
        input.type='password';
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye")
    }
}

// Icon Hode or Show Login

// function eyeBtn(id,icon){
//     const input = document.getElementById(id);
//     if(input.type==="password")

// }

const slides = document.querySelectorAll(".slide")
let i = 0 ;

document.querySelector(".next").addEventListener("click",()=>{
    slides[i].classList.remove("opacity-100");
    slides[i].classList.add("opacity-0");
    i =(i+1)%slides.length;

    slides[i].classList.remove("opacity-0");
    slides[i].classList.add("opacity-100")
})

document.querySelector(".prev").addEventListener("click",()=>{
    slides[i].classList.remove("opacity-100");
    slides[i].classList.add("opacity-0");

    i=(i-1+slides.length)%slides.length;

    slides[i].classList.remove("opacity-0");
    slides[i].classList.add("opacity-100");

})


