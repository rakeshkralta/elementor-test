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
define( 'DB_NAME', 'elementor_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'FSK+|.;twn^(Hj7w`$3UpaJa:&/^90Ug(1,Sbza/,9NLU;d1Y8Yw<-<1q7A~l&L*' );
define( 'SECURE_AUTH_KEY',  'g&Ub|j#$pPRl 8%8qvoKB/IaHrkR{i5 >0{H)` wLU9|,h^b67QjliJ#(nN=5><v' );
define( 'LOGGED_IN_KEY',    'N.+ FK#lLho>B#:HRP,(6`5QV.`b>^+S7lXpe;,ac1_6Ga_h_QlR1g!)X.@KoL/?' );
define( 'NONCE_KEY',        '^9i[<tV}(,^/ScdKxPtM5``u=Yl#ukZOquE)5BDSi]M(GSI g/5+~6fzW2P#a~c&' );
define( 'AUTH_SALT',        'M5Y?x`]Uek_*dc.K_i}1p~AIj?/a)Ks u&Z*[[MJ!(Zse3CJ_V9r8eqhQ/@<rQ0Q' );
define( 'SECURE_AUTH_SALT', 'D0531Ib-<5xC)E+@H(G*D=^H/p.&&a!RR0*6W(1l5>x K pnXW9<{h{&o#7Mu*K`' );
define( 'LOGGED_IN_SALT',   ',/_[kp5tNV^.^U/^N?>0h3Wae:S;oED]FlGgfK*!#Y,+3dMu.W}yw/+t B9@lt2t' );
define( 'NONCE_SALT',       ':w^2U.1,Wbc9f_u5uC/6 .iMMw{]h7<q!/`bx|i0=^9urdTdEp!nHi?cn?q7]ej{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'et_';

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

