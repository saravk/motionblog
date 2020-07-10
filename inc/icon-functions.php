<?php
/**
 * SVG icons related functions
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Gets the SVG code for a given icon.
 */
function mb_get_icon_svg( $icon, $size = 24 ) {
	return MB_SVG_Icons::get_svg( 'ui', $icon, $size );
}

/**
 * Gets the SVG code for a given social icon.
 */
function mb_get_social_icon_svg( $icon, $size = 24 ) {
	return MB_SVG_Icons::get_svg( 'social', $icon, $size );
}

/**
 * Detects the social network from a URL and returns the SVG code for its icon.
 */
function mb_get_social_link_svg( $uri, $size = 24 ) {
	return MB_SVG_Icons::get_social_link_svg( $uri, $size );
}

