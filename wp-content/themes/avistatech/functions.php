<?php

/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'twenty_twenty_one_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Twenty-One, use a find and replace
		 * to change 'twentytwentyone' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'twentytwentyone', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'twentytwentyone' ),
				'footer'  => esc_html__( 'Secondary menu', 'twentytwentyone' ),
				'header-menu' => esc_html__( 'Header Menu', 'twentytwentyone' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > Twenty_Twenty_One_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'twentytwentyone' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'twentytwentyone' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'twentytwentyone' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'twentytwentyone' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'twentytwentyone' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'twentytwentyone' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'twentytwentyone' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'twentytwentyone' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'twentytwentyone' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'twentytwentyone' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'twentytwentyone' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'twentytwentyone' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'twentytwentyone' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'twentytwentyone' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'twentytwentyone' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'twentytwentyone' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'twentytwentyone' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'twentytwentyone' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'twentytwentyone' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', twenty_twenty_one_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}
}
add_action( 'after_setup_theme', 'twenty_twenty_one_setup' );

/**
 * Register widget area.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function twenty_twenty_one_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'twenty_twenty_one_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function twenty_twenty_one_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'twenty_twenty_one_content_width', 750 );
}
add_action( 'after_setup_theme', 'twenty_twenty_one_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_scripts() {
	// Note, the is_IE global variable is defined by WordPress and is used
	// to detect if the current browser is internet explorer.
	global $is_IE, $wp_scripts;
	if ( $is_IE ) {
		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
	} else {
		// If not IE, use the standard stylesheet.
		wp_enqueue_style( 'twenty-twenty-one-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	}

	
	// Theme CSS ====================
	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), 'bootstrap-style' );

	if ( is_front_page() ) {
	wp_enqueue_style( 'docs-theme', get_template_directory_uri() . '/assets/css/docs.theme.min.css', array(), 'docs-theme' );
	wp_enqueue_style( 'theme-vendor-owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/assets/owl.carousel.min.css', array(), 'theme-vendor-owlcarousel' );
	wp_enqueue_style( 'themedefault-owlcarousel', get_template_directory_uri() . '/assets/owlcarousel/assets/owl.theme.default.min.css', array(), 'themedefault-owlcarousel' );

	wp_enqueue_style( 'slickcss', get_template_directory_uri() . '/assets/css/slick.min.css', array(), 'slickcss' );
	}

	
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/assets/css/style.css', array(), 'theme-style' );
	wp_enqueue_style( 'theme-default', get_template_directory_uri() . '/assets/css/media.css', array(), 'theme-default' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), 'fontawesome' );
	wp_enqueue_style( 'wizard-default', get_template_directory_uri() . '/assets/vendors/wizard/css/wizard.css', array(), 'wizard-default' );

	// End Theme CSS =================

	// RTL styles.
	wp_style_add_data( 'twenty-twenty-one-style', 'rtl', 'replace' );

	// Print styles.
	//wp_enqueue_style( 'twenty-twenty-one-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

	// Threaded comment reply styles.
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Register the IE11 polyfill file.
	wp_register_script(
		'twenty-twenty-one-ie11-polyfills-asset',
		get_template_directory_uri() . '/assets/js/polyfills.js',
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	// Register the IE11 polyfill loader.
	wp_register_script(
		'avistatech-array',
		null,
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
	wp_add_inline_script(
		'twenty-twenty-one-ie11-polyfills',
		wp_get_script_polyfill(
			$wp_scripts,
			array(
				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'twenty-twenty-one-ie11-polyfills-asset',
			)
		)
	);

	// Main navigation scripts.
	if ( has_nav_menu( 'primary' ) ) {
		wp_enqueue_script(
			'twenty-twenty-one-primary-navigation-script',
			get_template_directory_uri() . '/assets/js/primary-navigation.js',
			array( 'twenty-twenty-one-ie11-polyfills' ),
			wp_get_theme()->get( 'Version' ),
			true
		);
	}

	// Theme JS
	wp_enqueue_script(
		'avistatech-jquery-core',
		get_template_directory_uri() . '/assets/vendors/jquery.min.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
	);

	wp_enqueue_script(
		'avistatech-carousel',
		get_template_directory_uri() . '/assets/owlcarousel/owl.carousel.min.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'avistatech-bootstrapjs',
		get_template_directory_uri() . '/assets/js/bootstrap.min.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	

	wp_enqueue_script(
		'avistatech-slickjs',
		get_template_directory_uri() . '/assets/js/slick.min.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	

	wp_enqueue_script(
		'avistatech-custom',
		get_template_directory_uri() . '/assets/js/Custom.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'avistatech-highlight',
		get_template_directory_uri() . '/assets/js/highlight.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'avistatech-appjs',
		get_template_directory_uri() . '/assets/js/app.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'avistatech-wizardjs',
		get_template_directory_uri() . '/assets/vendors/wizard/js/wizard.js',
		array( 'avistatech-array' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	// End theme JS

	// Responsive embeds script.
	wp_enqueue_script(
		'twenty-twenty-one-responsive-embeds-script',
		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
		array( 'twenty-twenty-one-ie11-polyfills' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
	
	wp_enqueue_style( 'multishore-page', get_template_directory_uri() . '/assets/css/ms-pges-custom-form.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'location-page', get_template_directory_uri() . '/assets/css/custom-location.css', array(), '1.0.0', 'all' );
	wp_enqueue_script('formcus-js', get_template_directory_uri() . '/assets/js/form-custom.js', array(), '1.0.0', 'all');
	
	wp_enqueue_script('recaptcha-js', 'https://www.google.com/recaptcha/api.js');
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_scripts' );



// Custom Image size

function setup_the_theme() {
	add_image_size( 'blogthumbnail', 120, 91, true ); //portrait
}
add_action( 'after_setup_theme', 'setup_the_theme' );

/**
 * Enqueue block editor script.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_block_editor_script() {

	wp_enqueue_script( 'twentytwentyone-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'twentytwentyone_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @link https://git.io/vWdr2
 */
