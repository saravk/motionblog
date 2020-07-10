<?php
/**
 * Common theme functions
 *
 * @package MotionBlog
 */




/**
 * Returns the size for avatars used in the theme.
 */
function mb_get_avatar_size() {
  return 60;
}

/**
 * Returns true if comment is by author of the post.
 *
 * @see get_comment_class()
 */
function mb_is_comment_by_post_author( $comment = null ) {
  if ( is_object( $comment ) && $comment->user_id > 0 ) {
    $user = get_userdata( $comment->user_id );
    $post = get_post( $comment->comment_post_ID );
    if ( ! empty( $user ) && ! empty( $post ) ) {
      return $comment->user_id === $post->post_author;
    }
  }
  return false;
}

/**
 * Returns information about the current post's discussion, with cache support.
 */
function mb_get_discussion_data() {
  static $discussion, $post_id;

  $current_post_id = get_the_ID();
  if ( $current_post_id === $post_id ) {
    return $discussion; /* If we have discussion information for post ID, return cached object */
  } else {
    $post_id = $current_post_id;
  }

  $comments = get_comments(
    array(
      'post_id' => $current_post_id,
      'orderby' => 'comment_date_gmt',
      'order'   => get_option( 'comment_order', 'asc' ), /* Respect comment order from Settings » Discussion. */
      'status'  => 'approve',
      'number'  => 20, /* Only retrieve the last 20 comments, as the end goal is just 6 unique authors */
    )
  );

  $authors = array();
  foreach ( $comments as $comment ) {
    $authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
  }

  $authors    = array_unique( $authors );
  $discussion = (object) array(
    'authors'   => array_slice( $authors, 0, 6 ),           /* Six unique authors commenting on the post. */
    'responses' => get_comments_number( $current_post_id ), /* Number of responses. */
  );

  return $discussion;
}



/**
 * Filters the default archive titles.
 */
function mb_get_the_archive_title() {
  if ( is_category() ) {
    $title = __( 'Category Archives: ', 'motionblog' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
  } elseif ( is_tag() ) {
    $title = __( 'Tag Archives: ', 'motionblog' ) . '<span class="page-description">' . single_term_title( '', false ) . '</span>';
  } elseif ( is_author() ) {
    $title = __( 'Author Archives: ', 'motionblog' ) . '<span class="page-description">' . get_the_author_meta( 'display_name' ) . '</span>';
  } elseif ( is_year() ) {
    $title = __( 'Yearly Archives: ', 'motionblog' ) . '<span class="page-description">' . get_the_date( _x( 'Y', 'yearly archives date format', 'motionblog' ) ) . '</span>';
  } elseif ( is_month() ) {
    $title = __( 'Monthly Archives: ', 'motionblog' ) . '<span class="page-description">' . get_the_date( _x( 'F Y', 'monthly archives date format', 'motionblog' ) ) . '</span>';
  } elseif ( is_day() ) {
    $title = __( 'Daily Archives: ', 'motionblog' ) . '<span class="page-description">' . get_the_date() . '</span>';
  } elseif ( is_post_type_archive() ) {
    $title = __( 'Post Type Archives: ', 'motionblog' ) . '<span class="page-description">' . post_type_archive_title( '', false ) . '</span>';
  } elseif ( is_tax() ) {
    $tax = get_taxonomy( get_queried_object()->taxonomy );
    /* translators: %s: Taxonomy singular name. */
    $title = sprintf( esc_html__( '%s Archives:', 'motionblog' ), $tax->labels->singular_name );
  } else {
    $title = __( 'Archives:', 'motionblog' );
  }
  return $title;
}
add_filter( 'get_the_archive_title', 'mb_get_the_archive_title' );