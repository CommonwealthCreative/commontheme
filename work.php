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
<div id="loader-wrapper">
    <div id="loader">
        <div class="spinner"></div>
    </div>
</div>
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
      <p class="mid">The Commonwealth Creative is the catalyst for your marketing or engineering team. Your timeline, our expertise—enterprise design and technology built for healthcare, higher education, and government.<br></p>
      <div class="w-layout-hflex commonflex">
        <h2 data-w-id="d6c560e2-5ea8-639d-9e50-1cf979c4632b" style="opacity:0">Let's Talk.</h2>
        <a href="#" data-cal-link="hello.mattsmall/introduction-with-matt-small-commonwealth-creative" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank"" target="_blank" class="actionlink flexlink textwhite w-inline-block">
          <div class="actionpulse backgroundgreen"></div>
          <div class="fontawesolid"></div>
          <p class="iconlinktext underline">Schedule An Introduction</p>
        </a>
      </div>
    </div>
    
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
  <?php get_template_part('shopcta'); ?>
  <?php get_template_part('footercta'); ?>
<?php
/*get_sidebar();*/
get_footer();
