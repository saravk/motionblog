<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package MotionBlog
 */



if ( ! function_exists( 'mb_comment_form' ) ) {
  /**
   * Documentation for function.
   */
  function mb_comment_form( $order ) {
    if ( true === $order || strtolower( $order ) === strtolower( get_option( 'comment_order', 'asc' ) ) ) {

      // comment_form(
      //   array(
      //     'logged_in_as' => null,
      //     'title_reply'  => null,
      //   )
      // );

      $commenter = wp_get_current_commenter();
      $req = get_option( 'require_name_email' );
      $aria_req = ( $req ? " aria-required='true'" : '' );
      $fields =  array(
          'author' => '<div class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
              '<input id="author" name="author" type="text" value="'.esc_attr( $commenter['comment_author']).'" size="30"'.$aria_req.' /></div>',
          'email'  => '<div class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
              '<input id="email" name="email" type="text" value="'.esc_attr(  $commenter['comment_author_email']) .'" size="30"'.$aria_req.' /></div>',
      );
      $comments_args = array(
          'fields' =>  $fields
      );
      comment_form($comments_args);      
    }
  }
}

/**
 * Move the comment field to the botttom of the form
 */

function mb_move_comment_field_to_bottom( $fields ) {
  $comment_field = $fields['comment'];
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  return $fields;
}
add_filter( 'comment_form_fields', 'mb_move_comment_field_to_bottom' );

/**
 * Changes comment form default fields.
 */
function mb_comment_form_defaults( $defaults ) {
  $comment_field = $defaults['comment_field'];

  // Adjust height of comment form.
  $defaults['comment_field'] = preg_replace( '/rows="\d+"/', 'rows="5"', $comment_field );

  return $defaults;
}
add_filter( 'comment_form_defaults', 'mb_comment_form_defaults' );