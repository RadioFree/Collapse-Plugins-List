<?php
/**
* Plugin Name: Collapse Plugins List
* Plugin URI: https://llacuna.org
* Description: This plugin adds a button to the bottom of each post that adds the ability to make any post printable in a two column journal style layout. It includes automatic citations for links, including in-line annotations.   
* Version: 1.0
* Author: Sufi Shaikh & Chase Lang
* Author URI: https://llacuna.org
**/

function col_pg_lst_enqueue_scripts() {
	wp_enqueue_style( 'col_pg_lst_style', plugin_dir_url( __FILE__ ) . 'assets/col_pg_lst.css');
	wp_enqueue_script( 'col_pg_lst_script', plugin_dir_url( __FILE__ ) . 'assets/col_pg_lst.js', array('jquery') );
}	
 
add_action('admin_enqueue_scripts', 'col_pg_lst_enqueue_scripts');