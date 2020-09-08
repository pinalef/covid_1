<!DOCTYPE html>
    <head>
        <meta charset="utf-8" />
        <title><?php bloginfo('name'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="refresh" content="60000">
        <?php wp_head(); ?>
    </head>
<body>

<!--  MENU -->
<ul>
	<li>
		<?php wp_list_pages( 'title_li=&depth=1' ); ?>
	</li>
</ul>

<!-- INCLUDES -->
<?php get_header(); ?> 
<?php get_sidebar(); ?> 
<?php get_footer(); ?>
 
<!-- HEAD -->

<!-- CSS -->
/* 
Theme Name: Nombre Tema
Theme URI: www.misite.cl
Description: descripcion del tema
Version: 1
Author: auto
Author URI: direccion web autor
*/


<!-- LOOP DE WORDPRESS -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?> 
	<h1> <?php the_title(); ?> </h1> <!-- TITULO -->
	<h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
	<p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
	
<?php endwhile; ?> 
<?php else : ?>  
<?php endif; ?>


<!-- QUERY -->
<!-- Filtro de categorías -->
<?php query_posts("category_name=banner"); ?>

<!-- Filtro de paginación -->
<?php query_posts("paged=$paged"); ?>

<!-- Volver atrás -->
<a href="<?=$_SERVER["HTTP_REFERER"]?>">Atras</a>
	
<a href="javascript:history.back()">&laquo; Volver Atrás</a>

<!-- TEMPLATE PAGE -->
<?php
/*
Template Name: Pagina
*/
?>


<!-- CUSTOM FIELDS -->
<img src="<?php echo get_post_meta($post->ID, "Thumbnail", true);?>" />

<!-- CUSTOM FIELDS (CONDICIONAL) -->
	<?php $postimageurl = get_post_meta($post->ID, 'big_image', true); 
	if ($postimageurl) { 
	?> 
	<img src="<?php echo $postimageurl; ?>" alt="alt"/> 
	<?php } else { ?> 
	<img src="<?php bloginfo('template_url'); ?>/images/archivo.jpg" alt="alt"/> 
	<?php } ?>

<!-- PLUGIN HOOK -->
<?php wp_footer(); ?>
<?php wp_head(); ?>

<!--TAG PARA LINK DEL POST-->
<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

<!-- NAVEGACIÓN ENTRE POST-->
	<?php endwhile; ?>
<?php if(function_exists('pagenavi')) { pagenavi(); } ?>
	
<?php else : ?>
<!-- sino encuentro -->
<h5>UPS!... lo buscas no se encuentra disponible</h5>

<?php endif; ?>



<!--MULTIPLES SINGLE PAGE-->
<?php
$post = $wp_query->post;
if ( in_category('noticias') ) {
include(TEMPLATEPATH . '/single_notcias.php'); } 
elseif ( in_category('productos') ) {
include(TEMPLATEPATH . '/single_productos.php'); }
elseif ( in_category('servicios') ) {
include(TEMPLATEPATH . '/single_servicios.php'); }
else {
include(TEMPLATEPATH . '/single_default.php');
}
?>













