

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

