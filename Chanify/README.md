# Chanify

### 1. Konfiguration

| Name                     | Typ       | Beschreibung                         |
| :----------------------: | :-------: | :----------------------------------: |
| Server URL               | string    | URL des Chanify-Servers               |
| Application Token        | string    | App-Token zur Authentifizierung      |

### 2. Funktionsreferenz

#### Einfache Nachricht senden
`boolean CHANIFY_SendMessageEx(int $InstanzID, string $message, string $title, string $copy, int $autocopy, int $sound, int $priority, string $interruptionlevel);`  
sendet eine Nachricht bestehend aus einem (optionalen) Titel und dem Nachrichtentext.

Beispiel:
```php
CHANIFY_SendMessage(12345, 'Eine Nachricht mit vielen Worten.', 'Der Titel'); # mit Titel
CHANIFY_SendMessage(12345, 'Eine Nachricht mit noch etwas mehr Worten.', ''); # ohne Titel
```

#### Detaillierte Nachricht senden
`boolean CHANIFY_SendMessageEx(int $InstanzID, string $message, string $title, string $copy, int $autocopy, int $sound, int $priority, string $interruptionlevel);`  
sendet eine Nachricht bestehend aus einem Titel und dem Nachrichtentext. Die Parameter $InstanzID und $message sind verpflichtend, alle anderen sind optional (müssen beim Aufruf jedoch trotzdem als NULL angegeben werden, da Symcon keine optionalen Parameter in Instanz-Funktionen unterstützt). Mehr Infos können in der [API-Dokumentation](https://github.com/chanify/chanify#http-api) gefunden werden.

Beispiel:
```php
CHANIFY_SendMessageEx(12345, 'Eine Nachricht mit vielen Worten.', 'Der Titel', 'Copy-Text', 1, 0, 5, 'active');
```

#### Testnachricht senden
`boolen CHANIFY_SendTestMessage(int $InstanzID);`  
sendet eine vordefinierte Testnachricht. Diese Funktion wird auf der Konfigurationsseite vom Button "Sende Testnachricht" verwendet.