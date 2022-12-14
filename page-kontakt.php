<?php get_header(); ?>

<!-- Kontakt -->
<div class="container page-content">
  <div class="row text-center color-ikomix-blue">

    <!-- APR (Aadres, Phone, Register) -->
    <?php $APR = array("adress", "contacts", "register"); ?>
    <?php $icons = array("fa-solid fa-house", "fas fa-phone-square-alt", "fas fa-address-card"); ?>
    <?php for ($x = 0; $x <= 2; $x += 1) { ?>
      <div class="col-sm-12 col-lg-4 mb-5">
        <div class="glass custom-center-margin" style="min-height: 280px; max-width: 350px;">
          <div class="p-5">
            <i class="<?php echo $icons[$x] ?>"></i>
          </div>
          <div class="pb-5">
            <?php dynamic_sidebar('footer_area_' . $APR[$x]); ?>
          </div>
        </div>
      </div>
    <?php } ?>
  </div> <!-- APR END -->
  
<!-- Google Maps -->
<div class="row my-5">
    <div class="col-sm-12 col-lg-6 mb-5">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ikomix&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-lg-6 mb-5">
      <img style="border-radius: 1rem;" width="100%" height="500" alt="Ikomix" src="<?php echo get_template_directory_uri(); ?>/img/ikomix-maja.jpg">
    </div>
  </div> <!-- Google Maps END -->
  

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
  </section> <!-- Email END -->
  
</div>  <!-- Kontakt END -->

<?php get_footer(); ?>