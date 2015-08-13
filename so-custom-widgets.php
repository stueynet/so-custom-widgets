<?php

/*
Plugin Name: SO Custom Widgets
Description: Custom widgets for SO Page Builder
Version: 0.1
Author: stueynet
Author URI: http://stuey.net
License: GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.txt
*/

function so_custom_widgets_folder($folders){
	$folders[] = plugin_dir_path(__FILE__).'widgets/';
	return $folders;
}
add_filter( 'siteorigin_widgets_widget_folders', 'so_custom_widgets_folder' );

function so_custom_widgets_tab($tabs){
	$tabs['custom_widgets'] = array(
		'title' => __('Custom Widgets', 'so-custom-widgets'),
		'filter' => array(
			'groups' => array('so-custom-widgets')
		)
	);

	return $tabs;
}

add_filter( 'siteorigin_panels_widget_dialog_tabs', 'so_custom_widgets_tab');