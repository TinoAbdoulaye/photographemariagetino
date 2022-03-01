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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'photographemariage' );

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
define( 'AUTH_KEY',         'A0)RtWNSI>Ws1(Dm>(#i+TjM$]FQ$ e}V{f,O4/%a8(CosNf 3?pk;IkjrAwy9=f' );
define( 'SECURE_AUTH_KEY',  'so N$w+F;T%s %TNQmupSw{t;]2N<`p8fGFd0W:?8/?g[, XT[beK$h@sd%0,9rK' );
define( 'LOGGED_IN_KEY',    '!a*cw,q*0<K@i6}9JcUNZy= vquZ94.57] pdWo(X=N;--U7!8(1ib&wQ?64{acQ' );
define( 'NONCE_KEY',        'hn Wgdt|yG2ygEiC,+m#YCBEUT9mSiZyn]Zr,P9Ty<0uw>Q73RS]c?:jI5JXpf^*' );
define( 'AUTH_SALT',        'PS52fR%W{XqkiKMWzP]O-Im2R4ky8BsLj)SSlJodjQmvSz{P0$k~`P,.hG~,Vbn ' );
define( 'SECURE_AUTH_SALT', '2n|IboNBp)NFdPLDxHowGh_OM8b-c.lS)AVW!<c62C_4G8M8=`8s=`Jy1*1vl8ka' );
define( 'LOGGED_IN_SALT',   '+DIE:XH SS$gGpF?C:z_#rEZ[r.Pu=e4GiSu]*U128>?}cxP;=-=GKXEAeC-49Gl' );
define( 'NONCE_SALT',       'Y)KOUlUIXJAWVt xT`kny7<pbu=uOv/[IZ(s<j Dr}^_RBU,S6q$7(xKH!(itY<[' );

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
