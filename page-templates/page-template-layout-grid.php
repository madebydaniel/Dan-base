<?php
/*
Template Name: Grid Layout
*/
?>

<?php get_header(); ?>


  <main class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/WebPageElement">

    

<div class="wrap">
  <h5 class="full space-half-m-t">.row .one-col</h3>
  <div class="row">
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
  </div><!--\row-->

  <h5 class="full space-half-m-t">.row .two-col</h3>
  <div class="row">
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
  </div><!--\row-->

  <h5 class="full space-half-m-t">.row .three-col</h3>
  <div class="row">
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
  </div><!--\row-->

  <h5 class="full space-half-m-t">.row .four-col</h3>
  <div class="row">
    <div class="layout-box four-col">1/3</div>
    <div class="layout-box four-col">1/3</div>
    <div class="layout-box four-col">1/3</div>
  </div><!--\row-->

  <h5 class="full space-half-m-t">.row .six-col</h3>
  <div class="row">
    <div class="layout-box six-col">1/2</div>
    <div class="layout-box six-col">1/2</div>
  </div><!--\row-->






   <h5 class="full space-half-m-t">.grid .one-col</h3>
  <div class="grid">
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
    <div class="layout-box one-col">1/12</div>
  </div><!--\grid-->

  <h5 class="full space-half-m-t">.grid .two-col</h3>
  <div class="grid">
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
    <div class="layout-box two-col">1/6</div>
  </div><!--\grid-->

  <h5 class="full space-half-m-t">.grid .three-col</h3>
  <div class="grid">
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
    <div class="layout-box three-col">1/4</div>
  </div><!--\grid-->

  <h5 class="full space-half-m-t">.grid .four-col</h3>
  <div class="grid">
    <div class="layout-box four-col">1/3</div>
    <div class="layout-box four-col">1/3</div>
    <div class="layout-box four-col">1/3</div>
  </div><!--\grid-->

  <h5 class="full space-half-m-t">.grid .six-col</h3>
  <div class="grid">
    <div class="layout-box six-col">1/2</div>
    <div class="layout-box six-col">1/2</div>
  </div><!--\grid-->

</div><!--\.wrap-->



<div class="wrap">

<pre>
  .row {
  @include clearfix();
  @include breakpoint(desktop){

    .one-col {
      @include column(1/12);
    }
    .two-col {
      @include column(1/6);
    }
    .three-col {
      @include column(1/4);
    }
    .four-col {
      @include column(1/3);
    }
    .six-col {
      @include column(1/2);
    }
  }
}

.grid {
  @include clearfix();
  @include breakpoint(desktop){

    .one-col {
      @include span(1/12, $cycle:12);
    }
    .two-col {
      @include span(1/6, $cycle:6);
    }
    .three-col {
      @include span(1/4, $cycle:4);
    }
    .four-col {
      @include span(1/3, $cycle:3);
    }
    .six-col {
      @include span(1/2, $cycle:2);
    }
  }
}
</pre>

</div><!--\wrap-->



<?php get_footer(); ?>
