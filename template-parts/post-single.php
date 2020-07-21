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
    <section class="post-block post-header">
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
  <section class="post-block">
<?php   
    /* translators: Used between list items, there is a space after the comma. */
    $tags_list = get_the_tag_list( '<span class="post-tags-meta">#</span>', __( ', <span class="post-tags-meta">#</span>', 'motionblog' ) );
    if ( $tags_list && ! is_wp_error( $tags_list ) ) {
      printf(
        /* translators: 1: SVG icon. 2: Posted in label, only visible to screen readers. 3: List of tags. */
        '<div class="post-tags">%1$s<span class="screen-reader-text">%2$s </span>%3$s</div>',
        '<span class="post-tags-head">Tags : </span>',
        __( 'Tags:', 'motionblog' ),
        $tags_list
      ); // WPCS: XSS OK.
    }
?>
  </section>
  <section class="post-block">
<?php    
  the_post_navigation(
    array(
      'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'motionblog' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Next:', 'motionblog' ) . '</span>' .
        '<span class="post-title">%title</span>',
      'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'motionblog' ) . '</span> ' .
        '<span class="screen-reader-text">' . __( 'Previous:', 'motionblog' ) . '</span>' .
        '<span class="post-title">%title</span>',
    )
  );  
?>
  </section>
</article>

<div class="post-block">
  <?php get_template_part( 'template-parts/post-author' );?>  
</div>
<div class="post-block post-comments">
<?php    
    if ( comments_open() || get_comments_number() ) {
      comments_template();
    }
?>        
</div>
<!-- <section class="post-prevnext">
  <span class="prev"><?php previous_post_link(); ?></span><span class="next"><?php next_post_link(); ?></span>
</section> -->  