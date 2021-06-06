"use strict";

$(document).ready(function () {
   $('.hublot').prepend('<div class="cache"></div>')
   
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


   $('.cache').on('click', function () {
      document.location.href="domaine_dev.php"
      $(this).parent().animate({'width': (parseInt($('.hublot').css('width')) + 6*WIDTH ) + 'px','margin-left':-1.6*WIDTH + 'px'});
      $('.fiche').hide();
      $('.arrow-right').hide();
      $('.arrow-left').hide();
      $('.cache').hide();
      console.log("hello")
   })
   
   $('.un .cache').on('click', function(){
      document.location.href="domaine_dev.php"
   })
   $('.deux .cache').on('click', function(){
      document.location.href="domaine_communication.php"
   })
   $('.trois .cache').on('click', function(){
      document.location.href="domaine_design.php"
   })
   $('.quatre .cache').on('click', function(){
      document.location.href="domaine.php"
   })
})
// $('.cache').on('click', function(){
   
// })