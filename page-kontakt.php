<!-- Kontakt -->

<?php get_header(); ?>

<!-- Background image -->
<div class="page-image p-5 text-center shadow-1-strong text-white">
  <div class="container">
    <h1 class="page-title my-5"><?php the_title(); ?></h1>
  </div>
</div>

<!-- Content -->
<div class="container page-content">
<h2>Card Image</h2>
  <p>Image at the top (card-img-top):</p>
  <div class="card" style="width:400px">
    <img class="card-img-top" src="img_avatar1.png" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">John Doe</h4>
      <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
  <div class="description">
    <h1>poolik</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</div>



<?php get_footer(); ?>