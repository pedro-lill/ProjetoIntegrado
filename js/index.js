var alturaDoBanner = document.querySelector(".banner").clientHeight;
window.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    header.classList.toggle("PassouDaImagem", window.scrollY > alturaDoBanner);
})


const [...menuItens] = document.querySelectorAll('.altura_js');

menuItens.forEach(item => {
    item.addEventListener("click", AlteraALturaClick);
})

function AlteraALturaClick(event) {
    const elemento = event.target;
    const id = elemento.getAttribute('href');
    const section = document.querySelector(id).offsetTop;
    window.scroll({
        top: section - 120,
        behavior: "smooth",
    });
}