<!-- Teenused -->
<?php get_header(); ?>

<!-- Content -->
<div class="container page-content">
  <div class="box-text">

    <h2 class="py-5 text-center"><?php the_field('teenused_pealkiri'); ?></h2>
    <div class="row">

      <div class="col-6 p-5">

        <h5 class="pb-2 px-5"><?php the_field('teenused_alapealkiri'); ?></h5>
        <div class="px-5 text-uppercase">
          <?php the_field('teenused_nimekiri'); ?>
        </div>


      </div>
      <div class="col-6 p-5">
        <img class="teenused-pilt" src="<?php the_field('teenused_pilt'); ?>" alt="" />
      </div>

    </div>
    <h6 class="py-5 text-center"><?php the_field('teenused_lisaks'); ?></h6>
  </div>


  <div class="box-text mt-5">
    <div class="p-5 teenused-nb">
      <h2 class="pb-5 text-center"><?php the_field('teenused_nb'); ?></h2>
      <div class="px-5 description">
        <?php the_field('teenused_nb_nimekiri'); ?>
      </div>
    </div>

  </div>


  <div class="description p-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</div>



<?php get_footer(); ?>