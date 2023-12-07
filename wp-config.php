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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_db' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cgot2kelgsmw.us-east-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define('AUTH_KEY',         'WO-YZ<v/a7`Ebnze*;zv./BL.{8I_!V$oBDTx+.mum^5-T&-s6*|i,tA;wAZzR5k');
define('SECURE_AUTH_KEY',  'JP^ B=+|M(3a0wB2GOe1=4f/ddkRM#i)|^`>c87B^ZL?C4fUU,q]eK.O*|yCSLgz');
define('LOGGED_IN_KEY',    '9bH|M?l2v%y`osB+ev9i2U~DBz6u?fWf+mTEHMut7g?P>e-2xv?K3h_L:.m`%~-4');
define('NONCE_KEY',        '`4,,gXZFu;7[ +--8|0g|YfANAiizALl7HM`+,wO9%C3Ur/4(o1(_R|R73u-+zA6');
define('AUTH_SALT',        'Y#8915),X@nqR%Fi< {Mm|--LY|r<e(+U11)BJq]WuWLs/TdfR$lL(#v2KH@v ls');
define('SECURE_AUTH_SALT', 'Nn*/T#^L>.2Q@2>$}m@c4l!S-; ?c-.<I@ A@_.,|U!T!}r?2ks_,{-G;QM_!/2|');
define('LOGGED_IN_SALT',   'O+N9(eyiRVw$9SX2|D8-X%p|%kcUtT5`~hhxVM_D+9{%?$&^2b~0(kzs@^fg$;P@');
define('NONCE_SALT',       'rr|5$yh=+n4G|,wX*2?ppP)}Gw^9-ioE;5@sKp>yNguh+i4N){S1%2KZ-LM{ u-W');

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
