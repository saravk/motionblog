<?php
/**
 * Social links
 *
 * @package MotionBlog
 */



// Author social fields
function mb_site_social_fields() {
  return array(
    'facebook'   => esc_html__( 'Facebook Profile URL' ),
    'twitter'    => esc_html__( 'Twitter Profile URL' ),
    'instagram'  => esc_html__( 'Instagram Profile URL' ),
    'pinterest'  => esc_html__( 'Pinterest Profile URL' ),
    'flick'      => esc_html__( 'Flickr Profile URL' ),
    '500px'      => esc_html__( '500px Profile URL' ),
    'youtube'    => esc_html__( 'YouTube Profile URL' ),
    'vimeo'      => esc_html__( 'Vimeo Profile URL' ),
    'medium'     => esc_html__( 'Medium Profile URL' ),
    'email'      => esc_html__( 'Email Address' ),
  );
}
add_filter( 'user_contactmethods', 'mb_site_social_fields', 1000, 1 );

// Social Links
if ( ! function_exists( 'mb_social_links_nav' ) ) {
  function mb_social_links_nav() {
    $social_url = array();
    $social_list = array('facebook','twitter','instagram','pinterest','flickr','500px','youtube','vimeo','medium','email');
    foreach ( $social_list as $social_list_value ) {
      $social_url[$social_list_value] = get_theme_mod( 'social_' . $social_list_value );
    }
    foreach ( $social_url as $social_url_key => $social_url_value ) {
        if ( $social_url_value ) {
?>
          <li>
          <a href="<?php echo esc_url( $social_url_value ); ?>" target="_blank" rel="nofollow">
            <?php get_template_part( 'template-parts/icons/' . esc_attr($social_url_key)); ?>
          </a>
            </li>
<?php
        }
    }
  }
}

// Author Social Links
function mb_author_social_links( $author ) {
  $social_list = array('facebook','twitter','instagram','pinterest','flickr','500px','youtube','vimeo','medium','email');
  $list = array();
  $url = get_the_author_meta( 'url', $author );
  if ( $url ) {
?>    
    <a href="<?php echo esc_url($url); ?>" target="_blank" rel="nofollow">
      Website
    </a>
<?php 
  }
  foreach ( $social_list as $key ) {
    $author_url = get_the_author_meta( $key, $author );
    if ( $author_url ) {
      $list[] = array(
        'label' => $key,
        'key'   => $key,
        'url'   => $author_url,
      );
    }
  }
  if ( $list ) {
    foreach ( $list as $data ) {
?>
      <a href="<?php echo esc_url($data['url']); ?>" target="_blank" rel="nofollow">
        <?php get_template_part( 'template-parts/icons/' . esc_attr($data['key'])); ?>
      </a>      
<?php
    }
  }
}