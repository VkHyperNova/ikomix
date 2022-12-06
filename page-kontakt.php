<!-- Kontakt -->

<?php get_header(); ?>



<!-- Content -->
<div class="container page-content">

  <div class="row text-center color-ikomix-blue">

    <!-- Aadress -->
    <div class="col-sm-12 col-lg-4 mb-5">
      <div class="glass custom-center-margin">
        <div class="p-5">
          <i class="fa-solid fa-house"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_adress'); ?>
        </div>
      </div>
    </div>

    <!-- Phone -->
    <div class="col-sm-12 col-lg-4 mb-5">
      <div class="glass custom-center-margin">
        <div class="p-5">
          <i class="fas fa-phone-square-alt"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_contacts'); ?>
        </div>
      </div>
    </div>

    <!-- Reg -->
    <div class="col-sm-12 col-lg-4 mb-5">
      <div class="glass custom-center-margin" style="min-height: 280px;">
        <div class="p-5">
          <i class="fas fa-address-card"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_register'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Email -->
  <section class="p-2">
    <div class="row">
      <div class="custom-center-margin">
        <div class="glass">
            <h3 class="px-5 pt-5 color-ikomix-blue text-center">Kirjuta Meile!</h3>

          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <?php the_content(); ?>
          <?php endwhile;
          endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps -->

  <div class="row my-5">
    <div class="col-sm-12 col-lg-6 mb-5">
      <img class="box-image" width="100%" height="500" alt="Ikomix" src="<?php echo get_template_directory_uri(); ?>/img/ikomix-maja.jpg">
    </div>
    <div class="col-sm-12 col-lg-6 mb-5">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ikomix&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
    </div>
  </div>





</div>



<?php get_footer(); ?>