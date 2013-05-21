<?php get_header(); ?>
<section id="left" class="grid_9">
  <section id="top_section">
    <?php query_posts(array("category__in" => array(11), "posts_per_page" => 5)); ?>
    <?php get_template_part("spotlight"); ?>
    <?php wp_reset_query(); ?>
  </section>
  <h2 class="pane-title t10"><a href="/category/editorspick/">Editor's Pick</a></h2>
  <section id="home_section_card">
    <?php query_posts(array("category__and" => array(777), "posts_per_page" => 3)); ?>
    <?php get_template_part("under_spotlight"); ?>
    <?php wp_reset_query(); ?>
  </section>
  <div class="clear"></div>
  <span class="video_whole">
    <span class="grid_4 video_section">
      <aside id="bottom_flag_aside" class="grid_4 alpha">
	<?php dynamic_sidebar("home-left"); ?>
      </aside>
    </span>
    <span class="grid_4 video_section">
      <section id="bottom_flag_content" class="grid_4 omega">
	<?php dynamic_sidebar("home-middle"); ?>
      </section>
    </span>
  </span>
  <div class="clear"></div>
  <section id="bottom_flag_skirt">
    <h2 class="pane-title"><a href="/category/news/">News</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__in" => 5, "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__in" => 5, "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
    <h2 class="pane-title"><a href="/category/sports/">Sports</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__in" => 6, "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__in" => 6, "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
    <h2 class="pane-title t10"><a href="/category/opinion/">Opinion</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__and" => array(8, 11), "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__and" => array(8, 11), "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
    <h2 class="pane-title"><a href="/category/multimedia/">Multimedia</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__in" => 7, "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__in" => 7, "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
    <h2 class="pane-title"><a href="/category/features/">Features</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__in" => 9, "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__in" => 9, "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
    <h2 class="pane-title"><a href="/category/entertainment/">A & E</a></h2>
    <section class="home_section_card">
      <?php query_posts(array("category__in" => 10, "posts_per_page" => 1)); ?>
      <?php get_template_part("section_card", "left"); ?>
      <?php wp_reset_query(); ?>
      <?php query_posts(array("category__in" => 10, "posts_per_page" => 3, "offset" => 1)); ?>
      <?php get_template_part("section_card", "right"); ?>
      <?php wp_reset_query(); ?>
      <div class="clear"></div>
    </section>
  </section>
  <div class="clear"></div>
</section>
<aside id="left" class="grid_3">
  <?php query_posts(array("category__not_in" => array(get_category_by_slug('ticker')->cat_ID, get_category_by_slug('spotlight')->cat_ID), "posts_per_page" => 4)); ?>
  <?php get_template_part("newswire"); ?>
  <?php wp_reset_query(); ?>
  <?php dynamic_sidebar("home-right"); ?>
</aside>
<div class="clear"></div>
<?php get_footer(); ?>
