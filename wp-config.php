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
define( 'DB_NAME', 'Locomotive_db' );

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
define( 'AUTH_KEY',         'DWJ4%b}:~@nS2*aLav`g{XX{q_ 4OEq20e4g$AbMuxr&B5E%k=X[/jK%qTp#8CYU' );
define( 'SECURE_AUTH_KEY',  '%_az|KC7R78|TU:e*:}[5]M>Y np@)8<0(|Pf>%U_+?O^f!<{}#;bH&#E[l=0_u ' );
define( 'LOGGED_IN_KEY',    'p:ybZ_#aacJK^;C:HoVz!<kW,t>=? :@pXA%^JF^tpAQ3~ea82y#~]^49[M;tG(?' );
define( 'NONCE_KEY',        '-AwlR4=bFox2fY3-+3AQrZf-]4L?~QzacgA<*JU %+tsJhy+<l?4|#DEGxJ,uAOX' );
define( 'AUTH_SALT',        'EZvGbJpc~h!V=h~1I[oe!6ZeD=jX(=o],Vr*b,$aG]zk* 32BN!o7rqV*ja)o},u' );
define( 'SECURE_AUTH_SALT', '?;:)(Ca5?c0JR m3sI6%crQ}-,Q>F.9`2%K&JWxz?E]UD#2bV*.nN<LXqw`$ona_' );
define( 'LOGGED_IN_SALT',   'xncFkh%`wI4{EK#/6QokC9YS]S+ !f?I=nJ.S/J%dG&DOM0CgXG@SN$nd`n:!Wm8' );
define( 'NONCE_SALT',       'S3a+Gl`s1/[[*42jDEv&^J_qAeQ9g!-x$[#==|{<<i:Pj|5x @AnII@>d5SabBag' );

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
