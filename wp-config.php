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
define( 'DB_NAME', 'return' );

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
define( 'AUTH_KEY',         '1;CV>I$j6`yJ5O3j)v!Q|1`*^vSXc/yE-~7?!T|T;2^O~&[5XzjaDTE9S9=l=MS`' );
define( 'SECURE_AUTH_KEY',  'k/uY:tR$1DAXR:j5Z$`D@QC] Wy.>XV0&:J]W]UGJW=|>{D-ocf7_,(CH>Hq2:eM' );
define( 'LOGGED_IN_KEY',    'pr3Sok<g}Uu[0Y,zp Sk&PnNOuqmw8Jv3dNNW-7i]jR%Tx6I-h ]5f.WQ(Rql3K ' );
define( 'NONCE_KEY',        'S-X%P0:P9tG!P#,[25:ZScr{:&k|].WPG/ojWsdZBAw}XHXY(zGN5(bL`UP@]`rB' );
define( 'AUTH_SALT',        '42hgO,C!@~X/.uWyyov+uW(Q{Od}N/)h 2]y]?j?Yqh;/Zw^;vOyCmEpKmcm/xY3' );
define( 'SECURE_AUTH_SALT', 'Gf8x,8u@TVP+ZQ<rIwYN3)amqqfPM(L;n#M%>B  J6W!hp$1MA6+>0GV16xmxq X' );
define( 'LOGGED_IN_SALT',   ':c5)AF7d.Bs?/zO5WS3~%IH|2mX_QGL|U<ImD,HbE2n,hR85)s]Goh,mXIGnHJ-O' );
define( 'NONCE_SALT',       'Ly:o+l!Ed3503RuqU_X:Qd_GJx*Gf}Ri?gKg&`},D>o~6rqP?f(sdaDE52 .gdi#' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cev';

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
