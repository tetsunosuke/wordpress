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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'SRWuLYgbSEbwyS2bkUAZTG+jFmCNQ1dYvXhiLqGcXr3STeic8S9mJljPjkGogfHBOzTZxr84vZneH/S5ByPM8Q==');
define('SECURE_AUTH_KEY',  '0Cge61+Eu11uJapZd7B5mGnSJQWOKa1aXnQWWM1H1sw8NnMWdP0prGuOeX+CpVVvV/7/mr864w23iUk0kYBJzg==');
define('LOGGED_IN_KEY',    '6JbvBRnRIpUyJRWLPQmYY0uG03U31cD0JLKXUd2X4cdg5tw1YMjgn5+FNTLHnaacjlkZUbuKxzAKmrqSB/qCSg==');
define('NONCE_KEY',        'Mca7Ariv3H+VM7wyLlhiXkkSOlYxJ/nGQHQgVLbZ25S8dKomNfaaX7j8i8ghjev9PiyLl1BaSa6go2wwGfbB7g==');
define('AUTH_SALT',        '4lFVSTyuVSzL+M0Bs1qr8GGxkot2ujXimLgJSmFZpv/9S1b4FyDNDo869QWY7m6Br8i8yGvuzmd8EeDXH/vCzw==');
define('SECURE_AUTH_SALT', '/AXR1LrlbdIYR+Hym/OlmgZqjlIRGb7rSxvSQajy/gLl8u2uK/DGsrYri7F9GFAPTnlInHTldKCSC250W1PS0Q==');
define('LOGGED_IN_SALT',   'pDIyEum2EHSY9NBqZDGkPCHCGTi2hqC/pv99XV44tn4DhJbRozgiB1YiUiyciR2dVvJ8f9zvldNkX5ZxdXK7+w==');
define('NONCE_SALT',       's2RRgQKnjreXw/PetK2yoEMFFLvUZaHQ1M0mEe05pzQCyncLYN/vJ2Q0bd+49/FvnJF5c1ncyxxfs6ad6tmg8Q==');

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
