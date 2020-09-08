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
</div>



<div class="container-fluid  mb-5" id="sintomas">
  <div class="row ">
    <div class="col-md-10 offset-1">
      <div class="row ">
        <div class="col-md-12 text-center my-5">
          <h2>Síntomas</h2>
          <div class="col-md-1 mx-auto" >
            <div class="border"></div>
          </div>
        </div>

      <div class="container">
        <div class="row justify-content-between">

          <?php $the_query=new WP_Query( array( 'category_name'=> 'sintomas' ) ); ?>
          <?php if ( $the_query->have_posts() ) : ?>
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php $featured_img_url=get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>

          <div class="col-lg-4">
            <div class="card mb-2 " >
              <img class="card-img-top" src="<?php echo $featured_img_url ?>" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php the_title(); ?></h4>
                <p class="card-text"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>"  rel="bookmark" class="btn btn-warning">Leer más</a>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <?php else : ?> <p>
          <?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?> </p>
          <?php endif; ?>
        </div>
      </div> 
    </div> 
  </div>
</div>
</div>

<div class="container-fluid mb-5 mt-5" id="prevencion">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2 >Prevención</h2>
          <div class="col-md-1 mx-auto" >
            <div class="border"></div>
          </div>
        </div>
        <?php if (have_posts()) : ?>
        <?php query_posts("category_name=prevencion&showposts=2&order=ASC"); ?>
        <?php while (have_posts()) : the_post(); ?> 
        <div class="col-md-6">
          <h3 class="display-6 mt-4"> <?php the_title(); ?> </h3> 
          <p> <?php the_content(); ?> </p>   
        </div> 
        <?php endwhile; ?> 
        <?php else : ?>  
        <?php endif; ?>
      </div>  
    </div>
  </div>  
</div>



<div class="container-fluid bg-whiter" id="tratamientos">
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row ">
        <div class="col-md-12 text-center my-5">
          <h2>Tratamientos</h2>
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
  </div><div id="estadisticas"></div>
</div>


<div class="container-fluid mb-5 " >
  <div class="row">
    <div class="col-md-10 offset-1">
      <div class="row">
        <div class="col-md-12 text-center my-5">
          <h2 class="ps2id"   >Estadísticas</h2>
          <div class="col-md-1 mx-auto">
            <div class="border"></div>
          </div>
        </div>
        <?php echo do_shortcode('[smartslider3 slider=4]'); ?>
        <!--     </div>
        </div> -->
    </div>
  </div>
</div>
</div>
</div>



<?php get_footer(); ?>