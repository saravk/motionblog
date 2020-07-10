  <?php
/**
 * The template for displaying a Post's Summary in a Homepage
 *
 * @package MotionBlog
 */
?>

<div class="post-meta-section">        
  By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" rel="author"><?php the_author_meta( 'nickname', get_the_author_meta('ID') ); ?></a> | <?php echo get_the_date(); ?>
<?php 
  if (get_post_meta($post->ID, 'featured-checkbox', true) == 'yes') {
?>
    <span class="label label-featured">Featured</span>
<?php 
  }
  $ageunix = get_the_time('U');
  $days_old_in_seconds = ((time() - $ageunix));
  $days_old = (($days_old_in_seconds/86400));
  if ($days_old < 10) {
?>                
    <span class="label label-new">New</span>
<?php
  }
?>
</div>