"use strict";

$(document).ready(function () {
    // $('main').hide();


    //Licence pro//

    $(function () {


        $(".intitule li:nth-child(1)").on("click", function () {

            $(".c1").addClass("active")

        })
        $(".exit").on("click", function () {

            $(".c1").removeClass('active')


        })
    })

    $(function () {


        $(".intitule li:nth-child(2)").on("click", function () {

            $(".c2").addClass("active")

        })
        $(".exit").on("click", function () {

            $(".c2").removeClass('active')


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