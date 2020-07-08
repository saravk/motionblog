<?php
/**
 * The main template file
 *
 * @package Motion Blog
 */

// header
get_header();

get_template_part( 'template-parts/featured-slider' );

// blog posts with pagination and sidebar
get_template_part( 'template-parts/homepage' );

// footer
get_footer();
