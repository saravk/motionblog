<?php
/**
 * Customizer Functions
 *
 * @package MotionBlog
 */

function mb_customize_register( $wp_customize ) {

  // Footer Settings
  require get_template_directory() . '/inc/theme-mods/footer-settings.php';

  // Social Links
  require get_template_directory() . '/inc/theme-mods/social-links.php';
  
}
add_action( 'customize_register', 'mb_customize_register' );
