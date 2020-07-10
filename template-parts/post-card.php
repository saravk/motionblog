<?php
/**
 * The template for displaying a Post's Summary in a Homepage
 *
 * @package MotionBlog
 */
?>
<article class="post-item entry">
  <section class="post-image-wrapper">
    <?php if ( get_theme_mod( 'homepage_preview_image', 1 ) && has_post_thumbnail() ) { ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium_large'); ?></a>
    <?php } ?>
  </section>
  <section class="post-item-summary">
    <div class="post-item-text">
      <div class="post-category">
        <?php echo get_the_category_list(); ?>
      </div>
      <h2 class="post-title">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </h2>
      <?php get_template_part( 'template-parts/post-meta' );?>
      <div class="post-excerpt">
        <?php echo wp_kses( get_the_excerpt(), 'post' ); ?>
      </div>
      <a class="post-more-link" href="<?php the_permalink(); ?>">Read More</a>
    </div>
  </section>
</article>