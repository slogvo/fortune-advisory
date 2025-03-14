<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-project' );

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
define( 'AUTH_KEY',         'hV4P+#Ia.E+CwUE~M7@<xqo?*0z!d>v7tN.ora<9&AQX+!HP#e2b+&>4cRd`:wYc' );
define( 'SECURE_AUTH_KEY',  'NB<Eq56dwEa&FH4,me]*SpoiMP;.u4QaA%0z&&ebz*VmLzfN0,{P#OU*0dS;A0.>' );
define( 'LOGGED_IN_KEY',    't*CzcyN`6$7&a1S+tHxZR^kr5y#ENUki#Pb/3[mH[$[jR5l0py^kpV4.k0c}hBCh' );
define( 'NONCE_KEY',        'Mv[wcI1m%{1Oe|c4g^9||w}KM!No8d+L*M`~u))hP?O$`(8b6aV-$0lh$G7GL4f7' );
define( 'AUTH_SALT',        '^(cU7;r%WNI~J~y/8i%>4<w~;->@aW4vq@tE/t.Ve_<fPytBF+t{7+s,532hDg@!' );
define( 'SECURE_AUTH_SALT', '<R#xYF9P#2EN$ZWT>MF]A?I2(7h&|x{W=WLc;xC~.^oS69<9 aUaifa{6M>XA:LV' );
define( 'LOGGED_IN_SALT',   'mUJZc$0yi*!;2b1}fg|m4HAUjeF %8qnwCZ5L-tKiQu2.gr}i}:i=Bhjn^n{sS1O' );
define( 'NONCE_SALT',       'N74$`Da6B],i>0`O>c&c:@u}JRa/)a-m04mer][}ytd^Gk.BCl;OB]ykJS3PEDT-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
