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
define( 'DB_NAME', 'juanderer' );

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
define( 'AUTH_KEY',         'i[i)=yne1<nOZ3$OVY9:7EVIcl,KymCS>7FK:iv5>/^lPGzted.7MBV_C,mO7G e' );
define( 'SECURE_AUTH_KEY',  '><L-zAtN?2Uf~G~B9~B]8=lv^$@Bu{p4.Xam2]Z/8kwt$x5n&#34RFby4qYb_aIo' );
define( 'LOGGED_IN_KEY',    '6#la!@@B]p]O)p`-6:kkbyb2 @n,k8;XhFk1:.ujmt.S#+<bGr,M*uH[Av]Er+-H' );
define( 'NONCE_KEY',        'l33CC>iCXKN{S5~%Z.1@{,nckTyfI+oy0yzD:hn6wa617zw4gGVCx/2n{]~T(/YQ' );
define( 'AUTH_SALT',        '~qMSLJHm#`1*$,:b`odCiJWyLo+b$2 S5Jl4`=!n2:Q(YfO|z2x+!CyxO-,6|_lg' );
define( 'SECURE_AUTH_SALT', 'pQ2ZnxtVAz9HaP~>s.KKVUZ&xpYpnBR7!$BY!crk4/@Gi.AE`TXIZ!NkbY7F4#+7' );
define( 'LOGGED_IN_SALT',   '{b1s+s$W1/X/SH{I+|qcTNQ<izxR@,F;2yi^;E6BAME}^ym!BY6ROsI3 }~U7U7O' );
define( 'NONCE_SALT',       'YMp!B z@!&fW>,JZyF@U&wKlb03vR}cU(87ci&3,P:5#yU9S1a;G,`9<MUZk3e`M' );

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
