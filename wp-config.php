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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'benfqrice01');

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
define('AUTH_KEY',         'J8])2G&zKqK#IWJYef??K2G {s_B.|%?2 6-TS.$Ngz}/,3V{4BJlBfvt+hR[WdT');
define('SECURE_AUTH_KEY',  'rYZv+qtB`zzvDzpn>4eMDZ>?9C3#*[]sK:dutEl,KG<X nE{y0M7<vkcUr/->RN$');
define('LOGGED_IN_KEY',    'nDV]-tqU)7+.Hk7_|{ *~`M%v4}2(ipmUP?tE hGT;CnuOK_OYVxx%Y2&i-)phdF');
define('NONCE_KEY',        'qn138qP)d*:[vAk.1xr4rr^s{-G1vrXsy~K-*Hy^n<M/-4aa~dCI<B,DDV,ZLgVB');
define('AUTH_SALT',        'MsH#s*[ QGLJ]z<}0=S_FfAmFe2j)tin5<u1GD?~J NJl,Oge2,4,].l}F*/JgIx');
define('SECURE_AUTH_SALT', 'L>q$6fo+qT6;;ll>uzi~gGDi-.*1rikT,hz.~K}p`iR7M2Ct>G}=PHAx%9FcK3ve');
define('LOGGED_IN_SALT',   '5>C$h&Vfz|PNeAi1M+Eg7%Ds17U[l$J]&t!9Sz;EC7U`bbe.F)F|lOD*zEj6W6iJ');
define('NONCE_SALT',       '-6%eH5R;I7-X*eVYrJ;>bwI/WE[3TC;?EOs-C4X^B3)W|)|?,awrJZIiU9XEZZ$J');

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

