document.addEventListener("DOMContentLoaded", ()=> {
    const modal = document.getElementById("modal");
    const modalImg = modal.querySelector("img");
    const images = document.querySelectorAll(".affichage img");
    const closeBtn = document.getElementById("close-modal");

    images.forEach(img => {
        img.addEventListener("click", () => {
            modal.classList.add("active");
            modalImg.src = img.src;
            modalImg.alt = img.alt;
        });
    });

    closeBtn.addEventListener("click", () => {
    modal.classList.remove("active");
    modalImg.src = "";
    modalImg.alt = "";
  });

    modal.addEventListener("click", e => {
        if (e.target === modal) {
            modal.classList.remove("active");
            modalImg.src = "";
            modalImg.alt = "";
        }
    });
});