function twenty_twenty_one_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'twenty_twenty_one_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twenty_twenty_one_non_latin_languages() {
	$custom_css = twenty_twenty_one_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twenty-twenty-one-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'twenty_twenty_one_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-twenty-twenty-one-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-twenty-twenty-one-custom-colors.php';
new Twenty_Twenty_One_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-twenty-twenty-one-customize.php';
new Twenty_Twenty_One_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-twenty-twenty-one-dark-mode.php';
new Twenty_Twenty_One_Dark_Mode();

    // Custom Section
require get_template_directory() . '/inc/register-cpt.php';

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_preview_init() {
	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'twentytwentyone-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'twentytwentyone-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'twentytwentyone_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'twentytwentyone-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'twentytwentyone_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'twentytwentyone_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @return void
 */
function twentytwentyone_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'twentytwentyone_add_ie_class' );


// Theme option
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Option',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_page(array(
		'page_title' 	=> 'Slider General Settings',
		'menu_title'	=> 'Sliders Option',
		'menu_slug' 	=> 'sliders-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}
// Wp v4.7.1 and higher
function upload_twenty_mime_types_ext($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype( $filename, $mimes );
    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}
add_filter( 'wp_check_filetype_and_ext', 'upload_twenty_mime_types_ext', 10, 4 );
function upload_twenty_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'upload_twenty_mime_types');

