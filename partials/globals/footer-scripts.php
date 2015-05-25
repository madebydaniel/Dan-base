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
