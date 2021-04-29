<?php
    get_header();
        global $post;
?>
    <h1 class="slider-title"><?php echo $post->post_title; ?></h1>
    <div class="corus-gallery-slider">
        <div class='slider_item'><img src="<?php echo get_field('slider_image_1') ?>"/></div>
        <div class='slider_item'><img src="<?php echo get_field('slider_image_2') ?>"/></div>
        <div class='slider_item'><img src="<?php echo get_field('slider_image_3') ?>"/></div>
    </div>
<?php
    get_footer();
?>