// Multishore Page Form Code
function avistatechform_request() {
	$msg = "Something went wrong please try again.";
	$success = false;
	if( isset( $_POST['form_data'] ) ) {
		$form_data = $_POST['form_data'];
		$skill_text = $form_data['skillText'];
		$skill = "";
		foreach( $form_data['skill'] as $data ) {
			$skill .= sprintf( '<b>%s</b>: %s, ', $data['name'], $data['skill'] );
		}
		$roles = $form_data['roles'];
		$employees = $form_data['employees'];
		$job = $form_data['job'];
		$company_name = $form_data['company_name'];
		$first_name = $form_data['first_name'];
		$last_name = $form_data['last_name'];
		$email = $form_data['email'];
		$phone = $form_data['phone'];
		$contact = $form_data['contact'];
		$country = $form_data['country'];

		// Custom WP Mail Function
		$to = get_field( 'inquiry_form_email_address', 'option' );
		$subject = 'Form Request';
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$message = sprintf( '
		<b>Skill Input</b>: %7$s <br>
		<b>Skills Select</b>: %8$s<br>
		<b>Roles</b>: %9$s <br>
		<b>Employees no</b>: %10$s <br>
		<b>Job Type</b>: %11$s <br>
		<b>Preferred Location</b>: %12$s <br><br>
		
		<b>Name</b>: %1$s %2$s <br>
		<b>Company Name</b>: %3$s <br>
		<b>Email</b>: %4$s <br>
		<b>Phone</b>: %5$s <br>
		<b>Contact Mode</b>: %6$s <br>
		', $first_name, $last_name, $company_name, $email, $phone, $contact, $skill_text , $skill, $roles, $employees, $job, $country );

		$mail = wp_mail( $to, $subject, $message, $headers );

		if( $mail ) {
			$msg = "Successfully send data.";
			$success = true;
		} else {
			$msg = "Mail not send please try again.";
		}
	}

	$success ? wp_send_json_success($msg) : wp_send_json_error( $msg );
}
add_action("wp_ajax_avistatechform_request", "avistatechform_request");
add_action("wp_ajax_nopriv_avistatechform_request", "avistatechform_request");

// Home Page Form Code
function avistatech_expert_help_request() {
	$msg = "Something went wrong please try again.";
	$success = false;
	if( isset( $_POST['form_data'] ) ) {
		$form_data = $_POST['form_data'];
		$industry = $form_data['industry'];
		$business = $form_data['business'];
		$engagement = $form_data['engagement'];
		$first_name = $form_data['first_name'];
		$last_name = $form_data['last_name'];
		$email = $form_data['email'];
		$phone = $form_data['phone'];

		// Custom WP Mail Function
		$to = get_field( 'inquiry_form_email_address', 'option' );
		$subject = 'Form Request';
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$message = sprintf( '<b>Name</b>: %1$s %2$s <br>
		<b>Email</b>: %3$s <br>
		<b>Phone</b>: %4$s <br>
		<b>Industry</b>: %5$s <br>
		<b>Business Need</b>: %6$s <br>
		<b>Engagement Model</b>: %7$s <br>
		', $first_name, $last_name, $email, $phone, $industry, $business , $engagement );

		$mail = wp_mail( $to, $subject, $message, $headers );

		if( $mail ) {
			$msg = "Successfully send data.";
			$success = true;
		} else {
			$msg = "Mail not send please try again.";
		}
	}

	$success ? wp_send_json_success($msg) : wp_send_json_error( $msg );
}
add_action("wp_ajax_avistatech_expert_help_request", "avistatech_expert_help_request");
add_action("wp_ajax_nopriv_avistatech_expert_help_request", "avistatech_expert_help_request");

// Career Form Code
function careers_form_request() {
	$msg = "Something went wrong please try again.";
	$success = false;

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$course = $_POST['course'];
	$file = $_FILES['file'];
	
	$file_path  = get_template_directory() . '/assets/temp/';

	if( $fname && $lname && $email && $phone && $file ) {
		$filetype = wp_check_filetype( $file['name'] );
		$file_ext = "." . $filetype['ext'];
		$file_name = uniqid('file-') . $file_ext;
		
		$full_path = $file_path . $file_name;
		
		if ( move_uploaded_file( $file['tmp_name'], $full_path ) ) {
			
			// Custom WP Mail Function
			$to = get_field( 'careers_form_email_address', 'option' );
			$subject = 'Form Request';
			$headers[] = 'Content-Type: text/html; charset=UTF-8';
			$message = sprintf( '<b>Name</b>: %1$s %2$s <br>
			<b>Email</b>: %3$s <br>
			<b>Phone</b>: %4$s <br>
			<b>Apply For</b>: %5$s <br>
			', $fname, $lname, $email, $phone, $course );

			$mail = wp_mail( $to, $subject, $message, $headers, $full_path );

			if( $mail ) {
				$msg = "Successfully send data.";
				$success = true;
			} else {
				$msg = "Mail not send please try again.";
			}
		} else {
			$msg = "File not upload";
		}
	}

	$success ? wp_send_json_success($msg) : wp_send_json_error( $msg );
}
add_action("wp_ajax_careers_form_request", "careers_form_request");
add_action("wp_ajax_nopriv_careers_form_request", "careers_form_request");

// WordPress Email header Overwrite ~ ' SHIN '
// Function to change email address
function wpb_sender_email( $original_email_address ) {
	$SenderEmail = get_field('sender_email_setting', 'option');
    return $SenderEmail;
} 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    $SenderName = get_field('sender_name_setting', 'option');
    return $SenderName;
}
//set X-Frame-Options to DENY - ibs
function add_x_frame_options_header() {
    header("X-Frame-Options: SAMEORIGIN");
}
add_action('send_headers', 'add_x_frame_options_header');

// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );