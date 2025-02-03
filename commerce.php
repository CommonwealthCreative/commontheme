<?php
/**
 * Template Name: Checkout and Cart
 *
 * Custom checkout and cart page with WooCommerce hooks.
 *
 * @package _s
 */

get_header();

// Remove WooCommerce breadcrumbs (only affects this template)
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
// Remove the coupon field from the WooCommerce cart form
remove_action( 'woocommerce_before_cart_table', 'woocommerce_cart_coupon_form' );

?>

<div class="pageheading backgroundblackdark">
    <div class="_1300">
        <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" class="withlove textwhite">
            <div class="w-layout-hflex flex-block">
                <div class="text-block">Made with</div>
                <div class="fontawesolid greenheart"></div>
                <div>in the Commonwealth of Virginia.</div>
            </div>
        </div>
        <?php
        $page_title = get_the_title();
        $title_length = strlen($page_title);
        $split_position = floor($title_length / 2);
        $first_half = substr($page_title, 0, $split_position);
        $first_half = substr($first_half, 0, strrpos($first_half, ' ')); 
        $second_half = trim(substr($page_title, strlen($first_half)));
        ?>
        <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium">
            <?php echo esc_html($first_half); ?>
        </h1>
        <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">
            <?php echo esc_html($second_half); ?>
        </h1>
    </div>
</div>

<div class="backgroundblack">
    <section class="_1300">
        <div class="w-layout-hflex commonflex">
            <h3 class="crumbspace">The Collection</h3>
            <div class="actionlink flexlink">
                <div class="actionpulse backgroundgreen"></div>
                <div class="fontawesolid textwhite"></div>
                <p class="iconlinktext">
                    <a href="/shop" class="textwhite">Shop</a> 
                    <span class="crumbspace"> / </span> 
                    
                    <?php
                    $breadcrumbs = [];

                    // Get the current page hierarchy (if it's a child page)
                    $parent_id = wp_get_post_parent_id(get_the_ID());
                    $parent_breadcrumbs = [];

                    while ($parent_id) {
                        $parent_page = get_post($parent_id);
                        if ($parent_page) {
                            array_unshift($parent_breadcrumbs, '<a class="textwhite" href="' . get_permalink($parent_page->ID) . '">' . esc_html($parent_page->post_title) . '</a> <span class="crumbspace"> / </span>');
                        }
                        $parent_id = wp_get_post_parent_id($parent_id);
                    }

                    // Merge parent page breadcrumbs before categories
                    $breadcrumbs = array_merge($breadcrumbs, $parent_breadcrumbs);

                    // Get the product's categories
                    $terms = get_the_terms(get_the_ID(), 'product_cat');

                    if ($terms && !is_wp_error($terms)) {
                        // Get the first category (primary category)
                        $term = array_shift($terms);
                        $visited_terms = [];

                        // Generate breadcrumb trail for parent categories
                        while ($term && $term->parent && !in_array($term->parent, $visited_terms)) {
                            $visited_terms[] = $term->parent; // Track visited terms
                            $term = get_term($term->parent, 'product_cat');

                            if (!is_wp_error($term) && !empty($term->name)) {
                                array_unshift($breadcrumbs, '<a class="textwhite" href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a> <span class="crumbspace"> / </span>');
                            }
                        }

                        // Add the main category (only if it's not already in the breadcrumbs)
                        if (!in_array($term->term_id, $visited_terms)) {
                            $breadcrumbs[] = '<a class="textwhite" href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a>';
                        }
                    }

                    // Display the breadcrumbs exactly as you structured them
                    echo implode('', $breadcrumbs);
                    ?>
                    <span class="crumbspace underline"><?php the_title(); ?></span>
                </p>
            </div>
        </div>

        <!-- shop nav here -->
        <?php get_template_part('shopnav'); ?>

        <div class="commoncard backgroundwhite">
            <div class="w-layout-hflex cart-checkout">
                             <!-- Product Summary (Cart & Order Review) -->
                             <?php if ( ! is_order_received_page() ) : ?>
    <div class="product-cart">
        <h3 class="crumbspace">Your Cart</h3>
        <?php
        // Display Cart inside the product-alt div
        echo do_shortcode('[woocommerce_cart]');
        ?>

<?php if ( is_checkout() ) : ?>
    <h3 class="crumbspace" id="order_review_heading">Order Summary</h3>
    <div id="order_review" class="woocommerce-checkout-review-order">
        <?php
        // Display Order Review and Totals
        do_action( 'woocommerce_checkout_order_review' );
        ?>
    </div>
<?php endif; ?>

        </div>
    </div>
<?php endif; ?>

                <!-- Product Content (Checkout Form Only) -->
                <?php if (is_checkout() ) : ?>
    <div class="product-checkout">
        <?php
        // Ensure WooCommerce is loaded
        if ( class_exists( 'WooCommerce' ) ) :
            do_action( 'woocommerce_before_main_content' );

            // Display Checkout Form
            echo '<h3 class="crumbspace">Checkout</h3>';
            echo do_shortcode('[woocommerce_checkout]');

            do_action( 'woocommerce_after_main_content' );
        else :
            echo '<p class="textwhite">WooCommerce is not active. Please activate the WooCommerce plugin.</p>';
        endif;
        ?>
    </div>
<?php endif; ?>

            </div>
        </div>
    </section>
</div>

<?php get_template_part('shopcta'); ?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Select all instances of the payment section
    let paymentSections = document.querySelectorAll(".woocommerce-checkout-payment");
    
    // If there are multiple instances, remove the one inside .product-cart
    if (paymentSections.length > 1) {
        document.querySelector(".product-cart .woocommerce-checkout-payment")?.remove();
    }
});
</script>


<?php
get_footer();
?>
