<?php

/*
 * Plugin Name: iThemes Security Pro
 * Plugin URI: https://ithemes.com/security
 * Description: Take the guesswork out of WordPress security. iThemes Security offers 30+ ways to lock down WordPress in an easy-to-use WordPress security plugin.
 * Author: iThemes
 * Author URI: https://ithemes.com
 * Version: 7.2.1
 * Text Domain: it-l10n-ithemes-security-pro
 * Domain Path: /lang
 * Network: True
 * License: GPLv2
 * Requires at least: 5.9
 * Requires PHP: 7.3
 * iThemes Package: ithemes-security-pro
 */

if ( version_compare( phpversion(), '7.3.0', '<' ) ) {
	function itsec_minimum_php_version_notice() {
		echo '<div class="notice notice-error"><p>' . esc_html__( 'iThemes Security Pro requires PHP 7.3 or higher.', 'it-l10n-ithemes-security-pro' ) . '</p></div>';
	}

	add_action( 'admin_notices', 'itsec_minimum_php_version_notice' );

	return;
}

if ( version_compare( $GLOBALS['wp_version'], '5.9', '<' ) ) {
	function itsec_minimum_wp_version_notice() {
		echo '<div class="notice notice-error"><p>' . esc_html__( 'iThemes Security Pro requires WordPress 5.9 or later.', 'it-l10n-ithemes-security-pro' ) . '</p></div>';
	}

	add_action( 'admin_notices', 'itsec_minimum_wp_version_notice' );

	return;
}

function itsec_pro_load_textdomain() {
	$locale = determine_locale();
	$locale = apply_filters( 'plugin_locale', $locale, 'it-l10n-ithemes-security-pro' );

	load_textdomain( 'it-l10n-ithemes-security-pro', WP_LANG_DIR . "/plugins/ithemes-security-pro/it-l10n-ithemes-security-pro-$locale.mo" );
	load_plugin_textdomain( 'it-l10n-ithemes-security-pro', false, basename( dirname( __FILE__ ) ) . '/lang/' );
}

add_action( 'plugins_loaded', 'itsec_pro_load_textdomain' );

if ( isset( $itsec_dir ) || class_exists( 'ITSEC_Core' ) ) {
	include( dirname( __FILE__ ) . '/core/show-multiple-version-notice.php' );
	return;
}

if ( file_exists( __DIR__ . '/vendor-prod/autoload.php' ) ) {
	require_once( __DIR__ . '/vendor-prod/autoload.php' );
}

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once( __DIR__ . '/vendor/autoload.php' );
}

if ( ! function_exists( 'itsec_pro_register_modules' ) ) {
	// Add pro modules at priority 11 so they are added after core modules (thus taking precedence)
	add_action( 'itsec-register-modules', 'itsec_pro_register_modules', 11 );

	function itsec_pro_register_modules() {
		$path = dirname( __FILE__ );

		ITSEC_Modules::register_module( 'pro', "$path/pro/pro" );
		ITSEC_Modules::register_module( 'pro-dashboard', "$path/pro/pro-dashboard" );
		ITSEC_Modules::register_module( 'pro-two-factor', "$path/pro/pro-two-factor" );
		ITSEC_Modules::register_module( 'dashboard-widget', "$path/pro/dashboard-widget" );
		ITSEC_Modules::register_module( 'magic-links', "$path/pro/magic-links" );
		ITSEC_Modules::register_module( 'online-files', "$path/pro/online-files" );
		ITSEC_Modules::register_module( 'passwordless-login', "$path/pro/passwordless-login" );
		ITSEC_Modules::register_module( 'password-expiration', "$path/pro/password-expiration" );
		ITSEC_Modules::register_module( 'privilege', "$path/pro/privilege" );
		ITSEC_Modules::register_module( 'recaptcha', "$path/pro/recaptcha" );
		ITSEC_Modules::register_module( 'import-export', "$path/pro/import-export" );
		ITSEC_Modules::register_module( 'user-logging', "$path/pro/user-logging" );
		ITSEC_Modules::register_module( 'user-security-check', "$path/pro/user-security-check" );
		ITSEC_Modules::register_module( 'version-management', "$path/pro/version-management" );
		ITSEC_Modules::register_module( 'fingerprinting', "$path/pro/fingerprinting" );
		ITSEC_Modules::register_module( 'geolocation', "$path/pro/geolocation" );
		ITSEC_Modules::register_module( 'webauthn', "$path/pro/webauthn" );

		if ( get_site_option( 'itsec-enable-grade-report' ) ) {
			ITSEC_Modules::register_module( 'grade-report', "$path/pro/grade-report" );
		}

		if ( defined( 'WP_CLI' ) && WP_CLI && class_exists( 'WP_CLI_Command' ) ) {
			require( "$path/pro/wp-cli/load.php" );
		}
	}
}


$itsec_dir = dirname( __FILE__ );

require( "$itsec_dir/core/core.php" );
$itsec_core = ITSEC_Core::get_instance();
$itsec_core->init( __FILE__, 'iThemes Security Pro' );

if ( is_admin() && file_exists( "$itsec_dir/lib/icon-fonts/load.php" ) ) {
	require( "$itsec_dir/lib/icon-fonts/load.php" );
}


if ( ! function_exists( 'ithemes_repository_name_updater_register' ) ) {
	function ithemes_repository_name_updater_register( $updater ) {
		$updater->register( 'ithemes-security-pro', __FILE__ );
	}
	add_action( 'ithemes_updater_register', 'ithemes_repository_name_updater_register' );

	if ( file_exists( "$itsec_dir/lib/updater/load.php" ) ) {
		require( "$itsec_dir/lib/updater/load.php" );
	}
}
