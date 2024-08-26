(function( win, doc ){
    
    'use strict';
    
    function returnTopSite(){
        let $buttonTop = doc.querySelector( '[data-js="top-site"]' );
        if ( $buttonTop !== null ){
            if ( doc.body.scrollTop > 640 || doc.documentElement.scrollTop > 640 )
                $buttonTop.classList.add( 'show-arrow' );
            else
                $buttonTop.classList.remove( 'show-arrow' );
        }
    }
    win.addEventListener( 'scroll', returnTopSite, false );

    function openCloneSidebarMenu(){
        let $navbarTrue = doc.querySelector( '[data-js="navbar-true"]' );
        let $hiddenOverflow = doc.querySelector( '[data-js="overflowOnOff"]' );
        let $containerSidebar = doc.querySelector( '[data-js="sidebar-container"]' );
        let $togglerSidebar = doc.querySelectorAll( '[data-toggler="sidebar-toggler"]' );

        if( $navbarTrue !== null ){
            for ( let i = 0; i < $togglerSidebar.length; i++ ){
                $togglerSidebar[i].addEventListener( 'click', actionSidebar, false );
            }
            function actionSidebar(){
                $hiddenOverflow.classList.toggle( 'hidden-scroll' );
                $containerSidebar.classList.toggle( 'sidebar-show' );
            }
        }
    }
    win.addEventListener( 'load', openCloneSidebarMenu, false );

})( window, document );