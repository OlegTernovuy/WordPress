<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learnWordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'm5QA<(JD[^Mv&:HSfDn#jWPZpDT@bAnK:;<=s!XhsoZ.7$]9xwq&EUhv=PnH7f&N' );
define( 'SECURE_AUTH_KEY',  'mZ!w|[CVoezD<]t{lZw >noq0W@to0E-D6`h<~1eG(3>,9IvSjQa;To,^@qV8|od' );
define( 'LOGGED_IN_KEY',    '7y+8.cGbN}N5)VeQ}aHc9Hhp3d4Rr,VI> y:Tr@5(0=4.ra>j2ti`tTpw(:`,4e+' );
define( 'NONCE_KEY',        '!>YzWZ[!*@&D@|`~cY(`-]RQI~ut#QEl#P5o3Qv|7(LRM&i_jR;vrAXzB_At0+Z2' );
define( 'AUTH_SALT',        '~5+q-Y90XDkL)HG4?W]Q+F]Fy$i_0@zh7%+rJEe27WR9pJ}b)Mi9F>CB^%j6QQk*' );
define( 'SECURE_AUTH_SALT', '<b/te+u#Lu(m@x9d$1A L))?YkDW~qVM9=FG]HTLzB*G@gZJQrwqv,>xT12mE=V;' );
define( 'LOGGED_IN_SALT',   'l:[`OplY72!]*=B[$Q#IcOk=kz?wwg6glXW3F[V/G[m3?`cGE3$/2)k>$Jl$/,>e' );
define( 'NONCE_SALT',       ';ZVLLny:gqH_[vkZ[bV]#$rHF,H;z[MnFMLYJJpfow8S2G^`jV]v+MgQs}f!L[*w' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
