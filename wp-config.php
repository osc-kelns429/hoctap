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
define( 'DB_NAME', 'hoctap' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'BbSHXq6WuZ ln@-?@$T%eZ[Bh.C,PY`A!3-Q.XW<*:kPV$`P>w0`gq+KauM0c:dC' );
define( 'SECURE_AUTH_KEY',  '3+0D+A)xnrawXGA`pe`&vc;-Xck`ET#PfBxkcYcyI|?LW7X1oBR)`+:lcJ<p?_0}' );
define( 'LOGGED_IN_KEY',    '3i>A ^8i3Rw8WoJedCesb9S0!~.8`QwH^m^2`]T+/,+Xe=u;M]8S,di.YA@D@PK]' );
define( 'NONCE_KEY',        'Oxd0r+~.bRA@3)yQ%n*$Fp,c3qwmK0J+lN?Wh<i6l>Wq>/4JbRKLsr<fr1vP?&)!' );
define( 'AUTH_SALT',        '~CW%=56P-r#b|z*;{<0y^W+w]V5(>2(.dALA=f=DrU[xarAZuHj[&M33| 9NdjHJ' );
define( 'SECURE_AUTH_SALT', 'n4mT_wY/( N-4a^7;LRQEY=gP EW-9La,p4~B-a!`B56u1b/VG*)XHb&=Cb2F=bH' );
define( 'LOGGED_IN_SALT',   '8f@1)EPeW8[)L!?$DMn/~sBEYl~_D5eboA0^msAb)ec(T.r.rN*h*tAtD0xiU>VP' );
define( 'NONCE_SALT',       '<!CQmU;7Zc{AW,|SIg6VJ)u[=3mke3Tz~vWB0&aS+g0aRT.{2|;Q>rvlT/B3UFC=' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_hoctap';

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
