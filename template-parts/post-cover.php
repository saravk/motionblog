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
    <div class="blurb">
    </div>
    <?php get_template_part( 'template-parts/post-meta' );?>
  </div>
  </div>
</div>