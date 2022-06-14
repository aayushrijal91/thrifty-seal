<?php
$map_url = get_field('map') != '' ? get_field('map') : 'https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d106031.32852148126!2d151.0687252798525!3d-33.85154387728277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sau!4v1646701185664!5m2!1sen!2sau';
?>
<section class="map">
    <iframe style="border: 0;" src="<?= $map_url ?>" allowfullscreen="allowfullscreen"></iframe>
</section>