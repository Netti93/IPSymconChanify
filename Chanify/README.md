# Chanify

### 1. Konfiguration

| Name                     | Typ       | Beschreibung                         |
| :----------------------: | :-------: | :----------------------------------: |
| Server URL               | string    | URL des Chanify-Servers               |
| Application Token        | string    | App-Token zur Authentifizierung      |

### 2. Funktionsreferenz

#### Nachricht senden
`boolean CHANIFY_SendMessage(integer $InstanzID, string $message, string $title, string $copy, integer $autocopy, integer $sound, integer $priority, string $interruptionlevel);`  
sendet eine Nachricht bestehend aus einem Titel und dem Nachrichtentext. Die Parameter $InstanzID und $message sind verpflichtend, alle anderen sind optional. Mehr Infos können in der [API-Dokumentation](https://github.com/chanify/chanify#http-api) gefunden werden.

Beispiel:
```php
CHANIFY_SendMessage(12345, 'Eine Nachricht mit vielen Worten.', 'Der Titel', 'Copy-Text', 1, 0, 5, 'active');
```

#### Testnachricht senden
`boolen CHANIFY_SendTestMessage(integer $InstanzID);`  
sendet eine vordefinierte Testnachricht mit Priorität 0. Diese Funktion wird auf der Konfigurationsseite vom Button "Sende Testnachricht" verwendet.