<?php
/*
Plugin Name:  MyPlugin
Description:  Example plugin for "WordPress: Plugin Development"
Plugin URI:   https://profiles.wordpress.org/spraveenitpro
Author:       Praveen
Version:      1.0
Text Domain:  myplugin
Domain Path:  /languages
License:      GPL v2 or later
License URI:  https://www.gnu.org/licenses/gpl-2.0.txt
*/


// exit the file if accessed directly

if ( ! defined  ('ABSPATH')) {
    exit;
}

// if Admin area

if ( is_admin()) {

    //include dependencies
    require_once plugin_dir_path(__FILE__).'admin/admin-menu.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-page.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-register.php';
    require_once plugin_dir_path(__FILE__).'admin/settings-callback.php';


}




