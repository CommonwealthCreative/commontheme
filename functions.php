<?php
/**
 * _s functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package _s
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


function webflow_enqueue_assets() {
    // Enqueue the main stylesheet

    // Enqueue additional stylesheets (optional)
    wp_enqueue_style('normalize-styles', get_template_directory_uri() . '/css/normalize.css', array(), '1.0.0', 'all');
	wp_enqueue_style('webflow-styles', get_template_directory_uri() . '/css/webflow.css', array(), '1.0.0', 'all');

	// Enqueue scripts
    wp_enqueue_script('webflow-js', get_template_directory_uri() . '/js/webflow.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'webflow_enqueue_assets', 1);



/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function _s_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on _s, use a find and replace
		* to change '_s' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( '_s', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', '_s' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'_s_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', '_s_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _s_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_s_content_width', 640 );
}
add_action( 'after_setup_theme', '_s_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function _s_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', '_s' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', '_s' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', '_s_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function _s_scripts() {
	wp_enqueue_style( '_s-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( '_s-style', 'rtl', 'replace' );

	wp_enqueue_script( '_s-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', '_s_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

function add_portfolio_template_meta_box() {
    // Only add the meta box for posts using the "Portfolio Posts" template
    add_meta_box(
        'portfolio_template_meta_box',       // Unique ID
        'Additional Portfolio Information',  // Title of the meta box
        'portfolio_template_meta_box_callback', // Callback function
        'post',                              // Post type
        'normal',                            // Context
        'high'                               // Priority
    );
}
add_action( 'add_meta_boxes', 'add_portfolio_template_meta_box' );

// Render the meta box
function portfolio_template_meta_box_callback( $post ) {
    // Check if the post uses the "Portfolio Posts" template
    $template = get_page_template_slug( $post->ID );
    if ( $template !== 'single-portfolio-template.php' ) {
        echo '<p>This metabox is only available for posts using the "Portfolio Posts" template.</p>';
        return;
    }

    // Retrieve the saved meta value
    $portfolio_extra_content = get_post_meta( $post->ID, '_portfolio_extra_content', true );

    // Display the input field
    ?>
    <p>
        <label for="portfolio_extra_content"><strong>Hero Content:</strong></label>
        <textarea id="portfolio_extra_content" name="portfolio_extra_content" rows="5" style="width: 100%;"><?php echo esc_textarea( $portfolio_extra_content ); ?></textarea>
    </p>
    <?php
}

function save_portfolio_template_meta_box( $post_id ) {
    // Check if the save is valid
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['portfolio_extra_content'] ) ) {
        update_post_meta( $post_id, '_portfolio_extra_content', sanitize_textarea_field( $_POST['portfolio_extra_content'] ) );
    }
}
add_action( 'save_post', 'save_portfolio_template_meta_box' );

/* Second Meta Box */

// Register the Secondary Content WYSIWYG Metabox
function add_secondary_content_meta_box() {
    add_meta_box(
        'secondary_content_meta_box',       // Unique ID
        'Secondary Content',                // Title of the meta box
        'secondary_content_meta_box_callback', // Callback function
        'post',                             // Post type
        'normal',                           // Context
        'high'                              // Priority
    );
}
add_action( 'add_meta_boxes', 'add_secondary_content_meta_box' );

// Render the WYSIWYG editor in the metabox
function secondary_content_meta_box_callback( $post ) {
    $secondary_content = get_post_meta( $post->ID, '_secondary_content', true );

    // Render the WYSIWYG editor
    wp_editor(
        $secondary_content,
        'secondary_content', // Editor ID
        array(
            'textarea_name' => 'secondary_content',
            'media_buttons' => true,
            'textarea_rows' => 10,
            'teeny'         => false,
            'quicktags'     => true,
        )
    );
}

// Save the Secondary Content
function save_secondary_content_meta_box( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['secondary_content'] ) ) {
        // Save the content with safe HTML tags
        update_post_meta( $post_id, '_secondary_content', wp_kses_post( $_POST['secondary_content'] ) );
    }
}
add_action( 'save_post', 'save_secondary_content_meta_box' );

function add_portfolio_category_meta_box() {
    add_meta_box(
        'portfolio_category_meta_box', // Unique ID
        'Portfolio Details', // Title
        'portfolio_category_meta_box_callback', // Callback function
        'post', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_portfolio_category_meta_box');

function portfolio_category_meta_box_callback($post) {
    // Check if the post is in the "portfolio" category
    $categories = wp_get_post_categories($post->ID, ['fields' => 'slugs']);
    if (!in_array('portfolio', $categories)) {
        echo '<p>This meta box is only available for posts in the "portfolio" category.</p>';
        return;
    }

    // Retrieve saved meta value
    $portfolio_meta = get_post_meta($post->ID, '_portfolio_meta', true);

    // Display meta box form
    ?>
    <p>
        <label for="portfolio_meta"><strong>Portfolio Details (Category Overview):</strong></label>
        <textarea id="portfolio_meta" name="portfolio_meta" rows="5" style="width: 100%;"><?php echo esc_textarea($portfolio_meta); ?></textarea>
    </p>
    <?php
}

function save_portfolio_category_meta_box($post_id) {
    // Check if the save is valid
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['portfolio_meta'])) {
        update_post_meta($post_id, '_portfolio_meta', sanitize_textarea_field($_POST['portfolio_meta']));
    }
}
add_action('save_post', 'save_portfolio_category_meta_box');

