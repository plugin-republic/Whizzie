<?php
/**
 * Settings for theme wizard
 *
 * @package Whizzie
 * @author CatapultThemes
 * @since 1.0.0
 */

// Load the Whizzie class and other dependencies
require get_template_directory() . '/whizzie/whizzie.php';

$config['page_slug'] 	= 'get-started';
$config['page_title']	= 'Get Started';

if( class_exists( 'Whizzie' ) ) {
	$Whizzie = new Whizzie( $config );
}