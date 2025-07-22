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

 * @link https://wordpress.org/documentation/article/editing-wp-config-php/

 *

 * @package WordPress

 */

//original
// ** Database settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

define( 'WP_HOME', 'https://binarymetrix.com' );
define( 'WP_SITEURL', 'https://binarymetrix.com' );

define( 'DB_NAME', 'wordpress_now_live' );



/** Database username */

define( 'DB_USER', 'binarymetrix' );



/** Database password */

define( 'DB_PASSWORD', 'DO2025@Binary@12345' );



/** Database hostname */

define( 'DB_HOST', '142.93.184.23' );



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

define( 'AUTH_KEY',         '/Y-ad|e~hB8:d6?-j+~}XTm=Gm8g1o-qei0|wRw*04th$&t]%$SSW.Hhqw<Doq$;' );

define( 'SECURE_AUTH_KEY',  'cb)Z2F6*)[4a;``eiu9e1nUIdi$Q7FxbGIGX8+[3HT;G?wn4}J-*=l-:vDUv@Oh{' );

define( 'LOGGED_IN_KEY',    'zI)Hwsj_Nrz:u|]D$-i|1<.B!_>OyMLY*R^gLBR{l.KU!wqtm$H*H(Ly^=GJ07)Y' );

define( 'NONCE_KEY',        'tW:IMV2Y/eO2Y/rO}:9hdpnVi#G)BX5ng!jAp3^^6U46`t*V^4pZX1WP2;VL>,%:' );

define( 'AUTH_SALT',        'Oz~{Zy:UCNV=^h8u6,R_mvv>LTH<]Ny0m31V!Lf|9FC>%fb@S2DEauO7hU,Q&0BB' );

define( 'SECURE_AUTH_SALT', '~3O)+Z((n3Zq=s+0@~z#H-GJtV0`6W.rd{GavQBjKWm6cT[R{y$@je(Q7VI.1^[M' );

define( 'LOGGED_IN_SALT',   'h<``wCIO4*Y K}{[fc)U*igJb]?=a8UkEqU$+Iy]vkM%80*#$]?^SOYi~c&Zpgky' );

define( 'NONCE_SALT',       '.t6@p&f[s24Y+{oT8h5Gsu+PbDg%U(|Yq3ZTy])CYsF63-!k!H_pj[DB|NIYF@f,' );



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

 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/

 */

define( 'WP_DEBUG', false );

define( 'WP_DEBUG_LOG', false );

define( 'WP_DEBUG_DISPLAY', false );




/* Add any custom values between this line and the "stop editing" line. */







/* That's all, stop editing! Happy publishing. */



/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) ) {

	define( 'ABSPATH', __DIR__ . '/' );

}



/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';