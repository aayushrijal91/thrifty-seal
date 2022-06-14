<?php
/*
 * Template Name: FAQ
 * The FAQ page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
?>

<section class="faq">
    <div class="container">
        <div class="heading">Frequently Asked Questions</div>
        
        <div class="accordion-container">
            <?php
            $count = 0;
            if (have_rows('faqs')) :
                while (have_rows('faqs')) : the_row();
            ?>
                    <div class="accordion-card">
                        <div class="accordion-head<?= ($count == 0) ? ' active' : '' ?>">
                            <div class="main-question">
                                <div class="row no-gutters">
                                    <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                                    <div class="col-auto"><?= get_sub_field('question') ?></div>
                                </div>
                            </div>
                            <div class="plusminus">
                                <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#8DC63B" />
                                </svg>
                            </div>
                        </div>
                        <div class="accordion-body" <?= ($count == 0) ? 'style = "display: block;"': '' ?>>
                            <div class="row no-gutters">
                                <div class="col-auto text-primary pr-2 pr-md-4 h14 line-height-2">A:</div>
                                <div class="col">
                                    <?= get_sub_field('answer') ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                    $count++;
                endwhile;
            endif; ?>
            <!-- <div class="accordion-card">
                <div class="accordion-head active">
                    <div class="main-question">
                        <div class="row no-gutters">
                            <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                            <div class="col-auto">What are Grout Lines?</div>
                        </div>
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 8.83331C17.5909 8.99745 17.719 9.20037 17.814 9.4305C17.909 9.66063 17.9691 9.91346 17.9908 10.1745C18.0347 10.7018 17.9197 11.2308 17.6711 11.645C17.4224 12.0592 17.0606 12.3248 16.6651 12.3833C16.2696 12.4418 15.8729 12.2884 15.5622 11.957L9 4.95775L2.43782 11.957C2.12714 12.2884 1.73041 12.4418 1.33492 12.3833C0.939421 12.3248 0.577557 12.0592 0.328928 11.645C0.0802993 11.2308 -0.0347253 10.7018 0.00915708 10.1745C0.0530375 9.64725 0.252231 9.1648 0.562918 8.83331L8.06255 0.834208C8.32858 0.550233 8.65921 0.395508 9 0.395508C9.34079 0.395508 9.67142 0.550233 9.93745 0.834208L17.4371 8.83331Z" fill="#8DC63B" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body" style="display: block;">
                    <div class="row no-gutters">
                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                        <div class="col">
                            <div class="pb-3">A whitish residue on grout is typically caused by efflorescence. Efflorescence is the result of soluble salts or minerals that dissolve in water and come to the surface during evaporation. Efflorescence can come from moisture coming up through the cement slab or from the mortar itself.</div>
                            <div>Efflorescence can also occur when the water used to mix grout has a high mineral content.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question">
                        <div class="row no-gutters">
                            <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                            <div class="col-auto">Why does my Grout have a whitish haze-like residue on it that can’t get off?</div>
                        </div>
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row no-gutters">
                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                        <div class="col">If the shower is leaking and causing damage then yes, it is preferable to stop using the shower. However, in most cases it is usually quite a gradual leak so therefore the difference will be minimal between the time we quote to the time the work is completed so it is certainly not a necessity, especially if you only have the use of one shower. Once the shower has been re-grouted it will be 24 hours before it can be reused.</div>
                    </div>
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question">
                        <div class="row no-gutters">
                            <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                            <div class="col-auto">Why is it better to pay a professional to bring my tiles and grout back to life?</div>
                        </div>
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row no-gutters">
                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                        <div class="col">If the shower is leaking and causing damage then yes, it is preferable to stop using the shower. However, in most cases it is usually quite a gradual leak so therefore the difference will be minimal between the time we quote to the time the work is completed so it is certainly not a necessity, especially if you only have the use of one shower. Once the shower has been re-grouted it will be 24 hours before it can be reused.</div>
                    </div>
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question">
                        <div class="row no-gutters">
                            <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                            <div class="col-auto">How long do I have to wait to use the shower again once it has been re-grouted?</div>
                        </div>
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row no-gutters">
                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                        <div class="col">If the shower is leaking and causing damage then yes, it is preferable to stop using the shower. However, in most cases it is usually quite a gradual leak so therefore the difference will be minimal between the time we quote to the time the work is completed so it is certainly not a necessity, especially if you only have the use of one shower. Once the shower has been re-grouted it will be 24 hours before it can be reused.</div>
                    </div>
                </div>
            </div>
            <div class="accordion-card">
                <div class="accordion-head">
                    <div class="main-question">
                        <div class="row no-gutters">
                            <div class="col-auto text-primary pr-2 pr-md-4">Q:</div>
                            <div class="col-auto">How long will the new grout last?</div>
                        </div>
                    </div>
                    <div class="plusminus">
                        <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.4371 3.9577C17.5909 3.79357 17.719 3.59064 17.814 3.36051C17.909 3.13039 17.9691 2.87756 17.9908 2.61647C18.0347 2.08918 17.9197 1.56024 17.6711 1.14602C17.4224 0.731795 17.0606 0.46622 16.6651 0.407715C16.2696 0.34921 15.8729 0.502568 15.5622 0.834052L9 7.83327L2.43782 0.834051C2.12714 0.502567 1.73041 0.349209 1.33492 0.407714C0.939421 0.466219 0.577557 0.731794 0.328928 1.14602C0.0802993 1.56024 -0.0347253 2.08918 0.00915708 2.61647C0.0530375 3.14376 0.252231 3.62622 0.562918 3.9577L8.06255 11.9568C8.32858 12.2408 8.65921 12.3955 9 12.3955C9.34079 12.3955 9.67142 12.2408 9.93745 11.9568L17.4371 3.9577Z" fill="#8DC63B" />
                        </svg>
                    </div>
                </div>
                <div class="accordion-body">
                    <div class="row no-gutters">
                        <div class="col-auto text-primary pr-2 pr-md-4 h14">A:</div>
                        <div class="col">If the shower is leaking and causing damage then yes, it is preferable to stop using the shower. However, in most cases it is usually quite a gradual leak so therefore the difference will be minimal between the time we quote to the time the work is completed so it is certainly not a necessity, especially if you only have the use of one shower. Once the shower has been re-grouted it will be 24 hours before it can be reused.</div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>

<?php
get_template_part('parts/section', 'solutions');
get_footer();
?>