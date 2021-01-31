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
define( 'DB_NAME', 'xxx' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'Kxx*Zy.iqbH3L zcv%++*_vf,F6z[T`SW?Y?;l<3S qX(>,9,-1V>n%C3G)pPh>+' );
define( 'SECURE_AUTH_KEY',  'u{?iF3&og/`yY=E1%zlLZ*aUWQ|7jV38$ER~sk1qRTNR@uW&eMKqS YaXPUn?wCm' );
define( 'LOGGED_IN_KEY',    '<5OsAh?2<JL:chRg#jFp] MG1c-y>+{622#=afq?ecpt q;DS&,KH /Yk#+IVv< ' );
define( 'NONCE_KEY',        'rw!IV^)$20`y77kNfbTw|ob4IU{%kQ,OV7A*E=L~bOcE0QBAxm< )HCikV|a1Leb' );
define( 'AUTH_SALT',        'j*~>Vhf,>X;~6*Kc6T+aF|);KzNoN7+jgN:8,rE?6|CX4/jnA?XXX(kzdQBlaqiN' );
define( 'SECURE_AUTH_SALT', 'u ZENr)Z*Qx kdc[!uW0z*q+cz.+jgfnO,S^~>@X}?ziAo{A[h[@HtjMT;pU3`[!' );
define( 'LOGGED_IN_SALT',   'h`k2)B a9nE<TF006-d0V|4(L2FS?=kWN_n* S9M/5.`p[E{D*h8YB`T[)-klbRs' );
define( 'NONCE_SALT',       'KR@y^N$[iqoK_u!?^E!eoc=>{99d/oyr9({47H3Fb?Y>MiMYo%0iXD7I&Vf5Xlk6' );

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
