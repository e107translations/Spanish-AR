<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     $Source: /cvs_backup/e107_0.8/e107_languages/English/lan_usersettings.php,v $
|     $Revision$
|     $Date$
|     $Author: AdocArg $
+----------------------------------------------------------------------------+
*/

define("PAGE_NAME", "Ajustes de usuario");

/*
LANs rationalised - some common ones now in lan_user.php. Old numbers generally cross-referenced
// define("LAN_7", "Nombre para mostrar: ");		See LAN_USER_01
define("LAN_11", "El nombre que utilizas para iniciar sesión en la página, no se puede cambiar, ponete en contacto con un administrador si necesita ser cambiado por razones de seguridad");

//define("LAN_20", "Error");
define("LAN_106", "Eso no parece ser una dirección de correo electrónico válida");
//define("LAN_112", "Dirección de correo electrónico: ");		see LAN_USER_60
define("LAN_119", "Ubicación: ");
//define("LAN_120", "Firma: ");
//define("LAN_121", "Avatar: ");
define("LAN_144", "Website URL: ");
//define("LAN_151", "OK");
define("LAN_185", "Ha dejado el campo de contraseña en blanco ");
//define("LAN_308", "Nombre real: ");
define("LAN_402", "Escriba una ruta o elija avatar");

define("LAN_410", "Ajustes para");
define("LAN_411", "Actualizar tu configuración");
define("LAN_412", "Cambia tu contraseña");
define("LAN_413", "Elija un avatar");
//define("LAN_416", "Sí");
//define("LAN_417", "No");
define("LAN_419", "Personal / Contact Information");
//define("LAN_420", "Avatar");			LAN_USER_07
//define("LAN_425", "Fotografía");		LAN_USER_06
//define("LAN_427", "Enviar ...");
//define("LAN_428", "Nuevos artículos");
//define("LAN_429", "Link");
//define("LAN_430", "Descargar");
//define("LAN_431", "Artículo");
//define("LAN_432", "Revisión");

//define("LAN_435", "Archivo de protocolo de usuario XML");	// LAN_USER_11

//define("LAN_SIGNUP_1", "Min.");		See LAN_USER_78
//define("LAN_SIGNUP_2", "chars.");	See LAN_USER_79
//define("LAN_SIGNUP_4", "Tu contraseña debe ser al menos de ");	See LAN_USER_77
//define("LAN_SIGNUP_5", " caracteres largos.");			See LAN_USER_77
//define("LAN_SIGNUP_6", "Tu ");				See LAN_USER_75
//define("LAN_SIGNUP_7", " es requerido");		See LAN_USER_75


//define("LAN_CUSTOMTITLE", "Título Personalizado");		See LAN_USER_04
//define("LAN_ICQNUMBER", "El número de ICQ debe contener sólo números");

//v.617
define("LAN_408", "Ya existe un usuario con esa dirección de correo electrónico.. ");
*/
define("MAX_AVWIDTH", "El tamaño máximo del avatar (wxh) es ");
define("MAX_AVHEIGHT", " x ");
// define("GIF_RESIZE", "Por favor, cambia el tamaño de la imagen gif o convertilo a otro formato");
//define("RESIZE_NOT_SUPPORTED", "El método de cambio de tamaño no es compatible con este servidor. Cambia el tamaño de la imagen o elija otra. Se ha eliminado el archivo.");


