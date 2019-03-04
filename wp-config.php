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
define('DB_NAME', 'mhj');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',{c=nEI2MiUWRINvAbKn FEz%r>;qoo?xx3_R09eNT+++@ms#DkUU<TeZ3D<I1C$');
define('SECURE_AUTH_KEY',  'Qd_v!1b`,tp=C)2j-?iCY(`1WCBI!p1ovQX(9y@-V6{lv9h:{L]AF1>GA$HBb.6Y');
define('LOGGED_IN_KEY',    'R=rEv8(9b=>>33Bn6+c)kI5)C(]=[= 1& >J~}LdY`+:b4;T~$8b3P%ay2(R7`J1');
define('NONCE_KEY',        'zx!DRHr[=i8KBQMRPFG(y1/i98V||q7!:GHS~qUj=X8bxF5%KVVgUPRo[rh8fJ<H');
define('AUTH_SALT',        ')%x&&yfB&:c!L=fBVQ;ULDtTF;qQdz5dw@`q7/(dY&lf,-<F$.+5$;$yvbA{~M:x');
define('SECURE_AUTH_SALT', 'V/maYG8A=pa`ID e+eb->#:T@]`b; SAJ8=}}.j=W8749LNP}&j[wu LpPlw+Ulw');
define('LOGGED_IN_SALT',   '6+Nzk6(KZf^BPdI)lP5Z9eA<o;,LM:Z&RsjX~:&vrj&3z, 42IW|obFXgUHz{ZCE');
define('NONCE_SALT',       'LdT|vi(:sf>0#Vj&B-@}?sqNH/3qIbiaJ8!RCnLk/~ ~Uf=0:$XYnt3lcX0{0=HD');

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
