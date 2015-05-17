<p class="entry-category entry-meta vcard dan-category">
  <?php if(get_the_category_list(', ') != ''): ?>
    <?php printf( __( 'Filed under: %1$s', 'dantheme' ), get_the_category_list(', ') ); ?>
  <?php endif; ?>
</p>
