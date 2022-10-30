<?php get_header(); ?>

<!-- Avaleht -->
<div class="container-fluid min-vh-100">>

  <div class="front-page-content mt-5 mb-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>


</div>



<?php get_footer(); ?>