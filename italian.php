<?php
/**
 *               *** SoluteDNS Professional Edition for WHMCS ***
 *
 * @language	Italian        
 * @package     solutedns-pro-whmcs
 * @author      NetDistrict <info@netdistrict.net>
 * 
 * Copyright (c) 2018 NetDistrict
 * All rights reserved.
 * */

#### ADMIN ####
// Admin Menu
$_ADDONLANG['admin_menu_overview'] = "Panoramica";
$_ADDONLANG['admin_menu_templates'] = "Template";
$_ADDONLANG['admin_menu_settings'] = "Impostazioni";
$_ADDONLANG['admin_menu_nameserver'] = "Nameserver";
$_ADDONLANG['admin_menu_tools'] = "Strumenti";
$_ADDONLANG['admin_menu_system'] = "Sistema";
$_ADDONLANG['admin_menu_records'] = "Record";
$_ADDONLANG['admin_menu_dnssec'] = "DNSsec";
$_ADDONLANG['admin_menu_health'] = "Impostazioni";

// Admin Buttons
$_ADDONLANG['admin_btn_save_changes'] = "Salva Modifiche";
$_ADDONLANG['admin_btn_check'] = "Controlla";
$_ADDONLANG['admin_btn_update_now'] = "Aggiorna Ora";

// Admin General
$_ADDONLANG['admin_never'] = "Mai";

// Admin Overview
$_ADDONLANG['admin_overview_all'] = "Tutti";
$_ADDONLANG['admin_overview_domain'] = "Dominio";
$_ADDONLANG['admin_overview_domains'] = "Domini";
$_ADDONLANG['admin_overview_product'] = "Prodotto";
$_ADDONLANG['admin_overview_products'] = "Prodotti";
$_ADDONLANG['admin_overview_standalone'] = "Indipendente";
$_ADDONLANG['admin_overview_reverse'] = "Inverti";

$_ADDONLANG['admin_overview_id'] = "ID";
$_ADDONLANG['admin_overview_client'] = "Cliente";
$_ADDONLANG['admin_overview_date'] = "Data";
$_ADDONLANG['admin_overview_log'] = "Log";
$_ADDONLANG['admin_overview_status'] = "Stato";

$_ADDONLANG['admin_overview_zone_type'] = "Tipologia Zona";
$_ADDONLANG['admin_overview_select_type'] = "Seleziona tipologia";
$_ADDONLANG['admin_overview_ip_zone'] = "Indirizzo IP o Nome Zona";

$_ADDONLANG['admin_overview_reset_table'] = "Reimposta Panoramica";


// Settings: Template
$_ADDONLANG['admin_settings_template_settings'] = "Impostazioni Template ";
$_ADDONLANG['admin_settings_dns_product'] = "DNS Prodotti";
$_ADDONLANG['admin_settings_force_template'] = "Vigore Template";

$_ADDONLANG['admin_settings_dns_product_desc'] = "Abilita la gestione DNS per questo prodotto.";
$_ADDONLANG['admin_settings_force_template_desc'] = "Per modello di prodotto quando viene avviata una registrazione / trasferimento simultaneamente.";

// Settings: Records
$_ADDONLANG['admin_settings_allowed_records'] = "Record Consentiti";

$_ADDONLANG['admin_settings_default_soa'] = "Record SOA di Default";
$_ADDONLANG['admin_settings_default_hostmaster'] = "Hostmaster";
$_ADDONLANG['admin_settings_default_serial'] = "Seriale";
$_ADDONLANG['admin_settings_default_refresh'] = "Aggiorna";
$_ADDONLANG['admin_settings_default_retry'] = "Riprova";
$_ADDONLANG['admin_settings_default_expire'] = "Scadenza";
$_ADDONLANG['admin_settings_default_ttl'] = "TTL Minimo";
$_ADDONLANG['admin_settings_default_custom_primary'] = "Consenti primaria consuetudine";

$_ADDONLANG['admin_settings_default_hostmaster_desc'] = "Aggiungi {domain} per usare il dominio relativo come hostmaster.";
$_ADDONLANG['admin_settings_default_serial_desc'] = "Lascia questo in modo predefinito se non sei sicuro di ciò che fa!";
$_ADDONLANG['admin_settings_default_custom_primary_desc'] = "Non sovrascrivere il valore SOA del server dei nomi primario con il valore predefinito del cluster.";

$_ADDONLANG['admin_settings_record_limits'] = "Limite Record";
$_ADDONLANG['admin_settings_record_limit'] = "Limite Record";
$_ADDONLANG['admin_settings_record_limit_desc'] = "Limita il numero massimo di record consentiti in un'zona (0 = illimitati).";

$_ADDONLANG['admin_settings_record_select_default'] = "Default (yyyymmddcc)";
$_ADDONLANG['admin_settings_record_select_epoch'] = "Epoca(Unix time)";
$_ADDONLANG['admin_settings_record_select_zero'] = "Orario dell'ultima modifica del record";

// Setttings: Accessibility
$_ADDONLANG['admin_settings_accessibility'] = "Accessibilità";
$_ADDONLANG['admin_settings_respect_registrar'] = "Rispettare i moduli di registrazione";
$_ADDONLANG['admin_settings_respect_product'] = "Rispettare i prodotti";
$_ADDONLANG['admin_settings_force_dns'] = "Reindirizza le pagine DNS";
$_ADDONLANG['admin_settings_hide_soa'] = "Nascondi Record SOA";
$_ADDONLANG['admin_settings_disable_ns'] = "Disabilita Record NS";
$_ADDONLANG['admin_settings_preset_ttl'] = "Usa il campo TTL preimpostato";
$_ADDONLANG['admin_settings_paging'] = "Paginazione DNS";
$_ADDONLANG['admin_settings_url_rewrite'] = "Riscrivi l'URL dell'area cliente";

$_ADDONLANG['admin_settings_client_zones'] = "Abilita Zona Cliente";
$_ADDONLANG['admin_settings_zone_limit'] = "Limite di Zona";
$_ADDONLANG['admin_settings_allow_subdomains'] = "Allow Subdomain Zones";
$_ADDONLANG['admin_settings_client_template'] = "Abilita Template Cliente";
$_ADDONLANG['admin_settings_client_reverse'] = "Gestione Inversi";

$_ADDONLANG['admin_settings_client_toggle_dnssec'] = "Interruttore DNSsec";

$_ADDONLANG['admin_settings_disable_primary'] = "Disabilita Menu Primario";
$_ADDONLANG['admin_settings_disable_management'] = "Disabilita Menu di Gestione";
$_ADDONLANG['admin_settings_disable_sidebar'] = "Disabilità barre laterali";

