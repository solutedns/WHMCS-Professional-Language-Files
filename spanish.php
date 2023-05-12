<?php
/**
 *               *** SoluteDNS Professional Edition for WHMCS ***
 *
 * @language	Spanish        
 * @package     solutedns-pro-whmcs
 * @author      NetDistrict <info@netdistrict.net>
 * 
 * Copyright (c) 2018 NetDistrict
 * All rights reserved.
 * */

#### ADMIN ####
// Admin Menu
$_ADDONLANG['admin_menu_overview'] = "Vista general";
$_ADDONLANG['admin_menu_templates'] = "Plantillas";
$_ADDONLANG['admin_menu_settings'] = "Ajustes";
$_ADDONLANG['admin_menu_nameserver'] = "Nombre de servidores";
$_ADDONLANG['admin_menu_tools'] = "Herramientas";
$_ADDONLANG['admin_menu_system'] = "Sistema";
$_ADDONLANG['admin_menu_records'] = "Registros";
$_ADDONLANG['admin_menu_dnssec'] = "DNSsec";
$_ADDONLANG['admin_menu_health'] = "Salud";

// Admin Buttons
$_ADDONLANG['admin_btn_save_changes'] = "Guardar cambios";
$_ADDONLANG['admin_btn_check'] = "Comprobar";
$_ADDONLANG['admin_btn_update_now'] = "Actualizar ahora";

// Admin General
$_ADDONLANG['admin_never'] = "Nunca";

// Admin Overview
$_ADDONLANG['admin_overview_all'] = "Todas";
$_ADDONLANG['admin_overview_domain'] = "Dominio";
$_ADDONLANG['admin_overview_domains'] = "Dominios";
$_ADDONLANG['admin_overview_product'] = "Producto";
$_ADDONLANG['admin_overview_products'] = "Productos";
$_ADDONLANG['admin_overview_standalone'] = "Autónomo";
$_ADDONLANG['admin_overview_reverse'] = "Marcha atrás";

$_ADDONLANG['admin_overview_id'] = "ID";
$_ADDONLANG['admin_overview_client'] = "Cliente";
$_ADDONLANG['admin_overview_date'] = "Fecha";
$_ADDONLANG['admin_overview_log'] = "Registro";
$_ADDONLANG['admin_overview_status'] = "Estado";

$_ADDONLANG['admin_overview_zone_type'] = "Tipo de zona";
$_ADDONLANG['admin_overview_select_type'] = "Seleccionar el tipo de";
$_ADDONLANG['admin_overview_ip_zone'] = "Dirección IP o Nombre de la zona";

$_ADDONLANG['admin_overview_reset_table'] = "Reiniciar Vista General";


// Settings: Template
$_ADDONLANG['admin_settings_template_settings'] = "Plantilla ajustes";
$_ADDONLANG['admin_settings_dns_product'] = "DNS Producto";
$_ADDONLANG['admin_settings_force_template'] = "Plantilla de fuerza";

$_ADDONLANG['admin_settings_dns_product_desc'] = "Activar administración DNS para este producto.";
$_ADDONLANG['admin_settings_force_template_desc'] = "Forzar modelo de producto cuando un registro/transferencia es iniciado simultáneamente.";

// Settings: Records
$_ADDONLANG['admin_settings_allowed_records'] = "Registros permitidos";

$_ADDONLANG['admin_settings_default_soa'] = "Registro por defecto SOA";
$_ADDONLANG['admin_settings_default_hostmaster'] = "Maestro del servidor";
$_ADDONLANG['admin_settings_default_serial'] = "Serie";
$_ADDONLANG['admin_settings_default_refresh'] = "Refrescar";
$_ADDONLANG['admin_settings_default_retry'] = "Volver a intentar";
$_ADDONLANG['admin_settings_default_expire'] = "Caducar";
$_ADDONLANG['admin_settings_default_ttl'] = "Mínimo TTL";
$_ADDONLANG['admin_settings_default_custom_primary'] = "Allow custom primary";

$_ADDONLANG['admin_settings_default_hostmaster_desc'] = "Añadir {domain} para usar el dominio referente como maestro del servidor";
$_ADDONLANG['admin_settings_default_serial_desc'] = "Deje esto por defecto si no está seguro de lo que hace!";
$_ADDONLANG['admin_settings_default_custom_primary_desc'] = "No sobreescribir el valor de nombre de servidor primario SOA con el racimo por defecto";

$_ADDONLANG['admin_settings_record_limits'] = "Límites de registro";
$_ADDONLANG['admin_settings_record_limit'] = "Límite de registro";
$_ADDONLANG['admin_settings_record_limit_desc'] = "Limitar el máximo de registros permitidos en una zona (0=ilimitado).";

$_ADDONLANG['admin_settings_record_select_default'] = "Por defecto (aaaammddcc)";
$_ADDONLANG['admin_settings_record_select_epoch'] = "Época (tiempo Unix)";
$_ADDONLANG['admin_settings_record_select_zero'] = "Último tiempo de registro editado";

// Setttings: Accessibility
$_ADDONLANG['admin_settings_accessibility'] = "Accesibilidad";
$_ADDONLANG['admin_settings_respect_registrar'] = "Respetar registro de módulos";
$_ADDONLANG['admin_settings_force_dns'] = "Redirigir páginas DNS";
$_ADDONLANG['admin_settings_hide_soa'] = "Ocultar registro SOA";
$_ADDONLANG['admin_settings_disable_ns'] = "Deshabilitar registro NS";
$_ADDONLANG['admin_settings_preset_ttl'] = "Usar campo TTL previamente establecido";
$_ADDONLANG['admin_settings_paging'] = "Paginación DNS";
$_ADDONLANG['admin_settings_url_rewrite'] = "Reescribir URL de área de cliente";

$_ADDONLANG['admin_settings_client_zones'] = "Habilitar zonas de cliente";
$_ADDONLANG['admin_settings_zone_limit'] = "Límite de zona";
$_ADDONLANG['admin_settings_allow_subdomains'] = "Allow Subdomain Zones";
$_ADDONLANG['admin_settings_client_template'] = "Habilitar plantillas de cliente";
$_ADDONLANG['admin_settings_client_reverse'] = "Gestión inversa";

$_ADDONLANG['admin_settings_client_toggle_dnssec'] = "Cambiar DNSsec";

$_ADDONLANG['admin_settings_disable_primary'] = "Deshabilitar menú principal";
$_ADDONLANG['admin_settings_disable_management'] = "Deshabilitar menú de gestión";
$_ADDONLANG['admin_settings_disable_sidebar'] = "Desactivar barras laterales.";

