<?php if(have_posts()): ?>
<nav id="newswire" class="home">
  <h3><a href="#">Latest News</a></h3>
  <div class="inner">
    <?php while(have_posts()): the_post(); ?>
    <div class="row">
      <h1 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <div class="teaser"><?php the_excerpt(); ?></div>
    </div>
    <?php endwhile; ?>
  </div>
</nav>
<?php endif; ?>