$_ADDONLANG['admin_settings_respect_registrar_desc'] = "Rispettare la funzione di gestione DNS dei moduli di registrazione.";
$_ADDONLANG['admin_settings_respect_product_desc'] = "Non creare una zona per un dominio ordinato insieme a un prodotto senza modello attivo.";
$_ADDONLANG['admin_settings_hide_soa_desc'] = "Reindirizzare le pagine di gestione DNS WHMCS a SoluteDNS.";
$_ADDONLANG['admin_settings_hide_soa_desc'] = "Nascondi il record SOA per gli utenti. Se mostri il record SOA sarà sempre disabilitato.";
$_ADDONLANG['admin_settings_disable_ns_desc'] = "Se spuntato, i record di nameserver saranno disabilitati per gli utenti.";
$_ADDONLANG['admin_settings_preset_ttl_desc'] = "Usa un menu dropdown per la preimpostazione del TTL invece che una casella di testo.";
$_ADDONLANG['admin_settings_paging_desc'] = "Abilita paginazione per la tabella di gestione DNS.";
$_ADDONLANG['admin_settings_url_rewrite_desc'] = "Riscrivi l'URL dell'area client, richiede le personalizzazioni .htaccess. Lascia vuoto per disabilitare. Vedi: <a class=\"text-info\"href=\"https://docs.solutedns.com/whmcs/professional-edition/getting-started/#customized_url\" target=\"_blank\"> Personalizzato URL </a>";

$_ADDONLANG['admin_settings_client_zones_desc'] = "Seleziona per abilitare la gestione di zona per i clienti.";
$_ADDONLANG['admin_settings_zone_limit_desc'] = "Limita il numero massimo di zona consentite per i clienti. (0 = illimitato, -1 = nulla)";
$_ADDONLANG['admin_settings_allow_subdomains_desc'] = "Consenti ai client di aggiungere sottodomini come nuova zona.";
$_ADDONLANG['admin_settings_client_template_desc'] = "Seleziona per abilitare il template di default per i clienti.";
$_ADDONLANG['admin_settings_client_reverse_desc'] = "Permetti ai client di gestire i nomi host inversi per gli indirizzi IP assegnati.";

$_ADDONLANG['admin_settings_client_toggle_dnssec_desc'] = "Permetti ai client di abilita/disabilita DNSsec.";

$_ADDONLANG['admin_settings_disable_primary_desc'] = "Disabilitare la voce Gestione DNS nel menu dell'area client principale.";
$_ADDONLANG['admin_settings_disable_management_desc'] = "Disabilitare la voce Gestione DNS aggiunta alla barra laterale delle pagine dominio e prodottodettagli.";
$_ADDONLANG['admin_settings_disable_sidebar_desc'] = "Disabilitare le barre laterali dell'area client.";

// Setttings: Automation
$_ADDONLANG['admin_settings_automation'] = "Automazione";
$_ADDONLANG['admin_settings_auto_create'] = "Crea zona in automatico";
$_ADDONLANG['admin_settings_auto_delete'] = "Elimina zona in automatico";
$_ADDONLANG['admin_settings_auto_delete_remove'] = "Quando il dominio è rimosso in WHMCS";

$_ADDONLANG['admin_settings_auto_dns_management'] = "Abilita in automatico la gestione DNS";
$_ADDONLANG['admin_settings_auto_todo'] = "Aggiungi elementi da-fare in automatico";

$_ADDONLANG['admin_settings_auto_health'] = "Controlli Salutari";

$_ADDONLANG['admin_settings_auto_create_desc'] = "Crea in automatico una nuova zona per nuovi ordini di dominio dopo il checkout dalla sezione di shopping.";
$_ADDONLANG['admin_settings_auto_delete_desc'] = "Elimina in automatico le zona di domini e prodotti con le condizioni selezionate.";
$_ADDONLANG['admin_settings_auto_dns_management_desc'] = "Abilita in automatico la gestione DNS WHMCS per nuove zona create.";
$_ADDONLANG['admin_settings_auto_todo_desc'] = "Aggiungi in automatico elementi da-fare quando è richiesta l'attenzione dello staff.";
$_ADDONLANG['admin_settings_auto_health_desc'] = "Performa dei controlli salutari automaticamente";

//  Nameserver
$_ADDONLANG['admin_nameserver_database_details'] = "Database Principale PowerDNS";
$_ADDONLANG['admin_nameserver_nameservers'] = "Nomiserver";
$_ADDONLANG['admin_nameserver_ssh_details'] = "Dati DNSsec SSH2";
$_ADDONLANG['admin_nameserver_dnssec_options'] = "Opzioni DNSsec";

$_ADDONLANG['admin_nameserver_host'] = "Host";
$_ADDONLANG['admin_nameserver_port'] = "Porta";
$_ADDONLANG['admin_nameserver_user'] = "Utente";
$_ADDONLANG['admin_nameserver_password'] = "Password";
$_ADDONLANG['admin_nameserver_database'] = "Database";
$_ADDONLANG['admin_nameserver_zone_type'] = "Tipologia Zona";
$_ADDONLANG['admin_nameserver_nameserver'] = "Nomeserver";
$_ADDONLANG['admin_nameserver_private_key'] = "Chiave Privata";

$_ADDONLANG['admin_nameserver_host_db_desc'] = "Dominio o IP del server remoto MySQL contenente le Zone PowerDNS.";
$_ADDONLANG['admin_nameserver_host_ssh_desc'] = "Dominio o IP  del server remoto contenenti le Zone PowerDNS.";
$_ADDONLANG['admin_nameserver_zone_type_desc'] = "Seleziona il tipo di zona, necessario per il trasferimento di zona sul tuo server dei nomi.";
$_ADDONLANG['admin_nameserver_port_desc'] = "La porta predefinita MySQL è 3306.";
$_ADDONLANG['admin_nameserver_nameserver_desc'] = "Il nomeserver principale verrà anche usato nel registro SOA.";
$_ADDONLANG['admin_nameserver_nameserver_leave_empty_desc'] = "Lascia campi vuoti extra se vengono usati meno nomiserver.";
$_ADDONLANG['admin_nameserver_private_key_desc'] = "Inserisci la chiave privata per accedere a SSH. Lascia il campo della password vuoto quando non si utilizza alcuna password.";

$_ADDONLANG['admin_nameserver_pdns_version'] = "Versione PowerDNS";
$_ADDONLANG['admin_nameserver_enable_dnssec'] = "Attiva DNSsec";
$_ADDONLANG['admin_nameserver_auto_rectify'] = "Attiva DNSsec;";
$_ADDONLANG['admin_nameserver_auto_dnssec'] = "Attivita automaticamente DNSsec";
$_ADDONLANG['admin_nameserver_set_nsec3'] = "Imposta NSEC3";
$_ADDONLANG['admin_nameserver_show_client'] = "Mostra chiave al cliente";

$_ADDONLANG['admin_nameserver_enable_dnssec_desc'] = "Attiva assistenza DNSsec.";
$_ADDONLANG['admin_nameserver_auto_rectify_desc'] = "Le zone devono essere corrette per continuare ad operare.";
$_ADDONLANG['admin_nameserver_auto_dnssec_desc'] = "Proteggi Automaticamente le nuove zone create.";
$_ADDONLANG['admin_nameserver_set_nsec3_desc'] = "Utilizza NSEC3 invece del predefinito NSEC.";
$_ADDONLANG['admin_nameserver_show_client_desc'] = "Mostra le chiavi DNSsec al cliente.";

