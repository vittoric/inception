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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          'r&KY!>)b83aUM7k&VjHTeW~U11s9`cDfnrUM;_TRG+2Q<2VGY7Gwg`k0Q$$dY:{y' );
define( 'SECURE_AUTH_KEY',   'sCXHckqQiV3gmiXl`kV%h+@S9;EnPh-.mL,}H5)i`_9nQGj|^PN7,3e+fx+n^4]h' );
define( 'LOGGED_IN_KEY',     'AJA&Sb;CtgQiOt&Iryr3RNR&ze7mE: ;[%+vg^_CRXz5py){cd`/Js|y{zK+M{}.' );
define( 'NONCE_KEY',         'K3l,f5*P^siw67%(x6NcVvx2D:&jwv_G:xE`!)?Jbq-`0XcFihTP[1&K.JY+aYV|' );
define( 'AUTH_SALT',         'LtH(il[(wvssQ=qy8ph)N@)H2VfcL#zY@)hJ/^qXZo,+P9$Oa`DMG`f3.8Gk|jP@' );
define( 'SECURE_AUTH_SALT',  '6*pfzEp^]$aO;cJ@P_r2)Mtu:9XO7l SQy,jzXrpg+U5Z?sPVMRqod+Y@$GD!?_6' );
define( 'LOGGED_IN_SALT',    'vHqT,`i),YP.x3eV(5*)`.Y&p{)W5W2dqYB?WxyKwr!0E@/3{`G.@mr2szd[ascZ' );
define( 'NONCE_SALT',        '5{d`05}eGikfZnXAcuyrrVPwF%-t,y;$#]Sz|Pi4i-{T9*~+.C=X}^vk%w*)Kdzd' );
define( 'WP_CACHE_KEY_SALT', 'x=iM(pltR;W#LAI_kLl%AT6Vx{|]2Vr>!P?!y`Lv7j$zGaX/yUSu@ckUsi[BL#^Z' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
