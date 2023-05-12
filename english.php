<?php

/**
 *               *** SoluteDNS Professional Edition for WHMCS ***
 *
 * @language	English        
 * @package     solutedns-pro-whmcs
 * @author      NetDistrict <info@netdistrict.net>
 * 
 * Copyright (c) 2018 NetDistrict
 * All rights reserved.
 * */

#### ADMIN ####
// Admin Menu
$_ADDONLANG['admin_menu_overview'] = "Overview";
$_ADDONLANG['admin_menu_templates'] = "Templates";
$_ADDONLANG['admin_menu_settings'] = "Settings";
$_ADDONLANG['admin_menu_nameserver'] = "Nameserver";
$_ADDONLANG['admin_menu_tools'] = "Tools";
$_ADDONLANG['admin_menu_system'] = "System";
$_ADDONLANG['admin_menu_records'] = "Records";
$_ADDONLANG['admin_menu_dnssec'] = "DNSsec";
$_ADDONLANG['admin_menu_health'] = "Health";

// Admin Buttons
$_ADDONLANG['admin_btn_save_changes'] = "Save Changes";
$_ADDONLANG['admin_btn_check'] = "Check";
$_ADDONLANG['admin_btn_update_now'] = "Update Now";

// Admin General
$_ADDONLANG['admin_never'] = "Never";

// Admin Overview
$_ADDONLANG['admin_overview_all'] = "All";
$_ADDONLANG['admin_overview_domain'] = "Domain";
$_ADDONLANG['admin_overview_domains'] = "Domains";
$_ADDONLANG['admin_overview_product'] = "Product";
$_ADDONLANG['admin_overview_products'] = "Products";
$_ADDONLANG['admin_overview_standalone'] = "Standalone";
$_ADDONLANG['admin_overview_reverse'] = "Reverse";

$_ADDONLANG['admin_overview_id'] = "ID";
$_ADDONLANG['admin_overview_client'] = "Client";
$_ADDONLANG['admin_overview_date'] = "Date";
$_ADDONLANG['admin_overview_log'] = "Log";
$_ADDONLANG['admin_overview_status'] = "Status";

$_ADDONLANG['admin_overview_zone_type'] = "Zone Type";
$_ADDONLANG['admin_overview_select_type'] = "Select Type";
$_ADDONLANG['admin_overview_ip_zone'] = "IP Address or Zone Name";


// Settings: Template
$_ADDONLANG['admin_settings_template_settings'] = "Template Settings";
$_ADDONLANG['admin_settings_dns_product'] = "DNS Product";
$_ADDONLANG['admin_settings_force_template'] = "Force Template";

$_ADDONLANG['admin_settings_dns_product_desc'] = "Enable DNS Management for this product.";
$_ADDONLANG['admin_settings_force_template_desc'] = "Force product template when a registration/transfer is initated simultaneously.";

// Settings: Records
$_ADDONLANG['admin_settings_allowed_records'] = "Allowed Records";

$_ADDONLANG['admin_settings_default_soa'] = "Default SOA";
$_ADDONLANG['admin_settings_default_hostmaster'] = "Hostmaster";
$_ADDONLANG['admin_settings_default_serial'] = "Serial";
$_ADDONLANG['admin_settings_default_refresh'] = "Refresh";
$_ADDONLANG['admin_settings_default_retry'] = "Retry";
$_ADDONLANG['admin_settings_default_expire'] = "Expire";
$_ADDONLANG['admin_settings_default_ttl'] = "TTL";
$_ADDONLANG['admin_settings_default_custom_primary'] = "Custom Primary";

$_ADDONLANG['admin_settings_default_hostmaster_desc'] = "Add {domain} to use the concerning domain as hostmaster.";
$_ADDONLANG['admin_settings_default_serial_desc'] = "Leave this in default if you are not sure what this does!";
$_ADDONLANG['admin_settings_default_custom_primary_desc'] = "Do not overwrite the primary nameserver SOA value with the cluster default.";

$_ADDONLANG['admin_settings_record_limits'] = "Record Limits";
$_ADDONLANG['admin_settings_record_limit'] = "Record Limit";
$_ADDONLANG['admin_settings_record_limit_desc'] = "Limit the maximum records allowed in a zone (0 = unlimited).";

$_ADDONLANG['admin_settings_record_select_default'] = "Default (yyyymmddcc)";
$_ADDONLANG['admin_settings_record_select_epoch'] = "Epoch (Unix time)";
$_ADDONLANG['admin_settings_record_select_zero'] = "Last edited record time";

// Setttings: Accessibility
$_ADDONLANG['admin_settings_accessibility'] = "Accessibility";
$_ADDONLANG['admin_settings_respect_registrar'] = "Respect Registrar Modules";
$_ADDONLANG['admin_settings_force_dns'] = "Redirect DNS Pages";
$_ADDONLANG['admin_settings_hide_soa'] = "Hide SOA Record";
$_ADDONLANG['admin_settings_disable_ns'] = "Disable NS Record";
$_ADDONLANG['admin_settings_preset_ttl'] = "Use Pre-set TTL field";
$_ADDONLANG['admin_settings_paging'] = "DNS Pagination";
$_ADDONLANG['admin_settings_url_rewrite'] = "Rewrite client area URL";

$_ADDONLANG['admin_settings_client_zones'] = "Enable Client Zones";
$_ADDONLANG['admin_settings_zone_limit'] = "Default Zone Limit";
$_ADDONLANG['admin_settings_allow_subdomains'] = "Allow Subdomains";
$_ADDONLANG['admin_settings_client_template'] = "Client Template";
$_ADDONLANG['admin_settings_client_reverse'] = "Reverse Management";

$_ADDONLANG['admin_settings_client_toggle_dnssec'] = "Toggle DNSsec";

$_ADDONLANG['admin_settings_disable_primary'] = "Disable Primary Menu Entry";
$_ADDONLANG['admin_settings_disable_management'] = "Disable Management Menu Entry";
$_ADDONLANG['admin_settings_disable_sidebar'] = "Disable Sidebars";

