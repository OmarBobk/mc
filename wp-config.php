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
define( 'DB_NAME', 'mc_wordpress_database' );

/** MySQL database username */
define( 'DB_USER', 'root_testing' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456789' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}%$nV?,gz}8K3;`ptdX_(:f8MXNT#$G]~ur@KQsoV{ky^[xu+=;y{^9Nt8-L{nx&' );
define( 'SECURE_AUTH_KEY',  'cakFNt_0}M1p.>5T0r[nhU6iOiY:]=&^w7)NGgVQ}C~HMDDY$x&EZ=a^vQFFKkjk' );
define( 'LOGGED_IN_KEY',    'O+D]yjCa{aNP0BTZ7=;5X0MES6a{-;JOp$4eKD:^PgP%[;^znGc5^FgJ_-q0TEx%' );
define( 'NONCE_KEY',        'zn?Fao.+N_^B#2|BC{{ya|lF=},dNlkKoBN>R~%X]O&`&-y[,D/b^Sagn#%X@7V(' );
define( 'AUTH_SALT',        'B=oh_0sMHA@-TCDVVq88K2Z`o_KIH:@/32YKcoc^`sj#`h[9:L;QNhDxiOgChD_-' );
define( 'SECURE_AUTH_SALT', '+}oJy `@,>T/]kq0E!c#oZq>_!{y9^VR$WqYQb%S580R1T]-t#FM&oY9sC_g,88G' );
define( 'LOGGED_IN_SALT',   '1Om.s(hb4sm`5roDL9LD$bQY;HK#g[e>$:S[4A2|37jTX0Da<pk;?wx3[_2YL>;B' );
define( 'NONCE_SALT',       '_Yms<U BhwfvS>t5`g^u$uy5]kAO>{*JL+~y=pWa>3*?PWB;+,7&w%#3o7n|wh~|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
