<!doctype html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
    <title><?php bloginfo( 'name' ); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
	<?php $custom_logo = wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'medium' ); ?>
 

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a href="<?php echo home_url() ?>"><?php echo $custom_logo ?></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <?php 
			wp_nav_menu( array(
			'theme_location'  => 'menu',
			'depth'           => 2,
			'container'       => 'div',
			'container_id'    => 'navbarNavDropdown',
			'container_class' => 'collapse navbar-collapse',
			'menu_class'      => 'nav navbar-nav mr-auto',
			'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
			'walker'          => new WP_Bootstrap_Navwalker()
			) );
	  	?> 
 
</nav>
