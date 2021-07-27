<?php get_header(); ?>

<div class="fil">
<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
</div>

<h1 class="pageProjet">Mes projets</h1>

<?php if (have_posts()): ?>
<div class="row">
    <?php while (have_posts()): the_post(); ?>

    <div class="col-sm-4">
            <?php get_template_part('parts/card', 'post'); ?>
    </div>
    <?php endwhile; ?>
</div>

<div>
   <?php montheme_pagination() ?>
</div>

<?php else: ?>
    <h1> Pas d'article </h1>
<?php endif; ?>

<?php get_footer(); ?>
