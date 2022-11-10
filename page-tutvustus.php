<!-- Tutvustus -->
<?php get_header(); ?>


<!-- Content -->
<div class="container page-content">

  <div class="box">
    <div class="description p-5">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>



<?php get_footer(); ?>