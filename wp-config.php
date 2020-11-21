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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'wAo|Wf0(_K-1S3pThp;i`Ak`w`4Lk#zYq!5(|Ofbm6E?;yNq1#oHr%Z[tO!:3o*|' );
define( 'SECURE_AUTH_KEY',  '8ucS3=S=b]H6_*ukhy~7P#lpb?P)d $4ecvY{cJOX]<o/M#`71`}!re~G)]2v%]f' );
define( 'LOGGED_IN_KEY',    '?bq-,Pe/6]7dd}i{./jsOd<#6;@GFN>Y 6g_296]3*aR_p[|;_auNO37|l<ZwExo' );
define( 'NONCE_KEY',        '/DXdqxS3Y:3v5/]]`+^YQo<=pJGOr:hIwt2=Z%lyGBi8T!H`}t^$dQGkh3oGTd$;' );
define( 'AUTH_SALT',        '?-bIe@MGg~|GhtTT&2Ku!?-KSL-WSn%elINw*bx;:RA>Gt{j`iJ5mNZj5K%$1msw' );
define( 'SECURE_AUTH_SALT', 'uei[x[uc7924 r.?DoV&XFl$#44i~XE4`%o[,WnSv%Y7:KMTG?9eKjGnE%S1]HK ' );
define( 'LOGGED_IN_SALT',   'Fk(gd7mmx(4J$corox~h1@i+WG&2|M@3z>J/iYDT]jE|yEEuD~8u?sX[_n^$Le>9' );
define( 'NONCE_SALT',       '(qJd1LH(ST~+Q=2s&xCJIEep;a(k|p<RK);|wU>.gFcO[<d0r)Dgb[d* v.AN1jA' );

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
