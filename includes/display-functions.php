<?php
//Our display functions for  Outputting Information


function mfwp_add_content($content){

    if ( is_single() ){

        $extra_content = '<p class="twitter-message">Follow me on <a href="http://twitter.com/spraveenitpro">Twitter</a></p>';
        $content .= $extra_content;
    }
    return $content;

}

add_filter('the_content', 'mfwp_add_content');