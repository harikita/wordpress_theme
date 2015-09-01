<?php

namespace Brieze\Assets;

/**
 * CSSとJSの読み込み
 */
function assets() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic', false, null);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/bower_components/fontawesome/css/font-awesome.min.css', false, null);
    wp_enqueue_style('common', get_template_directory_uri() . '/assets/css/style.min.css', false, null);
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', false, null, true);
    wp_enqueue_script('scroll-script', get_template_directory_uri() . '/bower_components/nanoscroller/bin/javascripts/jquery.nanoscroller.min.js', false, null, true);
    wp_enqueue_script('common-script', get_template_directory_uri() . '/assets/js/common.js', false, null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


/**
 * 絵文字表示のためのCSS/JSを除外
 */
function remove_emoji() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
}
add_action( 'init', __NAMESPACE__ . '\\remove_emoji' );
