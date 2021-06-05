$(document).ready(function () {
    new Date().toLocaleDateString() = "*/**/****"


    // $('.littleheader.lh4').on('click',function(){
    // console.log("Salut!")
    // })

    $(function () {

        var nav = document.querySelector('nav'); // Identify target

        window.addEventListener('scroll', function (event) { // To listen for event
            event.preventDefault();

            if (window.scrollY <= 150) { // Just an example
                nav.style.backgroundColor = '#000'; // or default color
            } else {
                nav.style.backgroundColor = 'transparent';
            }
        })
    })
})