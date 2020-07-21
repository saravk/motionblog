<?php
/**
 * The template for displaying a Singple Post
 *
 * @package MotionBlog
 */
?>

<article class="post-page">
<?php 
  if ( has_post_thumbnail() && (get_post_meta($post->ID, 'featured-cover-checkbox', true) == 'yes')) { 
?>
    <?php get_template_part( 'template-parts/post-cover' );?>  
<?php 
  } else { 
?>  
    <section class="post-header">
      <div class="post-category">
        <?php echo get_the_category_list(); ?>
      </div>
      <h1><?php the_title(); ?></h1>
      <?php get_template_part( 'template-parts/post-meta' );?>  
    </section>
<?php
  }
?>
  <section class="post-content clearfix">
    <div class="post-content-text">
      <?php the_content();?>
    </div>
  </section>
<?php   
  the_post_navigation(
    array(
      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'motionblog' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Next:', 'motionblog' ) . '</span>' .
        '<span class="post-title">%title</span>',
      'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'motionblog' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Previous:', 'motionblog' ) . '</span>' .
        '<span class="post-title">%title</span>',
    )
  );  
?>
</article>

<?php get_template_part( 'template-parts/post-author' );?>  
<div class="post-comments">
<?php    
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
?>        
</div>
<!-- <section class="post-prevnext">
  <span class="prev"><?php previous_post_link(); ?></span><span class="next"><?php next_post_link(); ?></span>
</section> -->  