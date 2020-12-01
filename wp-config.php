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
define( 'DB_NAME', 'store' );

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
define( 'AUTH_KEY',         'Sm,&:.0U.qp&#%O,5[28^LNe;JYbHr~2^h+{p0QlC,?$e!J!db|(Uy-U`PGXu%K~' );
define( 'SECURE_AUTH_KEY',  'sIp=9IZ/,iKs58Yn[U}lqBLdbk@#sl37^|&@:F0=0eLWs#~`{8oTPI{7i]yccrD]' );
define( 'LOGGED_IN_KEY',    '4]t r%ze%{EF|k=kZ@[Y,=C+.kX]RH{euybJb[~VP&<xDfu/A745@A`lid.iM9lB' );
define( 'NONCE_KEY',        'RpM;o.a+&HLngCKv)FMPSD#Y/-U(ZC,*gW%0TtisOb>rM!_i#~]$=J?!TXhusT*H' );
define( 'AUTH_SALT',        'QT#b`3PzesJ9gR)hxRh/vW!yXI5I@YUe?IXXNhiw^l^fv9i5N9Ti&MC?_PrEBgkF' );
define( 'SECURE_AUTH_SALT', 'Wy;ZvQn<CWMtny#&?j36_&2?Kup@F?i>uCA$R34,RCl,k8}s)?}jCc{!}XvllM$6' );
define( 'LOGGED_IN_SALT',   'd5LiR`Y@hz}V#/Rl+{moQLn=<Xb;/+r:sH1bD[n6Lodz*#>?/lwy(-{0*V$(7D?0' );
define( 'NONCE_SALT',       '3Hr0q&89pGy q:cGX=GK79~;S[30Dbkf+8Rxa?O@H_HbNh6!RC[E>T:#]y/ep^7t' );

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
