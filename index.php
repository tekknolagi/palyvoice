<?php get_header(); ?>
<div class="grid_12">
	<ul>
	  <?php while(have_posts()): the_post(); ?>
	  <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></li>
	  <?php endwhile; ?>
	</ul>
</div>
<div class="clear"></div>
<?php get_footer(); ?>