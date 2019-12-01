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
define( 'DB_NAME', 'my_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'heisgood' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2ea4R}%PV}LRw a]+/Cm&v7{NSe4BawsohZ *uZgmO/yQ3t$s!2h_|#dlSI@q0]9' );
define( 'SECURE_AUTH_KEY',  '<-$8YS>>Sw/BeoIlUp@4z#bB;EbBel9Z;f@SC %uIJ[_etE85A_}I%E&:]/eP<9/' );
define( 'LOGGED_IN_KEY',    'Rc6xg,YFt2pPkmzUT!<1rO>imRw:grP#rQ<;S4DXSz=VR@dFPNpkc<d)?n2OM/rF' );
define( 'NONCE_KEY',        'p&Y*57b[p0lGWYY&]1oVh-j6)E.W=b>uk-4xK[h5S!949-yRn5r+{k|xFv5KS%jk' );
define( 'AUTH_SALT',        '(&G?i|(lDn_bHQ[JI#A_wZ].>b3gmv3!px)0vb#;,G9 DUI|z!ofP ?7US$u&vY;' );
define( 'SECURE_AUTH_SALT', 'IoG$l-l},Ag,J[l`=qwwG_1l{T5Y9<DuNTN/Agp?2G3Ic27:OLrbtvgtNB] fb|R' );
define( 'LOGGED_IN_SALT',   'l4(>U7]b/O.@}7WOgZn5cc n!`O$m7HE/VR1:Ud7_qG@8e&W6.n*VR,/C]ep=)~8' );
define( 'NONCE_SALT',       'sbPzD;xg[)do8Bm`pRjZuD^~yGq^LE`Yh$Z/zRG%mIkkA?j/9Nh4&vz8#%i]^oj[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
