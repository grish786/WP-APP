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
define('DB_NAME', 'wordpress');   

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q_dt#.N?]~9$C>UZAaU8U+(K{T)XhZB22*@O^bzO%.GS7>+VS|Bn(%w%u>PKFrj#');
define('SECURE_AUTH_KEY',  'lq9bhda/*xr&BFBut`Qb7~5kRQM&+Fw}zhmq`xtt(#(xXLB`Ri*s]p<rUnpc4Twl');
define('LOGGED_IN_KEY',    '+`(9D*[{3U/YADW@0~06v3 Z[|oPgFBn4/Z,?i=:Qwj/r-1x)}bF+Uun]vep!&C%');
define('NONCE_KEY',        'G0&LG=M|wgTWQz|khlpTD>LQt%]zB?A1%y08VsUSIIn#.c:/(FMoogk44(faAM&~');
define('AUTH_SALT',        '^].P+r7Gyi|#G?b,`}3>=2]*rA:6ME|?o&`&BajS0z<t{]^&_Whnm=o/:Ty:=<rI');
define('SECURE_AUTH_SALT', 'cafq#b#FGav%8_N59:8n[1(#kTX/oV1#N`V+0&,CAlD*kVc]/BW>mVj%opc<%T&$');
define('LOGGED_IN_SALT',   '4:Zoq?jlnA/dv~QsF9/XlubxP)$T0m?`r:e8)qi<czBprraYNbx+mh`NxjkU$`ST');
define('NONCE_SALT',       '<g):qV+?k>n.ZM,E6LSqU-3Y( yyb~9hId?J&EGq_X-Z?>gO|H)q/{vaXvJ15B>Z');

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
