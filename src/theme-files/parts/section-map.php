<?php
$map_url = get_field('map') != '' ? get_field('map') : 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d424141.6981427325!2d150.9319747!3d-33.8482439!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf03e5045f618a9c5!2sThrifty%20Seal%20Pty%20Ltd!5e0!3m2!1sen!2sau!4v1655356474784!5m2!1sen!2sau';
?>
<section class="map">
    <iframe style="border: 0;" src="<?= $map_url ?>" allowfullscreen="allowfullscreen"></iframe>
</section>