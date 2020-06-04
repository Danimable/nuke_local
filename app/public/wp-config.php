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
define('AUTH_KEY',         '4ADNqhEtKzWbTZxQ+hoBrzHf0vqsOMEb164u63d8PHFYTCQGBTw5ar7GbIuI6Eb5wv7bRxIMRMk69y2hVYFpfA==');
define('SECURE_AUTH_KEY',  'XItOBUJZTN903c3Ak4hRN5WMJAR3e2IRzFkZ/9CwqJP7/poM88BvdOtVSBxd4Pa4KZj8DUaCmAthqqfM0ltd8w==');
define('LOGGED_IN_KEY',    'aFDTNJ2jBxpt3PSlGP/Z1vSBa5n4MGGo5/OmHkQHbGz8oJ+JuGhWzCH4Yx//ThSuj0Tyi7nlDgKo7xw/cxHdoA==');
define('NONCE_KEY',        'OtSGbbiOj0DJ9pLO3jz81SaQz0RDm+PPkyRMlEi/PRPeQZNEHiRRY2+pFbUSSvFtbjLze+tRiM2W/wqA9V6Yig==');
define('AUTH_SALT',        'hPAff9GygPjlP6s5Yt4Q27aNZWQUXgaMOtvcsPUUWobhPGIKS0Ra1e4qmUtnXCQMJjuvf+eMZm7Pge/RTo5VVw==');
define('SECURE_AUTH_SALT', 'kluUuQLiTAuzL/2qWRmTv4MKN9KG9tJdCoSYiauFaV0eSyZNEU0j1gM1v6eBFVwFbW/j2S5YigYyB9EWA0OvYg==');
define('LOGGED_IN_SALT',   'irCkfdOYdpmeKOBQn3/yRcQQZ426/RynxS4iAsTGOU3GYpei9TOIL7piu8UfEkkY3zmsqMxnoN1Fmp5B+u/0+g==');
define('NONCE_SALT',       'U/W6N/8qLHFjd/wdL1p4Cuqdb3xNgFABiL2qksVOwcVilgasUAXZS0XAJHAQkDtTfRKAUoke471WIHqWMt9DfQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
