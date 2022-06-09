<?php
$logo = get_field('logo', 'options');
?>
<footer>
    <div class="footer-top-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-6">
                    <div class="text-white fw-600 h10">Don't pay for services you don't need! Get a FREE QUOTE today with no hidden extras.</div>
                    <div class="h25 text-grey pt-3 fw-500">Get In Touch With Thrifty Seal to save Today!</div>
                </div>
                <div class="col-lg-4">
                    <div class="row no-gutters">
                        <div class="col-6 pr-1">
                            <a href="<?= get_site_url() ?>/contact-us" class="btn btn-primary btn-block rounded-0 text-white text-uppercase fw-600 h25">Contact Us</a>
                        </div>
                        <div class="col-6 pl-1">
                            <a href="<?= get_site_url() ?>/contact-us" class="btn btn-dark-grey btn-block rounded-0 text-white text-uppercase fw-600 h25">Get A free quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-middle-bar">
        <div class="container">
            <div class="description">Once you book in your <span class="fw-800 text-primary">FREE ONSITE QUOTE</span>, Thrifty Seal will come to your home & give you an on-the-spot assessment & price with no hidden extras.</div>
            <hr>
            <div class="row justify-content-between align-items-center">
                <div class="col-auto"><a class="navbar" href="<?= home_url() ?>"><img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" /></a></div>
                <div class="col-auto"><img src="<?= get_template_directory_uri() ?>/images/icons/payment-methods.png"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-bar">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto text-white h24">
                    Copyright <?= date('Y') ?> Thrifty Seal <span class="text-primary">| All Rights Reserved</span>
                </div>
                <div class="col-auto pt-4 pt-md-0">
                    <div class="row no-gutters justify-content-center justify-content-lg-end align-items-center">
                        <div class="col-auto pr-2">
                            <img src="<?= get_template_directory_uri() ?>/images/logo/showmelocal.png" alt="Show Me Local">
                        </div>
                        <div class="col-auto pl-lg-5">
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
    <!-- <img src="<?= get_template_directory_uri() ?>/images/arrow-up.webp"> -->
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z" />
        </svg>
    </div>
</a>
<?php wp_footer(); ?>
</body>

</html>