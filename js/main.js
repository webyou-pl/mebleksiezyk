// scroll -> sticky navbar
const menu = document.getElementById('navbar');
const heightMenu = 10;

document.addEventListener('scroll', function () {
    let yOffset = window.pageYOffset;

    if (yOffset >= heightMenu) {
        menu.classList.add('scroll-nav');
    }

    if (yOffset < heightMenu) {
        menu.classList.remove('scroll-nav');
    }
});

window.onload = function () {
    let yOffset = window.pageYOffset;

    if (yOffset >= heightMenu) {
        menu.classList.add('scroll-nav');
    }

    if (yOffset < heightMenu) {
        menu.classList.remove('scroll-nav');
    }
};

// Otwarcie głównej strony

const logoButton = document.getElementById('logo');
const hoverMain = document.getElementById('hover-main');
const backgroundView = document.getElementById("main");
const bodyView = document.getElementById("body");
const carousel = document.getElementById('carousel');

hoverMain.addEventListener("click", startAnimation);

function startAnimation() {
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        carousel.style.setProperty('display', 'inline'); 
        hoverMain.remove();
}

window.onload = function (){
    this.setInterval(function (){
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        carousel.style.setProperty('display', 'inline');
        hoverMain.remove();

    }, 1500);
}

// logoButton.addEventListener("click", startA);
// function startA() {
//     const backgroundView = document.getElementById("main");
//     backgroundView.classList.add('main-background');
// }





$(document).ready(function() {

    $('.popup-gallery').each(function() { // the containers for all your galleries
        $(this).magnificPopup({
            delegate: 'a.popup-gallery__item',
            type: 'image',
            mainClass: 'mfp-with-zoom',
            gallery:{
                enabled:true
            }
        });
    });

// href=# animation scroll to element
    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1500);
        }
    });

});
