<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wp');

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
define('AUTH_KEY',         '+MZ3[}d7%o$aA3?EsskAv[@_3cQKw$%e{VUR|Q:_->?SL,<38-:b5iw7}d9F+Rz{');
define('SECURE_AUTH_KEY',  'f`BF|Aa|3n2CG||gM;]O;-tS/ >~+X)dKNha6bgv&[Bz:4J@sgHJ=Q6R!#1x|s;X');
define('LOGGED_IN_KEY',    'zeI-Z$8(lAz?cAlw4f$ULFv4>Y<`xbGpYoY*=pW>%6I2C=(BJ<fh7>%cnx!|Pc-Z');
define('NONCE_KEY',        '/!lw:RUP{egnG@KT*d2{#{E~w|)Za_n-X+5-~SzLLq[aj_~EuMc<H+-cx3`>AU@T');
define('AUTH_SALT',        'AMX+4$<yo7[7LbJ!H`[VNm|}WB|deP0_`^~:*g~1;q&OHnA8{)zA.]Q]LTWOce7Q');
define('SECURE_AUTH_SALT', '_Wb]G]eLc#i~-*[-),0})f-XPUn5KH|3|+l-; `6TJ?h3XB}A+>8D$-59s||l0IC');
define('LOGGED_IN_SALT',   '^g.vE-{/9xdpTyH.7q(,h:^nVXGAx;7|JErP>HU^O|xwzx)HYzBT)YH!~,J;F:2{');
define('NONCE_SALT',       'Op=2+#DJ1&+bm[k8ZHsD^s2L(g}@`aAj?cU9T6D5EEH4FG}{zDfY,_}(@r>6h4yO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
