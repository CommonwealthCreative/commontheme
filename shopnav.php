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
