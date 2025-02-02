<?php
/**
 * Custom WooCommerce Product Loop Template for Commontheme
 *
 * Overrides WooCommerce's default `content-product.php` layout.
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure the product is valid and visible
if ( ! is_a( $product, WC_Product::class ) || ! $product->is_visible() ) {
    return;
}

// Get product details
$product_id = $product->get_id();
$product_title = get_the_title();
$product_permalink = get_permalink();
$product_excerpt = wp_trim_words(get_the_excerpt(), 100, '...');
$product_image_url = wp_get_attachment_image_src( get_post_thumbnail_id( $product_id ), 'thumbnail' )[0];

?>
<a id="w-node-e8c1b046-ed74-5727-8cbd-683fd8f3f4e7-3aaa4b1b"
    data-w-id="e8c1b046-ed74-5727-8cbd-683fd8f3f4e7"
    style="opacity:0"
    class="commoncell codex w-inline-block"
    href="<?php echo esc_url( $product_permalink ); ?>">

    <?php if ( $product_image_url ): ?>
        <img loading="lazy" src="<?php echo esc_url( $product_image_url ); ?>" alt="<?php echo esc_attr( $product_title ); ?>" class="commoncellimage">
    <?php endif; ?>

    <h4 class="tinytext"><?php echo esc_html( $product_title ); ?></h4>
    <p><?php echo esc_html( $product_excerpt ); ?></p>

    <div class="ctabottom">
    <div class="tinytext"><span class="mid"><?php global $product; echo $product->get_price_html(); ?></span> </div>

            </div>

    <div class="moreinfo">
        <div class="actionlink flexlink">
            <div class="actionpulse"></div>
            <div class="fontawesolid textdark"></div>
            <p class="iconlinktext">Buy Now</p>
        </div>
    </div>
</a>
