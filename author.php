<?php get_header(); ?>
<?php
   $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
   ?>
<section class="reporter-page">
  <div class="grid_12 page-title"><h1>
      <span class="name"><?php echo $curauth->first_name . " " . $curauth->last_name; ?></span>
      <span class="position"><?php echo get_the_author_meta("juiz_position", $curauth->id); ?></span>
  </h1></div>
  <div class="clear"></div>
  <aside class="grid_3">
    <div class="bio">
      <img class="bio_pic" src="<?php echo get_the_author_meta('juiz_profile_picture_url', $curauth->id); ?>" width="198px" />
      <?php echo $curauth->description; ?>
    </div>
  </aside>
  <br>
  <article class="grid_6">
     <?php query_posts('author='.$curauth->ID.'&order=DESC&posts_per_page=-1'); ?>
    <?php if(have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
    <div class="standard-story">
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <span class="sub-headline"> 
        <a href="/category/<?php $cat = get_the_category(); echo $cat[0]->slug; ?>"><?php echo $cat[0]->name; ?></a>, <?php the_date(); ?>
      </span>
    </div>
    <?php endwhile; ?>
    <div class="navigation">
      <div class="left"><?php next_posts_link('&larr; Previous Entries') ?></div>
      <div class="right"><?php previous_posts_link('Next Entries &rarr;') ?></div>
    </div>
    <?php endif; ?>
  </article>
  <aside class="grid_3">
    <div>
      <h1>
	<?php echo get_the_author_meta("juiz_twitter", $curauth->id); ?>
      </h1>
    </div>
    <div class="twitter widget has-heading">
      <script src="http://widgets.twimg.com/j/2/widget.js"></script>
      <script>
  	new TWTR.Widget({
  	version: 2,
  	type: 'profile',
  	rpp: 6,
  	interval: 6000,
  	width: 'auto',
  	height: 500,
  	theme: {
  	shell: {
  	background: '#ffffff',
  	color: '#000000'
  	},
  	tweets: {
  	background: '#ffffff',
  	color: '#000000',
  	links: '#000099'
  	}
  	},
  	features: {
  	scrollbar: false,
  	loop: false,
  	live: false,
  	hashtags: true,
  	timestamp: true,
  	avatars: false,
  	behavior: 'all'
  	}
  	}).render().setUser('<?php echo get_the_author_meta("juiz_twitter", $curauth->id); ?>').start();
      </script>
    </div>
    
  </aside>
  <div class="clear"></div>
</section>
<?php get_footer(); ?>