$_ADDONLANG['admin_settings_respect_registrar_desc'] = "Respect the DNS Management feature of Registrar Modules.";
$_ADDONLANG['admin_settings_force_dns_desc'] = "Redirect WHMCS DNS Management pages to SoluteDNS.";
$_ADDONLANG['admin_settings_hide_soa_desc'] = "Hide the SOA record for users. If you show the SOA record it will always be disabled.";
$_ADDONLANG['admin_settings_disable_ns_desc'] = "When ticked, the nameserver records will be disabled for users.";
$_ADDONLANG['admin_settings_preset_ttl_desc'] = "Use a pre-set TTL dropdown menu instead of a textbox.";
$_ADDONLANG['admin_settings_paging_desc'] = "Enable pagination for the DNS Management table.";
$_ADDONLANG['admin_settings_url_rewrite_desc'] = "Rewrite the client area URL, requires .htaccess customizations. Leave empty to disable. See: <a class=\"text-info\" href=\"https://docs.solutedns.com/whmcs/professional-edition/getting-started/#customized_url\" target=\"_blank\">Custom URL</a>";

$_ADDONLANG['admin_settings_client_zones_desc'] = "Select to enable zone management for clients.";
$_ADDONLANG['admin_settings_zone_limit_desc'] = "Limit the default maximum zones allowed for clients. (0 = unlimited, -1 = none)";
$_ADDONLANG['admin_settings_allow_subdomains_desc'] = "Allow clients to add subdomains as new zone.";
$_ADDONLANG['admin_settings_client_template_desc'] = "Select to enable the default template for clients.";
$_ADDONLANG['admin_settings_client_reverse_desc'] = "Allow clients to manage reverse hostnames for assigned IP adresses.";

$_ADDONLANG['admin_settings_client_toggle_dnssec_desc'] = "Allow clients to enable/disable DNSsec.";

$_ADDONLANG['admin_settings_disable_primary_desc'] = "Disable the DNS Management entry in the primary client area menu.";
$_ADDONLANG['admin_settings_disable_management_desc'] = "Disable the DNS Management entry added to the sidebar of domain and productdetails pages.";
$_ADDONLANG['admin_settings_disable_sidebar_desc'] = "Disable the client area sidebars.";

// Setttings: Automation
$_ADDONLANG['admin_settings_automation'] = "Automation";
$_ADDONLANG['admin_settings_auto_create'] = "Auto create zone";
$_ADDONLANG['admin_settings_auto_delete'] = "Auto delete zone";
$_ADDONLANG['admin_settings_auto_delete_remove'] = "When domain is removed in WHMCS.";

$_ADDONLANG['admin_settings_auto_dns_management'] = "Auto enable DNS Management";
$_ADDONLANG['admin_settings_auto_todo'] = "Auto add to-do items";

$_ADDONLANG['admin_settings_auto_health'] = "Health Checks";

$_ADDONLANG['admin_settings_auto_create_desc'] = "Automatically create a new zone for new domain orders after shopping cart checkout.";
$_ADDONLANG['admin_settings_auto_delete_desc'] = "Automatically delete zones of domains and products with selected state:";
$_ADDONLANG['admin_settings_auto_dns_management_desc'] = "Automatically enable WHMCS DNS Management for newly created zones.";
$_ADDONLANG['admin_settings_auto_todo_desc'] = "Automatically add to-do items when staff attention is required.";
$_ADDONLANG['admin_settings_auto_health_desc'] = "Automatically perform zone health checks.";

//  Nameserver
$_ADDONLANG['admin_nameserver_database_details'] = "Primary PowerDNS Database";
$_ADDONLANG['admin_nameserver_nameservers'] = "Nameservers";
$_ADDONLANG['admin_nameserver_ssh_details'] = "DNSsec SSH2 Details";
$_ADDONLANG['admin_nameserver_dnssec_options'] = "DNSsec Options";

$_ADDONLANG['admin_nameserver_host'] = "Host";
$_ADDONLANG['admin_nameserver_port'] = "Port";
$_ADDONLANG['admin_nameserver_user'] = "User";
$_ADDONLANG['admin_nameserver_password'] = "Password";
$_ADDONLANG['admin_nameserver_database'] = "Database";
$_ADDONLANG['admin_nameserver_zone_type'] = "Zone type";
$_ADDONLANG['admin_nameserver_nameserver'] = "Nameserver";
$_ADDONLANG['admin_nameserver_private_key'] = "Private Key";

$_ADDONLANG['admin_nameserver_host_db_desc'] = "Domain or IP of the remote MySQL server containing the PowerDNS Zones.";
$_ADDONLANG['admin_nameserver_host_ssh_desc'] = "Domain or IP of the remote server containing the PowerDNS Zones.";
$_ADDONLANG['admin_nameserver_zone_type_desc'] = "Select the zone type, you need for zone transfer on your nameserver.";
$_ADDONLANG['admin_nameserver_port_desc'] = "The default port is ";
$_ADDONLANG['admin_nameserver_nameserver_desc'] = "The primary nameserver will also be used in the SOA record.";
$_ADDONLANG['admin_nameserver_nameserver_leave_empty_desc'] = "Leave extra fields empty if less nameservers are used.";
$_ADDONLANG['admin_nameserver_private_key_desc'] = "Enter private key to login to SSH. Leave the password field empty when no password is used.";

$_ADDONLANG['admin_nameserver_pdns_version'] = "PowerDNS version";
$_ADDONLANG['admin_nameserver_enable_dnssec'] = "Enable DNSsec";
$_ADDONLANG['admin_nameserver_auto_rectify'] = "Auto rectify zones";
$_ADDONLANG['admin_nameserver_auto_dnssec'] = "Auto enable DNSsec";
$_ADDONLANG['admin_nameserver_set_nsec3'] = "Set NSEC3";
$_ADDONLANG['admin_nameserver_show_client'] = "Show key to client";

