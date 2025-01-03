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
<a class="processlink codex" href="<?php the_permalink(); ?>" rel="bookmark">
    <div id="w-node-_00e86ff8-78e6-e0c9-4432-578040ded2df-f4ae160d" data-w-id="00e86ff8-78e6-e0c9-4432-578040ded2df" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" class="w-layout-cell processcell">
        <div loading="lazy" style="background-image: url('<?php echo has_post_thumbnail() ? esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')) : esc_url(get_template_directory_uri() . '/images/commonwealth-creative-coming-soon.svg'); ?>');" class="processimg"></div>
        
        <?php if ( is_singular() ) : ?>
            <h4 class="tinytext"><?php the_title(); ?></h4>
        <?php else : ?>
            <h4 class="tinytext"><?php the_title(); ?></h4>
        <?php endif; ?>

        <p>
            <?php 
            // Display the first 140 characters of the post content
            $excerpt = wp_strip_all_tags( get_the_content(), true ); // Strip HTML tags
            echo esc_html( wp_trim_words( $excerpt, 20, '...' ) ); // Trim to approximately 140 characters
            ?>
        </p>
    </div>
</a>
</article>
