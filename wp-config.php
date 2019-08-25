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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Aa@000000' );

/** MySQL hostname */
define( 'DB_HOST', '134.175.50.59:33059' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WPLANG', 'zh_CN');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l15Tssl{k8t*bb_[9rwxj$sRW;jy$lSR,tnvjW/!%uwvk$;QP57Us@naVd(%duDS' );
define( 'SECURE_AUTH_KEY',  '=p_Bbnu(%EwliLGogG{!T@a+2b`.Ag=.M@YCcdNu xegKhA7Mur e;zVfFQ5czM9' );
define( 'LOGGED_IN_KEY',    '*Zv;sdH[dJ$~4:V5G3Ou^f</22~YuKbxfaJ#$3w=o-hB/m7wYTQxO[oE^am{a)2S' );
define( 'NONCE_KEY',        'H@@<m/is#J/Rf`aD=Ptpcx]]]]KS7gs7HUMxQ<`Buo^&Dxu]Ct]|nB:X=WUqd=3!' );
define( 'AUTH_SALT',        'h@$][X6A439D_z|mg+,}B.,taj#At|<Jr._[G,f#`x20&Qa~IU;1Ur|vC3yhWlAO' );
define( 'SECURE_AUTH_SALT', 'uQK.kuhqvIYmW0[<F0JR0GEd|#L/>*B<o:Q|qoW]+C zZ@81ZO@iP>UstDn)SMF+' );
define( 'LOGGED_IN_SALT',   'UQ:MbK)M,*uM=`D(%-2)4Y_/1iuTgPbYKbv|xph/*zTFUScK>[a,1:3i?%dE%oVq' );
define( 'NONCE_SALT',       '$Hrf7Eb>XDnT@F9n0Fbn!pXQ%{,!;+(sPJo41/F1o8ct@IFZ;YTIca#?<:xI+o})' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
