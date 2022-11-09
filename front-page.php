<?php get_header(); ?>

<!-- Avaleht -->

<div class="page-content">
  <div class="container">

    <!-- Section Meist -->
    <div class="my-5">
      <h1 class="text-center"><?php the_field('firma_kirjelduse_pealkiri'); ?></h1>
      <div class="description">
        <p><?php the_field('firma_kirjeldus'); ?></p>
      </div>
    </div>



    <!-- Section 1 -->
    <div class="row my-5 py-5">
      <div class="col-6">
        <img class="frontpage-image-small image-rotate-left" src="<?php the_field('pilt-1'); ?>" alt="" />
      </div>
      <div class="col-6 my-auto px-5">
        <!-- <h1>Säästlik mõtlemine!</h1> -->
        <h1><?php the_field('pilt-1-pealkiri'); ?></h1>
        <div class="description">
          <!-- <p>30% Elektrienergiast saame päikese paneelidest!</p> -->
          <p><?php the_field('pilt-1-kirjeldus'); ?></p>
        </div>
      </div>
    </div>

    <!-- Section 2 -->
    <div class="row my-5 py-5">
      <div class="col-6 my-auto px-5">
        <h1><?php the_field('pilt-2-pealkiri'); ?></h1>
        <!-- <h1>Puhas Pesu!</h1> -->
        <div class="description">
          <!-- <p>Kaasaegsed tööstuslikud pesumasinad.</p> -->
          <p><?php the_field('pilt-2-kirjeldus'); ?></p>
        </div>
      </div>
      <div class="col-6">
        <img class="frontpage-image-small image-rotate-right" src="<?php the_field('pilt-2'); ?>" alt="" />
      </div>
    </div>


    <!-- Section 3 -->
    <div class="row my-5 py-5">
      <div class="col-6">
        <img class="frontpage-image-small image-rotate-left" src="<?php the_field('pilt-3'); ?>" alt="" />
      </div>
      <div class="col-6 my-auto px-5">
        <!-- <h1>Kalandriga triikimine!</h1> -->
        <h1><?php the_field('pilt-3-pealkiri'); ?></h1>
        <div class="description">
          <p><?php the_field('pilt-3-kirjeldus'); ?></p>
          <!-- <p>Kalander on pesu triikimisseade, mis kasutab kuumuse ja auru koosmõju ülikvaliteetseks silumiseks</p> -->
        </div>
      </div>
    </div>


    <!-- Section 4 -->
    <div class="row my-5 py-5">
      <div class="col-6 my-auto px-5">
        <!-- <h1>Konteiner</h1> -->
        <h1><?php the_field('pilt-4-pealkiri'); ?></h1>
        <div class="description my-3">
          <!-- <p>Vajadusel saame pakkida pesu konteineritesse.</p> -->
          <p><?php the_field('pilt-4-kirjeldus'); ?></p>
        </div>
      </div>
      <div class="col-6">
        <img class="frontpage-image-small image-rotate-right" src="<?php the_field('pilt-4'); ?>" alt="" />
      </div>
    </div>

    <!-- Section 5 -->
    <div class="row my-5 py-5">
      <div class="col-6">
        <img class="frontpage-image-small image-rotate-left" src="<?php the_field('pilt-5'); ?>" alt="" />
      </div>
      <div class="col-6 my-auto px-5">
        <!-- <h1>Paindlik Teenindus!</h1> -->
        <h1><?php the_field('pilt-5-pealkiri'); ?></h1>
        <div class="description">
          <!--  <p>Kiire ja kvaliteetne transport.</p> -->
          <p><?php the_field('pilt-5-kirjeldus'); ?></p>
        </div>
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