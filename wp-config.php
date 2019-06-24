<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'dbspdc');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', '1234');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'K0b6tGYt/LALh*I Cdh(W%j8{ 8aRnH>);fE03n4,f8cl?B[@9_qGiQ>+K>x JM7');
define('SECURE_AUTH_KEY',  'O3[dk?ih)@NL]eB.Sk8[)BdcX[8ad]S{C?v?(vgm:w&_Taaxx9GFpzKX<sn1?XFV');
define('LOGGED_IN_KEY',    'AvC1Gw@exh;whMVD`iIw}A!kNofDMKs2%Nf]jK[yxo!%Pg6|2$41EbBz|D!DP]@3');
define('NONCE_KEY',        '[;:p?oW68mFF$V9@wUUy}u~WYkpIwS/lLL-L;I&i~^YEeXE^wibd5rUirdDFJmYq');
define('AUTH_SALT',        'YT/fHQRdjae_0z0j?}nC(yVL0!,=%W8<M-Qn> nB=wzq>O<|H;Yykzq$iEz5Mq1(');
define('SECURE_AUTH_SALT', '/:Gy-M~DLAT$8GqnI-Y08 15Q30UXp`deGp7anT;9H^S.w!7HJr<H,zVUS/JGuIe');
define('LOGGED_IN_SALT',   '~SvMJjc~lNRrG=VvJiu{YvXVSb7Xvf]rm$*>IE8SFj(X.uWr(hL`f4bxT@cEO{~)');
define('NONCE_SALT',       '1:g,mYRNJ Q1pj=)&^<6]7#%sli$l%9[OGugl!%$&rdxraBes9o$jj!)EEkcyUq5');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
