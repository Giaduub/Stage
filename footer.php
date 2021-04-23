

<?php wp_footer(); ?>

<footer>
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-sm-12 col-md-3 col-lg-3">
                <p class="white ubuntu">La couveuse des innovateurs</p>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3">
            <?= the_custom_logo(); ?>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
            <a href="<?= site_url()."";?>">Accueil</a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
            <a href="<?= site_url()."/mentions-legales";?>">Mentions légales</a>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2">
                <a href="<?= site_url()."/politique-de-confidentialite";?>">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>







<script src="<?= site_url()."/wp-content/themes/".get_template()."/javascript/slider.js"; ?>">
    </script>
    <script src="<?= site_url()."/wp-content/themes/".get_template()."/javascript/menu.js"; ?>">
    </script>
    <script src="<?= site_url()."/wp-content/themes/".get_template()."/javascript/collapse.js"; ?>">
    </script>
</body>

</html>