<?php if(is_front_page()) { ?>
  <script>
  //home page tabs and client carousel
  (function($){
    
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


            if (isEntirelyVisible < docW) {
            } else {
                $(this).addClass('edge');
            }
        }
    });


    //fitvids script
    $(".entry-content").fitVids();


})(jQuery);


<?php if(is_page_template('page-templates/page-template-example-carousel.php')){ ?>

  (function($){
     $('.carousel').find('ul').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows:false,
        centerMode: true,
        variableWidth: true
    });
  })(jQuery);


<?php } ?>

</script>
