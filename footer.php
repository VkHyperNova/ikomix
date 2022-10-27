<?php wp_footer(); ?>



<footer class="footer-bg">

    <!-- Partners -->
    <nav class="navbar navbar-expand-md" role="navigation">
            <div class="container justify-content-center">
            
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'footer-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => '',
                    'container_id'      => '',
                    'menu_class'        => 'nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ));
                ?>
            </div>
        </nav>
    <!-- Partners -->

    <!-- Copyright -->
    <div class="text-center py-3 text-light">© 2022 Copyright:
        <span> ikomix.ee</span>
    </div>
    <!-- Copyright -->

</footer>


</body>

</html>