$_ADDONLANG['admin_nameserver_enable_dnssec_desc'] = "Enable DNSsec support.";
$_ADDONLANG['admin_nameserver_auto_rectify_desc'] = "Zone's are required to be rectified in order to continue operating.";
$_ADDONLANG['admin_nameserver_auto_dnssec_desc'] = "Automatically secure newly created zones.";
$_ADDONLANG['admin_nameserver_set_nsec3_desc'] = "Use NSEC3 instead of the default NSEC.";
$_ADDONLANG['admin_nameserver_show_client_desc'] = "Show DNSsec keys to client.";

// System
$_ADDONLANG['admin_system_module_version'] = "Module Version";
$_ADDONLANG['admin_system_core_version'] = "Core Version";
$_ADDONLANG['admin_system_idn_support'] = "IDN Support";
$_ADDONLANG['admin_system_cron_status'] = "Cron Status";
$_ADDONLANG['admin_system_system_logging'] = "System Logging";
$_ADDONLANG['admin_system_maintenance_mode'] = "Maintenance Mode";
$_ADDONLANG['admin_system_template'] = "Template";
$_ADDONLANG['admin_system_admin_group'] = "Admin Group";

$_ADDONLANG['admin_system_cron_status_run'] = "Last run:";
$_ADDONLANG['admin_system_cron_status_tasks'] = "Open tasks:";

$_ADDONLANG['admin_system_maintenance_mode_desc'] = "Tick to enable maintenance mode.";
$_ADDONLANG['admin_system_system_logging_desc'] = "Tick to enable system logging for automated processes.";
$_ADDONLANG['admin_system_template_desc'] = "The template you want SoluteDNS to use. Be careful as this can impede admin accessibility!";
$_ADDONLANG['admin_system_admin_group_desc'] = "Limit access to SoluteDNS settings to selected admin group.";

$_ADDONLANG['admin_system_license'] = "License";

$_ADDONLANG['admin_system_license_product'] = "Product";
$_ADDONLANG['admin_system_license_edition'] = "Edition";
$_ADDONLANG['admin_system_license_status'] = "Status";
$_ADDONLANG['admin_system_license_expires'] = "Expires";

$_ADDONLANG['admin_system_license_licensed_to'] = "Licensed to";

$_ADDONLANG['admin_system_license_limit'] = "Licensed zones";
$_ADDONLANG['admin_system_license_addons'] = "Addons";
$_ADDONLANG['admin_system_license_valid_domains'] = "Valid domain's";
$_ADDONLANG['admin_system_license_valid_ips'] = "Valid ip's";
$_ADDONLANG['admin_system_license_valid_directory'] = "Valid directory";

$_ADDONLANG['admin_system_license_key'] = "License key";

$_ADDONLANG['admin_system_license_unlimited'] = "Unlimited";
$_ADDONLANG['admin_system_license_zones'] = "zones";

$_ADDONLANG['admin_system_core_not_loaded'] = "The SoluteDNS Core has not been loaded! Unable to show license information.";

// Admin Manage
$_ADDONLANG['admin_manage_title_zone'] = "Zone";
$_ADDONLANG['admin_manage_title_client'] = "Client";
$_ADDONLANG['admin_manage_title_email'] = "E-mail";

$_ADDONLANG['admin_manage_records_addrecord'] = "Add Record";
$_ADDONLANG['admin_manage_records_addtlsa'] = "Add TLSA Record";
$_ADDONLANG['admin_manage_records_addsrv'] = "Add SRV Record";
$_ADDONLANG['admin_manage_records_manage'] = "Manage";
$_ADDONLANG['admin_manage_records_applytemplate'] = "Apply Template";
$_ADDONLANG['admin_manage_records_selecttemplate'] = "Select Template";
$_ADDONLANG['admin_manage_records_importzone'] = "Import Zone";
$_ADDONLANG['admin_manage_records_exportzone'] = "Export Zone";
$_ADDONLANG['admin_manage_records_deleterecord'] = "Delete Record";
$_ADDONLANG['admin_manage_records_deleteselected'] = "Delete Selected";
$_ADDONLANG['admin_manage_records_unassignzone'] = "Unassign Zone";
$_ADDONLANG['admin_manage_records_deletezone'] = "Delete Zone";

$_ADDONLANG['admin_manage_dnssec_add'] = "Add Key";
$_ADDONLANG['admin_manage_dnssec_rectify'] = "Rectify Zone";
$_ADDONLANG['admin_manage_dnssec_check'] = "Check Status";
$_ADDONLANG['admin_manage_dnssec_nsec'] = "Set NSEC";
$_ADDONLANG['admin_manage_dnssec_nsec3'] = "Set NSEC3";
$_ADDONLANG['admin_manage_dnssec_reset'] = "Reset DNSsec";
$_ADDONLANG['admin_manage_dnssec_unset'] = "Unset DNSsec";
$_ADDONLANG['admin_manage_dnssec_reload'] = "Reload Keys";

$_ADDONLANG['admin_manage_health_recheck'] = "Recheck Health";
$_ADDONLANG['admin_manage_report_date'] = "Report Date";

$_ADDONLANG['admin_manage_text_importzone'] = "Enter a zone file below to import. Imported records are being moderated by the system.";
$_ADDONLANG['admin_manage_text_importzoneoverwrite'] = "Overwrite current zone, all records are removed prior to importing.";

// Admin Console
$_ADDONLANG['admin_console_title_updater'] = "Updater";
$_ADDONLANG['admin_console_title_mutation'] = "Mutation Tool";
$_ADDONLANG['admin_console_title_index'] = "Index Nameserver";

// Admin Messages
$_ADDONLANG['admin_msg_maintenance_title'] = "Maintenance Mode Activated";
$_ADDONLANG['admin_msg_maintenance_desc'] = "Maintenance mode is activated. DNS Management is disabled.";

$_ADDONLANG['admin_msg_core_undetected_title'] = "SoluteDNS Core Not Detected";
$_ADDONLANG['admin_msg_core_undetected_desc'] = "The SoluteDNS Core has not been detected.";

