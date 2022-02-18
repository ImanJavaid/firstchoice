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
define( 'DB_NAME', 'firstchoicerestaurant' );

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
define( 'AUTH_KEY',         'pDrCK*YK+7E(aT-gV{FD>ErL;e`NieWPeyu-J`;e)~I6xWCSO@<8GBO gg62NLpl' );
define( 'SECURE_AUTH_KEY',  'RU&KV4pf%g/R7ZR(e0u?h1,Db6tD6V%Opp)1VXTUH*hupYrI~#Z>b}q6oH0..fE[' );
define( 'LOGGED_IN_KEY',    '<tzI8]f*>?U/eOE]H +a~=p*nCA3|Q70c#n4N([HhXfjQ1.>:--X.X6G-f8o9ZF0' );
define( 'NONCE_KEY',        '>g&{DuDZ|TgNnZPgCma=I{s)[GzV Q6tdz;B#ztj5n9gSGl-zSW>7>|E!FQ=n?`X' );
define( 'AUTH_SALT',        '+&fkdqMvrCytlAl49C3Q,dT[80xP/pL_3C[;rNP0@S1${vyPeQ=(1bdjC`Va#9U(' );
define( 'SECURE_AUTH_SALT', '<R qHvz07&ZE{Cc7KL3u5J_1Q+=-9LmhS6E_pqW-zYgZl[i;b(t~1RV 7_tv(/9e' );
define( 'LOGGED_IN_SALT',   'rw_!;lGc:W4,i(Mir,~HHO/MpfC9iPtGEi.| r`tfX}oslbAxDB(kk=Sz-[$`{UP' );
define( 'NONCE_SALT',       '$[5Z/w8T89o.R,<IK8PQ7cwlzlIEJ>[R!e:TPRe*K#eFZs%PK`!#4d>rINTXkLPq' );

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
