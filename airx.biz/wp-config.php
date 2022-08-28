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
define( 'DB_NAME', 'i4816808_wp1' );
/** Database username */
define( 'DB_USER', 'i4816808_wp1' );
/** Database password */
define( 'DB_PASSWORD', 'W.zuPNynnIoDCj7i6BF14' );
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
define('AUTH_KEY',         'U3KAQhmj0ox2mAZ9fTCv8uJwpTCjUXlifAUsJXWJkkkHM9tJKpBkJMeCT1q1I3s0');
define('SECURE_AUTH_KEY',  'YtefLCtqfI1C7LO6ieQH7T7vprjpfsKq5AORCjX6sZED50YKCgi7mCeutmWFrlrA');
define('LOGGED_IN_KEY',    'r3BXCHp3l0WuETI41hGGTrqlY4aBFLNOmVYXEBbLIhWwcB9kWqLZkENk9KQybsnj');
define('NONCE_KEY',        'irQZt6C0QZIx2X6gilOWsbnVTaY5HmlIcBGFR6oN53M2Aiiybj3AXCL7dgHZj7NZ');
define('AUTH_SALT',        'kOYKq8Jq34vy82XjSOGxcS9RRBixpbFAWFNBuw8FnNqRi4rqviiaHStuzn3S7O3t');
define('SECURE_AUTH_SALT', '6Gfl7bbpL0qcqULdw63oJs5sscXN1Hn4FHHraPQNcoh5P2T8yP7qga1WABzEzNP8');
define('LOGGED_IN_SALT',   'iiUbCNHEkobNPjkfT8qWm2CxeP8CyZzU8P35tOtWWVEDqeR6E9TW7Pcb690rplHW');
define('NONCE_SALT',       'wm3WBYtcqbkTxVSyptkOyJZ8v91V8rNTtQ18v3sVvJR0H0dj5io96tAVeEm4quE4');
/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');
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