$_ADDONLANG['admin_msg_license_expire_title'] = "License expires in %s days!";
$_ADDONLANG['admin_msg_license_expire_desc'] = "Your license is about to expire, please make sure it's being renewed in time to avoid service disruption. Renewal may be automatic depending on your payment method.";

$_ADDONLANG['admin_msg_license_not_activated_title'] = "SoluteDNS is not activated";
$_ADDONLANG['admin_msg_license_not_activated_desc'] = "Please check your license as SoluteDNS is not activated.";

$_ADDONLANG['admin_msg_ns_unavailable_title'] = "Nameserver Unavailable!";
$_ADDONLANG['admin_msg_ns_unavailable_desc'] = "Could not connect to the configured nameserver, please check your nameserver settings.";

$_ADDONLANG['admin_msg_core_db_error_title'] = "Database Error Occurred";
$_ADDONLANG['admin_msg_core_ssh_error_title'] = "SSH Error Occurred";

$_ADDONLANG['admin_msg_core_db_successful_title'] = "Database Check Completed!";
$_ADDONLANG['admin_msg_core_db_successful_desc'] = "The database connection was successfully tested.";

$_ADDONLANG['admin_msg_core_ssh_successful_title'] = "SSH Check Completed!";
$_ADDONLANG['admin_msg_core_ssh_successful_desc'] = "The ssh connection was successfully tested.";


#### CLIENT ####
// Client Menu
$_ADDONLANG['client_menu_overview'] = "Overview";
$_ADDONLANG['client_menu_template'] = "Default Template";
$_ADDONLANG['client_menu_reverse'] = "Reverse Records";

$_ADDONLANG['client_menu_records'] = "Records";
$_ADDONLANG['client_menu_dnssec'] = "DNSsec";

$_ADDONLANG['client_menu_secure'] = "Enable DNSsec";
$_ADDONLANG['client_menu_unsecure'] = "Disable DNSsec";

// Client Manage
$_ADDONLANG['client_manage_records_deleteselected'] = "Delete Selected";

// Client Overview
$_ADDONLANG['client_overview_addzonelimit'] = "You can add up to <strong>%s</strong> zones.";

// Client Table
$_ADDONLANG['client_table_First'] = "First";
$_ADDONLANG['client_table_Last'] = "Last";
$_ADDONLANG['client_table_Next'] = "Next";
$_ADDONLANG['client_table_Previous'] = "Previous";
$_ADDONLANG['client_table_zeroRecords'] = "No Results Found!";

$_ADDONLANG['client_table_overview_info'] = "Showing _START_ to _END_ of _TOTAL_ domains";
$_ADDONLANG['client_table_overview_infoEmpty'] = "Showing 0 to 0 of 0 domains";
$_ADDONLANG['client_table_overview_infoFiltered'] = "(filtered from _MAX_ total domains)";
$_ADDONLANG['client_table_overview_lengthMenu'] = "Show _MENU_ entries";

$_ADDONLANG['client_table_records_emptytable'] = "<h3>Add <button type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#dialog_addRecord\" title=\"Add Record\"><span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></span></button> the first record!</h3>";

$_ADDONLANG['client_table_reverse_emptytable'] = "No IP Addresses Found";

// Client messages
$_ADDONLANG['client_msg_maintenance_title'] = "DNS Management Unavailable";
$_ADDONLANG['client_msg_maintenance_desc'] = "DNS Management is temporary unavailable due to maintenance. Please try again later!";

$_ADDONLANG['client_msg_access_denied_title'] = "Access Denied";
$_ADDONLANG['client_msg_access_denied_desc'] = "You do not have sufficient permissions to access this zone!";

$_ADDONLANG['client_msg_suspended_title'] = "Zone Suspended";
$_ADDONLANG['client_msg_suspended_desc'] = "This zone has been disabled. Records are no longer visible to the public!";

$_ADDONLANG['client_msg_system_error_title'] = "Unable to change DNS settings!";
$_ADDONLANG['client_msg_system_error_desc'] = "At this time you are unable to change the DNS settings of your domain. Please try again later. If this problem remains please contact support!";

$_ADDONLANG['client_msg_zone_limit_title'] = "Cannot Add Zone!";
$_ADDONLANG['client_msg_zone_limit_desc'] = "The maximum number of zones has been reached!";


#### GLOBAL ####
// General
$_ADDONLANG['global_general_records'] = "Records";
$_ADDONLANG['global_general_zones'] = "Zones";
$_ADDONLANG['global_general_domains'] = "Domains";
$_ADDONLANG['global_general_domain'] = "Domain";
$_ADDONLANG['global_general_loading'] = "Loading...";
$_ADDONLANG['global_general_defaulttemplate'] = "Default Template";
$_ADDONLANG['global_general_dnssec_keys'] = "DNSsec Keys";
$_ADDONLANG['global_general_dnssec_ds'] = "DS Records";
$_ADDONLANG['global_general_health_issues'] = "Health Issues";
$_ADDONLANG['global_general_unknown'] = "Unknown";
$_ADDONLANG['global_general_status'] = "Status";
$_ADDONLANG['global_general_ip'] = "IP";
$_ADDONLANG['global_general_hostname'] = "Hostname";

// Buttons
$_ADDONLANG['global_btn_add'] = "Add";
$_ADDONLANG['global_btn_apply'] = "Apply";
$_ADDONLANG['global_btn_delete'] = "Delete";
$_ADDONLANG['global_btn_cancel'] = "Cancel";
$_ADDONLANG['global_btn_close'] = "Close";
$_ADDONLANG['global_btn_import'] = "Import";
$_ADDONLANG['global_btn_export'] = "Export";
$_ADDONLANG['global_btn_manage'] = "Manage";
$_ADDONLANG['global_btn_start'] = "Start";
$_ADDONLANG['global_btn_edit'] = "Edit";

