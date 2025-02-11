<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>


<!--start -->

<div class="pageheading backgroundblackdark">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
	  <?php
	  $title = strip_tags(get_the_archive_title()); // Get the archive title and remove any HTML tags
	  $words = preg_split('/\s+/', $title); // Split title into words (handling extra spaces)
	  $half = ceil(count($words) / 2); // Find the halfway point
	  
	  $first_half = implode(' ', array_slice($words, 0, $half)); // First part
	  $second_half = implode(' ', array_slice($words, $half)); // Second part
	  ?>
	  
	  <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium"><?php echo esc_html($first_half); ?></h1>
	  <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0"><?php echo esc_html($second_half); ?></h1>

        <div class="search-container">
          <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <input 
                  type="search" 
                  class="search-input" 
                  name="s" 
                  placeholder="Search..." 
                  aria-label="Search"
              >
              <button type="submit" class="button backgroundwhite w-button">Search</button>
          </form>
      </div>
    </div>
         
  </div>
<!-- beginning of loop -->
<?php
// Get the current page number for pagination
$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

// Set up the query arguments dynamically based on the current archive
$query_args = array(
    'posts_per_page' => 8, // Number of posts per page
    'paged'          => $paged, // Current page number
    'orderby'        => 'title', // Order by post title
    'order'          => 'ASC', // Ascending order (A-Z)
);

// If it's a category archive
if ( is_category() ) {
    $query_args['category_name'] = get_queried_object()->slug;
}

// If it's a tag archive
if ( is_tag() ) {
    $query_args['tag'] = get_queried_object()->slug;
}

// If it's a custom taxonomy archive
if ( is_tax() ) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => get_queried_object()->taxonomy,
            'field'    => 'slug',
            'terms'    => get_queried_object()->slug,
        ),
    );
}

// If it's an author archive
if ( is_author() ) {
    $query_args['author'] = get_queried_object_id();
}

// If it's a post type archive
if ( is_post_type_archive() ) {
    $query_args['post_type'] = get_query_var('post_type');
}

// Execute the dynamic query
$archive_query = new WP_Query( $query_args );

if ( $archive_query->have_posts() ) : 
?>

<section class="backgroundwhite">
    <div class="_1300 nextpost">
        <?php
        // Display pagination links before the loop
        echo paginate_links( array(
            'total'     => $archive_query->max_num_pages, // Total number of pages
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
    while ( $archive_query->have_posts() ) : 
        $archive_query->the_post(); 
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
            'total'     => $archive_query->max_num_pages, // Total number of pages
            'current'   => max( 1, get_query_var('paged') ), // Current page
            'mid_size'  => 2, // Number of links around the current page
            'prev_text' => __('«'), // Text for "Previous" link
            'next_text' => __('»'), // Text for "Next" link
        ) );
        ?>
    </div>
</section>

<!-- end of loop -->
    <?php get_template_part('template-parts/content', 'codexcta'); ?>
    <?php get_template_part('shopcta'); ?>

     
</div>

<?php
/*get_sidebar();*/
get_footer();


