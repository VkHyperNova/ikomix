<!-- Teenused -->
<?php get_header(); ?>

<!-- Pesuteenused -->
<div class="container page-content">
  <div class="glass mb-5 p-5">

    <h2 class="color-ikomix-blue"><?php the_field('teenused_pealkiri'); ?></h2>
    <hr style="width: 300px;">
    <h4 class="pt-5 text-center color-ikomix-blue"><?php the_field('teenused_alapealkiri'); ?></h4>

    <div class="row">
      <div class="col-md-12 col-lg-6 p-5">
        <div class="teenused-nimekiri">
          <?php the_field('teenused_nimekiri'); ?>
        </div>
      </div>
      <div class="col-md-12 col-lg-6 p-5 text-center">
        <img class="teenused-pilt img-fluid" src="<?php the_field('teenused_pilt'); ?>" alt="pilt" />
      </div>

    </div>

    <hr class="my-5 hr-center">

    <h5 class="text-center color-ikomix-blue"><?php the_field('teenused_lisaks'); ?></h5>
    
  </div>
  <!-- Pesuteenused END -->

  <!-- Tingmargid -->
  <section class="glass mb-5 p-5">
    <h2 class="color-ikomix-blue">Tingmärgid</h2>
    <hr style="width: 300px;" />

    <h3 class="px-5 pt-5 text-center color-ikomix-blue">Pesemine</h3>
    <?php if (have_rows('pesemise_tingmargid')) : while (have_rows('pesemise_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <?php for ($x = 1; $x <= 7; $x += 1) { ?>
            <div class="col my-3">
              <img class="tingmargid-image" src="<?php the_sub_field('tingmargi_pilt_' . $x); ?>" alt="pilt" />
              <p class="mt-3"><?php the_sub_field('tingmargi_kirjeldus_' . $x); ?></p>
            </div>
          <?php } ?>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5 hr-center">

    <h3 class="px-5 py-3 text-center color-ikomix-blue">Kuivatus</h3>
    <?php if (have_rows('kuivatus_tingmargid')) : while (have_rows('kuivatus_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <?php for ($x = 1; $x <= 9; $x += 1) { ?>
            <div class="col my-3">
              <img class="tingmargid-image" src="<?php the_sub_field('tingmargi_pilt_' . $x); ?>" alt="pilt" />
              <p class="mt-3"><?php the_sub_field('tingmargi_kirjeldus_' . $x); ?></p>
            </div>
          <?php } ?>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5 hr-center">

    <h3 class="px-5 py-3 text-center color-ikomix-blue">Pleegitus</h3>
    <?php if (have_rows('pleegitus_tingmargid')) : while (have_rows('pleegitus_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <?php for ($x = 1; $x <= 2; $x += 1) { ?>
            <div class="col my-3">
              <img class="tingmargid-image" src="<?php the_sub_field('tingmargi_pilt_' . $x); ?>" alt="pilt" />
              <p class="mt-3"><?php the_sub_field('tingmargi_kirjeldus_' . $x); ?></p>
            </div>
          <?php } ?>
        </div>
    <?php endwhile;
    endif; ?>

    <hr class="my-5 hr-center">

    <h3 class="px-5 py-3 text-center color-ikomix-blue">Triikimine</h3>
    <?php if (have_rows('triikimis_tingmargid')) : while (have_rows('triikimis_tingmargid')) : the_row(); ?>
        <div class="row p-5 text-center">
          <?php for ($x = 1; $x <= 5; $x += 1) { ?>
            <div class="col my-3">
              <img class="tingmargid-image" src="<?php the_sub_field('tingmargi_pilt_' . $x); ?>" alt="pilt" />
              <p class="mt-3"><?php the_sub_field('tingmargi_kirjeldus_' . $x); ?></p>
            </div>
          <?php } ?>
      <?php endwhile;
    endif; ?>
  </section>
  <!-- Tingmargid END -->

  <!-- Teadmiseks -->
  <div class="glass mt-5">
    <div class="p-5 teenused-nb color-ikomix-blue">
      <h2><?php the_field('teenused_nb'); ?></h2>
      <hr style="width: 200px;">
      <div class="px-5 mt-5 frontpage-description">
        <?php the_field('teenused_nb_nimekiri'); ?>
      </div>
    </div>
  </div>
  <!-- Teadmiseks END -->

  <div class="description">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>


</div>



<?php get_footer(); ?>