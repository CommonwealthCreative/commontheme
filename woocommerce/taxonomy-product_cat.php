<?php
/**
 * Template Name: Shop
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<div class="pageheading backgroundblackdark">
    <div class="_1300">
    <div data-w-id="eb093dbe-6c76-e2d3-a34c-9b3adf675679" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <h1 data-w-id="77aceff7-4b2e-8820-37ba-35a1959ad1cb" style="opacity:0" class="textmedium">Curated Products</h1>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">&amp; Services</h1>
    <p class="mid common66w">Our collection showcases services and essential items chosen for their quality, impact, and alignment with our values.</p>
    </div>
  </div>
  <div class="_1300">

    <section class="shop-loop">
    <?php
$term = get_queried_object(); // Get the current product category
$category_name = !empty($term->name) ? esc_html($term->name) : 'Products'; // Fallback if not in a category
$category_link = get_term_link($term); // Get category link

// Get parent categories if they exist
$breadcrumbs = [];
if (!is_wp_error($category_link)) {
    while ($term->parent) {
        $term = get_term($term->parent, 'product_cat');
        if (!is_wp_error($term) && !empty($term->name)) {
            array_unshift($breadcrumbs, '<a href="' . get_term_link($term) . '">' . esc_html($term->name) . '</a> <span class="crumbspace"> / </span> '); // Changed to /
        }
    }
}
?>

    <div id="w-node-fb6660a8-ffab-7e68-20fb-b933532f9b36-3aaa4b1b" class="w-layout-hflex commonflex">
            <h2 data-w-id="fb6660a8-ffab-7e68-20fb-b933532f9b37" style="opacity:0">The Collection</h2>
            <div class="actionlink flexlink">
            <div class="actionpulse backgroundgreen"></div>
            <div class="fontawesolid textdark"></div>
            <p class="iconlinktext">
    <a href="/shop">Shop</a> <span class="crumbspace"> / </span> 
    <?php echo implode('', $breadcrumbs); // Display parent categories ?>
    <span class="underline crumbspace" style="font-weight: 300;"><?php echo $category_name; ?></span></p>
            </div>
        </div>
        <?php
get_header('shop');

/* do_action( 'woocommerce_shop_loop_header' ); */

if ( woocommerce_product_loop() ) { ?>
    
    <div class="shop-nav">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action('woocommerce_before_shop_loop');
        ?>
    </div>

    <?php
    woocommerce_product_loop_start();

    if ( wc_get_loop_prop('total') ) {
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
        }
    }

    woocommerce_product_loop_end();

    /**
     * Hook: woocommerce_after_shop_loop.
     *
     * @hooked woocommerce_pagination - 10
     */
    do_action('woocommerce_after_shop_loop');

} else {
    /**
     * Hook: woocommerce_no_products_found.
     *
     * @hooked wc_no_products_found - 10
     */
    do_action('woocommerce_no_products_found');
}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action('woocommerce_after_main_content');

