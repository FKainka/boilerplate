# Idee: 
Modul um u.A. Öffnungszeiten aus dem Shop DP zu laden

1) Globale einstellungen mit Zugriff auf Datenbank und auswahl der Attribute
2) Custom Field zum einstellen der Shop ID
3) Einbindung in Editor

Name: 
gp_shop


# Anpassungen: 

1. Do a **case-sensitive** replace on the following strings and replace them with your own name:
   * foo
   * Foo
   * FOO
2. Do a **case-sensitive** replace on the following tags with their actual information:
   * [DATE]
   * [PROJECT_NAME]
   * [AUTHOR]
   * [AUTHOR_EMAIL]
   * [AUTHOR_URL]
   * [COPYRIGHT]
   * [PACKAGE_NAME]

# Ordner


# Custom Fields?

https://blog.astrid-guenther.de/joomla-custom-fields-im-backend-integrieren/

# Dateien und Ordner: Modul

### modules/mod_foo/ language/en-GB/en-GB.mod_foo.ini
#### modules/mod_foo/ language/en-GB/en-GB.mod_foo.sys.ini
Sprach-Dateien

### modules/mod_foo/ mod_foo.php
 ist der Haupteinstiegspunkt ins Modul. Die Datei führt die Initialisierungsroutinen aus, ruft Hilfsroutinen auf, um alle erforderlichen Daten zu erfassen, und ruft das Template auf, in dem die Modulausgabe angezeigt wird.

### modules/mod_foo/ mod_foo.xml
 definiert die Dateien, die von der Installationsroutine kopiert werden und gibt Konfigurationsparameter für das Modul an. Du kennst dies bereits von den vorher erstellten Erweiterungen.

### modules/mod_foo/tmpl/default.php
ist das Template. Diese Datei nimmt die von mod_foo.php gesammelten Daten und generiert den HTML-Code, der auf der Seite angezeigt wird. echo '[PROJECT_NAME]'; sorgt dafür, dass der Name des Projekts im Frontend an der Position angezeigt wird, an der das Modul veröffentlicht ist.  In der Templatedatei ist es möglich, alle in mod_foo.php definierten Variablen zu verwenden.

### modules/mod_foo/ Helper/FooHelper.php
Helfer Datei zum geneiren von Inhalten

### modules/mod_foo/ script.php
Mit der Installationsskriptdatei rufst du Code auf

* wenn deine Komponente installiert wird,
* bevor deine Komponente installiert wird,
* wenn deine Komponente deinstalliert wird,
* bevor deine Komponente deinstalliert wird,
* oder wenn deine Komponente aktualisiert wird.
