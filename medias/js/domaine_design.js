"use strict";

$(document).ready(function () {
    // $('main').hide();

    $(function () {


        $(".infolp li").on("click", function () {

            $(".c1").addClass("active")

        })
        $(".exit").on("click", function () {

            $(".c1").toggleClass('inactive')


        })
    })

    $(function () {


        $(".infolp li").on("click", function () {

            $(".c2").addClass("active")

        })
        $(".exit").on("click", function () {

            $(".c2").removeClass("active")


        })
    })

})