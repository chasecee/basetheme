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
define('DB_NAME', 'basetheme');

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
define('AUTH_KEY',         'Vq;{ZI@gGgk|q}T%wz2jh^WGn_,sZuF1[_f9KuKH=Ol+u:9gp4nY_9oGY_@,^zxS');
define('SECURE_AUTH_KEY',  'P F%z7OhST]sYN/=9g+B:s]%be* IBiLj1qmWXBdhsktKg#F%ZZ:FF*ifo{wjxIq');
define('LOGGED_IN_KEY',    '6PZR2e:undW9CxhYQwwR!{]=OQD%5W=;[C_XUWG|NUyJ3iL=U8qrwV!a&q/d,bg]');
define('NONCE_KEY',        'cHF*s}^.*2@@vo*Uo7v+-/g+pp3U+/rO,OFBN1l0Gp5r/@l~Q3tZA88Yo4dx7lu.');
define('AUTH_SALT',        'c9jymd)8J!JS,o<??k-iJP_4}|i],C*}rt8gAHUnKey2BRTh<U~4$6e#+xIS5F3~');
define('SECURE_AUTH_SALT', '/*%:=Q8HNy;/YC]Aa0OZ{=.[Cs?)IEj&hj>ng$0!B}we&[W_;rv!jd|eO#bX[ L*');
define('LOGGED_IN_SALT',   '.9:O*/Um-4P)|^,DJ58S99WLo%ckzMbp4%3Ix^Ud$],b#!5nP|#t{Rp)*ct1c?]Q');
define('NONCE_SALT',       'akuL[ykca[b/WV{uE6bl?<?zJSu~I:>y`{iu1qtt+rt=fIDc^haBK~KD%pK8N7Ou');

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
