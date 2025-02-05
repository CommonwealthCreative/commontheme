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
  <div class="pageheading backgroundblackdark">
    <div class="_1300">
      <div data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde0" style="opacity:0" class="withlove textwhite">
        <div class="w-layout-hflex flex-block">
          <div class="text-block">Made with</div>
          <div class="fontawesolid greenheart"></div>
          <div>in the Commonwealth of Virginia. </div>
        </div>
      </div>
      <?php the_title('<h1 data-w-id="cefb1870-d7c2-0805-7949-25ce2117fde8" style="opacity:0">'); ?>

    </div>
  </div>
  <div class="backgroundblack">
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
  </div>
    
     <?php get_template_part('template-parts/content', 'codexcta'); ?>
     <?php get_template_part('shopcta'); ?>
  <?php get_template_part('footercta'); ?>
<?php
/* get_sidebar(); */
get_footer();