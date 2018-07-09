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
define('DB_NAME', 'car');

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
define('AUTH_KEY',         'bf432kq=u,fA!mVLII_]Ibaz%z@%0I((&C@Nnx9{WoP,*!o[[DG^IIF2v<)z3P[P');
define('SECURE_AUTH_KEY',  '<BQc|=7(lF6X<3fmK_VLTas5JT~#uy/rR3J6rKUXQYt4gI2)v1[1%v8 u+! Q2NX');
define('LOGGED_IN_KEY',    '>Q9FQ#uNtw,!8rgLQm%!O7B JeD{],B{t6{g|_*LXnw_zF{[P<rw$=FDda0dA[Oc');
define('NONCE_KEY',        'I*[0@G`7Xv2Ni*=Fb5*Mv|v9X<}uY;fMPL_|.d1[x=C#+Uj#uqU8oxJ3QV$L{,^I');
define('AUTH_SALT',        ']w `$?Mn_UbsBME=D:V2@GvlI#9:Ggt#~eR8L7*>B#?|zy|eo3IGow@+Uw`_uo)7');
define('SECURE_AUTH_SALT', 'h8l<-c/%a-ymRomRRr<r|*r@-HOoc4_Ajv_X6B:FG](Jb*v>*3`fH1)DGP.-|}SS');
define('LOGGED_IN_SALT',   '<9OQ0_j3$h+is([?8r/hl(mJMrD @!=+fa8$h1gur($A.P$+PTE88NGucJnXc>2P');
define('NONCE_SALT',       '.`*XNi}bqL)*n6t<EpVr?7yUOKuvJ<t:<D7iTfhJi$0.KB0LRcYH9l ;p3Eqi4e@');

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
