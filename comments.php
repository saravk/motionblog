<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if ( post_password_required() ) {
  return;
}

$discussion = mb_get_discussion_data();
?>

<div id="comments" class="<?php echo comments_open() ? 'comments-area' : 'comments-area comments-closed'; ?>">
  <div class="<?php echo $discussion->responses > 0 ? 'comments-title-wrap' : 'comments-title-wrap no-responses'; ?>">
<?php
    if (  have_comments() || comments_open() ) {
      echo '<h2 class="comments-title"> THERE ARE <span class="comment-count">' .$discussion->responses . '</span> COMMENTS</h2>';
    }
?>
    
<?php
    // Only show discussion meta information when comments are open and available.
    if ( have_comments() && comments_open() ) {
      //get_template_part( 'template-parts/post/discussion', 'meta' );
    }
?>
  </div><!-- .comments-title-flex -->
  <?php
  if ( have_comments() ) :

    // Show comment form at top if showing newest comments at the top.
    if ( comments_open() ) {
      mb_comment_form( 'desc' );
    }

    ?>
    <ol class="comment-list">
      <?php wp_list_comments(array('walker'      => new MB_Walker_Comment(), 'avatar_size' => mb_get_avatar_size(), 'short_ping'  => true, 'style' => 'ol',));?>
    </ol><!-- .comment-list -->
    <?php

    // Show comment navigation.
    if ( have_comments() ) {
      $comments_text = __( 'Comments', 'twentynineteen' );
      the_comments_navigation(
        array(
          'prev_text' => sprintf( '« %s %s', __( 'Previous', 'twentynineteen' ), __( 'Comments', 'twentynineteen' ) ),
          'next_text' => sprintf( '%s %s »', __( 'Next', 'twentynineteen' ), __( 'Comments', 'twentynineteen' )),
        )
      );
    }

    // Show comment form at bottom if showing newest comments at the bottom.
    if ( comments_open() && 'asc' === strtolower( get_option( 'comment_order', 'asc' ) ) ) :
      ?>
      <div class="comment-form-flex">
        <span class="screen-reader-text"><?php _e( 'Leave a comment', 'twentynineteen' ); ?></span>
        <?php mb_comment_form( 'asc' ); ?>
      </div>
      <?php
    endif;

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() ) :
      ?>
      <p class="no-comments">
        <?php _e( 'Comments are closed.', 'twentynineteen' ); ?>
      </p>
      <?php
    endif;

  else :

    // Show comment form.
    mb_comment_form( true );

  endif; // if have_comments();
  ?>
</div><!-- #comments -->
