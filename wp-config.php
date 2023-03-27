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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '@FMC@fm{}+TPiaT#JW@0JX_jW|_+idR/rnw;>Bii )ae~3]SFicd*4EWCfV``HWi' );
define( 'SECURE_AUTH_KEY',  '^rW&Js3S;QEj{Eo[ZB%Y`wWQ(mP*SIYyG `z46$N)WKr<INS2=mjfhH4O?2Z~-z.' );
define( 'LOGGED_IN_KEY',    'l%NLxPg2;,LR#z:_26M5n6AC&g]6VMwNu!|iy0v >G7>2B<RTm`%7Pw2WkAn &gj' );
define( 'NONCE_KEY',        'Ax);=4<PLhBh{8Mxg#+CMkysGTc_,-%(@:2S-$@<7NmSlO:U|npef$?o):4QxDIC' );
define( 'AUTH_SALT',        'VGx?;7D&r?^JVd |l]A#ybi]:4jwO?2$E(_V>T?ivNF4&/yRjxQ@A#>n&bB/OWt_' );
define( 'SECURE_AUTH_SALT', 'u<sy-`ZhCM`eTw63uo|r&lNH|x76$eGkArIps%E?=nqTIc?|v9 {IxZ#[9tH0(S1' );
define( 'LOGGED_IN_SALT',   'SzC7Jv{d0,d}[4}#yB<~:xHJDKi>?M-_EQ^K[)VP?S$i2+Z YAS!tf*{<3dXP.j=' );
define( 'NONCE_SALT',       '5Bsr7F?&M*uLSX&JJ!k`]>H+;)hoGR#Yca:x(c,hlE%lLtXKJC3?[mzy0ejWmdUI' );

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
