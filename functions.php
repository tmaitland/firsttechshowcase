<?php
/**
 * firsttechshowcase functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package firsttechshowcase
 */

if ( ! function_exists( 'firsttechshowcase_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function firsttechshowcase_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on firsttechshowcase, use a find and replace
		 * to change 'firsttechshowcase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'firsttechshowcase', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'firsttechshowcase' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'firsttechshowcase_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	
			add_theme_support( 'custom-header', array(
				// 'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
				'default-text-color' => '000',
				'width'              => 1000,
				'height'             => 500,
				'flex-width'         => true,
				'flex-height'        => true,
			) );
		
	}
endif;
add_action( 'after_setup_theme', 'firsttechshowcase_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function firsttechshowcase_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'firsttechshowcase_content_width', 640 );
}
add_action( 'after_setup_theme', 'firsttechshowcase_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function firsttechshowcase_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'firsttechshowcase' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'firsttechshowcase' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'firsttechshowcase_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function firsttechshowcase_scripts() {
	wp_enqueue_style( 'firsttechshowcase-style', get_stylesheet_uri() );

	wp_enqueue_script( 'firsttechshowcase-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'firsttechshowcase-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'firsttechshowcase_scripts' );

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

show_admin_bar( true );
/**
 * Enqueue scripts and styles.
 */
function firstportfolio_scripts() {
	wp_enqueue_style( 'firstportfolio-style', get_stylesheet_uri() );

	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'firstportfolio_scripts' );

function fp_theme_styles() {
	wp_enqueue_style('materialize_css', get_template_directory_uri() . '/css/materialize.css');
	wp_enqueue_style('font_awesome_css', get_template_directory_uri() . '/css/font-awesome.css');
	wp_enqueue_style('pro_bars_css', get_template_directory_uri() . '/css/pro-bars.css');
	wp_enqueue_style('owl_carousel_css', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style('default_theme_css', get_template_directory_uri() . '/css/themes/default-theme.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'fp_theme_styles');

function fp_theme_scripts() {
	wp_enqueue_script('materialize_js', get_template_directory_uri() . '/js/materialize.min.js', '', '', true);
	wp_enqueue_script('appear_js', get_template_directory_uri() . '/js/appear.min.js', '', '', true);
	wp_enqueue_script('pro_bars_js', get_template_directory_uri() . '/js/pro-bars.min.js', '', '', true);
	wp_enqueue_script('owl_carousel_js', get_template_directory_uri() . '/js/owl.carousel.min.js', '', '', true);
	wp_enqueue_script('waypoints_js', get_template_directory_uri() . '/js/waypoints.min.js', '', '', true);
	wp_enqueue_script('jquery_counterup_js', get_template_directory_uri() . '/js/jquery.counterup.min.js', '', '', true);
	wp_enqueue_script('custom_js', get_template_directory_uri() . '/js/custom.js', '', '', true);
}
add_action('wp_enqueue_scripts', 'fp_theme_scripts');



/**
 * Custom menu initialized
 */
function wpb_custom_new_menu() {
	register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

  /**
   * Custom logo
   */

  function theme_logo_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_logo_setup' );

	

/** Excerpt for home page */

// function new_excerpt_more($more) {
// 	global $post;
//  return '<a class="moretag" href="'. get_permalink($post->ID) . '"> Read more...</a>';
// }
// add_filter('excerpt_more', 'new_excerpt_more');

