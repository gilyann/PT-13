"use strict";

$(document).ready(function () {


    $(function () {


        $(".intitule li").on("click", function () {
            var lien = $(this).attr('lien')
            var cat = $(this).attr('cat')

            $('main.cat' + cat + '').removeClass('active')
            $('main.cat' + cat + '.' + lien + '').addClass("active")
        })
        $(".exit").on("click", function () {

            $(this).parent().removeClass('active')

        })
    })


})

$(function () {


    $(".infolp li").on("click", function () {

        $(".c2").addClass("active")

    })
    $(".exit").on("click", function () {

        $(".c2").removeClass("active")


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
                'backgroundColor': '#c35f8485',
                'box-shadow': '1px 1px 12px #c35f8485'
            })
            $('nav a').css('color', 'white')
        }
    })
})