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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'brian');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3&*Hb(On`%0ZN2UhH=CF{|,+gfmTxz*Bd|2]8~|NfY(:kkhBK,2hVkxv-z*@v:AD');
define('SECURE_AUTH_KEY',  'AP5U=q *|:16fW+|+30|BS mhPSCE$e7wzh6|lnK|]X$$1Qj?3(}NB2dSNrr<A-<');
define('LOGGED_IN_KEY',    'vU-Y^ZL#seYE6-)+?pG9:.|Ra;k/:0mPLj5){HpuSw}I2n$pY(7])FKmPn+U4Gtp');
define('NONCE_KEY',        'rT7dmCtz5J)]p_=81v$NM&/ni5s09zS+ck|YJ{a,Q.F$oO1;g|Z[zM+W(@+#WR?Q');
define('AUTH_SALT',        'nW nuE&4bU6>`YH_]d}++%Ig`zUFow,E+6O0@kK-=N7Jy:RghJ3NMgN4. nA(?Ss');
define('SECURE_AUTH_SALT', 'B@NpPA(z[]S2{DmMg&m|hTdEvIUP2uojc+,=d;4[+&IsdTM| 0]`)]d8(5eGt/w,');
define('LOGGED_IN_SALT',   '{s>HfU3r1}P|=}A6G]u{PJa$>C**df@Io1_C<tS.H-0{o?ya4+re0z<&y[=SUU`.');
define('NONCE_SALT',       ' |N8*M)zLB+)m20rhG#3Bl4SgI&{iW&6inj|8gt_|Fl2<- E0qT$(fJa*-n)]W|2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
