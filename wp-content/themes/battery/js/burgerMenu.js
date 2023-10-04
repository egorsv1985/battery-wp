let burgerButton = document.querySelector('.burger-button');
let burger = document.querySelector('.burgermenu');
let burgerA = document.querySelector('.burger__list a');
let menuBackground = document.querySelector('.menu-background');

burgerButton.addEventListener( "click" , (e) => {
    e.preventDefault();
    burger.classList.toggle('burgermenu_active');
    menuBackground.classList.toggle('menu-background_active');
});

menuBackground.addEventListener( "click" , (e) => {
    e.preventDefault();
    burger.classList.toggle('burgermenu_active');
    menuBackground.classList.toggle('menu-background_active');
});