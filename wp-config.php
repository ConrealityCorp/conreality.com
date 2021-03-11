<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'bambuky_conreal2');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'bambuky_conreal2');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'h8x^_3SC3j');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'bambuky.mysql.tools');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TBUm)q]A.|8#|^m8CAc)M^x-~EyL$}Kr_q06Enk?owG+(FhGEhDop-ukiUMN#|mG');
define('SECURE_AUTH_KEY',  'r>B;mDB [/CQo/^gd}<%yTc_Sl+j53{St(Ttm/tl2<+&|?`|50%q/A,7K[|p*w:N');
define('LOGGED_IN_KEY',    'G1?n;:BETh|1jI>%F>zUM~kTuLXkS3k^U9,K+C0>;8T1p745ka3?ao_/+-nzZkOt');
define('NONCE_KEY',        'xh)n8X`!y],-G:Ef t-/kX^xeg|.7|Oqs9[b0%#B+].WH|!CjYyh)jqTE~.<3-SA');
define('AUTH_SALT',        '3*)L_f=TWUkO`?BTNDD/W9Y)Y/%x/~MW{Df521%VI!5ZrpvKoF(~!|lV-c6EyO^>');
define('SECURE_AUTH_SALT', 'Y}]I:Z3<2F6*(blyNkTr(3{Jm,_6xG+p([F}xZB+Z-gMV,Tp<E1c]WQ|cd9G%-9T');
define('LOGGED_IN_SALT',   '4llMdVSeH9a]a{}<NX/C)(Nw@%]qjp01t|izRF|MyQQ{fDelz)/|K0TJ~l#u)e#8');
define('NONCE_SALT',       'fXQs|*mXSJ8C*d5;Crn/>/edO@Q{[_cL^/$kspGFO~n.QNUNP&{0xHvT5*R=hw-=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'con_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
