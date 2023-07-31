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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\OSPanel\domains\childhood\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'childhood' );

/** Database username */
define( 'DB_USER', 'childhood_admin' );

/** Database password */
define( 'DB_PASSWORD', 'M/DKddGOag(NPcoX' );

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
define( 'AUTH_KEY',         'K-|yABo:)}_{&r@NHPS54FK5A5g]2P;q[Mq@69tT1:^E}w<*=r&87,@qYK_?!qZW' );
define( 'SECURE_AUTH_KEY',  'w6>zP @.sR~XH`PY[.dh]#;ML,pV}y7n^=Z1J8-:N6H8ykE:64;KhyOEbE3pbr7F' );
define( 'LOGGED_IN_KEY',    'l/<_1Hp*e dv?*`Vmf`jy3bZOO#~SE#NQje~G%?n)izdRX.)U:`=ba+7rsz_zC7(' );
define( 'NONCE_KEY',        '[)(p@FrkKV20lef:`j6]Q3t!L/[7sT=/f:WFXh?+0l$H9U_<<z^0 XO7Vn+ +#cu' );
define( 'AUTH_SALT',        'PW8*w9$}}U};h|JCCr9P9SDAf0hh&4yrjnIP|Pl>NYJB?3[E!5*JURP0q*Aa/yiJ' );
define( 'SECURE_AUTH_SALT', 'Zy{Xe^:<LO{9_+|nO<^:B-1UP!SSq/aNW1/SX]%,g~`e7.p6qh}Ww5vu.}TR0]kw' );
define( 'LOGGED_IN_SALT',   '8e6D=YIAa~2|$.ld{6Z:%Hn-]^aePZ:&yN&,lH)]I/af(;UaRmV[W9$n14j|uOB~' );
define( 'NONCE_SALT',       '?1OAgW*fDOy) ^f;qA3^CPdfnvrwqFbD~(q 0,VFz&kj>&@I]Lc(i]gSae$A$]nT' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
