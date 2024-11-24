<?php
/**
 * Template Name: Portfolio Posts
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
<div class="singlehero" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
    <section class="_1300pagehero">
    <div id="w-node-_571ee082-0319-241c-c5e1-b3e0e87660d7-0e04d8e2" class="w-layout-layout fortystack wf-layout-layout">
        <div id="w-node-_571ee082-0319-241c-c5e1-b3e0e87660d8-0e04d8e2" class="w-layout-cell">
		<?php the_title( '<h1 data-w-id="571ee082-0319-241c-c5e1-b3e0e87660d9" style="opacity:0" class="heading"><span>', '</span></h2>' ); ?>
        </div>
        <div id="w-node-_571ee082-0319-241c-c5e1-b3e0e87660dd-0e04d8e2" data-w-id="571ee082-0319-241c-c5e1-b3e0e87660dd" style="opacity:0" class="w-layout-cell flexblockmiddle">
          <div class="tinytext"><span class="mid">Let&#x27;s Talk.</span></div>
          <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' target="_blank" class="button backgroundwhite w-button">Schedule An Introduction</a>
        </div>
      </div>
        <?php $portfolio_extra_content = get_post_meta( get_the_ID(), '_portfolio_extra_content', true );
          if ( ! empty( $portfolio_extra_content ) ) : ?>
            <div class="portfolio-extra-content">
            <p class="mid herotext" data-w-id="06fd89dd-186f-6c0f-7b03-158ede881feb"><?php echo nl2br( esc_html( $portfolio_extra_content ) ); ?></p>
              </div>
              <?php endif; ?>
              <?php echo '<a class="allwork .actionlink" href="' . esc_url( home_url( '/work' ) ) . '">See All Work</a>'; ?>
              <?php  echo get_portfolio_navigation(); ?>
              <div class="scrolldown">
        <div data-w-id="ff786d4d-cb23-f4d2-4ab8-3ba3aaaa54b8" data-animation-type="lottie" data-src="/wp-content/themes/commontheme/documents/down-arrow.json" data-loop="1" data-direction="1" data-autoplay="1" data-renderer="svg" data-duration="3"></div>
    </div>
      </section>
              
</div>
  <div class="_1300 foliocontent">
  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page-header', get_post_type() );


		endwhile; // End of the loop.
		?>

  </div>
  <div class="_1300"> <!-- 3 call out -->
      <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676eb3-cb7e0df5" class="w-layout-layout process-stack wf-layout-layout">
        <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676eb4-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676eb4" style="opacity:0" class="w-layout-cell openingcell">
          <a href="https://thecommonwealthcreative.com/strategies-methods" class="flexblockmiddle w-inline-block">
            <div class="fontawesolid openingicon"></div>
            <h4 class="tinytext">Strategic Direction Through Design</h4>
            <p>Our guidance and creative discovery process is tailored for you.</p>
          </a>
        </div>
        <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676ebc-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676ebc" style="opacity:0" class="w-layout-cell openingcell">
          <a href="https://thecommonwealthcreative.com/strategies-methods/#design" class="flexblockmiddle w-inline-block">
            <div class="fontawesolid openingicon"></div>
            <h4 class="tinytext">Elite Branding  &amp; Storytelling</h4>
            <p>We create powerful brands that break through the market clutter.</p>
          </a>
        </div>
        <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676ec4-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676ec4" style="opacity:0" class="w-layout-cell openingcell">
          <a href="https://thecommonwealthcreative.com/strategies-methods/#dev" class="flexblockmiddle w-inline-block">
            <h4 class="tinytext">User-Focused Development</h4>
            <div class="fontawesolid openingicon"></div>
            <p>Our code is always created around users and designed to convert.</p>
          </a>
        </div>
      </div>
    </div>
    <div class="_1300"> <!-- 2ndary Content -->
              <?php
          // Output the Secondary Content
          $secondary_content = get_post_meta( get_the_ID(), '_secondary_content', true );

          if ( ! empty( $secondary_content ) ) {
              echo '<div class="secondary-content">';
              echo apply_filters( 'the_content', $secondary_content ); // Renders the WYSIWYG content with WordPress filters
              echo '</div>';
          }
          ?>
    </div>
</div>
<?php
/* get_sidebar(); */
get_footer();
