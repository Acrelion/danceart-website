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
define('DB_PASSWORD', 'df4c2816');

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
define('AUTH_KEY',         'j:`7EMk=/TsfGK+O7?*C<YF~w@?(!QCVa+jlM|5>kyf:O#+G,}*=qwrMT*mJ$^vI');
define('SECURE_AUTH_KEY',  'wsd`ydX-<vXu57zO-zLsEXj;*N~=Oz:u(iFY;]e_*~VQEdIJJzmCtv>FOs`r}D0|');
define('LOGGED_IN_KEY',    '.DAb?[mNZOnVnD*(G*{:qo= YK`?o+~//$|w?p^37Po*Uy3$c/.Xjsi]6`|3x4K]');
define('NONCE_KEY',        '@C-152G~},-< `#Ru>qy84j-AcGbO29$EHCWkC$U~G_gVl2n/U]%?l75*+V]sd-<');
define('AUTH_SALT',        '@ds{-]kHkXT3Xn)v,#r2lU7-Zo%gT(NUluN];T1zT/MD0NV7`6OFXomn)6F2|zO)');
define('SECURE_AUTH_SALT', '>~UpV#x,rd9k@DbgF*(uA6jw0R3d2hL,75RCi60AU~>!cxJn_4i5<p5nz<$W#$;`');
define('LOGGED_IN_SALT',   '6{{=n|kkgMchNWfzIr97n{*2K[[r(pT!Ud/~3ewkOH`uki;5~lnu1+!C~r+Py*+R');
define('NONCE_SALT',       '2_5Jj)8Yp+#Oi.IUCVdsiF]Y?*R~drt.{<1^iqMKm*4c2DO7l>G%Z-J.L%$dff{2');

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
