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
define('AUTH_KEY',         'RCb8mMDNu0qX+5QEl8OMSw6GOLIcginP2gW6kewwxCY1LtaCrFT5OGwXPIUZrfsehCaFxpJP/aNWFVAzpauRTw==');
define('SECURE_AUTH_KEY',  'vc9M3ABL6H7Rxx9r9cwB+CDpFYxPsEfSap5Wo+FPDbKVIIulETKe69WZ4ekaR/pg73fAXDGYpgO5dZzFqtraBQ==');
define('LOGGED_IN_KEY',    'uuG3/OKfZCrgREU+jzohrxdEdj9uQsurWCrvUMiNdktHWn1xIP9+duK0ba8Ok9jIt8cTNfxy3Oiwx0wBzF59NQ==');
define('NONCE_KEY',        'C5Fa2DHrkBk54rk0aYZUIVngQogXXlwM5CoAXzr+TxpC41cSFfXwlt1iXnQUwbyj2lD+qI+qiY1Mif4EmJhNwA==');
define('AUTH_SALT',        'cSv/M5JjjkNAPmgctP6gOZ4WCqMauvfqMYpgMbjVBhJ/81fNHHcuQZsUtZQaKkdAQT1K5FtYO+quE0pCGjYOtA==');
define('SECURE_AUTH_SALT', 'uBUvSDqOtI5wH5VbxVkycJPk34x20ciHvXmgmpgaWJCDkuqODrWVTakXdhJUzQpM9CaLVwTRdPU/bfpHtPSlqA==');
define('LOGGED_IN_SALT',   '19AGJpmV5TTmSLELltawDBnBHOy9uK70Dfmm51ssnJIlqC3tKIjMXf8emfd3PjYFKJKwljjmJgS2yJQ0ik5cwA==');
define('NONCE_SALT',       'vJ/z1igUtPoEk+7KCbpc0YZ9hE+dHybJJT+Ep8mH+tdGBO1QwPOdTNPpilBLzvBss8n55XozzZ6FaEVviSZ0cA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
