<?php
/*
 * Template Name: Home Page
 * The home page
 *
 */
get_header();
?>

<?php
get_template_part('parts/section', 'banner');
get_template_part('parts/section', 'services');
get_template_part('parts/section', 'solutions');
get_template_part('parts/section', 'compare-slider');
?>

<?php get_footer(); ?>