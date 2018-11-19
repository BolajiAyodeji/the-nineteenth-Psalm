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
define('DB_NAME', 'tnp');

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
define('AUTH_KEY',         'K!KPhW)]FP,s[l9Z/4PaGe:)ME!}*v+;-0`Y|F>auaHnfuNwN+QlM.+pu5^EJVo$');
define('SECURE_AUTH_KEY',  'Px:+nHX[L?{Sl.^*`;a0-I@s`9DauguHLmtMDNZ q/Sn,r4Q$tP_/zHRL+g.YRE&');
define('LOGGED_IN_KEY',    'T8z%dAqsNTS44CvRE9[MU=R)F0[hcW[%6!M%sj-15Nd0`O:Rr?6dh>c$!.HQzz>-');
define('NONCE_KEY',        'A[2n0fVh[F6>~pR(lF!eK*l8k|n7RZQlKKr^2v0}}?RRVge=L|MV4I@ppt?%_CTH');
define('AUTH_SALT',        '2FAT32/th=@7<tj9;8%S#7hRq]U;;Omhm (MVjgK?C($EvBQ<A2/3<o`xpvomT7g');
define('SECURE_AUTH_SALT', 'h5V`+veo2p{/WU/WurgA72L78jCn<gF[5@4>$w((b#;/;:Cz:BzsDL%{%p&uBH{,');
define('LOGGED_IN_SALT',   'In!o`lY1Q>?azixvuz`h!q)_#(i)t];zY[dn|^2$b)1z)1rHF]N0AI{p-VlbRY,m');
define('NONCE_SALT',       'a@cd;feks1nYJL3?.d8]r;/lc&}{^&Q`*eK)6X)6h4vyF>l-|!fV;q@q-D 5/@wr');

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
