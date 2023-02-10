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
define( 'DB_NAME', 'vraitrai_wp67' );

/** Database username */
define( 'DB_USER', 'vraitrai_wp67' );

/** Database password */
define( 'DB_PASSWORD', 'vjS@6k-p23' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'm32ozaosxm3p4tj6izzxv3uos9okilkgrylvfidmwuqdybt92m3tyztknvnxginx' );
define( 'SECURE_AUTH_KEY',  'g91w4qhzwzrayzr9icjaecdhp7kl9q0rh5mgykvrdrndc393wtewuxud40j2sihv' );
define( 'LOGGED_IN_KEY',    'hqhm3x0zlohivgtulucqnxbb02stm58j9gqogkcprzjf7eusgofkzzkrokwtf8et' );
define( 'NONCE_KEY',        'rwnp1m3xxxgdfsr9o2msmdfnloxja1o3vsjxehajzjem4opb5fbthe5mei8euhxc' );
define( 'AUTH_SALT',        'dvlh3curaqoplvqa1oqyfisfvqklrik3zcykvsgu59bjadp5slsfqlbxi7srjj2r' );
define( 'SECURE_AUTH_SALT', 'cdi9vdwadlfhybg5qxoudsn6in5vi9rsqeynef8ftcdoxzjybfw5dy5lhse8me2s' );
define( 'LOGGED_IN_SALT',   'o9vldhkpd8ydqyq4dumknmb1h9yxkf5olxdxwxbxit2lgvsaaalxoomjjzma6jbj' );
define( 'NONCE_SALT',       'ser3c5fik0mrjla8ek49llwykgth69qyolzeiureu5b7lpnqjrviwdihxxtmnqah' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpgn_';

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
