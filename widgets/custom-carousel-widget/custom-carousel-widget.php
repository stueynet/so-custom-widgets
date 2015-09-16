<?php
/*
Widget Name: Custom Carousel widget
Description: A carousel widget using http://github.com/kenwheeler/slick.
Author: Stuart Starr
Author URI: http://stuey.net
*/

class Custom_Carousel_Widget extends SiteOrigin_Widget {
	function __construct() {
		parent::__construct(
			'custom-carousel',
			__('Custom Carousel', 'siteorigin-widgets'),
			array(
				'description' => __('A responsive carousel widget.', 'siteorigin-widgets'),
				'panels_title' => false,
                'panels_groups' => array('so-custom-widgets'),
			),
			array(

			),
			array(
				'posts' => array(
						'type' => 'posts',
						'label' => __( 'Post', 'siteorigin-widgets' ),
				),
				'speed' => array(
					'type' => 'number',
					'label' => __('Animation speed', 'siteorigin-widgets'),
					'description' => __('Delay between slides in milliseconds.', 'siteorigin-widgets'),
					'default' => 3000,
				),
			),
			plugin_dir_path(__FILE__).'../'
		);
	}

	function initialize() {

		$frontend_scripts = array();
		$frontend_scripts[] = array(
			'so-custom-slick',
                plugin_dir_url(__FILE__) . 'js/slick.min.js',
			array( 'jquery' ),
			SOW_BUNDLE_VERSION
		);
		$this->register_frontend_scripts( $frontend_scripts );
		$this->register_frontend_styles(
			array(
				array(
					'co-custom-slickcss',
                        plugin_dir_url(__FILE__). 'css/slick.min.css',
					array(),
					SOW_BUNDLE_VERSION
				)
			)
		);
	}
	function get_template_name($instance){
		return 'base';
	}
}

siteorigin_widget_register('custom-carousel', __FILE__, 'Custom_Carousel_Widget');