$_ADDONLANG['admin_settings_respect_registrar_desc'] = "Respete la administración de funciones DNS de Registrar Módulos.";
$_ADDONLANG['admin_settings_force_dns_desc'] = "Redirect WHMCS DNS Management pages to SoluteDNS.";
$_ADDONLANG['admin_settings_hide_soa_desc'] = "Ocultar el registro SOA a usuarios. Si muestra el registro SOA siempre estará deshabilitado.";
$_ADDONLANG['admin_settings_disable_ns_desc'] = "Cuando estén marcados, los registros de nombre del servidor estarán deshabilitados para los usuarios.";
$_ADDONLANG['admin_settings_preset_ttl_desc'] = "Usar un menú desplegable TTL previamente establecido en lugar de un cuadro de texto.";
$_ADDONLANG['admin_settings_paging_desc'] = "Disponer la paginación para el panel de administración DNS.";
$_ADDONLANG['admin_settings_url_rewrite_desc'] = "Reescribir URL de área de cliente, solicita personalizaciones .htaccess . Dejar vacío para desactivar. Ver: <a class=\"text-info\" href=\"https://docs.solutedns.com/whmcs/professional-edition/getting-started/#customized_url\" target=\"_blank\">Custom URL</a>";

$_ADDONLANG['admin_settings_client_zones_desc'] = "Seleccionar para habilitar gestión de zona para clientes.";
$_ADDONLANG['admin_settings_zone_limit_desc'] = "Limitar las zonas máximas permitiddas para los clientes (0 = ilimitadas=, -1 = ninguna)";
$_ADDONLANG['admin_settings_allow_subdomains_desc'] = "Allow clients to add subdomains as new zone.";
$_ADDONLANG['admin_settings_client_template_desc'] = "Seleccionar para habilitar plantilla por defecto para clientes.";
$_ADDONLANG['admin_settings_client_reverse_desc'] = "Permitir a los clientes administrar nombres de host reversos asignados a direcciones IP";

$_ADDONLANG['admin_settings_client_toggle_dnssec_desc'] = "Permitir a los clientes habilitar/deshabilitar DNSsec.";

$_ADDONLANG['admin_settings_disable_primary_desc'] = "Desactivar la entrada de Administración DNS en el menú del área primaria de cliente.";
$_ADDONLANG['admin_settings_disable_management_desc'] = "Desactivar la entrada de Administración DNS agregada a la barra lateral del dominio y páginas de detalles del producto.";
$_ADDONLANG['admin_settings_disable_sidebar_desc'] = "Desactivar las barras laterales del área de cliente.";

// Setttings: Automation
$_ADDONLANG['admin_settings_automation'] = "Automatización";
$_ADDONLANG['admin_settings_auto_create'] = "Crear zona automáticamente";
$_ADDONLANG['admin_settings_auto_delete'] = "Borrar zona automáticamente";
$_ADDONLANG['admin_settings_auto_delete_remove'] = "Cuando el dominio es borrado en WHMCS.";

$_ADDONLANG['admin_settings_auto_dns_management'] = "Habilitar automáticamente la gestión DNS";
$_ADDONLANG['admin_settings_auto_todo'] = "Añadir automáticamente elementos para hacer";

$_ADDONLANG['admin_settings_auto_health'] = "Verificaciones de salud";

$_ADDONLANG['admin_settings_auto_create_desc'] = "Crear automáticamente una nueva zona para nuevos pedidos de dominios después de realizar pedido de la compra.";
$_ADDONLANG['admin_settings_auto_delete_desc'] = "Borrar automáticamente las zonas de dominios y productos con el estado seleccionado.";
$_ADDONLANG['admin_settings_auto_dns_management_desc'] = "Habilitar automáticamente la gestión DNS WHMCS para zonas creadas recientemente.";
$_ADDONLANG['admin_settings_auto_todo_desc'] = "Añadir elementos para hacer automáticamente cuando se necesite atención del personal.";
$_ADDONLANG['admin_settings_auto_health_desc'] = "Automáticamente desempeñar verificaciones de salud de zona.";

//  Nameserver
$_ADDONLANG['admin_nameserver_database_details'] = "Base de datos primaria PowerDNS";
$_ADDONLANG['admin_nameserver_nameservers'] = "Nombres servidores";
$_ADDONLANG['admin_nameserver_ssh_details'] = "Detalles de DNSsec  SSH2";
$_ADDONLANG['admin_nameserver_dnssec_options'] = "Opciones de DNSSEC";

$_ADDONLANG['admin_nameserver_host'] = "Anfitrión";
$_ADDONLANG['admin_nameserver_port'] = "Puerto";
$_ADDONLANG['admin_nameserver_user'] = "Usuario";
$_ADDONLANG['admin_nameserver_password'] = "Contraseña";
$_ADDONLANG['admin_nameserver_database'] = "Base de datos";
$_ADDONLANG['admin_nameserver_zone_type'] = "Tipo de zona";
$_ADDONLANG['admin_nameserver_nameserver'] = "Nombre servidor";
$_ADDONLANG['admin_nameserver_private_key'] = "Llave privada";

$_ADDONLANG['admin_nameserver_host_db_desc'] = "Dominio o dirección IP del servidor MySQL remoto que contiene las zonas PowerDNS.";
$_ADDONLANG['admin_nameserver_host_ssh_desc'] = "Dominio o dirección IP del servidor remoto que contiene las zonas PowerDNS.";
$_ADDONLANG['admin_nameserver_zone_type_desc'] = "Seleccione el tipo de zona a la que necesita transferir su nombre de servidor.";
$_ADDONLANG['admin_nameserver_port_desc'] = "Puerto MySQL por defecto es 3306.";
$_ADDONLANG['admin_nameserver_nameserver_desc'] = "El nombredeservidor primario también se utilizará en el registro SOA.";
$_ADDONLANG['admin_nameserver_nameserver_leave_empty_desc'] = "Deja campos extra vacío si se utilizan menos nombredeservidor.";
$_ADDONLANG['admin_nameserver_private_key_desc'] = "Introducir clave privada para iniciar en SSH. Dejar el campo de contraseña vacío si no usa contraseña.";

$_ADDONLANG['admin_nameserver_pdns_version'] = "Versión PowerDNS";
$_ADDONLANG['admin_nameserver_enable_dnssec'] = "Habilitar DNSsec";
$_ADDONLANG['admin_nameserver_auto_rectify'] = "Rectificar zona automáticamente";
$_ADDONLANG['admin_nameserver_auto_dnssec'] = "Activar automáticamente DNSsec";
$_ADDONLANG['admin_nameserver_set_nsec3'] = "Establecer NSEC3";
$_ADDONLANG['admin_nameserver_show_client'] = "Mostrar llave al  cliente";

