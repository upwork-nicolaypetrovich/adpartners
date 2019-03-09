<?php
/**
 *
 * Load theme's JavaScript and CSS sources.
 *
 * @package webdesignsuntheme
 */


if ( ! function_exists( 'webdesignsuntheme_scripts' ) ) {
    function webdesignsuntheme_scripts() {

        // slick styles
        wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', array(), '1.9.0' );

        // main styles
        wp_enqueue_style( 'webdesignsuntheme-style', STYLES_DIR . 'assets/style.css', array(), wp_get_theme()->get('Version') );

        // jquery
        wp_deregister_script('jquery');
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', array(), '3.3.1', true);

        // slick scripts
        wp_enqueue_script('slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '1.9.0', true);

        // main scripts
        wp_enqueue_script('webdesignsuntheme-scripts', STYLES_DIR . 'assets/scripts/main.js', array('jquery', 'slick'), wp_get_theme()->get('Version'), true);
        
        // ajax script
        wp_localize_script( 'webdesignsuntheme-scripts', 'front_ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

    }
    add_action( 'wp_enqueue_scripts', 'webdesignsuntheme_scripts' );
}