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
define('DB_NAME', 'wordpress_0329');

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
define('AUTH_KEY',         'C{xP$`RWe;#PD_%d[{A^Y:93JrO*~{/QmWL!kWE$3/PEJZ&q 1^ 5Lf$8p[Wu_FP');
define('SECURE_AUTH_KEY',  '#MJ=qc{a {0fhKw?[SA5|9)-n}#mO(R<}x<#w9tx>@To8/.`dnWuDCnC0|#Dhp3I');
define('LOGGED_IN_KEY',    'E13UFKOOheh9K7OGe!9F.2H|7hjlz8hB^@J{pBvy(c0PBe2+w]4@Rj[q%;[Kk>I?');
define('NONCE_KEY',        '~GgY2y>s5/.ONi4(V[L@f3U-;e/H3RB(_E?g&$)1gXt7/gL>}$h9ihOt3-=zL+7&');
define('AUTH_SALT',        'iu9=!uaDCm%yz;.wbilycBZA#Q.C+m]cw+Rt fx<(^KSDvUd]#}aOh6~_L/lPee+');
define('SECURE_AUTH_SALT', '{Iisyn-/gw@-v^6lP.,Y;34N`KeiQh%9VNeIf`(/MK%D3brcqPx/4aL*%ul[=`^%');
define('LOGGED_IN_SALT',   '%t3COd((/N4*BF7t@a8nO>-wI[vkOu_uTZLW!]K;M;^=V o&@bS-+#8NM3q^cC++');
define('NONCE_SALT',       ':esjfryETN?Q$MTEGMfnWm&0rR))%Z]t[}bhuPWTcm]FUcx0lGE2](RSk/nHGT=H');

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
