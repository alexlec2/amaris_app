function toggleDark(){
    document.getElementById("footer").classList.toggle("dark")
    let logo = document.getElementsByClassName("logo")
    for (let i = 0; i < logo.length; i++ ) {
        if(logo[i].style.filter !== "invert(1)"){
            logo[i].style.filter = "invert(1)";
        }
        else{
            logo[i].style.filter = "invert(0)";
        }
    }
}

const buttons = document.querySelectorAll("[data-carousel-button]")

buttons.forEach(button => {
    button.addEventListener("click", () => {
        const offset = button.dataset.carouselButton === "next" ? 1 : -1
        const slides = button
            .closest("[data-carousel]")
            .querySelector("[data-slides]")

        const activeSlide = slides.querySelector("[data-active]")
        let newIndex = [...slides.children].indexOf(activeSlide) + offset
        if (newIndex < 0) newIndex = slides.children.length - 1
        if (newIndex >= slides.children.length) newIndex = 0

        slides.children[newIndex].dataset.active = true
        delete activeSlide.dataset.active
    })
})