<?php
/**
 * Template Name: Product Post
 * Template Post Type: post
 *
 * Description: use this for portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
<div class="pageheading backgroundblackdark">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <p class="content mid"><a href="/shop/" class="underline textwhite">The Collection</a> showcases services and essential items chosen for their quality, impact, and alignment with our values.<br></p>

    <!-- shop nav here -->   <?php get_template_part('shopnav'); ?>
    </div>
         
  </div>

  <section class="_1300">
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
<div class="commoncard backgroundwhite">

	<?php
defined( 'ABSPATH' ) || exit;

global $product;

// Get product details
$product_id = get_the_ID();
$product_title = get_the_title();
$product_price = $product->get_price_html();
$product_content = apply_filters('the_content', get_the_content());
$product_image = get_the_post_thumbnail($product_id, 'large');
$product_url = get_permalink();
$product_author = get_the_author();
$product_author_id = get_the_author_meta('ID');
$product_author_url = get_author_posts_url($product_author_id);
$product_author_avatar = get_avatar($product_author_id, 32);

// Get product categories
$product_categories = wp_get_post_terms($product_id, 'product_cat', array('fields' => 'names'));
$show_questions_section = in_array('Design', $product_categories) || in_array('Code', $product_categories) || in_array('Membership', $product_categories) || in_array('Sprints', $product_categories);
?>

<div class="common-product-layout">
    <div class="product-price-cart">
        <div class="tinytext">
            <span class="mid"><?php echo $product_price; ?> 
                <span class="crumbspace tinytext">
                    <a href="<?php echo esc_url($product_author_url); ?>">
                        <?php echo $product_author_avatar; ?>
                        <?php echo esc_html($product_author); ?>
                    </a>
                </span>
            </span>
        </div>
        <?php woocommerce_template_single_add_to_cart(); ?>
    </div>

    <div class="product-featured-image">
        <?php echo $product_image; ?>
    </div>

    <div class="product-details">
        <div class="product-content">
            <h3 style="font-size:200%;"><?php echo $product_title; ?></h3>
            <div class="tinytext product-info">
                <span class="mid"><?php echo $product_price; ?> 
                    <span class="crumbspace tinytext">
                        <a href="<?php echo esc_url($product_author_url); ?>">
                            <?php echo $product_author_avatar; ?>
                            <?php echo esc_html($product_author); ?>
                        </a>
                    </span>
                </span>
            </div>
            <div><?php echo $product_content; ?></div>
        </div>

        <div class="product-alt">
            <?php woocommerce_template_single_add_to_cart(); ?>
            <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove">
                <div class="w-layout-hflex flex-block">
                    <div class="fontawesolid greenheart"></div>
                    <div>
                        <a href="#" class="copylink crumbspace" onclick="copyToClipboard('<?php echo esc_url($product_url); ?>')">Copy this link.</a>
                    </div>
                </div>
            </div>

            <?php if ($show_questions_section) : ?>
                <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="commoncell textmedium w-inline-block backgrounddark">
                    <img src="/wp-content/themes/commontheme2025/images/commonwealth-creative-white-dropout-logo.svg" alt="" class="commoncellimage">
                    <h4 class="tinytext">Need Answers?</h4>
                    <p>If you have any questions about your purchase or need assistance, we're just a click away. Reach out anytime, and we'll make sure you have everything you need. <br><br><span class="underline">Schedule An Intro.</span></p>
                </a>
            <?php else : ?>
                <a href="/contact" class="commoncell textmedium w-inline-block backgrounddark">
                    <img src="/wp-content/themes/commontheme2025/images/commonwealth-creative-white-dropout-logo.svg" alt="" class="commoncellimage">
                    <h4 class="tinytext">Commonwealth Collection</h4>
                    <p>Our expertise extends beyond branding and complex technologies. We've curated this collection in order to showcase items for their quality, impact, and alignment with our values. Have a suggestion?<br><br><span class="underline">Send us a message.</span></p>
                </a>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>
    </section>

  <?php get_template_part('shopcta'); ?>
  <?php get_template_part('footercta'); ?>
<?php
/* get_sidebar(); */
get_footer();
