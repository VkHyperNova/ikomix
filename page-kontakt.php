<!-- Kontakt -->

<?php get_header(); ?>



<!-- Content -->
<div class="container page-content">

  <div class="description">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>

  <div class="row text-center">

    <!-- Aadress -->
    <div class="col-sm-4">

      <div class="contact-card">
        <div class="px-5 py-5">
          <i class="fa-solid fa-house"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_adress'); ?>
        </div>
      </div>
    </div>

    <!-- Phone -->
    <div class="col-sm-4">
      <div class="contact-card">
        <div class="px-5 py-5">
          <i class="fas fa-phone-square-alt"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_contacts'); ?>
        </div>
      </div>
    </div>

    <!-- Reg -->
    <div class="col-sm-4">
      <div class="contact-card">
        <div class="px-5 py-5">
          <i class="fas fa-address-card"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_register'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Google Maps -->
  <div class="mapouter">
    <div class="gmap_canvas">
      <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ikomix&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      <a href="https://fmovies-online.net">fmovies</a><br>
      <style>
        .mapouter {
          position: relative;
          text-align: right;
          height: 500px;
          width: 600px;
        }
      </style><a href="https://www.embedgooglemap.net"></a>
      <style>
        .gmap_canvas {
          overflow: hidden;
          background: none !important;
          height: 500px;
          width: 600px;
        }
      </style>
    </div>
  </div>


</div>



<?php get_footer(); ?>