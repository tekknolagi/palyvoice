<?php

function custom_excerpt_more($more) {
  return '...';
}

function custom_excerpt_length($length) {
  return 25;
}

function remove_divs($data) {
  $filteredContent = str_replace(array('<div>', '</div>'), '', $data['post_content']);
  $data['post_content'] = $filteredContent;
  return $data;
}

add_filter('wp_insert_post_data', 'remove_divs', 99);
add_filter('excerpt_length', 'custom_excerpt_length', 999);
add_filter('excerpt_more', 'custom_excerpt_more');

register_nav_menu( 'header-nav', 'Header Navigation' );
register_nav_menu( 'header-nav-right', 'Header Navigation Right' );
add_theme_support( 'post-thumbnails' );

register_sidebar( array(
			'name' => 'Homepage Top Ticker',
			'id' => 'home-top-ticker',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
                        'before_title' => '<h2 class="pane-title">',
                        'after_title' => '</h2>',
			) );

register_sidebar( array(
			'name' => 'Homepage Left Sidebar',
			'id' => 'home-left',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="pane-title">',
			'after_title' => '</h2>',
			) );

register_sidebar( array(
			'name' => 'Homepage Middle Content',
			'id' => 'home-middle',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="pane-title">',
			'after_title' => '</h2>',
			) );

register_sidebar( array(
			'name' => 'Homepage Right Sidebar',
			'id' => 'home-right',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="pane-title">',
			'after_title' => '</h2>',
			) );

register_sidebar( array(
			'name' => 'Story Sidebar',
			'id' => 'sidebar-2',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
			) );

?>