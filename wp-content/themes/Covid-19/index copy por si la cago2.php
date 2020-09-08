<?php get_header(); ?>

<?php
echo do_shortcode('[smartslider3 slider=2]');
?>

<div class="container-fluid mb-5 mt-5" id="que-es">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2 class="m_PageScroll2id" >¿Qué es el Coronavirus?</h2> 
   
         <?php if (have_posts()) : ?>
      <?php query_posts("category_name=que-es-el-covid-19&showposts=1"); ?>
      <?php while (have_posts()) : the_post(); ?> 
             <h6 class="display-5 mt-3"> <?php the_title(); ?> </h6> <!-- TITULO -->
      </div>
        <div class="col-md-7"> 
          <p> <?php the_content(); ?> </p>
        </div>
        <div class="col-md-5">
        <div class="img-fluida float-right">
      <?php the_post_thumbnail( 'full'); ?>
      </div>
      </div>

      <?php endwhile; ?> 
      <?php else : ?>  
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>  
  </div>
</div>
</div>
<div class="container-fluid bg-whiter mb-5" id="sintomas">
  <div class="row ">
    <div class="col-md-10 offset-1">
      <div class="row ">
        <div class="col-md-12 text-center my-5">
          <h2  >Síntomas</h2>
          <div class="col-md-1 mx-auto" >
            <div class="border"></div>
          </div>
      </div>
      <?php if (have_posts()) : ?>
      <?php query_posts("category_name=sintomas&showposts=3"); ?>
      <?php while (have_posts()) : the_post(); ?> 
      <div class="col-md-4">
      <div class="img-fluida">
      <?php the_post_thumbnail( ); ?>
      </div>
        <h4 class="display-5"> <?php the_title(); ?> </h4> 
  
        <p> <?php the_excerpt(); ?> </p>
        <a class="btn btn-warning" href="<?php the_permalink(); ?>" rel="bookmark">Leer más</a>
      </div>
      <?php endwhile; ?> 
      <?php else : ?>  
      <?php endif; ?>
    </div>
  </div> 
</div>
</div>

<div class="container-fluid mb-5 mt-5" id="prevencion">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2  >Prevención</h2>
          <div class="col-md-1 mx-auto" >
            <div class="border"></div>
          </div>
        </div>
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=prevencion&showposts=1"); ?>
        <?php while (have_posts()) : the_post(); ?> 
          <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
          
          <div class="col-md-7">
          <p> <?php the_content(); ?> </p>
        </div>
        <div class="col-md-5">
        <div class="img-fluida float-right">
      <?php the_post_thumbnail( 'full'); ?>
      </div>
      </div>
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid" id="tratamientos">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row ">
        <div class="col-md-12 text-center my-5">
          <h2 class="ps2id"   >Tratamientos</h2>
          <div class="col-md-1 mx-auto" >
            <div class="border"></div>
          </div>
        </div>

        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=tratamientos&showposts=1"); ?>
        <?php while (have_posts()) : the_post(); ?> 

        <div class="col-md-4">
          <div class="img-fluida float-right">
          <?php the_post_thumbnail( 'full'); ?>
          </div>
        </div>
        <div class="col-md-8">
          <h3> <?php the_title(); ?> </h3> <!-- TITULO -->
          <p> <?php the_content(); ?> </p>
        </div>
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
</div>

<div class="container-fluid" id="estadisticas">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
  
        <div class="col-md-12 text-center my-5">
          <h2 class="ps2id"   >Estadisticas</h2>
          <div class="col-md-1 mx-auto">
            <div class="border"></div>
          </div>
        </div>
        <?php echo do_shortcode('[smartslider3 slider=3]'); ?>
  
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>