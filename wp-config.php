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
define('DB_NAME', 'yummybites');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'R.s> @3!YIo[BYt%I9&)MY`$W}#/0a*JQ-GZV{D,o_*!hli@s1<mlkLR)oN^y>T+');
define('SECURE_AUTH_KEY',  'VvtaZDXQ{5IF<}]xHuQ-]Wj{GofO|G,r^up9)[LmY]P+%2bpy03 znO+E8KlypZ}');
define('LOGGED_IN_KEY',    '(M7`$@&<TGKcxGw=I{k(9--,:U ADkv2M8E+ =>/$E.dmYVYHw)zYA9HpdP_1bGT');
define('NONCE_KEY',        '-M}s(aGjVV ig^f<}2Z)/)d4O}(X[UJ+2srf%W@q&Tn#`=C4UVY!%jDc8*&m.kg=');
define('AUTH_SALT',        'e?tA,#d~1:@EE9#iwC,^MN6|}3+M8Iya]6haUcq*%jmKYbsVWO{hh%[N$;9o 1`m');
define('SECURE_AUTH_SALT', 'o.I 4l{X*2lXhzn0Frm$NDBz.Mho<.2{+q>@whW-/_W tUO:^(C-t/>wb%pJDe,2');
define('LOGGED_IN_SALT',   'MUG&C,:hrp3q%Og5r/>f:H5nK%_098m{_qJ!&/o$j/J_$wL)>Q`&D`UVD&)Gm`~7');
define('NONCE_SALT',       '<`b-*h{WW~W$S4S /i{1v(o b!9fiSz_;m7iiK$;Y0tsBo1%!{y<dH`_5quHeRV2');

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
