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
// ** Localhost DB_NAME: vitukraina ** //
// ** Website DB_NAME: vitukraina ** //
define('DB_NAME', 'vitukraina');

/** MySQL database username */
// ** Localhost DB_USER: root ** //
// ** Website DB_USER: vitukraina ** //
define('DB_USER', 'root');

/** MySQL database password */
// ** Localhost DB_PASSWORD:  ** //
// ** Website DB_PASSWORD: Kefts56$2 ** //
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');



define('DISALLOW_FILE_EDIT', true);
define( 'WP_AUTO_UPDATE_CORE', false );
define('DISALLOW_FILE_MODS', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'taq(I+1Sr,t%kc=]eT<F5 N.E^{hHSx=Yce?>`vxlo!3_8$?OMG1|6g)>G)R|WxV');
define('SECURE_AUTH_KEY',  '!4XYz8qiogFjJFEputzeK}BQY,h^in~$Qv+vj@/}.j<47^!85aC#%a;HwOp$|je`');
define('LOGGED_IN_KEY',    '3J6<gpn`J$6cMuU(F?NV1FzEm/WP{Y2[dFJhELh#TBr&c,47+`=s0}QEsDj@ap}L');
define('NONCE_KEY',        'o<~]KC&5]Fj}vRZ!kvL&+wvl/$4I+,PnvP0[/lg2O5qDSPZ*TV!zgv{%]*<~{FV2');
define('AUTH_SALT',        'L$nx&;G+xj2E$F+I$4d0E_0up-W}/YhR0QE7BL|3n+</T3mMFEUG6b6fq!)HaE9G');
define('SECURE_AUTH_SALT', '[9:?vFyhaDSMm@Nv%.,$I;+@Xt!}`5HHQu0:;VlQcq6Z(G}:]8n&]c=lC#+s S`O');
define('LOGGED_IN_SALT',   ': pSjDL%IakpgDqVlJ|H.sug%FDKuc%O1u$=xZs;)DD-EI!IgI.8/gU;b5nzkbVd');
define('NONCE_SALT',       'yVKXBV3/74>6F#kA}H{jWmNqW]1A0pg~gZ(EC5lnTdT6|geh[S{+y<BPQf$~AfH9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