$_ADDONLANG['admin_nameserver_enable_dnssec_desc'] = "Habilitar el soporte DNSsec.";
$_ADDONLANG['admin_nameserver_auto_rectify_desc'] = "Zonas  están obligados a ser rectificados con el fin de continuar operando.";
$_ADDONLANG['admin_nameserver_auto_dnssec_desc'] = "Asegurar automáticamente las zonas de nueva creación.";
$_ADDONLANG['admin_nameserver_set_nsec3_desc'] = "Utilice NSEC3 en lugar de  CNMV por defecto.";
$_ADDONLANG['admin_nameserver_show_client_desc'] = "Mostrar claves DNSSEC a cliente.";

// Tools
$_ADDONLANG['admin_tools_title_mutation'] = "Tablero de mutaciones";
$_ADDONLANG['admin_tools_title_health'] = "Tablero de salud";

$_ADDONLANG['admin_tools_health_stats_zones'] = "Zonas con problemas de salud";
$_ADDONLANG['admin_tools_health_stats_types'] = "Tipos de problemas de salud registrados";
$_ADDONLANG['admin_tools_health_option_open'] = "Problemas abiertos";
$_ADDONLANG['admin_tools_health_option_all'] = "Todas las zonas";
$_ADDONLANG['admin_tools_health_option_report'] = "Informe";

// System
$_ADDONLANG['admin_system_module_version'] = "Módulo Versión";
$_ADDONLANG['admin_system_core_version'] = "Core Versión";
$_ADDONLANG['admin_system_idn_support'] = "Soporte IDN";
$_ADDONLANG['admin_system_cron_status'] = "Cron Estado";
$_ADDONLANG['admin_system_system_logging'] = "Registro del sistema";
$_ADDONLANG['admin_system_maintenance_mode'] = "Modo de mantenimiento";
$_ADDONLANG['admin_system_template'] = "Modelo";
$_ADDONLANG['admin_system_admin_group'] = "Grupo Administrador";

$_ADDONLANG['admin_system_cron_status_run'] = "Último arranque de cron";
$_ADDONLANG['admin_system_cron_status_tasks'] = "Tareas abiertas";

$_ADDONLANG['admin_system_maintenance_mode_desc'] = "Intentar habilitar el modo de mantenimiento.";
$_ADDONLANG['admin_system_system_logging_desc'] = "Intentar habilitar el registro del sistema (solo registra procesos automatizados).";
$_ADDONLANG['admin_system_template_desc'] = "El modelo que desea que SoluteDNS utilice. ¡Sea cuidadoso dado que esto puede impedir la accesibilidad de administrador!";
$_ADDONLANG['admin_system_admin_group_desc'] = "Límite de acceso para preferencias de SoluteDNS para seleccionar grupo administrador.";

$_ADDONLANG['admin_system_license'] = "Licencia";

$_ADDONLANG['admin_system_license_product'] = "Producto";
$_ADDONLANG['admin_system_license_edition'] = "Edición";
$_ADDONLANG['admin_system_license_status'] = "Estado";
$_ADDONLANG['admin_system_license_expires'] = "Caduca";

$_ADDONLANG['admin_system_license_licensed_to'] = "Licenciado a";

$_ADDONLANG['admin_system_license_limit'] = "Zonas con licencia ";
$_ADDONLANG['admin_system_license_addons'] = "Añadidos";
$_ADDONLANG['admin_system_license_valid_domains'] = "Dominios válidos";
$_ADDONLANG['admin_system_license_valid_ips'] = "IP válidas";
$_ADDONLANG['admin_system_license_valid_directory'] = "Directorios válidos";

$_ADDONLANG['admin_system_license_key'] = "Clave de licencia";

$_ADDONLANG['admin_system_license_unlimited'] = "Ilimitado";
$_ADDONLANG['admin_system_license_zones'] = "zonas";

$_ADDONLANG['admin_system_core_not_loaded'] = "¡El Núcleo de SoluteDNS no ha sido cargado! No se puede mostrar información de licencia.";

// Admin Manage
$_ADDONLANG['admin_manage_title_zone'] = "Zona";
$_ADDONLANG['admin_manage_title_client'] = "Cliente";
$_ADDONLANG['admin_manage_title_email'] = "Correo electrónico";

$_ADDONLANG['admin_manage_records_addrecord'] = "Añadir registro";
$_ADDONLANG['admin_manage_records_addtlsa'] = "Asistente TLSA";
$_ADDONLANG['admin_manage_records_addsrv'] = "Asistente SRV";
$_ADDONLANG['admin_manage_records_manage'] = "Gestionar";
$_ADDONLANG['admin_manage_records_applytemplate'] = "Aplicar plantilla";
$_ADDONLANG['admin_manage_records_selecttemplate'] = "Seleccionar plantilla";
$_ADDONLANG['admin_manage_records_importzone'] = "Importar zona";
$_ADDONLANG['admin_manage_records_exportzone'] = "Exportar zona";
$_ADDONLANG['admin_manage_records_deleterecord'] = "Borrar registro";
$_ADDONLANG['admin_manage_records_deleteselected'] = "Borrar seleccionado";
$_ADDONLANG['admin_manage_records_unassignzone'] = "Desasignar zona";
$_ADDONLANG['admin_manage_records_deletezone'] = "Borrar zona";

$_ADDONLANG['admin_manage_dnssec_add'] = "Añadir clave";
$_ADDONLANG['admin_manage_dnssec_rectify'] = "Rectificar zona";
$_ADDONLANG['admin_manage_dnssec_check'] = "Comprobar estado";
$_ADDONLANG['admin_manage_dnssec_nsec'] = "Configurar NSEC";
$_ADDONLANG['admin_manage_dnssec_nsec3'] = "Configurar NSEC3";
$_ADDONLANG['admin_manage_dnssec_reset'] = "Reiniciar DNSsec";
$_ADDONLANG['admin_manage_dnssec_unset'] = "Desconfigurar DNSsec";
$_ADDONLANG['admin_manage_dnssec_reload'] = "Volver a cargar claves";

$_ADDONLANG['admin_manage_health_recheck'] = "Volver a comprobar salud";
$_ADDONLANG['admin_manage_report_date'] = "Reportar fecha";

$_ADDONLANG['admin_manage_text_importzone'] = "Introduzca un archivo de zona para importar. Los registros importados están siendo moderados por el sistema.";
$_ADDONLANG['admin_manage_text_importzoneoverwrite'] = "Sobreescribir zona actual, todos los registros se eliminan antes de la importación.";

// Admin Console
$_ADDONLANG['admin_console_title_updater'] = "Actualizador";
$_ADDONLANG['admin_console_title_mutation'] = "Herramienta de mutación";
$_ADDONLANG['admin_console_title_index'] = "Indexar nombre del servidor";
$_ADDONLANG['admin_console_title_health'] = "Control de salud";

