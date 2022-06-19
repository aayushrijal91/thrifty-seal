<?php

/**
 * The template for displaying the header
 * 
 */

$logo = get_field('logo', 'options');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-PDQZSNS');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51334946-22"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'AW-709699969');
        gtag('config', 'UA-51334946-22');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-709699969"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'AW-709699969');
    </script>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDQZSNS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header">
        <div class="header-top-bar">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center pl-xxl-4">
                    <div class="col-auto col-xxl pt-4 pt-lg-0">
                        <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                    </div>
                    <div class="col-md-auto col-xl col-xxl-auto pt-4 pt-md-0">
                        <div class="row no-gutters align-items-center justify-content-center justify-content-md-between">
                            <div class="col-md-6 col-lg col-xxl-auto py-2 py-md-4 py-lg-0">
                                <div class="text-uppercase text-white fw-600 h27 px-lg-2 px-xxl-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= get_template_directory_uri() ?>/images/icons/header-top-dollar.png" class="pr-3">
                                        </div>
                                        <div class="col">We Don't want you to pay for services you do not need</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg col-xxl-auto py-2 py-md-4 py-lg-0">
                                <div class="text-uppercase text-white fw-600 h27 px-lg-2 px-xxl-5">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= get_template_directory_uri() ?>/images/icons/header-top-hrs.png" class="pr-3">
                                        </div>
                                        <div class="col">All Calls Answered Immediately</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-4 col-lg-auto py-3 py-md-0">
                                <a href="tel: <?= get_field('phone_number', 'options') ?>" class="btn btn-block btn-black text-white fw-800 px-4">$0 Call Out Fee</a>
                            </div>
                            <div class="col-6 col-md-4 col-lg-auto py-3 py-md-0">
                                <a href="tel: <?= get_field('phone_number', 'options') ?>" class="btn btn-block btn-primary text-white fw-800 px-4"><?= get_field('phone_number', 'options') ?></a>
                            </div>
                            <div class="col-auto col-md-4 col-lg-auto pl-md-4 pr-2 pt-3 pb-4 py-md-0">
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <?php if (have_rows('social_media', 'option')) : ?>
                                            <?php while (have_rows('social_media', 'option')) : the_row();
                                                $social_icon = get_sub_field('social_icon');
                                                $social_url = get_sub_field('social_media_url');
                                            ?>
                                                <a href="<?= $social_url['url'] ?>" class="social-icon" target="_blank"><img src="<?= $social_icon['url'] ?>" alt="<?= $social_icon['alt'] ?>"></a>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom-bar">
            <div class="container px-md-0 px-lg-3">
                <nav class="navbar navbar-expand-xl navbar-light p-0 px-xxl-5">
                    <a href="<?= (is_front_page() ? '#quote': get_site_url().'/#quote') ?>" class="btn btn-primary">Get a free on-site quote</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#thriftySealMainNav" aria-controls="thriftySealMainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="thriftySealMainNav">
                        <?php wp_nav_menu(array(
                            'menu' => 'Primary Menu',
                            'menu_class' => 'navbar-nav w-100 justify-content-between',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link',
                            'container_class' => 'mobile-menu w-100',
                            'container_id' => '',
                        )); ?>
                    </div>
                </nav>
            </div>
            <?php get_template_part('parts/section', 'service-dropdown'); ?>
        </div>
    </header>