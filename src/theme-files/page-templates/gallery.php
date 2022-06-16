<?php
/*
 * Template Name: Gallery
 * The Gallery page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="gallery">
    <div class="container">
        <div class="row">
            <?php if (have_rows('gallery', 'option')) :
                while (have_rows('gallery', 'option')) : the_row(); ?>
                    <div class="col-md-6 col-lg-4 gallery-compare-wrapper">
                        <div class="cocoen">
                            <img src="<?= get_sub_field('before_image')['url'] ?>" alt="<?= get_sub_field('before_image')['alt'] ?>" class="before-img">
                            <img src="<?= get_sub_field('after_image')['url'] ?>" alt="<?= get_sub_field('after_image')['alt'] ?>" class="after-img">
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>

<?php
get_template_part('parts/section', 'quick-contact');
get_template_part('parts/section', 'solutions');
get_footer();
?>