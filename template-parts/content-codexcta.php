<?php
/**
 * Template part for displaying Codex CTA
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>

<section class="codexcta">
    <div data-w-id="49e663fa-fb9f-867a-f683-bd617e04d33e" class="_1300">
      <div class="tinytext">More From The Codex</div>
      <div id="w-node-_49e663fa-fb9f-867a-f683-bd617e04d341-7e04d33d" class="w-layout-layout commonstack wf-layout-layout">
        <div id="w-node-_49e663fa-fb9f-867a-f683-bd617e04d342-7e04d33d" class="w-layout-cell flexcenter">
          <h3 class="headingtext">Our expertise means you don’t have to navigate it alone. Dive into the codex entries for more insights. Or let us <a href="/contact">take the lead.</a>
          </h3>
          <a href="/contact" target="_blank" class="button backgrounddark w-button">Claim Your <span class="underline">Free</span> Keyword Analysis</a>
        </div>
        <div id="w-node-_49e663fa-fb9f-867a-f683-bd617e04d34d-7e04d33d" class="w-layout-cell flexcenter">
        <?php
// Define the query arguments for the "codex" category
$args = array(
    'category_name'  => 'codex', // Always use the "codex" category
    'posts_per_page' => 10,      // Limit to 10 posts
);

// Start the custom query
$query = new WP_Query($args);

if ($query->have_posts()) :
    echo '<ul role="list" class="commonlist">'; // Open the list
    while ($query->have_posts()) : $query->the_post(); ?>
        <li class="techlist">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile;
    echo '</ul>'; // Close the list
    wp_reset_postdata(); // Reset post data after custom loop
else :
    // Fallback if no posts are found
    echo '<p>No posts found in the "codex" category.</p>';
endif;
?>

        </div>
      </div>
    </div>
    <div id="work" data-w-id="49e663fa-fb9f-867a-f683-bd617e04d36a" class="w-layout-hflex carouselcontainertext textmedium">
      <div class="featuredtextcarousel">
        <div class="becauseiconfeatured">
          <div>CODEX CODEX</div>
        </div>
        <div class="becauseiconfeatured">
          <div>CODEX CODEX</div>
        </div>
      </div>
      <div class="featuredtextcarousel">
        <div class="becauseiconfeatured">
          <div>CODEX CODEX</div>
        </div>
        <div class="becauseiconfeatured">
          <div>CODEX CODEX</div>
        </div>
      </div>
    </div>
  </section>
