<?php
   /*
   Template Name: Election Coverage
   */
   ?>
<?php get_header(); ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='//platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>

<div class='grid_4'>
  <h2>Tweets from the Staff</h2>
  <p><small>Our staff is stationed at various places around Palo Alto.</small></p>
  <br>
  <a class='twitter-timeline' width='300' height='350' href='https://twitter.com/thepalyvoice/the-paly-voice-staff' data-widget-id='265912655074693120'></a>
</div>
<div class='grid_8'>
  <h1 id='spirit_head' class='grid_8'>Local Election Charts</h1>
  <br>
  <iframe class='grid_8' height='390' src='http://results.enr.clarityelections.com/CA/Santa_Clara/43231/106095/en/summary.html'></iframe>

</div>
<!--<div class='grid_12'>
<iframe src='http://www.google.com/elections/ed/us/results'></iframe>
</div>-->
<section id='left' class='grid_9'>
  <br><br><br>
  <?php global $query_string; ?>
  <?php $cat = array(get_category_by_slug('election')->cat_ID, get_category_by_slug('spotlight')->cat_ID); ?>
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]))); ?>
  <?php get_template_part('spotlight'); ?>
  <?php wp_reset_query(); ?>
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]), 'posts_per_page' => 6)); ?>
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]), 'posts_per_page' => 6, 'paged' => 2)); ?>
  <?php get_template_part('under_spotlight'); ?>
  <?php wp_reset_query(); ?>
</section>
<aside id='left' class='grid_3'>
  <br><br><br>
  <?php query_posts(array('category__and' => array($cat[0]), 'category__not_in' => array($cat[1]), 'posts_per_page' => 4)); ?>
  <?php get_template_part('newswire', 'election'); ?>
  <?php wp_reset_query(); ?>
</aside>

</div>
<?php get_footer(); ?>
