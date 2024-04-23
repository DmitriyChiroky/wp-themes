<?php

$post = $args['item'];
$image = get_the_post_thumbnail($post->ID, 'image-size-2');
?>
<div class="data-item swiper-slide  <?php echo 'post-' . $post->ID; ?>">
    <a href="<?php echo get_permalink(); ?>" class="data-item-inner">
        <?php if (!empty($image)) : ?>
            <div class="data-item-img">
                <?php echo $image; ?>
            </div>
        <?php endif; ?>

        <div class="wcl-post-view">
            View Outfit
        </div>
    </a>
</div>