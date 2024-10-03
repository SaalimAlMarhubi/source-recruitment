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
define( 'AUTH_KEY',          'io)tDyRxZ|&phC3&w2l~x]w7_Ig(G%XT(:P$OKle)CPI2Vv/boc<Q2uZOx:tR><b' );
define( 'SECURE_AUTH_KEY',   'W}w9D5mn[8a{[0CJuvO&:+fAI>,5kKnGYLjTSoD9h(?*Mcd*S-Z99T_P%94B/f!*' );
define( 'LOGGED_IN_KEY',     '*7<uM@?^^[@ecH0{+B!r<UM(8=~Gfuh+)Qc02A)o=U]qyRr{wM.jpHUYX/Xk<C$L' );
define( 'NONCE_KEY',         '&?PHDxlXDF|AfmMy8|~o].38v19/DV7r_|*`l%Yo:ZT!3J,&#|KT_/e;2*),<9Mw' );
define( 'AUTH_SALT',         'AK{l)WC=-|DicjA{0-cmi,L=D-|nYXm I31u1%,N phm`!7Q_B2?;e!8PG6@J{3.' );
define( 'SECURE_AUTH_SALT',  '&Q_z A4h*1)$XY.)YqA]]T=6<P&*|MeOXCH3%.p~#I7U|LJzi[LZ5,AUL$YR!w2G' );
define( 'LOGGED_IN_SALT',    'BeieP]chp}*>]AV;i.4[`<i/!A.,{?*=/qJBx0;02$W|I69%ltg=4idpmm6spl,e' );
define( 'NONCE_SALT',        't?MzR~Gn#4HebQ3SY}8!xu&(0jgf)s,;2/lqbGU-q%,z*~j&%{JmFR0tc=fuH9bN' );
define( 'WP_CACHE_KEY_SALT', '9}%WZ[IFJHH;8]URPHQLId!z;A5/CVo)e{(?l%i<Mn#}q2S=]ZiN@ph>f(U@G1a)' );


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
