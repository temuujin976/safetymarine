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
define( 'DB_NAME', 'temka' );

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
define( 'AUTH_KEY',         '%6Ws]3u.Z/fYjge KvWL5UER}t{ZO$feY7TO9s;r2}V8AV~2TrS][swt7!26oW$-' );
define( 'SECURE_AUTH_KEY',  'PxLGCet_<@Y}^]^s0V}t0g<iPvizn-KrzX||t}xZjO-~J3/d-FFnOx5$JS/^Gw]y' );
define( 'LOGGED_IN_KEY',    '%q&[U1/Dv1^`$F_^(FsB8%wg{CEY,z(z@K25H4%C2RmrHTs`xn` BbaeGt$t{vzn' );
define( 'NONCE_KEY',        's4y,FV$Prq88PmINQ`8u>wnC5u:WV>JcrrNEV47p]A&A}rb<E[IBpeE1V [+,1}+' );
define( 'AUTH_SALT',        'QS[chVFRNY;6lpm}CYUtDu[BTVFSw-(I1<A:+:%Js$%$e/1c8Q&mNc*~hoRg@+rd' );
define( 'SECURE_AUTH_SALT', '&*d),igF|*:ts<Dc%gD/ s,g6{$l-x<*SrXxODXY-T v<%Hi4f*1=HhxHbE$*ilA' );
define( 'LOGGED_IN_SALT',   '=WCc+.hR+j_~>[w>C2k^N yK.I;r[7<HuNv^cyOoa2]LH$c=!moF]oVW>]ZzL;0b' );
define( 'NONCE_SALT',       'Dn[ZwW:g169E^6R,G%.u*ds*_tfL=6I7+6]n@<Ln,H3KP`<ie)@vfKZC(`Sa#S+}' );

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
