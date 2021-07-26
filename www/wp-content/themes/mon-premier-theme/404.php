<?php get_header(); ?>

<?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>


<h1>Page introuvable</h1>
<p>
    Cette page n'existe pas
</p>


<?php get_footer(); ?>
