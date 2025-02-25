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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Kancaroo_blog' );

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
define( 'AUTH_KEY',         'kgVBJ#w))n](`E[m=+/aig:*ynLm($!KfJcTleBJY]B% @9w?]jA3IX8lz4Se/Vf' );
define( 'SECURE_AUTH_KEY',  'Y$poQX73VEZ;nZ$=pRe5?~FcIi;SqL!0jXp4]g#>`[O^s;J59ahP$(Up+wjH^utK' );
define( 'LOGGED_IN_KEY',    'oS}Wrqote5bxkr#bVmTs;2PtoANvUycljn4RJc!x]43kTu`CoTx*E!*|;4>h~P[$' );
define( 'NONCE_KEY',        'eaw<Sit4e6c2E,iF>vk.[=&^vp(=EED<5%KL[$<x#0SaXZ(C@6rsJHa@O=CZTE(3' );
define( 'AUTH_SALT',        'vQOyL!@H.3zLQBVLE-l$R1Wf mkX@.~ ^mH:X6r-_CV#-#y;b21:.W03I8@-haYs' );
define( 'SECURE_AUTH_SALT', '|1x=pzJw6efMg|hd>})frhuV96VgR+(%o5(1%;u9v|NRZY+V*!<3UoR`w<81q62}' );
define( 'LOGGED_IN_SALT',   '(X7dCwXM4M )X;N@awsv}JY~#rIFJI=k>PPr{Wz#3c(oG:Q43I.C;Emop)4cs/on' );
define( 'NONCE_SALT',       'KT=gSqKD8aPCP@~QKH78Jyk{gkBrjgFd)34N/x{9DT;-?k6@Y)A-[-Z[RNR@m^,A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ka_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
