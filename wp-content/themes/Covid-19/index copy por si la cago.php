<?php get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider=2]');
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2>¿Qué es el Coronavirus?</h2>
        </div>
      <?php if (have_posts()) : ?>
      <?php query_posts("category_name=que-es-el-covid-19"); ?>
      <?php while (have_posts()) : the_post(); ?> 
        <div class="col-md-4">
        <div class="img-fluida">
      <?php the_post_thumbnail( ); ?>
      </div>
      <h5> <?php the_title(); ?> </h5> <!-- TITULO -->
      <div class="border"></div>
        <p> <?php the_excerpt(  ); ?> </p> <!-- Resumen de texto -->
          <a href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
      </div>
      <?php endwhile; ?> 
      <?php else : ?>  
      <?php endif; ?>
      <?php wp_reset_query(); ?>
  
  <div class="row">
    <div class="col-md-12 text-center my-5">
      <h2>Síntomas</h2>
      <div class="col-md-1 mx-auto" >
        <div class="border"></div>
      </div>
    </div>
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=sintomas"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <div class="col-md-4">
      <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
      <h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
      <p> <?php the_excerpt(  ); ?> </p> <!-- Resumen de texto -->
      <a href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
    </div>
    <?php endwhile; ?> 
    <?php else : ?>  
    <?php endif; ?>

    <div class="row">
    <div class="col-md-12 text-center my-5">
      <h2>Prevención</h2>
      <div class="col-md-1 mx-auto" >
        <div class="border"></div>
      </div>
    </div>
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=prevencion"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <div class="col-md-4">
      <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
      <h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
      <p> <?php the_excerpt(  ); ?> </p> <!-- Resumen de texto -->
      <a href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
    </div>
    <?php endwhile; ?> 
    <?php else : ?>  
    <?php endif; ?>

    <div class="row">
    <div class="col-md-12 text-center my-5">
      <h2>Tratamientos</h2>
      <div class="col-md-1 mx-auto" >
        <div class="border"></div>
      </div>
    </div>
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=tratamientos"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <div class="col-md-4">
      <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
      <h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
      <p> <?php the_excerpt(  ); ?> </p> <!-- Resumen de texto -->
      <a href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
    </div>
    <?php endwhile; ?> 
    <?php else : ?>  
    <?php endif; ?>

    <div class="row">
    <div class="col-md-12 text-center my-5">
      <h2>Estadísticas</h2>
      <div class="col-md-1 mx-auto" >
        <div class="border"></div>
      </div>
    </div>
    <?php if (have_posts()) : ?>
    <?php query_posts("category_name=estadisticas"); ?>
    <?php while (have_posts()) : the_post(); ?> 
    <div class="col-md-4">
      <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
      <h2> <?php the_time('F jS, Y') ?> </h2> <!-- FECHA -->
      <p> <?php the_excerpt(  ); ?> </p> <!-- Resumen de texto -->
      <a href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
    </div>
    <?php endwhile; ?> 
    <?php else : ?>  
    <?php endif; ?>
  </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php get_footer(); ?>