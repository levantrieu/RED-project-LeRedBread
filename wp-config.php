<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'le_red_bread');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         ':sy$Y>)UX]aDG|FnKa5mYp|!,xSl;Ifr_913oLtZiv<YXi)6sPF|-qG80?h4y+B-');
define('SECURE_AUTH_KEY',  '#?#k||~/t(8?Q3>i[X}}Yp#]+H}}9[8I2<d@J2A;fkoMEENl3KV|-hz2m]%RO^Ya');
define('LOGGED_IN_KEY',    'j d9eDK2AL}Xt5PtVm _t9gS[pS*]6B#mSIUZQ1^$S^l2 d,z(zN,AzxZ%]F^1~q');
define('NONCE_KEY',        'Xpt|:,`v.7gppUGe^_pmKnEuY:p_GKrrkQ;)L6<}r~/a`q-+2i4@Dk&#F<AV_CAP');
define('AUTH_SALT',        'Z4s042qaww3>(d7W>5L|Un/NyDP@1+3>3SyPfKf+X 4 jz50Sq+4<vp?L>rJtB #');
define('SECURE_AUTH_SALT', '_SYtC^o[F@CDmP-awgD.q5d2khG^z$q?nlXDKOHNujwL_e7q7`Nx?b}h2,Q(-y;z');
define('LOGGED_IN_SALT',   'u- ~^@,zH@ 4-?a@P>^G7,i|XyEV>lHC7?hYh,KtHxgkzRgn6$eQ`p+@%>z5yOfh');
define('NONCE_SALT',       'pF!-4UYU>gB^B&A-w)LT*nc7m V^/Re+lzyq#x<J$`DrD5B)w;rhn C?DI4gW%+c');


$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_DISPLAY', false);
define('WP_DEBUG_LOG', true);
define('SCRIPT_DEBUG', true);
define('JETPACK_DEV_DEBUG', true);

define( 'WPCF7_VALIDATE_CONFIGURATION', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
