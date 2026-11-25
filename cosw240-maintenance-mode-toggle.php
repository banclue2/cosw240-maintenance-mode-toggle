<?php
/**
 * Plugin Name: Maintenance Mode Toggle
 * Description: Registration-only scaffold for a COSW 240 web project.
 * Version: 0.1.0
 * Author: Rosana May
 * Requires at least: 6.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'template_redirect', 'redirect_user' );

function redirect_user() {

if ( !is_user_logged_in() && !is_page( 'coming-soon' ) ) {

wp_redirect( 'http://cosw240.local/coming-soon/' );

exit;

}

}