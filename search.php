<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
	  <?php if ( have_posts() ) : ?>
      <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium">You searched for:</h1>
	  <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">
					<?php
					/* translators: %s: search query. */
					printf( '<span>' . get_search_query() . '</span>' );
					?>
				</h1>

        <div class="search-container">
          <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
              <input 
                  type="search" 
                  class="search-input" 
                  name="s" 
                  placeholder="Search again..." 
                  aria-label="Search"
              >
              <button type="submit" class="button backgroundwhite w-button">Search</button>
          </form>
      </div>
    </div>
    <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdf3" data-is-ix2-target="1" class="lottie-animation" data-animation-type="lottie" data-src="https://uploads-ssl.webflow.com/6518f97551279edd72aff36b/6518f97551279edd72aff37a_animation_ln5kc7yh.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="5" data-duration="0"></div>
         
  </div>

			<section class="codex-loop" style="padding-top: 40px;">
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'codexcards' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
  		</section> 
		<a data-w-id="986b1ea4-639b-af53-8caf-ee2cac5cd4ae" href="/shop" class="sectionlink backgroundblack w-inline-block">
			<div class="w-layout-blockcontainer _1300 w-container">
			<div class="tinytext">Shop The Commonwealth Creative</div>
			<div class="w-layout-hflex commonflexwide">
				<h2 data-w-id="986b1ea4-639b-af53-8caf-ee2cac5cd4b3" style="opacity:0">Let&#x27;s create something <span class="paytone underline">today.</span></h2><img src="../wp-content/themes/commontheme2025/images/commonarrow.svg" loading="lazy" alt="" class="movearrow">
			</div>
			</div>
		</a>
		<?php get_template_part('template-parts/content', 'codexcta'); ?>
 
	</main><!-- #main -->

<?php
/*get_sidebar();*/
get_footer();
