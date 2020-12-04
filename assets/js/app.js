window.addEventListener('load', function(){
    var toogleMenu = document.querySelectorAll('.toggle-menu');
    var menuContainer    = document.querySelector('.menu-responsivo');

    for (var i = 0; i < toogleMenu.length; i++){
        toogleMenu[i].addEventListener('click', menuAction);
    }

    // escape
    document.addEventListener('keyup', function(e){
        if(e.keyCode == 27) {
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
});