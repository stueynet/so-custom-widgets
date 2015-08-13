<?php

/*
Widget Name: Accordion Widget
Description: A Simple Accordion Widget
Author: stueynet
Author URI: http://stuey.net
*/

class Accordion_Widget extends SiteOrigin_Widget {
	function __construct() {

		parent::__construct(
			'accordion-widget',
			__('Accordion Widget', 'siteorigin-widgets'),
			array(
				'description' => __('Create a nice Accordion (Requires Bootstrap)', 'siteorigin-widgets'),
				'panels_groups' => array('so-custom-widgets')
			),
            array(),
			array(
				'tabs' => array(
					'type'      => 'repeater',
					'label'     => __('Tabs', 'siteorigin-widgets'),
                    'fields'    => array(
                        'tab_title' => array(
                            'type' => 'text',
                            'label' => __('Tab Title', 'siteorigin-widgets'),
                            'default' => 'Tab Title',
                        ),
                        'tab_content' => array(
                            'type' => 'tinymce',
                            'label' => __('Tab Content', 'siteorigin-widgets'),
                        ),
                    ),
				),
			),
			plugin_dir_path(__FILE__)
		);
	}

	function get_template_name($instance) {
		return 'accordion-widget-template';
	}

	function get_style_name($instance) {
		return '';
	}

}

siteorigin_widget_register('accordion-widget', __FILE__, 'Accordion_Widget');