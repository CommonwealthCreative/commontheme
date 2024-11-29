<?php
/**
 * Template part for displaying portfolio posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>

<article data-w-id="1c23a382-57fe-a5fb-f821-ddc1fb4ed98e" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" rel="bookmark" style="text-decoration: none; color: inherit;">
        <div class="portfolio container" 
             style="background-image: url('<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) : esc_url(get_template_directory_uri() . '/images/commonwealth-creative-coming-soon.svg'); ?>');">
            <div class="heading-wrapper" 
                 style="opacity: 0.8; transform: translate3d(0px, 20px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); 
                 transform-style: preserve-3d; color: rgb(255, 255, 255);">
               
                <?php 
                $portfolio_image = get_post_meta(get_the_ID(), '_portfolio_image', true);
                if (!empty($portfolio_image)) : 
                ?>
                    <div class="portfolio-meta-image-wrapper">
                        <img src="<?php echo esc_url($portfolio_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" style="max-width: 100%; height: auto; border-radius: 8px;" />
                    </div>
                <?php endif; ?>

                <!-- Post Title -->
                <?php if ( is_singular() ) : ?>
                    <h2 class="mid textwhite"><?php the_title(); ?></h3>
                <?php else : ?>
                    <h2 class="mid textwhite"><?php the_title(); ?></h3>
                <?php endif; ?>
                
                <!-- Portfolio Meta Content -->
                <p>
                    <?php 
                        $portfolio_meta = get_post_meta(get_the_ID(), '_portfolio_meta', true);
                        if (!empty($portfolio_meta)) {
                            echo esc_html($portfolio_meta);
                        } else {
                            echo '';
                        }
                    ?>
                </p>
            </div>
        </div>
    </a>
</article>


