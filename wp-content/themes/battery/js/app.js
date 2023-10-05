
document.addEventListener("DOMContentLoaded", function () {
	let burgerButton = document.querySelector(".burger-button");
let burger = document.querySelector(".burgermenu");
let burgerA = document.querySelector(".burger__list a");
let menuBackground = document.querySelector(".menu-background");

burgerButton.addEventListener("click", (e) => {
  e.preventDefault();
  burger.classList.toggle("burgermenu_active");
  menuBackground.classList.toggle("menu-background_active");
});

menuBackground.addEventListener("click", (e) => {
  e.preventDefault();
  burger.classList.toggle("burgermenu_active");
  menuBackground.classList.toggle("menu-background_active");
});
var scene = document.querySelectorAll(".scene");
for (const item of scene) {
  parallax = new Parallax(item);
}
  let blocks = document.querySelectorAll(".scroll");

  function checkBlocksVisibility() {
    let windowHeight = window.innerHeight;

    blocks.forEach((block) => {
      let blockPosition = block.getBoundingClientRect().top;

      if (blockPosition < windowHeight - 100) {
        block.style.opacity = "1";
        block.style.transform = "translateY(0)";
      }
    });
  }

  checkBlocksVisibility();

  window.addEventListener("scroll", function () {
    checkBlocksVisibility();
  });
});
console.log('hi world');