// Tools
$_ADDONLANG['admin_tools_title_mutation'] = "Mutazione Cruscotto";
$_ADDONLANG['admin_tools_title_health'] = "Salute Cruscotto";

$_ADDONLANG['admin_tools_health_stats_zones'] = "Zone con problemi di salute";
$_ADDONLANG['admin_tools_health_stats_types'] = "Tipi di problemi di salute registrati";
$_ADDONLANG['admin_tools_health_option_open'] = "Questioni aperte";
$_ADDONLANG['admin_tools_health_option_all'] = "Tutte le zone";
$_ADDONLANG['admin_tools_health_option_report'] = "Rapporto";

// System
$_ADDONLANG['admin_system_module_version'] = "Versione Module";
$_ADDONLANG['admin_system_core_version'] = "Versione Core";
$_ADDONLANG['admin_system_dnsmanager_version'] = "Versione DNS Manager";
$_ADDONLANG['admin_system_idn_support'] = "Supporto IDN";
$_ADDONLANG['admin_system_cron_status'] = "Stato Cron";
$_ADDONLANG['admin_system_system_logging'] = "Log di Sistema";
$_ADDONLANG['admin_system_maintenance_mode'] = "Modalità Manutenzione";
$_ADDONLANG['admin_system_template'] = "Modello";
$_ADDONLANG['admin_system_admin_group'] = "Gruppo Admin";

$_ADDONLANG['admin_system_cron_status_run'] = "Ultima corsa:";
$_ADDONLANG['admin_system_cron_status_tasks'] = "Compiti aperti:";

$_ADDONLANG['admin_system_maintenance_mode_desc'] = "Spunta per abilitare la modalità manutenzione.";
$_ADDONLANG['admin_system_system_logging_desc'] = "Spunta per abilitare i log di sistema (solo processi di log automatizzati).";
$_ADDONLANG['admin_system_template_desc'] = "Il modello che vuoi utilizzare SoluteDNS. Fai attenzione perché ciò può impedire l'accessibilità dell'amministratore!";
$_ADDONLANG['admin_system_admin_group_desc'] = "Limitare l'accesso alle impostazioni SoluteDNS al gruppo di amministratori selezionato.";

$_ADDONLANG['admin_system_license'] = "Licenza";

$_ADDONLANG['admin_system_license_product'] = "Prodotto";
$_ADDONLANG['admin_system_license_edition'] = "Edizione";
$_ADDONLANG['admin_system_license_status'] = "Stato";
$_ADDONLANG['admin_system_license_expires'] = "Scade";

$_ADDONLANG['admin_system_license_licensed_to'] = "Autorizzato per";

$_ADDONLANG['admin_system_license_limit'] = "Zone con licenza";
$_ADDONLANG['admin_system_license_addons'] = "Aggiunta";
$_ADDONLANG['admin_system_license_valid_domains'] = "Domini validi";
$_ADDONLANG['admin_system_license_valid_ips'] = "IP validi";
$_ADDONLANG['admin_system_license_valid_directory'] = "Cartella valida";

$_ADDONLANG['admin_system_license_key'] = "Chiave di licenza";

$_ADDONLANG['admin_system_license_unlimited'] = "Illimitato";
$_ADDONLANG['admin_system_license_zones'] = "zona";

$_ADDONLANG['admin_system_core_not_loaded'] = "Il nucleo di SoluteDNS non è stato caricato! Impossibile mostrare le informazioni sulla licenza.";

// Admin Manage
$_ADDONLANG['admin_manage_title_zone'] = "Zona";
$_ADDONLANG['admin_manage_title_client'] = "Cliente";
$_ADDONLANG['admin_manage_title_email'] = "Email";

$_ADDONLANG['admin_manage_records_addrecord'] = "Aggiungi Record";
$_ADDONLANG['admin_manage_records_addtlsa'] = "Aggiungi TLSA Record";
$_ADDONLANG['admin_manage_records_addsrv'] = "Aggiungi SRV Record";
$_ADDONLANG['admin_manage_records_manage'] = "Gestisci";
$_ADDONLANG['admin_manage_records_applytemplate'] = "Applica Template";
$_ADDONLANG['admin_manage_records_selecttemplate'] = "Seleziona Template";
$_ADDONLANG['admin_manage_records_importzone'] = "Importa Zona";
$_ADDONLANG['admin_manage_records_exportzone'] = "Esporta Zona";
$_ADDONLANG['admin_manage_records_deleterecord'] = "Elimina Record";
$_ADDONLANG['admin_manage_records_deleteselected'] = "Elimina Selezionati";
$_ADDONLANG['admin_manage_records_unassignzone'] = "Unnulla Assegna Zone";
$_ADDONLANG['admin_manage_records_deletezone'] = "Elimina Zona";

$_ADDONLANG['admin_manage_dnssec_add'] = "Aggiungi Chiave";
$_ADDONLANG['admin_manage_dnssec_rectify'] = "Rettifica Zona";
$_ADDONLANG['admin_manage_dnssec_check'] = "Controlla Stato";
$_ADDONLANG['admin_manage_dnssec_nsec'] = "mposta NSEC";
$_ADDONLANG['admin_manage_dnssec_nsec3'] = "mposta NSEC3";
$_ADDONLANG['admin_manage_dnssec_reset'] = "Reimposta DNSsec";
$_ADDONLANG['admin_manage_dnssec_unset'] = "Azzera Impostazione DNSsec";
$_ADDONLANG['admin_manage_dnssec_reload'] = "Ricarica Chiavi";

$_ADDONLANG['admin_manage_health_recheck'] = "Ricontrolla Salute";
$_ADDONLANG['admin_manage_report_date'] = "Riporta la data";

$_ADDONLANG['admin_manage_text_importzone'] = "Inserisci un file di zona da importare. I record importati saranno moderati dal sistema.";
$_ADDONLANG['admin_manage_text_importzoneoverwrite'] = "Sovrascrivi l'zona corrente, tutti i record saranno rimossi prima di essere importati.";

// Admin Console
$_ADDONLANG['admin_console_title_updater'] = "Aggiornatore";
$_ADDONLANG['admin_console_title_mutation'] = "Strumento di Mutazione";
$_ADDONLANG['admin_console_title_index'] = "Indice Nameserver";
$_ADDONLANG['admin_console_title_health'] = "Controllo Sanitario";

// Admin Messages
$_ADDONLANG['admin_msg_maintenance_title'] = "Modalità Manutenzione Attivata";
$_ADDONLANG['admin_msg_maintenance_desc'] = "La modalità manutenzione è attiva. La Gestione DNS per i clienti è disabilitata.";

$_ADDONLANG['admin_msg_core_undetected_title'] = "SoluteDNS Core non rilevato";
$_ADDONLANG['admin_msg_core_undetected_desc'] = "Il nucleo SoluteDNS non è stato rilevato.";

