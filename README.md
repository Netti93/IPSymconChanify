# Chanify

[![IPS-Version](https://img.shields.io/badge/Symcon_Version-5.3+-red.svg)](https://www.symcon.de/service/dokumentation/entwicklerbereich/sdk-tools/sdk-php/)
![Code](https://img.shields.io/badge/Code-PHP-blue.svg)
[![License](https://img.shields.io/badge/License-CC%20BY--NC--SA%204.0-green.svg)](https://creativecommons.org/licenses/by-nc-sa/4.0/)

### Inhaltsverzeichnis

1. [Funktionsumfang](#1-funktionsumfang)
2. [Vorraussetzungen](#2-vorraussetzungen)
3. [Software-Installation](#3-software-installation)
4. [Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
5. [Konfiguration](#5-konfiguration)
6. [PHP-Befehlsreferenz](#6-php-befehlsreferenz)
7. [Anhang](#7-anhang)
8. [Versionshistorie](#8-versionshistorie)

### 1. Funktionsumfang

* Das Modul ermöglicht das Senden von Benachrichtigungen via [Chanify](https://www.chanify.net).

### 2. Vorraussetzungen

- IP-Symcon ab Version 5.3  
(es wurde meinerseits jedoch nur mit Version 6.1 getestet)
- Ein von der IP-Symcon Instanz aus erreichbarer Chanify-Server
- Ein gültiger App-Token von selbigem Chanify-Server

### 3. Software-Installation

* Über den Module Store das 'Chanify'-Modul installieren.
* Alternativ über das Module Control folgende URL hinzufügen:  
https://github.com/Netti93/IPSymconChanify

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'Chanify'-Modul mithilfe des Schnellfilters gefunden werden.  
	- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

### 5. Konfiguration

siehe [Modulbeschreibung](Chanify/README.md#1-konfiguration)

### 6. PHP-Befehlsreferenz

siehe [Modulbeschreibung](Chanify/README.md#2-funktionsreferenz)

### 7. Anhang

GUIDs

- Bibliothek: `{3DD46E9F-6295-0F2F-56B9-3CB3D2CA4A41}`
- Module:
  - Chanify: `{B7C81853-85F7-7160-53AD-6687D68895D4}`

Verweise:
- https://www.chanify.net

### 8. Versionshistorie

- 1.0 @ 29.04.2022
  - Initiale Version
