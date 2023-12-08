//button top
function returnTop(){
    let buttonTop = document.querySelector(".return-top");
    if (buttonTop !== null){
        if (document.body.scrollTop > 640 || document.documentElement.scrollTop > 640) {
            buttonTop.classList.add("show-arrow");
        } else {
            buttonTop.classList.remove("show-arrow");
        }
    }
}

// show and hidden nav-sidebar, show and hidden scroll
function menuSidebar(){
    let navbarTrue = document.querySelector(".navbar-true");
    if(navbarTrue !== null){
        let hiddenOverflow = document.querySelector("body");
        let togglerSidebar = document.querySelectorAll(".sidebar-toggler");
        let containerSidebar = document.querySelector(".sidebar-container");
    
        for (var i = 0; i < togglerSidebar.length; i++){
            togglerSidebar[i].addEventListener('click', actionSidebar);
        }
        function actionSidebar(){
            containerSidebar.classList.toggle("sidebar-show");
            hiddenOverflow.classList.toggle("hidden-scroll");
        }
    }
}

window.addEventListener("load", menuSidebar);
window.addEventListener("scroll", returnTop);