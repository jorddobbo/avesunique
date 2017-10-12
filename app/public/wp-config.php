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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ThUUAN5jDUtOWShvxupxati86OdbjLyF42XoS77Sh4BLPBhJd3oFsqQmC7V2kdM3MvzxcwOCk4+BsE3601oTRg==');
define('SECURE_AUTH_KEY',  'iGGV3/c1ncFQUo0FgLBrNhLZKEOPnueT+eFGbkkpF83l2qY3/9y5npJbWTAGJncs6xHJ3olfQUzvYzyuxjR+MQ==');
define('LOGGED_IN_KEY',    'GkFCHtpsACrnUb80d6XTMiDC18O1m1t5PtxI6VBRXSmYwAswf+vemyl65GcVQNVai0Y7Zt2zyiDfkgHco6Q83A==');
define('NONCE_KEY',        'LhkUcV7WXxvBX1F0a0PC61PIiQ09fYUgFlG4SgqheZWj9hIOj7XDDYhDe+Klm1pHRN/kBMlQ00d5Jz/Cby2aag==');
define('AUTH_SALT',        '49jur6o70xHzT5zO9zSimtrYu8tpFgrNqI2UiZWXSkubeyoCwvPuuyajDW3P696Ab/DGfCkh1Kk4dUdDhxpfAQ==');
define('SECURE_AUTH_SALT', 'c98EkZYawozu9UZ5xjHOinmwrelDE8v0BwH/q8AwZq7Jz8FyIaFmPSAAXqUIz708UxIgK2AN54CkRA5BYzKbsw==');
define('LOGGED_IN_SALT',   'fUoxpcMHh2ZhOW1sVtvPmSWu4BaaL7yBjSrFgFHQdvZkGvlHJIp2C5h1atOw8U6Oz9CCJmPpk5a2R4Sj91vndg==');
define('NONCE_SALT',       '+lrsvo2vucf8eKTRlyDf7RqdAQFMFmxTpDeP0AVhyFbDP+d/uDr13WidfezGidKhLagGbBD7oJfjBTEpNclmXg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define( 'WP_DEBUG', true );



/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
