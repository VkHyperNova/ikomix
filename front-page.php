<?php get_header(); ?>

<!-- Avaleht -->
<div class="page-content">
  <div class="container">

    <!-- Section Meist -->
    <div class="glass my-5">
      <h2 class="px-5 pt-5 color-ikomix-blue"><?php the_field('firma_kirjelduse_pealkiri'); ?></h2>
      <hr style="width: 200px;">
      <div class="frontpage-description px-5 pb-5 pt-2">
        <p><?php the_field('firma_kirjeldus'); ?></p>
      </div>
    </div>
    <!-- Section Meist END -->

    <!-- Section Pildid ja Hüüdlaused -->
    <?php for ($x = 1; $x <= 5; $x += 1) { ?>
      <div class="row my-5 py-5">
        <div class="col-sm-12 col-md-5 col-lg-6 my-auto px-5">
          <h2 class="color-ikomix-blue"><?php the_field('pilt-' . $x . '-pealkiri'); ?></h2>
          <div class="frontpage-description">
            <p><?php the_field('pilt-' . $x . '-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-6">
          <img class="frontpage-images img-fluid" src="<?php the_field('pilt-' . $x); ?>" alt="pilt" />
        </div>
      </div>
      <?php if ($x < 5) { ?>
        <hr class="hr-center">
      <?php } ?>
    <?php } ?>
    <!-- Section Pildid ja Hüüdlaused END -->

    <!-- Section Tutvustus -->
    <div class="glass my-5">
      <h2 class="pt-5 px-5 color-ikomix-blue"><?php the_field('firma_tutvustus_pealkiri'); ?></h2>
      <hr style="width: 250px;">
      <div class="frontpage-description px-5 pb-5 pt-2">
        <p><?php the_field('firma_tutvustus'); ?></p>
      </div>
    </div>
    <!-- Section Tutvustus END-->

    <!-- Section Muu -->
    <div class="my-5">
      <div class="frontpage-description">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
      </div>
    </div>
    <!-- Section Muu END-->
  </div>
</div>

<?php get_footer(); ?>