// Status
$_ADDONLANG['global_status_enabled'] = "Enabled";
$_ADDONLANG['global_status_disabled'] = "Disabled";
$_ADDONLANG['global_status_inactive'] = "Inactive";
$_ADDONLANG['global_status_none'] = "None";
$_ADDONLANG['global_status_unlimited'] = "Unlimited";
$_ADDONLANG['global_status_na'] = "N/A";
$_ADDONLANG['global_status_noneavailable'] = "None Available";
$_ADDONLANG['global_status_noneregistered'] = "None Registered";

// DNS Management
$_ADDONLANG['global_dns_id'] = "ID";
$_ADDONLANG['global_dns_name'] = "Name";
$_ADDONLANG['global_dns_type'] = "Type";
$_ADDONLANG['global_dns_content'] = "Content";
$_ADDONLANG['global_dns_prio'] = "Prio";
$_ADDONLANG['global_dns_ttl'] = "TTL";

$_ADDONLANG['global_dns_minute'] = "minute";
$_ADDONLANG['global_dns_minutes'] = "minutes";
$_ADDONLANG['global_dns_hour'] = "hour";
$_ADDONLANG['global_dns_day'] = "day";

$_ADDONLANG['global_dns_keytag'] = "Key Tag";
$_ADDONLANG['global_dns_flag'] = "Flag";
$_ADDONLANG['global_dns_algorithm'] = "Algorithm";
$_ADDONLANG['global_dns_publickey'] = "Public Key";
$_ADDONLANG['global_dns_status'] = "Status";
$_ADDONLANG['global_dns_digesttype'] = "Digest Type";
$_ADDONLANG['global_dns_digest'] = "Digest";
$_ADDONLANG['global_dns_bits'] = "Bits";

$_ADDONLANG['global_dns_service'] = "Service";
$_ADDONLANG['global_dns_protocol'] = "Protocol";
$_ADDONLANG['global_dns_priority'] = "Priority";
$_ADDONLANG['global_dns_weight'] = "Weight";
$_ADDONLANG['global_dns_target'] = "Target";
$_ADDONLANG['global_dns_port'] = "Port";

$_ADDONLANG['global_dns_usage'] = "Usage";
$_ADDONLANG['global_dns_selector'] = "Selector";
$_ADDONLANG['global_dns_matchingtype'] = "Matching Type";
$_ADDONLANG['global_dns_certificate'] = "Certificate";

// Headers
$_ADDONLANG['global_head_add_record'] = "Add Record";
$_ADDONLANG['global_head_delete_record'] = "Delete Record";
$_ADDONLANG['global_head_add_zone'] = "Add Zone";
$_ADDONLANG['global_head_delete_zone'] = "Delete Zone";


// Table
$_ADDONLANG['global_table_loading_data'] = "Loading data from server...";
$_ADDONLANG['global_table_none_available'] = "None Available";

// Assistent
$_ADDONLANG['global_assistant_tlsa_pkixta'] = "PKIX-TA: CA Constraint";
$_ADDONLANG['global_assistant_tlsa_pkixee'] = "PKIX-EE: Service Certificate Constraint";
$_ADDONLANG['global_assistant_tlsa_daneta'] = "DANE-TA: Trust Anchor Assertion";
$_ADDONLANG['global_assistant_tlsa_daneee'] = "DANE-EE: Domain Issued Certificate";
$_ADDONLANG['global_assistant_tlsa_fullcert'] = "Use full certificate";
$_ADDONLANG['global_assistant_tlsa_subjectpublickey'] = "Use subject public key";
$_ADDONLANG['global_assistant_tlsa_256hash'] = "SHA-256 Hash";
$_ADDONLANG['global_assistant_tlsa_512hash'] = "SHA-512 Hash";

$_ADDONLANG['global_assistant_tlsa_pkixta_info'] = "For a CA certificate or public key of this certificate that requires to be in the certification path and must pass PKIX validation (Public-Key Infrastructure).";
$_ADDONLANG['global_assistant_tlsa_pkixee_info'] = "For a certificate or public key of this certificate that requires to match the server certificate and must pass PKIX validation (Public-Key Infrastructure).";
$_ADDONLANG['global_assistant_tlsa_daneta_info'] = "For a CA certificate or public key of this certificate that requires to be in the certification path. The record is considered to be the trust anchor.";
$_ADDONLANG['global_assistant_tlsa_daneee_info'] = "For a certificate or public key of this certificate that requires to match the server certificate.";
$_ADDONLANG['global_assistant_tlsa_certificate_info'] = "Enter PEM format X.509 certificate.";

$_ADDONLANG['global_assistant_tlsa_cert_expired_title'] = "Certificate Invalid";
$_ADDONLANG['global_assistant_tlsa_cert_expired_desc'] = "The certificate you have entered has expired or is invalid and cannot be used.";

// Messages
$_ADDONLANG['global_msg_changes_saved_title'] = "Changes have been saved!";
$_ADDONLANG['global_msg_changes_saved_desc'] = "All changes have been saved successfully.";
$_ADDONLANG['global_msg_changes_saved_exception'] = "Changes have been saved successfully but the marked fields where ignored.";

$_ADDONLANG['global_msg_changes_unable_title'] = "Unable to save changes!";
$_ADDONLANG['global_msg_changes_unable_desc'] = "Unable to save changes, review the marked fields.";

$_ADDONLANG['global_msg_invalid_request_title'] = "Invalid Request";
$_ADDONLANG['global_msg_invalid_request_desc'] = "System could not process your request as it seems to be invalid.";

$_ADDONLANG['global_msg_expected_error_title'] = "Unable to complete action!";

$_ADDONLANG['global_msg_unexpected_error_title'] = "Unexpected Error";
$_ADDONLANG['global_msg_unexpected_error_desc'] = "System could not process your request.";

$_ADDONLANG['global_msg_unauthorized_title'] = "Unauthorized ";
$_ADDONLANG['global_msg_unauthorized_desc'] = "You are not authorized to perform this operation.";

$_ADDONLANG['global_msg_dns_error_occurred'] = "An error occurred while processing your request";
$_ADDONLANG['global_msg_dns_error_occurred_desc'] = "Unfortunately we cannot process your request as an error occurred.<br />Please contact support if you require further assistance.";

