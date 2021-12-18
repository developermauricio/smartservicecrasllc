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
define( 'DB_NAME', 'smartservicecrasllc' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Q2b2TQEDvfeD0jiIyF6R' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'o<Mb4?T v>s?V-p0]$|LftF$CF(}cK[_[hnk>.>SCwRu<[y+0I&f`-t(Va*fyHzx' );
define( 'SECURE_AUTH_KEY',  'Vu8*Nmo7mu7Qu,5Gqmu>F5y-n6~d]rb|nseLkg@~#-*{2*9rYbef@#<TiGqNglj5' );
define( 'LOGGED_IN_KEY',    '#6Dy6D+{B<i=z1cqoti~FsY~yp(`zSC0?M+aV^NEnrT&cM^*^91YY)3DdgM=y=wE' );
define( 'NONCE_KEY',        'mco $k5`~TlhZd)T8-pxLQ_.N37[hbIQ]6Z[Mn?utWGk:A-/Wbb|myt#lh2/R0?m' );
define( 'AUTH_SALT',        '?>r=6i#EkiIEV tn{XNrM/75_T.)+%/g~oXRQ(+cSX3IEJc^&&HSQ]JFy7{rU<zD' );
define( 'SECURE_AUTH_SALT', 'XDSxJKr[(Q&LcFbdi3Y8{&Ux_b$E+A->Xm/rlYKL.%& _|p;R(xrw31[=e l44W<' );
define( 'LOGGED_IN_SALT',   '1^up4!_IG4n{%,_gAg  2KAAoh$p)2;0Y~|p2:`+$*B h66oL]j$_@epSXp:|+b8' );
define( 'NONCE_SALT',       '`dY4a|bUuY2S_hzshc8u0HBv}_Egh>>;RFbf[T,RLJ=%~[~uSnNNSz|XVrJ$}(XM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sm_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
