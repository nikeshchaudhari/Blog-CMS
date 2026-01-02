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

