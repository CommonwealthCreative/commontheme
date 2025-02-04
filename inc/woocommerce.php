<?php
/**
 * WooCommerce Compatibility File
 *
 * @link https://woocommerce.com/
 *
 * @package _s
 */

/**
 * WooCommerce setup function.
 *
 * @link https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/
 * @link https://github.com/woocommerce/woocommerce/wiki/Enabling-product-gallery-features-(zoom,-swipe,-lightbox)
 * @link https://github.com/woocommerce/woocommerce/wiki/Declaring-WooCommerce-support-in-themes
 *
 * @return void
 */
function _s_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 150,
			'single_image_width'    => 300,
			'product_grid'          => array(
				'default_rows'    => 3,
				'min_rows'        => 1,
				'default_columns' => 4,
				'min_columns'     => 1,
				'max_columns'     => 6,
			),
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', '_s_woocommerce_setup' );

/**
 * WooCommerce specific scripts & stylesheets.
 *
 * @return void
 */
function _s_woocommerce_scripts() {
	wp_enqueue_style( '_s-woocommerce-style', get_template_directory_uri() . '/woocommerce.css', array(), _S_VERSION );

	$font_path   = WC()->plugin_url() . '/assets/fonts/';
	$inline_font = '@font-face {
			font-family: "star";
			src: url("' . $font_path . 'star.eot");
			src: url("' . $font_path . 'star.eot?#iefix") format("embedded-opentype"),
				url("' . $font_path . 'star.woff") format("woff"),
				url("' . $font_path . 'star.ttf") format("truetype"),
				url("' . $font_path . 'star.svg#star") format("svg");
			font-weight: normal;
			font-style: normal;
		}';

	wp_add_inline_style( '_s-woocommerce-style', $inline_font );
}
add_action( 'wp_enqueue_scripts', '_s_woocommerce_scripts' );

/**
 * Disable the default WooCommerce stylesheet.
 *
 * Removing the default WooCommerce stylesheet and enqueing your own will
 * protect you during WooCommerce core updates.
 *
 * @link https://docs.woocommerce.com/document/disable-the-default-stylesheet/
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Add 'woocommerce-active' class to the body tag.
 *
 * @param  array $classes CSS classes applied to the body tag.
 * @return array $classes modified to include 'woocommerce-active' class.
 */
function _s_woocommerce_active_body_class( $classes ) {
	$classes[] = 'woocommerce-active';

	return $classes;
}
add_filter( 'body_class', '_s_woocommerce_active_body_class' );

/**
 * Related Products Args.
 *
 * @param array $args related products args.
 * @return array $args related products args.
 */
function _s_woocommerce_related_products_args( $args ) {
	$defaults = array(
		'posts_per_page' => 3,
		'columns'        => 3,
	);

	$args = wp_parse_args( $defaults, $args );

	return $args;
}
add_filter( 'woocommerce_output_related_products_args', '_s_woocommerce_related_products_args' );

/**
 * Remove default WooCommerce wrapper.
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

if ( ! function_exists( '_s_woocommerce_wrapper_before' ) ) {
	/**
	 * Before Content.
	 *
	 * Wraps all WooCommerce content in wrappers which match the theme markup.
	 *
	 * @return void
	 */
	function _s_woocommerce_wrapper_before() {
		?>
			<main id="primary" class="site-main">
		<?php
	}
}
add_action( 'woocommerce_before_main_content', '_s_woocommerce_wrapper_before' );

if ( ! function_exists( '_s_woocommerce_wrapper_after' ) ) {
	/**
	 * After Content.
	 *
	 * Closes the wrapping divs.
	 *
	 * @return void
	 */
	function _s_woocommerce_wrapper_after() {
		?>
			</main><!-- #main -->
		<?php
	}
}
add_action( 'woocommerce_after_main_content', '_s_woocommerce_wrapper_after' );


