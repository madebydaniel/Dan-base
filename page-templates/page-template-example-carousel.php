<?php
/*
Template Name: Carousel
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    
  <div class="wrap">

  <p class="center large well m-t--half">Visit <a href="http://kenwheeler.github.io/slick/">http://kenwheeler.github.io/slick/</a> for API.</p>
  
   <section id="client-logos" class="carousel">
      <div class="carousel-items">
        <ul>
            <?php 
              // example script for outputting cmb file cmb2_output_file_list
              //cmb2_output_file_list( '_ss_home_client', 'small' );
            ?>
            <li><img src="http://fillmurray.com/100/50" /></li>
            <li><img src="http://fillmurray.com/200/100" /></li>
            <li><img src="http://fillmurray.com/130/150" /></li>
            <li><img src="http://fillmurray.com/150/150" /></li>
            <li><img src="http://fillmurray.com/120/180" /></li>
            <li><img src="http://fillmurray.com/200/200" /></li>
            <li><img src="http://fillmurray.com/140/160" /></li>
            <li><img src="http://fillmurray.com/190/110" /></li>
            <li><img src="http://fillmurray.com/110/90" /></li>
        </ul>
      </div><!--\carousel-items-->

        <h3>Jquery Needed</h3>
        <pre>

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
        </pre>
        
        <h3>Markup</h3>
        <pre>
        &lt;div class="carousel-items"&gt;
        &lt;ul&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/100/50" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/200/100" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/130/150" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/150/150" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/120/180" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/200/200" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/140/160" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/190/110" /&gt;&lt;/li&gt;
            &lt;li&gt;&lt;img src="http://fillmurray.com/110/90" /&gt;&lt;/li&gt;
        &lt;/ul&gt;
        &lt;/div&gt;&lt;!--\carousel-items--&gt;

        </pre>
    </section>
  </div>






</main>
<?php get_footer(); ?>
