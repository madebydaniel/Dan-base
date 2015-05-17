<div class="dan-banner">
  <?php
  if(is_single()) :
     the_post_thumbnail();
   else:
   ?>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail(); ?>
  </a>
  <?php endif; ?>
</div>
