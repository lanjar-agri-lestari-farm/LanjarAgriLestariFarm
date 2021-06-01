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
define( 'DB_NAME', 'lanjaragrilestarifarm_db' );

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
define( 'AUTH_KEY',         'pBM1Wc>U8-2UR*_M<Y<;a!yA~k^QwQ5i8q]/m?4CNilV?1  lTK?fB~`<4k8uyj^' );
define( 'SECURE_AUTH_KEY',  '<`63F4$AGLmL*9^;iRJu=zy/tl)>t}*!-D$H6@p{77:;pziv4I#A5:; S)k~M?@[' );
define( 'LOGGED_IN_KEY',    'b4jcy:cXt|.OrYU=F*#D,~w;CqZa`!tp R8xM)+})RtV]7/o@8q$6emo([2PdpE7' );
define( 'NONCE_KEY',        '&jM_DojEA;6?Mw[{YPbruaL]=mA?HwA[p&f?Q_`BUKQ-wwp<N74Ad!`~VRn,c@e:' );
define( 'AUTH_SALT',        '=uM@JF{|M2t2PU4k)mBS-2!vuJ>ZnHLHzX>u;o`p4Ct4U5,{-]]F*gT#DEke*^bK' );
define( 'SECURE_AUTH_SALT', 'x*NLhvv.4l!9LMV+ro4(8xnEyT![`6SY|5AxvBq^KxbTLaKsL8C]Q`QHX=Gf+Vkf' );
define( 'LOGGED_IN_SALT',   'v,8NlY(*{w={;%wx>I$+vzUIHjV9aCt6Cyl6(J;tRtP19(y~r}UcIq{1mb=$&{@@' );
define( 'NONCE_SALT',       ',0ngjQp]oO19,^$h{t!O`xJ}]k1cNj! %y;I}mI:@OFl P]xLQ^lE3_R>Pn)G4b8' );

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
