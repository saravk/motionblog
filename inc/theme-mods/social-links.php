<?php
/**
 * Social Links
 *
 * @package MotionBlog
 */

// Add new section
$wp_customize->add_section( 'social_section', array(
  'title'                => esc_html__( 'Social Links' ),
  'priority'             => 31,
) );

// Facebook URL
$wp_customize->add_setting( 'social_facebook', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_facebook', array(
  'label'                => esc_html__( 'Facebook URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// Twitter URL
$wp_customize->add_setting( 'social_twitter', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_twitter', array(
  'label'                => esc_html__( 'Twitter URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// Instagram URL
$wp_customize->add_setting( 'social_instagram', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_instagram', array(
  'label'                => esc_html__( 'Instagram URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// Youtube URL
$wp_customize->add_setting( 'social_youtube', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_youtube', array(
  'label'                => esc_html__( 'Youtube URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );


// Vimeo URL
$wp_customize->add_setting( 'social_vimeo', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_vimeo', array(
  'label'                => esc_html__( 'Vimeo URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// Pinterest URL
$wp_customize->add_setting( 'social_pinterest', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_pinterest', array(
  'label'                => esc_html__( 'Pinterest URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// Flickr URL
$wp_customize->add_setting( 'social_flickr', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_flickr', array(
  'label'                => esc_html__( 'Flickr URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

// 500px URL
$wp_customize->add_setting( 'social_500px', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_500px', array(
  'label'                => esc_html__( '500px URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );


// Medium URL
$wp_customize->add_setting( 'social_medium', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_medium', array(
  'label'                => esc_html__( 'Medium URL' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );


// EMAIL ADDRESS
$wp_customize->add_setting( 'social_email', array(
  'default'              => '',
  'sanitize_callback'    => 'esc_url_raw',
) );
$wp_customize->add_control( 'social_email', array(
  'label'                => esc_html__( 'EMAIL ADDRESS' ),
  'section'              => 'social_section',
  'type'                 => 'text',
) );

