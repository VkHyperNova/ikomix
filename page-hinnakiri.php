<!-- Hinnakiri -->
<?php get_header(); ?>

<!-- Content -->
<div class="container page-content">


  <!-- Table -->
  <?php $table = get_field('hinnakirja_tabel');
  if (!empty($table)) {
    echo '<table>';
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
  <div class="my-5 p-2 text-center">
    <h5><?php the_field('tabeli_lisa_text'); ?></h5>
  </div>



  <div class="description p-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;
    endif; ?>
  </div>

</div>



<?php get_footer(); ?>