// Admin Messages
$_ADDONLANG['admin_msg_maintenance_title'] = "Modo de mantenimiento activado";
$_ADDONLANG['admin_msg_maintenance_desc'] = "El modo de mantenimiento está activado La gestión DNS está deshabilitada.";

$_ADDONLANG['admin_msg_core_undetected_title'] = "¡Núcleo SoluteDNS no detectado!";
$_ADDONLANG['admin_msg_core_undetected_desc'] = "El Núcleo SoluteDNS no ha sido detectado.";

$_ADDONLANG['admin_msg_license_expire_title'] = "¡Su licencia expira en %s días!";
$_ADDONLANG['admin_msg_license_expire_desc'] = "Su licencia está por expirar, por favor asegúrese de renovarla a tiempo para evitar una interrupción en el servicio. La renovación puede ser automática dependiendo de su método de pago.";

$_ADDONLANG['admin_msg_license_not_activated_title'] = "¡SoluteDNS no está activado!";
$_ADDONLANG['admin_msg_license_not_activated_desc'] = "Por favor verifique su licencia pues SoluteDNS no está activado";

$_ADDONLANG['admin_msg_ns_unavailable_title'] = "¡Nombre de servidor no disponible!";
$_ADDONLANG['admin_msg_ns_unavailable_desc'] = "No se pudo conectar con el nombre del servidor configurado, por favor verifique sus preferencias de nombre del servidor.";

$_ADDONLANG['admin_msg_core_db_error_title'] = "Ha ocurrido un error de base de datos";
$_ADDONLANG['admin_msg_core_ssh_error_title'] = "Ha ocurrido un error de SSH";

$_ADDONLANG['admin_msg_core_db_successful_title'] = "¡Comprobación de Base de datos Completada!";
$_ADDONLANG['admin_msg_core_db_successful_desc'] = "La conexión de base de datos fue probada exitosamente.";

$_ADDONLANG['admin_msg_core_ssh_successful_title'] = "¡Comprobación SSH Completada!";
$_ADDONLANG['admin_msg_core_ssh_successful_desc'] = "La conexión SSH fue probada exitosamente.";


#### CLIENT ####
// Client Menu
$_ADDONLANG['client_menu_overview'] = "Vista general";
$_ADDONLANG['client_menu_template'] = "Plantilla por defecto";
$_ADDONLANG['client_menu_reverse'] = "DNS Inversa";

$_ADDONLANG['client_menu_records'] = "Registros";
$_ADDONLANG['client_menu_dnssec'] = "DNSsec";

$_ADDONLANG['client_menu_secure'] = "Habilitar DNSsec";
$_ADDONLANG['client_menu_unsecure'] = "Deshabilitar DNSsec";

// Client Manage
$_ADDONLANG['client_manage_records_deleteselected'] = "Borrar seleccionado";

// Client Overview
$_ADDONLANG['client_overview_addzonelimit'] = "Puede añadir hasta <strong>%s</strong> zonas.";

// Client Table
$_ADDONLANG['client_table_First'] = "Primero";
$_ADDONLANG['client_table_Last'] = "Último";
$_ADDONLANG['client_table_Next'] = "Siguiente";
$_ADDONLANG['client_table_Previous'] = "Anterior";
$_ADDONLANG['client_table_zeroRecords'] = "No se han encontrado resultados";

$_ADDONLANG['client_table_overview_info'] = "Mostrando _START_ a _END_ de _TOTAL_ dominios";
$_ADDONLANG['client_table_overview_infoEmpty'] = "Mostrando 0 a 0 de 0 dominios";
$_ADDONLANG['client_table_overview_infoFiltered'] = "(filtrado de _MAX_ dominios totales)";
$_ADDONLANG['client_table_overview_lengthMenu'] = "Mostrar _MENU_ entradas";

$_ADDONLANG['client_table_records_emptytable'] = "<h3>Añadir <button type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#dialog_addRecord\" title=\"Agregar Registro\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></button> el primer registro!</h3>";

$_ADDONLANG['client_table_reverse_emptytable'] = "No se han encontrado direcciones IP";

// Client messages
$_ADDONLANG['client_msg_maintenance_title'] = "La gestion DNS no está disponible";
$_ADDONLANG['client_msg_maintenance_desc'] = "La gestión DNS no está disponible temporalmente debido a mantenimiento. Por favor intente de nuevo más tarde!";

$_ADDONLANG['client_msg_access_denied_title'] = "Accceso denegado";
$_ADDONLANG['client_msg_access_denied_desc'] = "No tiene suficientes permisos para acceder a esta zona!";

$_ADDONLANG['client_msg_suspended_title'] = "Zona suspendida";
$_ADDONLANG['client_msg_suspended_desc'] = "Esta zona ha sido deshabilitada. ¡Los registros ya no son visibles para el público!";

$_ADDONLANG['client_msg_system_error_title'] = "Imposible cambiar los ajustes DNS!";
$_ADDONLANG['client_msg_system_error_desc'] = "En este momento es imposible cambiar cualquier ajuste DNS de su domino. Por favor intente de nuevo más tarde. Si este problema persiste por favor contacte con soporte!";

$_ADDONLANG['client_msg_zone_limit_title'] = "¡No se puede agregar la Zona!";
$_ADDONLANG['client_msg_zone_limit_desc'] = "Se ha alcanzado el máximo número de zonas!";


#### GLOBAL ####
// General
$_ADDONLANG['global_general_records'] = "Registros";
$_ADDONLANG['global_general_zones'] = "Zonas";
$_ADDONLANG['global_general_domains'] = "Dominios";
$_ADDONLANG['global_general_domain'] = "Dominio";
$_ADDONLANG['global_general_loading'] = "Cargando…";
$_ADDONLANG['global_general_defaulttemplate'] = "Plantilla por defecto";
$_ADDONLANG['global_general_dnssec_keys'] = "Claves DNSsec";
$_ADDONLANG['global_general_dnssec_ds'] = "Registros DS";
$_ADDONLANG['global_general_health_issues'] = "Errores de Salud";
$_ADDONLANG['global_general_unknown'] = "Desconocido";
$_ADDONLANG['global_general_status'] = "Estado";
$_ADDONLANG['global_general_ip'] = "IP";
$_ADDONLANG['global_general_hostname'] = "Nombre del host";

