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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '%O=U~0FZrHfl8&Du~g4;pFvcaH-<o5Q6<Qo2_UlA6CEj +gC~s,`1@qOLqB+<-I<');
define('SECURE_AUTH_KEY',  'mU*O=[V|x,SwH$1N|ED1X|H)z+72-=oZd?ttw2PJYwfj38; >tomgtlsS,Qgaw6;');
define('LOGGED_IN_KEY',    'w:yFH4F|vzhB~.rbdYCGlUq5@M_|@S-1W874)!+Lqo;+=]6m=56<c{?zD9/@uTJ+');
define('NONCE_KEY',        '`UzA y3QE3+efPK0w[4mQ4W XM3rEYA^Uj0,%(iBi&yAQEPrW=l0x8PJ;OF*83Lj');
define('AUTH_SALT',        'J 4K,J-m2mFWIjD{a1z2c[Ms7&}.FI,se59|:0oinswmXRg:ZMvvQa)2M;g%GE}{');
define('SECURE_AUTH_SALT', '%/Dfz<AUN5A=M%EVAwA7Y8oa1j57F)D3%Q?:Z--Y<D/-i~i(*R__4o9i.zk%0q]!');
define('LOGGED_IN_SALT',   '1-Jb~2oT /WY{`nGD:>k}{v-$D,N-GlxN&QmbXG)d79`OLG,cm(uy8Q8ec| n5[Z');
define('NONCE_SALT',       'fz?;T=Q1{2DHOZCk1ho+jD.O?%]2F07R|Oc|s,Y_+IWv(3_$70Je([BX>#5b*7Ut');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
$base = '/';
define('DOMAIN_CURRENT_SITE', 'roystonscouts.dev.uk');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('SUNRISE','on');

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
