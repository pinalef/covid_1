<?php
/* Template Name: Productos */
?>

<div class="superior"></div>
<?php get_header(); ?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 mx-auto">
      <?php if (have_posts()); ?>
      <?php query_posts( "category_name=productos-presentacion&showposts=1" ) ?>
      <?php while (have_posts()): the_post(); ?>
        <div class="row">
          <div class="col-md-8 text-center">
            <h1><?php the_title( ); ?></h1>
            <p><?php the_content( ); ?></p>
          </div>
        </div>


    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-11 mx-auto">
    <h2>Ubicacion</h2>
    </div>
  </div>
</div>

<div class="mapa">
  <?php the_field('contacto_mapa'); ?>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-11 mx-auto">
      <div class="row">
        <div class="col-md-6">
          <?php the_field('contacto_horarios'); ?>
        </div>
        <div class="col-md-6">
          <?php the_field('contacto_fonos'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php endwhile; ?>
<?php else; ?>
<?php endif; ?>
<?php wp_reset_query(  ); ?>

