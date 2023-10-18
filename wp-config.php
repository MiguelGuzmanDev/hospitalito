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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fundac55_wp540' );

/** Database username */
define( 'DB_USER', 'fundac55_wp540' );

/** Database password */
define( 'DB_PASSWORD', 'Sp]]Ej534Q' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'pjrp6p0fvvkbcoyhvwtwdotlkryr6w5hwphiux4u33arpfrrg5urvuxgwxjg3ce9' );
define( 'SECURE_AUTH_KEY',  'lodoug7aokacfqrglas4plgve8g2cqpb6xyufzfe0a5jrdnvnmmkz5cvgyvrm3uy' );
define( 'LOGGED_IN_KEY',    'lwni4cultwhsadnhlcdyhv0scjdkt7eohpgr7dhnhzauazp8q5cerel3zvfwf9sx' );
define( 'NONCE_KEY',        'e8ychtwja1j2xoeivofjmjpblyqapz0dk4g7zrhhugmcpzlwwle4x9mdj77ls2mt' );
define( 'AUTH_SALT',        'xnqmph1om9okd09oae5du5mnnoti0r8arh48tsdsxx48lvotpcltngvyrgk3boki' );
define( 'SECURE_AUTH_SALT', 'd2755wkxif3sn6fua2ctjoed6xtcewrvvhqfubmlk2uafyoybnr5cc5luy4qvmxj' );
define( 'LOGGED_IN_SALT',   'tbdksgmwz392ep8nxmianlahpdrdplrzroegmuzmmi855dwefzrujmhbjeijtunc' );
define( 'NONCE_SALT',       'ip14engx3sfpcbkwh7hmsnvxj6v8xz7ruckn5tr33uhk1jrzybkuquwhv9wl9fin' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpyc_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
