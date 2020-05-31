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
define( 'DB_NAME', 'infernomart_db' );

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
define( 'AUTH_KEY',         ',!Kgt=l>}I? XTK]:Lj8tYP7G0UGwZ/Ykil$.Jz<W*B:[Ew^jd7*Rd&t,=U>Q5l!' );
define( 'SECURE_AUTH_KEY',  'ibb*QBG{[U6+=jLCc7|(r=yaz1DJ=.V%_tDz6!7`&7t:!rjuoZIsc1KMKwnFUTG]' );
define( 'LOGGED_IN_KEY',    '?.;tvk!eGE2<bH8i#ri`s&*R }nTV?G$s[U7s{~g4Eg$whDCG5t/:>Fo4G7IS*)R' );
define( 'NONCE_KEY',        'G9[yb5P#p=?VFj*=APUif6R9P+0@]0^&H1gEE*WeZ5wj(gjB3fM:`D-iSp2m<gu7' );
define( 'AUTH_SALT',        'LE`X`cy&3W2=.6*3+5Dg#p&lUP+y^%m,$hK.&>?u9)tfv<|4 1+?=~kHnvf$EEFx' );
define( 'SECURE_AUTH_SALT', '+oIG(ch-HU-x0q@{p}Pmo>;yeI}ARrUJod7AtG.ea=oS1]J1ugXac@<6D]Vhelf}' );
define( 'LOGGED_IN_SALT',   '[QUZmR>UucMEU!$xna`Q9,;2_j,8p>F*!og.&xuY5{+#AF)))t%}]+0`~1A(uhnt' );
define( 'NONCE_SALT',       '0::r~+s&X?:>`Is7c@AP:TfCHoJ]ypfGRB^zkl}rjKV(rWEM=*8Q%D)NM-hG@:*u' );

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
