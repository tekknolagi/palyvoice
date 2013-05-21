<!-- PAGE ID: <?php the_ID(); ?> -->

<?php get_header(); ?>
<section class="story-page">
  <div class="grid_12">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h1 class="title"><?php the_title(); ?></h1>
      <!--<h3 class="byline">
              <span class="reporters">by <?php coauthors_posts_links(); ?></span>
      </h3>
      <h4 class="date">Published <?php the_date("F j, Y")?></h4>-->
      <div class="share">
    	<div class="facebook"><fb:like href="<?php the_permalink(); ?>" layout="button_count" show-faces="false" width="100" action="like" colorscheme="light" class="small-link-button" /></div>
    	<div class="twitter"><a href="https://twitter.com/share" class="twitter-share-button" data-via="thepalyvoice">Tweet</a>
          <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>
    	<div class="clear"></div>
      </div>
      <div class="story-content">
        <?php the_content(); ?>
      </div>
    </article><!--
		 <?php comments_template(); ?>-->
    <?php endwhile; endif; ?>
  </div>
  <div class="clear"></div>
</section>
<?php get_footer(); ?>
