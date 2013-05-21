<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title><?php bloginfo('name'); ?> <?php wp_title('—'); ?></title>
    
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/jquery.js"></script>
    <!--    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/jquery-dateformat.js"></script>-->
    <!--    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/jquery.cookie.js"></script>-->
    <script type="text/javascript" src="http://www.twospy.com/galleriffic/js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/functionality.js"></script>
    
    <script type="text/javascript">
      var disqus_developer = 1;
    </script>
    
    <?php wp_head(); ?>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34311211-1']);
      _gaq.push(['_setDomainName', 'palyvoice.com']);
      _gaq.push(['_trackPageview']);

      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>    
    <!--<script type="text/javascript">
		var today = new Date();
		var hh = today.getHours();
		if (!$.cookie("blackout"+hh*100)) {
		window.location.replace("http://palyvoice.com/blackout.php");
		}
		</script>-->
  </head>

  <body>
    <div id="container" class="container_12">
      <header class="grid_12">  
	<hgroup class="top">
	  <div class="grid_7 alpha">
	    <!-- HALLOWEEN LOGO newlogo_halloween -->
	    <h1 class="logo"><a href="/"><img alt="the Paly Voice" src="<?php bloginfo('template_directory'); ?>/images/voice_logo_vector_small.png" height="80px" style="position: relative; left: -10px;" /></a></h1>
	  </div>
<!--	  <div class="grid_2 alpha">
	    <h1 style="position:relative; left: 90px; top: 30px;"><a href="/category/oscars-2"><img src="<?php bloginfo('template_directory'); ?>/images/academy_awards.png" height="60px" /></a></h1>
	  </div>
-->
	  <div class="grid_5 omega">
	    <form action="/" class="search" id="searchform" role="search" method="get">
	      <div>
		<a href="http://facebook.com/thepalyvoice" target="_blank">
		  <img src="<?php bloginfo('template_directory'); ?>/images/facebook.gif" />
		</a>
		<a href="http://twitter.com/thepalyvoice" target="_blank">
		  <img src="<?php bloginfo('template_directory'); ?>/images/twitter.gif" />
		</a>
		<a href="http://youtube.com/thepalyvoicetube" target="_blank">
		  <img src="<?php bloginfo('template_directory'); ?>/images/youtube.jpg" width="16px" />
		</a>
	      </div>
	      <div>
		<input type="search" name="s" id="s" size="31" class="searchbox" />
<!--		<input type="submit" id="searchsubmit" value="Search the Voice" />-->
	      </div>
	    </form>
	  </div>
	  <div class="clear"></div>
	  <ul id="social-links">
	    <li class="facebook"><a href="http://www.facebook.com/thepalyvoice">Friend us on Facebook</a></li>
	    <li class="twitter"><a href="https://twitter.com/thepalyvoice">Follow us on Twitter</a></li>
	  </ul>
	</hgroup>
	<!--<?php date_default_timezone_set('America/Los_Angeles'); ?> -->
	<nav class="main">
	  <?php wp_nav_menu( array( 'theme_location' => 'header-nav', 'container' => false ) ); ?>
	  <span id="info_right_align">
	    <span id="school_name">Palo Alto High School, Palo Alto, CA</span>
	    <br>
	      <span id="date"><?= date('l, F j, Y', $_SERVER['REQUEST_TIME']); ?></span>
	    </span>
	    <div class="clear"></div>
	  </nav>
	</header>
	<div class="clear"></div>
	<?php if ( is_category() ) { ?>
	<div class="page-title">
	  <h3>
	    <?php single_cat_title(''); ?>
	  </h3>
	</div>
	<?php }  else { ?>
	<section id="ticker_section">
	  <?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('home-top-ticker')): ?>
	  <?php endif; ?>
	</section>
	
	<?php } ?>
