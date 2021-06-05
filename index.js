$(document).ready(function () {

    d = new Date()
    let month = String(d.getMonth() + 1);
    let day = String(d.getDate());
    const year = String(d.getFullYear());

    if (month.length < 2) month = '0' + month;
    if (day.length < 2) day = '0' + day;

    $('.date h3').text(`${day}/${month}/${year}`)


    // $('.littleheader.lh4').on('click',function(){
    // console.log("Salut!")
    // })


    window.addEventListener('scroll', function (event) {

        if (window.scrollY <= 200) {
            $('nav').css({
                'backgroundColor': 'transparent',
                'box-shadow': 'none'
            })
            $('nav a').css('color', 'white')

        } else {
            $('nav').css({
                'backgroundColor': '#FAF8F8',
                'box-shadow': '1px 1px 12px #ACACAC'
            })
            $('nav a').css('color', '#2FA1D1')
        }
    })
})