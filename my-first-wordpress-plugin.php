<?php
/*
Plugin Name: My First Plugin
Plugin URI: http://simpletechlife.in
Description:   My First Plugin
Author: Praveen Selvasekaran
Version: 1.0.0
Author URI: http://simpletechlife.in
*/

/*************************************
 * Global Variables
 ************************************/
$mwfp_prefix = 'mwfp_';
$mwfp_plugin_name = 'My_First_WordPress_Plugin';
/*************************************
 * Includes
 ************************************/
include('includes/scripts.php');             //Control all the CSS/JS
include('includes/data-processing.php');     //Control all the saving of Data
include('includes/display-functions.php');   //Control display content functions
include('includes/admin-page.php');          //Admin Page for options
?>