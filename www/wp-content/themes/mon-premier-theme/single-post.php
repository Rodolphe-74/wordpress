<?php get_header(); ?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>

<?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
        <h1 class="titreArticle"><?php the_title() ?></h1>

    <?php if(get_post_meta(get_the_ID(),SponsoMetaBox::META_KEY, true) === '1'): ?>
    <div class="alert alert-info">
        Cet article est sponsorisé
    </div>
    <?php endif ?>
<div class="article">
    <div class="image">
    <p>
        <img src="<?php the_post_thumbnail_url() ?>" alt="" style="width:100%; height:auto;">
    </p>
    </div>

    <div class="content">
        <?php the_content() ?>
    </div>
</div>
    <?php endwhile ?>



<?php else: ?>
    <h1> Pas d'article </h1>
<?php endif; ?>

<?php get_footer(); ?>
