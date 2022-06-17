<?php
$map_url = get_field('map') != '' ? get_field('map') :  get_field('map', 'options');
?>
<section class="map">
    <iframe style="border: 0;" src="<?= $map_url ?>" allowfullscreen="allowfullscreen"></iframe>
</section>