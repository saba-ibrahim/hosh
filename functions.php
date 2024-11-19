<?php
/**
 * hosh functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hosh
 */

if ( ! function_exists( 'hosh_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function hosh_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hosh, use a find and replace
		 * to change 'hosh' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'hosh', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'القائمة الرئيسية', 'hosh' ),
            'menu-2' => esc_html__( 'القائمة الجانبية', 'hosh' ),
            'menu-3' => esc_html__( 'القائمة العلوية', 'hosh' ),
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
		add_theme_support( 'custom-background', apply_filters( 'hosh_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'hosh_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hosh_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'hosh_content_width', 640 );
}
add_action( 'after_setup_theme', 'hosh_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hosh_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'hosh' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'hosh' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'hosh_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hosh_scripts() {
      
    
    wp_enqueue_style('bootstrap', get_parent_theme_file_uri() . '/css/bootstrap.min.css', array(), '4.0.0');

    wp_enqueue_style('owlcarousel', get_parent_theme_file_uri() . '/css/owl.carousel.css', array(), '4.0.0');
    wp_enqueue_style('owltheme', get_parent_theme_file_uri() . '/css/owl.theme.css', array(), '4.0.0');


    
	wp_enqueue_style( 'hosh-style', get_stylesheet_uri() );

	wp_enqueue_script( 'hosh-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'hosh-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script( 'owl.carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '20151215', true );

    wp_enqueue_script( 'owl.hosh', get_template_directory_uri() . '/js/hosh.js', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'hosh_scripts' );

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

/* =========================== كود السلايدر

/* ------ (01) slider -------*/
function custom_post_type() {

 $labels = array(
   'name'                  => __( 'سلايدر', 'niletheme' ), //
	 'singular_name'         => __( 'سلايد', 'niletheme' ),
	 'menu_name'             => __( 'السلايدر', 'niletheme' ),
 );
 $rewrite = array(
	 'slug'                => 'slider',
	 'with_front'          => true,
	 'pages'               => true,
	 'feeds'               => true,
 );
 $args = array(
	 'labels'              => $labels,
	 'supports'              => array( 'title', 'thumbnail' ),
	 'hierarchical'        => false,
	 'public'              => true,
	 'show_ui'             => true,
	 'show_in_menu'        => true,
	 'show_in_nav_menus'   => true,
	 'show_in_admin_bar'   => true,
	 'menu_position'       => 6,
	 'can_export'          => true,
	 'has_archive'         => true,
	 'exclude_from_search' => false,
	 'publicly_queryable'  => true,
	 'rewrite'             => $rewrite,
	 'capability_type'     => 'page',
 );
 register_post_type( 'slider', $args );

}
add_action( 'init', 'custom_post_type', 0 );
