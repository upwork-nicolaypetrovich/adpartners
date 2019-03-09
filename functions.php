<?php
/**
 * @package webdesignsuntheme
 */


// defining constants
define( 'THEME_DIR', get_template_directory() . '/' );
define( 'STYLES_DIR', get_stylesheet_directory_uri() . '/' );


// components list
$components = [
    'theme-settings', // initialize theme default settings
    'enqueue',        // enqueue scripts and styles
    'ajax',           // ajax scripts
    'customizer'      // customizer additions
];


// including components
foreach ($components as $component)
    require THEME_DIR . 'functions/' . $component . '.php';