$_ADDONLANG['admin_msg_license_expire_title'] = "La licenza scade tra% s giorni!";
$_ADDONLANG['admin_msg_license_expire_desc'] = "La tua licenza sta per scadere, assicurati che venga rinnovata in tempo per evitare interruzioni del servizio. Il rinnovo può essere automatico in base al metodo di pagamento.";

$_ADDONLANG['admin_msg_license_not_activated_title'] = "SoluteDNS non è attivato";
$_ADDONLANG['admin_msg_license_not_activated_desc'] = "Si prega di verificare la propria licenza in quanto SoluteDNS non è attivato.";

$_ADDONLANG['admin_msg_ns_unavailable_title'] = "Nameserver non disponibile!";
$_ADDONLANG['admin_msg_ns_unavailable_desc'] = "Impossibile connettersi al server dei nomi configurato, controllare le impostazioni del server dei nomi.";

$_ADDONLANG['admin_msg_ns_unconfigured_title'] = "Configurazione del nameserver non valida o mancante";
$_ADDONLANG['admin_msg_ns_unconfigured_desc'] = "Si prega di rivedere i nameserver configurati poiché sembrano incompleti o mancanti.";

$_ADDONLANG['admin_msg_core_db_error_title'] = "Si è verificato un errore del database";
$_ADDONLANG['admin_msg_core_ssh_error_title'] = "Errore SSH";

$_ADDONLANG['admin_msg_core_db_successful_title'] = "Verifica del database completata!";
$_ADDONLANG['admin_msg_core_db_successful_desc'] = "La connessione al database è stata testata con successo.";

$_ADDONLANG['admin_msg_core_ssh_successful_title'] = "Controllo SSH completato!";
$_ADDONLANG['admin_msg_core_ssh_successful_desc'] = "La connessione ssh è stata testata con successo.";


#### CLIENT ####
// Client Menu
$_ADDONLANG['client_menu_overview'] = "Panoramica";
$_ADDONLANG['client_menu_template'] = "Template di Default";
$_ADDONLANG['client_menu_reverse'] = "DNS inverso";

$_ADDONLANG['client_menu_records'] = "Record";
$_ADDONLANG['client_menu_dnssec'] = "DNSsec";

$_ADDONLANG['client_menu_secure'] = "Abilita DNSsec";
$_ADDONLANG['client_menu_unsecure'] = "Disabilita DNSsec";

// Client Manage
$_ADDONLANG['client_manage_records_deleteselected'] = "Elimina Selezionati";

// Client Overview
$_ADDONLANG['client_overview_addzonelimit'] = "Puoi aggiungere fino a <strong>%s</strong> zona.";

// Client Table
$_ADDONLANG['client_table_First'] = "Primo";
$_ADDONLANG['client_table_Last'] = "Ultimo";
$_ADDONLANG['client_table_Next'] = "Successivo";
$_ADDONLANG['client_table_Previous'] = "Precedente";
$_ADDONLANG['client_table_zeroRecords'] = "Nessun Dominio Trovato";

$_ADDONLANG['client_table_overview_info'] = "Visualizzati _START_ alla _END_ dei_TOTAL_ domini";
$_ADDONLANG['client_table_overview_infoEmpty'] = "Sono visualizzati i domini da 0 a 0 di 0 totali";
$_ADDONLANG['client_table_overview_infoFiltered'] = "(da _MAX_ domini totali filtrati)";
$_ADDONLANG['client_table_overview_lengthMenu'] = "Mostra _MENU_ inserimenti";

$_ADDONLANG['client_table_records_emptytable'] = "<h3>Aggiungi <button type=\"button\" class=\"btn btn-success btn-xs\" data-toggle=\"modal\" data-target=\"#dialog_addRecord\" title=\"Agregar Registro\"><span class=\"fas fa-plus\" aria-hidden=\"true\"></span></button> il primo record! Aggiungi record!</h3>";

$_ADDONLANG['client_table_reverse_emptytable'] = "Nessun Indirizzo IP Trovato";

// Client messages
$_ADDONLANG['client_msg_maintenance_title'] = "Gestione DNS non disponibile";
$_ADDONLANG['client_msg_maintenance_desc'] = "Gestione DNS temporaneamente non disponibile per manutenzione. Per favore riprova più tardi.";

$_ADDONLANG['client_msg_access_denied_title'] = "Accesso negato";
$_ADDONLANG['client_msg_access_denied_desc'] = "Non hai i permessi necessari per accedere a questa zona!";

$_ADDONLANG['client_msg_suspended_title'] = "Zona sospesa";
$_ADDONLANG['client_msg_suspended_desc'] = "Questa zona è stata disabilitata. I record non sono più visibili al pubblico!";

$_ADDONLANG['client_msg_system_error_title'] = "Impossibile modificare le impostazioni del DNS!";
$_ADDONLANG['client_msg_system_error_desc'] = "Al momento non puoi modificare nessuna impostazione del DNS per il tuo account. Per favore, riprova più tardi. Se il problema persiste, per favore contatta l'assistenza.";

$_ADDONLANG['client_msg_zone_limit_title'] = "Non riesco ad aggiungere la zona";
$_ADDONLANG['client_msg_zone_limit_desc'] = "Hai raggiunto il numero massimo di zona!";


#### GLOBAL ####
// General
$_ADDONLANG['global_general_records'] = "Record";
$_ADDONLANG['global_general_zones'] = "Zona";
$_ADDONLANG['global_general_domains'] = "Domini";
$_ADDONLANG['global_general_domain'] = "Dominio";
$_ADDONLANG['global_general_loading'] = "Caricamento…";
$_ADDONLANG['global_general_defaulttemplate'] = "Template di Default";
$_ADDONLANG['global_general_dnssec_keys'] = "Chiavi di DNSsec";
$_ADDONLANG['global_general_dnssec_ds'] = "Record di DS";
$_ADDONLANG['global_general_health_issues'] = "Problema di salute";
$_ADDONLANG['global_general_unknown'] = "Sconosciuto";
$_ADDONLANG['global_general_status'] = "Stato";
$_ADDONLANG['global_general_ip'] = "IP";
$_ADDONLANG['global_general_hostname'] = "Nome Host";

// Buttons
$_ADDONLANG['global_btn_add'] = "Aggiungi";
$_ADDONLANG['global_btn_apply'] = "Applica";
$_ADDONLANG['global_btn_delete'] = "Elimina";
$_ADDONLANG['global_btn_cancel'] = "Annulla";
$_ADDONLANG['global_btn_close'] = "Chiudi";
$_ADDONLANG['global_btn_import'] = "Importa";
$_ADDONLANG['global_btn_export'] = "Esporta";
$_ADDONLANG['global_btn_manage'] = "Gestisci";
$_ADDONLANG['global_btn_start'] = "Avvia";
$_ADDONLANG['global_btn_edit'] = "Modifica";