// Buttons
$_ADDONLANG['global_btn_add'] = "Añadir";
$_ADDONLANG['global_btn_apply'] = "Aplicar";
$_ADDONLANG['global_btn_delete'] = "Borrar";
$_ADDONLANG['global_btn_cancel'] = "Cancelar";
$_ADDONLANG['global_btn_close'] = "Cerrar";
$_ADDONLANG['global_btn_import'] = "Importar";
$_ADDONLANG['global_btn_export'] = "Exportar";
$_ADDONLANG['global_btn_manage'] = "Gestionar";
$_ADDONLANG['global_btn_start'] = "Comienzo";
$_ADDONLANG['global_btn_edit'] = "Editar";

// Status
$_ADDONLANG['global_status_enabled'] = "Activado";
$_ADDONLANG['global_status_disabled'] = "Desactivado";
$_ADDONLANG['global_status_inactive'] = "Inactivo";
$_ADDONLANG['global_status_none'] = "Ninguno";
$_ADDONLANG['global_status_unlimited'] = "Ilimitado";
$_ADDONLANG['global_status_na'] = "N/A";
$_ADDONLANG['global_status_noneavailable'] = "Ninguno disponible";
$_ADDONLANG['global_status_noneregistered'] = "No hay registro";

// DNS Management
$_ADDONLANG['global_dns_id'] = "ID";
$_ADDONLANG['global_dns_name'] = "Nombre";
$_ADDONLANG['global_dns_type'] = "Tipo";
$_ADDONLANG['global_dns_content'] = "Contenido";
$_ADDONLANG['global_dns_prio'] = "Prio";
$_ADDONLANG['global_dns_ttl'] = "TTL";

$_ADDONLANG['global_dns_minute'] = "minuto";
$_ADDONLANG['global_dns_minutes'] = "minutos";
$_ADDONLANG['global_dns_hour'] = "hora";
$_ADDONLANG['global_dns_day'] = "día";

$_ADDONLANG['global_dns_keytag'] = "Etiqueta clave";
$_ADDONLANG['global_dns_flag'] = "Bandera";
$_ADDONLANG['global_dns_algorithm'] = "Algoritmo";
$_ADDONLANG['global_dns_publickey'] = "Clave pública";
$_ADDONLANG['global_dns_status'] = "estado";
$_ADDONLANG['global_dns_digesttype'] = "Tipo de digest";
$_ADDONLANG['global_dns_digest'] = "Digest";
$_ADDONLANG['global_dns_bits'] = "Bits";

$_ADDONLANG['global_dns_service'] = "Servicio";
$_ADDONLANG['global_dns_protocol'] = "Protocolo";
$_ADDONLANG['global_dns_priority'] = "Prioridad";
$_ADDONLANG['global_dns_weight'] = "Peso";
$_ADDONLANG['global_dns_target'] = "Objetivo";
$_ADDONLANG['global_dns_port'] = "Puerto";

$_ADDONLANG['global_dns_usage'] = "Uso";
$_ADDONLANG['global_dns_selector'] = "Selector";
$_ADDONLANG['global_dns_matchingtype'] = "Tipo de concordancia";
$_ADDONLANG['global_dns_certificate'] = "Certificado";

// Headers
$_ADDONLANG['global_head_add_record'] = "Añadir registro";
$_ADDONLANG['global_head_delete_record'] = "Borrar registro";
$_ADDONLANG['global_head_add_zone'] = "Añadir zona";
$_ADDONLANG['global_head_delete_zone'] = "Borrar zona";


// Table
$_ADDONLANG['global_table_loading_data'] = "Carga de datos desde un servidor...";
$_ADDONLANG['global_table_none_available'] = "Ninguno disponible";

// Assistent
$_ADDONLANG['global_assistant_tlsa_pkixta'] = "PKIX-TA: CA Constraint";
$_ADDONLANG['global_assistant_tlsa_pkixee'] = "PKIX-EE: Service Certificate Constraint";
$_ADDONLANG['global_assistant_tlsa_daneta'] = "DANE-TA: Trust Anchor Assertion";
$_ADDONLANG['global_assistant_tlsa_daneee'] = "DANE-EE: Domain Issued Certificate";
$_ADDONLANG['global_assistant_tlsa_fullcert'] = "Use full certificate";
$_ADDONLANG['global_assistant_tlsa_subjectpublickey'] = "Use subject public key";
$_ADDONLANG['global_assistant_tlsa_256hash'] = "SHA-256 Hash";
$_ADDONLANG['global_assistant_tlsa_512hash'] = "SHA-512 Hash";

$_ADDONLANG['global_assistant_tlsa_pkixta_info'] = "Para un certificado CA o clave pública de este certificado que requiere estar en el curso de certificado y debe pasar la validación PKIX (Infraestructura de Clave Pública)";
$_ADDONLANG['global_assistant_tlsa_pkixee_info'] = "Para un certificado o clave pública de este certificado que requiera concordar con el certificado del servidor y pasar la validación PKIX (Infraestructura de Clave Pública)";
$_ADDONLANG['global_assistant_tlsa_daneta_info'] = "Para un certificado CA o clave pública de este certificado que requiera estar en el curso de certificación. El registro es considerado el ancla de confianza.";
$_ADDONLANG['global_assistant_tlsa_daneee_info'] = "Para un certificado o clave pública de este certificado que requiera concordar con el certificado del servidor.";
$_ADDONLANG['global_assistant_tlsa_certificate_info'] = "Inserte formato PEM certificado X.509.";

$_ADDONLANG['global_assistant_tlsa_cert_expired_title'] = "Certificado inválido";
$_ADDONLANG['global_assistant_tlsa_cert_expired_desc'] = "El Certificado que usted insertó ha expirado o es inválido y no puede ser usado.";

// Messages
$_ADDONLANG['global_msg_changes_saved_title'] = "¡Se han guardado los cambios!";
$_ADDONLANG['global_msg_changes_saved_desc'] = "Todos los cambios han sido guardados con éxito.";
$_ADDONLANG['global_msg_changes_saved_exception'] = "Se han guardado los cambios exitosamente pero los campos marcados fueron ignorados.";

$_ADDONLANG['global_msg_changes_unable_title'] = "¡No pudieron guardarse los cambios!";
$_ADDONLANG['global_msg_changes_unable_desc'] = "No se pudo guardar los cambios, revise los campos marcados.";

$_ADDONLANG['global_msg_invalid_request_title'] = "Solicitud inválida";
$_ADDONLANG['global_msg_invalid_request_desc'] = "El sistema podría no procesar su solicitud ya que parece ser inválida.";

$_ADDONLANG['global_msg_expected_error_title'] = "Se han encontrado múltiples registros, imposible completar la acción!";

$_ADDONLANG['global_msg_unexpected_error_title'] = "Error inesperado";
$_ADDONLANG['global_msg_unexpected_error_desc'] = "El Sistema no pudo procesar su solicitud.";

$_ADDONLANG['global_msg_unauthorized_title'] = "No autorizado";
$_ADDONLANG['global_msg_unauthorized_desc'] = "No está autorizado para realizar esta operación.";

