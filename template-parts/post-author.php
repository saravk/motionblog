<?php
/**
 * The template part for displaying post author section.
 *
 * @package MotionBlog
 */

$author_id = get_the_author_meta('ID');
?>
<div class="post-author-container">
  <div class="post-author-content">
    <div class="author-avatar">
      <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" rel="author"><?php echo get_avatar( $author_id, '150' ); ?></a>
    </div>
    <div class="author-data">
      <div class="author-name">
        Written by <a href="<?php echo esc_url( get_author_posts_url( $author_id ) ); ?>" rel="author"><?php the_author_meta( 'display_name', $author_id ); ?></a>
      </div>
      <div class="author-description">
        <?php the_author_meta( 'description', $author_id ); ?>
      </div>
      <div class="author-social-links">
        <?php mb_author_social_links($author_id);?>
      </div>
    </div>
  </div>
</div>
