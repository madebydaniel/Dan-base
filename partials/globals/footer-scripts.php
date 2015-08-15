<?php if(is_front_page()) { ?>
  <script>
  //home page tabs and client carousel
  (function($){
    $('.dan-logo-carousel').carousel({
      animation: 'slide',
      itemsToShow: 2,
      duration: 1000,
    });
  })(jQuery);
  </script>
<?php } ?>



<script>

(function($) {

      $('.mobile-menu-icon').on('click', function(){
        $('.mobile-menu-panel').toggleClass('is-visible');
      });
      


    $("li.menu-item-has-children").on('mouseenter mouseleave', function (e) {

      var ulTest = $('ul', this);
        if (ulTest.length) {
            var elm = $('ul:first', this);
            var off = elm.offset();
            var l = off.left;
            var w = elm.width();
            var docW = $(window).width();

            var isEntirelyVisible = (l + w + 140);

            console.log(ulTest);
            console.log("one"+isEntirelyVisible);
            console.log("one"+docW);

            if (isEntirelyVisible < docW) {
            } else {
                $(this).addClass('edge');
            }
        }
    });


    //fitvids script
    $(".entry-content").fitVids();


})(jQuery);




</script>
