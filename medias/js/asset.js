"use strict";

$( document ).ready(function(){

//gerer appartition du textes à revoir quand on hide le titre est pas tout le contenu et que la flèche n'affiche pas le contenu
//$('.essai').hide();
//$('.hublot2').on('click',function(){
 // $('.essai').toggle();
 
//})


   //gerer l'apparition de la fiche 
//$('.fiche').hide();                      
//$('.essai').on('click',function(){
 // $('.fiche').toggle(2000, "linear");
  
//})

var numberimage=1;
//les différents slides possibles 
    $('.arrow-right').on('click',function(){            
       $('.hublot-slide').animate({'left':(parseInt($('.hublot-slide').css('left'))-window.innerWidth)+'px'},function (){
         numberimage++;
        $('.paysage').attr('src','medias/img/bg'+ numberimage +'.jpg');
         $('.hublot-slide').animate({'left':(parseInt($('.hublot-slide').css('left'))-window.innerWidth)+'px'});
        console.log($('.hublot-slide').css('left'))
       
       });
       console.log($('.hublot-slide').css('left'))
    
 
    })


    $('.arrow-left').on('click',function(){            
      $('.hublot-slide').animate({'left':(parseInt($('.hublot-slide').css('left'))+window.innerWidth)+'px'},function (){
        numberimage--;
       $('.paysage').attr('src','medias/img/bg' + numberimage +'.jpg');
        $('.hublot-slide').animate({'left':(parseInt($('.hublot-slide').css('left'))+window.innerWidth)+'px'});
       console.log($('.hublot-slide').css('left'))
      
      });
      console.log($('.hublot-slide').css('left'))
   })

//positioner l'image avec valeurs négative - animate 
$('.hublot .img-hublot').on('click',function(){
  $(this).animate({'margin-top':'-269px','width':'624px','height':'807px'})
  console.log('salut!');
})
 

   })

   