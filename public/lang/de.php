<?php
$lang=array(
	'Settings'=>'Einstellungen',
	'Profile'=>'Profile',
	'Support'=>'Hilfe',

	'Overview'=>'Übersicht',
		'Summary Overview'=>'Zusammenfassung Übersicht',
	'Jails containers'=>'Jail containers',
		'Jails containers control panel'=>'Jail containers Einstellungen',
	'Template for jail'=>'Template für jail',
		'Helpers and wizard for containers'=>'Hilfe und Assistenten für Containers',
	'Helpers of jails'=>'Unterstützung of jails',
		'Virtual machine control panel'=>'Virtual Machine Einstellungen',
	'Bhyve VMs'=>'Bhyve VMs',
		'Virtual machine control panel'=>'Virtual Machine Einstellungen',
	'Nodes'=>'Nodes',
		'Nodes control panel'=>'Nodes Einstellungen',
	'VM Packages'=>'VM Pakete',
		'Manage for virtual machine packages'=>'Einrichten von VM Paketen',
	'Virtual Private Network'=>'Virtual Private Network',
		'Manage for virtual private networks'=>'Einstellungen für VPNs',
	'Authkeys'=>'Authkeys',
		'Manage for SSH auth key'=>'Einstellungen für SSH Schlüssel',
	'Storage Media'=>'Speichermedien',
		'Virtual Media Manager'=>'Virtual Media Verwaltung',
	'Repository'=>'Repository',
		'Remote repository'=>'Remote repository',
	'FreeBSD Bases'=>'FreeBSD Verwaltung',
		'FreeBSD bases manager'=>'FreeBSD Bases Verwaltung',
	'FreeBSD Sources'=>'FreeBSD Sources',
		'FreeBSD sources manager'=>'FreeBSD Sources Verwaltung',
	'Jail Marketplace'=>'Jail Marktplatz',
		'Public remote containers marketplace'=>'Öffentlicher Container Marktplatz',
	'Bhyve Marketplace'=>'Bhyve Marktplatz',
		'Public remote virtual machine marketplace'=>'Öffentlicher VM Marktplatz',
	'TaskLog'=>'TaskLog',
		'System task log'=>'System Prozess log',
	
	'Not implemented yet'=>'Noch nicht implementiert',
	

	'Not Launched'=>'Nicht gestartet',
	'Starting'=>'Starte',
	'Launched'=>'Gestartet',
	'Creating'=>'Erstellen',
	'Created'=>'Erstellen',
	'Stopping'=>'Stoppen',
	'Stopped'=>'Gestoppt',
	'Removing'=>'Entfernen',
	'Exporting'=>'Exportieren',
	'Cloning'=>'Kopieren',
	'Cloned'=>'Kopiert',
	'Restarting'=>'Neustarten',
	'Restarted'=>'Negestartet',
	'Maintenance'=>'Wartung',
	
	'Create jail'=>'Erstelle jail',
	'Edit jail'=>'Modifiziere jail',
	'Jail Settings'=>'Jail Einstellungen',
	'Jail name'=>'Jail Name',
	'Hostname'=>'Hostname',
	'available on the jail is not running'=>'Nur verfügbar, wenn die Jail nicht läuft',
	'IP address'=>'IP address',
	'Root password'=>'Root password (optional)',
	'Root password (again)'=>'Root password (again)',
	'Description'=>'Beschreibung',
	'Net Interface'=>'Netzwerk Interface',
	'Parameters'=>'Parameter',
	'Autostart'=>'Autostart',
	'Autostart jail at system startup'=>'Starte Jail beim Systemstart',
	'Base writable'=>'Base beschreibbar',
	'Virtual network stack (VIMAGE)'=>'Virtual Network Stack (VIMAGE)',
	'Mount'=>'Mount',
	'Enabled services'=>'Aktiviere services',
	'Create'=>'Erstellen',
	'Cancel'=>'Abbrechen',
	'Save'=>'Speichern',
	
	'Delete'=>'Löschen',
	'Protected jail'=>'Geschützte jai',
	'Open VNC'=>'Open VNC',
	'Restart jail'=>'Starte Jail neu',
	'Restart bhyve'=>'Starte VM neu',

	//err_messages
	'Can not be empty. Name must begin with a letter / a-z / and not have any special symbols: -,.=%'=>'Kann nicht leer sein und muss starten mit / a-z / und darf keiner Sonderzeichen enthalten: -,.=%',
	'This field can not be empty'=>'Das Feld dard nicht leer sein',
	'Write correct ip address, e.g: 10.0.0.2'=>'Bitte valide IP-Adresse angeben wie z.B.: 10.0.0.2',
	'Password can not be less than 3 symbols'=>'Passwort darf nicht unter 3 Zeichen sein',
	'Please retype password correctly'=>'Bitte Passwort korrekt neu eingeben',
	
	'edit'=>'Bearbeiten',
	'clone'=>'Kopieren',
	'export'=>'Exportieren',
	'helpers'=>'Hilfe',
	'rename'=>'Umbenennen',
	
	'default is'=>'Stadnard ist',
	
	'Create Virtual Machine'=>'Erstelle Virtual Machine',
	'Create Virtual Machine from Library'=>'Erstelle Virtual Machine aus Bibliothek',
	'Virtual Machine Settings'=>'Virtual Machine Einstellungen',
	'Virtual Machine name'=>'Virtual Machine Name',
	'VM OS profile'=>'VM OS Profil',
	'Authkey'=>'Authkey',
	'VM CPUs'=>'vCPU core',
	'VM RAM'=>'RAM',
	'VM Image size'=>'Image Disk Größe',
	'VNC PORT'=>'VNC port ( 0 - ist Standard )',
	'VM Password'=>'Root Passwort',
	
	'Create Authkey'=>'Erstelle Authkey',
	'Authkey name'=>'Authkey Name',
	'Authkey'=>'Authkey',
	
	'Open'=>'Öffne',
	'Close'=>'Schließe',
	'Get'=>'Erhalte',
	'Update'=>'Aktualisieren',
	
	'Updating'=>'Aktualisiere',
	'Version'=>'Version',
	'Version number'=>'Versions Nummer (z.B.: 12.2, 13)',
	
	'Source'=>'Quelle',
	
	'@clone_warning@'=>'<strong>ACHTUNG!</strong> Kopieren eines laufenden Containers kann zu Dateninkonsistenz führen. Bitte stoppen Sie erst den Container!',
	
	'edit_title'=>'Anpassen',
	'delete_title'=>'Löschen',
	
	'Please, wait for initialize Virtual Machine'=>'Bitte warten Sie, bis die VM initialisiert wurde',
	'You can click here, or wait'=>'Hier klicken oder warten',
	'some time'=>'einige Zeit',

	'host_hostname'=>'Jail Fully Qualified Domain Name',
	'ip4_addr'=>'Jail IPv4 und/oder IPv6 Addresse',
	'allow_mount'=>'Erlaube priviligierten Benutzern innerhalb der Jail das Einbinden von Dateisystemen',
	'allow_nullfs'=>'Erlaube priviligierten Benutzern innerhalb der Jail NULLFS Dateisystem',
	'allow_fdescfs'=>'Jail darf das fdescfs file system einbinden',
	'interface'=>'Automatisches Erstllen und Entfernen von IP Adressen auf ausgewählten NICs. 0 zum deaktivieren',
	'baserw'=>'Jail hat eine vollständige Kopie des Basis-Systemens. Kein NULLFS mount',
	'mount_ports'=>'Jail hat /usr/ports /usr/ports tree nur lesend',
	'astart'=>'Starte Jail beim Systemstart',
	'vnet'=>'Aktiviere Virtual Network Stack (VNET/VIMAGE)',
	'mount_fdescfs'=>'Binde ein FDESCFS Dateisystem ein',
	'allow_tmpfs'=>'Erlaube priviligierten Benutzern innerhalb der Jail das Einbinden von TMPFS Dateisystemen',
	'allow_zfs'=>'Erlaube priviligierten Benutzern innerhalb der Jail das Einbinden von ZFS Dateisystemen',
	'protected'=>'Erstellen von geschützten und nicht löschbaren Umgebungen',
	'allow_reserved_ports'=>'Erlaube der Jail Ports unterhalb von 1024 zu binden',
	'allow_raw_sockets'=>'Erlaube der Jail RAW Sockets zu erstellen',
	'allow_fusefs'=>'Erlaube priviligierten Benutzern innerhalb der Jail das Einbinden von FUSE Dateisysteme',
	'allow_read_msgbuf'=>'Erlaube unpriviligierte Benutzern den Kernel Buffer zu lesen',
	'allow_vmm'=>'Jail darf auf vmm(4) zugreifen',
	'allow_unprivileged_proc_debug'=>'Erlaube unpriviligierten Prozessen Debug Optionen zu nutzen',
	
	//''=>'',
);