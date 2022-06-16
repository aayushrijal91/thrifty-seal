<?php
$banner_title = get_field('banner_title') != '' ? get_field('banner_title') : get_the_title();
$banner_sub_title = get_field('banner_sub_title');
$default_background = get_field('banner_background', 'options');
$banner_bg = $default_background['url'];
?>
<section class="banner lazyload <?= (is_front_page() ? 'front-page': '') ?>" data-src="<?= $banner_bg ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xxl-9">
                <h1><?= $banner_title ?></h1>
                <?php if (is_front_page() && (get_field('banner_sub_title') != '')) { ?>
                    <div class="subtitle"><?= $banner_sub_title ?></div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>