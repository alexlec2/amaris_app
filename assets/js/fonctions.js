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
const checkbox = document.getElementById("checkbox")
checkbox.addEventListener("change", () => {
  toggleDark()
})

const menu_responsive = document.getElementById("menuResponsive")
const X_responsive = document.getElementById("xResponsive")

menu_responsive.addEventListener("click", () => {
    openMenuReponsive()
})
X_responsive.addEventListener("click", () => {
    openMenuReponsive()
})
count = 0;
function openMenuReponsive(){
    let xIcon = document.getElementById("xResponsive")
    let menuIcon = document.getElementById("menuResponsive")
    let menuResponsive = document.getElementById("responsiveNavbar")

    menuResponsive.classList.toggle("to_not_display")
    xIcon.classList.toggle("to_not_display")
    menuIcon.classList.toggle("to_not_display")
    if(count %2 == 0){
        menuResponsive.style.display = 'grid'
        document.getElementsByTagName('header')[0].style.boxShadow = 'none'
        /*document.getElementsByClassName('nonNavbar')[0].style.display = "none"*/
    }
    else{
        menuResponsive.style.display = 'none'
        document.getElementsByTagName('header')[0].style.boxShadow = '0 2px 4px 0 rgba(0,0,0,.2)'   
        /*document.getElementsByClassName('nonNavbar')[0].style.display = "block"*/
    }
    count++
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