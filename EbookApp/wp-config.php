<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'EbookApp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1UelFAkEpYSaWzJMr8Yo1PMdlIGlxv0dRqufNnqDPN8lJ1dsfFnwxUjMPha4RhZ2' );
define( 'SECURE_AUTH_KEY',  'PB9ms7dw9pPE35P6ur08Rk29zr2zqX4c8nfLynQrBD00apsYIxndVpQGEC6oIyWF' );
define( 'LOGGED_IN_KEY',    'X2wPuozLGp82bLOFCO0IuBke8bb5mXgdhDwWCJ1AjCIoqYqQzH6sfVeN4rnlsWnv' );
define( 'NONCE_KEY',        'bXVwICrDonBbE7t87oOqyvoTbjGjDzupHmqFSTL63FRlWP25dqL8jwGXdzvEguYd' );
define( 'AUTH_SALT',        'ldE40yC5Z2i9z2GkGamokFhPUbDn2Ln0h8Tmkb8lKZX0C0R51s8QxpKqROpoIAOF' );
define( 'SECURE_AUTH_SALT', 'Hsq2YnSNVClG8fhhYnezZ4HVDRgV8bgflMB0a7DkttanN5YMqzopftX11F3Sg3XU' );
define( 'LOGGED_IN_SALT',   'qEjPAXe2u57nU6GIFtKcpWbhnbgqF2a3mhK9JitLeeDtZaAV6TqGTSpQ5I6P40KF' );
define( 'NONCE_SALT',       'lPe4ApEwmtdDkfvT41z3H5cL7kWoV65bQG8dG9tV10eZFRsMmimN1s1OClRxYBQc' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
