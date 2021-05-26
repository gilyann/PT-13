"use strict";

<<<<<<< Updated upstream
$(document).ready(function () {

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
   var WIDTH = window.innerWidth;

   var numberimage = 1;
   //les différents slides possibles 
   $('.arrow-right').on('click', function () {
      $('.domaine-slide').animate({
         'left': (parseInt($('.domaine-slide').css('left')) - WIDTH) + 'px'
      }, function () {
         numberimage++;
         $('.paysage').attr('src', 'medias/img/bg' + numberimage + '.jpg');

      })
   })

   $('.arrow-left').on('click', function () {
      $('.domaine-slide').animate({
         'left': (parseInt($('.domaine-slide').css('left')) + WIDTH) + 'px'
      }, function () {
         numberimage--;
         $('.paysage').attr('src', 'medias/img/bg' + numberimage + '.jpg');
      })
   })
   $('.cache1').on('click', function () {
      $('.hublot').animate({
         right: '+=1000px',
         height: '-=1150px',
         width: '+=150px'
      });

      console.log("hello")
   })
})



// height: '+=10px',
// right: '-=100px',
// width: '+=2600px'
=======
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
       $('.domaine-slide').animate({'left':(parseInt($('.domaine-slide').css('left'))-window.innerWidth)+'px'},function (){
         numberimage++;
        $('.paysage').attr('src','medias/img/bg'+ numberimage +'.jpg');   
 
    })


    $('.arrow-left').on('click',function(){            
      $('.domaine-slide').animate({'left':(parseInt($('.domaine-slide').css('left'))+window.innerWidth)+'px'},function (){
        numberimage--;
       $('.paysage').attr('src','medias/img/bg' + numberimage +'.jpg');
      })
   })

})
})

// //positioner l'image avec valeurs négative - animate 
// $('.hublot .img-hublot').on('click',function(){
//   $(this).animate({'margin-top':'-269px','width':'624px','height':'807px'})
//   console.log('salut!');
// })
 

//    })

   
>>>>>>> Stashed changes
