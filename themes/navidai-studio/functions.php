<?php
/**
 * Navid AI Studio: theme setup, assets and minimal Customizer options.
 *
 * @package Navid_AI_Studio
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function navidai_studio_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-logo', array( 'height' => 180, 'width' => 180, 'flex-height' => true, 'flex-width' => true ) );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'wp-block-styles' );
    register_nav_menus( array( 'primary' => __( 'منوی اصلی', 'navidai-studio' ) ) );
}
add_action( 'after_setup_theme', 'navidai_studio_setup' );

function navidai_studio_assets() {
    wp_enqueue_style( 'navidai-studio-style', get_stylesheet_uri(), array(), '1.0.0' );
    wp_enqueue_script( 'navidai-studio-script', get_template_directory_uri() . '/app.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'navidai_studio_assets' );

function navidai_studio_customize( $wp_customize ) {
    $wp_customize->add_section( 'navidai_home', array(
        'title'    => __( 'تنظیمات صفحه اصلی Navid AI', 'navidai-studio' ),
        'priority' => 35,
    ) );
    $wp_customize->add_setting( 'navidai_intro', array(
        'default'           => 'Navid AI فضایی برای کشف، طراحی و ساخت تجربه‌های دیجیتال است؛ از راهکارهای هوشمند و ابزارهای فارسی تا وب‌سایت‌ها و اتوماسیون‌های کاربردی.',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'navidai_intro', array(
        'label'   => __( 'توضیح کوتاه صفحه اصلی', 'navidai-studio' ),
        'section' => 'navidai_home',
        'type'    => 'textarea',
    ) );
    $wp_customize->add_setting( 'navidai_github_url', array(
        'default'           => 'https://github.com/promiseid',
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'navidai_github_url', array(
        'label'   => __( 'نشانی گیت‌هاب', 'navidai-studio' ),
        'section' => 'navidai_home',
        'type'    => 'url',
    ) );
}
add_action( 'customize_register', 'navidai_studio_customize' );
