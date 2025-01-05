<?php
/**
 * Template Part for displaying a codex post item.
 *
 * Usage: This template part should be included in a WordPress loop.
 */

// Get the post's featured image.
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');

// Get the first 140 characters of the post content.
$excerpt = wp_trim_words(get_the_content(), 10, '...');

// Get the post title.
$post_title = get_the_title();

// Get the post permalink.
$post_permalink = get_permalink();
?>

<a id=" w-node-_85d7ee7c-85a8-bd6d-854d-c60f4ff86dda-7be4c674" data-w-id="85d7ee7c-85a8-bd6d-854d-c60f4ff86dda" style="opacity:0" post-<?php echo esc_attr(get_the_ID()); ?>" class="commoncell codex w-inline-block" href="<?php echo esc_url($post_permalink); ?>">
    <?php if ($featured_image_url): ?>
        <img loading="lazy" src="<?php echo esc_url($featured_image_url); ?>" alt="<?php echo esc_attr($post_title); ?>" class="commoncellimage">
    <?php endif; ?>
    <h4 class="tinytext"><?php echo esc_html($post_title); ?></h4>
    <p><?php echo esc_html($excerpt); ?></p>
    <div class="moreinfo">
        <div class="actionlink flexlink">
            <div class="actionpulse"></div>
            <div class="fontawesolid textdark"></div>
            <p class="iconlinktext">More Info</p>
        </div>
    </div>
</a>

