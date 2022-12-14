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
    <h5 class="text-center"><?php the_field('teenused_lisaks'); ?></h5>
  </div> <!-- Pesuteenused END -->


  <!-- Tingmargid -->
  <section class="glass mb-5 p-5">
    <h2 class="color-ikomix-blue">Tingmärgid</h2>
    <hr style="width: 300px;" />

    <?php $ACF_ROWS = array("pesemise_tingmargid", "kuivatus_tingmargid", "pleegitus_tingmargid", "triikimis_tingmargid"); ?>
    <?php $ITEMS = count($ACF_ROWS) - 1 ?>
    <?php $NAMES = array("Pesemine", "Kuivatus", "Pleegitus", "Triikimine"); ?>
    <?php $NUMBERS = array(count(get_field('pesemise_tingmargid')) / 2, count(get_field('kuivatus_tingmargid')) / 2, count(get_field('pleegitus_tingmargid')) / 2, count(get_field('triikimis_tingmargid')) / 2); ?>

    <?php for ($ITEM = 0; $ITEM <= $ITEMS; $ITEM += 1) { ?>
      <?php $ROW_NAME = $ACF_ROWS[$ITEM] ?>
      <?php $MAX = $NUMBERS[$ITEM] ?>
      <h3 class="px-5 pt-5 text-center color-ikomix-blue"><?php print_r($NAMES[$ITEM]); ?></h3>
      <?php if (have_rows($ROW_NAME)) : while (have_rows($ROW_NAME)) : the_row(); ?>
          <div class="row p-5 text-center">
            <?php for ($x = 1; $x <= $MAX; $x += 1) { ?>
              <div class="col my-3">
                <img class="tingmargid-image" src="<?php the_sub_field('tingmargi_pilt_' . $x); ?>" alt="pilt" />
                <p class="mt-3"><strong><?php the_sub_field('tingmargi_kirjeldus_' . $x); ?></strong></p>
              </div>
            <?php } ?>
          </div>
      <?php endwhile;
      endif; ?>
    <?php } ?>
  </section> <!-- Tingmargid END -->


  <!-- Teadmiseks -->
  <div class="glass mt-5">
    <div class="p-5 teenused-nb color-ikomix-blue">
      <h2><?php the_field('teenused_nb'); ?></h2>
      <hr style="width: 200px;">
      <div class="px-5 mt-5 frontpage-description">
        <?php the_field('teenused_nb_nimekiri'); ?>
      </div>
    </div>
  </div> <!-- Teadmiseks END -->

  <!-- Other WP Post -->
  <div class="description">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div> <!-- Other WP Post END -->

</div> <!-- Pesuteenused END -->

<?php get_footer(); ?>