<?php get_header(); ?>
<section id='left' class='grid_9'>
  <?php global $query_string; ?>
  <?php $cat = array(get_category(get_query_var('cat'), false)->cat_ID, get_category_by_slug('spotlight')->cat_ID); ?>
   <!-- <?php echo "CATEGORY_ID: ".$cat[0]; ?> -->
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]), 'posts_per_page' => 5)); ?>
  <?php get_template_part('spotlight'); ?>
  <?php wp_reset_query(); ?>
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]), 'posts_per_page' => 6)); ?>
  <?php query_posts(array('category__and' => array($cat[0],$cat[1]), 'posts_per_page' => 6, 'paged' => 2)); ?>
  <?php get_template_part('under_spotlight'); ?>
  <?php wp_reset_query(); ?>
</section>
<aside id='left' class='grid_3'>
   <?php query_posts(array('category__and' => array($cat[0]), 'category__not_in' => array($cat[1]), 'posts_per_page' => 4)); ?>
  <?php get_template_part('newswire'); ?>
  <?php wp_reset_query(); ?>
</aside>
<div class='clear'></div>
<?php get_footer(); ?>
