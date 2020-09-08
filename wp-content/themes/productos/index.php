<?php
/* Tamplate Name: Inicio */
?>

<div class="superior"></div>

<?php get_header(); ?>

<!-- slider -->

<div class="container-fluid">
  <div class="row">
    <div class="col-md-10  mx-auto">

      <?php if (have_posts()); ?>
      <?php query_posts( "category_name=productos&showposts=4" ) ?>
      <?php while (have_posts()): the_post(); ?>
            <div class="col-md-3 text-center mb-5">
              <div class="img fluida mb-3">
                <?php the_post_thumbnail( ); ?>
              </div>

              <h4><?php the_title( ); ?></h4>
              <h5><?php the_field('producto_valor'); ?> </h5>
              <p><?php the_excerpt(  ); ?></p>
              <a class="btn btn-primary" href="<?php the_permalink(); ?>">Leer más</a>
          </div>

      <?php endwhile; ?>
      <?php else; ?>
      <?php endif; ?>
      <?php wp_reset_query(  ); ?>
    </div>
  </div>
  
  <div class="row">

  </div>
</div>

<?php get_footer(  ); ?>