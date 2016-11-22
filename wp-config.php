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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_default' );

/** MySQL database username */
define( 'DB_USER', 'wp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'jt<TO-KOz 8ZmdF`+<yd%yL,Kb6G_HJ&)YEDU3|nP7K?vL71`%.;iuMmJ+<{30V$');
define('SECURE_AUTH_KEY',  'TTj+>8#skCvX_O>^8/$gf|SPJWtoL#XAG0/m;t||xl*c]|KBXO)A8_p55ws9+XG6');
define('LOGGED_IN_KEY',    'N-okhA6-A1+OX3UHOFq<a%|hZiRO}W}r+!EwD!IhaPG|wiN2*2y:f(1|Ea$eRJK<');
define('NONCE_KEY',        '?h_,M$$MhXc:]lS }ZhqJh`f])$LDCL=ZX7APB$gxd>3-)^~ABDo1YgedW~LzZ6 ');
define('AUTH_SALT',        'r`~q0f/@66AT|DEd/C?R93To=j<uc,h>To+gG}I=N65ls-c=XNy;13e+Pj`gzsxL');
define('SECURE_AUTH_SALT', '=i%3/np7}TviGdXboTYUd>{j39[cBv@Q`dPYl#+LlW}61qYI$|o6yiF-I9RvM|Pd');
define('LOGGED_IN_SALT',   '2e31c<h2]b;ia5C$URBe{ZSlgAEjNJ,(2gJ+-7O/@/~XlES,gu`]rND9WuR]jdG;');
define('NONCE_SALT',       '>T<(,(?i6Qo|AGFGQf|l=~0;2yXVRUK]h2B5c~R&&(}oNJl{j[mPqW_8-N4m~wn&');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


// Match any requests made via xip.io.
if ( isset( $_SERVER['HTTP_HOST'] ) && preg_match('/^(local.wordpress.)\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}(.xip.io)\z/', $_SERVER['HTTP_HOST'] ) ) {
    define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
}

define( 'WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
