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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'jqNGa4JgiOwD2ims79dzftWM2Xrww69U0K57DWgOJc7RP0PV2fxtTwsPWSi7hvtlUiuxNFx1Hww6Z7VCGKAPPA==');
define('SECURE_AUTH_KEY',  'coowgMk1YkQABKbBScm9CKk3aCMGQwYkjHmXIDYYYaUhxKMRf+kg4hE/Qr+GhZXoE88Wpd+X3ela9eMTclwqFw==');
define('LOGGED_IN_KEY',    'waT7pVAa2kNJ8N0+hJgtS1FOeNIxJrWF8n+c5lG15G7KX4DDmL09eNSLdvQkCfs+IzxWCCoF/x0lvzh20spuXQ==');
define('NONCE_KEY',        '9a1p35rdWmXGrgiwwmxnrvncuIvJTfQC+uCvNHuszSEmxQv/lMJ0bP5bcntz2zW8ON2ahd7sZBzEsD7ZE2xptw==');
define('AUTH_SALT',        'FCqtzw0Oe5q7diFs0ZjNVjhLEbbM7xeApck0NqSTMdKUHwqfUhKCS12kmX77Ct/WQ8HxoSReTQxj6HlsT4IagA==');
define('SECURE_AUTH_SALT', '43bPX2AUTR0ur8Ld0VGjudOzQU9x+xPk0VewY0hh7U4DIi+enli2V0Kr8/MFbRZfGR/OfpDyJe+gNhgaCY5bdQ==');
define('LOGGED_IN_SALT',   'OE4AlHQXEm4p3J6gTf5mkfefGkX3YmOW9BreeUO4F5SZFyCyW7MadftziAOlbuAplpg25POz/3BDmYcPQoJ9bA==');
define('NONCE_SALT',       'oPtc0iFFi/0P6aPmoMSeelOKO2Nbi6gWOPcMncumrTu09GbqeWXGQsWLNcMQQwmcOsZY4jQQwX/pOK5/kA8EDQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
