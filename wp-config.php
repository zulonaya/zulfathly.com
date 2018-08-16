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
define('DB_NAME', 'Zulo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '04vMKmdSRuQC7QFaxrLJr3CzDbIKAcunlfWJVOpOPvrcDOWZZcKAtPBdSHSOf3Ht');
define('SECURE_AUTH_KEY',  'huTfMDy8pu9ZgwDKFOLk5jVEbUSfwcHovwdUZ0AWxt2rTnURQntONlZjhwaLZq9i');
define('LOGGED_IN_KEY',    'YQqZYz59Viv5haOyUuJAljO0K76aBQWs8wambpegiTYXFHDTyQRCxoLN89BV7Oxr');
define('NONCE_KEY',        'mVy2c305TxXdABD9D8099AP6EVvi0suhAF5FphWn2IILgoCJUOME0OEJuqQclY5i');
define('AUTH_SALT',        'Rj3k26CP6pXJZVpcbmNawmbsci3JwTI1ILN3dTqXLZxQw9731bhBpFi7QqyDk30F');
define('SECURE_AUTH_SALT', 'EaAhqYFuLcvCjciSMhpxeZQwgTAoX0Xfyem4zYEDws36xLtqxcCOTO9DqlQavAIG');
define('LOGGED_IN_SALT',   'JudRpFj3USBRAsgbqQ1dgtOiPIaguec285KIvuBpj0fsigJTwQNjzcbnc9IPQFKm');
define('NONCE_SALT',       'yJ48YTbDlj7pkYQsTaSMNWTBpOu2TascAy2KVzc50qWx591eZTwc8iKCRjsrF648');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
