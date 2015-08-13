<?php

/*
Widget Name: Icon Box Widget
Description: Create an icon / feature box
Author: stueynet
Author URI: http://stuey.net
*/

class Icon_Box_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'icon-box-widget',
			__('Icon Box Widget', 'siteorigin-widgets'),
			array(
				'description' => __('A special icon boxes', 'siteorigin-widgets'),
				'panels_groups' => array('so-custom-widgets')
			),
			array(

			),
			array(
				// The container shape


				'container_color' => array(
					'type' => 'color',
					'label' => __('Container color', 'siteorigin-widgets'),
					'default' => '#404040',
				),

				'icon' => array(
					'type' => 'icon',
					'label' => __('Icon', 'siteorigin-widgets'),
				),

				'icon_color' => array(
					'type' => 'color',
					'label' => __('Icon color', 'siteorigin-widgets'),
					'default' => '#FFFFFF',
				),

				'icon_image' => array(
					'type' => 'media',
					'library' => 'image',
					'label' => __('Icon image', 'siteorigin-widgets'),
					'description' => __('Use your own icon image.', 'siteorigin-widgets'),
				),

				// The text under the icon

				'title' => array(
					'type' => 'text',
					'label' => __('Title text', 'siteorigin-widgets'),
				),

				'text' => array(
					'type' => 'textarea',
					'label' => __('Text', 'siteorigin-widgets')
				),

				'more_text' => array(
					'type' => 'text',
					'label' => __('More link text', 'siteorigin-widgets'),
				),

				'more_url' => array(
					'type' => 'link',
					'label' => __('More link URL', 'siteorigin-widgets'),
				),

				'new_window' => array(
					'type' => 'checkbox',
					'label' => __('Open more URL in a new window', 'siteorigin-widgets'),
					'default' => false,
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'icon-box-widget-template';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('icon-box-widget', __FILE__, 'Icon_Box_Widget');