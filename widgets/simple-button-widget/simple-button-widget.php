<?php

/*
Widget Name: Simple Button Widget
Description: A Simpler Button
Author: stueynet
Author URI: http://stuey.net
*/

class Simple_Button_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'simple-button-widget',
			__('Simple Button Widget', 'siteorigin-widgets'),
			array(
				'description' => __('A simpler button', 'siteorigin-widgets'),
				'panels_groups' => array('so-custom-widgets')
			),
			array(

				'button_class' => array(
					'type' => 'text',
					'label' => __('Button class', 'siteorigin-widgets'),
          'description' => __('We suggest you use classes from Twitter Bootstrap', 'siteorigin-widgets'),
					'default' => 'btn btn-primary',
				),

				'button_text' => array(
					'type' => 'text',
					'label' => __('Button Text', 'siteorigin-widgets'),
					'default' => 'Click here',
				),

				'button_url' => array(
					'type' => 'link',
					'label' => __('Button URL', 'siteorigin-widgets'),
				),

				'new_window' => array(
					'type' => 'checkbox',
					'label' => __('Open in a new window', 'siteorigin-widgets'),
					'default' => false,
				),
			),
            array(),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'simple-button-widget-template';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('simple-button-widget', __FILE__, 'Simple_Button_Widget');