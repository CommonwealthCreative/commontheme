<?php
/**
 * Template Name: The Codex
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
          <?php
          $page_title = get_the_title();
          $title_length = strlen($page_title);
          $split_position = floor($title_length / 2);
          $first_half = substr($page_title, 0, $split_position);
          $first_half = substr($first_half, 0, strrpos($first_half, ' ')); 
          $second_half = trim(substr($page_title, strlen($first_half)));
          ?>

          <h1 data-w-id="380b203e-0841-3bb8-4632-c3747b07f495" style="opacity:0" class="jumbo textlite">
              <?php echo esc_html($first_half); ?>
          </h1>
          <h1 data-w-id="380b203e-0841-3bb8-4632-c3747b07f497" style="opacity:0" class="jumbo">
              <?php echo esc_html($second_half); ?>
          </h1>
          <?php
          // Page content
          $page_content = get_the_content();
          $page_content = apply_filters('the_content', $page_content); // Process shortcodes and filters
          $page_content = str_replace(']]>', ']]&gt;', $page_content); // Clean up content for output
          ?>
          <p class="mid herotext">
              <?php echo $page_content; ?>
          </p>

      </div>
    </section>
  </div>
  <section class="bump backgroundwhite">
    <div class="_1300">
      <div class="w-layout-hflex flexmiddle">
        <div class="heavy">All Records</div>
        <div data-w-id="b1c79106-59e7-ff3b-565a-7746d72753d1" class="indicator">
          <div class="fontawesolid indicatoricon"></div>
          <div>See what the codex has to offer.</div>
        </div>
      </div>
    </div>
  </section>
  <section class="bump backgroundwhite">
        <div class="search-container _1300">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input 
            type="search" 
            class="search-input" 
            name="s" 
            placeholder="Search the Codex..." 
            aria-label="Search"
        >
        <button type="submit" class="button backgroundwhite w-button">Search</button>
    </form>
      </div>
</section>

  <div id="featured" data-w-id="674a2cfe-d42c-4fdb-eb46-c6f034c8d0c5" class="portfolio-section">
    <div class="portfolio-wrapper">
      <div class="portfolio-content">
      <?php
// Get the current page number for pagination
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// Custom Query for All Posts Sorted Alphabetically with Pagination
$all_posts_query = new WP_Query( array(
    'posts_per_page' => 6,              // Number of posts per page
    'paged'          => $paged,         // Current page
    'orderby'        => 'title',        // Order by post title
    'order'          => 'ASC',          // Ascending order (A-Z)
) );

if ( $all_posts_query->have_posts() ) : 
    while ( $all_posts_query->have_posts() ) : 
        $all_posts_query->the_post(); 
        ?>
        <?php get_template_part( 'template-parts/content', 'thecodex' ); ?>
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
    <section class="_1300 codex">
    <div class="nextpost " style="text-align: center; margin: 20px 0;">
        <?php
        // Display pagination links
        echo paginate_links( array(
            'total'     => $all_posts_query->max_num_pages, // Total number of pages
            'current'   => max( 1, get_query_var('paged') ), // Current page
            'mid_size'  => 2, // Number of links around the current page
            'prev_text' => __('«'), // Text for "Previous" link
            'next_text' => __('»'),     // Text for "Next" link
        ) );
        ?>
    </div>
    </section> 

      <div id="work" data-w-id="674a2cfe-d42c-4fdb-eb46-c6f034c8d0f8" class="w-layout-hflex carouselcontainerfeatured">
        <div class="featuredtextcarousel">
          <div class="becauseiconfeatured">
            <div class="textlite">The </div>
          </div>
          <div class="becauseiconfeatured">
            <div class="textlite">Codex </div>
          </div>
        </div>
        <div class="featuredtextcarousel">
          <div class="becauseiconfeatured">
            <div class="textlite">The </div>
          </div>
          <div class="becauseiconfeatured">
            <div class="textlite">Codex</div>
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
