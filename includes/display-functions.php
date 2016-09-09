<?php
//Our display functions for  Outputting Information


function mfwp_add_content($content){

    global $mfwp_options;

    if ( is_single() ){

        $extra_content = '<p class="twitter-message">Follow me on <a href="'. $mfwp_options['twitter_url'] . '">Twitter</a></p>';
        $content .= $extra_content;
    }
    return $content;

}

add_filter('the_content', 'mfwp_add_content');