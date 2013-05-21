<?php if(have_posts()): ?>
<div class="grid_3 omega">
  <ul class="other">
    <?php while(have_posts()): the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile;?>
  </ul>
</div>
<?php endif;?>