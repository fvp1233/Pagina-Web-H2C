let carouselWidth = $(".carousel-inner")[0].scrollWidth;
let cardWidth = $(".carousel-item").outerWidth(true); // Incluye margen en el ancho
let scrollPosition = 0;

// Desplazamiento automático hacia la izquierda
setInterval(function () {
    if (scrollPosition < (carouselWidth - cardWidth * 4)) {
        scrollPosition += cardWidth;
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    } else {
        scrollPosition = 0; // Reinicia la posición si llega al final
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
}, 6000); // Ajusta el intervalo de tiempo según lo necesites

// Control del botón "siguiente"
$(".carousel-control-next").on("click", function () {
    if (scrollPosition < (carouselWidth - cardWidth * 4)) {
        scrollPosition += cardWidth;
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
});

// Control del botón "anterior"
$(".carousel-control-prev").on("click", function () {
    if (scrollPosition > 0) {
        scrollPosition -= cardWidth;
        $(".carousel-inner").animate({ scrollLeft: scrollPosition }, 600);
    }
});