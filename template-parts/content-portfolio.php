<?php
/**
 * Template Part for displaying a portfolio item
 *
 * Assumes this template is included in a WordPress Loop.
 */

$post_id = get_the_ID();

// Get the post's featured image for the background.
$featured_image_url = get_the_post_thumbnail_url($post_id, 'full');

// Retrieve the custom portfolio image saved via the meta box.
$custom_portfolio_image = get_post_meta($post_id, '_portfolio_image', true);

// Retrieve additional post data.
$portfolio_meta = get_post_meta($post_id, '_portfolio_meta', true);
$post_permalink = get_permalink();
$post_title = get_the_title();
?>



<div data-w-id="b4221e4a-56e3-1c9a-9d4d-b8f11f77d4dc"  id="w-node-<?php echo esc_attr(get_the_ID()); ?>" class="commoncard portfolio-content" 
     style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
    <a href="<?php echo esc_url($post_permalink); ?>" class="text-holder w-inline-block">
        <div class="workcontent card">
        <div class="portfolio-meta-image-wrapper">
        <img src="<?php echo esc_url($custom_portfolio_image); ?>" alt="<?php echo esc_attr($post_title); ?>">
        </div>
            <div class="tinytext"><?php echo esc_html($post_title); ?></div>
            <h2 class=""><?php echo esc_html($portfolio_meta); ?></h2>
        </div>
    </a>
</div>



