/* Пример jQuery */
/* Пример #1 */

function calcHeader() {
  const headerEl = $(".header");
  const headerHeight = $(".header-inner").height();
  headerEl.css("top", "-" + headerHeight + "px");
}

$(document).ready(function () {
  // выполняется, когда HTML-документ загружен и DOM готов
  // НЕ включая все фреймы, объекты и изображения
  calcHeader();
  console.log("document is ready");
});

/* Пример #2 */
$(window).on("load", function () {
  // выполняется, когда HTML-документ загружен и DOM готов
  // включая все фреймы, объекты и изображения
  calcHeader();
  console.log("ВСЕ готово!");
});

// или но с версии 3.0 не работает такой вариант
// $(window).load(function() {
// выполняется, когда HTML-документ загружен и DOM готов
// включая все фреймы, объекты и изображения
//     console.log("ВСЕ готово!");
// });
