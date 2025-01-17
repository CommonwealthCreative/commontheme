<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

get_header();
?>
<div class="pageheading">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
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

          <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0" class="textmedium">
              <?php echo esc_html($first_half); ?>
          </h1>
          <h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fdea" style="opacity:0">
              <?php echo esc_html($second_half); ?>
          </h1>


    </div>
  </div>
  <section class="_1300">
  <?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-page-header', get_post_type() );


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
    </section>
    
     <?php get_template_part('template-parts/content', 'codexcta'); ?>
  <a data-w-id="9eb65b7d-dc15-4289-5263-b2b7424fbf39" href="/shop" class="sectionlink backgroundblack w-inline-block">
    <div class="w-layout-blockcontainer _1300 w-container">
      <div class="tinytext">Shop The Commonwealth Creative</div>
      <div class="w-layout-hflex commonflexwide">
        <h2 data-w-id="9eb65b7d-dc15-4289-5263-b2b7424fbf3e" style="opacity:0">Let&#x27;s create something <span class="paytone underline">today.</span></h2><img src="/wp-content/themes/commontheme2025/images/commonarrow.svg" loading="lazy" alt="" class="movearrow">
      </div>
    </div>
  </a>
  <?php get_template_part('footercta'); ?>
<?php
/* get_sidebar(); */
get_footer();