$_ADDONLANG['global_msg_dns_record_error_title'] = "Unable to make changes";

$_ADDONLANG['global_msg_client_not_found_title'] = "Client Not Found";
$_ADDONLANG['global_msg_client_not_found_desc'] = "The client could not be found. Unable to proceed.";

$_ADDONLANG['global_msg_zone_not_found_title'] = "Zone Not Found";
$_ADDONLANG['global_msg_zone_not_found_desc'] = "The zone could not be found.";

$_ADDONLANG['global_msg_reverse_zone_invalid_title'] = "Invalid Reverse Name";
$_ADDONLANG['global_msg_reverse_zone_invalid_desc'] = "The zone name seems to be invalid as reverse zone.";

$_ADDONLANG['global_msg_ip_invalid_title'] = "Invalid IP Address";
$_ADDONLANG['global_msg_ip_invalid_desc'] = "The IP address used seems to be invalid.";

$_ADDONLANG['global_msg_hostname_invalid_title'] = "Invalid Hostname";
$_ADDONLANG['global_msg_hostname_invalid_desc'] = "The hostname provided seems to be invalid.";

$_ADDONLANG['global_msg_reverse_updated_title'] = "Updated Reverse Hostname.";
$_ADDONLANG['global_msg_reverse_updated_desc'] = "The reverse hostname has successfully been updated.";

$_ADDONLANG['global_msg_dns_record_added_title'] = "Record has been added";
$_ADDONLANG['global_msg_dns_record_added_desc'] = "New record has been added successfully.";

$_ADDONLANG['global_msg_dns_record_edited_title'] = "Record has been edited";
$_ADDONLANG['global_msg_dns_record_edited_desc'] = "Changed records have been saved successfully.";

$_ADDONLANG['global_msg_dns_record_toggled_title'] = "Record has been %s";
$_ADDONLANG['global_msg_dns_record_toggled_desc'] = "The record has been %s successfully.";

$_ADDONLANG['global_msg_dns_record_deleted_title'] = "Record has been deleted";
$_ADDONLANG['global_msg_dns_record_deleted_desc'] = "The record has been deleted successfully.";

$_ADDONLANG['global_msg_dns_record_select_deleted_title'] = "%d records have been deleted";
$_ADDONLANG['global_msg_dns_record_select_deleted_desc'] = "The selected records has been deleted successfully.";

$_ADDONLANG['global_msg_dns_record_select_no_deleted_title'] = "No records have been deleted";
$_ADDONLANG['global_msg_dns_record_select_no_deleted_desc'] = "The selected records where not deleted or no records where selected correctly.";

$_ADDONLANG['global_msg_dns_sec_rectified_title'] = "Zone Rectified";
$_ADDONLANG['global_msg_dns_sec_rectified_desc'] = "The zone has been rectified successfully.";

$_ADDONLANG['global_msg_dns_sec_nsec_title'] = "NSEC Set";
$_ADDONLANG['global_msg_dns_sec_nsec_desc'] = "NSEC has successfully been set for this zone.";

$_ADDONLANG['global_msg_dns_sec_nsec3_title'] = "NSEC3 Set";
$_ADDONLANG['global_msg_dns_sec_nsec3_desc'] = "NSEC 3 has successfully been set for this zone.";

$_ADDONLANG['global_msg_dns_sec_reload_title'] = "Cached Keys Removed";
$_ADDONLANG['global_msg_dns_sec_reload_desc'] = "The cached DNSsec keys have been removed.";

$_ADDONLANG['global_msg_dns_sec_reset_title'] = "Keys Reset";
$_ADDONLANG['global_msg_dns_sec_reset_desc'] = "The DNSsec keys have been reset.";

$_ADDONLANG['global_msg_dns_sec_unset_title'] = "DNSsec Unset";
$_ADDONLANG['global_msg_dns_sec_unset_desc'] = "DNSsec has been unset for this zone.";

$_ADDONLANG['global_msg_dns_sec_addkey_title'] = "DNSsec Key Added";
$_ADDONLANG['global_msg_dns_sec_addkey_desc'] = "A new DNSsec key has been added successfully.";

$_ADDONLANG['global_msg_dns_sec_activatekey_title'] = "DNSsec Key Activated";
$_ADDONLANG['global_msg_dns_sec_activatekey_desc'] = "A DNSsec key has been activated successfully.";

$_ADDONLANG['global_msg_dns_sec_deactivatekey_title'] = "DNSsec Key Deactivated";
$_ADDONLANG['global_msg_dns_sec_deactivatekey_desc'] = "A DNSsec key has been deactivated successfully.";

$_ADDONLANG['global_msg_dns_sec_deletekey_title'] = "DNSsec Key Deleted";
$_ADDONLANG['global_msg_dns_sec_deletekey_desc'] = "A DNSsec key has been deleted successfully.";

$_ADDONLANG['global_msg_dns_health_reload_title'] = "Health Status Renewed";
$_ADDONLANG['global_msg_dns_health_reload_desc'] = "The cached health status has been renwed.";

$_ADDONLANG['global_msg_dns_template_apply_title'] = "DNS Template Applied";
$_ADDONLANG['global_msg_dns_template_apply_desc'] = "The selected DNS template has been applied to this zone.";

$_ADDONLANG['global_msg_dns_zone_created_title'] = "Zone %s has been created";
$_ADDONLANG['global_msg_dns_zone_created_desc'] = "The zone %s has been created successfully.";

$_ADDONLANG['global_msg_dns_zone_unassigned_title'] = "Zone %s has been unassigned";
$_ADDONLANG['global_msg_dns_zone_unassigned_desc'] = "The zone %s has been unassigned successfully.";

$_ADDONLANG['global_msg_dns_zone_deleted_title'] = "Zone %s has been deleted";
$_ADDONLANG['global_msg_dns_zone_deleted_desc'] = "The zone %s has been deleted successfully.";

