const misMenuLinks = document.querySelectorAll('.navbar-collapse .nav-link[href^="#"]');
const miMenu = document.querySelector('.navbar-collapse')
;
misMenuLinks.forEach(miMenuLink=>{
    miMenuLink.addEventListener("click",function(){
        miMenu.classList.remove("show")
    })
})