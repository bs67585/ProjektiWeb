//Navbar
var scrollPosition = window.scrollY;
var logoContainer = document.getElementById('nav');

window.addEventListener('scroll', function () {

    scrollPosition = window.scrollY;

    if (scrollPosition >= 30) {
        logoContainer.classList.add('scrolled');
    } else {
        logoContainer.classList.remove('scrolled');
    }

});

document.addEventListener('DOMContentLoaded', function () {
    const menuIcon = document.querySelector('.menu-icon');
    const navMenu = document.querySelector('.nav-menu');

    menuIcon.addEventListener('click', function () {
        navMenu.style.display = (navMenu.style.display === 'flex' || navMenu.style.display === '') ? 'none' : 'flex';
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth > 768) {
            navMenu.style.display = 'flex';
        } else {
            navMenu.style.display = 'none';
        }
    });
});

//Slider
i = 0;
let imgArray = ['../Images/slider-image.jpg', '../Images/slider-image-2.jpg', '../Images/slider-image-3.jpg'];

function nextImage() {
    if (i <= imgArray.length - 1) {
        document.getElementById('imazhet').src = imgArray[i];
        i++;
    } else {
        i = 0;
    }
}

function previousImage() {
    if (i >= 0) {
        document.getElementById('imazhet').src = imgArray[i];
        i--;
    } else {
        i = imgArray.length - 1;
    }
}

