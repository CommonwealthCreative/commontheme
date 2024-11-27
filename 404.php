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
    <?php esc_html_e( 'Well, this is awkward. Looks like we lost that page! Let\'s get you back on track— head to the homepage before anyone notices.', '_s'); ?>
</h2>
			</header><!-- .page-header -->

			<div class="page-content">
					<?php
					get_search_form();

					/*the_widget( 'WP_Widget_Recent_Posts' );
					?>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', '_s' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php*/
					/* translators: %1$s: smiley 
					$_s_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', '_s' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$_s_archive_content" );

					the_widget( 'WP_Widget_Tag_Cloud' );*/
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div>
</section>
<?php
get_footer();
