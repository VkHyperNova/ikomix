<!-- Kontakt -->

<?php get_header(); ?>

<!-- Background image -->
<div class="page-image p-5 text-center shadow-1-strong text-white">
  <div class="container">
    <h1 class="page-title my-5"><?php the_title(); ?></h1>
  </div>
</div>

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


</div>



<?php get_footer(); ?>