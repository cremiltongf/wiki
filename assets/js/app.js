window.addEventListener('load', function(){
    //sumario mobile
    var toogleMenu = document.querySelectorAll('.toggle-menu');
    var menuContainer    = document.querySelector('.menu-mobile');

    for (var i = 0; i < toogleMenu.length; i++){
        toogleMenu[i].addEventListener('click', menuAction);
    }

    document.addEventListener('keyup', function(e){
        if(e.key == 27){
            if(menuContainer.classList.contains('show-menu')){
                menuAction();
            }
        }
    });

    function menuAction() {
        if(menuContainer.classList.contains('show-menu')){
            menuContainer.classList.remove('show-menu');
        }
        else {
            menuContainer.classList.add('show-menu');
        }
    }

    //button top
    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
            var element = document.getElementById("btn-topo");
            element.classList.add("btn-topo-show");
        } else {
            var element = document.getElementById("btn-topo");
            element.classList.remove("btn-topo-show");
        }
    }
});