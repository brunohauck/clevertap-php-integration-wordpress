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
define( 'DB_NAME', 'ct_wordpress' );

/** Database username */
define( 'DB_USER', 'ct_wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'N!x!2y5QNh@5!9R4' );

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
define( 'AUTH_KEY',         'tg{@-79s`oH@Jq,(u4|-:fcZWk(KfSx,r(-=x_0P+gg1q3-U;X-&a/dI.a%|(4}t' );
define( 'SECURE_AUTH_KEY',  'LOX}s[yvj0gtUpO8]?P]{_Weh]V5f`r{K~|&d^q9<F82Uv$cK&/eM.+Ywm3&8Uxj' );
define( 'LOGGED_IN_KEY',    'q;@#@.ot*3`hrF?$?g%%U>NFD#SGf/<aTn];ly3R73R`&m<5v!Y.8[u4MR-[$95i' );
define( 'NONCE_KEY',        '5|A]wf]v97uOo`Li|!Owyt(|}UV=BcvcL[n=Cc)(UM~-9ajqCmcS@w2}(+a%YU)L' );
define( 'AUTH_SALT',        '+xS3J9n|]J37p]{{rOojj^@&bvKi6Rj7fAB+/p^IDS)u1CtOgMj w5M.F,^%@jT^' );
define( 'SECURE_AUTH_SALT', '6(CbWEiP{/azS9aYqTod?Y|}+~,KJ.*8!COv.Ti<&{mKDsi:;`f|LcjN%VL*wo|_' );
define( 'LOGGED_IN_SALT',   'kX/8K{!0Q&6Ek_K|@+!2XR|:p`1DsRg|[DB0:*<O6=kMh_L9W+Jc;8<?hz^yN-ED' );
define( 'NONCE_SALT',       'ZI 9t=,=-En`IDhms3u6F14`#`{wb};s=s:bAJ5i8zg)-B>`O5y(08tR=.(I8JIb' );

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
