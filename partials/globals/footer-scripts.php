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

<?php if(is_page_template('page-templates/page-template-tk-tabs-page.php')) { ?>
  <script>
  (function($){
    $('.tabs').tab();
  })(jQuery);
  </script>
<?php } ?>

<?php if((is_page_template('page-templates/page-template-tk-pin-page.php')) || (is_page_template('page-templates/page-template-tk-stalker-page.php'))) { ?>
  <script>
  (function($){
    $('.pin').pin({
      //animation: 'slide',
      location: 'left',
      fixed: true,
      context: '.dan-sidebar'
    });
  })(jQuery);
  </script>
<?php } ?>


<?php if(is_page_template('page-templates/page-template-tk-stalker-page.php')) { ?>
  <script>
    (function($){
      $('body').stalker({
        target: '#stalker-nav li a',
        marker: '#stalker-articles article'
      });
    })(jQuery);
  </script>
<?php } ?>


<script>

(function($) {

    $('.off-canvas').offCanvas({
        animation: 'on-top',
        swipe: true,
        stopScroll: true
    });

})(jQuery);

</script>
