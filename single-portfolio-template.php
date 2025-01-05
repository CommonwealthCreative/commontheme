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
<section class="featuredwork">
    <div class="commonworkrow" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');">
      <div class="text-holder">
        <div class="workcontent textwhite _1300">
        <?php 
                $portfolio_image = get_post_meta(get_the_ID(), '_portfolio_image', true);
                if (!empty($portfolio_image)) : 
                ?>
                    <div class="portfolio-meta-image-wrapper">
                        <img src="<?php echo esc_url($portfolio_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" style="max-width: 100%; height: auto; border-radius: 8px;" />
                    </div>
                <?php endif; ?>
        <?php the_title( '<h1 class="tinytext"><span>', '</span></h1>' ); ?>
        <?php $portfolio_extra_content = get_post_meta( get_the_ID(), '_portfolio_extra_content', true );
          if ( ! empty( $portfolio_extra_content ) ) : ?>
          <div class="common66w">
            <h2><?php echo nl2br( esc_html( $portfolio_extra_content ) ); ?></h2>
          </div>
              <?php endif; ?>

          <div class="scrolldown">
            <div class="lottie-animation-scrolldown" data-w-id="369daa07-76eb-7d6f-4f62-3578b2cac4eb" data-animation-type="lottie" data-src="https://cdn.prod.website-files.com/66daff0553e4462bf4ae1607/66db9f450e83281f2a0b66dd_down-arrow.json" data-loop="1" data-direction="1" data-autoplay="1" data-is-ix2-target="0" data-renderer="svg" data-duration="3"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
        <div data-w-id="60317d30-baff-9458-1dd6-614f5108466f" href="/work/next-project" class="sectionlink backgroundblack w-inline-block">
          <div class="_1300 w-container">
          <div class="nextpost">
              <?php 
              echo '<a href="/work" class="actionlink">
              <div class="fontawesolid"></div>
              <p class="iconlinktext textwhite tinytext">View All Work</p>
            </a>'; 
              ?>
            <?php  echo get_portfolio_navigation(); ?>
        </div>
          </div>
</div>
  <div class="foliocontent">
            <?php
              while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content-page-header', get_post_type() );


              endwhile; // End of the loop.
              ?>
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

  <a data-w-id="2e69cf78-bca8-b943-1bac-8697ab31679d" href="work.html" class="sectionlink backgroundblack w-inline-block">
    <div class="w-layout-blockcontainer _1300 w-container">
      <div class="tinytext">See More Projects</div>
      <div class="w-layout-hflex commonflexwide">
        <h2 data-w-id="2e69cf78-bca8-b943-1bac-8697ab3167a2" style="opacity:0">View Portfolio &amp; Featured Work.</h2><img src="/wp-content/themes/commontheme2025/images/commonarrow.svg" loading="lazy" alt="" class="movearrow">
      </div>
    </div>
  </a>
  <?php get_template_part('template-parts/content', 'portfolio-loop'); ?>

<?php
/* get_sidebar(); */
get_footer();