$_ADDONLANG['global_msg_dns_slave_title'] = "Slave Zone";
$_ADDONLANG['global_msg_dns_slave_desc'] = "This zone seems to be a slave zone and should not be edited directly.";

$_ADDONLANG['global_msg_dns_nozone_title'] = "Zone Does Not Exist";
$_ADDONLANG['global_msg_dns_nozone_desc'] = "The zone you are trying to manage does not exist.";
$_ADDONLANG['global_msg_dns_nozonetemplate_desc'] = "Apply an template to create this zone.";

// Modals
$_ADDONLANG['global_text_delete_record'] = "Are you sure you want to delete this record?";
$_ADDONLANG['global_text_delete_zone'] = "Are you sure you want to delete this zone?";

// Core Error Description
$_ADDONLANG['global_error_3000'] = "Zone already exists.";
$_ADDONLANG['global_error_3001'] = "Zone could not be found.";
$_ADDONLANG['global_error_3002'] = "Invalid zone name provided.";
$_ADDONLANG['global_error_3003'] = "Slave zone cannot be edited directly.";
$_ADDONLANG['global_error_3004'] = "No zone name has been provided.";

$_ADDONLANG['global_error_4000'] = "Maximum allowed records has been reached.";

$_ADDONLANG['global_error_5000'] = "License failure, see the returned license array to troubleshoot this issue.";
$_ADDONLANG['global_error_5001'] = "Nameserver database is unavailable.";
$_ADDONLANG['global_error_5002'] = "Maximum licensed zones has been reached.";

$_ADDONLANG['global_error_6000'] = "Unable to login or connect to the SSH service.";
$_ADDONLANG['global_error_6001'] = "An incorrect SSH session was provided.";
$_ADDONLANG['global_error_6002'] = "An SSH error occured: {error-message}";
$_ADDONLANG['global_error_6003'] = "Failed to secure zone.";

$_ADDONLANG['global_error_7000'] = "One or more nameservers failed to report.";
$_ADDONLANG['global_error_7001'] = "Not all nameservers agree on the SOA serial for this zone.";
$_ADDONLANG['global_error_7002'] = "The registry returned one or more unknown nameservers.";
$_ADDONLANG['global_error_7003'] = "There are NS records in this zone which are not known by the registry.";
$_ADDONLANG['global_error_7004'] = "There is one or more nameservers which do not seem to be authoritative for this zone.";
$_ADDONLANG['global_error_7005'] = "It seems the domain is using an different DNS cluster.";
$_ADDONLANG['global_error_7006'] = "There is one or more record(s) with errors in this zone.";
$_ADDONLANG['global_error_7007'] = "There is one or more record(s) with warnings in this zone.";