$_ADDONLANG['global_msg_dns_error_occurred'] = "Ha ocurrido un error mientras se procesaba su solicitud";
$_ADDONLANG['global_msg_dns_error_occurred_desc'] = "Desafortunadamente no podemos procesar su solicitud. <br />Por favor contacte a Soporte Técnico si desea más asistencia.";

$_ADDONLANG['global_msg_dns_record_error_title'] = "Imposible hacer cambios";

$_ADDONLANG['global_msg_client_not_found_title'] = "Cliente no encontrado!";
$_ADDONLANG['global_msg_client_not_found_desc'] = "El cliente no ha sido encontrado. Imposible proceder.";

$_ADDONLANG['global_msg_zone_not_found_title'] = "Zona no Encontrada";
$_ADDONLANG['global_msg_zone_not_found_desc'] = "La zona no pudo ser encontrada.";

$_ADDONLANG['global_msg_reverse_zone_invalid_title'] = "Nombre reverso inválido ";
$_ADDONLANG['global_msg_reverse_zone_invalid_desc'] = "El nombre de zona parece ser inválido como zona reversa.";

$_ADDONLANG['global_msg_ip_invalid_title'] = "Dirección IP inválida";
$_ADDONLANG['global_msg_ip_invalid_desc'] = "La dirección IP parece ser inválida.";

$_ADDONLANG['global_msg_hostname_invalid_title'] = "Nombre del host inválido";
$_ADDONLANG['global_msg_hostname_invalid_desc'] = "El nombre de host dado parece ser inválido";

$_ADDONLANG['global_msg_reverse_updated_title'] = "Actualizado el nombre de Host Reverso";
$_ADDONLANG['global_msg_reverse_updated_desc'] = "El nombre reverso del Host ha sido actualizado exitosamente.";

$_ADDONLANG['global_msg_dns_record_added_title'] = "El registro ha sido añadido!";
$_ADDONLANG['global_msg_dns_record_added_desc'] = "Se ha añadido un nuevo registro con éxito.";

$_ADDONLANG['global_msg_dns_record_edited_title'] = "El registro ha sido editado!";
$_ADDONLANG['global_msg_dns_record_edited_desc'] = "Los registros cambiados han sido guardados con éxito.";

$_ADDONLANG['global_msg_dns_record_toggled_title'] = "El registro ha sido %s!";
$_ADDONLANG['global_msg_dns_record_toggled_desc'] = "El registro ha sido %s con éxito.";

$_ADDONLANG['global_msg_dns_record_deleted_title'] = "El registro ha sido borrado!";
$_ADDONLANG['global_msg_dns_record_deleted_desc'] = "El registro ha sido borrado con éxito.";

$_ADDONLANG['global_msg_dns_record_select_deleted_title'] = "Los registros %d han sido eliminados";
$_ADDONLANG['global_msg_dns_record_select_deleted_desc'] = "Los registros seleccionados han siso eliminados exitosamente.";

$_ADDONLANG['global_msg_dns_record_select_no_deleted_title'] = "No se ha eliminado registro alguno";
$_ADDONLANG['global_msg_dns_record_select_no_deleted_desc'] = "Los registros seleccionados no fueron eliminados o no hubo registros seleccionados correctamente para su eliminación.";

$_ADDONLANG['global_msg_dns_sec_rectified_title'] = "Zona Rectificada ";
$_ADDONLANG['global_msg_dns_sec_rectified_desc'] = "La zona ha sido rectificada exitosamente.";

$_ADDONLANG['global_msg_dns_sec_nsec_title'] = "NSEC Establecido";
$_ADDONLANG['global_msg_dns_sec_nsec_desc'] = "El NSEC ha sido establecido satisfactoriamente para esta zona";

$_ADDONLANG['global_msg_dns_sec_nsec3_title'] = "NSEC3 establecido";
$_ADDONLANG['global_msg_dns_sec_nsec3_desc'] = "El NSEC3 ha sido establecido exitosamente en esta zona.";

$_ADDONLANG['global_msg_dns_sec_reload_title'] = "Claves obtenidas eliminadas";
$_ADDONLANG['global_msg_dns_sec_reload_desc'] = "Las claves DNSsec obtenidas han sido eliminadas.";

$_ADDONLANG['global_msg_dns_sec_reset_title'] = "Claves reseteadas";
$_ADDONLANG['global_msg_dns_sec_reset_desc'] = "Las claves DNSsec han sido reseteadas.";

$_ADDONLANG['global_msg_dns_sec_unset_title'] = "DNSsec desmontado";
$_ADDONLANG['global_msg_dns_sec_unset_desc'] = "El DNSsec ha sido desmontado en esta sona";

$_ADDONLANG['global_msg_dns_sec_addkey_title'] = "Clave de DNSsec agregada";
$_ADDONLANG['global_msg_dns_sec_addkey_desc'] = "Una nueva clave de DNSsec ha sido agregada exitosamente.";

$_ADDONLANG['global_msg_dns_sec_activatekey_title'] = "Clave de DNSsec Activada";
$_ADDONLANG['global_msg_dns_sec_activatekey_desc'] = "Una Clave de DNSsec ha sido activada exitosamente.";

$_ADDONLANG['global_msg_dns_sec_deactivatekey_title'] = "Clave de DNSsec Desactivada";
$_ADDONLANG['global_msg_dns_sec_deactivatekey_desc'] = "Una clave de DNSsec ha sido desactivada exitosamente.";

$_ADDONLANG['global_msg_dns_sec_deletekey_title'] = "Clave de DNSsec Eliminada";
$_ADDONLANG['global_msg_dns_sec_deletekey_desc'] = "Una clave de DNSsec ha sido eliminada exitosamente.";

$_ADDONLANG['global_msg_dns_health_reload_title'] = "Estado de Salud Renovado";
$_ADDONLANG['global_msg_dns_health_reload_desc'] = "El estado de salud obtenido ha sido renovado.";

$_ADDONLANG['global_msg_dns_template_apply_title'] = "Modelo DNS aplicado";
$_ADDONLANG['global_msg_dns_template_apply_desc'] = "El modelo DNS seleccionado ha sido aplicdo a esta zona.";

$_ADDONLANG['global_msg_dns_zone_created_title'] = "Zona %s creada";
$_ADDONLANG['global_msg_dns_zone_created_desc'] = "La Zona %s ha sido creada exitosamente.";

$_ADDONLANG['global_msg_dns_zone_unassigned_title'] = "Zona %s sin asignar";
$_ADDONLANG['global_msg_dns_zone_unassigned_desc'] = "La zona %s ha sido sin asignar exitosamente.";

