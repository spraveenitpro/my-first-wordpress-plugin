<?php


function mfwp_options_page(){
    ob_start(); ?>
    <div class="wrap">
        <h2>My First WordPress Plugin Options</h2>
        <p>This is our settings page content</p>
        <p>This is going to be glorious!!</p>
        <p>Other minor changes!!</p>
    </div>

<?php
    echo ob_get_clean();
}

function mfwp_add_options_link(){
    add_options_page('My First WordPress Options', 'My First Plugin', 'manage_options', 'mfwp-options', 'mfwp_options_page');
}

add_action('admin_menu', 'mfwp_add_options_link');