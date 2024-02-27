<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'BW4' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'RU6PHqUrYsVKv91pGMtD6oCm8mnBKgZaLwpp1mGXkfKpv1mn4bUA6ZvOcyBFiOSR' );
define( 'SECURE_AUTH_KEY',  'ELEM7iX6EetCQqT7hH7ZN2hqbXWfbvepBZYqnqUD7IgDwDJLBbfOy8mmLsTdsnqT' );
define( 'LOGGED_IN_KEY',    'tryNUPRXnFq7WVZpj1gIEwwlpGgu6Y9nRWJW9rjrRyirX2Yg54evWCSgzNOxjFnx' );
define( 'NONCE_KEY',        'F6xEu8RmKY5Jh4UcLc6TgvQxD4YFqR345IWFEJ4GFGz7nBJdN71TgsGpkj0moCXJ' );
define( 'AUTH_SALT',        'b3Xd5SiRDQEjkn0eJtqLle3ixMuDiMCYplby7pI9tn5tZOfmTEg3HWm7xaH5mOpd' );
define( 'SECURE_AUTH_SALT', 'gUw4PhV9vxjCeDBvN4Ih4HQsrY43lleXbI6JGZQLlvW96NxESucJyWrbaNo1F2NZ' );
define( 'LOGGED_IN_SALT',   'vypiVJGKQ03facyET2wGTxPbZwnN4aoszR9W2ZrEU3f6ltWltH1tbHv2RGvye258' );
define( 'NONCE_SALT',       'Io9ayQB64tY98lmj2h0bgnuXAm16q1JXELqI0vSm2TdS8WQCduMFcXrx3y0vbw7J' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
