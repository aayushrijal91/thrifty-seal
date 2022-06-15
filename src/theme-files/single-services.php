<?php
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="service_inner">
    <div class="container">
        <div class="row justify-content-between align-items-center pb-2">
            <div class="col-6 heroHeading">
                <?= get_field('service_title') ?>
            </div>
            <div class="col-auto">
                <div class="row no-gutters">
                    <div class="col-auto">
                        <div class="no-hidden-cost">
                            <div class="row no-gutters">
                                <div class="col-auto">
                                    <svg width="43" height="39" viewBox="0 0 43 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M42.6295 37.0283L22.3069 0.360734C22.2431 0.261505 22.1554 0.179907 22.052 0.123403C21.9486 0.0668987 21.8326 0.0372925 21.7148 0.0372925C21.597 0.0372925 21.4811 0.0668987 21.3777 0.123403C21.2743 0.179907 21.1866 0.261505 21.1228 0.360734L0.800226 37.0283C0.742883 37.1316 0.713468 37.2482 0.714893 37.3665C0.716318 37.4847 0.748535 37.6006 0.808352 37.7025C0.868169 37.8045 0.953513 37.889 1.05593 37.9477C1.15835 38.0064 1.2743 38.0373 1.39229 38.0373H42.0374C42.1554 38.0373 42.2713 38.0064 42.3738 37.9477C42.4762 37.889 42.5615 37.8045 42.6213 37.7025C42.6812 37.6006 42.7134 37.4847 42.7148 37.3665C42.7162 37.2482 42.6868 37.1316 42.6295 37.0283ZM23.6502 12.9132L22.6822 26.9786H20.7468L19.7795 12.9132H23.6502ZM21.7148 33.9631C21.3129 33.9631 20.92 33.8436 20.5858 33.6198C20.2516 33.396 19.9911 33.0778 19.8373 32.7056C19.6835 32.3334 19.6432 31.9238 19.7216 31.5286C19.8001 31.1335 19.9936 30.7705 20.2778 30.4856C20.562 30.2007 20.9242 30.0067 21.3184 29.9281C21.7126 29.8495 22.1212 29.8898 22.4926 30.044C22.8639 30.1982 23.1813 30.4593 23.4046 30.7943C23.6279 31.1293 23.7471 31.5231 23.7471 31.926C23.7471 32.4663 23.533 32.9844 23.1519 33.3665C22.7707 33.7485 22.2538 33.9631 21.7148 33.9631Z" fill="white" />
                                    </svg>
                                </div>
                                <div class="col fw-700 h18 line-height-1 pl-4">
                                    Get a Free QUOTE today<br> with no hidden extras.
                                </div>
                            </div>
                            <div class="pt-3 h27">
                                Thrifty Seal will come to your home & give you an on-<br>the-spot assessment and price with no hidden extras.
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <img src="<?= get_template_directory_uri() ?>/images/lib/no-hidden-cost.png" alt="" class="h-100">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php if (have_rows('service_content')) :
            while (have_rows('service_content')) : the_row();
        ?>
                <div class="service_card" style="
                background: url(<?= get_sub_field('background_image')['url'] ?>) no-repeat top <?= get_sub_field("right_to_left") ? 'left' : 'right' ?>; background-size: contain;">
                    <div class="service_card_inner <?= get_sub_field("right_to_left") ? ' right_to_left' : 'left_to_right' ?>">
                        <div class="row<?= get_sub_field("right_to_left") ? ' justify-content-end' : '' ?>">
                            <div class="col-12 col-lg-6 service-description">
                                <?= get_sub_field('description') ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            endwhile;
        endif;
        ?>

    </div>
</section>

<?php
get_template_part('parts/section', 'quick-contact');
get_footer();
?>