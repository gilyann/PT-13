"use strict";

$(document).ready(function () {


    $(function () {


        $(".intitule li").on("click", function () {
            var lien = $(this).attr('data-lien')
            var cat = $(this).attr('data-cat')

            $('main.cat' + cat + '').removeClass('active')
            $('main.cat' + cat + '.lien' + lien).addClass("active")
        })
        $(".exit").on("click", function () {

            $(this).parent().removeClass('active')

        })
    })

    window.addEventListener('scroll', function (event) {

        if (window.scrollY <= 50) {
            $('nav').css({
                'backgroundColor': 'transparent',
                'box-shadow': 'none'
            })
            $('nav a').css('color', 'white')

        } else {
            $('nav').css({
                'backgroundColor': '#2fa0d16c',
                'box-shadow': '1px 1px 12px #2fa0d16c'
            })
            $('nav a').css('color', 'white')
        }
    })
})