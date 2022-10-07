<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'duyhieu' );

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
define( 'AUTH_KEY',         '7]VWZvAT# 68h@2T!G-u(pzJ.!Dyj*RbO5=8^Y?IKBU:D|;I}l!nvP*`0V/h*.C^' );
define( 'SECURE_AUTH_KEY',  'g.}CC<l`c0Xd -c}y^oxQ?qv^&npPp1@vfC&(q{E!@s/*cI73^quyz!Xc2h(>nAp' );
define( 'LOGGED_IN_KEY',    '0iXFb`P/&8Sn?@*<WMc:EBn%j|$`dz9dU/YP/4?^,DS{-6b<WVoMHEWi6:H/8x6o' );
define( 'NONCE_KEY',        'F7Fx6l.r#@IB([K-jb6Ni~DM}(&C6)oc~jb8Z?]{t5Da( J:h/eCHu!UB=!&eqqx' );
define( 'AUTH_SALT',        'D|6/K!sSxy7-j640 {boaxr8CsLH[bx@*x7AT,--WjF!8&+td<T!2zR+T-Uvl}FJ' );
define( 'SECURE_AUTH_SALT', '(h5~l@D9:.F^K-q7f`SUjO^v,l()FXjOZ]Rc5k%y2:/4Khb4v!|U,UMIm`(1J5Mc' );
define( 'LOGGED_IN_SALT',   '}dK=* k<7VT.yX0ZbD0cwZH5(-x)RMqt,fM?C3M_hvGPh._h&|TFsMSCer1ov47Q' );
define( 'NONCE_SALT',       '(9nw[M#BCHS,jjAnFX/2_N,T_>&6I{LT+3-XDLU$Vu:#S66cJ3*teTF*8*tHx|^v' );

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
