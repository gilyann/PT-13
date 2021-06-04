"use strict";

$(document).ready(function () {
    // $('main').hide();


    //Licence pro//

    $(function () {


        $(".intitule li").on("click", function () {
var lien =$(this).attr('data-lien')
var cat =$(this).attr('data-cat')

$('main.cat'+cat+'').removeClass('active')
            $('main.cat'+cat+'.lien'+lien).addClass("active") 
        })
        $(".exit").on("click", function () {

            $(this).parent().removeClass('active') 

        })
    })
    })

    // $(function () {


        // $(".infolp li").on("click", function () {

            // $(".c2").addClass("active")

        // })
        // $(".exit").on("click", function () {

            // $(".c2").removeClass("active")


        // })
    // })

