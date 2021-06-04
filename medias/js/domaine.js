"use strict";

$(document).ready(function () {


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
