<?php 
/**
 * Featured Cover for Posts
 *
 * @package MotionBlog
 */

function mb_add_featured_cover_meta() {
  add_meta_box( 'mb_featured_cover_meta', __( 'Featured Cover'), 'mb_featured_cover_meta_callback', 'post', 'side');
}

function mb_featured_cover_meta_callback( $post ) {
  $featured = get_post_meta( $post->ID );
  ?>
 
  <p>
    <div class="clearfix">
      <label for="featured-cover-checkbox">
        <input type="checkbox" name="featured-cover-checkbox" id="featured-cover-checkbox" value="yes" <?php if ( isset ( $featured['featured-cover-checkbox'] ) ) checked( $featured['featured-cover-checkbox'][0], 'yes' ); ?> />
        <?php _e( 'Use Featured Image as Cover' )?>
      </label>
    </div>
  </p>
  <?php
}
add_action( 'add_meta_boxes', 'mb_add_featured_cover_meta' );

/**
 * Saves the Featured meta input
 */
function mb_save_featured_cover_meta( $post_id ) {
 
  // Checks save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'mb_nonce' ] ) && wp_verify_nonce( $_POST[ 'mb_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exits script depending on save status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
      return;
  }
 
  // Checks for input and saves
  if( isset( $_POST[ 'featured-cover-checkbox' ] ) ) {
      update_post_meta( $post_id, 'featured-cover-checkbox', 'yes' );
  } else {
      update_post_meta( $post_id, 'featured-cover-checkbox', '' );
  }
}
add_action( 'save_post', 'mb_save_featured_cover_meta' );