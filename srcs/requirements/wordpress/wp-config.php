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
define('DB_NAME', getenv('DB_NAME'));

/** Database username */
define('DB_USER', getenv('DB_USER'));

/** Database password */
define('DB_PASSWORD', getenv('DB_PASSWORD'));

/** Database hostname */
define('DB_HOST', getenv('DB_HOST'));

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '' );

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
define('AUTH_KEY',         'r4;ow%Gv>c1sWj{J/czfW57]WC!,)z+?]@&|tt`cr.N-D!:VC|oc?RSctG;[4&qZ');
define('SECURE_AUTH_KEY',  '}==>8L++;TS-KvLhFGwzD/3-*+4wU_r~>G?+*^pu]*@`>L9bTE-Zp)N:ko)umkPz');
define('LOGGED_IN_KEY',    '1@`R/n&VUb$vfc8|R}wtq=^w:j-=EG2TFgB>dc{rc!A;v p~A,B%;@jT-SfFm3H4');
define('NONCE_KEY',        ':A>.L%kviNH3V%URmht*yvYbrIF4mqY*2NRL+r~cz&x}RF+z#3ns?)b{YEa-[Gl!');
define('AUTH_SALT',        '<<a!,6A%.<TCBu~9m:2Y(rV]}i|GQInDF-y/$BFd1+Nz3`>IJ[v~acfaVx-/+}m*');
define('SECURE_AUTH_SALT', 'V phm+_jB_+:(2L^)9;czAJD<N?YkIN^?0T6VP&W);%[IyoXsi[m,>P>YW.~Jq$;');
define('LOGGED_IN_SALT',   'jaQozbxlP3XJ!zF<EOle$~2qlL+7TsShr*l$Nc0.>!:Oj52%m6<-b.G&3lz<,UqB');
define('NONCE_SALT',       '|p.MQmh{QwZsGP_C.+4`VYlCGve1Wv.cGo1O>?J-y%JEJ)t7:N}~N:jb+mcT(dt~');


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
