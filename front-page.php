<?php get_header(); ?>

<!-- Avaleht -->
<!-- Background image -->
<div class="main-image">
  <div class="container ">
    <h1 class="text-center text-uppercase main-image-title">Valgjärve Pesumaja</h1>
  </div>


</div>
<div class="page-content">
  <div class="container">

    <!-- User Posts -->

    <div class="my-5">
      <h1 class="text-center">Meist</h1>
      <div class="description">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
      </div>
    </div>


    <!-- Section 1 -->
      <div class="row my-5 py-5">
        <div class="col-6">
          <div class="bg-image-1"></div>
        </div>
        <div class="col-6 my-auto px-5">
          <h1>Säästlik mõtlemine!</h1>
          <div class="description">
            <p>Kirjeldus</p>
          </div>
        </div>
      </div>

    <!-- Section 2 -->
      <div class="row my-5 py-5">
        <div class="col-6 my-auto px-5">
          <h1>Paindlik Teenindus!</h1>
          <div class="description">
            <p>Kirjeldus</p>
          </div>
        </div>
        <div class="col-6">
          <div class="bg-image-2"></div>
        </div>
      </div>


    <!-- Section 3 -->
      <div class="row my-5 py-5">
        <div class="col-6">
          <div class="bg-image-3"></div>
        </div>
        <div class="col-6 my-auto px-5">
          <h1>Puhas Pesu!</h1>
          <div class="description">
            <p>Kirjeldus</p>
          </div>
        </div>
      </div>


  </div>
</div>


<?php get_footer(); ?>