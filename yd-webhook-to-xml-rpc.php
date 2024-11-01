<?php
/**
 * @package YD_Webhook-to-XML-RPC
 * @author Yann Dubois
 * @version 0.1.0
 */

/*
 Plugin Name: YD Webhook to XML-RPC
 Plugin URI: http://www.yann.com/en/wp-plugins/yd-webhook-to-xml-rpc
 Description: Simple Webhook to XML-RPC gateway
 Version: 0.1.0
 Author: Yann Dubois
 Author URI: http://www.yann.com/
 License: GPL2
 */

/**
 * @copyright 2010  Yann Dubois  ( email : yann _at_ abc.fr )
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

/**
 Revision 0.1.0:
 - Original alpha release 0
 */

/** Misc. Texts **/

global $ydw2x_texts; 
$ydw2x_texts = array (

	'option_page_title' => 'YD Webhook to XML-RPC settings'

);

/** Class includes **/

include_once( dirname( __FILE__ ) . '/inc/yd-widget-framework.inc.php' );	// standard framework VERSION 20110405-01 or better
include_once( dirname( __FILE__ ) . '/inc/ydw2x.inc.php' );					// custom classes

/**
 * 
 * Just fill up necessary settings in the configuration array
 * to create a new custom plugin instance...
 * 
 */
global $ydw2x_o;
$ydw2x_o = new ydw2xPlugin( 
	array(
		'name' 				=> 'YD Webhook to XML-RPC',
		'version'			=> '0.1.0',
		'has_option_page'	=> false,
		'option_page_title' => $ydw2x_texts['option_page_title'],
		'op_donate_block'	=> false,
		'op_credit_block'	=> false,
		'op_support_block'	=> false,
		'has_toplevel_menu'	=> false,
		'has_shortcode'		=> false,
		'shortcode'			=> 'yd_webhook2xmlrpc',
		'has_widget'		=> false,
		'widget_class'		=> '',
		'has_cron'			=> false,
		'crontab'			=> array(
		),
		'has_stylesheet'	=> false,
		'stylesheet_file'	=> 'css/yd.css',
		'has_translation'	=> false,
		'translation_domain'=> 'ydw2x', // must be copied in the widget class!!!
		'translations'		=> array(
			array( 'English', 'Yann Dubois', 'http://www.yann.com/' ),
		),		
		'initial_funding'	=> array( '', '' ),
		'additional_funding'=> array(),
		'form_blocks'		=> array(
			'Main options' => array( 
			)
		),
		'option_field_labels'=>array(
		),
		'option_defaults'	=> array(
		),
		'form_add_actions'	=> array(
		),
		'has_cache'			=> false,
		'option_page_text'	=> 'Welcome to the YD Webhook to XML-RPC option page.',
		'backlinkware_text' => '',
		'plugin_file'		=> __FILE__,
		'has_activation_notice'	=> false,
		'activation_notice' => '',
		'form_method'		=> 'post'
 	)
);
?>