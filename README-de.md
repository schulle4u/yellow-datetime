<p align="right"><a href="README-de.md">Deutsch</a> &nbsp; <a href="README.md">English</a></p>

# Datetime 0.9.0

Zeigt Datum und Uhrzeit in Seiten an.

<p align="center"><img src="SCREENSHOT.png" alt="Bildschirmfoto"></p>

## Wie man eine Erweiterung installiert

[ZIP-Datei herunterladen](https://github.com/schulle4u/yellow-datetime/archive/refs/heads/main.zip) und in dein `system/extensions`-Verzeichnis kopieren. [Weitere Informationen zu Erweiterungen](https://github.com/annaesvensson/yellow-update/tree/main/README-de.md).

## Wie man Informationen zu Datum und Uhrzeit anzeigt

Erstelle eine `[datetime]`-Abkürzung. Das folgende optionale Argument ist verfügbar: 

`Format` = Datums- und Zeitformat  

Die folgenden sprachspezifischen Vorlagen sind als Format verfügbar: 

`timeshort` = Kurzes Zeitformat, Stunden und Minuten  
`timemedium` = Mittleres Zeitformat, Stunden, Minuten und Sekunden  
`timelong` = Langes Zeitformat, Stunden, Minuten, Sekunden und Zeitzone  
`dateshort` = Kurzes Datumsformat, Monat und Jahr  
`datemedium` = Mittleres Datumsformat, numerischer Tag, Monat und Jahr  
`datelong` = Langes Datumsformat, Datum und Zeit  

Mit dieser Inline-Abkürzung können Informationen zu Datum und Uhrzeit in deinen Seiten angezeigt werden. Es kann nützlich sein, um deine Besucher abwechslungsreicher zu begrüßen oder um das Jahr in deiner Copyright-Notiz automatisch aktuell zu halten. Verwende zum Anpassen der Ausgabe eine der Formatvorlagen oder die von PHP unterstützten [Datums- und Zeitformate](https://www.php.net/manual/de/datetime.formats.php). 

## Beispiele

Allgemeine Verwendung: 

    Datum und Uhrzeit: [datetime]

Abweichendes Format:

    Datum: [datetime datemedium]

Geteilte Footer-Seite mit Copyrighthinweis: 

```
---
Title: Footer
Status: shared
--- 
Copyright &copy; 2013-[datetime Y] Datenstrom
```

## Entwickler

Steffen Schultz. [Hilfe finden](https://datenstrom.se/de/yellow/help/).
