<!-- Teenused -->
<?php get_header(); ?>

<!-- Content -->
<div class="container page-content">
  <div class="box-text">
    <div class="p-5">
      <h2 class="pb-5 text-center"><?php the_field('teenused_pealkiri'); ?></h2>
      <h5 class="pb-2 px-5"><?php the_field('teenused_alapealkiri'); ?></h5>
      <div class="px-5 description text-uppercase">
        <?php the_field('teenused_nimekiri'); ?>
      </div>
      <h5 class="py-5 text-center"><?php the_field('teenused_lisaks'); ?></h5>
    </div>
  </div>

  <div class="box-text mt-5">
    <div class="p-5">
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