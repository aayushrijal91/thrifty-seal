<section class="compare-slider">
    <div class="container-fluid">
        <div class="row no-gutters justify-content-center">
            <?php if (have_rows('gallery', 'option')) :
                for ($i = 0; $i < 3; $i++) : the_row();
            ?>
                    <div class="col-12 col-md-6 col-xl-4 py-2 p-md-3 py-xl-0">
                        <div class="cocoen">
                            <img src="<?= get_sub_field('before_image')['url'] ?>" alt="<?= get_sub_field('before_image')['alt'] ?>" class="before-img">
                            <img src="<?= get_sub_field('after_image')['url'] ?>" alt="<?= get_sub_field('after_image')['alt'] ?>" class="after-img">
                        </div>
                    </div>
            <?php
                endfor;
            endif;
            ?>
        </div>
    </div>
</section>