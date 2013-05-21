<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
<div class="grid_3 alpha">
  <a href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()): ?>
      <?php the_post_thumbnail(array(220,160)); ?>
    <?php else: ?>
      <img src="<?php bloginfo("template_directory"); ?>/images/section_card_placeholder.png" />
    <?php endif; ?>
  </a>
</div>
<div class="grid_3">
  <h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="teaser"><?php the_excerpt(); ?></div>
</div>
<?php endwhile;?>
<?php endif;?>