$_ADDONLANG['global_msg_dns_zone_deleted_title'] = "Zona %s eliminada";
$_ADDONLANG['global_msg_dns_zone_deleted_desc'] = "La zona %s ha sido eliminada exitosamente.";

$_ADDONLANG['global_msg_dns_slave_title'] = "Zona esclava";
$_ADDONLANG['global_msg_dns_slave_desc'] = "Esta zona parece ser una zona esclava y no debería ser editada directamente";

$_ADDONLANG['global_msg_dns_nozone_title'] = "Zona no existe";
$_ADDONLANG['global_msg_dns_nozone_desc'] = "La Zona que está intentando administrar no existe.";
$_ADDONLANG['global_msg_dns_nozonetemplate_desc'] = "Aplique un modelo para crear esta zona.";

// Modals
$_ADDONLANG['global_text_delete_record'] = "Está seguro de que desea borrar este registro?";
$_ADDONLANG['global_text_delete_zone'] = "Está seguro de que desea borrar esta zona?";

// Core Error Description
$_ADDONLANG['global_error_3000'] = "La Zona ya existe.";
$_ADDONLANG['global_error_3001'] = "La Zona no pudo ser encontrada";
$_ADDONLANG['global_error_3002'] = "Zona inválida con el nombre introducido";
$_ADDONLANG['global_error_3003'] = "Zona esclava no puede ser editada directamente.";
$_ADDONLANG['global_error_3004'] = "No se ha introducido un nombre de zona";

$_ADDONLANG['global_error_4000'] = "El Máximo de registros permitidos ha sido alcanzado.";

$_ADDONLANG['global_error_5000'] = "Falla de licencia, ver fundamento de licencia retornada para resolver este problema.";
$_ADDONLANG['global_error_5001'] = "La base de datos del nombre del servidor no está disponible.";
$_ADDONLANG['global_error_5002'] = "El máximo de zonas licenciadas ha sido alcanzado.";

$_ADDONLANG['global_error_6000'] = "No se puede ingresar o conectar al servicio SSH.";
$_ADDONLANG['global_error_6001'] = "Se introdujo una sesion SSH incorrecta.";
$_ADDONLANG['global_error_6002'] = "Ha ocurrido un error SSH: {error-message}";
$_ADDONLANG['global_error_6003'] = "No se pudo alcanzar la zona segura";

$_ADDONLANG['global_error_7000'] = "Uno o más nombres de servidor fallaron en reportarse.";
$_ADDONLANG['global_error_7001'] = "No todos los nombres de servidor acceden al serial SOA para esta zona.";
$_ADDONLANG['global_error_7002'] = "El registrador devolvió uno o más nombres de servidor desconocidos.";
$_ADDONLANG['global_error_7003'] = "Existen registros NS en esta zona que no son conocidos por el registrador.";
$_ADDONLANG['global_error_7004'] = "Existen uno o más nombres de servidor que no parecen autoritativos para esta zona.";
$_ADDONLANG['global_error_7005'] = "Al parecer el dominio está usando un diferente racimo DNS";
$_ADDONLANG['global_error_7006'] = "Existen uno o más registro(s) con errores en esta zona.";
$_ADDONLANG['global_error_7007'] = "Existe uno o más registro(s) con advertencias en esta zona.";

