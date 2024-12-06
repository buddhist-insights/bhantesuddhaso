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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '9.ti5bl(vhR.y:#DBs@[ 4a8_3FeD;>t-sBBp*ds.f7w~HA}sz/Y**FFVrcuKO9J' );
define( 'SECURE_AUTH_KEY',   'uiUdS9{z@^,Fv*u#9nS#_MbtEttp2Q-&oLQ:v}i10[/^(SwDSW$kgZkbd< {R63)' );
define( 'LOGGED_IN_KEY',     'K%0%Pn_;ld~[n]~G-*V8}EU+]JohQA}.NwCHdBXjnvID,Z;)qe wR#f[VCfTpwfj' );
define( 'NONCE_KEY',         'g#:*IyFzg-P23rV8.LLFy2s0ao?-$bGVmd:0Kys<O,SAI<vJdM6g6<}{[>^#x?EA' );
define( 'AUTH_SALT',         'HH/[dTVH,4N)e:^/k~b,F#B&P>c0#yr)@~n#g[#_T9]1c1vphhA&goVTW{Nl}tl}' );
define( 'SECURE_AUTH_SALT',  'H_`d|i:wU%}I2V(25:w%^yEx]w,_%qIG(4]d&mJJ iAh&<jyg&/Osts,T}sv(^FB' );
define( 'LOGGED_IN_SALT',    '%NH;~oe.G3s]6tn,E!Qw0ZGTzUa);~u3;,:Vjt/`L}>_X=6=V.D5t.dJ0:06(fc2' );
define( 'NONCE_SALT',        'p<RO}+j ^m!vBNm !]^Gv&N(C/Bw-3&{j>z03nbifD;`[<}Rf(i?Mu}]LtA6e_dt' );
define( 'WP_CACHE_KEY_SALT', 'd{+AHDfGo1.@[T*3#rf)3 d%rK`zh~-<jl?b6fm1;Cbh6R<>gXhS5D2h~3V d+)>' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
