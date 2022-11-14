<!-- Kontakt -->

<?php get_header(); ?>



<!-- Content -->
<div class="container page-content">

  

  <div class="row text-center">

    <!-- Aadress -->
    <div class="col-sm-4">
      <div class="box-card">
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
      <div class="box-card">
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
      <div class="box-card" style="min-height: 280px;">
        <div class="px-5 py-5">
          <i class="fas fa-address-card"></i>
        </div>
        <div class="pb-5">
          <?php dynamic_sidebar('footer_area_register'); ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Email -->
  <section class="mb-4 p-5 my-5">
    <h2 class="h1-responsive font-weight-bold text-center my-4">Küsi Hinnapakkumist!</h2>
    <div class="row">
        <div class="col-md-9 mb-md-0 mb-5 custom-center-margin">
        <div class="box-text">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                <div class="row pt-5 px-4">
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Nimi">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="row px-4">
                    <div class="col-md-12">
                        <div class="md-form mb-4">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Pealkiri">
                        </div>
                    </div>
                </div>
                <div class="row px-4">
                    <div class="col-md-12">
                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="10" class="form-control md-textarea" placeholder="Sõnum"></textarea>
                        </div>
                    </div>
                </div>
            </form>

            <div class="text-right my-4 pb-4 px-4">
                <a class="btn " onclick="document.getElementById('contact-form').submit();">Saada Kiri</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->
        </div>


    </div>

</section>

  <!-- Google Maps -->
  <div class="my-5">
    <h2 class="pb-5 text-center">Meie Asukoht Kaardil</h2>
    <div class="mapouter">
      <div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=ikomix&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
      </div>
    </div>

  </div>
  <img class="box-image" width="100%" alt="Ikomix" src="<?php echo get_template_directory_uri(); ?>/img/ikomix-maja.jpg">


  <div class="description">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>

</div>



<?php get_footer(); ?>