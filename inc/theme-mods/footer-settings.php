<?php
/**
 * Footer Settings
 *
 * @package MotionBlog
 */

// Add new section
$wp_customize->add_section( 'footer_section', array(
  'title'                => esc_html__( 'Footer Settings' ),
  'priority'             => 25,
) );

// Display Footer Text
$wp_customize->add_setting( 'footer_text_display', array(
  'default'              => 0,
  'sanitize_callback'    => 'mb_sanitize_checkbox',
) );
$wp_customize->add_control( 'footer_text_display', array(
  'label'                => esc_html__( 'Display Footer Text' ),
  'section'              => 'footer_section',
  'type'                 => 'checkbox',
) );

// Footer Text
$wp_customize->add_setting( 'footer_text', array(
  'default'              => '',
  'sanitize_callback'    => 'wp_kses_post',
) );
$wp_customize->add_control( 'footer_text', array(
  'label'                => esc_attr__( 'Footer Text' ),
  'section'              => 'footer_section',
  'type'                 => 'textarea',
) );


// Display Social Links
$wp_customize->add_setting( 'footer_social_display', array(
  'default'              => 0,
  'sanitize_callback'    => 'mb_sanitize_checkbox',
) );
$wp_customize->add_control( 'footer_social_display', array(
  'label'                => esc_html__( 'Display Social Links' ),
  'section'              => 'footer_section',
  'type'                 => 'checkbox',
) );
