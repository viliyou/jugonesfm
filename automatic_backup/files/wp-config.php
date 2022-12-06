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
define( 'DB_NAME', 'EL_b5EYQMXk' );

/** MySQL database username */
define( 'DB_USER', 'el_jugonesfm' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xj9gGnOom' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-customersdb-46bnmi.endpoints.svc.cluster.local' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'c!$([u0]lvq;i?#K5:En fBO(9n+&!j2bi.+[(SB^rn,*Y2M;&}8pNkz[OPIvXu9' );
define( 'SECURE_AUTH_KEY',   '?zE=_cf=MQxdL3;chT(oZBkHA4lD<Q!L+g&JKr+M`!E!([ASN_7G]!I=~g p%nFi' );
define( 'LOGGED_IN_KEY',     '7c:hWMF[3F1/TEfmU9imj*2#ssYu*^r2dJq1A]&O9/IPki.IK*gLh[~mwMQURu<<' );
define( 'NONCE_KEY',         '>[;]$_yT[^r.^C*lGrfRnYz:^celKH[rd2nt9 w[NM2GZ$~$Xn`07#]Fv/BJ<_|I' );
define( 'AUTH_SALT',         'j`r,eZfMAFn9v%kN!loqGj{2R+0,]&I~<dwEUjv ,PX*wy`cVYUE?4@BB9`XdcY6' );
define( 'SECURE_AUTH_SALT',  '^ d~cHPyRY;gvaTK-E|Nm~H$m,z0c?;+?!6}TB/gsG}Zm|Kn?We{hSPPvGFBb+[8' );
define( 'LOGGED_IN_SALT',    'VX.~89`0Rv.nTA;QNp7l-y{Ka*}H>iNN Qtflwp,am^J(f|?&/liyhx.vzY%,fN*' );
define( 'NONCE_SALT',        '[mK/Q~7YfXv>{]y{705=lY &5u{.3kS0,|K0h`3[:=`wVYZO1{!EN]SBM,++Hjz_' );
define( 'WP_CACHE_KEY_SALT', ',3@)o.)J0F{f.(vK^7e1yAVhbLNJ`Yu$p|]j@rHyB&/Gb9)#>bS^XMjr&?SFvHn7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'eV3qT_';


    define('WP_HOME', "https://jugonesfm.elementor.cloud/");
    define('WP_SITEURL', "https://jugonesfm.elementor.cloud/");
    if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
            $_SERVER['HTTPS'] = 'on';
    }


define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_MEMORY_LIMIT', '512M' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
