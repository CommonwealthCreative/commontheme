<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <a href="<?php the_permalink(); ?>" rel="bookmark" style="text-decoration: none; color: inherit;">
        <div class="portfolio container" 
             style="
                background-image: url('<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) : esc_url(get_template_directory_uri() . '/images/commonwealth-creative-coming-soon.svg'); ?>');">
            <div class="heading-wrapper" 
                 style="opacity: 0.8; transform: translate3d(0px, 20px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); 
                 transform-style: preserve-3d; color: rgb(255, 255, 255);">
                
                <!-- Post Title -->
                <?php if ( is_singular() ) : ?>
                    <h1 class="heading"><?php the_title(); ?></h1>
                <?php else : ?>
                    <h2 class="heading"><?php the_title(); ?></h2>
                <?php endif; ?>
                
                <!-- Post Excerpt -->
                <p><?php the_excerpt(); ?></p>
            </div>
        </div>
    </a>
</article>
