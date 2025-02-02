<?php
/**
 * Template Name: About
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

<div class="pageheading">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        $content = get_the_content();
        $content = apply_filters( 'the_content', $content ); // Process shortcodes and other content filters
        $content = strip_tags( $content, '<br><strong><em><a>' ); // Allow specific tags if needed
        ?>
        <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0" class="headingtext">
            <?php echo $content; ?>
        </h1>
        <?php
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>

    </div>
    <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdf3" data-is-ix2-target="1" class="lottie-animation" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/6518f97551279edd72aff36b/6518f97551279edd72aff37a_animation_ln5kc7yh.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="5" data-duration="0"></div>
</div>
  <section class="standards">
    <div class="_1300">
      <div class="w-layout-hflex commonflex">
        <h2 data-w-id="c17c26fd-cb01-e6b0-98da-392efdf35804" style="opacity:0">Our Standards</h2>
        <div data-w-id="cf760173-64d9-a103-7d2b-a10cfc43d43f" class="actionlink flexlink">
          <div class="fontaw"></div>
          <p class="iconlinktext">A commitment to excellence and consistency.</p>
        </div>
      </div>
      <p class="common66w">Whether you&#x27;re aiming to transform your website, build a new brand, or launch a digital product, we&#x27;re here to discover and celebrate what makes your company unique—and bring those qualities to life.</p>
      <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf35816-66468b02" class="w-layout-layout commonstack wf-layout-layout">
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf35817-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf35818" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/service.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Dedicated Experts</h4>
            <p>We act as an extension of your business, using our expertise to ensure maximum growth.</p>
          </a>
        </div>
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf3581e-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf3581f" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/availability.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Limited Memberships</h4>
            <p>We prioritize quality to ensure our clients receive our full attention and the best possible results.</p>
          </a>
        </div>
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf35825-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf35826" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/lightning.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Quick Completion</h4>
            <p>Most requests are completed within an average of 2-3 days.</p>
          </a>
        </div>
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf3582c-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf3582d" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/pricing.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">No Surprise Costs</h4>
            <p>No surprises, no contracts—just a simple, fixed monthly membership. Cancel or pause anytime.</p>
          </a>
        </div>
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf35833-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf35834" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/graph.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Performance &amp; Returns</h4>
            <p>All of our projects are focused on delivering measurable KPIs and maximizing ROI.</p>
          </a>
        </div>
        <div id="w-node-c17c26fd-cb01-e6b0-98da-392efdf3583a-66468b02" class="w-layout-cell">
          <a data-w-id="c17c26fd-cb01-e6b0-98da-392efdf3583b" style="opacity:0" href="/strategies-methods/" class="commoncell w-inline-block"><img loading="lazy" src="../wp-content/themes/commontheme2025/images/award.svg" alt="" class="commoncellimage">
            <h4 class="tinytext">Top Performers</h4>
            <p>We are award-winning designers and enterprise-level IT professionals.</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php get_template_part('reviews'); ?>
  <?php get_template_part('shopcta'); ?>
  <?php get_template_part('footercta'); ?>

<?php
/*get_sidebar();*/
get_footer();
