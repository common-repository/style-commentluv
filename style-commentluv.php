<?php
/*
Plugin Name: Style CommentLuv
Plugin URI: http://www.technozeast.com/style-commentluv
Description: Style commentators last blog post needs commentluv plugin.
Version: 1.0
Author: Shivendu Madhava
Author URI: http://www.technozeast.com/
*/

function style_commentluv(){
    $style_commentluv = get_option('style_commentluv');
    if($style_commentluv=='1'){
        if ( !defined('WP_CONTENT_URL') ) define( 'WP_CONTENT_URL', get_option('siteurl') . '/wp-content');
        $plugin_url = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__));
        echo '<link rel="stylesheet" href="'.$plugin_url.'/style.css"'.' type="text/css" media="screen" />';
    }
}

function active_style_commentluv(){
        add_option('style_commentluv','1','active the plugin');
}

function deactive_style_commentluv(){
    delete_option('style_commentluv');
}

add_action('wp_head', 'style_commentluv');

register_activation_hook(__FILE__,'active_style_commentluv');
register_deactivation_hook(__FILE__,'deactive_style_commentluv');

?>