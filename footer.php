<?php wp_footer(); ?>

<footer class="footer-bg">
    <!-- Adress, Contacts, Register -->
    <div class="container">
        <div class="row">
            <?php $APR = array("adress", "contacts", "register"); ?>
            <?php for ($x = 0; $x <= 2; $x += 1) { ?>
                <div class="col-md-4 col-sm-12">
                    <?php dynamic_sidebar('footer_area_' . $APR[$x]); ?>
                </div>
            <?php } ?>
        </div>
        <!-- Adress, Contacts, Register  END -->
        <hr />
        <!-- Partners -->
        <div class="row">
            <div class="col-lg-2 col-md-12 my-auto">
                <p class="partnerid-title">Meie Partnerid >></p>
            </div>
            <div class="col-lg-8 col-md-12 my-auto"><?php dynamic_sidebar('footer_area_partners'); ?></div>
            <div class="col-lg-2 col-md-12 pb-3">
                <img class="img-euroopaliit" alt="Toetab Euroopa Liit" title="Toetab Euroopa Liit" src="<?php echo get_template_directory_uri(); ?>/img/euroopaliit.png">
                <img class="img-euroopaliit" alt="Eesti Riiklik Arengukava" title="Eesti Riiklik Arengukava" src="<?php echo get_template_directory_uri(); ?>/img/RAK.png">
            </div>
        </div>
        <!-- Partners  END -->
        <hr />
        <!-- Copyright -->
        <div class="footer-copyright">
            <span>© 2022 Copyright: ikomix.ee</span>
            <a href="https://www.vk-dev.eu" title="Theme by VK">vk-dev</a>
        </div>
        <!-- Copyright END -->
    </div>
</footer>
</body>
</html>