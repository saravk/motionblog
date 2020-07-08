<?php
/**
 * Featured Slider Item
 *
 * @package MotionBlog
 */
?>      

<div class="featured-slider-item">
  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('square', ['layout' => 'responsive', 'style' => 'overflow:hidden;' ]); ?></a>
  <div class="featured-item-content">
    <h3><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <div class="post-meta-section">
      <span class="post-category">
        <?php echo get_the_category_list(); ?>
      </span>
    </div>
  </div>
</div>