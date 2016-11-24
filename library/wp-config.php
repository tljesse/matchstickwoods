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
define('DB_NAME', 'matchsti_wp455');

/** MySQL database username */
define('DB_USER', 'matchsti_wp455');

/** MySQL database password */
define('DB_PASSWORD', 'p.5KS1qo3[');

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
define('AUTH_KEY',         'w8afy0cu0ph3bsb9fe6q60ez1axqyfriibdowlbxz2fnlhbsughxm5tk2t5mc8oi');
define('SECURE_AUTH_KEY',  'sek1vity4zwebizoutzs2bdkww0ahla4zn2cq4izqhyo6gbnnonl3vuqmvmaczt1');
define('LOGGED_IN_KEY',    'ft4zexifqjkvc14d6rvdieipmgcutaxfeptvdjxvw0c7zkz7xsyjs9n8llpebpnq');
define('NONCE_KEY',        '053frvjyxmtcbmtmlnjc4y3f4c9ss5fkmpj93ggkcofjkxetymq2n8htqu3ovsoa');
define('AUTH_SALT',        'elwwxrn9okuwojvpg5t48stzsuwsbsxmfodls18cwaxkmlegajeczeqonxgd8jvw');
define('SECURE_AUTH_SALT', 'jkabqwqu1twqvyfx7wyxjqvjnktaoupghc8ussqgcutnuucpatrcvfedjk5vnql1');
define('LOGGED_IN_SALT',   'ldww7v5ltfibqg5uh9mxofjz0hzwyyzdh4edew7m7xasub9agvr4vecavdcrhyph');
define('NONCE_SALT',       '7bqvmxygbtqupdademc3gxebhvanjk6bumru9jcnyq2cl2j1nddbmyqtswusrc9n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpe7_';

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
