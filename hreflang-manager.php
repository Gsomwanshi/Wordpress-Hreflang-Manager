<?php
/**
 * Plugin Name: Hreflang Manager
 * Description: Manage per-page hreflang mappings and output <link rel="alternate"> tags for localized content.
 * Version: 1.0.0
 * Author: GaneshDev
 * Requires PHP: 7.4
 * Requires at least: 6.0
 * Text Domain: hreflang-manager
 * Domain Path: /languages
 *
 * @package Hreflang_Manager
 */

defined( 'ABSPATH' ) || exit;

define( 'HREFLANG_MANAGER_FILE', __FILE__ );
define( 'HREFLANG_MANAGER_DIR', plugin_dir_path( HREFLANG_MANAGER_FILE ) );
define( 'HREFLANG_MANAGER_URL', plugin_dir_url( HREFLANG_MANAGER_FILE ) );

spl_autoload_register(
    static function ( $class ) {
        $prefix = 'Hreflang_Manager\\';
        if ( strpos( $class, $prefix ) !== 0 ) {
            return;
        }
        $relative = substr( $class, strlen( $prefix ) );
        $relative = str_replace( '\\', '/', $relative );
        $file     = HREFLANG_MANAGER_DIR . 'src/' . $relative . '.php';
        if ( is_readable( $file ) ) {
            require_once $file;
        }
    }
);

add_action(
    'plugins_loaded',
    static function () {
        load_plugin_textdomain( 'hreflang-manager', false, dirname( plugin_basename( HREFLANG_MANAGER_FILE ) ) . '/languages' );
    }
);

add_action(
    'init',
    static function () {
        Hreflang_Manager\Plugin::init();
    }
);

register_activation_hook(
    HREFLANG_MANAGER_FILE,
    array( 'Hreflang_Manager\\Plugin', 'activate' )
);