// Core DNS Validation
$_ADDONLANG['global_validation_NO_DATABASE'] = "La validación no es posible. Conexión a la base de datos no disponible.";
$_ADDONLANG['global_validation_ZONE_NOT_FOUND'] = "La zona no se ha encontrado. Imposible llevar a cabo la acción.";
$_ADDONLANG['global_validation_RECORD_NOT_FOUND'] = "No se ha encontrado registro.";
$_ADDONLANG['global_validation_DOMAIN_NOT_IN_NAME'] = "El campo de nombre debe contener el nombre del dominio.";
$_ADDONLANG['global_validation_ZONE_NAME_INVALID'] = "El Nombre de la zona no es un FQHN.";
$_ADDONLANG['global_validation_INVALID_FQHN'] = "Este registro debe contener un nombre de host válido, no debe acabar en punto (.).";
$_ADDONLANG['global_validation_NOT_UNIQUE'] = "Ya existe un registro similar.";
$_ADDONLANG['global_validation_NON_ALIAS_TARGET'] = "No pudere referir un registro NS o MX a un registro CNAME.";
$_ADDONLANG['global_validation_TYPE_EMPTY'] = "El tipo de registro no puede estar vacío.";
$_ADDONLANG['global_validation_INVALID_TYPE'] = "El tipo de registro no se reconoce.";
$_ADDONLANG['global_validation_TYPE_UNALLOWED'] = "El sistema podría no procesar su solicitud ya que el tipo de registro no está permitido.";
$_ADDONLANG['global_validation_INVALID_TTL'] = "El valor TTL debe ser numérico.";
$_ADDONLANG['global_validation_CONTENT_TOO_LONG'] = "El contenido de valor introucido es demasiado largo y no puede contener más de 4096 caracteres.";
$_ADDONLANG['global_validation_INVALID_IPV4'] = "La dirección IPv4 parece no ser válida.";
$_ADDONLANG['global_validation_INVALID_IPV6'] = "La dirección IPv6 parece no ser válida. Las direcciones IPv4 en notación IPv6 no están soportadas.";
$_ADDONLANG['global_validation_RECORD_NO_PRIORITY'] = "Un registro MX requiere especificar una prioridad numérica.";
$_ADDONLANG['global_validation_RECORD_INVALID_PRIORITY'] = "Un registro MX requiere especificar una prioridad numérica.";
$_ADDONLANG['global_validation_INVALID_ARPA'] = "Nombre inverso no válido.";
$_ADDONLANG['global_validation_SOA_PARTS_MISSING'] = "El registro SOA debe contener: {primary-ns} {hostmaster} {serial} {refresh} {retry} {expire} {default_ttl}";
$_ADDONLANG['global_validation_SOA_PART_0_INVALID'] = "El dominio del nombre de servidor principal no es válido.";
$_ADDONLANG['global_validation_SOA_PART_1_INVALID'] = "La dirección de correo electrónico del maestro del servidor no es válido.";
$_ADDONLANG['global_validation_SOA_PART_INVALID'] = "SOA récord parte %s debe ser numérico.";
$_ADDONLANG['global_validation_INVALID_NOT_QUOTED'] = "El contenido debe ser citado (\").";
$_ADDONLANG['global_validation_NAPTR_PARTS_MISSING'] = "Un registro NAPTR debe contener (incluyendo las comillas y finales de puntos): {order} {preference} \"{flags}\" \"{service}\" \"{regexp}\" reemplazo.";
$_ADDONLANG['global_validation_NAPTR_PART_INVALID'] = "La parte 1 del registro debe ser numérica.";
$_ADDONLANG['global_validation_NAPTR_PART_QUOTE_INVALID'] = "La parte 2 del registro debe ser citada.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAGS_INVALID'] = "La parte 2 del registro contiene caracteres inválidos. Esta parte solo puede contener caracteres alfanuméricos.";
$_ADDONLANG['global_validation_NAPTR_PART_EX_FLAGS_INVALID'] = "La parte 2 del registro contiene demasiadas banderas (S, A, U) Solamente se puede utilizar una cada vez.";
$_ADDONLANG['global_validation_NAPTR_PART_TERMINAL_FLAG_INVALID'] = "Un SERVICIO (parte 3 del registro) debe especificarse si las banderas incluyen una bandera terminal.";
$_ADDONLANG['global_validation_NAPTR_PART_SERVICE_INVALID'] = "SERVICIO (parte 3 del registro) parece ser inválido.";
$_ADDONLANG['global_validation_NAPTR_PART_DELIMITER_INVALID'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. El delimitador no puede ser: 'i', '\\' o ser un dígito.";
$_ADDONLANG['global_validation_NAPTR_PART_MISSING_INVALID'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. No se han especificado todas las partes necesarias.";
$_ADDONLANG['global_validation_NAPTR_PART_BACKREF_INVALID'] = "La expresión regular de reemplazo POSIX (parte 4 del registro) es inválida. Sólo se puede utilizar una referencia hacia atrás, y debe ser como: '\\1'.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAG_INVALID'] = "La bandera de expresiones regulares POSIX (parte 5 del registro ) es inválida. Opcionalmente puede contener 'i', o nada en absoluto.";
$_ADDONLANG['global_validation_NAPTR_PART_EMPTY_INVALID'] = "La parte 5 del registro es inválida y debe ser un puntero de registro o un punto simple.";
$_ADDONLANG['global_validation_NAPTR_PART_SIM_INVALID'] = "Las variables de sustitución y de expresiones regulares (parte 5 del registro) no pueden utilizarse simultáneamente.";
$_ADDONLANG['global_validation_NAPTR_PART_REPLACEMENT_INVALID'] = "La variable de sustitución (parte 5 del registro) debe ser  '.' o un dominio válido.";
$_ADDONLANG['global_validation_RP_PARTS_MISSING'] = "Los registros RP deben tener: {mailbox name} {more info pointer}";
$_ADDONLANG['global_validation_RP_PART_0_INVALID'] = "El nombre de buzón de correo debe tener una dirección de correo electrónico con el signo arroba (@) reemplazado por un punto (.).";
$_ADDONLANG['global_validation_RP_PART_1_INVALID'] = "El puntero de más información debe ser un nombre de dominio válido.";
$_ADDONLANG['global_validation_TLSA_PARTS_MISSING'] = "Un registro TLSA debe contener: {usage} {selector} {type} {fingeprint}.";
$_ADDONLANG['global_validation_TLSA_PART_0_INVALID'] = "O bien debe proporcionarse un campo de uso: 0 (PKIX-TA), 1 (PKIX-EE), 2 (DANE-TA) o 3 (DANE-EE).";
$_ADDONLANG['global_validation_TLSA_PART_1_INVALID'] = "O bien debe proporcionarse un campo selector: 0 (Coincidencia de certificado completo) o 1 (Coincidencia solamente en información de clave pública sujeto).";
$_ADDONLANG['global_validation_TLSA_PART_2_INVALID'] = "O bien debe proporcionarse un campo de tipo coincidente: 0 (Coincidencia exacta), 1 (SHA-256 hash) o 2 (SHA-512 hash).";
$_ADDONLANG['global_validation_TLSA_PART_3_INVALID'] = "Debe proporcionarse una huella SHA-256 con 64 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validation_TLSA_PART_4_INVALID'] = "Debe proporcionarse una huella SHA-512 con 128 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validation_CAA_PARTS_MISSING'] = "Registros CAA deben tener: {flag} {tag} {value}.";
$_ADDONLANG['global_validation_CAA_PART_0_INVALID'] = "La bandera (parte 1) debe ser numérica y entre 0-255.";
$_ADDONLANG['global_validation_CAA_PART_1_INVALID'] = "La etiqueta (parte 2) debe ser: issue, issuewild, o iodef.";
$_ADDONLANG['global_validation_CAA_PART_2_INVALID'] = "El valor (parte 3) debe estar entre comillas.";
$_ADDONLANG['global_validation_SSHFP_PARTS_MISSING'] = "Un registro SSHFP debe contener: {algorithm} {fp-type} {fingeprint}";
$_ADDONLANG['global_validation_SSHFP_PART_O_INVALID'] = "O bien debe proporcionarse un algoritmo: 1 (RSA), 2 (DSA) o 3 (ECDSA).";
$_ADDONLANG['global_validation_SSHFP_PART_1_INVALID'] = "O bien debe proporcionarse como tipo FP: 1 (SHA-1) o 2 (SHA-256).";
$_ADDONLANG['global_validation_SSHFP_PART_2_INVALID'] = "Debe proporcionarse una huella SHA-1 con 40 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validation_SSHFP_PART_3_INVALID'] = "Debe proporcionarse una huella SHA-256 con 64 caracteres ASCII hexadecimales.";
$_ADDONLANG['global_validation_SRV_MISSING_PRIORITY'] = "Debe proporcionarse una prioridad.";
$_ADDONLANG['global_validation_SRV_PARTS_MISSING'] = "El registro SRV debe contener: {weight} {port} {service}";
$_ADDONLANG['global_validation_SRV_PART_WEIGHT_INVALID'] = "El peso (parte 1) debe ser numérico.";
$_ADDONLANG['global_validation_SRV_PART_PORT_INVALID'] = "El puerto (parte 2) debe ser numérico.";
$_ADDONLANG['global_validation_SRV_PART_SERVICE_INVALID'] = "Un registro SRV debe contener un dominio válido como servicio.";
$_ADDONLANG['global_validation_HINFO_INVALID'] = "El contenido del campo HINFO contiene un valor inválido.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_FLAG'] = "La Bandera es inválida";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_BITS'] = "Los Bits son inválidos";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_ALGORITHM'] = "El Algoritmo es inválido";

// NO JAVASCRIPT
$_ADDONLANG['nojavascript_title'] = "JavaScript Deshabilitado";
$_ADDONLANG['nojavascript_desc'] = "Esta página requiere que JavaScript esté habilitado para funcionar apropiadamente. Por favor habilite JavaScript en su navegador para continuar.";


// Override File
if (file_exists(dirname(__FILE__) . '/override/spanish.php')) {
	include dirname(__FILE__) . '/override/spanish.php';
}
