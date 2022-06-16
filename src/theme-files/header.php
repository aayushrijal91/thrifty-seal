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
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="header-top-bar">
            <div class="container-fluid">
                <div class="row justify-content-center justify-content-lg-between align-items-center pl-lg-4">
                    <div class="col-auto col-xxl pt-4 pt-lg-0">
                        <a class="navbar-brand" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a>
                    </div>
                    <div class="col-md-auto pt-4 pt-md-0">
                        <div class="row no-gutters align-items-center justify-content-center justify-content-md-between">
                            <div class="col-md-6 col-lg-auto py-2 py-md-4 py-lg-0">
                                <div class="text-uppercase text-white fw-600 h27 px-lg-4">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <img src="<?= get_template_directory_uri() ?>/images/icons/header-top-dollar.png" class="pr-3">
                                        </div>
                                        <div class="col">We Don't want you to pay for services you do not need</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 col-lg-auto py-2 py-md-4 py-lg-0">
                                <div class="text-uppercase text-white fw-600 h27 px-lg-5">
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
                    <a href="tel: <?= get_field('phone_number', 'options') ?>" class="btn btn-primary">Get a free on-site quote</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#baywashMainNav" aria-controls="baywashMainNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="baywashMainNav">
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
        </div>
    </header>