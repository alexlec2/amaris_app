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