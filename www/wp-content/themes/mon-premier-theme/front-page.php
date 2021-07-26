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
                <img src="<?= get_theme_file_uri("image/pexels-luis-gomes-546819.jpg")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="<?= get_theme_file_uri("image/pexels-manuel-geissinger-325229.jpg")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_theme_file_uri("image/pexels-markus-spiske-1089440.jpg")?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= get_theme_file_uri("image/pexels-pixabay-50711.jpg")?>" class="d-block w-100" alt="...">
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

            <h1 class="frontTitle"><?php the_title() ?></h1>

            <?php the_content() ?>

            <h2>Articles relatifs</h2>

        <div class="row">
            <?php
            $query= new WP_Query([
                'post_not_in' => [get_the_ID()],
                'post_type'=> 'post',
                'post_per_page' => 3,
                'orderby' => 'rand',
            ]);
            while($query->have_posts()):$query->the_post();
                ?>
                <div class="col-sm-4">
                    <?php get_template_part('parts/card', 'post'); ?>
                </div>
            <?php endwhile; wp_reset_postdata();?>

<!--            <a href="--><?//= get_post_type_archive_link('post'); ?><!--"> Voir les dernières actualités </a>-->

        <?php endwhile;?>
        </div>
    </div>
</div>
<?php get_footer() ?>