// Status
$_ADDONLANG['global_status_enabled'] = "Abilita";
$_ADDONLANG['global_status_disabled'] = "Disabilita";
$_ADDONLANG['global_status_inactive'] = "Inattivo";
$_ADDONLANG['global_status_none'] = "Nulla";
$_ADDONLANG['global_status_unlimited'] = "Illimitato";
$_ADDONLANG['global_status_na'] = "N/A";
$_ADDONLANG['global_status_noneavailable'] = "Nessuno disponibile";
$_ADDONLANG['global_status_noneregistered'] = "Nessun registrato";
$_ADDONLANG['global_status_default'] = "Predefinito";

// DNS Management
$_ADDONLANG['global_dns_id'] = "ID";
$_ADDONLANG['global_dns_name'] = "Nome";
$_ADDONLANG['global_dns_type'] = "Tipo";
$_ADDONLANG['global_dns_content'] = "Contenuto";
$_ADDONLANG['global_dns_prio'] = "Prio";
$_ADDONLANG['global_dns_ttl'] = "TTL";

$_ADDONLANG['global_dns_minute'] = "minuto";
$_ADDONLANG['global_dns_minutes'] = "minuti";
$_ADDONLANG['global_dns_hour'] = "ora";
$_ADDONLANG['global_dns_day'] = "giorno";

$_ADDONLANG['global_dns_keytag'] = "Tag Chiave";
$_ADDONLANG['global_dns_flag'] = "Flag";
$_ADDONLANG['global_dns_algorithm'] = "Algoritmo";
$_ADDONLANG['global_dns_publickey'] = "Chiave Pubblica";
$_ADDONLANG['global_dns_status'] = "Stato";
$_ADDONLANG['global_dns_digesttype'] = "Tipo di Digest";
$_ADDONLANG['global_dns_digest'] = "Digest";
$_ADDONLANG['global_dns_bits'] = "Bit";

$_ADDONLANG['global_dns_service'] = "Servizio";
$_ADDONLANG['global_dns_protocol'] = "Protocollo";
$_ADDONLANG['global_dns_priority'] = "Priorità";
$_ADDONLANG['global_dns_weight'] = "Peso";
$_ADDONLANG['global_dns_target'] = "Target";
$_ADDONLANG['global_dns_port'] = "Porta";

$_ADDONLANG['global_dns_usage'] = "Uso";
$_ADDONLANG['global_dns_selector'] = "Selettore";
$_ADDONLANG['global_dns_matchingtype'] = "Tipo di corrispondenza";
$_ADDONLANG['global_dns_certificate'] = "Certificato";

// Headers
$_ADDONLANG['global_head_add_record'] = "Aggiungi Record";
$_ADDONLANG['global_head_delete_record'] = "Elimina Record";
$_ADDONLANG['global_head_add_zone'] = "Aggiungi Zona";
$_ADDONLANG['global_head_delete_zone'] = "Elimina Zona";


// Table
$_ADDONLANG['global_table_loading_data'] = "Caricamento dati dal server...";
$_ADDONLANG['global_table_none_available'] = "Nessuno disponibile";

// Assistent
$_ADDONLANG['global_assistant_tlsa_pkixta'] = "PKIX-TA: CA Constraint";
$_ADDONLANG['global_assistant_tlsa_pkixee'] = "PKIX-EE: Service Certificate Constraint";
$_ADDONLANG['global_assistant_tlsa_daneta'] = "DANE-TA: Trust Anchor Assertion";
$_ADDONLANG['global_assistant_tlsa_daneee'] = "DANE-EE: Domain Issued Certificate";
$_ADDONLANG['global_assistant_tlsa_fullcert'] = "Use full certificate";
$_ADDONLANG['global_assistant_tlsa_subjectpublickey'] = "Use subject public key";
$_ADDONLANG['global_assistant_tlsa_256hash'] = "SHA-256 Hash";
$_ADDONLANG['global_assistant_tlsa_512hash'] = "SHA-512 Hash";

$_ADDONLANG['global_assistant_tlsa_pkixta_info'] = "Per un certificato CA o una chiave pubblica di questo certificato che richiede di essere nel percorso di certificazione e deve passare la convalida PKIX (Public-Key Infrastructure).";
$_ADDONLANG['global_assistant_tlsa_pkixee_info'] = "Per un certificato o una chiave pubblica di questo certificato che richiede di abbinare il certificato del server e deve passare la convalida PKIX (Public-Key Infrastructure).";
$_ADDONLANG['global_assistant_tlsa_daneta_info'] = "Per un certificato CA o una chiave pubblica di questo certificato che richiede di essere nel percorso di certificazione. Il record è considerato l'ancora di fiducia.";
$_ADDONLANG['global_assistant_tlsa_daneee_info'] = "Per un certificato o una chiave pubblica di questo certificato che richiede di abbinare il certificato del server.";
$_ADDONLANG['global_assistant_tlsa_certificate_info'] = "Inserisci il certificato X.509 in formato PEM.";

$_ADDONLANG['global_assistant_tlsa_cert_expired_title'] = "Certificato non valido";
$_ADDONLANG['global_assistant_tlsa_cert_expired_desc'] = "Il certificato che hai inserito è scaduto o non è valido e non può essere utilizzato.";

// Messages
$_ADDONLANG['global_msg_changes_saved_title'] = "Le modifiche sono state salvate!";
$_ADDONLANG['global_msg_changes_saved_desc'] = "Tutte le modifiche sono state salvate correttamente.";
$_ADDONLANG['global_msg_changes_saved_exception'] = "Le modifiche sono state salvate correttamente ma i campi contrassegnati sono stati ignorati.";

$_ADDONLANG['global_msg_changes_unable_title'] = "Impossibile salvare le modifiche!";
$_ADDONLANG['global_msg_changes_unable_desc'] = "Impossibile salvare le modifiche, rivedere i campi contrassegnati.";

$_ADDONLANG['global_msg_invalid_request_title'] = "Richiesta Non Valida";
$_ADDONLANG['global_msg_invalid_request_desc'] = "Il sistema non può elaborare la tua richiesta in quanto sembra non essere valida.";

$_ADDONLANG['global_msg_expected_error_title'] = "Diversi record trovati, impossibile completare la richiesta.";

$_ADDONLANG['global_msg_unexpected_error_title'] = "Errore inaspettato";
$_ADDONLANG['global_msg_unexpected_error_desc'] = "Il sistema non ha potuto elaborare la tua richiesta.";

$_ADDONLANG['global_msg_unauthorized_title'] = "non autorizzato";
$_ADDONLANG['global_msg_unauthorized_desc'] = "Non sei autorizzato a eseguire questa operazione.";

$_ADDONLANG['global_msg_dns_error_occurred'] = "Si è verificato un errore durante l'elaborazione della richiesta";
$_ADDONLANG['global_msg_dns_error_occurred_desc'] = "Purtroppo non possiamo elaborare la tua richiesta come si è verificato un errore. <br /> Contatta l'assistenza se hai bisogno di ulteriore assistenza.";

$_ADDONLANG['global_msg_dns_record_error_title'] = "Impossibile effettuare modifiche";

