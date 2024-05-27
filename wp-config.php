<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'fishing-dream' );

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
define( 'AUTH_KEY',         'Lyk}<n[$z;1,)nL;#<_t-x}2hMS=NX?ltclR_t4@IE)jNA$WCtViTAIXrnk4Srge' );
define( 'SECURE_AUTH_KEY',  '<_HEjd-N%b21Q,E&&J8NN.urF~d7r*eg2f{&6 4B=}_Omy~Hu2g0EC2 {T>_m>^m' );
define( 'LOGGED_IN_KEY',    'b.WtB1~IKI]aD73Je(F3R.Jx$GCVRrLCY#%Q&(r.:6h$G3Yhp&?fB}jZMu67GlYo' );
define( 'NONCE_KEY',        'x>G:zK^pC:3D~(5hdDiwvoL`1}w@ot7NC[1M:prWVvLx)w_/C3-27x`!}}d|Z%Gg' );
define( 'AUTH_SALT',        'IeM7(a|aM_2EEahvIi731S%!ggIdZ#q[;pO[w}<GT8={;Zg<x:=ELlTYzX@sk?aS' );
define( 'SECURE_AUTH_SALT', '#ybl%| E|TVZ:Zg9~mVp1e*-m+Nlhp.t&*;2G-}(Tpc0Q9NPtzYfKwoCi{K8K|h|' );
define( 'LOGGED_IN_SALT',   'SwM)v%/f(fa[HloG`D~UQ+MwiS DlF!x/g<oVtEHb~@h<MTBPan3XUs%@jQNL3s^' );
define( 'NONCE_SALT',       ']+hF% RBtJ$_,p_-UUyz@ek@B4#sSj02QagSpeHFK[&RL89+s5Awg@er(~h2SL{;' );

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
