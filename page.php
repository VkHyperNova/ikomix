<?php get_header(); ?>

<!-- Background image -->
<div class="bg-image-page p-5 text-center shadow-1-strong text-white">
  <div class="container">
    <h1 class="my-5"><?php the_title(); ?></h1>
  </div>
</div>

<!-- Content -->
<div class="container page-content">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile;
  endif; ?>
</div>



<?php get_footer(); ?>