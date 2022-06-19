<section class="quick-contact">
    <div class="container">
        <div class="quick-contact-main">
            <div class="heroHeading">Don't miss out on a FREE ONSITE QUOTE</div>
            <div class="subHeading">We come to you & give you an on-the-spot assessment & price with no hidden extras!</div>
            <div class="row justify-content-center pt-5">
                <div class="col-md-11 col-lg-10 col-xl-7">
                    <div class="row no-gutters">
                        <div class="col-12 col-md-4 px-2">
                            <a href="<?= (is_front_page() ? '#quote': get_site_url().'/#quote') ?>" class="btn btn-block btn-dark">Get Quote</a>
                        </div>
                        <div class="col-12 col-md-4 px-2">
                            <a href="tel: <?= get_field('phone_number', 'options') ?>" class="btn btn-block btn-darker">Call Now</a>
                        </div>
                        <div class="col-12 col-md-4 px-2">
                            <a href="<?= get_site_url() ?>/contact-us" class="btn btn-block btn-black">Book Online</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>