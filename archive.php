<?php
/**
 * The template for displaying Archive pages
 *
 * @package MotionBlog
 */

// header
get_header();

get_template_part( 'template-parts/featured-slider' );

// blog posts with pagination and sidebar
get_template_part( 'template-parts/homepage' );

// footer
get_footer();
