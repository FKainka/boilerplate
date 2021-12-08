Aktuell bei Nr20


- [Dateien und Ordner](#dateien-und-ordner)
  * [Backend 1](#backend-1)
    + [administrator/components/ com_foos/ foos.xml](#administrator-components--com-foos--foosxml)
    + [administrator/components/com_foos/ script.php](#administrator-components-com-foos--scriptphp)
    + [administrator/components/ com_foos/ services/provider.php](#administrator-components--com-foos--services-providerphp)
    + [administrator/components/ com_foos/ src/Controller/DisplayController.php](#administrator-components--com-foos--src-controller-displaycontrollerphp)
    + [administrator/components/ com_foos/ src/Extension/FoosComponent.php](#administrator-components--com-foos--src-extension-fooscomponentphp)
    + [administrator/components/ com_foos/ src/Service/HTML/AdministratorService.php](#administrator-components--com-foos--src-service-html-administratorservicephp)
    + [administrator/components/ com_foos/ src/View/Foos/HtmlView.php](#administrator-components--com-foos--src-view-foos-htmlviewphp)
    + [administrator/components/ com_foos/ tmpl/foos/default.php](#administrator-components--com-foos--tmpl-foos-defaultphp)
    + [Ab hier: Einzelnes Element bearbeiten](#ab-hier--einzelnes-element-bearbeiten)
    + [administrator/components/ com_foos/ forms/foo.xml](#administrator-components--com-foos--forms-fooxml)
    + [administrator/components/ com_foos/ src/Controller/FooController.php](#administrator-components--com-foos--src-controller-foocontrollerphp)
    + [administrator/components/ com_foos/ src/Table/FooTable.php](#administrator-components--com-foos--src-table-footablephp)
    + [administrator/components/ com_foos/ src/Model/FooModel.php](#administrator-components--com-foos--src-model-foomodelphp)
    + [administrator/components/ com_foos/ src/View/Foo/HtmlView.php](#administrator-components--com-foos--src-view-foo-htmlviewphp)
    + [administrator/components/ com_foos/ tmpl/foo/edit.php](#administrator-components--com-foos--tmpl-foo-editphp)
    + [administrator/components/com_foos/ tmpl/foos/emptystate.php](#administrator-components-com-foos--tmpl-foos-emptystatephp)
    + [administrator/components/ com_foos/ src/Field/Modal/FooField.php](#administrator-components--com-foos--src-field-modal-foofieldphp)
    + [administrator/components/ com_foos/ tmpl/foos/modal.php](#administrator-components--com-foos--tmpl-foos-modalphp)
    + [administrator/components/ com_foos/config.xml](#administrator-components--com-foos-configxml)
    + [administrator/components/ com_foos/ access.xml](#administrator-components--com-foos--accessxml)
    + [administrator/components/ com_foos/ src/Rule/LetterRule.php](#administrator-components--com-foos--src-rule-letterrulephp)
    + [administrator/components/ com_foos/ src/Controller/FoosController.php](#administrator-components--com-foos--src-controller-fooscontrollerphp)
  * [Media](#media)
    + [media/com_foos/joomla.asset.json](#media-com-foos-joomlaassetjson)
    + [media/com_foos/js/admin-foos-modal.js](#media-com-foos-js-admin-foos-modaljs)
    + [media/com_foos/js/admin-foos-letter.js](#media-com-foos-js-admin-foos-letterjs)
  * [Updates](#updates)
    + [foo_update.xml](#foo-updatexml)
  * [Frontend](#frontend)
    + [components/com_foos/ src/Controller/DisplayController.php](#components-com-foos--src-controller-displaycontrollerphp)
    + [components/com_foos/ src/View/Foo/HtmlView.php](#components-com-foos--src-view-foo-htmlviewphp)
    + [components/com_foos/ tmpl/foo/default.php](#components-com-foos--tmpl-foo-defaultphp)
    + [components/com_foos/ tmpl/foo/default.xml](#components-com-foos--tmpl-foo-defaultxml)
    + [components/com_foos/ src/Model/FooModel.php](#components-com-foos--src-model-foomodelphp)
    + [components/com_foos/ src/View/Foo/HtmlView.php](#components-com-foos--src-view-foo-htmlviewphp-1)
    + [components/com_foos/ tmpl/foo/default.php](#components-com-foos--tmpl-foo-defaultphp-1)
  * [Sprachdateien](#sprachdateien)
    + [administrator/components/ com_foos/language/en-GB/com_foos.ini](#administrator-components--com-foos-language-en-gb-com-foosini)
      - [administrator/components/ com_foos/ language/de-DE/com_foos.ini](#administrator-components--com-foos--language-de-de-com-foosini)
    + [administrator/components/ com_foos/ language/en-GB/com_foos.sys.ini](#administrator-components--com-foos--language-en-gb-com-foossysini)
      - [administrator/components/com_foos/ language/de-DE/com_foos.sys.ini](#administrator-components-com-foos--language-de-de-com-foossysini)
    + [components/com_foos/language/en-GB/com_foos.ini](#components-com-foos-language-en-gb-com-foosini)
      - [components/com_foos/language/de-DE/com_foos.ini](#components-com-foos-language-de-de-com-foosini)
  * [Datenbank](#datenbank)
    + [administrator/components/ com_foos/ sql/install.mysql.utf8.sql](#administrator-components--com-foos--sql-installmysqlutf8sql)
    + [administrator/components/ com_foos/ sql/uninstall.mysql.utf8.sql](#administrator-components--com-foos--sql-uninstallmysqlutf8sql)
    + [administrator/components/ com_foos/ src/Model/FoosModel.php](#administrator-components--com-foos--src-model-foosmodelphp)
    + [administrator/components/ com_foos/ sql/updates/mysql/VERSIONSNUMMER.sql](#administrator-components--com-foos--sql-updates-mysql-versionsnummersql)
- [Sonstiges](#sonstiges)
  * [Text Tricks](#text-tricks)
    + [Text::sprintf](#text--sprintf)
    + [Text::plural('COM_FOOS_N_ITEMS_FEATURED', count($ids));](#text--plural--com-foos-n-items-featured---count--ids---)
    + [Text::_('COM_FOOS_NAME')](#text-----com-foos-name--)
    + [Globale Sprachstrings](#globale-sprachstrings)
  * [Zugriff auf Funktionen](#zugriff-auf-funktionen)
  * [CDATA](#cdata)
  * [Zugriff auf Datenbanke mit JDatabase](#zugriff-auf-datenbanke-mit-jdatabase)
  * [Dokumentations und Kommentarstil](#dokumentations-und-kommentarstil)
- [Wichtige Namesspaces und Funktionen](#wichtige-namesspaces-und-funktionen)
  * [Logging](#logging)
  * [Database](#database)

<small><i><a href='http://ecotrust-canada.github.io/markdown-toc/'>Table of contents generated with markdown-toc</a></i></small>

# Dateien und Ordner

## Backend 1 
### administrator/components/ com_foos/ foos.xml
Wie wird die Komponente installiert
Hier auch links von installations zu zielordner

### administrator/components/com_foos/ script.php
Mit der Installationsskriptdatei rufst du Code auf

* wenn deine Komponente installiert wird,
* bevor deine Komponente installiert wird,
* wenn deine Komponente deinstalliert wird,
* bevor deine Komponente deinstalliert wird,
* oder wenn deine Komponente aktualisiert wird.

### administrator/components/ com_foos/ services/provider.php
wird zum Implementieren der Komponentendienste verwendet. Über eine Schnittstelle definiert die Komponentenklasse, welche Dienste sie bereitstellt. 
DI: Dependency Injection


### administrator/components/ com_foos/ src/Controller/DisplayController.php
Die Datei DisplayController.php ist der Einstiegspunkt für den Model-View-Controller-Teil des Administrationsbereichs der Foo-Komponente
Default View: src\administrator\components\com_foos\tmpl\foos\default.php
oder src\components\com_foos\tmpl\foos\default.php

### administrator/components/ com_foos/ src/Extension/FoosComponent.php
ist der Code zum Booten der Erweiterung. Es ist die erste Datei, die aufgerufen wird, wenn Joomla die Komponente lädt. boot ist die Funktion zum Einrichten der Umgebung der Erweiterung wie beispielsweise das Registrieren neuer Klassen.

### administrator/components/ com_foos/ src/Service/HTML/AdministratorService.php
wird später verwendet, um Funktionen wie die Mehrsprachigkeit oder Haupteinträge/Featured hinzuzufügen. 

### administrator/components/ com_foos/ src/View/Foos/HtmlView.php
definiert Objekte (Symbolleiste, Titel) und ruft das Modell (Daten) auf. In der Datei HtmlView.php werden alle Schaltflächen und Titel der Symbolleiste definiert.

### administrator/components/ com_foos/ tmpl/foos/default.php
Die Datei default.php ist das Template zum Rendern der Ansicht. In ihr befindet sich der Text, den wir anzeigen


### Ab hier: Einzelnes Element bearbeiten

### administrator/components/ com_foos/ forms/foo.xml
https://blog.astrid-guenther.de/die-datenbank-nutzen/
Formular für Elementänderungen im Backend

### administrator/components/ com_foos/ src/Controller/FooController.php
? Controller Klasse BE für die Elemente

### administrator/components/ com_foos/ src/Table/FooTable.php
Zugriff auf die Datenbanktabelle. Wichtig ist das Setzten von $this->typeAlias und die Angabe des Namens der Tabelle #__foos_details.

### administrator/components/ com_foos/ src/Model/FooModel.php
Jetzt erstellen wir das Model, mit dem die Daten für ein Element abgeholt werden.
Erstellt die Formular ansicht

### administrator/components/ com_foos/ src/View/Foo/HtmlView.php
organisiert die Ansicht eines Elements. Nicht verwechseln mit FooS!

### administrator/components/ com_foos/ tmpl/foo/edit.php
die Ansicht implementiert, die zum Bearbeiten aufgerufen wird. Mir ist wichtig, dass ich den Webassetmanager $wa = $this->document->getWebAssetManager(); an dieser Stelle anspreche. Der ist in Joomla 4 neu. Du lädst zwei JavaScript Dateien via Webassetmanager. useScript('keepalive') lädt media/system/js/keepalive.js und hält deine Sitzung am Leben, während du ein Element bearbeitest oder erstellst. useScript('form.validate') lädt mit media/system/js/core.js eine Menge hilfreicher Funktionen. Zum Beispiel die Validierung.

### administrator/components/com_foos/ tmpl/foos/emptystate.php
 erstellen wir ein spezielles Layout für den Fall, dass die Komponente kein Element enthält und somit leer ist.

### administrator/components/ com_foos/ src/Field/Modal/FooField.php
 das Formularfeld, über welches es möglich ist, ein Foo-Element auszuwählen, beziehungsweise abzuwählen. 

### administrator/components/ com_foos/ tmpl/foos/modal.php
Die Auswahl öffnen wir über das FooField in einem Modal-Fenster. Ein Modal ist ein Bereich, der sich im Vordergrund einer Webseite öffnet und deren Zustand ändert. Es ist erforderlich, diesen aktiv zu schließen. Modale Dialoge sperren den Rest der Anwendung solange der Dialog angezeigt wird. Ein Modal wird ebenfalls Dialog oder Lightbox genannt.


### administrator/components/ com_foos/config.xml
Diese implementiert die Konfigurations-Parameter. In der XML-Datei kannst du wie gewohnt auf alle Standard-Formular-Feldtypen zurückgreifen oder analog des bereits erstellten Modalfeldes FieldFoo eigene Typen implementieren.

### administrator/components/ com_foos/ access.xml
alle möglichen Berechtigungen in einer XML-Datei. Jede Komponente kann individuelle Berechtigungen definieren. core.admin legt dabei fest, welche Gruppen die Berechtigungen auf Komponentenebene über die Schaltfläche Optionen in der Symbolleiste konfigurieren dürfen. core.manage bestimmt, welche Gruppen auf das Backend der Komponente zugreifen dürfen.

### administrator/components/ com_foos/ src/Rule/LetterRule.php
Validierung von Eingaben (Serverseitig): iese Prüfung implementieren wir in der Datei LetterRule.php. Z.B durch reguläre Asudrücke aber auch durch Funktionen
Validierung durch: <fieldset addruleprefix="FooNamespace\Component\Foos\ Administrator\Rule"> und validate="Letter".

### administrator/components/ com_foos/ src/Controller/FoosController.php
? Veröffentlichung, Status Controller?

## Media

### media/com_foos/joomla.asset.json
Link zu einem Script für die Modal Fenster. (https://docs.joomla.org/J4.x:Web_Assets/de)
(wenn der Pfad nicht absolut ist, werden automatisch im Unterverzeichnis js, bzw. css gesucht)

### media/com_foos/js/admin-foos-modal.js
Es folgt der JavaScript Code, der bewirkt, dass beim Anlegen eines Menüpunktes ein Foo-Element auswählbar ist. 

### media/com_foos/js/admin-foos-letter.js
Clientseitige Validierung der Eingaben



## Updates
https://blog.astrid-guenther.de/joomla-update-und-change-logeinrichten/

### foo_update.xml 
Das Tag updates umgibt alle Update-Elemente. Erstelle einen neuen Update-Abschnitt, wenn du eine neue Version veröffentlichst.


## Frontend

### components/com_foos/ src/Controller/DisplayController.php
 ist der Einstiegspunkt für den Model-View-Controller-Teil im Frontend 

### components/com_foos/ src/View/Foo/HtmlView.php 
- Die Ansicht: Es gibt mehrere Dateien, die zusammenarbeiten, um die Ansicht im Frontend zu generieren. Beispielsweise der Controller, der sie aufruft.

### components/com_foos/ tmpl/foo/default.php
Die Datei components/com\_foos/ tmpl/foo/default.php beinhaltet den Text, welchen wir anzeigen. 

### components/com_foos/ tmpl/foo/default.xml
Anlegen von Menüpunkten

### components/com_foos/ src/Model/FooModel.php
Model: Du erweiterst die Joomla Klasse BaseDatabaseModel. Implementiere dann nur das, was du speziell einsetzt. 
hier: getMsg()

### components/com_foos/ src/View/Foo/HtmlView.php
View:  Die Datenberechnung geschieht im Model. Die Gestaltung der Daten übernimmt die View.
$this->get('Msg') statt getMsg()

### components/com_foos/ tmpl/foo/default.php
Über das Template geben wir die Daten aus. Hier wird später alles in HTML-Tags verpackt.





## Sprachdateien

### administrator/components/ com_foos/language/en-GB/com_foos.ini
#### administrator/components/ com_foos/ language/de-DE/com_foos.ini
 die deutsche Sprachversion für den Administrationsbereich

### administrator/components/ com_foos/ language/en-GB/com_foos.sys.ini
#### administrator/components/com_foos/ language/de-DE/com_foos.sys.ini
Die sys.ini wird in erster Linie bei der Installation und für die Anzeige der Menüpunkte verwendet und die ini für alles andere.
 die deutsche Sprachversion für den Administrationsbereich für Menüs und Installation
(administrator/components/ com_foos/ language/en-GB/com_foos.sys.ini)


### components/com_foos/language/en-GB/com_foos.ini
#### components/com_foos/language/de-DE/com_foos.ini
Im Frontend gibt es lediglich die .ini - also keine sys.ini

## Datenbank

### administrator/components/ com_foos/ sql/install.mysql.utf8.sql
Wir legen eine Datei an, die SQL-Befehle für das Erstellen der Datenbanktabelle enthält. Damit diese Statements aufgerufen werden, fügen wir den Namen der Datei später im Manifest ein.

### administrator/components/ com_foos/ sql/uninstall.mysql.utf8.sql
Damit Joomla im Falle einer Deinstallation keine unnötigen Daten enthält, erstellen wir eine Datei, die den SQL-Befehl zum Löschen der Datenbanktabelle beinhaltet. Diese wird beim Deinstallieren automatisch ausgeführt.

### administrator/components/ com_foos/ src/Model/FoosModel.php
ein Model für den Administrationsbereich. Holt Daten aus der Datenebank

### administrator/components/ com_foos/ sql/updates/mysql/VERSIONSNUMMER.sql
z.B.: administrator/components/ com_foos/ sql/updates/mysql/10.0.0.sql


# Sonstiges

## Text Tricks

### Text::sprintf
Die Funktion Text::sprintf sorgt dafür, dass du den Text nicht kompliziert im Programmcode zusammensetzten musst. Gib anstelle der Variablen in der Sprachdatei ein Zeichen mit dem Prefix % ein. Beispielsweise kannst du %s verwenden.

### Text::plural('COM_FOOS_N_ITEMS_FEATURED', count($ids));
Jenachdem, ob count($ids) den Wert 1 oder 2 hat wird der Sprachstring COM_FOOS_N_ ITEMS_FEATURED_1 oder COM_FOOS_N_ ITEMS_FEATURED_2 verwendet. Hat count($ids) weder den Wert 1 noch 2, wird COM_FOOS_N_ ITEMS_FEATURED als Rückfallposition herangezogen.

### Text::_('COM_FOOS_NAME')
Zugriff auf name

### Globale Sprachstrings
globalen Sprachstrings JNO und JYES einsetzten. Alle Texte, die Joomla in der Datei language/en-GB/joomla.ini übersetzt, sind global verwendbar.

## Zugriff auf Funktionen
https://blog.astrid-guenther.de/joomla-acl/
https://docs.joomla.org/J3.x:Access_Control_List_Tutorial/de
$canDo = ContentHelper::getActions('com_foos'); 
if ($canDo->get('core.create'))

## CDATA
Der Begriff CDATA wird in der Auszeichnungssprache XML für verschiedene Zwecke verwendet. Er zeigt an, dass es sich bei einem bestimmten Teil des Dokuments um allgemeine Zeichen handelt und nicht um Programmcode mit einer spezifischeren, begrenzten Struktur. Der CDATA-Abschnitt kann Auszeichnungszeichen (<, > und &) enthalten. Diese werden vom Parser nicht weiter interpretiert. Die Verwendung von Entitäten wie &lt; und &amp; ist nicht notwendig.

## Zugriff auf Datenbanke mit JDatabase
 https://docs.joomla.org/Accessing_the_database_using_JDatabase/de

## Dokumentations und Kommentarstil
https://developer.joomla.org/coding-standards/docblocks.html
Erweiterung:  PHPDoc Generator


# Wichtige Namesspaces und Funktionen

## Logging
use Joomla\CMS\Log\Log;

    Log::add(
                    Text::sprintf('JLIB_INSTALLER_MINIMUM_PHP', $this->minimumPHPVersion),
                    Log::WARNING,
                    'jerror'
                );

## Database
use Joomla\CMS\Factory;

	$db    = Factory::getDbo();
		$query = $db->getQuery(true);

		// Select the admin user ID
		$query
			->clear()
			->select($db->quoteName('u') . '.' . $db->quoteName('id'))
			->from($db->quoteName('#__users', 'u'))
			->join(
				'LEFT',
				$db->quoteName('#__user_usergroup_map', 'map')
				. ' ON ' . $db->quoteName('map') . '.' . $db->quoteName('user_id')
				. ' = ' . $db->quoteName('u') . '.' . $db->quoteName('id')
			)
			->join(
				'LEFT',
				$db->quoteName('#__usergroups', 'g')
				. ' ON ' . $db->quoteName('map') . '.' . $db->quoteName('group_id')
				. ' = ' . $db->quoteName('g') . '.' . $db->quoteName('id')
			)
			->where(
				$db->quoteName('g') . '.' . $db->quoteName('title')
				. ' = ' . $db->quote('Super Users')
			);

		$db->setQuery($query);
		$id = $db->loadResult();