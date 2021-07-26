<?php get_header(); ?>

<?php if (have_posts()): ?>
<div class="row parcours">
    <h1> Mon parcours </h1>
    <?php while (have_posts()): the_post(); ?>

    <div class="col-sm-4">
        <?php get_template_part('parts/card', 'post'); ?>
    </div>
    <?php endwhile ?>

   <?php montheme_pagination() ?>

</div>
<?php else: ?>
    <h1> Pas d'article </h1>
<?php endif; ?>

<?php get_footer(); ?>
