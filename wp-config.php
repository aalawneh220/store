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
define( 'DB_NAME', 'store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '#=Agw>F{yuM?y}I@6y+%<:a8*vaAWCzVzQn[p`es649DTAJl^*FopY4eo1cPb<sh' );
define( 'SECURE_AUTH_KEY',  'R~;P:Sty**,n.HI*EC*!v{<tMwfR F2QZBU>`)@*O*Ui+PN(s4l~( QG|[A+tUB{' );
define( 'LOGGED_IN_KEY',    '!};,-@/YYztbzwe.tb) HdxWcv:]ZQk/L~i%5X9I?/z?#M3;Cad}H]Ql9~ltiITl' );
define( 'NONCE_KEY',        'BZ<+S|]=;P.Fyuhw*F7kG;OglBLhR:xkl~,|6DK:[#Y}z8&2 <[UJXAZ_*cO4(.z' );
define( 'AUTH_SALT',        'gkWD9w%!tY8st,?jsBRmOAA|Cs`6~N7M`G<H>@L9oC^JK=&y3Z9-{,Ew7CDws[9R' );
define( 'SECURE_AUTH_SALT', 'B_`&oj~N8-QG0Zu2FN5fE!It>dqm?-IN1sIyZC-lC_/Xdg2B,S8:qzE8W05)qio@' );
define( 'LOGGED_IN_SALT',   'G!C0bOLzC-7Rg5$_j+x7OM%M5@CA#Kz{%g=YFq`1zpl NHX0_[%%O;Ym0//uq[XZ' );
define( 'NONCE_SALT',       'T_SY>=/5^W*t:2iVBhgz2)2uh0^)g<h|[u&I?qwiSnE~`NurVh~0t.g s]4O#A,^' );

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
