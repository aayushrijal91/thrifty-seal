<?php
/*
 * Template Name: Contact Us
 * The Contact Us page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="contact-us">
    <div class="container">
        <div class="contact-us-wrapper">
            <div class="form_heading">Booking Form</div>
            <div class="text-darker-grey h14 pt-3">Simply complete our form below & we’ll get back to you as soon as possible</div>
            <?= do_shortcode('[contact-form-7 id="793" title="Contact Us"]') ?>
        </div>
    </div>
</section>

<?php
get_template_part('parts/section', 'compare-slider');
get_footer();
?>