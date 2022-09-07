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
define( 'DB_NAME', 'wordpress4' );

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
define( 'AUTH_KEY',         '>Fl0D1u<3:o]+xMaZf5wVD%]2j/HrZ#/zTy@77Xpjxi@YQH0Xy;mk`:y(J9 wQdT' );
define( 'SECURE_AUTH_KEY',  ';<=Swi?RdEqF`)z#j[U:vDzkmPoMh(qFb(c%PqFXC/Hu6^wwNU@X?[t>,+K-dD[)' );
define( 'LOGGED_IN_KEY',    'cyzTbIJu#(Xm3a~)}mn@?_gPC_]O~:L[-Z|VayM[mSfngGbx--T/-d(U`sJE7Qgl' );
define( 'NONCE_KEY',        'Dg:7;`Lcqu~24h40jH:>*WV<W$V5yaT)hN/!j5kFfC}!R;xmh6av#(t@0un<mk6)' );
define( 'AUTH_SALT',        'g+*K?2$`QK7 Z=P&#,d..Wv@_.h+(3:$m~l0=+jt^XD&UkcSmCK}8H;IWq^RwP9Q' );
define( 'SECURE_AUTH_SALT', 'POG/bD5=Vl2!jGH}6<U_(@yS0-k73U/+(-c@}@|3zR-K$LcN;Bz?U0+LzlV}dA?V' );
define( 'LOGGED_IN_SALT',   'q{(TAz:ruN5_A7l[%Ys Vre:nXPeFjk5O2[~%)lQxt:{Leo/d`Cf;U[4%!-u|&R-' );
define( 'NONCE_SALT',       ';f=`}O?,k%M]5:Z]1FJFmXCbe2dqf8kX$=Dpo`.JO%[SmlY}[j,6T2Ap7 hs}T:e' );

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
