<?php

require 'inc/wp_bootsrap_navwalker.php';

/**
 * Loading All CSS Stylesheets and Javascript Files.
 */
function wordpress_scripts_loader()
{
    $theme_version = wp_get_theme()->get('Version');

    // 1. Styles.
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', [], $theme_version, 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [], $theme_version, 'all'); // main.scss: Compiled Framework source + custom styles.

    if (is_rtl()) {
        wp_enqueue_style('rtl', get_template_directory_uri() . '/assets/css/rtl.css', [], $theme_version, 'all');
    }

    // 2. Scripts.
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.bundle.js', [], $theme_version, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


function montheme_register_asset () {
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', ['jquery']);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_title($title){
    return 'Salut';
}

function montheme_pagination() {
    $pages = paginate_links(['type' => 'array']);
    if($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class = "mt-4 mb-4">';
    echo '<ul class="pagination">';

    foreach($pages as $page){
        $active = strpos($page,'current') !== false;
        $class = 'page-item';
        if($active){
            $class .= 'active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers','page-link', $page);
        echo'</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function montheme_init(){
    register_post_type('projets',[
        'label' =>'projet',
        'public' => true,
        'menu_position' => 3,
        'menu_icon' => 'dashicons-cover-image',
        'supports' => ['title', 'editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' => [
            'slug' => 'projet',
            'with_front' => true
        ],
    ]);
}
add_action('init','montheme_init');

/*function get_background_image() {
    return get_theme_mod( 'background_image', get_theme_support( 'custom-background', 'default-image' ) );
}*/

add_action('wp_enqueue_scripts', 'wordpress_scripts_loader', 10);
add_action('wp_enqueue_scripts', 'montheme_register_asset', 9);

add_action('after_setup_theme', function(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('menus');
    register_nav_menu('header','En tête du menu');
    register_nav_menu('footer','Pied de page');

    add_image_size('card-header', 350, 215, true);

});

add_filter('wp_title','montheme_title');

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();


