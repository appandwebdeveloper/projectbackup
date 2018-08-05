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
define('DB_NAME', 'wp_website_template');

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
define('AUTH_KEY',         'BRR&|Ku}map(kBHWmu}A^t=v-[-RdnlxTADT2<mo).?aF{9dms/vp p=ADG,2qI6');
define('SECURE_AUTH_KEY',  'yPT@52Y$.g$!@S%&IFxI1<>bhw]YM~Plk,nP3us?@^dd>tc{wseq9*S~k^wA~,p ');
define('LOGGED_IN_KEY',    'zbkjtD/KPL+/~;VrY$o^PpE%h~#~YM.:^Oq(,iIzV d@xZCi65Mxah~e9JD{$?+5');
define('NONCE_KEY',        '>(,(xAgavc*5^YlhcR01fZyN4.S!L5VEz- crcIqIc&JzIclSQ/cn%F ?.d)vsrQ');
define('AUTH_SALT',        'u!z/C2 O8dV0p[19QS_p5nLZVxGpGhN^tpQ4Yhme[Fi&p(m,W*cES=u==+0Q?gd,');
define('SECURE_AUTH_SALT', '^#yQslVH(Fd*Xa,;r*=uI~xXjWtO*ki(D9ipta-Cno2W!sKLmsj$bK*|xeZnSy>(');
define('LOGGED_IN_SALT',   '59e?:$Qqrq>#z[MM*-8>7.9L|]d%wl)hW+3$$w([/mWb<`Z(Gi.L<B0WMXi|c+D7');
define('NONCE_SALT',       '0m~k+UC{KSo*k8SL@GC$uXssXYy<Nx|z1RweO$}ECi ^7SC49-{VJ%t:;]@~Q2vA');

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
