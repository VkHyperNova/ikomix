<!-- Teenused -->
<?php get_header(); ?>

<!-- Content -->
<div class="container page-content">
  <div class="box-text mb-5">

    <h2 class="pt-5 pb-2 text-center color-ikomix-blue"><?php the_field('teenused_pealkiri'); ?></h2>
    <hr class="hr-header">

    <div class="subheader-large mt-5">
      <h4 class="px-5 pt-5 color-ikomix-blue text-center"><?php the_field('teenused_alapealkiri'); ?></h4>
      <hr class="hr-sub-header">
    </div>

    <div class="row">
      <div class="col p-5">
        <div class="teenused-nimekiri">

          <div class="px-5 text-uppercase color-ikomix-blue" style="font-size: larger;">
            <?php the_field('teenused_nimekiri'); ?>
          </div>
        </div>
      </div>

      <div class="col p-5">
        <img class="teenused-pilt" src="<?php the_field('teenused_pilt'); ?>" alt="" />
      </div>
    </div>
    <hr class="my-5">
    <h5 class="pb-5 text-center color-red"><?php the_field('teenused_lisaks'); ?></h5>
  </div>

  <!-- Tingmargid -->
  <section class="box-text mb-5">
    <h2 class="pt-5 pb-2 text-center color-ikomix-blue">Tingmärgid</h2>
    <hr class="hr-header" />

    <div class="subheader">
      <h3 class="px-5 pt-5 pb-2 color-ikomix-blue">Pesemine</h3>
      <hr class="hr-sub-header" />
    </div>

    <?php if (have_rows('pesemise_tingmargid')) : while (have_rows('pesemise_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_1'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_1'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_2'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_2'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_3'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_3'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_4'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_4'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_5'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_5'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_6'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_6'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_7'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_7'); ?></p>
          </div>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5">

    <h3 class="px-5 py-3 color-ikomix-blue">Kuivatus</h3>
    <hr style="width: 250px;">
    <?php if (have_rows('kuivatus_tingmargid')) : while (have_rows('kuivatus_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_1'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_1'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_2'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_2'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_3'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_3'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_4'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_4'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_5'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_5'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_6'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_6'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_7'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_7'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_8'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_8'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_9'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_9'); ?></p>
          </div>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5">

    <h3 class="px-5 py-3 color-ikomix-blue">Pleegitus</h3>
    <hr style="width: 250px;">
    <?php if (have_rows('pleegitus_tingmargid')) : while (have_rows('pleegitus_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_1'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_1'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_2'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_2'); ?></p>
          </div>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5">

    <h3 class="px-5 py-3 color-ikomix-blue">Triikimine</h3>
    <hr style="width: 250px;">
    <?php if (have_rows('triikimis_tingmargid')) : while (have_rows('triikimis_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_1'); ?>" alt="" />
            <p class="color-green"><?php the_sub_field('tingmargi_kirjeldus_1'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_2'); ?>" alt="" />
            <p class="color-red"><?php the_sub_field('tingmargi_kirjeldus_2'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_3'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_3'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_4'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_4'); ?></p>
          </div>
          <div class="col">
            <img src="<?php the_sub_field('tingmargi_pilt_5'); ?>" alt="" />
            <p class="color-beez"><?php the_sub_field('tingmargi_kirjeldus_5'); ?></p>
          </div>
      <?php endwhile;
    endif; ?>
  </section>


  <div class="box-text mt-5">
    <div class="p-5 teenused-nb color-ikomix-blue">
      <h2 class="pb-2 text-center "><?php the_field('teenused_nb'); ?></h2>
      <hr class="hr-header">
      <div class="px-5 mt-5 description">
        <?php the_field('teenused_nb_nimekiri'); ?>
      </div>
    </div>

  </div>


  <div class="description p-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</div>



<?php get_footer(); ?>