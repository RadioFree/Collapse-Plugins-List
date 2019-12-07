<?php
/**
* Plugin Name: Collapse Plugins List
* Plugin URI: https://llacuna.org
* Description: This is a simple plugin to improve the core of WordPress on the plugins admin page.  It collapses the list to make it easier to find plugins on mobile devices.   
* Version: 1.0
* Author: Sufi Shaikh & Chase Lang
* Author URI: https://llacuna.org
**/

function col_pg_lst_enqueue_scripts() {
	wp_enqueue_style( 'col_pg_lst_style', plugin_dir_url( __FILE__ ) . 'assets/col_pg_lst.css');
	wp_enqueue_script( 'col_pg_lst_script', plugin_dir_url( __FILE__ ) . 'assets/col_pg_lst.js', array('jquery') );
}	
 
add_action('admin_enqueue_scripts', 'col_pg_lst_enqueue_scripts');
