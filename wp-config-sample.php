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
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );
/** MySQL database username */
define( 'DB_USER', '' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
/** MySQL hostname */
define( 'DB_HOST', '' );
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
define('AUTH_KEY',         '|q,{KE8m/U+RajtI:X>Mn8B568*|!.*-cZywkW+lMHo+b67pCfOCAC0%qJK>;x{/');
    define('SECURE_AUTH_KEY',  'hox+gOlC{m|U?oEwwrt3uLph5K3pmdC}mHxP$_FQ+WOqnYWj1+B~X!Zv;?h|MHzi');
    define('LOGGED_IN_KEY',    '(:8#fx]3,2K)4nBAN24A{,Lhlcab1MABj+Fx~$>LdC&=Gzfd?@Vte)Z1#%-hqyHh');
    define('NONCE_KEY',        'Nd eM;Sjl|O$~w70w]PqtPC[>n*-v]jLe`F_Y7Bp2y-H6p+xB`Ay3w)9M/C~d61F');
    define('AUTH_SALT',        'I+;{-%0i P5Tj&RGZe>}?PDr`C6%O1q-#<3$(vGlNL<`CW|]R&?tOW8-3-w:@2kX');
    define('SECURE_AUTH_SALT', ',uG][2@ar,ly35UO*A}Vu$=<;JN2Z2EG0|Y#%N`cDzX=rublCB33q3>:}qYz*SVp');
    define('LOGGED_IN_SALT',   '&o(F)D0;VsY?qq%Nrbf,-y8sHH^HapV*R,ljuAt=VOn1(dA5*^^k[V=@?#Hv6!w]');
    define('NONCE_SALT',       ',J2|_4QS9Y-E@KRWqn!{1TbHK-~|[-:N@MG (-7=QJXSgYbWW/q=_N9Z>9Q?6u7g');
/**#@-*/
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define( 'WP_HOME', 'http://localhost/' );
define( 'WP_SITEURL', rtrim( WP_HOME, '/' ) . '/wp' );
define( 'WP_CONTENT_DIR', __DIR__ . '/content' );
define( 'WP_CONTENT_URL', rtrim( WP_HOME, '/' ) . '/content' );
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
// Environnement de production
define( 'ENVIRONMENT', 'production' );
// Environnement de développement
// define( 'ENVIRONMENT', 'development' );
// Environement de préproduction
// define( 'ENVIRONMENT', 'staging' );
if ( defined( 'ENVIRONMENT' ) ) {
    if ( ENVIRONMENT === 'development' ) {
        define( 'WP_DEBUG_DISPLAY', true );
        define( 'WP_DEBUG_LOG', false );
        define( 'DISALLOW_FILE_MODS', false );
        define( 'EMPTY_TRASH_DAYS', 0 );
        define( 'WP_POST_REVISIONS', false );
    } else if ( ENVIRONMENT === 'production' ) {
        define( 'WP_DEBUG_DISPLAY', false );
        define( 'WP_DEBUG_LOG', true );
        define( 'DISALLOW_FILE_MODS', true );
        define( 'WP_POST_REVISIONS', 7 );
    } else {
        echo 'Unknown environement.';
        exit;
    }
} else {
    echo 'No environment is specified.';
    exit;
}
define( 'FS_METHOD', 'direct' );
define( 'DISALLOW_FILE_EDIT', true );
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );