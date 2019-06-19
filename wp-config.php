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
define( 'DB_NAME', 'wordpress522' );

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
define( 'AUTH_KEY',         '*~qei|uy#g5h?0q I+tz&{<a7xlOtoQ$3Q36[H&-~9B;926t,<d/C3TFv$T7yg?S' );
define( 'SECURE_AUTH_KEY',  'eQyLGgVeWUx$@+I-h{z;Z;de`~LC:7ay8+B8oV@;z>N&h3NCvsA!v.x*Lag|E_qO' );
define( 'LOGGED_IN_KEY',    'vlC~N&fTe.fhKFHeS@ t?dyW`jOk|sd<!l}z7Hev5zj.gF/X{0`qhWF07JQ{CP>p' );
define( 'NONCE_KEY',        'VZdEP<uBr5RJ%)/%tuT)ip|kH7V4>(cilQ[&~vZ9TbCqalMId:Jel?DA1~BV1a0@' );
define( 'AUTH_SALT',        '3_i:6<gXOn3{Yb@U~_A(;vnAFZ?wut4b0X}u k2NGfJ_(ES7H`!k^~JM1oki.RP+' );
define( 'SECURE_AUTH_SALT', 'dc*eONT-L><$5S8H2__dDiM|pFOf%kGUyB+}&cg PO/J8HcPG+}hn+xxdK[SWoz+' );
define( 'LOGGED_IN_SALT',   'xD)%|*?0jc= x.IS56f(*ZhU$TMqqOqe9hAFCc$w3 i%M7k$K$v]BJ#gZ/4HO}&=' );
define( 'NONCE_SALT',       '#?Lx+r0~mtNVi?jzc09jv}Q*d1`Qm;*a4S|p-vnIneS5~<07JLO_0@&N[]<JE?*M' );

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