$_ADDONLANG['global_msg_client_not_found_title'] = "Cliente Non Trovato!";
$_ADDONLANG['global_msg_client_not_found_desc'] = "Il cliente non è stato trovato. Impossibile procedere.";

$_ADDONLANG['global_msg_zone_not_found_title'] = "Zona non trovata";
$_ADDONLANG['global_msg_zone_not_found_desc'] = "La zona non è stata trovata.";

$_ADDONLANG['global_msg_reverse_zone_invalid_title'] = "Nome inverso invalido";
$_ADDONLANG['global_msg_reverse_zone_invalid_desc'] = "Il nome della zona sembra non essere valido come zona inversa.";

$_ADDONLANG['global_msg_ip_invalid_title'] = "Indirizzo IP non valido";
$_ADDONLANG['global_msg_ip_invalid_desc'] = "L'indirizzo IP utilizzato sembra non essere valido.";

$_ADDONLANG['global_msg_hostname_invalid_title'] = "Nome Host non valido";
$_ADDONLANG['global_msg_hostname_invalid_desc'] = "Il nome host fornito sembra non essere valido.";

$_ADDONLANG['global_msg_reverse_updated_title'] = "Nome host inverso aggiornato.";
$_ADDONLANG['global_msg_reverse_updated_desc'] = "Il nome host inverso è stato aggiornato con successo.";

$_ADDONLANG['global_msg_dns_record_added_title'] = "Il Record è stato aggiunto!";
$_ADDONLANG['global_msg_dns_record_added_desc'] = "Il nuovo record è stato aggiunto correttamente.";

$_ADDONLANG['global_msg_dns_record_edited_title'] = "Il Record è stato modificato!";
$_ADDONLANG['global_msg_dns_record_edited_desc'] = "Modifiche ai record salvate correttamente.";

$_ADDONLANG['global_msg_dns_record_toggled_title'] = "Il Record è stato %s!";
$_ADDONLANG['global_msg_dns_record_toggled_desc'] = "Il record è stato %s correttamente.";

$_ADDONLANG['global_msg_dns_record_deleted_title'] = "Il Record è stato eliminato!";
$_ADDONLANG['global_msg_dns_record_deleted_desc'] = "Il record è stato eliminato correttamente.";

$_ADDONLANG['global_msg_dns_record_select_deleted_title'] = "%d record sono stati cancellati";
$_ADDONLANG['global_msg_dns_record_select_deleted_desc'] = "I record selezionati sono stati cancellati con successo.";

$_ADDONLANG['global_msg_dns_record_select_no_deleted_title'] = "Nessun record è stato cancellato";
$_ADDONLANG['global_msg_dns_record_select_no_deleted_desc'] = "I record selezionati dove non sono stati cancellati o nessun record se selezionato correttamente.";

$_ADDONLANG['global_msg_dns_sec_rectified_title'] = "Zona rettificata";
$_ADDONLANG['global_msg_dns_sec_rectified_desc'] = "La zona è stata corretta con successo.";

$_ADDONLANG['global_msg_dns_sec_nsec_title'] = "Set NSEC";
$_ADDONLANG['global_msg_dns_sec_nsec_desc'] = "NSEC è stato impostato con successo per questa zona.";

$_ADDONLANG['global_msg_dns_sec_nsec3_title'] = "Set NSEC3";
$_ADDONLANG['global_msg_dns_sec_nsec3_desc'] = "NSEC 3 è stato impostato correttamente per questa zona.";

$_ADDONLANG['global_msg_dns_sec_reload_title'] = "Tasti memorizzati nella cache rimossi";
$_ADDONLANG['global_msg_dns_sec_reload_desc'] = "Le chiavi DNSsec memorizzate nella cache sono state rimosse.";

$_ADDONLANG['global_msg_dns_sec_reset_title'] = "Ripristina chiavi";
$_ADDONLANG['global_msg_dns_sec_reset_desc'] = "Le chiavi DNSsec sono state ripristinate.";

$_ADDONLANG['global_msg_dns_sec_unset_title'] = "DNSsec Unset";
$_ADDONLANG['global_msg_dns_sec_unset_desc'] = "DNSsec è stato disattivato per questa zona.";

$_ADDONLANG['global_msg_dns_sec_unset_queue_title'] = "Rimozione DNSsec avviata";
$_ADDONLANG['global_msg_dns_sec_unset_queue_desc'] = "È stata avviata la rimozione della chiave DNSsec. Le chiavi rimarranno visibili fino al completamento di questo processo.";

$_ADDONLANG['global_msg_dns_sec_addkey_title'] = "Chiave DNSsec aggiunta";
$_ADDONLANG['global_msg_dns_sec_addkey_desc'] = "Una nuova chiave DNSsec è stata aggiunta correttamente.";

$_ADDONLANG['global_msg_dns_sec_activatekey_title'] = "Chiave DNSsec attivata";
$_ADDONLANG['global_msg_dns_sec_activatekey_desc'] = "Una chiave DNSsec è stata attivata correttamente.";

$_ADDONLANG['global_msg_dns_sec_deactivatekey_title'] = "Chiave DNSsec disattivata";
$_ADDONLANG['global_msg_dns_sec_deactivatekey_desc'] = "Una chiave DNSsec è stata disattivata correttamente.";

$_ADDONLANG['global_msg_dns_sec_deletekey_title'] = "Chiave DNSsec cancellata";
$_ADDONLANG['global_msg_dns_sec_deletekey_desc'] = "Una chiave DNSsec è stata cancellata con successo.";

$_ADDONLANG['global_msg_dns_health_reload_title'] = "Stato di salute rinnovato";
$_ADDONLANG['global_msg_dns_health_reload_desc'] = "Lo stato di salute della cache è stato rinominato.";

$_ADDONLANG['global_msg_dns_template_apply_title'] = "Modello DNS applicato";
$_ADDONLANG['global_msg_dns_template_apply_desc'] = "Il modello DNS selezionato è stato applicato a questa zona.";

$_ADDONLANG['global_msg_dns_zone_created_title'] = "La zona%s è stata creata";
$_ADDONLANG['global_msg_dns_zone_created_desc'] = "La zona%s è stata creata con successo.";

$_ADDONLANG['global_msg_dns_zone_unassigned_title'] = "La zona%s è stata non assegnato";
$_ADDONLANG['global_msg_dns_zone_unassigned_desc'] = "La zona%s è stata non assegnato con successo.";

$_ADDONLANG['global_msg_dns_zone_deleted_title'] = "La zona%s è stata cancellata";
$_ADDONLANG['global_msg_dns_zone_deleted_desc'] = "La zona%s è stata cancellata con successo.";

$_ADDONLANG['global_msg_dns_slave_title'] = "Zona Slave!";
$_ADDONLANG['global_msg_dns_slave_desc'] = "Questa zona sembra essere una zona slave e non dovrebbe essere modificata direttamente.";

