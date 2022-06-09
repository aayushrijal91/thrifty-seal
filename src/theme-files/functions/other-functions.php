<?php

// enable ACF options page

if (function_exists('acf_add_options_page')) acf_add_options_page();

// CF7 remove auto p

add_filter('wpcf7_autop_or_not', '__return_false');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function footer_columns() {
    register_sidebar( array(
        'name' => 'Footer Column 1',
        'id' => 'footer_column_1',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 2',
        'id' => 'footer_column_2',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 3',
        'id' => 'footer_column_3',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 4',
        'id' => 'footer_column_4',
    ) );
    register_sidebar( array(
        'name' => 'Footer Column 5',
        'id' => 'footer_column_5',
    ) );
}
add_action( 'widgets_init', 'footer_columns' );
