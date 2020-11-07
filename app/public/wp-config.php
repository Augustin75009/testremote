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
define('AUTH_KEY',         'iaXfjjgUGoO23qVFqMQOTEWLwHB4scySg9KGNeVLNYaqk082WspxzLuc7lvI8d8mfkBiPeiQaFd4tY2H8eeoHQ==');
define('SECURE_AUTH_KEY',  'eddypPT4bfU8RVhgz6yRBgajLXQ5iV49lveySVyDfR8avgRQzGJzxTkhouZ28ioMwAAjTtGqQ2yk2t5yCKGgBg==');
define('LOGGED_IN_KEY',    'dnltlC9HHmiNAm5vO9kb0XVYV4Je2Gi9ZA32j+tRBsMaWLdt1jMXFApTAf3SLVb9JVSTFdT3GyxeeZHAfUHorg==');
define('NONCE_KEY',        'bBEYcIeX7JFNHcRCqRNRjLF7EqsdNm9VkCWMcTHQngtZFSSK7iE7GogmNWjM60fuBjfXHYZeXJryJ9TMt9OiAA==');
define('AUTH_SALT',        'qFzaKXs/6ucqUrtLc8PtUqVzbumOaal6dnf8rB8Woys7clV8/0QKfHuMXZkba/N2hllZS+dTk2Ccr+IlCTDtEA==');
define('SECURE_AUTH_SALT', 'woAUilHgcXfsm+61dQgBEoIL6ULtwE1J2GwVOtNtzN4Qb2SWSW4lie843uEbgX8OEMrCOtIo2GoA8Jj5y9TiFA==');
define('LOGGED_IN_SALT',   '0QvDfsXkSqCsPylsVlGO142aopVgMCdCImDe3ZyXM54pe5rUx93fe5C+MdKSDWImllo8qje2wA7su7nSPYYggA==');
define('NONCE_SALT',       'aRmXX0CxH/vmSyPhBr4eNVttCsRVHgPd9JmJyFxPcbTz3IJPwl4OyO+ne8ANF9RWvkkzV7zdsnv//xQrYYHkFw==');

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
