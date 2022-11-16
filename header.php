<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
</head>

<body <?php body_class(); ?>>

    <header class="sticky-top nav-bg">
        <nav class="navbar navbar-expand-md navbar-light " role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a href="http://www.ikomix.ee">
                    <img class="logo" alt="Ikomix logo" src="<?php echo get_template_directory_uri(); ?>/img/ikomix-logo.png">
                </a>

                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'top-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav ml-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav>
    </header>

    <!-- Main image -->
    <div class="page-image text-center">
        <div class="container">
            <h1 class="page-title py-4 text-center"><?php the_field('lehe_pealkiri'); ?></h1>
            <div class="page-desc">
                <h2 class="text-uppercase"><?php the_field('huud_lause_2'); ?></h2>
                <div class="row py-5">
                    <div class="col-6">
                        <h2 class="text-uppercase text-left"><?php the_field('huud_lause_1'); ?></h2>
                    </div>
                    <div class="col-6">
                        <h2 class="text-uppercase text-right"><?php the_field('huud_lause_3'); ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>