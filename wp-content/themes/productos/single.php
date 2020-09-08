<?php get_header(); ?>

<div class="container-fluid mt-5 mb-5">
<div class="row">
<div class="col-md-10 offset-1">
<div class="row">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?> 
<div class="col-md-4">
	<h3 class="display-5"> <?php the_title(); ?> </h3> <!-- TITULO -->
	<div class="img-fluida float-left mt-3">
      <?php the_post_thumbnail( 'full'); ?>
      </div>

	
<a class="btn btn-warning float-left mt-5" href="javascript:history.back()">&laquo; Volver Atrás</a>
    </div>
    <div class="col-md-8">
	<p> <?php the_content( ); ?> </p> <!-- Resumen de texto -->
	</div>
<?php endwhile; ?> 
<?php else : ?>  
<?php endif; ?>
</div>
</div>
</div>
</div>

<?php get_footer(); ?> 