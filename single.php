<?php
/**
 * The template for displaying all single posts
 *
 * @package Neblue
 */

// header
get_header();

$post_id = $post->ID;
$post_sidebar = get_post_meta( $post_id, 'vs_singular_sidebar', true );
if ( ! $post_sidebar || 'default' === $post_sidebar ) {
  $post_sidebar = get_theme_mod( 'post_sidebar', 'right' );
}
?>
<div class="site-content sidebar-<?php echo esc_attr( $post_sidebar ); ?>">
  <div class="vs-container">
    <div id="content" class="main-content">


          <div id="primary" class="content-area">
            <main id="main" class="site-main">

            <?php
            while ( have_posts() ) {
              the_post();
            ?>

            <?php get_template_part( 'template-parts/post-single' ); ?>

            <?php do_action( 'vs_post_after' ); ?>
            
            <?php
            }
            ?>

            </main>
          </div>

      <?php
      if ( 'disabled' !== $post_sidebar ) {
        get_sidebar(); 
      }
      ?>
    </div>
  </div>
</div>

<?php
// footer
get_footer();
