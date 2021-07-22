<?php get_header(); ?>

<?php single_post_title(); ?>

<?php if (have_posts()): ?>
<div class="row">
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
