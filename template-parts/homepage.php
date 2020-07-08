<?php
/**
 * The template for displaying blog posts with pagination and sidebar
 *
 * @package Neblue
 */


get_template_part( 'template-parts/featured-slider' );
?>

<div class="post-list-container">
  <?php
  if ( have_posts() ) {

    // Load posts loop.
    while ( have_posts() ) {
      the_post();
      get_template_part( 'template-parts/post-card' );
    }

    if ( 'pagination' === get_theme_mod( 'homepage_pagination_type', 'pagination' ) ) {
      the_posts_pagination( array(
        'prev_text'      => '← PREV',
        'next_text'      => 'NEXT →',
      ) );
    } else {
      the_posts_navigation( array(
        'prev_text'      => '<i class="vs-icon vs-icon-caret-left"></i> ' . esc_html__('Older posts','neblue'),
        'next_text'      => esc_html__('Newer posts','neblue') . ' <i class="vs-icon vs-icon-caret-right"></i>',
      ) );
    }

  } else {
    ?>
    <div class="entry-content content-not-found">
      <h2><?php esc_html_e( 'Nothing found', 'neblue' ); ?></h2>
      <?php if ( current_user_can( 'publish_posts' ) ) { ?>
        <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'neblue' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>
      <?php } else { ?>
        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'neblue' ); ?></p>
      <?php } ?>
    </div>
    <?php
  }
  ?>
</div>