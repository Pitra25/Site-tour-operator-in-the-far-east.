'use strict';

const dark = document.querySelector('#tames_dark');
const light = document.querySelector('#tames_light');
const btn_mode = document.querySelector('#toggle');
const allLoadings = document.querySelectorAll('.loading');

function tames_dark (){
    let tames = document.body.classList.toggle('dark-mode');

    if(tames == true){
        dark.classList.remove("none");
        light.classList.add("none");
    }
    else{
        dark.classList.add("none");
        light.classList.remove("none");
    }

    // Сохраняем тему в localstorage
    const isDarkModeEnabled = document.body.classList.contains('dark-mode');
    localStorage.setItem('darkmode', isDarkModeEnabled);
}

btn_mode.addEventListener('click', tames_dark);

window.addEventListener('load', () => {
    // Получение предпочтений темы из локального хранилища
    const isDarkModeEnabled = localStorage.getItem('darkmode');

    // Установите тему на основе сохраненных предпочтений
    if (isDarkModeEnabled === 'true') {
        document.body.classList.add('dark-mode');
        dark.classList.remove("none");
        light.classList.add("none");
    } else {
        document.body.classList.remove('dark-mode');
        dark.classList.add("none");
        light.classList.remove("none");
    }

    setInterval(() => {
        allLoadings.forEach(item => {
            item.classList.remove('loading');
        });
    }, 2000);
});

// ######### ------- Меню --------
const header = document.querySelector('#header');
const burger = document.querySelector("#burger");
const menu = document.querySelector('#menu');

document.addEventListener("DOMContentLoaded", function(){
    burger.addEventListener("click", function(){
        header.classList.toggle('open');
    });
});
window.addEventListener('keydown', (event) =>{
    if(event.key === "Escape"){
        header.classList.remove("open");
    };
});
menu.addEventListener('click', (event) => {
    event._isClickWithInMenu = true;
});
burger.addEventListener('click', (event) => {
    event._isClickWithInMenu = true;
});
document.body.addEventListener('click', (event) => {
    if(event._isClickWithInMenu)
        return;
    header.classList.remove("open");
});

// ######### ------- Регистрация и вход --------
$("#signup").click(function() {
    $(".message").css("transform", "translateX(100%)");
    if ($(".message").hasClass("login")) {
      $(".message").removeClass("login");
    }
    $(".message").addClass("signup");
  });
  
  $("#login").click(function() {
    $(".message").css("transform", "translateX(0)");
    if ($(".message").hasClass("login")) {
      $(".message").removeClass("signup");
    }
    $(".message").addClass("login");
});
  

// ######### ------- SLIDER --------
const options = {
    accessibility: true,
    prevNextButtons: true,
    pageDots: true,
    setGallerySize: false,
    // autoPlay: true,
    autoPlay: 10000,
    pauseAutoPlayOnHover: false,
    arrowShape: {
        x0: 1,
        x1: 58,
        y1: 62,
        x2: 55,
        y2: 48,
        x3: 18
    }
};

// Function to set background position forr slides
function setBgPosition(slide, index) {
    const x = -(slide.target + flkty.x) / 3;
    slides[index].style.backgroundPosition = `${x}px`;
}

// Slides initialization
const carousel = document.querySelector('[carousel]');
const slides = Array.from(document.getElementsByClassName('carousel-cell'));
const flkty = new Flickity(carousel, options);

// Event listener using bg position
flkty.on('scroll', () => {
    flkty.slides.forEach(setBgPosition);
});