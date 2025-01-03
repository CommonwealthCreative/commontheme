<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package _s
 */

get_header();
?>

<section class="content-area">
	
<div data-w-id="da3268dc-f442-5ce5-b480-41f7ef1e44ed" style="" class="paragraph _1300">
	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
			<h1 class="page-title"> 
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Go to the homepage.</a>
</h1>
<h2 class="page-subtitle">
    <?php esc_html_e( 'This is awkward. Looks like we lost that page! Let\'s get you back on track— head to the homepage before anyone notices.', '_s'); ?>
</h2>
			</header><!-- .page-header -->

			<div class="page-content">
				          <div class="search-container openingicon">
    <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
        <input 
            type="search" 
            class="search-input" 
            name="s" 
            placeholder="Search the site..." 
            aria-label="Search"
        >
        <button type="submit" class="button backgroundwhite w-button">Search</button>
    </form>
      </div>
					

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div>
</section>
<?php
get_footer();