// Register the Image Meta Box
// Register the Image Meta Box
function add_portfolio_image_meta_box() {
    add_meta_box(
        'portfolio_image_meta_box', // Unique ID
        'Portfolio Featured Image', // Title
        'portfolio_image_meta_box_callback', // Callback function
        'post', // Post type
        'normal', // Context
        'high' // Priority
    );
}
add_action('add_meta_boxes', 'add_portfolio_image_meta_box');

// Render the Image Meta Box with Media Library Picker
function portfolio_image_meta_box_callback($post) {
    $categories = wp_get_post_categories($post->ID, ['fields' => 'slugs']);
    if (!in_array('portfolio', $categories)) {
        echo '<p>This meta box is only available for posts in the "portfolio" category.</p>';
        return;
    }

    // Retrieve the saved image URL
    $portfolio_image = get_post_meta($post->ID, '_portfolio_image', true);

    // Render the input field and media picker
    ?>
    <p>
        <label for="portfolio_image"><strong>Portfolio Image:</strong></label>
    </p>
    <div style="display: flex; align-items: center; gap: 10px;">
        <input type="text" id="portfolio_image" name="portfolio_image" value="<?php echo esc_url($portfolio_image); ?>" style="width: 80%;" />
        <button type="button" id="portfolio_image_button" class="button">Select Image</button>
    </div>
    <p>
        <em>Select an image from the media library or paste the image URL here.</em>
    </p>
    <script>
        (function($) {
            $(document).ready(function() {
                let mediaUploader;
                $('#portfolio_image_button').click(function(e) {
                    e.preventDefault();
                    if (mediaUploader) {
                        mediaUploader.open();
                        return;
                    }
                    mediaUploader = wp.media({
                        title: 'Select Portfolio Image',
                        button: { text: 'Use this image' },
                        multiple: false
                    });
                    mediaUploader.on('select', function() {
                        const attachment = mediaUploader.state().get('selection').first().toJSON();
                        $('#portfolio_image').val(attachment.url);
                    });
                    mediaUploader.open();
                });
            });
        })(jQuery);
    </script>
    <?php
}

// Save the Image Meta Box Content
function save_portfolio_image_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    if (isset($_POST['portfolio_image'])) {
        update_post_meta($post_id, '_portfolio_image', esc_url_raw($_POST['portfolio_image']));
    }
}
add_action('save_post', 'save_portfolio_image_meta_box');




/* Custom Portfolio Post Navigation (looped) */

function get_portfolio_navigation() {
    // Get all posts in the "portfolio" category
    $all_posts = get_posts(array(
        'posts_per_page' => -1, // Get all posts in the category
        'category_name' => 'portfolio', // Slug of the "portfolio" category
        'orderby' => 'date',    // Order by date
        'order' => 'ASC',       // Oldest to newest
    ));

    // If there are no posts, return early
    if ( empty( $all_posts ) ) {
        return;
    }

    // Find the current post index
    $current_post_id = get_the_ID();
    $current_index = array_search($current_post_id, wp_list_pluck($all_posts, 'ID'));

    // Get the next and previous posts
    $next_index = ($current_index + 1) % count($all_posts); // Circular increment
    $prev_index = ($current_index - 1 + count($all_posts)) % count($all_posts); // Circular decrement

    $next_post = $all_posts[$next_index];
    $prev_post = $all_posts[$prev_index];

    // Output navigation HTML
    ob_start();
    ?>
    <nav class="post-navigation">
        <div class="nav-links">
            <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-post prevbutton">Previous: <?php echo get_the_title($prev_post->ID); ?></a>
            <a class="next-post nextbutton actionlink" href="<?php echo get_permalink($next_post->ID); ?>" ><div class="fontawesolid iconrotate" style="transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;"></div>
                <p>Next Project</p>
              </a>
        </div>
    </nav>
    <?php
    return ob_get_clean();
}
/*  Portfolio Post under /work */
// Custom permalink for portfolio posts under /work/
function custom_portfolio_permalink($permalink, $post, $leavename) {
    if ($post->post_type == 'post') {
        $categories = get_the_category($post->ID);
        foreach ($categories as $category) {
            if ($category->slug === 'portfolio') {
                return home_url('/work/' . $post->post_name);
            }
        }
    }
    return $permalink;
}
add_filter('post_link', 'custom_portfolio_permalink', 10, 3);

// Register custom rewrite rules for /work/ URLs
function add_portfolio_rewrite_rules() {
    add_rewrite_rule('^work/([^/]+)/?$', 'index.php?name=$matches[1]', 'top');
}
add_action('init', 'add_portfolio_rewrite_rules');

// Flush rewrite rules on activation
function flush_rewrite_rules_on_activation() {
    add_portfolio_rewrite_rules();
    flush_rewrite_rules();
}
register_activation_hook(__FILE__, 'flush_rewrite_rules_on_activation');

