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
define( 'DB_NAME', 'enzefvrg_nzpinnacle' );

/** Database username */
define( 'DB_USER', 'enzefvrg_nzpinnacle' );

/** Database password */
define( 'DB_PASSWORD', '[ZOs8Id.d]yw' );

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
define( 'AUTH_KEY',         'KZ5c^(YvDe>27,T{PQe%M9{nKo32)3&7c&vgdAUz;tXWu0u`Ly^b{l} 8?QDwi|K' );
define( 'SECURE_AUTH_KEY',  ';)&LG5pWF :I5d3mSLFwYFtO_%IG NGb6j8-H PsTU O~KWZ?Zzw%YDl8cns5nF*' );
define( 'LOGGED_IN_KEY',    'n-qe:QSSkGaf)j#alk[.4qri;3b/}xzrY:YoV6.}F{q1cQBmh)A%sgj8l^EY;neN' );
define( 'NONCE_KEY',        '-h4n9mFUt%Y.$~}?%!lxjyPXEv l3v.k9#lx~/`UQqhp1O)xmo-QW}KX.jpq?4@8' );
define( 'AUTH_SALT',        'M#lU4D+$k2T!6Te>/ifgP^}NN>-67}R*Y7A31Wb#DMRJ&LPqn$KfRuxe^k9/^o9O' );
define( 'SECURE_AUTH_SALT', 'hnVda.fP#b3)av%dAmH.>?l||KB&j>MdQ_AdT5:?L7Nar(pixC `Udg%+#H;-HM~' );
define( 'LOGGED_IN_SALT',   '7sW8L7S;&@i}Rm,&/r!a0?tHa@SLpt.JxxEIdo!mDcZU2/f1%4*fu$rj1AiB16[o' );
define( 'NONCE_SALT',       '8iO]Al8&8?;VpI=GQ.`vja7+Y*e@6#(i6{}yG(`2p1^9[j|N}Sl,e>Gq^F}l&7Z2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nz_';

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
