<?php get_header(); ?>

<!-- Avaleht -->

<div class="page-content">
  <div class="container color-ikomix-blue">

    <!-- Section Meist -->
    <div class="box-text my-5">
      <h2 class="px-5 pt-5"><?php the_field('firma_kirjelduse_pealkiri'); ?></h2>
      <hr style="width: 250px;">
      <div class="description px-5 pb-5 pt-2">
        <p><?php the_field('firma_kirjeldus'); ?></p>
      </div>
    </div>


      <!-- Section 1 -->

      <div class="row my-5 py-5">
        <div class="col my-auto px-5 text-center">
          <h2><?php the_field('pilt-1-pealkiri'); ?></h2>
          <div class="description">
            <p><?php the_field('pilt-1-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col">
          <img class="frontpage-image-small" src="<?php the_field('pilt-1'); ?>" alt="" />
        </div>
      </div>

      <hr>

      <!-- Section 2 -->
      <div class="row my-5 py-5">
        <div class="col my-auto px-5 text-center">
          <h2><?php the_field('pilt-2-pealkiri'); ?></h2>
          <div class="description">
            <p><?php the_field('pilt-2-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col">
          <img class="frontpage-image-small" src="<?php the_field('pilt-2'); ?>" alt="" />
        </div>
      </div>

      <hr>

      <!-- Section 3 -->
      <div class="row my-5 py-5">       
        <div class="col my-auto px-5 text-center">
          <h2><?php the_field('pilt-3-pealkiri'); ?></h2>
          <div class="description">
            <p><?php the_field('pilt-3-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col">
          <img class="frontpage-image-small" src="<?php the_field('pilt-3'); ?>" alt="" />
        </div>
      </div>

      <hr>

      <!-- Section 4 -->
      <div class="row my-5 py-5">
        <div class="col my-auto px-5 text-center">
          <h2><?php the_field('pilt-4-pealkiri'); ?></h2>
          <div class="description my-3">
            <p><?php the_field('pilt-4-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col">
          <img class="frontpage-image-small" src="<?php the_field('pilt-4'); ?>" alt="" />
        </div>
      </div>

    <hr>

      <!-- Section 5 -->
      <div class="row my-5 py-5">
        <div class="col my-auto px-5 text-center">
          <h2><?php the_field('pilt-5-pealkiri'); ?></h2>
          <div class="description">
            <p><?php the_field('pilt-5-kirjeldus'); ?></p>
          </div>
        </div>
        <div class="col">
          <img class="frontpage-image-small" src="<?php the_field('pilt-5'); ?>" alt="" />
        </div>
      </div>





      <!-- Section Tutvustus -->
      <div class="box-text my-5">
        <h2 class="text-center pt-5"><?php the_field('firma_tutvustus_pealkiri'); ?></h2>
        <div class="description px-5 pb-5 pt-2">
          <p><?php the_field('firma_tutvustus'); ?></p>
        </div>
      </div>



    <!-- Section Muu -->
    <div class="my-5">
      <div class="description">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
        endif; ?>
      </div>
    </div>




  </div>
</div>


<?php get_footer(); ?>