if ( ! function_exists( '_s_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function _s_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		_s_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', '_s_woocommerce_cart_link_fragment' );

if ( ! function_exists( '_s_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function _s_woocommerce_cart_link() {
		?>
		<a class="cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View your shopping cart', '_s' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d item', '%d items', WC()->cart->get_cart_contents_count(), '_s' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<span class="amount"><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span> <span class="count"><?php echo esc_html( $item_count_text ); ?></span>
		</a>
		<?php
	}
}

if ( ! function_exists( '_s_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function _s_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php _s_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}

function custom_woocommerce_breadcrumb_separator( $defaults ) {
    $defaults['delimiter'] = ' / '; // Change to slash
    return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'custom_woocommerce_breadcrumb_separator' );


function display_free_price_for_sale($price, $product) {
    if ($product->is_on_sale() && $product->get_sale_price() == 0) {
        $regular_price = wc_price($product->get_regular_price()); // Get original price
        $price = '<del>' . $regular_price . '</del> <ins>FREE</ins>'; // Show crossed-out price & "FREE"
    }
    return $price;
}
add_filter('woocommerce_get_price_html', 'display_free_price_for_sale', 10, 2);

function hide_coupon_if_cart_total_zero() {
    if (is_cart() || is_checkout()) {
        $cart_total = WC()->cart->get_total('edit'); // Get raw total cart value without formatting

        if (floatval($cart_total) == 0) { // Only hide coupon if cart total is 0
            remove_action('woocommerce_before_cart_table', 'woocommerce_cart_coupon_form'); // Hide coupon on cart page
            remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10); // Hide coupon on checkout page
        }
    }
}
add_action('wp', 'hide_coupon_if_cart_total_zero');



function add_search_and_categories_to_before_shop_loop() {
    ?>
    <div class="common-shop-toolbar">
        <!-- 📂 Product Categories List -->
        <ul class="commonlist">
            <?php
            $terms = get_terms(array(
                'taxonomy'   => 'product_cat',
                'hide_empty' => true,
            ));

            if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    echo '<li class="servicelist"><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></li>';
                }
            } else {
                echo '<li>No categories found.</li>';
            }
            ?>
        </ul>
    </div>

    <?php
    // Determine the correct label and link for the cart/checkout button
    if (is_checkout()) {
        $button_label = "Checkout";
        $button_link = wc_get_checkout_url() . "#footer"; // Scrolls down instead of navigating
    } elseif (is_cart()) {
        $button_label = "Checkout";
        $button_link = wc_get_checkout_url(); // Redirects to checkout
    } else {
        $button_label = "My Cart";
        $button_link = wc_get_cart_url(); // Redirects to cart
    }
    ?>

    <a class="cartlink" href="<?php echo esc_url($button_link); ?>">
        <?php echo esc_html($button_label); ?>
        <span class="cartitems">( <?php echo WC()->cart->get_cart_contents_count(); ?> )</span>
        <span class="fontawesolid"><strong></strong></span>
    </a>

    <?php
}

add_action('woocommerce_before_shop_loop', 'add_search_and_categories_to_before_shop_loop', 5);


add_action('wp_enqueue_scripts', function() {
    if (!is_cart() && !is_checkout()) {
        wp_dequeue_script('wc-cart-fragments');
    }
}, 99);
add_filter( 'woocommerce_product_description_heading', '__return_null' );
add_filter( 'woocommerce_product_additional_information_heading', '__return_null' );

function redirect_to_checkout_on_add_to_cart( $url ) {
    return wc_get_checkout_url(); // Redirect to checkout page
}
add_filter( 'woocommerce_add_to_cart_redirect', 'redirect_to_checkout_on_add_to_cart' );

function custom_add_to_cart_message( $message, $products ) {
    if ( empty( $products ) ) {
        return $message;
    }

    // Get the first product added (assuming single add)
    $product_id = key( $products );
    $product = wc_get_product( $product_id );
    $product_name = $product ? $product->get_name() : __( 'this product', 'woocommerce' );

    // Generate the custom message with the cart link
    $cart_url = wc_get_cart_url();
    $custom_message = sprintf(
        __( '"%s" was added to your cart and you are ready to checkout. <a href="%s" class="button wc-forward">View Cart</a>', 'woocommerce' ),
        esc_html( $product_name ),
        esc_url( $cart_url )
    );

    return $custom_message;
}
add_filter( 'wc_add_to_cart_message_html', 'custom_add_to_cart_message', 10, 2 );

function custom_cart_error_messages( $error ) {
    // Ensure the error message contains "View cart" so we only modify relevant messages
    if ( strpos( $error, 'View cart' ) !== false ) {
        // Get the checkout URL
        $checkout_url = wc_get_checkout_url();

        // Append "or Checkout" link after "View cart"
        $checkout_link = ' or <a href="' . esc_url( $checkout_url ) . '" class="button wc-forward">Checkout</a>';
        $error .= $checkout_link;
    }
    
    return $error;
}
add_filter( 'woocommerce_add_error', 'custom_cart_error_messages' );











	





