<?php
/**
 * The template for displaying a Singple Post
 *
 * @package MotionBlog
 */
?>

<article class="post-page">
  <section class="post-header">
    <div class="post-category">
      <?php echo get_the_category_list(); ?>
    </div>
    <h1 class="post-title">
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    </h1>
    <div class="post-meta-section">
      By <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')))?>" rel="author"><?php the_author_meta( 'display_name', $author_id ); ?></a> | <?php echo get_the_date(); ?>
    </div>    
  </section>
  <section class="post-content">
    <div class="post-content-text">
      <?php the_content();?>
    </div>
  </section>
</article>
<?php get_template_part( 'template-parts/post-author' );?>  
<section class="post-prevnext">
  <span class="prev"><?php previous_post_link(); ?></span><span class="next"><?php next_post_link(); ?></span>
</section>  