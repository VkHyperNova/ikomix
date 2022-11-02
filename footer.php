<?php wp_footer(); ?>



<footer class="footer-bg">
    <!-- Adress, Contacts, Register -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer_area_adress'); ?>
            </div>
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer_area_contacts'); ?>
            </div>
            <div class="col-sm-4">
                <?php dynamic_sidebar('footer_area_register'); ?>
            </div>
        </div>

        <!-- Partners -->
        <hr />
        <div class="partnerid-box">
            <div class="row">
                <div class="col-2 my-auto"><p class="partnerid-heading">Meie Partnerid >></p></div>
                <div class="col-10 my-auto"><?php dynamic_sidebar('footer_area_partners'); ?></div>
            </div>
            
            
        </div>
        <hr />

        <!-- Copyright -->
        <div class="footer-copyright">
            <span>© 2022 Copyright: ikomix.ee</span>
            | <a href="www.vk-dev.eu">vk-dev</a>
        </div>

    </div> <!-- container end -->
</footer>


</body>

</html>