<?php if ( is_checkout() || is_cart() ) : ?>
    <div class="w-layout-hflex commonflex">
        <h2>The Collection</h2> 
        <div class="actionlink flexlink shopcrumbs landscapehide">
            <div class="actionpulse backgroundgreen"></div>
            <div class="fontawesolid"></div>
            <p class="iconlinktext">
                <a href="/shop">Shop</a> 

                <?php 
                $breadcrumbs = [];

                // Check if this is a page and has a parent page
                if ( is_page() && $post->post_parent ) {
                    $parent_id = $post->post_parent;
                    $parent_pages = [];

                    // Collect all parent pages
                    while ( $parent_id ) {
                        $parent = get_post( $parent_id );
                        $parent_pages[] = '<a class="" href="' . get_permalink($parent_id) . '">' . esc_html(get_the_title($parent_id)) . '</a>';
                        $parent_id = $parent->post_parent;
                    }

                    // Reverse order to show top-level parent first
                    $breadcrumbs = array_reverse($parent_pages);
                }

                // If it's a WooCommerce product, get product categories
                elseif ( is_singular('product') ) {
                    $terms = get_the_terms(get_the_ID(), 'product_cat');

                    if ($terms && !is_wp_error($terms)) {
                        $term = array_shift($terms);
                        $term_hierarchy = [];

                        while ($term && !is_wp_error($term)) {
                            $term_hierarchy[] = '<a class="landscapehide" href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a>';
                            if ($term->parent) {
                                $term = get_term($term->parent, 'product_cat');
                            } else {
                                break;
                            }
                        }

                        // Reverse the order to display the highest parent first
                        $breadcrumbs = array_reverse($term_hierarchy);
                    }
                }

                // Display breadcrumbs only if they exist
                if (!empty($breadcrumbs)) {
                    echo ' <span class="crumbspace landscapehide"> / </span> ' . implode(' <span class="crumbspace"> / </span> ', $breadcrumbs);
                }
                ?>

                <span class="crumbspace landscapehide"> / <span class="underline"><?php the_title(); ?></span></span> 
            </p>
        </div>
    </div>
<?php endif; ?>


<div class="shop-nav">
<?php
    /**
     * Hook: woocommerce_before_shop_loop.
     *
     * @hooked woocommerce_output_all_notices - 10
     * @hooked woocommerce_result_count - 20
     * @hooked woocommerce_catalog_ordering - 30
     */
    remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
    do_action('woocommerce_before_shop_loop');
    add_action('woocommerce_after_main_content', 'woocommerce_output_all_notices', 10);
    ?>
    </div>
    <div class="woocommerce-notices-wrapper">
        <?php woocommerce_output_all_notices(); ?>
    </div>
