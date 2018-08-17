<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'planilla-wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '[+NASYQ@551=)}S<}?Hg0>U^R)PZxP  %|fH/AU(.6,[|Wf2Po|XJA j;uf-,Cr`');
define('SECURE_AUTH_KEY', 'o;+(5W<F9c#be=ETl?%U1EI4A:?Q~{7|duG/j9X_r8A1|bigb`c|}S7blST]o2Ph');
define('LOGGED_IN_KEY', '_1YN4tO8{W-F4;$`MuL:PFm>FLgd079ib3SOqTrH14;+3F<m.;JvfIx}Th!-2n+6');
define('NONCE_KEY', '|]~NR0m7pv&P`I0&:]T!+h;qP?u3OadoYC&6B!{-[1%Yusgju!AJ[KFbn{8dQA)U');
define('AUTH_SALT', 'j0FV>l=6q)s4TQ6a3,k|Mw4J<ch`HJht?9M**U;WEyx0Zw%;U|CCH:ze2z2{L1z_');
define('SECURE_AUTH_SALT', 'VtCc&j}O IbgW)I6N!1)6Y;]~q[htXb@PY]He]9MGX$uCz?MW}/3q-M]YBj6?}D@');
define('LOGGED_IN_SALT', 'poa2|Z<+#el>_:cV4[:yeCKD*rCPrl?tTCoWA#&0VP[DiIF 3teg|_~;>)U(4Ps/');
define('NONCE_SALT', '$+.HIemF;|!fnj:Aqtc9~yZBTXH9es?2vwB];Qph%$,]5CU5}RwFz|tGB9]S[Wn!');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

