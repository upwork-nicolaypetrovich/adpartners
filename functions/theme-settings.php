<?php
/**
 * @package webdesignsuntheme
 */


// posts thumbnails support
add_theme_support( 'post-thumbnails' );


// removes comments from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'init', 'remove_comment_support', 100 );
function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'comments' );
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );


// menus
register_nav_menus(array(
    'main'    => 'Main Menu',
));


// registering image dimensions
add_theme_support( 'post-thumbnails' );
add_image_size( 'testimonial', 44, 44, true );
add_image_size( 'featured-grid', 440, 300, true );
add_image_size( 'featured-slider', 864, 468, true );
add_image_size( 'featured-carousel', 400, 300, true );
add_image_size( 'landing-side-image', 920, 400, true );
add_image_size( 'team-photo', 360, 240, true );
add_image_size( 'partners-image', 54, 54, true );
