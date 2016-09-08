<?php
/*************************************
 * Scripts Control
 ************************************/

function mfwp_load_scripts(){

    if (is_single()){
      wp_enqueue_style('mfwp-styles', plugin_dir_url(__FILE__) . 'css/plugin_styles.css');
    }

}

add_action('wp_enqueue_scripts', 'mfwp_load_scripts');