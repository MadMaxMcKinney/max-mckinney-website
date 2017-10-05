<?php
/**
 * webontheside functions and definitions
 *
 * @package webontheside
 */

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

if ( ! function_exists( 'webontheside_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function webontheside_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on webontheside, use a find and replace
	 * to change 'webontheside' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'webontheside', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'webontheside' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'webontheside_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // webontheside_setup
add_action( 'after_setup_theme', 'webontheside_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function webontheside_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'webontheside_content_width', 640 );
}
add_action( 'after_setup_theme', 'webontheside_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function webontheside_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'webontheside' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'webontheside_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function webontheside_scripts() {
	wp_enqueue_style( 'webontheside-style', get_stylesheet_uri() );

	wp_enqueue_script( 'webontheside-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'webontheside-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'webontheside_scripts' );

// New Read More tag
function new_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

//
// REGISTER MENUS \\
//

function register_side_menu() {
  register_nav_menu('side-menu',__( 'Side Main Menu' ));
  register_nav_menu('hero-menu',__( 'Hero Main Menu' ));
}
add_action( 'init', 'register_side_menu' );



//
//
// REGISTER POST TYPES \\
//
//

function create_posttypes() {

	// register_post_type( 'androidapps',
	// // CPT Options
	// 	array(
	// 		'labels' => array(
	// 			'name' => __( 'Android Apps' ),
	// 			'singular_name' => __( 'Android App' )
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => 'androidapps'),
    //         'supports' => array('title','editor','thumbnail','custom-fields', 'excerpt'),
	// 	)
	// );
	//
    // register_post_type( 'websites',
	// // CPT Options
	// 	array(
	// 		'labels' => array(
	// 			'name' => __( 'Websites' ),
	// 			'singular_name' => __( 'Website' )
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => 'websites'),
    //         'supports' => array('title','editor','thumbnail','custom-fields', 'excerpt'),
	// 	)
	// );
	//
    // register_post_type( 'films',
	// // CPT Options
	// 	array(
	// 		'labels' => array(
	// 			'name' => __( 'Films' ),
	// 			'singular_name' => __( 'Film' )
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => 'films'),
    //         'supports' => array('title','editor','thumbnail','custom-fields', 'excerpt'),
	// 	)
	// );
	//
    // register_post_type( 'contractor-work',
	// // CPT Options
	// 	array(
	// 		'labels' => array(
	// 			'name' => __( 'Contractor Work' ),
	// 			'singular_name' => __( 'Contractor Work' )
	// 		),
	// 		'public' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => 'contractor-work'),
    //         'supports' => array('title','editor','thumbnail','custom-fields', 'excerpt'),
	// 	)
	// );

	register_post_type( 'project',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Projects' ),
				'singular_name' => __( 'Project' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'project'),
            'supports' => array('title','editor','thumbnail','custom-fields', 'excerpt'),
			'taxonomies'  => array( 'category' ),
		)
	);

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttypes' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
