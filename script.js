// dashboard-sidebar

const menu_links = document.querySelectorAll(".menu-link")
console.log(menu_links);
const currentPage = window.location.pathname.split('/').pop();
console.log(currentPage);
menu_links.forEach(menu_links=>{
    if(menu_links.getAttribute("href")===currentPage){
        menu_links.classList.add("active");
    }
})




