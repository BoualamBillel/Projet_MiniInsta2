document.addEventListener("DOMContentLoaded", ()=> {
    const modal = document.getElementById("modal");
    const modalImg = modal.querySelector("img");
    const images = document.querySelectorAll(".affichage img");

    images.forEach(img => {
        img.addEventListener("click", () => {
            modal.classList.add("active");
            modalImg.src = img.src;
            modalImg.alt = img.alt;
        });
    });

    modal.addEventListener("click", e => {
        if (e.target === modal) {
            modal.classList.remove("active");
            modalImg.src = "";
            modalImg.alt = "";
        }
    });
});