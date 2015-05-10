<h1 class="entry-title single-title" itemprop="headline" rel="bookmark">
<?php if (is_single() || is_page() ) : ?>
      <?php the_title(); ?>

<?php else : ?>
  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>

<?php endif; ?>
</h1>
