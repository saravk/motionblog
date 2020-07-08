<?php
/**
 * Homepage Featured Slider
 *
 * @package MotionBlog
 */


//Get all the posts under the current category with the featured-checkbox set to yes
$args = array('posts_per_page' => 5, 'post_type' => 'post', 'meta_key' => 'featured-checkbox', 'meta_value' => 'yes', 'cat' => get_query_var('cat'));
$featured = new WP_Query($args);

//Need a minimum of 4 posts to show the featured slider in the home page
if ($featured->found_posts >= 4 and $featured->have_posts()) {
?>
  <amp-carousel class="featured-slider-container" id="featured-carousel" height="450px" layout="fixed-height" type="carousel">
<?php     
    while($featured->have_posts()) {
      $featured->the_post();
      get_template_part( 'template-parts/featured-slider-item' );
    }
?>
  </amp-carousel>
<?php  
}
?>