// v0.7
define("LAN_USET_1", "Tu avatar es demasiado grande");
define("LAN_USET_2", "La anchura máxima permitida es");
define("LAN_USET_3", "Tu avatar es demasiado alto");
define("LAN_USET_4", "La altura máxima permitida es");
//define("LAN_USET_5", "Suscrito a");					// Now LAN_USER_76
//define("LAN_USET_6", "Suscríbete a nuestras listas de correo y/o secciones de la página.");		Now LAN_USER_73
define("LAN_USET_7", "Características");
define("LAN_USET_8", "Firma de usuario");
define("LAN_USET_9", "Algunos de los campos obligatorios (marcados con un *) faltan en tu configuración.");
define("LAN_USET_10", "Por favor, actualiza tu configuración ahora para continuar.");
define("LAN_USET_11", "Ese nombre de usuario no puede ser aceptado como válido, por favor, elija un nombre de usuario diferente");
define("LAN_USET_12", "El nombre para mostrar es demasiado corto. Por favor, elija otro");
define("LAN_USET_13", "Caracteres no válidos en el nombre de usuario. Por favor, elija otro");
define("LAN_USET_14", "Nombre de inicio de sesión demasiado largo. Por favor, elija otro");
define("LAN_USET_15", "Nombre para mostrar demasiado largo. Por favor, elija otro");
define("LAN_USET_16", "Marca el cuadrado para eliminar la foto existente sin subir otra");
define("LAN_USET_17", "Nombre para mostrar ya utilizado. Por favor, elija otro");
define("LAN_USET_18", "Datos de usuario modificados por admin: --ID--, nombre de inicio de sesión: --LOGNAME--");
//define("LAN_USET_19", "Título Personalizado");			Now LAN_USER_74
define("LAN_USET_20", "También debe cambiar la contraseña del usuario si está cambiando su nombre de usuario o dirección de correo electrónico");
define("LAN_USET_21", "Valida los cambios introduciendo de nuevo tu contraseña: ");
//define("LAN_USET_22", "Contraseña invalida!"); // LAN_INCORRECT_PASSWORD
define("LAN_USET_23", "Dejar en blanco para conservar la contraseña existente");		// LAN_401
define("LAN_USET_24", "Nueva contraseña: ");							// LAN_152
define("LAN_USET_25", "Reescriba la nueva contraseña: ");					// LAN_153
define("LAN_USET_26", "Subí tu avatar");						// LAN_415
define("LAN_USET_27", "Subí tu fotografía");					// LAN_414
define("LAN_USET_28", "Esto se mostrará en tu página de perfil");	// LAN_426
//define("LAN_USET_29", "URL del archivo XUP");						// LAN_433
define("LAN_USET_30", "¿qué es esto?");								// LAN_434
define("LAN_USET_31", "Información de Registro");					// LAN_418
define("LAN_USET_32", "Tenga en cuenta: Cualquier imagen cargada en este servidor y que los administradores consideren inapropiada, se eliminará inmediatamente.");	// LAN_404
define("LAN_USET_33", "Elegir un avatar almacenado en la página");					// LAN_421
define("LAN_USET_34", "Utilizar avatar remoto");							// LAN_422
define("LAN_USET_35", "Por favor, escribí la dirección completa a la imagen");			// LAN_423
define("LAN_USET_36", "Haz clic en el botón para ver los avatares almacenados en esta página.");	// LAN_424
define("LAN_USET_37", "Guardar ajustes");								// LAN_154 //TODO common LAN?
define("LAN_USET_38", "Elegir avatar");								// LAN_403
define("LAN_USET_39", "Actualizar configuración de usuario");						// LAN_155
define("LAN_USET_40", "Las contraseñas no coinciden");			// LAN_105
define("LAN_USET_41", "Configuración actualizada y guardada en la base de datos.");	// LAN_150 //TODO Common LAN?
define("LAN_USET_42", "Falta de concordancia en la clave de validación");
define("LAN_USET_43", "Error al actualizar los datos de usuario");

// BC for v1.x template
//TODO Move to usersettings.php with bcDefs() method.
define("LAN_7", "Nombre para mostrar: ");
define("LAN_8", "el nombre que aparece en la página");
define("LAN_9", "Nombre de usuario: ");
define("LAN_10", "El nombre que utiliza para iniciar sesión en la página");
define("LAN_112", "Dirección de correo electrónico: ");
define("LAN_113", "¿Ocultar dirección de correo electrónico?: ");
define("LAN_114", "Esto evitará que tu dirección de correo electrónico se muestre en la página");
define("LAN_120", "Firma: ");
define("LAN_122", "Zona horaria:");
define("LAN_152", "Nueva contraseña: ");
define("LAN_153", "Reescriba la nueva contraseña: ");
define("LAN_154", "Guardar ajustes");
define("LAN_308", "Nombre real: ");
define("LAN_401", "Dejar en blanco para conservar la contraseña existente");
define("LAN_404", "Tenga en cuenta: Cualquier imagen cargada en este servidor y que los administradores consideren inapropiada, se eliminará inmediatamente.");
define("LAN_414", "Subí tu fotografía");
define("LAN_415", "Subí tu avatar");
define("LAN_418", "Información de Registro");
define("LAN_420", "Avatar");
define("LAN_421", "Elegir un avatar almacenado en la página");
define("LAN_422", "Utilizar avatar remoto");
define("LAN_423", "Por favor, escribí la dirección completa a la imagen");
define("LAN_424", "Haz clic en el botón para ver los avatares almacenados en esta página.");
define("LAN_425", "Fotografía");
define("LAN_426", "Esto se mostrará en tu página de perfil");
define("LAN_433", "URL del archivo XUP");
define("LAN_434", "¿Qué es esto?");
define("LAN_435", "Archivo de protocolo de usuario XML");
define("LAN_CUSTOMTITLE", "Título Personalizado");
define("LAN_USET_5", "Suscrito a");
define("LAN_USET_6", "Suscríbete a nuestras listas de correo y/o secciones de este sitio.");
// define("LAN_USET_8", "Firma / Zona horaria");
?>