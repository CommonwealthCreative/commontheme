<?php
/**
 * Template part for displaying portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>
<?php
/**
 * Template Part for displaying a portfolio item
 *
 * Assumes this template is included in a WordPress Loop.
 */

// Get the custom field value for '_portfolio_meta'
$portfolio_meta = get_post_meta(get_the_ID(), '_portfolio_meta', true);

// Get the featured image URL
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

// Get the post permalink
$post_permalink = get_permalink();

// Get the post title
$post_title = get_the_title();
?>



<div data-w-id="b4221e4a-56e3-1c9a-9d4d-b8f11f77d4dc"  id="w-node-<?php echo esc_attr(get_the_ID()); ?>" class="commoncard portfolio-content" 
     style="background-image: url('<?php echo esc_url($featured_image_url); ?>');">
    <a href="<?php echo esc_url($post_permalink); ?>" class="text-holder w-inline-block">
        <div class="workcontent card">
            <div class="tinytext"><?php echo esc_html($post_title); ?></div>
            <h2><?php echo esc_html($portfolio_meta); ?></h2>
        </div>
    </a>
</div>



