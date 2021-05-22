var alturaDoBanner = document.querySelector(".banner").clientHeight;
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("PassouDaImagem", window.scrollY > alturaDoBanner);
})