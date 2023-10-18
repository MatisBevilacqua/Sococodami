let menuOpen = false;
let btnNav = document.querySelectorAll('.nav-mobile');

function clickNav() {
    if(!menuOpen){
        document.querySelector('.modal-nav-mobile').className = "modal-nav-mobile-active";
        menuOpen = true;
    }else{
        document.querySelector('.modal-nav-mobile-active').className = 'modal-nav-mobile';
        menuOpen = false;
    }
}

for(let i = 0; i < btnNav.length; i++){
    btnNav[i].addEventListener('click', clickNav);
}
