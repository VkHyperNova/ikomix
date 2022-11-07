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
  <p>(Poolik)</p>
  <div class="row">
    <div class="col-xs-4 custom-center-margin">
      <div class="card" style="width:200px">
        <div class="card-body text-center">
          <h4 class="card-title">Aadress</h4>
          <ul>
            <li>Valgjärve, 63402</li>
            <li>Valgjärve vald</li>
            <li>Põlvamaa</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-xs-4 custom-center-margin">
    <div class="card" style="width:200px">
    <div class="card-body text-center">
      <h4 class="card-title">Telefon</h4>
      <ul>
        <li>Tel. +372 79 70 799</li>
        <li>Fax +372 79 70 799</li>
        <li>+372 53 018 229</li>
      </ul>
    </div>
  </div>
    </div>
    <div class="col-xs-4 custom-center-margin">
    <div class="card" style="width:200px">
    <div class="card-body text-center">
      <h4 class="card-title">Email</h4>
      <ul>
        <li><a href="mailto:info@ikomix.ee">info@ikomix.ee</a></li>
      </ul>
    </div>
  </div>
    </div>
  </div>

  <div class="description">
    <h1>poolik</h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>
</div>



<?php get_footer(); ?>