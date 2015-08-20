<?php
namespace Brieze\Extras;

function acf_options_page_settings( $settings ){
    $settings['title'] = 'オプション';
    $settings['pages'] = array('settings');
    return $settings;
}
add_filter('acf/options_page/settings', __NAMESPACE__ . '\\acf_options_page_settings');


function lm_dequeue_header_styles() {
    wp_dequeue_style('yarppWidgetCss');
}
add_action('wp_print_styles', __NAMESPACE__ . '\\lm_dequeue_header_styles');

function lm_dequeue_footer_styles() {
    wp_dequeue_style('yarppRelatedCss');
}
add_action('get_footer', __NAMESPACE__ . '\\lm_dequeue_footer_styles');
