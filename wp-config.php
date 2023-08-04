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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         't{o|t3c2x.W!8TkjD#0c Oq< /FkG]v@BfhdS9i7.iNZj_dH^[@G1}pN!S9v,wN@' );
define( 'SECURE_AUTH_KEY',  '$/cSyk7nXA&4*Wr-1?!geJC=7 +gRA[7$V@DxGKIEZPo=`vc3rx3vmyI[]gP`54T' );
define( 'LOGGED_IN_KEY',    '5V{,2-]wTY7i .Ayw)rwDz}-n8-}y)3!c4l^pMb:d&%a;mH7M`.&5?>9]x|u|cx4' );
define( 'NONCE_KEY',        '<-v!@Ne}(z7/Tm67Q)~g#;:D2%?or29bv+EC^;U$@|kkQR6G%B8^BH!t(~15|LzN' );
define( 'AUTH_SALT',        '$9_7pRehq.on8,1N@zqB=UQe,>LNZ?fCqw~TNX2e`8C:m+mtTj*0tp/l[6jZmedQ' );
define( 'SECURE_AUTH_SALT', '^CefNYK?})E{S$jay:h0~8.5MAeSBR(d4H;Uwo&RF~pKZN]6+,1dhM{F.iFpjEWz' );
define( 'LOGGED_IN_SALT',   'mqN?EFWf;O7LZDr{RR1D!3_+FeV$}#L=^FPS04QJH(nU}oR=MH,{zM1xX4|TP_S/' );
define( 'NONCE_SALT',       'd<c^&cz39hEvJ$vVZ4<AKFRco_S}XHCx@B1xy$*P {xt9Kt+j:5lU^bmNF@JMtQ%' );

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