?>
    </section>
      </div>
  <section class="shop">
  <div class="_1300">
      <div class="memberships">
        <div class="w-layout-hflex commonflex">
          <h2 data-w-id="dcb88678-8a06-52f7-2cc3-9a062b8729fb" style="opacity:0">Memberships</h2>
          <div class="actionlink flexlink">
            <div class="actionpulse backgroundgreen"></div>
            <div class="fontawesolid"><strong></strong></div>
            <p class="iconlinktext">The catalyst for you<span class="landscapehide">r marketing or engineering teams</span>.</p>
          </div>
        </div>
      </div>
      <p class="common66w">Fixed cost. No contracts. Cancel or pause anytime. Driven by the principles of design, your membership begins with a strategic kick-off meeting; we&#x27;ll evaluate brand and technology positioning, and outline KPIs. Get immediate access to your dashboard, submit unlimited requests and receive deliverables every 48-72 hours. <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="underline">Have questions?</a></p>
      <div id="w-node-_58e92681-c0d6-b054-352d-861dcc619efd-3aaa4b1b" class="w-layout-layout commonstack clear wf-layout-layout">
        <div id="w-node-_58e92681-c0d6-b054-352d-861dcc619efe-3aaa4b1b" class="w-layout-cell">
          <div data-w-id="b6f4e364-f265-66c5-31ea-6cb7b5b445d8" style="opacity:0" class="common-card membership backgroundwhite">
            <div class="w-layout-hflex commonflexwide clear">
              <h2 data-w-id="468b012c-54c7-d3d2-9342-36f9a4ab42fe" style="opacity:0">Old Dominion</h2>
              <ul role="list" class="commonlist"></ul>
              <div class="meta"><span class="fontawesolid phone textmedium"></span> Limited Availability</div>
            </div>
            <div class="tinytext"><span class="mid">$1,395</span> / month*</div>
            <p class="common66w mid content">Perfect for organizations with an established brand who need consistent design and content updates.</p>
            <div class="tinytext gilroy">*Pause or Cancel Anytime. Military &amp; Non-Profit Discounts.</div>
            <a href="https://buy.stripe.com/14k4h2axrevC7kcbIR" target="_blank" class="button backgrounddark w-button">Start Today</a>
            <div id="w-node-b6f4e364-f265-66c5-31ea-6cb7b5b445ee-3aaa4b1b" class="w-layout-layout commonstack clear wf-layout-layout">
              <div id="w-node-b6f4e364-f265-66c5-31ea-6cb7b5b445ef-3aaa4b1b" class="w-layout-cell">
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Unlimited Requests &amp; Revisions</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Immediate Dashboard Access</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Direction by Design Workshop</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Average 48 hour delivery time</div>
                </div>
              </div>
              <div id="w-node-b6f4e364-f265-66c5-31ea-6cb7b5b445ff-3aaa4b1b" class="w-layout-cell">
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Online Content Management</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Dedicated Creative Expert</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>1:1 Communication via Slack</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <a href="/499-web-development-sprints-members-only" class="underline">$499 Development Sprints</a>
                </div>
              </div>
            </div>
            <div class="ctabottom">
              <a data-w-id="64c58cc2-9f81-6fb0-100e-32477c960970" href="#cal" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="icontext w-inline-block">
                <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(0.5, 0.5, 1) rotateX(0deg) rotateY(0deg) rotateZ(-90deg) skew(0, 0);transform-style:preserve-3d" class="fontaw rocket"></div>
                <p class="iconlinktext">Schedule An Intro<span class="landscapehide">duction</span></p>
              </a>
            </div>
          </div>
        </div>
        <div id="w-node-_58e92681-c0d6-b054-352d-861dcc619eff-3aaa4b1b" class="w-layout-cell">
          <div data-w-id="447354f9-1706-1023-7121-4f2991207a2d" style="opacity:0" class="common-card membership backgrounddark">
            <div class="w-layout-hflex commonflexwide clear">
              <h2 data-w-id="447354f9-1706-1023-7121-4f2991207a2f" style="opacity:0">Founding Fathers</h2>
              <ul role="list" class="commonlist"></ul>
              <div class="meta backgroundgreen"><span class="fontawesolid phone textdark"></span>Seats Available</div>
            </div>
            <div class="tinytext"><span class="mid">$2,195</span> / month*</div>
            <p class="common66w mid content">Ideal for those seeking a seamless blend of design and development to build an impactful brand.</p>
            <div class="tinytext gilroy">*Pause or Cancel Anytime. Military &amp; Non-Profit Discounts.</div>
            <a href="https://buy.stripe.com/5kAbJu9tn2MU5c4bIS" target="_blank" class="button backgroundwhite w-button">Start Today</a>
            <div id="w-node-_447354f9-1706-1023-7121-4f2991207a3e-3aaa4b1b" class="w-layout-layout commonstack clear wf-layout-layout">
              <div id="w-node-_447354f9-1706-1023-7121-4f2991207a3f-3aaa4b1b" class="w-layout-cell">
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Unlimited Requests &amp; Revisions</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Immediate Dashboard Access</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Direction by Design Workshop</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Average 48 hour delivery time</div>
                </div>
              </div>
              <div id="w-node-_447354f9-1706-1023-7121-4f2991207a4f-3aaa4b1b" class="w-layout-cell">
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Full Stack Web Development</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Hosting &amp; Security Audits</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>Dedicated Creative Expert</div>
                </div>
                <div class="includedetails">
                  <div class="fontawesolid-2"></div>
                  <div>1:1 Communication via Slack</div>
                </div>
              </div>
            </div>
            <div class="ctabottom">
              <a href="/contact" class="actionlink textwhite w-inline-block">
                <div class="actionpulse backgroundgreen"></div>
                <div class="fontawesolid"></div>
                <p class="iconlinktext">Get More Info<span class="landscapehide">rmation</span></p>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_template_part('shopcta'); ?>
<?php
/*get_sidebar();*/
get_footer();
