<?php get_header('home') ?>
<div class="homepage">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= get_theme_file_uri("image/landscape-78058_1920.jpg")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_theme_file_uri("image/pexels-johannes-plenio-2080963.jpg")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_theme_file_uri("image/pexels-samuel-silitonga-694587.jpg")?>" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <div>
        <?php while(have_posts()):the_post() ?>

            <h1><?php the_title() ?></h1>

            <?php the_content() ?>

            <a href="<?= get_post_type_archive_link('post'); ?>"> Voir les dernières actualités </a>

        <?php endwhile;?>
    </div>
</div>
<?php get_footer() ?>

