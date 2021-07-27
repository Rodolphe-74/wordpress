<?php get_header(); ?>

<div class="fil">
    <?php
    if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
    }
    ?>
</div>

<div class="cadreContact">
    <div class="titreContact">
        <?php the_title(); ?>
    </div>

    <div class="formulaire">
        <?php the_content(); ?>
    </div>
</div>

<?php get_footer(); ?>
