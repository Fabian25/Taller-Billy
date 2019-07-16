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
define( 'DB_NAME', 'taller_billy' );

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
define( 'AUTH_KEY',         'bF8N,J,^LplS)EGYZ2nW9dfO.)w%2L%XeeB,}VVrFb?,O|!Plg+Oin 5f9#:<=fI' );
define( 'SECURE_AUTH_KEY',  '49x2()}~UagE#73ulk#^]XxAbFszk1.45Rs!}J}A<Rh],,rFe7)nsFSw1[.q#,9f' );
define( 'LOGGED_IN_KEY',    '5cqx&AY9qtl-4P+OgF*0H[$;))H2*s-e=sIO`X*q7>^z}FQ^whKW>tW<eOVC{@6+' );
define( 'NONCE_KEY',        '7 1+9fMMwNW_V%-X+_ke-ni`dq8*b;$S0S&60Ja3ymiaf)B%?b!mX!T7m]7yii6+' );
define( 'AUTH_SALT',        'P>cW GyUNx476:}~a6VhQ~!r[9B|8q4NhlMEJ0c/GWK(4^-!U2D%#&I8K&:46,6J' );
define( 'SECURE_AUTH_SALT', '0wR2!u9YNA/B2^R&dratKi$(B~vi>2nC([i{-[VAZ35B((.DGe>Vy{o^2=Xe24x{' );
define( 'LOGGED_IN_SALT',   'rYz/Bj@O3+J.:|pvuMYKKk+%:|5[cdAk>lNFLdkWhNT>_<r`jA$I/jB9fnc&%B;-' );
define( 'NONCE_SALT',       'y>W>z^ij7gi>TC>_RH -:;E2HR6h_p9G^EPtTePoMJ-H3`k}cKAo-SgA##hR`mo8' );

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
