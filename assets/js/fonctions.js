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

window.onload = calculerWidthPartenaire

function calculerWidthPartenaire(){
    let partenairesLigne1 = document.getElementsByClassName("partenaire ligne1")
    let partenairesLigne2 = document.getElementsByClassName("partenaire ligne2")

    document.getElementsByClassName("carrousel_partenaires premier")[0].style.width = partenairesLigne1.length/2 * 250+"px"
    document.getElementsByClassName("carrousel_partenaires deuxieme")[0].style.width = partenairesLigne2.length/2 * 250+"px"
}


const buttons = document.querySelectorAll("[data-carousel-button]")
const button_next = buttons[0]
const button_prev = buttons[1]
var sectionIndex = 0

const points = document.querySelectorAll(".point")
const slides =  document.querySelector("[data-slides]")

button_next.addEventListener("click", () => {
    let activeSlide = slides.querySelector(".active")
    let slideIndex = [...slides.children].indexOf(activeSlide)
    let newIndex = slideIndex+1
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0
    slides.children[newIndex].classList.add("active")
    activeSlide.classList.remove("active")
    points[newIndex].classList.add("active")
    points[slideIndex].classList.remove("active")
})

button_prev.addEventListener("click", () => {
    console.log("prev")
    let activeSlide = slides.querySelector(".active")
    let slideIndex = [...slides.children].indexOf(activeSlide)
    let newIndex = slideIndex-1
    if (newIndex < 0) newIndex = slides.children.length - 1
    if (newIndex >= slides.children.length) newIndex = 0
    slides.children[newIndex].classList.add("active")
    activeSlide.classList.remove("active")
    points[newIndex].classList.add("active")
    points[slideIndex].classList.remove("active")
})




points.forEach(function(point, index) {
    point.addEventListener("click", () => {
        let activeSlide = slides.querySelector(".active")
        document.querySelector(".bas_carrousel_point .active").classList.remove("active")
        point.classList.add("active")
        slides.children[index].classList.add("active")
        activeSlide.classList.remove("active")
    })
})