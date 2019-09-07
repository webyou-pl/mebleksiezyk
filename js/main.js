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

const logoButton = document.getElementById('logo');
const hoverMain = document.getElementById('hover-main');
const backgroundView = document.getElementById("main");
const secondary = document.getElementById("secondary");


hoverMain.addEventListener("click", startAnimation);

function startAnimation() {
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        hoverMain.remove();
        secondary.style.display ="inline";
}


window.onload = function (){
    this.setInterval(function (){
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        hoverMain.remove();
        secondary.style.display ="inline";
    }, 3000);
}
// logoButton.addEventListener("click", startA);
// function startA() {
//     const backgroundView = document.getElementById("main");
//     backgroundView.classList.add('main-background');
// }