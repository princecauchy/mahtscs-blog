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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mathscs');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         '3Ajl8PdRl5xRwoEVDRA0UsIaWx0z7uxSSSCZoItyumZoTOyi2kPbsVdpiNpIH6YD');
define('SECURE_AUTH_KEY',  'GcGX2SJjo4XCHvZuHj6V57INTcu0yNDi1OSqwu4pNkhZRBDXAWBUkxMqxhR2lEfu');
define('LOGGED_IN_KEY',    'XCqjE1qXptmHQT2jYDoR6eh0uLuWHHMIhjhfB1IqdUw4VKYoYrztBnrqD9qsiNXr');
define('NONCE_KEY',        'm8pfJzLHxWTJdBxVQL12XiK5DnsogXWXerXgecRCAnHNnUYGmu00AEUOHUP95BBn');
define('AUTH_SALT',        'BtCQ0ozWAR9nKjBFciMqc03Rsp4MaFib7NxDxSm5djhTxKJBdfTBnobU906CCav1');
define('SECURE_AUTH_SALT', 'CP2ZtpGWg9IL2oXeE8G9XEoQySlKKcYDMwvWWpVcpk2KzrTUdVOosSsgN48Tf7FP');
define('LOGGED_IN_SALT',   'ypxXbDVc4gK976NpCz8o6nIAHJmBhgXiReJ8eXU61yuXpaQSPLJl88nHaZZwV7RI');
define('NONCE_SALT',       'xzR7lNzyrsrKWftlkR4pNSFgF9Ptq019VyNqTH4hQs0O14BugHjW6UsDJyIdoIZ3');

/**
 * Other customizations.
 *
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
define('WPLANG', 'zh_CN');

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
