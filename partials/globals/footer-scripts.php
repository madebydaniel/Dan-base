<script>

(function() {


    //fitvids script
    jQuery(".entry-content").fitVids();
    

})();



(function($) {

      //mobile menu flyout
      $('.mobile-menu-icon-open').on('click', function(){
        $('.mobile-menu-panel').addClass('is-visible');
        $(this).addClass('icon-hide');
      });
      $('.mobile-menu-icon-close').on('click', function(){
        $('.mobile-menu-panel').removeClass('is-visible');
        $('.mobile-menu-icon-open').removeClass('icon-hide');
      })


      //elminate page scroll when scrolling menu
      $( '.scrollable' ).bind( 'mousewheel DOMMouseScroll', function ( e ) {
          var e0 = e.originalEvent,
              delta = e0.wheelDelta || -e0.detail;
          
          this.scrollTop += ( delta < 0 ? 1 : -1 ) * 10;
          e.preventDefault();
      });

      var $menuItem = $('mobile-nav a');
      $menuItem.on('touchstart mouseenter focus', function(e) {
          if(e.type == 'touchstart') {
              // Don't trigger mouseenter even if they hold
              e.stopImmediatePropagation();
              // If $item is a link (<a>), don't go to said link on mobile, show menu instead
              e.preventDefault();
          }

          // Show the submenu here
      });
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

<?php if(is_page_template('page-templates/page-template-example-tabs-page.php')){ ?>
<script>
(function($){
  $('#tab-container').easytabs();
   })(jQuery);
</script>
<?php } ?>
