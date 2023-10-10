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
  const accordionItemHeaders = document.querySelectorAll(
    ".accordion-item__header"
  );

  accordionItemHeaders.forEach((accordionItemHeader) => {
    accordionItemHeader.addEventListener("click", (event) => {
      const currentlyActiveAccordionItemHeader = document.querySelector(
        ".accordion-item__header.active"
      );
      if (
        currentlyActiveAccordionItemHeader &&
        currentlyActiveAccordionItemHeader !== accordionItemHeader
      ) {
        currentlyActiveAccordionItemHeader.classList.toggle("active");
        currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
      }
      accordionItemHeader.classList.toggle("active");
      const accordionItemBody = accordionItemHeader.nextElementSibling;
      if (accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight =
          accordionItemBody.scrollHeight + "px";
      } else {
        accordionItemBody.style.maxHeight = 0;
      }
    });
  });

  const batteryItemHeaders = document.querySelectorAll(".battery-list__header");

  batteryItemHeaders.forEach((batteryItemHeader) => {
    batteryItemHeader.addEventListener("click", (event) => {
      const currentlyActiveBatteryItemHeader = document.querySelector(
        ".battery-list__header.active"
      );
      if (
        currentlyActiveBatteryItemHeader &&
        currentlyActiveBatteryItemHeader !== batteryItemHeader
      ) {
        currentlyActiveBatteryItemHeader.classList.toggle("active");
        currentlyActiveBatteryItemHeader.nextElementSibling.style.maxHeight = 0;
      }
      batteryItemHeader.classList.toggle("active");
      const batteryItemBody = batteryItemHeader.nextElementSibling;
      if (batteryItemHeader.classList.contains("active")) {
        batteryItemBody.style.maxHeight = batteryItemBody.scrollHeight + "px";
      } else {
        batteryItemBody.style.maxHeight = 0;
      }
    });
  });

  checkBlocksVisibility();

  window.addEventListener("scroll", function () {
    checkBlocksVisibility();
  });
});
jQuery(document).ready(function () {
  // Получаем все элементы input с атрибутом type="tel"
    var telInputs = document.querySelectorAll('input[type="tel"]');

    // Настраиваем маску для номера телефона
    jQuery(telInputs).inputmask({
        mask: ["+7 (999) 999 99 99", "8 (999) 999 99 99"],
        greedy: false,
        placeholder: "_",
    });
    $('form.wpcf7-form').on('submit', function (event) {
      event.preventDefault(); // Предотвращаем стандартную отправку формы

      var form = $(this);
      var formData = new FormData(form[0]);

      $.ajax({
          type: form.attr('method'),
          url: form.attr('action'),
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
              // Обработка успешной отправки формы. Здесь можно показать сообщение об успешной отправке или выполнить другие действия.
              // Например, можно использовать модальное окно.
          }
      });

      return false;
  });

});