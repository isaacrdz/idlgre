<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bd2');

/** MySQL database username */
define('DB_USER', 'wp1');

/** MySQL database password */
define('DB_PASSWORD', '8034760');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'I1D/Up!jko:]|56G}4i O>MPTFLS&^q0O2;Kc!eXSJ`w>}/vG}v/U[zkWf+J=!WT');
define('SECURE_AUTH_KEY',  '7m;FzjKZ62F2wRVZ?UyZOlLv!e-ZqtB8<+K,3Xx<?5{)amPX1gzOo*!hC|ZOuAV@');
define('LOGGED_IN_KEY',    'aY}.>v3`&JRgj#G4f9WZ5jA9#I<B68g|PX.f;(DAJobHhePv[u$/kZ?z//c]~lLY');
define('NONCE_KEY',        ';Y.oO+%fj:ck%?fW@7@f[R.kae:0I_1j-$s:SFAplM*7xWPU|41{1?>5~#+ZOG8_');
define('AUTH_SALT',        'ZiFI<ovjK<<*Vm9Tq2AwA#76J(b[N70S~,ND&(NQ^-;(QjEFdP#$iBg#]X@<W>-q');
define('SECURE_AUTH_SALT', '{a_o.E*:6{.T{h]2sX|AT9lnxH>5p^l#vU|`+8?}_zu@|,Mh?<ZYc+A}AkqB+@y*');
define('LOGGED_IN_SALT',   '!.]>K#Zm#=dcu{l.`H8ksxE>Fpqi2N,bS+%VLGrP<#8+TLT]B9D5H*,&!<^c?7|^');
define('NONCE_SALT',       '*}[`S&(Dd)0Gp3|1_I:=Psjc6CQ0MPF0NkJ{2H+qZTa?p4w|[tm+5zT*c=+OP*&i');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
