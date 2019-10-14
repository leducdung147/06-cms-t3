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
define( 'DB_NAME', 'wordp1ress' );

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
define( 'AUTH_KEY',         'n8EPVi2;4|.u=m;oj4JOi6CbQfTlip=i/xghMRhpCs(P0Crq8clAc;?Xr,)Y$V^@' );
define( 'SECURE_AUTH_KEY',  'c1(]&>q^(jB!2/}Evn43.t;2_hkX%U2vbT5V*Qz$^&R^r_N~riQuM8LS$RG#)!9i' );
define( 'LOGGED_IN_KEY',    '$n#ac]aU>+L8Zzm&Xv{Ba)$>f+)Z3tvMNz%(!Ha{>__]=GpH0k.Q[t_d>#v%ROCF' );
define( 'NONCE_KEY',        '.MK9H7{F<pygW&=onp;fU FAftak7K+Gf&>[*AQ0[8NZl zoKn%$W7Nca~<GGxLU' );
define( 'AUTH_SALT',        'RAs^Brn6-,uHmgfNh[T|*Tj6ITJ;Y?j$!&.{fQM)4^BVmZHgr^6|9.&;<D+K`@l~' );
define( 'SECURE_AUTH_SALT', 'KX}$>ni:id eED3=Q2nCmk!|@G%`7p/$&DNlneNVTAiG*/gcuEx5)S5c|vOVOt9Q' );
define( 'LOGGED_IN_SALT',   'E>Jjgds>T<p_CX+7,|?l6*-}1Hf C&GwLGbdO2|=|_<a{2u~C>)jCCaq7,@:y1R~' );
define( 'NONCE_SALT',       'Qk>kK)lq+O,]}3Pdc*(qH./1Bgv&ZOLF@Y]mQRLTrj5KiXlq%edKq1^,H+ybBYst' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
