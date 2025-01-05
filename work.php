<?php
/**
 * Template Name: Featured Work
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
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium">Current Portfolio</h1>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">&amp; Featured Work</h1>
      <p class="mid">The Commonwealth Creative is your dedicated expert, passionate about bringing your vision to life.We specialize in crafting exceptional brands, websites, and digital solutions tailored for non-profits, higher education and government.<br></p>
      <div class="w-layout-hflex commonflex">
        <h2 data-w-id="d6c560e2-5ea8-639d-9e50-1cf979c4632b" style="opacity:0">Let's Talk.</h2>
        <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank"" target="_blank" class="actionlink flexlink textwhite w-inline-block">
          <div class="actionpulse backgroundgreen"></div>
          <div class="fontawesolid"></div>
          <p class="iconlinktext">Schedule An Introduction</p>
        </a>
      </div>
    </div>
    <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdf3" data-is-ix2-target="1" class="lottie-animation" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/6518f97551279edd72aff36b/6518f97551279edd72aff37a_animation_ln5kc7yh.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="5" data-duration="0"></div>
    
  </div>
  <section class="portfolio-loop">
    <?php
// Custom Query for Portfolio Category Ordered by Ranking
$portfolio_query = new WP_Query( array(
  'category_name'  => 'portfolio',      // Slug of the category to include
  'posts_per_page' => -1,               // Number of posts to show (-1 for all posts in the category)
  'meta_key'       => '_post_ranking',  // Custom field for ranking
  'orderby'        => 'meta_value_num', // Order by numeric meta value
  'order'          => 'ASC',            // Lower rankings first
) );

if ( $portfolio_query->have_posts() ) : 
  while ( $portfolio_query->have_posts() ) : 
      $portfolio_query->the_post(); 
      ?>
      <?php get_template_part( 'template-parts/content', 'portfolio' ); ?>
      <?php 
  endwhile; 
  wp_reset_postdata(); // Reset the query
else : 
  ?>
  <div class="_1300 flexmiddle">
      <p>
          <?php echo esc_html( 'This page is currently under development. Please check back for updates. You may request portfolio examples by emailing ' ); ?>
          <a href="mailto:hi@thecommonwealthcreative.com">hi@thecommonwealthcreative.com</a>.
      </p>
  </div>
<?php 
endif; 
?> 
    </div>
  </section>
  <?php get_template_part('template-parts/content', 'codexcta'); ?>
  <a data-w-id="986b1ea4-639b-af53-8caf-ee2cac5cd4ae" href="/shop" class="sectionlink backgroundblack w-inline-block">
    <div class="w-layout-blockcontainer _1300 w-container">
      <div class="tinytext">Shop The Commonwealth Creative</div>
      <div class="w-layout-hflex commonflexwide">
        <h2 data-w-id="986b1ea4-639b-af53-8caf-ee2cac5cd4b3" style="opacity:0">Let&#x27;s create something <span class="paytone underline">today.</span></h2><img src="/wp-content/themes/commontheme2025/images/commonarrow.svg" loading="lazy" alt="" class="movearrow">
      </div>
    </div>
  </a>
  <?php get_template_part('footercta'); ?>
<?php
/*get_sidebar();*/
get_footer();
