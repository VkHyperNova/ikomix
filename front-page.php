<?php get_header(); ?>

<!-- Avaleht -->
<!-- Background image -->
<div class="bg-image p-5 text-center shadow-1-strong text-white">
  <div class="container">
    <h1 class="my-5">Valgjärve Pesumaja</h1>
  </div>


</div>
<div class="page-content">
  <div class="container">

    <!-- User Posts -->
    <div class="mt-5 mb-5">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
      <?php endwhile;
      endif; ?>
    </div>

    <!-- Section 1 -->
    <div class="frontpage-section">
      <div class="row text-center">
        <div class="col-6">
          <div class="bg-image-1"></div>
        </div>
        <div class="col-6 my-auto">
          <h1>Puhas Pesu!</h1>
        </div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="frontpage-section">
      <div class="row">
        <div class="col-6 my-auto">
          <h1>Paindlik Teenindus!</h1>
        </div>
        <div class="col-6">
          <div class="bg-image-2"></div>
        </div>
      </div>
    </div>

    <!-- Section 3 -->
    <div class="frontpage-section">
      <div class="row text-center">
        <div class="col-6">
          <div class="bg-image-3"></div>
        </div>
        <div class="col-6 my-auto">
          <h1>Säästlik mõtlemine!</h1>
        </div>
      </div>
    </div>

  </div>
</div>


<?php get_footer(); ?>