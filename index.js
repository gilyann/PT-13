$(document).ready(function () {
    new Date().toLocaleDateString() = "*/**/****"


    // $('.littleheader.lh4').on('click',function(){
    // console.log("Salut!")
    // })

    window.addEventListener("scroll", function () {
        var header = document.querySelector("nav");
        this.navigator.classList.toggle("sticky", window.scrollY > 0);


    })
})