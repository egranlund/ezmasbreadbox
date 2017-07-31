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
define('DB_NAME', 'ezmasbreadboxdb');

/** MySQL database username */
define('DB_USER', 'ezmasbreadboxdb');

/** MySQL database password */
define('DB_PASSWORD', 'esqkCJT2gGKqsnKs');

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
define('AUTH_KEY',         'S7,vm-9xX]}[AiPZprlIt7x+aD/)q%bT<Le{1YqsKJMrP8KI:lKMFsi>TOk]`g u');
define('SECURE_AUTH_KEY',  '7|gFjS|VyN{{:EE:5{}YA_FNks4K7cgPUba*_1~{``$6-?,{O)QSLgwn{2c*vL!v');
define('LOGGED_IN_KEY',    'eF{_|2]ii,}Ros+yLW[.dc5GPpO$hyY$Dk%NzW3slI|,SZ}YfQ}fBAMh[;n4X)K*');
define('NONCE_KEY',        '=)3wM8}dX_~iO#bldzkGA^;nmiH+eV/FH(OJHYF~{C!RS)4{|x>@=8kc^6()rR~E');
define('AUTH_SALT',        'dC.&]9J_b=R/^aqsaxEoXbRvo>6!FFxLUZt{2~]Ph}#x42~iDU]U<gH!$R/[goBR');
define('SECURE_AUTH_SALT', 'o5F|$Ja %U0hlj&h^LV!dD*/){S)r ~:bW1wn|8US{H]fn[vFaV>P$1CeV4?a).U');
define('LOGGED_IN_SALT',   '[5zREgjhdk3,}j8hpF}6.<AUF,GVVXuMewgzgqw B3Sk5~zF(G66a%`._Dd9,DM%');
define('NONCE_SALT',       'N|^e0>db2B?gQgoY:Al<r!9bg,g{v?#S+|K*,5LNHy:4%lzC~mtYnF_Nib=i*rGb');

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
