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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'ZPup9 yc?AB&cX}[s!GWqi7{XNjD^QqY8A|FI_Y#m0gG#*GM<tE;:#)+yJ*G1I,?' );
define( 'SECURE_AUTH_KEY',  '#bX6G,XcF52wvS(J0JqV4dasSJX*)w)hHTxkB;8|Nx=ET&Oa@/?-6~9BkkL@j,{N' );
define( 'LOGGED_IN_KEY',    '/vRYL=gKr~w=i~|~]@^}oj?2r|d_DFQ] ;h<[.l5fflYICdd@?2oHI[bH(:]FtKA' );
define( 'NONCE_KEY',        'tUc}R=?u^A*.VqIfO%VUp4gWpEQ0l[^]l|0Wm wOL8,w.BO`z|6_,i`u^A`R==}q' );
define( 'AUTH_SALT',        'Ydn$qi64kBw8(z7z|t/iJvk-4*bK;J,*]:iQ2P7N>9sxCR(S|fdTsZq7%ux+1Qr!' );
define( 'SECURE_AUTH_SALT', '*B@$e_OMTrLCOSr96KolLO*5h.}Xx)}c16G(*!^8u8`04X+cw>g,uc#&w%+1(k@<' );
define( 'LOGGED_IN_SALT',   'peAl,c+8mU=w<Cix699$}mZ2Th~2i)Vr?z`h>[*Hih$z^m6JePX-k& =R]buY|C(' );
define( 'NONCE_SALT',       'F9-k1Bg;>ywlv`WqM!tVom+j0M$DmcsM@[zVTNLA$US9COtvow?^fU2#,|h,+/Be' );

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

