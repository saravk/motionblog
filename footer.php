<?php
/**
 * The template for displaying the footer
 *
 * @package MotionBlog
 */

?>
<!-- close the main site container -->
</div> <!-- class="site-container" -->
</main> <!-- class="site-wrap -->


<footer class="site-footer">
<?php
  $footer_social_display = get_theme_mod( 'footer_social_display', 0 );
  if ( $footer_social_display ) {
?>  
    <div class="social pf-footer-social">
      <ul><?php mb_social_links_nav();?></ul>
    </div>
<?php
  }
?>    
<?php
  $footer_text_display = get_theme_mod( 'footer_text_display', 0 );
  if ( $footer_text_display ) {
?>
  <div class="footer-text">
    <?php echo do_shortcode( get_theme_mod( 'footer_text' ) ); ?>
  </div>
<?php
  }
?>

</footer>


<?php wp_footer(); ?>
</body>
</html>
