// zmniejszanie nav
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

// const logoButton = document.getElementById('logo');
// const hoverMain = document.getElementById('hover-main');
// const backgroundView = document.getElementById("main");
// const bodyView = document.getElementById("body");


// hoverMain.addEventListener("click", startAnimation);

function startAnimation() {
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        hoverMain.remove();
        
}

window.onload = function (){
    this.setInterval(function (){
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        hoverMain.remove();
        
    }, 3000);
}

// logoButton.addEventListener("click", startA);
// function startA() {
//     const backgroundView = document.getElementById("main");
//     backgroundView.classList.add('main-background');
// }


// href=# scroll to element animation
$('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 1500);
    }
});
