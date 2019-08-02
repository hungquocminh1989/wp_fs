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
define( 'DB_NAME', 'wp_fs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'p8bv)z{9w[R&8h{|nV^3|;ad~6=yo-o#m#>P07T<kCl]{AS{VX,L1RokGT&oP~Ex' );
define( 'SECURE_AUTH_KEY',  'DaJq^<NCwlUdk_S}zGXnC^= X%yfee_T{`~xLMd}>p-L%2u7t?+iBtVie$X%G`JV' );
define( 'LOGGED_IN_KEY',    'b)PDZshdi]{XvC*jow!nc)k?3yrsw21|=D!(Cog050AdR1ueA(av43(PP|VpSI46' );
define( 'NONCE_KEY',        '<C:= f9KR_H:S!?5eNtXovYByd)ec!J>z(LbJQ(^iUz+2>A2EvKai^e`|(p-&tI_' );
define( 'AUTH_SALT',        ':z{[oe@P/?.PXSW2.pvp:2i]&4aO+jy>XQ.&f)rP=:`5=fSK!A</W_cg0IUX6HvU' );
define( 'SECURE_AUTH_SALT', 'fF~Yg8|*f1!ecKD%j-&cwOpEch5`jpZN{A:+j+<zMxfjE (Nsh>O}n^OpXe*Bk^y' );
define( 'LOGGED_IN_SALT',   'Sa.g8yY@5Ec55fQO%%Ndsh<%GIgh7rmKz@/j2]_w4h$<pHc[O++ZO1/jJh~^W3]2' );
define( 'NONCE_SALT',       'Pt|G7pKc,jq14Rd)T<=/R3g:z;Q0`xknWWe_-NC{c.|${[C[FZCg.5OBJyRr%@)v' );

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
