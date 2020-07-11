<?php
/**
 * The template for displaying a Post's Cover Image
 *
 * @package MotionBlog
 */
?>

<div class="panel-cover clearfix">
  <?php the_post_thumbnail('large', ['layout' => 'responsive']); ?>
  <div class="panel-cover-shade"></div>
  <div class="panel-cover-header">
    <h1><?php the_title(); ?></h1>
<?php 
    if (get_post_meta($post->ID, 'featured-cover-blurb', true) != '') {
?>
      <div class="blurb">
        <?php _e(get_post_meta($post->ID, 'featured-cover-blurb', true))?>
      </div>
<?php      
    }
?>    
    <?php get_template_part( 'template-parts/post-meta' );?>
  </div>
  </div>
</div>