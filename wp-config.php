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
define( 'AUTH_KEY',         'itqYp$uvUQxKu6E< q|JBFXIg-HiWSf1nr]8>L)-cckLUHgR&eO_b$t }nqR(*5G' );
define( 'SECURE_AUTH_KEY',  '68C3Ss8~+|&.EY&#*FIh/9ZbR@jj?XKl!C=Q]VlAq6L+QG@r,<.&=s8!zQc@T>k&' );
define( 'LOGGED_IN_KEY',    'wEK@&hF%6scj%H2,|(^1_`VDAW,Z4GzI=,Wp2g* 5mL+`_dg}T&zz5pP4aGFbOS=' );
define( 'NONCE_KEY',        '}[p`,=JQ?T[OmJq4vR&?yHTS)cX|^@6R+W=7-YYdZ&Vl%Qj2g7-FoCE-?l, 6H6C' );
define( 'AUTH_SALT',        'ukRsKR+E!cTZC#-$T|se/<1g;&|PziuNirKVF`89H(Rr*$YH6iS[O[60~b||2Q`R' );
define( 'SECURE_AUTH_SALT', '2|4(N<gI 7lTAb:=GZ3Ti>#LYrFkr_V4colx[t:LgNx-=mB,l,6WL&FBd?I}1!i-' );
define( 'LOGGED_IN_SALT',   'hILTcp6r`N}(3D4sIw+!:lwaG5~v!Qqt1kqIGbL5#[0Oyi7j|BT,pa_=]~c)2`r8' );
define( 'NONCE_SALT',       'pi1CMvqdCrc} 2vkCEsrc6R-vo,~;4<p_sF%X-lU~.[[Vb@}%`dbt.til.pqjJ]]' );

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
