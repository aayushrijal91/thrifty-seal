<?php

// enable ACF options page

if (function_exists('acf_add_options_page')) acf_add_options_page();

// CF7 remove auto p

add_filter('wpcf7_autop_or_not', '__return_false');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');
