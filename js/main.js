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
const bodyView = document.getElementById("body");
const razors = document.getElementById('razor');

hoverMain.addEventListener("click", startAnimation);

function startAnimation() {
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        razors.style.visibility ='visible';
        razors.style.animation = 'fadeOut 2s';
        hoverMain.remove();
        
}


window.onload = function (){
    this.setInterval(function (){
        bodyView.classList.remove("body");
        backgroundView.classList.add('main-background');
        logoButton.classList.remove('main__logo');
        logoButton.classList.add('main__logo-after');
        razors.style.visibility ='visible';
        razors.style.animation = 'fadeOut 2s';
        hoverMain.remove();
        
    }, 3000);
}
