window.addEventListener("load", menuSidebar);

//button top
// function buttonTop(){
//     window.onscroll = function() {
//         if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
//             var element = document.getElementById("btn-topo");
//             element.classList.add("btn-topo-show");
//         } else {
//             var element = document.getElementById("btn-topo");
//             element.classList.remove("btn-topo-show");
//         }
//     }
// }

// show and hidden sidebar menu in mobile
function menuSidebar() {
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