<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'asian' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'I$pgH+<TNhO2#!Ez-u;d!%w5X1LU]ZX/%3|%`(r)>HUulyoav3pw!J0:R*Z5Dz38' );
define( 'SECURE_AUTH_KEY',  '!Uq&mm7:FR2q^b6Ph42JF*pc2rnnm&)GEd!LI}8kECyZ7<iS4?LnsLOig+YiY)h&' );
define( 'LOGGED_IN_KEY',    'obOr%J[n-aV>JjBCD`:RFB<`,4y]@X.!|S0_@=Avjc9itz8HoTVp.!BMq>Ns&g;$' );
define( 'NONCE_KEY',        '/~a[m4]DMuk=EL&mU(FK/f`IP2$iQiPaqynjKhY3Ch,@Y,v0V5(?,A<+5P6A>lX|' );
define( 'AUTH_SALT',        '5wGUm-RNw`2;Z[UWEI[Ogq^c![LGW0^yO|m24{*[(3stm*^Ox|Z!M.Ui8dD}md*6' );
define( 'SECURE_AUTH_SALT', 'S>mq_A6>*,ViA-R{>caSzU_f@SuZ[6ItMtkP+7+>FWbA 3eJ*LZ_WEzSAaQ=z~#7' );
define( 'LOGGED_IN_SALT',   'Me!e7AgfzBTBQ(WB1&eA8Qc,!F&3@.88XebGvNF&GcVVnD@p&AQ>B[h[Hcne,KF<' );
define( 'NONCE_SALT',       'V^*lVum[UT-]f$wi)}<w&/Gd= ;+ru/S a>&~l!s}/QyRJ(W~o3AsY/rcwW#WuOX' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
