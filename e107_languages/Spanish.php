<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system - Language File.
|
|     $Source: /cvs_backup/e107_0.8/e107_languages/Spanish/Spanish.php,v $
|     $Revision$
|     $Date$
|     $Author: AdocArg $
+----------------------------------------------------------------------------+
*/

setlocale(LC_ALL, 'es_AR.UTF-8', 'es_AR.utf8', 'es.utf8', 'es');
define("CORE_LC", "es");
define("CORE_LC2", "ar");
// define("TEXTDIRECTION","rtl");
// deprecated: all language packs must be UTF-8
//define("CHARSET", "utf-8");  // for a true multi-language site. :)
define("CORE_LAN1", "Error : no se encuentra el tema.\\n\\nCambia los temas usados en tus preferencias (área de administración) o carga archivos para el tema actual en el servidor.");
//obsolete define("CORE_LAN2'," \\1 escribió:");// "\\1" represents the username.
//obsolete define("CORE_LAN3", "Desactivado archivo adjunto");				// Not used in 0.8
define("CORE_LAN4", "Elimine install.php de su servidor");
define("CORE_LAN5", "Si no lo hace, existe un potencial riesgo de seguridad para su sitio web");
define("CORE_LAN6", "La protección contra floods en este sitio ha sido activada y se le advierte que si continúa solicitando páginas podría ser baneado.");
define("CORE_LAN7", "El núcleo intenta restaurar prefs de copia de seguridad automática.");
define("CORE_LAN8", "Core Prefs Error");
define("CORE_LAN9", "El núcleo no pudo restaurar desde una copia de seguridad automática. Ejecución detenida.");
define("CORE_LAN10", "Cookie corrupta detectada - desconectado.");

// Footer
define("CORE_LAN11", "Tiempo de procesamiento: ");
define("CORE_LAN12", " sec (");
define("CORE_LAN13", "% de eso para consultas) ");
define("CORE_LAN14", "%2.3f cpu sec (%2.2f%% load, %2.3f startup). Reloj: ");
define("CORE_LAN15", "DB consultas: ");
define("CORE_LAN16", "Memoria: ");

// img.bb
define("CORE_LAN17", "[ image disabled ]");
define("CORE_LAN18", "Imagen: ");

define("CORE_LAN_B", "B");
define("CORE_LAN_KB", "kB");
define("CORE_LAN_MB", "MB");
define("CORE_LAN_GB", "GB");
define("CORE_LAN_TB", "TB");

define("EMESSLAN_TITLE_INFO", "Información del sistema");
define("EMESSLAN_TITLE_ERROR", "Error");
define("EMESSLAN_TITLE_SUCCESS", "Éxito");
define("EMESSLAN_TITLE_WARNING", "Advertencia");
define("EMESSLAN_TITLE_DEBUG", "System Debug");

define("LAN_EDIT","Editar");
define("LAN_DELETE","Borrar");
define("LAN_DEFAULT","Default");
define("LAN_MORE", "Más..");
define("LAN_LESS", "..Menos");
define("LAN_READ_MORE", "Leer más..");
define("LAN_GOPAGE", "Ir a la página");
define("LAN_GOTOPAGEX", "Ir a la página [x]");
define("LAN_GO", "Ir");
define("LAN_SUBMIT", "Enviar");
define("LAN_NONE", "ninguno");
define("LAN_WARNING", "Advertencia!");
define("LAN_ERROR", "Error");
define("LAN_ANONYMOUS", "Anónimo");
define("LAN_EMAIL_SUBS", "-email-");
define("LAN_ACTIVE","Activo");
define("LAN_YES", "Sí");
define("LAN_NO", "No");
define("LAN_OK", "OK");
define("LAN_ACTIONS", "Acciones");
define("LAN_THANK_YOU", "Gracias");
define("LAN_CONTINUE", "Continuar");
define("LAN_ENTER", "Entrar");
define("LAN_ENTER_CODE", "Ingresar código");
define("LAN_INVALID_CODE", "Código ingresado incorrecto.");
define("LAN_SEARCH", "Buscar");
define("LAN_VIEW", "Ver");
define("LAN_CLICK_TO_VIEW", "Clic para ver");//TODO elsewhere
define("LAN_SORT", "Ordenar");
define("LAN_ORDER_BY", "Ordenar por");
define("LAN_ASCENDING", "Ascendente");
define("LAN_DESCENDING", "Descendente");
define("LAN_SHARE", "Compartir");
define("LAN_BACK", "Volver");
define("LAN_NAME", "Nombre");
define("LAN_DESCRIPTION", "Descripción");
define("LAN_CANCEL","Cancelar");
define("LAN_DATE","Fecha");
define("LAN_DATE_POSTED", "Fecha de publicación");
define("LAN_POSTED_BY", "Publicado por");
define("LAN_JSCONFIRM","¿Estás seguro?");
define("LAN_IP","IP");
define("LAN_IP_ADDRESS","Dirección IP");
define("LAN_AUTHOR","Autor");
define("LAN_CATEGORY", "Categoría");
define("LAN_GUEST", "Invitado");
define("LAN_NEXT", "Siguiente");
define("LAN_PREVIOUS", "Anterior");
define("LAN_LOGIN", "Iniciar sesión");
define("LAN_LOGOUT", "Cerrar sesión");
define("LAN_SETTINGS", "Configuración");
define("LAN_PASSWORD", "Contraseña");
define("LAN_INCORRECT_PASSWORD", "Contraseña incorrecta");
define("LAN_TYPE", "Tipo");
define("LAN_SCREENSHOT", "Captura de pantalla");
define("LAN_FILE", "Archivo");
define("LAN_YOUTUBE_VIDEO", "Video de Youtube");
define("LAN_YOUTUBE_PLAYLIST", "Lista de reproducción de Youtube");
define("LAN_FILETYPES", "Tipos de archivo");
define("LAN_FILE_NOT_FOUND", "Archivo no encontrado");
define("LAN_FILES","Archivos"); 
define("LAN_SIZE", "Tamaño");
define("LAN_VERSION", "Versión");
define("LAN_DOWNLOAD", "Descargar");
define("LAN_WEBSITE", "Website");
define("LAN_COMMENTS", "Comentarios");
define("LAN_LOCATION", "Ubicación");
define("LAN_NO_RECORDS_FOUND", "No se encontrarón archivos");
define("LAN_RATING", "Calificación");
define("LAN_IMAGE","Imagen");
define("LAN_ABOUT", "Acerca de");
define("LAN_TITLE", "Título");
define("LAN_MESSAGE", "Mensaje");
define("LAN_USER", "Usuario");
define("LAN_EMAIL","Dirección de correo electrónico");
define("LAN_WROTE", "escribió"); // as in John wrote.."  ";
define("LAN_RE_ORDER", "Reordenar");
define("LAN_RELATED", "Relacionado");
define("LAN_CLOSE", "Cerrado");
define("LAN_EXPAND", "Expandir");

define("LAN_ENTER_USRNAME_EMAIL", "Por favor, introducí tu nombre de usuario o correo electrónico"); // admin php hover field admin name
define("LAN_PWD_REQUIRED", "Se requiere contraseña"); // admin php hover field admin password
define("LAN_SHOW", "Mostrar");
define("LAN_GENERATE", "Generar");
define("LAN_SUMMARY", "Resumen");  // TODO   more files use summary replace
define("LAN_REQUIRED_BLANK", "Los campos obligatorios se dejaron en blanco.");
define("LAN_PLEASEWAIT", "Por favor, espere");
define("LAN_CHOOSE_FILE", "Escoge un archivo");

?>
