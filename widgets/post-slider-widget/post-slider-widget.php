<?php

/*
Widget Name: Post Slider Widget
Description: Create a sweet slider from posts
Author: stueynet
Author URI: http://stuey.net
*/

class Post_Slider_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'post-slider-widget',
			__('Post Slider Widget', 'siteorigin-widgets'),
			array(
				'description' => __('A slider filled with posts', 'siteorigin-widgets'),
                'panels_groups' => array('so-custom-widgets')
			),
			array(

			),
			array(
				'title' => array(
					'type' => 'text',
					'label' => __( 'The title.', 'siteorigin-widgets' )
				),
				'subtitle' => array(
					'type' => 'text',
					'label' => __( 'The subtitle.', 'siteorigin-widgets' )
				),
				'slider_dot_color' => array(
					'type' => 'color',
					'label' => __( 'Dots colour', 'siteorigin-widgets' ),
				),
				'posts' => array(
					'type' => 'posts',
					'label' => __( 'Post', 'siteorigin-widgets' ),
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'post-slider-widget-template';
	}

	function get_style_name($instance) {
		return 'post-slider-widget-style';
	}

}

siteorigin_widget_register('post-slider-widget', __FILE__, 'Post_Slider_Widget');