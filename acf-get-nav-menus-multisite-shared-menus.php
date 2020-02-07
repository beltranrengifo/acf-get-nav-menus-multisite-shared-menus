<?php
/*
Plugin Name: Advanced Custom Fields: Get nav menus - multisite shared menus
Plugin URI:
Description: Get wordpress nav menus and share the main site menus in ACF child sites
Version: 1.0
Author: Beltrán Rengifo - Daniel Glans - Bech Webbkonsult AB
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

// exit if accessed directly
if (! defined('ABSPATH')) {
    exit;
}


// check if class already exists
if (!class_exists('nav_acf_plugin_get_nav')) :

    class nav_acf_plugin_get_nav
    {

        // vars
        public $settings;


        /*
        *  __construct
        *
        *  This function will setup the class functionality
        *
        *  @type    function
        *  @date    17/02/2016
        *  @since   1.0.0
        *
        *  @param   void
        *  @return  void
        */

        public function __construct()
        {

            // settings
            // - these will be passed into the field class.
            $this->settings = array(
            'version'   => '1.0.0',
            'url'       => plugin_dir_url(__FILE__),
            'path'      => plugin_dir_path(__FILE__)
        );


            // include field
            add_action('acf/include_field_types', array($this, 'include_field')); // v5
            add_action('acf/register_fields', array($this, 'include_field')); // v4
        }


        /*pgp
            *  include_field
            *
            *  This function will include the field type class
            *
            *  @type    function
            *  @date    17/02/2016
            *  @since   1.0.0
            *
            *  @param   $version (int) major ACF version. Defaults to 4
            *  @return  void
            */

        public function include_field($version = 4)
        {
            // include
            include_once('fields/class-nav_acf_field_get-nav-v' . $version . '.php');
        }
    }


    // initialize
    new nav_acf_plugin_get_nav();


    // class_exists check
endif;
