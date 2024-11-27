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

 <div class="subhero">
    <section class="_1300subhero">
      <a href="#" data-cal-link="hello.mattsmall/15min" data-cal-namespace="" data-cal-config='{"layout":"month_view"}' class="herologo w-inline-block"><img loading="lazy" src="https://uploads-ssl.webflow.com/66beeb88d43845e2d67fe07c/66bfbda6595b20c4ac26f5a8_commonwealth-creative-color-logo-darkblue-dropout.png" alt=""></a>
      <div class="herowrapper">
        <div data-w-id="4fdba675-c168-fe2b-82e0-93dcac83be7a" style="opacity:0" class="withlove">
          <div class="w-layout-hflex flex-block">
            <div>Made with</div>
            <div class="fontawesolid greenheart"></div>
            <div>in the Commonwealth of Virginia. </div>
          </div>
        </div>
        <h1 data-w-id="380b203e-0841-3bb8-4632-c3747b07f495" style="opacity:0" class="jumbo textlite">Current Portfolio</h1>
        <h1 data-w-id="380b203e-0841-3bb8-4632-c3747b07f497" style="opacity:0" class="jumbo">&amp; Featured Work</h1>
        <p class="mid herotext">At Commonwealth Creative, we leverage an analytical approach to create solutions that drive measurable results. Our approach ensures that every project aligns with your business goals, delivering work that is both innovative and impactful. We don’t just meet immediate needs—we position your brand for long-term success.</p>
      </div>
    </section>
  </div>
  <section class="bump backgroundwhite">
    <div class="_1300">
      <div class="w-layout-hflex flexmiddle">
        <div class="heavy">Current Portfolio</div>
        <div data-w-id="b1c79106-59e7-ff3b-565a-7746d72753d1" class="indicator">
          <div class="fontawesolid indicatoricon"></div>
          <div><span class="landscapehide">Highlighting our work and creative projects.</span></div>
        </div>
      </div>
    </div>
  </section>
  <div id="featured" data-w-id="674a2cfe-d42c-4fdb-eb46-c6f034c8d0c5" class="portfolio-section">
    <div class="portfolio-wrapper">
      <div class="portfolio-content">
      <?php
// Custom Query for Portfolio Category
$portfolio_query = new WP_Query( array(
    'category_name' => 'portfolio', // Slug of the category to include
    'posts_per_page' => -1, // Number of posts to show (-1 for all posts in the category)
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
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
      </div>
      <div id="work" data-w-id="674a2cfe-d42c-4fdb-eb46-c6f034c8d0f8" class="w-layout-hflex carouselcontainerfeatured">
        <div class="featuredtextcarousel">
          <div class="becauseiconfeatured">
            <div>Current </div>
          </div>
          <div class="becauseiconfeatured">
            <div>Portfolio </div>
          </div>
        </div>
        <div class="featuredtextcarousel">
          <div class="becauseiconfeatured">
            <div>And All </div>
          </div>
          <div class="becauseiconfeatured">
            <div>Projects</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="worksection">
    <div class="_1300">
      <div id="w-node-_1c23a382-57fe-a5fb-f821-ddc1fb4ed98d-d5a5c9d1" class="w-layout-layout process-stack wf-layout-layout">
        <div id="w-node-_1c23a382-57fe-a5fb-f821-ddc1fb4ed98e-d5a5c9d1" data-w-id="1c23a382-57fe-a5fb-f821-ddc1fb4ed98e" style="opacity:0" class="w-layout-cell openingcell">
          <a href="https://thecommonwealthcreative.com/strategies-methods" class="flexblockmiddle w-inline-block">
            <div class="fontawesolid openingicon"></div>
            <h4 class="tinytext">Focused Direction By Design</h4>
            <p>Our guidance and creative discovery process is tailored for you.</p>
          </a>
        </div>
        <div id="w-node-_1c23a382-57fe-a5fb-f821-ddc1fb4ed996-d5a5c9d1" data-w-id="1c23a382-57fe-a5fb-f821-ddc1fb4ed996" style="opacity:0" class="w-layout-cell openingcell">
          <a href="https://thecommonwealthcreative.com/strategies-methods/#design" class="flexblockmiddle w-inline-block">
            <div class="fontawesolid openingicon"></div>
            <h4 class="tinytext">Signature Marketing  &amp; Branding</h4>
            <p>We create powerful brands that break through the market clutter.</p>
          </a>
        </div>
        <div id="w-node-_1c23a382-57fe-a5fb-f821-ddc1fb4ed99e-d5a5c9d1" data-w-id="1c23a382-57fe-a5fb-f821-ddc1fb4ed99e" style="opacity:0" class="w-layout-cell openingcell">
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
/*get_sidebar();*/
get_footer();
