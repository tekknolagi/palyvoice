<?php if(have_posts()): ?>
<section id="spotlight">
  <section id="main-switcher">
    <ul>
      <?php while(have_posts()): the_post(); ?>
      <li>
	<header>
    	  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    	  <div class="teaser"><?php the_excerpt(); ?></div>
    	</header>
    	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(460, 310)); ?></a>
      </li>
      <?php endwhile;?>
    </ul>
  </section>
</section>
<div class="clear"></div>
<?php endif; ?>
