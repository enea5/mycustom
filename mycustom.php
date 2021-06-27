<?php
/*
	Plugin Name: My Custom Plugin
	Plugin URI: https://alex-next.netlify.app
	Description: This is for updating your Wordpress plugin.
	Version: 1.0.1
	Author: Alex
	Author URI: https://alex-next.netlify.app
*/
if( ! class_exists( 'Auto_Updater' ) ) {
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
$updater = new Auto_Updater( __FILE__ );
$updater->set_username( 'enea5' );
$updater->set_repository( 'mycustom' );
/** Here is test for updating again */
/*
	$updater->authorize( 'abcdefghijk1234567890' ); // Your auth code goes here for private repos
*/
$updater->initialize();