// Core DNS Validation
$_ADDONLANG['global_validation_NO_DATABASE'] = "Validation not possible. Database connection not available.";
$_ADDONLANG['global_validation_ZONE_NOT_FOUND'] = "Zone has not been found.";
$_ADDONLANG['global_validation_RECORD_NOT_FOUND'] = "Record has not been found.";
$_ADDONLANG['global_validation_DOMAIN_NOT_IN_NAME'] = "The name field must contain the domain name.";
$_ADDONLANG['global_validation_ZONE_NAME_INVALID'] = "Zone name is not an FQHN.";
$_ADDONLANG['global_validation_INVALID_FQHN'] = "This record must contain a valid hostname, do not end with a dot (.).";
$_ADDONLANG['global_validation_NOT_UNIQUE'] = "Similar record already exists.";
$_ADDONLANG['global_validation_NON_ALIAS_TARGET'] = "You cannot refer a NS or MX record to a CNAME record.";
$_ADDONLANG['global_validation_TYPE_EMPTY'] = "Record type cannot be empty.";
$_ADDONLANG['global_validation_INVALID_TYPE'] = "Record type is not recognized.";
$_ADDONLANG['global_validation_TYPE_UNALLOWED'] = "Record type is not allowed.";
$_ADDONLANG['global_validation_INVALID_TTL'] = "The TTL value must be numeric.";
$_ADDONLANG['global_validation_CONTENT_TOO_LONG'] = "The entered content value is to long and cannot contain more then 4096 characters.";
$_ADDONLANG['global_validation_INVALID_IPV4'] = "IPv4 address does not seem to be valid.";
$_ADDONLANG['global_validation_INVALID_IPV6'] = "IPv6 address does not seem to be valid. IPv4 addresses in IPv6 notation are not supported.";
$_ADDONLANG['global_validation_RECORD_NO_PRIORITY'] = "A MX record requires you to specify a numeric priority.";
$_ADDONLANG['global_validation_RECORD_INVALID_PRIORITY'] = "A MX record requires you to specify a numeric priority.";
$_ADDONLANG['global_validation_INVALID_ARPA'] = "Reverse name not valid.";
$_ADDONLANG['global_validation_SOA_PARTS_MISSING'] = "The SOA record must contain: {primary-ns} {hostmaster} {serial} {refresh} {retry} {expire} {default_ttl}";
$_ADDONLANG['global_validation_SOA_PART_0_INVALID'] = "Primary nameserver domain is not valid.";
$_ADDONLANG['global_validation_SOA_PART_1_INVALID'] = "Hostmaster e-mail address is not valid.";
$_ADDONLANG['global_validation_SOA_PART_INVALID'] = "SOA record part %s must be a valid numeric.";
$_ADDONLANG['global_validation_INVALID_NOT_QUOTED'] = "This record must contain a quoted string.";
$_ADDONLANG['global_validation_NAPTR_PARTS_MISSING'] = "A NAPTR record must contain (including the quotes and trailing dot): {order} {preference} \"{flags}\" \"{service}\" \"{regexp}\" replacement.";
$_ADDONLANG['global_validation_NAPTR_PART_INVALID'] = "Record part %s must be numeric.";
$_ADDONLANG['global_validation_NAPTR_PART_QUOTE_INVALID'] = "Record part %s must be quoted.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAGS_INVALID'] = "Record part %s contains invalid characters. This part may only contain alphanumeric characters.";
$_ADDONLANG['global_validation_NAPTR_PART_EX_FLAGS_INVALID'] = "Record part %s contains too many FLAGS (S, A, U). Only one can be used each time.";
$_ADDONLANG['global_validation_NAPTR_PART_TERMINAL_FLAG_INVALID'] = "A SERVICE (record part %s) must be specified if the FLAGS including a terminal flag.";
$_ADDONLANG['global_validation_NAPTR_PART_SERVICE_INVALID'] = "SERVICE (record part %s) seems to be invalid.";
$_ADDONLANG['global_validation_NAPTR_PART_DELIMITER_INVALID'] = "The POSIX replacement regexp (record part %s) is invalid. Delimiter may not be: 'i', '' or be a digit.";
$_ADDONLANG['global_validation_NAPTR_PART_MISSING_INVALID'] = "The POSIX replacement regexp (record part %s) is invalid. Not all required parts were specified.";
$_ADDONLANG['global_validation_NAPTR_PART_BACKREF_INVALID'] = "The POSIX replacement regexp (record part %s) is invalid. Only one back reference can be used, and should be like: '1'.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAG_INVALID'] = "The POSIX regexp flag of (record part %s) is invalid. Optionally it may contain 'i', or nothing at all.";
$_ADDONLANG['global_validation_NAPTR_PART_EMPTY_INVALID'] = "Record part %s is invalid and must be a record pointer or single dot.";
$_ADDONLANG['global_validation_NAPTR_PART_SIM_INVALID'] = "REGEXP and REPLACEMENT variable (record part %s) cannot be used simoustaneously.";
$_ADDONLANG['global_validation_NAPTR_PART_REPLACEMENT_INVALID'] = "REPLACEMENT variable (record part %s) must be either '.' or a valid domain.";
$_ADDONLANG['global_validation_RP_PARTS_MISSING'] = "RP records must have: {mailbox name} {more info pointer}";
$_ADDONLANG['global_validation_RP_PART_0_INVALID'] = "The mailbox name has to be an email address with the atsign (@) replaced for a dot (.).";
$_ADDONLANG['global_validation_RP_PART_1_INVALID'] = "The more-info pointer must be a valid domain name.";
$_ADDONLANG['global_validation_TLSA_PARTS_MISSING'] = "A TLSA record must contain a: {usage} {selector} {type} {fingeprint}";
$_ADDONLANG['global_validation_TLSA_PART_0_INVALID'] = "Either a: 0 (PKIX-TA), 1 (PKIX-EE), 2 (DANE-TA) or 3 (DANE-EE) usage field must be provided.";
$_ADDONLANG['global_validation_TLSA_PART_1_INVALID'] = "Either: 0 (Match full certificate) or 1 (Match only SubjectPublicKeyInfo) selector field must be provided.";
$_ADDONLANG['global_validation_TLSA_PART_2_INVALID'] = "Either: 0 (Exact match), 1 (SHA-256 hash) or 2 (SHA-512 hash) matching type field must be provided.";
$_ADDONLANG['global_validation_TLSA_PART_3_INVALID'] = "A SHA-256 fingerprint with 64 character ASCII hexadecimal must be provided.";
$_ADDONLANG['global_validation_TLSA_PART_4_INVALID'] = "A SHA-512 fingerprint with 128 character ASCII hexadecimal must be provided.";
$_ADDONLANG['global_validation_CAA_PARTS_MISSING'] = "CAA records must have: &lt;flag&gt; &lt;tag&gt; &lt;value&gt;.";
$_ADDONLANG['global_validation_CAA_PART_0_INVALID'] = "The flag (part 1) must be numeric and between 0-255.";
$_ADDONLANG['global_validation_CAA_PART_1_INVALID'] = "The tag (part 2) must be: issue, issuewild or iodef.";
$_ADDONLANG['global_validation_CAA_PART_2_INVALID'] = "The value (part 3) must be quoted.";
$_ADDONLANG['global_validation_SSHFP_PARTS_MISSING'] = "A SSHFP record must contain a: {algorithm} {fp-type} {fingeprint}";
$_ADDONLANG['global_validation_SSHFP_PART_O_INVALID'] = "Either a: 1 (RSA), 2 (DSA) or 3 (ECDSA) algorithm, must be provided.";
$_ADDONLANG['global_validation_SSHFP_PART_1_INVALID'] = "Either: 1 (SHA-1) or 2 (SHA-256) as fp-type, must be provided.";
$_ADDONLANG['global_validation_SSHFP_PART_2_INVALID'] = "A SHA-1 fingerprint with 40 character ASCII hexadecimal must be provided.";
$_ADDONLANG['global_validation_SSHFP_PART_3_INVALID'] = "A SHA-256 fingerprint with 64 character ASCII hexadecimal must be provided.";
$_ADDONLANG['global_validation_SRV_MISSING_PRIORITY'] = "A priority must be provided.";
$_ADDONLANG['global_validation_SRV_PARTS_MISSING'] = "The SRV record must contain: {weight} {port} {service}";
$_ADDONLANG['global_validation_SRV_PART_WEIGHT_INVALID'] = "Part %s (Weight) must be numeric.";
$_ADDONLANG['global_validation_SRV_PART_PORT_INVALID'] = "Part %s (Port) must be numeric.";
$_ADDONLANG['global_validation_SRV_PART_SERVICE_INVALID'] = "A SRV record must contain a valid domain as service.";
$_ADDONLANG['global_validation_HINFO_INVALID'] = "The HINFO content field contains an invalid value.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_FLAG'] = "Flag is invalid.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_BITS'] = "Bits are invalid.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_ALGORITHM'] = "Algorithm is invalid.";

// NO JAVASCRIPT
$_ADDONLANG['nojavascript_title'] = "JavaScript Disabled";
$_ADDONLANG['nojavascript_desc'] = "This page requires JavaScript to be enabled to work properly. Please enable JavaScript in your browser to continue.";

// Override File
if (file_exists(dirname(__FILE__) . '/override/english.php')) {
	include dirname(__FILE__) . '/override/english.php';
}
