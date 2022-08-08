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

define( 'DB_NAME', "erwise39_homesalesianos" );


/** MySQL database username */

define( 'DB_USER', "erwise39_rooter" );

/** MySQL database password */

define( 'DB_PASSWORD', "xM>%0&wJshg+1X]4}+*2|9)Q.|:W?SjnfgS<M%G6Nms&!mk3ZSXZ]Gp*GnD>h" );


/** MySQL hostname */

define( 'DB_HOST', "50.116.86.60:3306" );

define( 'DB_CHARSET', 'utf8' );


/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );


if ( !defined('WP_CLI') ) {

    define( 'WP_SITEURL', 'http://localhost/Salesianos/Portal/Home' );

    define( 'WP_HOME', 'http://localhost/Salesianos/Portal/Home' );

}




/**#@+

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define( 'AUTH_KEY',         'JP5bGOxAbWEWElvKyLcN6Wa3bV8dBCvzrRV8tD1bMhzgXP2nEMnliXtVfn4vF4UU' );

define( 'SECURE_AUTH_KEY',  '2X7gt35BIeumj88qmbF69yfOVIa9i8qqT6KoaJkNAuqDDHpGcn6amTk9KcgGObEZ' );

define( 'LOGGED_IN_KEY',    '1NHCgNbwHWoOgJoQExBEJqr1Z8pgtAF2dtwuUrHbm74i0U3NmukeicjOMHhY76wM' );

define( 'NONCE_KEY',        'cqHuR5cV5f4rBRjE7JpPlpKcdu8sOtzHqfJdpJrraelXAtNJ6x6DC37XxeCMb37Y' );

define( 'AUTH_SALT',        'tJnufETJxSuguqGGsKkJf0f8M9oN4LOOtZlYITyVX5FLQziVGiaYLChPNCdbErsq' );

define( 'SECURE_AUTH_SALT', 'HcIqeAJlXQxuBMP7mlGh110abESyQRod6fKdC8tiLytZHUWZlcAQ1PLkNzbMq9qf' );

define( 'LOGGED_IN_SALT',   'OUCjnEcQSbAohgw1SlxaRlxbgYdwkDFVh7RTAEO3D3RddF7pgT01LbwLFDuvq4dE' );

define( 'NONCE_SALT',       'SMb094O8KSeHbwYgXVQGzNklaaMVmcgT4tL5aeWFuaISjEoHfJ6HCbBPigbsJgCr' );


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

