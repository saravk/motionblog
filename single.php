<?php
/**
 * The template for displaying all single posts
 *
 * @package Neblue
 */

// header
get_header();

$post_id = $post->ID;
$author_id  = $post->post_author;
$post_sidebar = get_post_meta( $post_id, 'vs_singular_sidebar', true );
if ( ! $post_sidebar || 'default' === $post_sidebar ) {
  $post_sidebar = get_theme_mod( 'post_sidebar', 'right' );
}
?>

<?php
  while ( have_posts() ) {
    the_post();
    get_template_part( 'template-parts/post-single' );
  }
  
  if ( 'disabled' !== $post_sidebar ) {
    get_sidebar(); 
  }
?>

<?php
// footer
get_footer();
