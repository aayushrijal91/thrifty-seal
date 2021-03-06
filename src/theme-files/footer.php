<?php
$logo = get_field('logo', 'options');
?>
<footer>
    <div class="footer-top-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7">
                    <div class="text-white fw-600 h10">Don't pay for services you don't need! Get a FREE QUOTE today with no hidden extras.</div>
                    <div class="h25 text-grey pt-3 fw-500">Get In Touch With Thrifty Seal to save Today!</div>
                </div>
                <div class="col-md-5 col-lg-4 pt-4 pt-md-0">
                    <div class="row no-gutters">
                        <div class="col-6 col-md-12 col-xl-6 pr-1 pr-md-0 pr-xl-1 py-md-1 py-xl-0">
                            <a href="<?= get_site_url() ?>/contact-us" class="btn btn-primary btn-block rounded-0 text-white text-uppercase fw-600 h25">Contact Us</a>
                        </div>
                        <div class="col-6 col-md-12 col-xl-6 pl-1 pl-md-0 pl-xl-1 py-md-1 py-xl-0">
                            <a href="<?= (is_front_page() ? '#quote' : get_site_url() . '/#quote') ?>" class="btn btn-dark-grey btn-block rounded-0 text-white text-uppercase fw-600 h25">Get A free quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle-bar">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6 col-md-4 col-xl-1">
                    <div class="footer-column">
                        <h2>Home</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'Footer Home Menu',
                            'menu_class' => 'navbar-nav w-100 justify-content-between',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link py-0',
                            'container_class' => 'mobile-menu w-100',
                            'container_id' => '',
                        )); ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="footer-column">
                        <h2>Services</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'Footer Service Menu 1',
                            'menu_class' => 'navbar-nav w-100 justify-content-between',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link py-0',
                            'container_class' => 'mobile-menu w-100',
                            'container_id' => '',
                        )); ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-2">
                    <div class="footer-column">
                        <h2>Services</h2>
                        <?php wp_nav_menu(array(
                            'menu' => 'Footer Service Menu 2',
                            'menu_class' => 'navbar-nav w-100 justify-content-between',
                            'item_class' => 'nav-item',
                            'link_class' => 'nav-link py-0',
                            'container_class' => 'mobile-menu w-100',
                            'container_id' => '',
                        )); ?>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <div class="footer-column">
                        <h2>Contact Us</h2>
                        <iframe src="<?= get_field('map', 'options') ?>" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-xl-auto">
                    <div class="social-column">
                        <?php if (have_rows('social_media', 'option')) : ?>
                            <?php while (have_rows('social_media', 'option')) : the_row();
                                $social_icon = get_sub_field('social_icon');
                                $social_url = get_sub_field('social_media_url');
                                $username = get_sub_field('username');
                            ?>
                                <div class="sub-social">
                                    <a href="<?= $social_url['url'] ?>" class="social-icon" target="_blank">
                                        <img src="<?= $social_icon['url'] ?>" class="pr-3" alt="<?= $social_icon['alt'] ?>"><?= $username ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="description">Once you book in your <span class="fw-800 text-primary">FREE ONSITE QUOTE</span> Thrifty Seal will come to your home & give you an on-the-spot assessment & price with no hidden extras.</div>
            <hr>
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-md col-lg-auto"><a class="navbar" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" class="w-100" alt="<?= $logo['alt']; ?>" /></a></div>
                <div class="col-auto pt-4 pt-md-0"><img src="<?= get_template_directory_uri() ?>/images/icons/payment-methods.png"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-bar">
        <div class="container">
            <div class="row justify-content-center justify-content-md-between align-items-center">
                <div class="col-auto text-white h24">
                    Copyright <?= date('Y') ?> Thrifty Seal <span class="text-primary">| All Rights Reserved</span>
                </div>
                <div class="col-auto pt-4 pt-md-0">
                    <div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-auto pr-2">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/showmelocal.png" alt="Show Me Local">
                        </div>
                        <div class="col-auto pl-4 pl-lg-5">
                            <a href="https://www.aiims.com.au/like-our-work/" target="_blank">
                                <img src="<?= get_template_directory_uri() ?>/images/logo/aiims.png" alt="Aiims Group Pty. Ltd">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<a href="javascript:" id="return-to-top">
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </div>
</a>

<script>
    document.addEventListener('wpcf7mailsent', function(event) {
        if ('792' == event.detail.contactFormId) {
            location = '/thank-you-quote';
        } else if ('793' == event.detail.contactFormId) {
            location = '/thank-you';
        }
    }, false);
</script>
<?php
if (get_the_ID() == 887) {
?>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-709699969/4YguCImH7aoBEIHTtNIC'
        });
    </script>
<?php
} else if (get_the_ID() == 890) {
?>
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-709699969/XbI9CKmV6MYDEIHTtNIC'
        });
    </script>
<?php
}
?>
<?php wp_footer(); ?>
</body>

</html>