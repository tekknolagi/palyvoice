<?php
   /*
   Template Name: Search Page
   */
   ?>
<!-- 47595 -->
<!-- PAGE ID: <?php the_ID(); ?>-->
<?php
   global $query_string;

   $query_args = explode("&", $query_string);
   $search_query = array('nopaging' => true, 'posts_per_page' => -1, 'post_type' => array('post'));

   foreach($query_args as $key => $string) {
     $query_split = explode("=", $string);
     $search_query[$query_split[0]] = urldecode($query_split[1]);
   }

   $search = new WP_Query($search_query);
   $total_results = $search->post_count;
   get_header();
?>
<div class="grid_12">
  <div class="search_number"><?php echo $total_results; ?> results</div>
  <br>
  <span class="search_results"
	<ul>
     <?php if ( $search->have_posts() ) : while ( $search->have_posts() ) : $search->the_post(); ?>
	  <li>
	    <span class="title">
	      <a href="<?php the_permalink(); ?>">
		<?php the_title(); ?>
	      </a>
	    </span>
	    <br>
	    <span class="byline">
	      <span class="reporters">
		<i>
		  <?php the_date("F j, Y")?>&nbsp;&mdash;&nbsp;by <?php coauthors_posts_links(); ?>
		</i>
	      </span>
	    </span>
	    <!--	  <h4 class="date">Published </h4> -->
	  </li>
	  <br>
	  <?php endwhile; endif; ?>
	</ul>
</span>
     <?php     echo paginate_links( $args ); ?>
</div>

<div class="clear"></div>
<?php get_footer(); ?>
