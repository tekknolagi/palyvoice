<?php if(have_posts()): ?>
<div id="under_spotlight">
  <?php $i = 0; while(have_posts()): the_post(); $i++; ?>
    <article class="grid_3 <?php echo (($i+1)%3==0) ? "middle" : (($i%3==0) ? "omega" : "alpha"); ?>">
      <div class="img_item">
        <a href="<?php the_permalink(); ?>" class="img_frame"><?php the_post_thumbnail(array(220, 160)); ?></a>
        <h1 class="under_image"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
	  </article>
	<?php endwhile;?>
</div>
<?php endif; ?>