<?php
/**
 * Arteries functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Arteries
 */

if ( ! function_exists( 'arteries_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function arteries_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Arteries, use a find and replace
		 * to change 'arteries' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'arteries', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'arteries' ),
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
		add_theme_support( 'custom-background', apply_filters( 'arteries_custom_background_args', array(
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
add_action( 'after_setup_theme', 'arteries_setup' );


/**
 * Shorten excerpts.
 */
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/[.+]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function arteries_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'arteries_content_width', 640 );
}
add_action( 'after_setup_theme', 'arteries_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function arteries_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'arteries' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'arteries' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arteries_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function arteries_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'arteries-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'arteries-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'arteries_scripts' );

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
 * Contact form.
 */
add_filter( 'wp_mail_from_name', 'my_mail_from_name' );
function my_mail_from_name( $name ) {
    return "Arteries";
}
add_filter( 'wp_mail_from', 'my_mail_from' );
function my_mail_from( $email ) {
    return "r.carbomascarell@gmail.com";
}
// AJAX send contact form
function contacts_form()
{
    $headers  = 'Content-type: text/html; charset=utf-8';
    $name = trim(htmlspecialchars($_POST['name']));
    $mail = trim(htmlspecialchars($_POST['email']));
    $comment = trim(htmlspecialchars($_POST['comment']));
    $mailTo = 'r.carbomascarell@gmail.com';
    //$mailTo = get_field('email', 'option');
    
    $textMessage = "<table>
                        <tr>
                            <td style='padding: 5px 0px;'><b>Name:</b></td>
                            <td style='padding: 5px 0px; padding-left: 20px;'>" . $name . "</td>
                        </tr>";
    if(!empty($mail)) {
        $textMessage .= "<tr>
                            <td style='padding: 5px 0px;'><b>E-mail:</b></td>
                            <td style='padding: 5px 0px; padding-left: 20px;'>" . $mail . "</td>
                        </tr>";
    }
    if(!empty($comment)) {
        $textMessage .= "<tr>
                            <td style='padding: 5px 0px;'><b>Comment:</b></td>
                            <td style='padding: 5px 0px; padding-left: 20px;'>" . $comment ."</td>
                        </tr>
                    </table>";
    }
    if(!empty($name) || !empty($mail) || !empty($phone)) {
        wp_mail($mailTo, '|Arteries', $textMessage, $headers);
    }
    wp_die();
}
add_action('wp_ajax_contacts_form', 'contacts_form');
add_action('wp_ajax_nopriv_contacts_form', 'contacts_form');