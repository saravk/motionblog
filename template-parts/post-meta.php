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
  $postfeatured = (get_post_meta($post->ID, 'featured-checkbox', true) == 'yes') ? true : false;

  //Get the age of the post
  $ageunix = get_the_time('U');
  $days_old_in_seconds = ((time() - $ageunix));
  $days_old = (($days_old_in_seconds/86400));
  $postnew = ($days_old < 10) ? true : false;

  if ($postfeatured || $postnew) {
?>
    | 
<?php        
  }
  if ($postfeatured) {
?>
    <span class="label label-featured">Featured</span>
<?php 
  }

  if ($postnew) {
?>                
    <span class="label label-new">New</span>
<?php
  }
?>
</div>