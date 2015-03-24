<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+9?MrXJ0_?l/mN~KehVP@x_{(9{m:;@$l])zu%-KQ4&xG1r(-g]3aC&YYaa({E=Y');
define('SECURE_AUTH_KEY',  'pueV0~99V^0k{[3kbj4Dx-#,=-x:Pe<6Rg6^vAOmyommG!0Dr0fAy+cD+%t[l/Oj');
define('LOGGED_IN_KEY',    '#S_<rx_Z&brNnF71jGE]bU(I-1@{3&?>+~ SNc1<c7NzA|3_+K!a&A8xkSL8@G(e');
define('NONCE_KEY',        'fPd{_&vn9s6`[MxdsTF2}0Yb-|u~$:CXC-PNHp2@xH@0_~W?RHn8X4#52AC!|}IH');
define('AUTH_SALT',        '0!eftr?3.+}OB7TDClN@FTPdwXzl-rs7-]ji:y]%P-_oGHt>v(6Q%;Fch)%h[hGb');
define('SECURE_AUTH_SALT', '3K18&Zw)d,|!=$a(SaIg.*VeJ-|ye T>qvB)Oliu/m<krzy}+9a],S Gc>t=[d~m');
define('LOGGED_IN_SALT',   '%K4s3a%{pSA5(TTe<rz=nT6&Uc~7o?N2z9|_PKj5MRiF.|v7iR{:.s;/(UzGrnmg');
define('NONCE_SALT',       '(%PFtzS_F6f3,+}.=-78vlZbZ+UP(oir/x/#-IIJFgcH9!+BTp4D-/~N0,(,Q8NV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'artgirls_';

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
