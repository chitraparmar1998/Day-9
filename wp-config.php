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
define( 'DB_NAME', 'bakedb' );

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
define( 'AUTH_KEY',         '=fJtunHVeJ:_-?pV7Rf(oqKG*sef}j!(lF=X7DR(OR8o4V1D91gXZT1rZJf)+P4t' );
define( 'SECURE_AUTH_KEY',  '1:H[c^HVzq4gB%>s(?(5l+<k4OrL(RG3h]GoLYFn_{HJ<VW:Q:i*iQti6FB5V1Sc' );
define( 'LOGGED_IN_KEY',    ' 0gdl[A2 C{isx[Qopw&a`R1OL/k&845(JXuc;Tk1hv2QH[,/5=VEGODaq{7gb8k' );
define( 'NONCE_KEY',        'pVlxoZm6ZUi*>=ex/iwQ5?D_F>h$ny|;U%I@T$e4C$fl0;[@9x,~_TE$!+ht7vu`' );
define( 'AUTH_SALT',        'kq6o1qkI`-$%Nh 9*EXJcGAygh#wE7,a{dMPA;!0~QUj:OWl)^v;hDo^$Vio#,d.' );
define( 'SECURE_AUTH_SALT', ')JLFR;}|JN>H,5afUH9Gq8B`MYc(}fp$@v[=1zO8P3+_qg9^G^A[?4?./o=lCOr{' );
define( 'LOGGED_IN_SALT',   'Z!j(R8s*.4P2K%cFIFNI6Jn@?q@GjKlnX<KWpW|Zn%&x(Lzs|_R7d:)W6;e^>9&M' );
define( 'NONCE_SALT',       'D0Zvp[8NKQ<zwUl^94uPyYA`?eb(:!w_&H^,c^wd3gD$>mE/^kEtrmINQVYi7ehH' );

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
