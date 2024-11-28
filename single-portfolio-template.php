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
<div class="singlehero content" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
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
      
      <?php
// Check if the current post is in the "portfolio" category
if (has_category('portfolio')) {
    // Retrieve the custom meta value
    $portfolio_meta = get_post_meta(get_the_ID(), '_portfolio_meta', true);

    // Display the content if it exists
    if (!empty($portfolio_meta)) {
        echo '<p class="portfolio-meta">';
        echo wp_kses_post($portfolio_meta); // Safe output of the meta value
        echo '</p>';
    }
}
?>
        <?php $portfolio_extra_content = get_post_meta( get_the_ID(), '_portfolio_extra_content', true );
          if ( ! empty( $portfolio_extra_content ) ) : ?>
            <div class="portfolio-extra-content">
            <p class="mid herotext" data-w-id="06fd89dd-186f-6c0f-7b03-158ede881feb"><?php echo nl2br( esc_html( $portfolio_extra_content ) ); ?></p>
              </div>
              <?php endif; ?>
              <?php 
              
              echo '<a class="allwork actionlink" href="' . esc_url( home_url( '/work' ) ) . '"><div class="fontawesolid iconrotate" style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                <p>View All Work</p>
              </a>'; 
              
              ?>


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
    <div class="_1300">
    <div data-w-id="77db7b46-6289-05de-de9d-25e9cd676eb4" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="common-card ctamiddle">
    <div id="w-node-_0880cb26-8352-ec79-697c-a72d4c213ba9-f4ae160d" class="w-layout-layout fortystack wf-layout-layout">
    <div id="w-node-_0880cb26-8352-ec79-697c-a72d4c213baa-f4ae160d" class="w-layout-cell">
    <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config="{&quot;layout&quot;:&quot;month_view&quot;}" class="actionlink w-inline-block">
    <div data-w-id="e928d009-0bba-6d0e-5584-bc55e80c398d" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="w-layout-hflex flexjumboicon">
    <div class="w-layout-vflex flex-block-stretch">
    <div class="mid">Time to get creative, let's talk.</div>
    <p class="tinytext">Discover how Commonwealth Creative can help you create impactful solutions and achieve your goals.</p>
    </div>
    <div class="fontawesolid jumboicon"></div>
    </div>
    </a>
    </div>
    <div id="w-node-_0880cb26-8352-ec79-697c-a72d4c213bab-f4ae160d" class="w-layout-cell">
    <a href="/refer" class="actionlink w-inline-block">
    <div data-w-id="c8d761f2-27c4-67e6-6bff-5f68722b6f55" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="w-layout-hflex flexjumboicon">
    <div class="w-layout-vflex flex-block-stretch">
    <div class="mid">Refer a friend &amp;&nbsp;earn.</div>
    <p class="tinytext">Refer a new project and when they come on board, you’ll receive 8% of the total project value.</p>
    </div>
    <div class="fontawesolid jumboicon"></div>
    </div>
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
    <div class="_1300">
        <div class="nextpost">
              <?php 
              echo '<a class="allwork actionlink" href="' . esc_url( home_url( '/work' ) ) . '"><div class="fontawesolid iconrotate" style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                <p>View All Work</p>
              </a>'; 
              ?>
            <?php  echo get_portfolio_navigation(); ?>
        </div>
            <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676eb3-cb7e0df5" class="w-layout-layout process-stack wf-layout-layout">
            <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676eb4-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676eb4" style="opacity:0" class="w-layout-cell openingcell">
              <a href="https://thecommonwealthcreative.com/strategies-methods" class="flexblockmiddle w-inline-block">
                <div class="fontawesolid openingicon"></div>
                <h4 class="tinytext">Focused Direction By Design</h4>
                <p>Our guidance and creative discovery process is tailored for you.</p>
              </a>
            </div>
            <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676ebc-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676ebc" style="opacity:0" class="w-layout-cell openingcell">
              <a href="https://thecommonwealthcreative.com/strategies-methods/#design" class="flexblockmiddle w-inline-block">
                <div class="fontawesolid openingicon"></div>
                <h4 class="tinytext">Signature Marketing  &amp; Branding</h4>
                <p>We create powerful brands that break through the market clutter.</p>
              </a>
            </div>
            <div id="w-node-_77db7b46-6289-05de-de9d-25e9cd676ec4-cb7e0df5" data-w-id="77db7b46-6289-05de-de9d-25e9cd676ec4" style="opacity:0" class="w-layout-cell openingcell">
              <a href="https://thecommonwealthcreative.com/strategies-methods/#dev" class="flexblockmiddle w-inline-block">
                <h4 class="tinytext">User-Focused Web Development</h4>
                <div class="fontawesolid openingicon"></div>
                <p>Our code is always created around users and designed to convert.</p>
              </a>
            </div>
          </div>
        </div>
    </div>
</div>
<?php
/* get_sidebar(); */
get_footer();