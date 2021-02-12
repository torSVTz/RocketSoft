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
define( 'DB_NAME', 'mydatabase' );

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
define( 'AUTH_KEY',         'k+xYt!t3z*uW3!^al(2Z =<RmvD-E&Bum?,Lgnr^D~;6]55*3-.#_{f9PEn=t2tH' );
define( 'SECURE_AUTH_KEY',  'HfKx,gPKSs!E)O}Vz}u@6&=!%h;JC_<t,:s:zO2hpZLNkiQ}7vY(KKsDCYUcCx%#' );
define( 'LOGGED_IN_KEY',    'ngYtQg25h;}h=R4.rO<o[-tc;`o8zN22erM;z( i?Zxxwa-P@Vh@wWQZ$+mf=]j_' );
define( 'NONCE_KEY',        ':^xu}n;g7hI.6q)a:%FWM9D,TekuYk]]0+*]HHsN+k?8(v54$j kQ-3 R|dtWk!@' );
define( 'AUTH_SALT',        'ghgR.4z;Y`+9xKLbEp5UF*S6:Fq_Jhe_oYRdR3G9-]#_d1:P7)V[54)kgjwH`Pgb' );
define( 'SECURE_AUTH_SALT', '#ZjVisQMHgq&e99j;bS1RUFH3_&D/HH9Y*hQoTu,Htu->J~O&^#}XYd`29;G{`Hv' );
define( 'LOGGED_IN_SALT',   'V;@ `dlai;!.JD#rE$v7w<czNx./hG+Gr??{7r_KtDXM1,_n#oeroBFTwG]w^OT3' );
define( 'NONCE_SALT',       '+_!Ug_/aXnk]B2W(524/7RBox02_6,G8?.(j4@1AkkOK i7&=bh65@qp(/$A/%vr' );

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
