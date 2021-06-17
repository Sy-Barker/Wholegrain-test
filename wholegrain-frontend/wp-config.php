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
define( 'DB_NAME', 'wholegrain-db' );

/** MySQL database username */
define( 'DB_USER', 'wholegrain-digital-admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '3TylSIuftFjzhNNH' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{RW+SQT6lEu5F )cB29SWyK+Ahs]U-eJd!!3bT^C[HPw;WvO{+zj4)IQFpy00qa#');
define('SECURE_AUTH_KEY',  '? 8-#&7--W)!2HG;bE[T*lF)~LQCJaRcc6mN wWWdkS}g)x!l_a9Ik+,W~m~}(Rw');
define('LOGGED_IN_KEY',    'uPBe}SJ|J<1KvL3HnO-9H5jL[U$l#XN @WPrXq{qw7vXM}iT=>8u7saK%[-B4Hz+');
define('NONCE_KEY',        '#yIVN<&#kJC&2GQ-TrDYVqC#!UlVAfSe7xObkN2=`x*Q0-yWY~cKLrwm48^Iyl{v');
define('AUTH_SALT',        'fx^9V|NNX0glEJ-h;?-W1maJJT}^3l~-(7.FErM>f+|9*FP~5S~Q@)It>t2s k7u');
define('SECURE_AUTH_SALT', 'y;=sP#1Ih6vFnkUutcT)hY/.2GwA}.-IC5U)1{YHLs7?uo*Ov1Bx|4f-kgOx7vm%');
define('LOGGED_IN_SALT',   '[`tOHqaI[B%im!)Ff{BVH|pA5/;>7.NcMi@?vsV;L0fX;Pr$I83mfa)_hyug)|1r');
define('NONCE_SALT',       '<mRkR3!z|&m$+W#J`3R;;OG^Vl[NV_d4IDtRT0%nvF,wM$m@NoG|NPz,-Fy}-G(|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wholegraindb_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
