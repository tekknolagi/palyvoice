<?php
/*
Template Name: Spirit Week
*/
?>
<?php get_header(); ?>
<h1 id="spirit_head" class="grid_12">Paly Spirit Week 2011</h1>
  <div class="grid_6">
    <h2>In-Depth Coverage:</h2>
   <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args= array(
       'category_name' => 'spiritweek',
       'paged' => $paged
      );
      query_posts($args);
   ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <ol id="spiritweek_stories">
      <li>
	<a href="<?php the_permalink(); ?>">
	<?php echo "<img src='".wp_get_attachment_url(get_post_thumbnail_id($post->ID))."' width='100px' />";?>
	<h3><?php the_title(); ?></h3>
	</a>
	<div class="reporters">by <?php coauthors_posts_links(); ?></div>
      </li>
          </ol>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
<div class="grid_6">
      <h2>Current Standings:</h2>
      <p><small>Mouse over the bars for exact points.</small></p>
    <div id="total_points_graph" class="graph"></div>
  </div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Points');
        data.addRows([
          ['Seniors', 675],
          ['Juniors', 700],
          ['Sophomores', 175],
          ['Freshmen', 390]
        ]);

        // Set chart options
        var options = {'title':'Spirit Day Point Totals: Day 1',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.BarChart(document.getElementById('total_points_graph'));
        chart.draw(data, options);
      }
    </script>
</div>
<?php get_footer(); ?>
