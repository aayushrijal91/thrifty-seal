<?php
/*
 * Template Name: Areas
 * The Areas page
 *
 */
get_header();
get_template_part('parts/section', 'banner');
$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'order'          => 'ASC',
    'orderby'        => 'publish_date',
    'meta_query' => array(
        array(
            'key' => '_wp_page_template',
            'value' => 'page-templates/suburb.php'
        )
    )
);
$the_query = new WP_Query($args);
?>
<section class="areas">
    <section class="areatop bg-areas-light">
        <div class="container">
            <?php  // The Loop
            if ($the_query->have_posts()) {
                $count = 0;
            ?>
                <h2 class="heading">Filter Search</h2>

                <div class="areas_droplist d-block d-md-none" data-aos="fade-up">
                    <div class="caption">All</div>
                    <div class="list">
                        <?php foreach (range('A', 'Z') as $char) {
                        ?>
                            <div class="areas_alphabet item" id="<?= $char ?>"><?= $char ?></div>
                        <?php } ?>
                    </div>
                </div>

                <div class="alphbetwrap d-none d-md-block" data-aos="fade-up">
                    <div class="areas_allSearch active">ALL</div>
                    <?php foreach (range('A', 'Z') as $char) {
                        $htm3[$char] = '';
                    ?>
                        <div class="areas_alphabet"><?= $char ?></div>
                    <?php while ($the_query->have_posts()) : $the_query->the_post();
                            $suburb_name = str_replace("Plumber ", '', get_the_title());
                            if (strpos($suburb_name, $char) === 0) {
                                $liclass = str_replace(' ', '-', strtolower($suburb_name));
                                $htm3[$char] .= '<li class="' . $liclass . '"><a href="' . get_site_url() . "/areas/plumber-" . $liclass . '">' . $suburb_name . '</a></li>';
                            }
                        endwhile;
                    } ?>
                </div>
            <?php } ?>
        </div>
    </section>
    <section class="areawrap section-space" data-aos="fade-up">
        <div class="container">
            <?php  // The Loop
            if ($the_query->have_posts()) {
                $count = 0;
            ?>
                <div class="arealistwrap">
                    <div class="row">
                        <?php foreach (range('A', 'Z') as $char) {
                            if (isset($htm3[$char]) && $htm3[$char] != '') {
                        ?>
                                <div class="col-lg-4 col-md-6 arealist char<?= $char ?> <?php echo ($count > 5) ? 'arealisthide' : ''; ?> ">
                                    <h3 class="alphabet-title font-weight-bold"><?= $char ?></h3>
                                    <ul>
                                        <?php echo $htm3[$char]; ?>
                                    </ul>
                                    <div class="mbottom "></div>
                                </div>
                        <?php $count++;
                            }
                        } ?>
                    </div>
                </div>
                <div class="noresult">No Result Found.</div>
                <div class="areas_loadMoreWrap "><a href="javascript:void(0)" class="areas_loadMoreBtn">Load More</a></div>
            <?php }
            wp_reset_postdata(); ?>

        </div>
    </section>
</section>

<section class="map">
    <iframe style="border: 0;" src="<?= get_field('map') ?>" allowfullscreen="allowfullscreen"></iframe>
</section>

<?php
get_template_part('parts/section', 'solutions');
get_footer();
?>