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
define('DB_NAME', 's4c');

/** MySQL database username */
define('DB_USER', 's4c');

/** MySQL database password */
define('DB_PASSWORD', '123456');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'N(j8nMdv3$#OpR{a9GD0p_;b^@DGv&2i?!1he-)hsnMlr|rGhzs`u&pu}-,@X8NF');
define('SECURE_AUTH_KEY',  '#C@@[47K!]nd/mE/z]`|P*DqI@xOgTxiY~-HL(d1Hd,D(I=8@LWxUw 33f&Wyx=V');
define('LOGGED_IN_KEY',    'b%_1u,r2ad#30#]d%W(eppLw[o%7GGYkDef:^Rt|.N$p+%ncd2;tEiX.:pHcL/u;');
define('NONCE_KEY',        'wQB`q#imf:ReYe>9C@?pOf/~y2&w[.bkpS0#dhLr}.2~0Jmug}h3L0zAAA}Otc 6');
define('AUTH_SALT',        ')}xE3C(/_FLIAt%O2t8{FGu_#B7[)}[LtzV`Nk~A`.GJGbL+<RufmPzF[o6/OYew');
define('SECURE_AUTH_SALT', 'n%a^HGvL#! #p7g?;6f~NYI(QpWu!UNR@*B.#5$W=*#r3v57|iJ@Y[/aF5@]yTRa');
define('LOGGED_IN_SALT',   '3VIdbXYnnNt4 P7:;(1@0JGsx|OB)5qu7NUVvj6j&3,J}KT[]0M=d6jK[,{m]8R8');
define('NONCE_SALT',       'hr{I8O~>h2_j$M Bbwpbq4t$7JGew1p|o$bw!qJ[U% *D!m|J_`2VFdhd}~?6]~X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 's4c_';

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
