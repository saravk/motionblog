<?php
/**
 * The template part for displaying post author section.
 *
 * @package MotionBlog
 */

$author_id = get_the_author_meta('ID');
?>
<div class="post-author">
  <div class="author">
    <div class="author-avatar">
      <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" rel="author"><?php echo get_avatar( $author_id, '100' ); ?></a>
    </div>
    <div class="author-data">
      <div class="author-name">
        <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" rel="author">
          <h3><?php the_author_meta( 'display_name', $author_id ); ?></h3>
        </a>
      </div>
      <div class="author-description"><?php the_author_meta( 'description', $author_id ); ?></div>
    </div>
  </div>
</div>
