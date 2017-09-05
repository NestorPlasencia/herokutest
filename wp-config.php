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
define('DB_NAME', 'cursos');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', '{]0de7|}dLkIL$x%tc}~GFKlB,![^|WQiB<?2;d}^5QGfxck{#MJ7JD*Lu}%n$4=');
define('SECURE_AUTH_KEY', '*_LXmtj#NwkTCDj:aAVl#m3@+sK{T:+5<.3fE]*-76KBuC%^;yJ~XQ}wu{I]L6i ');
define('LOGGED_IN_KEY', '[#hwez}G6!Mp?g9H0rP* 0X5??flBw11r0QSC^Y;zSy)S-S{$id0^Je`.T-_rD:v');
define('NONCE_KEY', '2uLhJ3c-2>Nk]SHO$z9,}UvXAIK(E)J9qq+]5q h:gc&v4KzRwL5NP3-uusI,d.T');
define('AUTH_SALT', '*+;3f(py8MwFQ YWy;E)SL%u~klr):;l)*JI)S8%eQ7,WI#K@qWT`yO<TrCfwmH3');
define('SECURE_AUTH_SALT', 'C_N/Ys%@}k(tID];<Ti6&FnB}F]yRK&D^UqIBC*|G@+ehjZ~39I$<5@o Bo|*hyG');
define('LOGGED_IN_SALT', 'Nju`edOc}ciN@7yO{]qwjEgc5&2) -$bI~5pyBi-OVSnoD{+0Y:_==G>`90TXIhB');
define('NONCE_SALT', 'Z++<+e;Y38u<,B24o=Pq#o)_/e{zEK]h2_c}t~g4M!Qa}+|C_6=dw=9Eb9>pMneI');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'cursos_';


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

