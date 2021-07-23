<nav class="navbar navbar-expand-lg navbar-light navAccueil">
    <div>
       <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(['theme_location' => 'header', 'container' => '', 'menu_class' => 'navbar-nav me-auto', 'walker' => new WP_Bootstrap_Navwalker()]) ?>
        </div>
    </div>
</nav>
<div class="container centered">