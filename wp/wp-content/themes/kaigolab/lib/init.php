<?php
namespace Brieze\Init;

/**
 * 初期セットアップ
 */
function setup() {
    add_theme_support('post-thumbnails');       // アイキャッチ有効化
    remove_action('wp_head', 'wp_generator');   // WPバージョン番号の非表示
    register_nav_menu('footer_menu', 'フッターメニュー');
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');
