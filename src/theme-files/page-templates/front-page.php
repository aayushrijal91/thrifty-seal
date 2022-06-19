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
?>

<section class="homepage-form">
    <div class="covid-safe"><img src="<?= get_template_directory_uri() ?>/images/lib/covid-safe.png" alt="Covid Safe"></div>
    <div class="tools"><img src="<?= get_template_directory_uri() ?>/images/lib/tools.png" alt="Tools"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10 homepage-form-inner" id="quote">
                <div class="form_heading">Contact us today for a free on-site Quote</div>
                <?= do_shortcode('[contact-form-7 id="792" title="Quote Form Homepage"]') ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('parts/section', 'cta');
get_template_part('parts/section', 'solutions');
get_template_part('parts/section', 'compare-slider');
?>

<?php get_footer(); ?>