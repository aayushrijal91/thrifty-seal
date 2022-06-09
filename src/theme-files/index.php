<?php
get_header();
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
            ?>
                    <div class="content">
                        <?= the_content() ?>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>