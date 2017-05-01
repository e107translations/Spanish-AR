<?php
/*
 * 
 *
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     Copyright (C) 2008-2009 e107 Inc (e107.org)
|     Released under the terms and conditions of the
|     GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
|
|     $Source: /cvs_backup/e107_0.8/e107_languages/Spanish/lan_installer.php,v $
|     $Revision$
|     $Date$
|     $Author: AdocArg $
+----------------------------------------------------------------------------+
*/

define("LANINS_001", "Instalación de e107");


define("LANINS_002", "Paso ");
define("LANINS_003", "1");
define("LANINS_004", "Selección de idioma");
define("LANINS_005", "Por favor, elija el idioma para usar durante la instalación");
// define("LANINS_006", "Elegir lenguaje");
define("LANINS_007", "4");
define("LANINS_008", "Versión de PHP y MySQL chequeado / Permisos de archivo chequeado");
define("LANINS_009", "Reevaluar permisos de archivo");
define("LANINS_010", "No se puede escribir el archivo: ");
define("LANINS_010a", "No se puede escribir en la carpeta: ");
// define("LANINS_011", "Error"); new > LAN_ERROR
define("LANINS_012", "Las funciones de MySQL parecen no existir. Esto probablemente significa que la extensión MySQL de PHP no está instalada o que tu instalación de PHP no fue compilada con soporte de MySQL."); // help for 012
define("LANINS_013", "No se pudo determinar la versión de MySQL. No es un error fatal, así que podés continuar con la instalación, pero tené en cuenta que e107 requiere una versión MySQL >= 3.23 para que funcione correctamente.");
define("LANINS_014", "Permisos de archivo");
define("LANINS_015", "Versión PHP");
// define("LANINS_016", "MySQL");
define("LANINS_017", "PASAR");
define("LANINS_018", "Asegúrese de que todos los archivos listados existen y que el servidor los puede escribir. Esto normalmente implica CHMODing 777 en ellos, pero los ambientes varían - ponete en contacto con tu host si tenés algún problema.");
define("LANINS_019", "La versión de PHP instalada en tu servidor no es capaz de ejecutar e107. E107 requiere como mínimo PHP ".MIN_PHP_VERSION." para funcionar correctamente. Actualiza tu versión de PHP, o ponete en contacto con tu host para una actualización.");
// define("LANINS_020", "Continuar la instalación"); //LAN_CONTINUE
define("LANINS_021", "2");
define("LANINS_022", "Detalles del servidor MySQL");
define("LANINS_023", "Por favor, ingresá tu configuración de MySQL acá.

Si tenés permisos de root, podés crear una nueva base de datos marcando la casilla, si no, tenés que crear una base de datos o utilizar una existente.

Si tenés una sola base de datos, utiliza un prefijo para que otros scripts puedan compartir la misma base de datos.
Si no conoces los detalles de MySQL, ponete en contacto con tu web host.");
define("LANINS_024", "Servidor MySQL:");
define("LANINS_025", "Nombre de usuario MySQL:");
define("LANINS_026", "Contraseña MySQL:");
define("LANINS_027", "Base de datos MySQL:");
define("LANINS_028", "Crear base de datos?");
define("LANINS_029", "Prefijo para las tablas:");
define("LANINS_030", "El servidor MySQL que deseas que utilice e107. También podés incluir un número de puerto, p.ej: 'hostname:port' o una ruta de acceso a un socket local, p.ej: \":/path/to/socket\" para el localhost.");
define("LANINS_031", "El nombre de usuario que deseas que e107 utilice para conectarse a tu servidor MySQL");
define("LANINS_032", "La contraseña para el usuario que acabas de ingresar. No debe contener comillas simples o dobles.");
define("LANINS_033", "La base de datos MySQL que deseas para que e107 resida, a veces se refiere como un esquema. Debe comenzar con una letra. Si el usuario tiene permisos de creación de bases de datos, podés optar por crear la base de datos automáticamente si aún no existe.");
define("LANINS_034", "El prefijo que deseas que e107 utilice al crear las tablas e107. Útil para múltiples instalaciones de e107 en un mismo esquema de base de datos.");
// define("LANINS_035", "Continuar"); // LAN_CONTINUE
define("LANINS_036", "3");
define("LANINS_037", "Verificación de conexión MySQL");
define("LANINS_038", " y creación de bases de datos");
define("LANINS_039", "Por favor asegurate de llenar todos los campos, los más importantes: Servidor MySQL, Nombre de usuario MySQL y Base de datos MySQL (Estos son siempre requeridos por el servidor MySQL)");
define("LANINS_040", "Errores");
define("LANINS_041", "E107 no pudo establecer una conexión con el servidor MySQL utilizando la información que ingresaste. Por favor regresa a la última página y asegurate de que la información es correcta.");
define("LANINS_042", "La conexión al servidor MySQL fue establecida y verificada.");
define("LANINS_043", "No se puede crear la base de datos, asegurate de tener los permisos correctos para crear bases de datos en tu servidor.");
define("LANINS_044", "Base de datos creada con éxito.");
define("LANINS_045", "Hace clic en el botón para pasar a la siguiente etapa.");
define("LANINS_046", "5");
define("LANINS_047", "Detalles del administrador");
define("LANINS_048", "Extensión EXIF");
define("LANINS_049", "Las contraseñas que ingresaste no son iguales. Por favor volve atrás y proba de nuevo.");
define("LANINS_050", "Extensión XML");
define("LANINS_051", "Instalado");
define("LANINS_052", "No instalado");
// define("LANINS_053", "E107 v2.x requiere la instalación de la extensión XML de PHP. Ponete en contacto con tu host o leé la información en [x] antes de continuar");
// define("LANINS_054", "E107 v2.x requiere la extensión EXIF de PHP para ser instalada. Ponete en contacto con tu host o leé la información en [x] antes de continuar");
define("LANINS_055", "Confirmación de la instalación");
define("LANINS_056", "6");
define("LANINS_057", "ahora e107 tiene toda la información necesaria para completar la instalación.

Hace clic en el botón para crear las tablas de la base de datos y guardar todas sus configuraciones.");
define("LANINS_058", "7");
define("LANINS_060", "No se puede leer el archivo de datos sql

Asegurate de que el archivo [b]core_sql.php[/b] existe en el directorio [b]/e107_core/sql[/b].");
define("LANINS_061", "e107 no pudo crear todas las tablas necesarias de la base de datos.
Por favor borra la base de datos y corregí cualquier problema antes de intentarlo de nuevo.");


// define("LANINS_063", "Bienvenido a e107");

define("LANINS_069", "e107 se ha instalado correctamente!

Por razones de seguridad, tenés que configurar los permisos del archivo [b]e107_config.php[/b] de nuevo a 644.

También borra install.php del servidor después de hacer clic en el botón de abajo.
");
define("LANINS_070", "e107 no pudo guardar el archivo de configuración principal en tu servidor.

Asegurate de que el archivo [b]e107_config.php[/b] tenga los permisos correctos");
define("LANINS_071", "Instalación Completa");

define("LANINS_072", "Nombre de usuario del Admin");
define("LANINS_073", "Este es el nombre que utilizarás para iniciar sesión en la página. Si lo deseas, también podés usarlo como tu nombre para mostrar");
define("LANINS_074", "Nombre de admin a mostrar");
// define("LANINS_075", "Este es el nombre que deseas que tus usuarios vean en su perfil, foros y otras áreas. Si deseas utilizar lo mismo que su nombre de usuario, dejá este espacio en blanco.");
define("LANINS_076", "Contraseña del Admin");
define("LANINS_077", "Por favor, ingresá la contraseña de admin que querés usar acá");
define("LANINS_078", "Confirmación de la contraseña de admin");
define("LANINS_079", "Por favor, ingresá la contraseña de admin de nuevo para confirmar");
define("LANINS_080", "Email del admin");
define("LANINS_081", "Ingresa tu dirección email");

// define("LANINS_082", "usuario@tupagina.com");

// Better table creation error reporting
define("LANINS_083", "Error reportado por MySQL:");
define("LANINS_084", "El instalador no pudo establecer una conexión con la base de datos");
define("LANINS_085", "El instalador no pudo seleccionar la base de datos:");

define("LANINS_086", "Nombre de usuario del Admin, Contraseña del Admin y Email del Admin son campos obligatorios. Regresá a la última página y asegurate de que la información se ha introducido correctamente.");

// define("LANINS_087", "Miscelánea");
// define("LANINS_088", "Inicio");
// define("LANINS_089", "Descargas");
// define("LANINS_090", "Miembros");
// define("LANINS_091", "Enviar Noticias");
// define("LANINS_092", "Contáctanos");
// define("LANINS_093", "Concede acceso a elementos privados del menú");
// define("LANINS_094", "Ejemplo de clase de foro privado");
// define("LANINS_095", "Verificación de integridad");

// define("LANINS_096", 'Últimos Comentarios');
// define("LANINS_097", '[más ...]');
// define("LANINS_098", 'Artículos');
// define("LANINS_099", 'Artículos de la página de inicio ...');
// define("LANINS_100", 'Últimos Mensajes del Foro');
// define("LANINS_101", 'Actualizar menú de ajustes');
// define("LANINS_102", 'Fecha / Hora');
// define("LANINS_103", 'Revisiones');
// define("LANINS_104", 'Revisión página de inicio ...');

define("LANINS_105", "No es aceptable un nombre de base de datos o prefijo que comience con algunos dígitos seguidos de 'e' o 'E'");
define("LANINS_106", "ADVERTENCIA - e107 no puede escribir en los directorios y/o archivos listados. Si bien esto no detendrá la instalación de e107, significará que ciertas características no estarán disponibles.
Tendrás que cambiar los permisos de archivo para usar estas características");
				
define("LANINS_107", "Nombre de la página web");
define("LANINS_108", "Mi sitio web");
define("LANINS_109", "Tema/Diseño de la página");
// define("LANINS_110", "");
define("LANINS_111", "Incluir Contenido/Configuración");
define("LANINS_112", "Reproducir rápidamente el aspecto de la vista previa del tema o demo. (Si está disponible)");
define("LANINS_113", "Por favor, ingresá un nombre para la página web");
define("LANINS_114", "Por favor, selecciona un tema");
define("LANINS_115", "Nombre del tema");
define("LANINS_116", "Tipo del tema");
define("LANINS_117", "Preferencias de la página web");
define("LANINS_118", "Instalar complementos");
define("LANINS_119", "Instalar todos los complementos que requiera el tema.");
define("LANINS_120", "8");
define("LANINS_121", "e107_config.php no es un archivo vacío");
define("LANINS_122", "Es posible que tengas una instalación existente");
define("LANINS_123", "Opcional: Su nombre público o su alias. Dejar en blanco para utilizar el nombre de usuario");
define("LANINS_124", "Por favor, elija una contraseña de al menos 8 caracteres");
define("LANINS_125", "e107 se ha instalado correctamente!");
define("LANINS_126", "Por razones de seguridad, tenés que configurar los permisos del archivo e107_config.php de nuevo a 644.");
define("LANINS_127", "La base de datos [x] ya existe. ¿Sobrescribirlo? (Se perderán todos los datos existentes)"); 
define("LANINS_128", "Sobrescribir");
define("LANINS_129", "Base de datos no encontrada.");

define("LANINS_134", "Instalación");
define("LANINS_135", "de");   //single time use installer only as in .1 of 8  not replacing by LAN_SEARCH_12
define("LANINS_136", "Borrado de la base de datos existente");
define("LANINS_137", "Encontró la base de datos existente");
// define("LANINS_138", "Versión");

define("LANINS_141", "Por favor, rellená el siguiente formulario con tus detalles de MySQL. Si no conoces esta información, ponete en contacto con tu host. Podés desplazarte sobre cada campo para obtener información adicional.");
define("LANINS_142", "IMPORTANTE: Cambiá el nombre de e107.htaccess a .htaccess");
define("LANINS_144", "IMPORTANTE: Copia y pega el contenido de [b]e107.htaccess[/b] en tu archivo [b].htaccess[/b]. Por favor, tené cuidado de no sobrescribir los datos existentes que pueden estar en él.");
define("LANINS_145", "e107 v2.x requiere de PHP [x] para ser instalado. Ponete en contacto con tu host o leé la información en [y] antes de continuar.");
