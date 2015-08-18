<?php
namespace Brieze\Extras;

function acf_options_page_settings( $settings ){
    $settings['title'] = 'オプション';
    $settings['pages'] = array('settings');
    return $settings;
}
add_filter('acf/options_page/settings', __NAMESPACE__ . '\\acf_options_page_settings');
