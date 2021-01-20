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
define( 'DB_NAME', 'vf_wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '6B maEYGb6Bo7%u65E[lVH`5,Y[7wQ39)7J;FM|Q~VMf=G.GVM_l.mr*b-M?5n>U' );
define( 'SECURE_AUTH_KEY',  '5tVUjP<8y<5do^4r8$IrLq{|{m:VN5?0Z}JM3cM!bUffkU>-Io~MMEcxG&}f}M.3' );
define( 'LOGGED_IN_KEY',    'so]4vBNFcFA$RqnCKr9X{HF)eZWP59^i@v,[k=[BY?A*VM$D,BPyik<_)C@DXe|8' );
define( 'NONCE_KEY',        'pH>#V83ca&vTpG/<A<Dwi%6[z8~9G/xmy+|yi/DXJ).I,]JVOArF/-k)Y09&#~oR' );
define( 'AUTH_SALT',        'wT)pXJl2DNEZ7{l3^/Mp%?v-gus0=v@2/N3#nvmMxZ/6w47Z8MiAVJ$QyW6A!3h+' );
define( 'SECURE_AUTH_SALT', 'KB^D5HtczF.ZOnDxg/F]QAr(=;m.*$n/t/`_#rSxMf=F Bln0ILD&xpe3~d1KGnd' );
define( 'LOGGED_IN_SALT',   'y>Vw?V]VJZO!WP$58To*I)2UQR,#b4x`::47L-gvo2;rrEhOjFMm/W[jS8IbgB)t' );
define( 'NONCE_SALT',       'GQC;<Ml:hOCQG>lgM3?+Cc`U$M(S-3XovNsBK;!]m:q1~LPLX!4tmcj_*i^W|+>h' );
define( 'AUTH_KEY',         'y50{PXr31rSY8d0Z-owP&[FC%?beGP(c#l!xN,dgME]D}to^#dYD)bNLl[@M>0hd' );
define( 'SECURE_AUTH_KEY',  'Xkn.bEgG1tL+AC]E2.z>wY_+^ib;T*kH(A|DfIV3+2a.1yj{<Fn2[&(mt7l(f c_' );
define( 'LOGGED_IN_KEY',    'Xp=!Jh@F_$0ZeIF{|>man&u2b#t!@8D6#??Ye+oH_oS<D.~]g8~No4@np%9Y&*(C' );
define( 'NONCE_KEY',        'hS3mYjsKa,gp&dWR49ZG-tSKN@ysO(}K/*WA4niAYyk2m]cbpoy&^dUC){{;OFR>' );
define( 'AUTH_SALT',        '_OnZD}q3wTqh=Wazwt/9/fymC<L{L2B^uNW~F0QM Y]GOV}>D7a}qxIdsW#8jJ#m' );
define( 'SECURE_AUTH_SALT', 'rq9-Yrr]%lA)mt&9jzn(dKShfg=Q({i^<ob.B,dIqM~:!6<%B=cOBs,a{+Kg]{zP' );
define( 'LOGGED_IN_SALT',   'nr7=0n3-D>YnPX][Wj2qF.StFu=P5I,-?13:l#VukVg4-)V`}1@Qdo^]EEC7,f:t' );
define( 'NONCE_SALT',       'hoFQ^pG?#W4E9j,v8<!r>a4ZKH.L9{1?RaZu,O,vi,$ 5/)bgD&PP[1a#gW-|1xi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vf_';

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
