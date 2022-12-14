<?php get_header(); ?>

<!-- Hinnakiri -->
<div class="container page-content">

  <!-- Table -->
  <div class="table-responsive glass">
    <?php $table = get_field('hinnakirja_tabel');
    if (!empty($table)) {
      echo '<table class="table">';
      if (!empty($table['caption'])) {
        echo '<caption>' . $table['caption'] . '</caption>';
      }
      if (!empty($table['header'])) {
        echo '<thead>';
        echo '<tr>';
        foreach ($table['header'] as $th) {
          echo '<th>';
          echo $th['c'];
          echo '</th>';
        }
        echo '</tr>';
        echo '</thead>';
      }
      echo '<tbody>';
      foreach ($table['body'] as $tr) {
        echo '<tr>';
        foreach ($tr as $td) {
          echo '<td>';
          echo $td['c'];
          echo '</td>';
        }
        echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
    } ?>
  </div>
  <!-- Table END -->

  <!-- Lisa -->
  <div class="mt-5 p-2 text-center color-ikomix-blue">
    <h5><?php the_field('tabeli_lisa_text'); ?></h5>
  </div>
  <!-- Lisa END -->

  <!-- Other WP Post -->
  <div class="description">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div> <!-- Other WP Post END -->

</div> <!-- Hinnakiri END -->

<?php get_footer(); ?>