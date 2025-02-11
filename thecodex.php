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

<div class="pageheading backgroundblackdark">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium">The Commonwealth</h1>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">Creative Codex</h1>
      <p class="content mid">The Codex is a curated collection of terms, principles and concepts. Acting as a living, informational record, it serves as both a resource and a guide, detailing the processes, strategies, and expertise behind Commonwealth Creative.<br></p>

        <div class="search-container">
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
    </div>
         
  </div>

  <?php
// Get the current page number for pagination
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// Custom Query for "codex" Posts Sorted Alphabetically with Pagination
$all_posts_query = new WP_Query( array(
    'posts_per_page' => 8,              // Number of posts per page
    'paged'          => $paged,         // Current page
    'orderby'        => 'title',        // Order by post title
    'order'          => 'ASC',          // Ascending order (A-Z)
    'category_name'  => 'codex',        // Include only posts in the "codex" category
) );

if ( $all_posts_query->have_posts() ) : 
?>

<section class="backgroundwhite">
    <div class="_1300 nextpost">
        <?php
        // Display pagination links before the loop
        echo paginate_links( array(
            'total'     => $all_posts_query->max_num_pages, // Total number of pages
            'current'   => max( 1, get_query_var('paged') ), // Current page
            'mid_size'  => 2, // Number of links around the current page
            'prev_text' => __('«'), // Text for "Previous" link
            'next_text' => __('»'), // Text for "Next" link
        ) );
        ?>
    </div>
</section>

<section class="codex-loop">
    <?php 
    while ( $all_posts_query->have_posts() ) : 
        $all_posts_query->the_post(); 
        ?>
        <?php get_template_part( 'template-parts/content', 'codexcards' ); ?>
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
</section>

<section class="backgroundwhite">
    <div class=" _1300 nextpost">
        <?php
        // Display pagination links after the loop
        echo paginate_links( array(
            'total'     => $all_posts_query->max_num_pages, // Total number of pages
            'current'   => max( 1, get_query_var('paged') ), // Current page
            'mid_size'  => 2, // Number of links around the current page
            'prev_text' => __('«'), // Text for "Previous" link
            'next_text' => __('»'), // Text for "Next" link
        ) );
        ?>
    </div>
</section>

    <?php get_template_part('template-parts/content', 'codexcta'); ?>
    <?php get_template_part('shopcta'); ?>

     
</div>

<?php
/*get_sidebar();*/
get_footer();
