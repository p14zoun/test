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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '`ihg3j!UD~e*X1EXIhH.d_d:1d;oNZpNsPp<iXBTy.|Wq*NX_}5&u)=?Pmr=4/4L' );
define( 'SECURE_AUTH_KEY',  '=([$abRS~/TS7Fgb&*&W_!fmUh|$BAb@ VgO)UU?E~k.k47HBN _U(_fD`07rK7C' );
define( 'LOGGED_IN_KEY',    'cfZxhItj4)1KfYZq0kd}F4ygMOVL75=17IDB>yhEj6Fb@Wc~7i#E Fu7;5!C?3HN' );
define( 'NONCE_KEY',        'o~I}2>|wI*Z*7!7LqgyJ8v,ghi_s(p4b#lJKwq>.7432@i{E&{}Qmb-^*qr8<5|`' );
define( 'AUTH_SALT',        '-^-z8A8f{O=o[w [qRYq1Z%gAsi@2tn?.Z~9r(28{^yle5>EJn#z{@b[: %n^uyV' );
define( 'SECURE_AUTH_SALT', ' y-xG<lz3sl?i2=.)*3bzzDWy>,_l6.*+ghK89(pok53eJJ[Z:mwn/<+Aq(LFAkf' );
define( 'LOGGED_IN_SALT',   ']AAm_3G~7o//n/b /dhbolpVR=.R XJrxrXXL?dj%hu/i=$kY%QYZfy@B-EUen`k' );
define( 'NONCE_SALT',       'fXQVrRFZ#Ch;w%@}H^#FIi*~#g4z0ASp1gZ)7`3m.;PhIC+4(o*`.Im4Wj/)uYeT' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
