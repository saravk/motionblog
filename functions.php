<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'MOTIONBLOG_VERSION', 1.0 );


if ( ! function_exists( 'mb_setup' ) ) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function mb_setup() {

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
      'primary' => esc_html__( 'Primary' ),
      'footer'  => esc_html__( 'Footer' ),
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

    // Add support for responsive embeds.
    add_theme_support( 'responsive-embeds' );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for full and wide align images.
    add_theme_support( 'align-wide' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );
    

    // Add support for core custom logo.
    add_theme_support( 'custom-logo', array(
      'height'      => 512,
      'width'       => 512,
      'flex-width'  => true,
    ) );

    // Register theme styles.
    wp_register_style( 'mb-styles', get_template_directory_uri() . '/style.css', array() );

    // Enqueue theme styles.
    wp_enqueue_style( 'mb-styles' );        

    // Enqueue theme styles.
    add_image_size( 'square', 600, 600, true ); // (cropped)
  }
}
add_action( 'after_setup_theme', 'mb_setup' );


// Customizer functions
require get_template_directory() . '/inc/customizer.php';

// Sanitize functions
require get_template_directory() . '/inc/sanitize.php';

// Featured Posts
require get_template_directory() . '/inc/featured-posts.php';

// Social links
require get_template_directory() . '/inc/social-links.php';
