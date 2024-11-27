<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _s
 */

get_header();
?>
  <div class="singlehero backgrounddark">
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
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page-header', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', '_s' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', '_s' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    </div>
  </div>
  <div class="_1300">
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
  </section>
<?php
/* get_sidebar(); */
get_footer();
