

<div class="backgroundImage">
<?php while(have_posts()):the_post() ?>
<h1><?php the_title() ?></h1>

    <?php get_header('home') ?>

<?php the_content() ?>

<a href="<?= get_post_type_archive_link('post'); ?>"> Voir les dernières actualités </a>

<?php endwhile;?>
</div>
<?php get_footer() ?>

