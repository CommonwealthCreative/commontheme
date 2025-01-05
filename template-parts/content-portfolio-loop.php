<?php
/**
 * Template part for displaying portfolio loop
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>
<section class="portfolio-loop random">
<?php
// Custom Query for 3 Random Posts in Portfolio Category
$portfolio_query = new WP_Query( array(
  'category_name'  => 'portfolio',      // Slug of the category to include
  'posts_per_page' => 3,                // Number of posts to show
  'orderby'        => 'rand',           // Random order
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


