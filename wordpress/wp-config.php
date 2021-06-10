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
define( 'DB_NAME', 'c5958webshop' );

/** MySQL database username */
define( 'DB_USER', 'c5958sander' );

/** MySQL database password */
define( 'DB_PASSWORD', '1qazxsw2' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '$3aJQSe,B1SM!*FJ^bGrN3Thb4TA!Rp>SpwY2MN,Ipd+:jhYzP04e[.nT0#$3J[e' );
define( 'SECURE_AUTH_KEY',  '*}y5iNMPGo7,={s?_a!ZUPFWzrgV`c_Vq)oM)V+9{7|;>,e!K}MnI^8Bb;rW)bE ' );
define( 'LOGGED_IN_KEY',    'YT2q{xH3Pc0W;F#[tU!TsC|19iyU/4B_`b4{fV}7)_N&p 1gzg ^W[`GK :*?}E5' );
define( 'NONCE_KEY',        'x1!{uIS5{r7@8vYkGxN&>FLAx[q^MZ#CZD.3-5-/TYbAWb?}#j6z,o;uIA,>~y{N' );
define( 'AUTH_SALT',        'VoFqUg-RIfa]^s}u8dv<9uQN/$r;1T4G/]6 Pe[;pNng}wK$TG6uh+8]1JlggYB_' );
define( 'SECURE_AUTH_SALT', 'U}UCGc %]b.5;I65PI>kP3(!4D55og4`nf3Xq-)V24pkE|?(F;jL$E}KC#t*5F!;' );
define( 'LOGGED_IN_SALT',   ':6UFzNLME-nRBqL_MkFS*}q)c,-x$fv2vqr@e.tl~Z#xECUnnlLF#*XWn;KKT H3' );
define( 'NONCE_SALT',       'kWsd+Kld=qlwI4aBGEkCr64#pL#PpA-%#wC$Y08]k3)&0fg*wM$aREW2t0da* V-' );

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
