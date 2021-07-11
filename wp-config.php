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
define( 'DB_NAME', 'upscale' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Vitruvian#1' );

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
define( 'AUTH_KEY',         ';?K@% cLBVNQx<->4Z>lnlXI)@.QyljC)VBrL]Wxf.~X[{%~F>2-#ps9:B~dyaF ' );
define( 'SECURE_AUTH_KEY',  ';O^-fmP $<^ieC&JpC2&V?YPIR([n%yL6&kWB`/nl{HP-WZ2m[7egMpfz%pc,Jny' );
define( 'LOGGED_IN_KEY',    'H(@g6aWBuW*Vri(hA8[$8*2726^a] w>VtGA5lE[*tVg[QY9vY^vIew=h,71yfIb' );
define( 'NONCE_KEY',        'sUPUwVTr3k&35-i6!~=N2Kof#2 g<a|6GSILZG+vzs5u)Zg:sv3.U?GJuXM!@Q3T' );
define( 'AUTH_SALT',        'Vg|<Nu*[(0fb[?leO&WOh+pkaf6 eLYguXWsQikr@K7FtG|P84SB,*$q@DS.ANX3' );
define( 'SECURE_AUTH_SALT', '*8~J*MVd)Q:Icf|L~=:bukMvp(%g{MY0nZ41JYu&SkF,M6T;kE/6P/c!w0R.8%T4' );
define( 'LOGGED_IN_SALT',   'A,k6FYE,SU3eMf$9yYdFq11S5>*v[NVO-r6wgxy#/w0~a[4,*w|eYi22NyDY(5P+' );
define( 'NONCE_SALT',       'hawy|0dQyZe*H;|b-+/^Y;5-^O~FGFRS2Bq<7+gifE.c`(|$Pk;Tk=bfw8_0;|_0' );

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