$_ADDONLANG['global_msg_dns_nozone_title'] = "La zona non esiste";
$_ADDONLANG['global_msg_dns_nozone_desc'] = "La zona che stai cercando di gestire non esiste.";
$_ADDONLANG['global_msg_dns_nozonetemplate_desc'] = "Applicare un modello per creare questa zona.";

// Modals
$_ADDONLANG['global_text_zone_save_title'] = "Vuoi salvare le modifiche?";
$_ADDONLANG['global_text_zone_save_desc'] = "Premi \"Salva modifiche\" per salvare le modifiche apportate.";

$_ADDONLANG['global_text_delete_record'] = "Sei sicuro di voler eliminare questo record?";
$_ADDONLANG['global_text_delete_zone'] = "Sei sicuro di voler eliminare questa zona?";

// Core Error Description
$_ADDONLANG['global_error_3000'] = "La zona esiste già.";
$_ADDONLANG['global_error_3001'] = "La zona non è stata trovata.";
$_ADDONLANG['global_error_3002'] = "Nome zona non valido fornito.";
$_ADDONLANG['global_error_3003'] = "La zona slave non può essere modificata direttamente.";
$_ADDONLANG['global_error_3004'] = "Non è stato fornito alcun nome di zona.";

$_ADDONLANG['global_error_4000'] = "I record massimi consentiti sono stati raggiunti.";

$_ADDONLANG['global_error_5000'] = "Errore di licenza, consultare l'array di licenze restituito per risolvere il problema.";
$_ADDONLANG['global_error_5001'] = "Il database del server dei nomi non è disponibile.";
$_ADDONLANG['global_error_5002'] = "Sono state raggiunte le zone con licenza massima.";

$_ADDONLANG['global_error_6000'] = "Impossibile accedere o connettersi al servizio SSH.";
$_ADDONLANG['global_error_6001'] = "È stata fornita una sessione SSH errata.";
$_ADDONLANG['global_error_6002'] = "Si è verificato un errore SSH:{error-message}";
$_ADDONLANG['global_error_6003'] = "Impossibile proteggere la zona.";

$_ADDONLANG['global_error_7000'] = "Uno o più nameserver non è riuscito a segnalare.";
$_ADDONLANG['global_error_7001'] = "Non tutti i server dei nomi sono d'accordo sul serial SOA per questa zona.";
$_ADDONLANG['global_error_7002'] = "Il registro ha restituito uno o più nameserver sconosciuti.";
$_ADDONLANG['global_error_7003'] = "Ci sono record NS in questa zona che non sono noti dal registro.";
$_ADDONLANG['global_error_7004'] = "C'è uno o più nameserver che non sembrano essere autorevoli per questa zona.";
$_ADDONLANG['global_error_7005'] = "Sembra che il dominio stia utilizzando un diverso cluster DNS.";
$_ADDONLANG['global_error_7006'] = "C'è uno o più record con errori in questa zona.";
$_ADDONLANG['global_error_7007'] = "C'è uno o più record con avvisi in questa zona.";

