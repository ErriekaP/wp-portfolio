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
define( 'AUTH_KEY',          '!/BN]/2xmw=!~lBR,!<=}9/Kma9 ly>N^p*%ZJq4O<$iqoI?jq?,YrEE$I$Z >v=' );
define( 'SECURE_AUTH_KEY',   'ABa4x-NA2s-Ml*$p9U9=f,4&N&HHU)7#}w;6]vL8nw9KPxCocBLW}D9G[xhNZ_j$' );
define( 'LOGGED_IN_KEY',     'qr7Y$qIMN>5A^yWsAC!rfUcoq!JrO7C-YO!QySvQt3~s~?Rd4x?2Bk%P|(@F^n1O' );
define( 'NONCE_KEY',         '_3,Q9gXTda-3WT9ySp*^9h|Fm$|>C48|dC]5&Jb/SMcbXL9FzL^dm_N`<+iExNCW' );
define( 'AUTH_SALT',         'oD+ZAK6P.w-eY:bb:{)T5w88U:fuTUU@^4iV&Q,emDd|T50WrBjEPVxw.{;HCQBU' );
define( 'SECURE_AUTH_SALT',  'RsU>xU@SpH& QE/kO%8%Ou9_P{q-esbL@(}PQ-ie04,jMqH+2hKXpGm|-{K3b[?Q' );
define( 'LOGGED_IN_SALT',    'Gx73[ci7tkz/4@C5bul~fG#uallqG}yaCDt:@G;S$tVEy(B-?SqeiE[o2lXB/d6:' );
define( 'NONCE_SALT',        'EtgS]YWEQ1L;o[T*<$bdUC>K*CA&,{i~U-Ib*X:qtYh0+:P_8q)D%zU1vJfkJZw_' );
define( 'WP_CACHE_KEY_SALT', 'MW#h?<?:v;2*a.lWS^e7Y_+=ZC!2{ocIn}GJg#J.xjDa~Jb{TMZj7.( )UX:hA<=' );


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
