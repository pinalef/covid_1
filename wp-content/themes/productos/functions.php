<?php
// ===========
// = LOGO DESDE WORDPRESS =
// ===========
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );
// ===========
// = MENU =
// ===========

// Register Custom Navigation Walker
require_once get_template_directory() . '/wp-bootstrap-navwalker.php';

add_theme_support( 'nav-menus' );
register_nav_menus(array('menu' => __('menu')));

/* FIN MENU */

add_theme_support( 'post-thumbnails');                // without parameter -> 'post-thumbnail'
  
the_post_thumbnail( 'thumbnail' );       // Thumbnail (default 150px x 150px max)
the_post_thumbnail( 'medium' );          // Medium resolution (default 300px x 300px max)
the_post_thumbnail( 'medium_large' );    //Medium-large resolution (default 768px x no height limit max)
the_post_thumbnail( 'large' );           // Large resolution (default 640px x 640px max)
the_post_thumbnail( 'full' );            // Full resolution (original size uploaded)
  
the_post_thumbnail( array(100, 100) );  // Other resolutions

?>