// Core DNS Validation
$_ADDONLANG['global_validation_NO_DATABASE'] = "Impossibile convalidare. Connessione al database non disponibile.";
$_ADDONLANG['global_validation_ZONE_NOT_FOUND'] = "Zona non trovata. Impossibile elaborare la richiesta.";
$_ADDONLANG['global_validation_RECORD_NOT_FOUND'] = "Il record non è stato trovato.";
$_ADDONLANG['global_validation_DOMAIN_NOT_IN_NAME'] = "Il campo nome deve contenere il nome del dominio.";
$_ADDONLANG['global_validation_ZONE_NAME_INVALID'] = "Il nome della zona non è un FQHN.";
$_ADDONLANG['global_validation_INVALID_FQHN'] = "Questo record deve contenere un nome host valido, non terminare con un punto (.).";
$_ADDONLANG['global_validation_NOT_UNIQUE'] = "Sono presenti record simili.";
$_ADDONLANG['global_validation_NO_UNIQUE_NAME'] = "Esiste già un record con un nome simile mentre questo tipo di record richiede un nome univoco.";
$_ADDONLANG['global_validation_EXISTING_UNIQUE_NAME'] = "Esiste già un record che richiede un nome univoco.";
$_ADDONLANG['global_validation_NON_ALIAS_TARGET'] = "Non puoi associare un record NS o MX a un record CNAME.";
$_ADDONLANG['global_validation_TYPE_EMPTY'] = "Il tipo di campo deve essere specificato.";
$_ADDONLANG['global_validation_INVALID_TYPE'] = "Il tipo di campo non è riconosciuto.";
$_ADDONLANG['global_validation_TYPE_UNALLOWED'] = "Il sistema non può processare la tua richiesta perché questo tipo di record non è consentito.";
$_ADDONLANG['global_validation_INVALID_TTL'] = "Il valore di TTL deve essere numerico.";
$_ADDONLANG['global_validation_CONTENT_TOO_LONG'] = "Il valore inserito è troppo lungo e non può contenere più di 4096 caratteri.";
$_ADDONLANG['global_validation_INVALID_IPV4'] = "L'indirizzo IPv4 non sembra essere valido.";
$_ADDONLANG['global_validation_INVALID_IPV6'] = "L'indirizzo IPv6 non sembra essere valido. Gli indirizzi IPv4 in forma IPv6 non sono supportati.";
$_ADDONLANG['global_validation_RECORD_NO_PRIORITY'] = "Un record MX richiede di specificare una priorità numerica.";
$_ADDONLANG['global_validation_RECORD_INVALID_PRIORITY'] = "Un record MX richiede di specificare una priorità numerica.";
$_ADDONLANG['global_validation_INVALID_ARPA'] = "Nome inverso non valido.";
$_ADDONLANG['global_validation_SOA_PARTS_MISSING'] = "Il record SOA deve contenere: {primary-ns} {hostmaster} {serial} {refresh} {retry} {expire} {default_ttl}";
$_ADDONLANG['global_validation_SOA_PART_0_INVALID'] = "Il dominio di nameserver primario non è valido.";
$_ADDONLANG['global_validation_SOA_PART_1_INVALID'] = "L'indirizzo email dell'hostmaster non è valido.";
$_ADDONLANG['global_validation_SOA_PART_INVALID'] = "Il SOA parte %s deve essere numerico.";
$_ADDONLANG['global_validation_INVALID_NOT_QUOTED'] = "Il commento deve essere quotato (\").";
$_ADDONLANG['global_validation_NAPTR_PARTS_MISSING'] = "Un record NAPTR deve contenere (incluse le quote e il punto finale) la sostituzione di: {order} {preference} \"{flags}\" \"{service}\" \"{regexp}\".";
$_ADDONLANG['global_validation_NAPTR_PART_INVALID'] = "La parte di record %s deve essere numerica.";
$_ADDONLANG['global_validation_NAPTR_PART_QUOTE_INVALID'] = "La parte di record %s deve essere quotata.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAGS_INVALID'] = "La parte di record %s contiene caratteri non validi. Questa parte può contenere solo caratteri alfanumerici.";
$_ADDONLANG['global_validation_NAPTR_PART_EX_FLAGS_INVALID'] = "La parte di record %s contiene troppi FLAGS (S, A, U). È possibile utilizzarne uno per volta.";
$_ADDONLANG['global_validation_NAPTR_PART_TERMINAL_FLAG_INVALID'] = "Un SERVICE (parte di record %s) deve essere specificato se i FLAGS includono un flag terminale.";
$_ADDONLANG['global_validation_NAPTR_PART_SERVICE_INVALID'] = "Il SERVICE (parte di record %s) sembra non essere valido.";
$_ADDONLANG['global_validation_NAPTR_PART_DELIMITER_INVALID'] = "La sostituzione POSIX regexp (parte di record %s) non è valida. Il separatore non dovrebbe essere: 'i', o un numero.";
$_ADDONLANG['global_validation_NAPTR_PART_MISSING_INVALID'] = "La sostituzione POSIX regexp (parte di record %s) non è valida. Non tutte le parti richieste sono state specificate.";
$_ADDONLANG['global_validation_NAPTR_PART_BACKREF_INVALID'] = "La sostituzione POSIX regexp (parte di record %s) non è valida. Solo in riferimento back può essere utilizzato, e dovrebbe essere del tipo '1'.";
$_ADDONLANG['global_validation_NAPTR_PART_FLAG_INVALID'] = "Il flag POSIX regexp di (parte di record %s) non è valido. Può contenere 'i' o essere vuoto.";
$_ADDONLANG['global_validation_NAPTR_PART_EMPTY_INVALID'] = "La parte di record %s non è valida e deve essere un puntatore di record o un singolo punto.";
$_ADDONLANG['global_validation_NAPTR_PART_SIM_INVALID'] = "Le variabili REGEXP e REPLACEMENT (parte di record %s) non possono essere utilizzate contemporaneamente.";
$_ADDONLANG['global_validation_NAPTR_PART_REPLACEMENT_INVALID'] = "La variabile REPLACEMENT (parte di record %s) deve essere '.' o un dominio valido.";
$_ADDONLANG['global_validation_RP_PARTS_MISSING'] = "I record RP devono avere: {mailbox name} {more info pointer}";
$_ADDONLANG['global_validation_RP_PART_0_INVALID'] = "Il nome della mailbox deve essere un indirizzo email con la chiocciola (@) rimpiazzata da un punto (.).";
$_ADDONLANG['global_validation_RP_PART_1_INVALID'] = "Il puntatore more-info deve essere un nome di dominio valido.";
$_ADDONLANG['global_validation_TLSA_PARTS_MISSING'] = "Un record TLSA deve contenere: {usage} {selector} {type} {fingeprint}";
$_ADDONLANG['global_validation_TLSA_PART_0_INVALID'] = "Deve essere fornito un campo di utilizzo tra 0 (PKIX-TA), 1 (PKIX-EE), 2 (DANE-TA) o 3 (DANE-EE).";
$_ADDONLANG['global_validation_TLSA_PART_1_INVALID'] = "Deve essere fornito un campo selettore tra 0 (Match full certificate) o 1 (Match only SubjectPublicKeyInfo).";
$_ADDONLANG['global_validation_TLSA_PART_2_INVALID'] = "Deve essere fornito un campo di associazione tra 0 (Exact match), 1 (SHA-256 hash) or 2 (SHA-512 hash).";
$_ADDONLANG['global_validation_TLSA_PART_3_INVALID'] = "Deve essere fornita una impronta digitale SHA-256 con 64 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validation_TLSA_PART_4_INVALID'] = "Deve essere fornita una impronta digitale SHA-512 con 128 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validation_CAA_PARTS_MISSING'] = "I record CAA devono avere: &lt;flag&gt; &lt;tag&gt; &lt;value&gt;.";
$_ADDONLANG['global_validation_CAA_PART_0_INVALID'] = "Il flag (parte 1) deve essere numerico e tra 0-255.";
$_ADDONLANG['global_validation_CAA_PART_1_INVALID'] = "Il tag (parte 2) deve essere: issue, issuewild o iodef.";
$_ADDONLANG['global_validation_CAA_PART_2_INVALID'] = "Il valore (parte 3) deve essere indicato.";
$_ADDONLANG['global_validation_SSHFP_PARTS_MISSING'] = "Un record SSHFP deve contenere: {algorithm} {fp-type} {fingeprint}";
$_ADDONLANG['global_validation_SSHFP_PART_O_INVALID'] = "Deve essere fornito almeno un algoritmo tra: 1 (RSA), 2 (DSA) o 3 (ECDSA).";
$_ADDONLANG['global_validation_SSHFP_PART_1_INVALID'] = "Deve essere fornito almeno un fp-type tra: 1 (SHA-1) o 2 (SHA-256).";
$_ADDONLANG['global_validation_SSHFP_PART_2_INVALID'] = "Deve essere fornita una impronta digitale SHA-1 con 40 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validation_SSHFP_PART_3_INVALID'] = "Deve essere fornita una impronta digitale SHA-256 con 64 caratteri ASCII esadecimali.";
$_ADDONLANG['global_validation_SRV_MISSING_PRIORITY'] = "Deve essere fornita una priorità.";
$_ADDONLANG['global_validation_SRV_PARTS_MISSING'] = "Il record SRV deve contenere: {weight} {port} {service}";
$_ADDONLANG['global_validation_SRV_PART_WEIGHT_INVALID'] = "Parte %s (Il peso) deve essere numerico.";
$_ADDONLANG['global_validation_SRV_PART_PORT_INVALID'] = "Parte %s (La porta) deve essere numerica.";
$_ADDONLANG['global_validation_SRV_PART_SERVICE_INVALID'] = "Un record SRV deve contenere un dominio valido come servizio.";
$_ADDONLANG['global_validation_HINFO_INVALID'] = "Il campo HINFO contiene un valore non valido.";
$_ADDONLANG['global_validation_LUA_PARTS_MISSING'] = "I record LUA devono avere: &lt;tipo di record&gt; &lt;regola lua&gt;.";
$_ADDONLANG['global_validation_LUA_PART_0_INVALID'] = "Il tipo di record fornito: '%s' non è valido e non può essere utilizzato.";
$_ADDONLANG['global_validation_LUA_PART_1_INVALID'] = "A syntax error occurred. The LUA rules must be quoted (\") or must be inside parentheses.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_FLAG'] = "La bandiera non è valida.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_BITS'] = "I bit non sono validi.";
$_ADDONLANG['global_validation_ZONE_KEY_INVALID_ALGORITHM'] = "L'algoritmo non è valido.";

// NO JAVASCRIPT
$_ADDONLANG['nojavascript_title'] = "JavaScript Disabilitato";
$_ADDONLANG['nojavascript_desc'] = "Questa pagina richiede che JavaScript sia abilitato per un corretto funzionamento. Per favore, attiva JavaScript nel tuo browser per continuare.";


// Override File
if (file_exists(dirname(__FILE__) . '/override/spanish.php')) {
	include dirname(__FILE__) . '/override/spanish.php';
}
