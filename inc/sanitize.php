<?php
/**
 * Data sanitization functions
 *
 * @package MotionBlog
 */

// Sanitize number
function mb_sanitize_number( $input ) {
  if ( is_numeric( $input ) && $input >= 1 ) {
    return intval( $input );
  } else {
    return '';
  }
}

// Sanitize checkbox
function mb_sanitize_checkbox( $input ){
  if ( 1 === (int) $input ) {
    return 1;
  } else {
    return 0;
  }
}

// Sanitize sidebar
function mb_sanitize_sidebar( $input ) {
  if ( ! in_array( $input, array( 'right', 'left', 'disabled' ) ) ) {
    $input = 'right';
  }
  return $input;
}

// Sanitize summary
function mb_sanitize_summary( $input ) {
  if ( ! in_array( $input, array( 'excerpt', 'content' ) ) ) {
    $input = 'excerpt';
  }
  return $input;
}

// Sanitize pagination type
function mb_sanitize_pagination_type( $input ) {
  if ( ! in_array( $input, array( 'pagination', 'navigation' ) ) ) {
    $input = 'pagination';
  }
  return $input;
}

// Sanitize link target
function mb_sanitize_link_target( $input ) {
  if ( ! in_array( $input, array( 'same', 'new' ) ) ) {
    $input = 'new';
  }
  return $input;
}
