<!-- Hinnakiri -->
<?php get_header(); ?>

<!-- Content -->
<div class="container page-content">
  <div class="description">
    <h1>(hinnakiri poolik)</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</div>



<?php get_footer(); ?>