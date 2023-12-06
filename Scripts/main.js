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

//Slider
i = 0;
let imgArray = ['C:/Users/Admin/Desktop/Web/Projekti/ProjektiWeb/Images/slider-image.jpg', 'C:/Users/Admin/Desktop/Web/Projekti/ProjektiWeb/Images/slider-image-2.jpg', '../Images/slider-image-3.jpg'];

function nextImage() {
    if (i < imgArray.length - 1) {
        document.getElementById('imazhet').src(imgArray[i]);
        i++;
    } else {
        i = 0;
    }
}

document.addEventListener(onload(document.getElementById('imazhet').src(imgArray[i])));
