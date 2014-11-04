
$(document).ready(function () {

    /*$('.rs-carousel').carousel2({
        pagination: false,
        itemsPerTransition:3,
        insertPrevAction: function () {
        return $('<a href="#" class="rs-carousel-action-prev"><</a>').appendTo($(this).find('.carousel-prev'));
        },
        insertNextAction: function () {
        return $('<a href="#" class="rs-carousel-action-next">></a>').appendTo($(this).find('.carousel-next'));
        }
        
    });

    // Make carousel responsive
    $(window).resize(function () {
        $('.rs-carousel').carousel('refresh');
    });*/

    


    /*$('#slideshow').carousel({
      interval: 5000
    });)*/


   var owl = $("#owl-demo");


      owl.owlCarousel(
        {
          items : 5, //10 items above 1000px browser width
          itemsDesktop : [1000,5], //5 items between 1000px and 901px
          itemsDesktopSmall : [900,3], // betweem 900px and 601px
          itemsTablet: [600,2], //2 items between 600 and 0
          itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
          }
      );

        // Custom Navigation Events
        $(".next").click(function(){
          owl.trigger('owl.next');
        })
        $(".prev").click(function(){
          owl.trigger('owl.prev');
        })
        $(".play").click(function(){
          owl.trigger('owl.play',1000);
        })
        $(".stop").click(function(){
          owl.trigger('owl.stop');
        });



      $('#myCarousel').carousel('pause');

      $( '#nav li:has(ul)' ).doubleTapToGo();


});


    



    

     


   






    /*<script>

    http://jockstothecore.com/proper-implementation-of-background-images-with-text-inside-responsive-carousels/
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    */
