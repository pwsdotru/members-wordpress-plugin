<?php
/**
 * Plugin base file
 *
 * @package members-listing
 * Plugin Name: Members Listing
 * Text Domain: members-listing
 * Domain Path: /languages
 * Plugin URI: http://pws.ru/
 * Description: Plugin for control members listing on site (photo, details and etc.)
 * Author: Aleksander Novikov
 * Version: 1.0
 * Author URI: http://pws.ru
 */

/**
 * Load locale
 */
function members_listing_load_textdomain() {
	load_plugin_textdomain( 'members-listing', false, dirname( __DIR__ ) . '/languages' );
}
add_action( 'init', 'members_listing_load_textdomain' );


/**
 * Menu
 */
function members_listing_menu() {
	add_options_page( __( 'Members Listing', 'members-listing' ), __( 'Members Listing', 'members-listing' ), 8, __FILE__, 'members_listing_index' );
}
add_action( 'admin_menu', 'members_listing_menu' );
