<?php
/**
 * @package wp-hgm-gallery
 * @version 0.0.1
 */
/*
Plugin Name: WP hgm-gallery
Plugin URI: http://wordpress.org/plugins/hgm-gallery/
Description: This plugin allows to manage images with specific fields by categories
Author: David Carballo Izquierdo <carballod@gmail.com>
Version: 0.0.1
Author URI: http://dicreaweb.com/
License: GNUv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

function my_plugin_activate() {

    add_option( 'Activated_Plugin', 'hgm-gallery' );
  
    /* activation code here */
  }
  register_activation_hook( __FILE__, 'my_plugin_activate' );
  
  function load_plugin() {
  
      if ( is_admin() && get_option( 'Activated_Plugin' ) == 'hgm-gallery' ) {
  
          delete_option( 'hgm-gallery' );
  
          /* do stuff once right after activation */
          // example: add_action( 'init', 'my_init_function' );
      }
  }
  add_action( 'admin_init', 'load_plugin' );
?>
